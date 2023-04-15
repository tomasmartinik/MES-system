/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

var Espo = {};
window.Espo = Espo;
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

(function (_, $) {

    let root = this;

    if (!root.Espo) {
        root.Espo = {};
    }

    /**
     * A callback with resolved dependencies passed as parameters.
     *   Should return a value to define a module.
     *
     * @callback Espo.Loader~requireCallback
     * @param {...any} arguments Resolved dependencies.
     * @returns {*}
     */

    /**
     * A loader. Used for loading and defining AMD modules, resource loading.
     * Handles caching.
     *
     * @class
     * @param {?module:cache.Class} [cache=null]
     * @param {?int} [_cacheTimestamp=null]
     */
    let Loader = function (cache, _cacheTimestamp) {
        this._cacheTimestamp = _cacheTimestamp || null;
        this._cache = cache || null;
        this._libsConfig = {};
        this._loadCallbacks = {};
        this._pathsBeingLoaded = {};
        this._dataLoaded = {};
        this._classMap = {};
        this._loadingSubject = null;
        this._responseCache = null;
        this._basePath = '';

        this._internalModuleList = [];
        this._internalModuleMap = {};
        this._isDeveloperMode = false;

        this._baseUrl = window.location.origin + window.location.pathname;

        this._isDeveloperModeIsSet = false;
        this._basePathIsSet = false;
        this._cacheIsSet = false;
        this._responseCacheIsSet = false;
        this._internalModuleListIsSet = false;

        this._addLibsConfigCallCount = 0;
        this._addLibsConfigCallMaxCount = 2;
    };

    _.extend(Loader.prototype, /** @lends Loader.prototype */{

        /**
         * @param {boolean} isDeveloperMode
         */
        setIsDeveloperMode: function (isDeveloperMode) {
            if (this._isDeveloperModeIsSet) {
                throw new Error('Is-Developer-Mode is already set.');
            }

            this._isDeveloperMode = isDeveloperMode;
            this._isDeveloperModeIsSet = true;
        },

        /**
         * @param {string} basePath
         */
        setBasePath: function (basePath) {
            if (this._basePathIsSet) {
                throw new Error('Base path is already set.');
            }

            this._basePath = basePath;
            this._basePathIsSet = true;
        },

        /**
         * @returns {Number}
         */
        getCacheTimestamp: function () {
            return this._cacheTimestamp;
        },

        /**
         * @param {Number} cacheTimestamp
         */
        setCacheTimestamp: function (cacheTimestamp) {
            this._cacheTimestamp = cacheTimestamp;
        },

        /**
         * @param {module:cache.Class} cache
         */
        setCache: function (cache) {
            if (this._cacheIsSet) {
                throw new Error('Cache is already set');
            }

            this._cache = cache;
            this._cacheIsSet = true;
        },

        /**
         * @param {Cache} responseCache
         */
        setResponseCache: function (responseCache) {
            if (this._responseCacheIsSet) {
                throw new Error('Response-Cache is already set');
            }

            this._responseCache = responseCache;
            this._responseCacheIsSet = true;
        },

        /**
         * @param {string[]} internalModuleList
         */
        setInternalModuleList: function (internalModuleList) {
            if (this._internalModuleListIsSet) {
                throw new Error('Internal-module-list is already set');
            }

            this._internalModuleList = internalModuleList;
            this._internalModuleMap = {};
            this._internalModuleListIsSet = true;
        },

        /**
         * @private
         */
        _getClass: function (name) {
            if (name in this._classMap) {
                return this._classMap[name];
            }

            return false;
        },

        /**
         * @private
         */
        _setClass: function (name, o) {
            this._classMap[name] = o;
        },

        /**
         * @private
         */
        _nameToPath: function (name) {
            if (name.indexOf(':') === -1) {
                return 'client/src/' + name + '.js';
            }

            let arr = name.split(':');
            let namePart = arr[1];
            let modulePart = arr[0];

            if (modulePart === 'custom') {
                return 'client/custom/src/' + namePart + '.js' ;
            }

            if (this._isModuleInternal(modulePart)) {
                return 'client/modules/' + modulePart + '/src/' + namePart + '.js';
            }

            return 'client/custom/modules/' + modulePart + '/src/' + namePart + '.js';
        },

        /**
         * @private
         * @param {string} script
         * @param {string} name
         * @param {string} path
         */
        _execute: function (script, name, path) {
            /** @var {?string} */
            let module = null;

            let colonIndex = name.indexOf(':');

            if (colonIndex > 0) {
                module = name.substring(0, colonIndex);
            }

            let noStrictMode = false;

            if (!module && name.indexOf('lib!') === 0) {
                noStrictMode = true;

                let realName = name.substring(4);

                let libsData = this._libsConfig[realName] || {};

                if (!this._isDeveloperMode) {
                    if (libsData.sourceMap) {
                        let realPath = path.split('?')[0];

                        script += `\n//# sourceMappingURL=${this._baseUrl + realPath}.map`;
                    }
                }

                if (libsData.exportsTo === 'window' && libsData.exportsAs) {
                    script += `\nwindow.${libsData.exportsAs} = ` +
                        `window.${libsData.exportsAs} || ${libsData.exportsAs}\n`;
                }
            }

            script += `\n//# sourceURL=${this._baseUrl + path}`;

            // For bc.
            if (module && module !== 'crm') {
                noStrictMode = true;
            }

            if (noStrictMode) {
                (new Function(script)).call(root);

                return;
            }

            (new Function("'use strict'; " + script))();
        },

        /**
         * @private
         */
        _executeLoadCallback: function (subject, o) {
            if (subject in this._loadCallbacks) {
                this._loadCallbacks[subject].forEach(callback => callback(o));

                delete this._loadCallbacks[subject];
            }
        },

        /**
         * Define a module.
         *
         * @param {string} subject A module name to be defined.
         * @param {string[]} dependency A dependency list.
         * @param {Espo.Loader~requireCallback} callback A callback with resolved dependencies
         *   passed as parameters. Should return a value to define the module.
         */
        define: function (subject, dependency, callback) {
            if (subject) {
                subject = this._normalizeClassName(subject);
            }

            if (this._loadingSubject) {
                subject = subject || this._loadingSubject;

                this._loadingSubject = null;
            }

            if (!dependency) {
                this._defineProceed(callback, subject, []);

                return;
            }

            this.require(dependency, (...arguments) => {
                this._defineProceed(callback, subject, arguments);
            });
        },

        /**
         * @private
         */
        _defineProceed: function (callback, subject, args) {
            let o = callback.apply(root, args);

            if (!o) {
                if (this._cache) {
                    this._cache.clear('a', subject);
                }

                throw new Error("Could not load '" + subject + "'");
            }

            this._setClass(subject, o);
            this._executeLoadCallback(subject, o);
        },

        /**
         * Require a module or multiple modules.
         *
         * @param {string|string[]} subject A module or modules to require.
         * @param {Espo.Loader~requireCallback} callback A callback with resolved dependencies.
         * @param {Function|null} [errorCallback] An error callback.
         */
        require: function (subject, callback, errorCallback) {
            let list;

            if (Object.prototype.toString.call(subject) === '[object Array]') {
                list = subject;

                list.forEach((item, i) => {
                    list[i] = this._normalizeClassName(item);
                });
            }
            else if (subject) {
                subject = this._normalizeClassName(subject);

                list = [subject];
            }
            else {
                list = [];
            }

            let totalCount = list.length;

            if (totalCount === 1) {
                this._load(list[0], callback, errorCallback);

                return;
            }

            if (totalCount) {
                let readyCount = 0;
                let loaded = {};

                list.forEach(name => {
                    this._load(name, c => {
                        loaded[name] = c;

                        readyCount++;

                        if (readyCount === totalCount) {
                            let args = [];

                            for (let i in list) {
                                args.push(loaded[list[i]]);
                            }

                            callback.apply(root, args);
                        }
                    });
                });

                return;
            }

            callback.apply(root);
        },

        /**
         * @private
         */
        _convertCamelCaseToHyphen: function (string) {
            if (string === null) {
                return string;
            }

            return string.replace(/([a-z])([A-Z])/g, '$1-$2').toLowerCase();
        },

        /**
         * @private
         */
        _normalizeClassName: function (name) {
            if (~name.indexOf('.') && !~name.indexOf('!')) {
                console.warn(
                    name + ': ' +
                    'class name should use slashes for a directory separator and hyphen format.'
                );
            }

            if (!!/[A-Z]/.exec(name[0])) {
                if (name.indexOf(':') !== -1) {
                    let arr = name.split(':');
                    let modulePart = arr[0];
                    let namePart = arr[1];

                    return this._convertCamelCaseToHyphen(modulePart) + ':' +
                        this._convertCamelCaseToHyphen(namePart)
                            .split('.')
                            .join('/');
                }

                return this._convertCamelCaseToHyphen(name).split('.').join('/');
            }

            return name;
        },

        /**
         * @private
         */
        _addLoadCallback: function (name, callback) {
            if (!(name in this._loadCallbacks)) {
                this._loadCallbacks[name] = [];
            }

            this._loadCallbacks[name].push(callback);
        },

        /**
         * @private
         */
        _load: function (name, callback, errorCallback) {
            let dataType, type, path, exportsTo, exportsAs;

            let realName = name;

            let noAppCache = false;

            if (name.indexOf('lib!') === 0) {
                dataType = 'script';
                type = 'lib';

                realName = name.substr(4);
                path = realName;

                exportsTo = 'window';
                exportsAs = realName;

                if (realName in this._libsConfig) {
                    let libData = this._libsConfig[realName] || {};

                    path = libData.path || path;

                    if (this._isDeveloperMode) {
                        path = libData.devPath || path;
                    }

                    exportsTo = libData.exportsTo || exportsTo;
                    exportsAs = libData.exportsAs || exportsAs;
                }

                if (path.indexOf(':') !== -1) {
                    console.error(`Not allowed path '${path}'.`);
                    throw new Error();
                }

                noAppCache = true;

                let obj = this._fetchObject(exportsTo, exportsAs);

                if (obj) {
                    callback(obj);

                    return;
                }
            }
            else if (name.indexOf('res!') === 0) {
                dataType = 'text';
                type = 'res';

                realName = name.substr(4);
                path = realName;

                if (path.indexOf(':') !== -1) {
                    console.error(`Not allowed path '${path}'.`);
                    throw new Error();
                }
            }
            else {
                dataType = 'script';
                type = 'class';

                if (!name || name === '') {
                    throw new Error("Can not load empty class name");
                }

                let classObj = this._getClass(name);

                if (classObj) {
                    callback(classObj);

                    return;
                }

                path = this._nameToPath(name);
            }

            if (name in this._dataLoaded) {
                callback(this._dataLoaded[name]);

                return;
            }

            let dto = {
                name: name,
                type: type,
                dataType: dataType,
                noAppCache: noAppCache,
                path: path,
                callback: callback,
                errorCallback: errorCallback,
                exportsAs: exportsAs,
                exportsTo: exportsTo,
            };

            if (this._cache && !this._responseCache) {
                let cached = this._cache.get('a', name);

                if (cached) {
                    this._processCached(dto, cached);

                    return;
                }
            }

            if (path in this._pathsBeingLoaded) {
                this._addLoadCallback(name, callback);

                return;
            }

            this._pathsBeingLoaded[path] = true;

            let useCache = false;

            if (this._cacheTimestamp) {
                useCache = true;

                let sep = (path.indexOf('?') > -1) ? '&' : '?';

                path += sep + 'r=' + this._cacheTimestamp;
            }

            let url = this._basePath + path;

            dto.path = path;
            dto.url = url;
            dto.useCache = useCache;

            if (!this._responseCache) {
                this._processRequest(dto);

                return;
            }

            this._responseCache
                .match(new Request(url))
                .then(response => {
                    if (!response) {
                        this._processRequest(dto);

                        return;
                    }

                    response
                        .text()
                        .then(cached => {
                            this._handleResponse(dto, cached);
                        });
                });
        },

        /**
         * @private
         */
        _fetchObject: function (exportsTo, exportsAs) {
            let from = root;

            if (exportsTo === 'window') {
                from = root;
            }
            else {
                for (let item of exportsTo.split('.')) {
                    from = from[item];

                    if (typeof from === 'undefined') {
                        return null;
                    }
                }
            }

            if (exportsAs in from) {
                return from[exportsAs];
            }
        },

        /**
         * @private
         */
        _processCached: function (dto, cached) {
            let name = dto.name;
            let callback = dto.callback;
            let type = dto.type;
            let dataType = dto.dataType;
            let exportsAs = dto.exportsAs;
            let exportsTo = dto.exportsTo;

            if (type === 'class') {
                this._loadingSubject = name;
            }

            if (dataType === 'script') {
                this._execute(cached, name, dto.path);
            }

            if (type === 'class') {
                let classObj = this._getClass(name);

                if (classObj) {
                    callback(classObj);

                    return;
                }

                this._addLoadCallback(name, callback);

                return;
            }

            let data = cached;

            if (exportsTo && exportsAs) {
                data = this._fetchObject(exportsTo, exportsAs);
            }

            this._dataLoaded[name] = data;

            callback(data);
        },

        /**
         * @private
         */
        _processRequest: function (dto) {
            let name = dto.name;
            let url = dto.url;
            let errorCallback = dto.errorCallback;
            let path = dto.path;
            let useCache = dto.useCache;
            let noAppCache = dto.noAppCache;

            $.ajax({
                type: 'GET',
                cache: useCache,
                dataType: 'text',
                mimeType: 'text/plain',
                local: true,
                url: url,
            })
            .then(response => {
                if (this._cache && !noAppCache && !this._responseCache) {
                    this._cache.set('a', name, response);
                }

                if (this._responseCache) {
                    this._responseCache.put(url, new Response(response));
                }

                this._handleResponse(dto, response);
            })
            .catch(() => {
                if (typeof errorCallback === 'function') {
                    errorCallback();

                    return;
                }

                throw new Error("Could not load file '" + path + "'");
            });
        },

        /**
         * @private
         */
        _handleResponse: function (dto, response) {
            let name = dto.name;
            let callback = dto.callback;
            let type = dto.type;
            let dataType = dto.dataType;
            let exportsAs = dto.exportsAs;
            let exportsTo = dto.exportsTo;

            this._addLoadCallback(name, callback);

            if (type === 'class') {
                this._loadingSubject = name;
            }

            if (dataType === 'script') {
                this._execute(response, name, dto.path);
            }

            let data;

            if (type === 'class') {
                data = this._getClass(name);

                if (data && typeof data === 'function') {
                    this._executeLoadCallback(name, data);
                }

                return;
            }

            data = response;

            if (exportsTo && exportsAs) {
                data = this._fetchObject(exportsTo, exportsAs);
            }

            this._dataLoaded[name] = data;

            this._executeLoadCallback(name, data);
        },

        /**
         * @param {Object} data
         * @internal
         */
        addLibsConfig: function (data) {
            if (this._addLibsConfigCallCount === this._addLibsConfigCallMaxCount) {
                throw new Error("Not allowed to call addLibsConfig.");
            }

            this._addLibsConfigCallCount++;

            this._libsConfig = _.extend(this._libsConfig, data);
        },

        /**
         * @private
         */
        _isModuleInternal: function (moduleName) {
            if (!(moduleName in this._internalModuleMap)) {
                this._internalModuleMap[moduleName] = this._internalModuleList.indexOf(moduleName) !== -1;
            }

            return this._internalModuleMap[moduleName];
        },

        /**
         * Require a module or multiple modules.
         *
         * @param {string|string[]} subject A module or modules to require.
         * @returns {Promise<unknown>}
         */
        requirePromise: function (subject) {
            return new Promise((resolve, reject) => {
                this.require(
                    subject,
                    () => resolve(),
                    () => reject()
                );
            });
        },
    });

    let loader = new Loader();

    Espo.loader = {

        /**
         * @param {boolean} isDeveloperMode
         * @internal
         */
        setIsDeveloperMode: function (isDeveloperMode) {
            loader.setIsDeveloperMode(isDeveloperMode);
        },

        /**
         * @param {string} basePath
         * @internal
         */
        setBasePath: function (basePath) {
            loader.setBasePath(basePath);
        },

        /**
         * @returns {Number}
         */
        getCacheTimestamp: function () {
            return loader.getCacheTimestamp();
        },

        /**
         * @param {Number} cacheTimestamp
         * @internal
         */
        setCacheTimestamp: function (cacheTimestamp) {
            loader.setCacheTimestamp(cacheTimestamp);
        },

        /**
         * @param {module:cache.Class} cache
         * @internal
         */
        setCache: function (cache) {
            loader.setCache(cache);
        },

        /**
         * @param {Cache} responseCache
         * @internal
         */
        setResponseCache: function (responseCache) {
            loader.setResponseCache(responseCache);
        },

        /**
         * @param {string[]} internalModuleList
         */
        setInternalModuleList: function (internalModuleList) {
            loader.setInternalModuleList(internalModuleList);
        },

        /**
         * Define a module.
         *
         * @param {string} subject A module name to be defined.
         * @param {string[]} dependency A dependency list.
         * @param {Espo.Loader~requireCallback} callback A callback with resolved dependencies
         *   passed as parameters. Should return a value to define the module.
         */
        define: function (subject, dependency, callback) {
            loader.define(subject, dependency, callback);
        },

        /**
         * Require a module or multiple modules.
         *
         * @param {string|string[]} subject A module or modules to require.
         * @param {Espo.Loader~requireCallback} callback A callback with resolved dependencies.
         * @param {Function|null} [errorCallback] An error callback.
         */
        require: function (subject, callback, errorCallback) {
            loader.require(subject, callback, errorCallback);
        },

        /**
         * Require a module or multiple modules.
         *
         * @param {string|string[]} subject A module or modules to require.
         * @returns {Promise<unknown>}
         */
        requirePromise: function (subject) {
            return loader.requirePromise(subject);
        },

        /**
         * @param {Object} data
         * @internal
         */
        addLibsConfig: function (data) {
            loader.addLibsConfig(data);
        },
    };

    /**
     * Require a module or multiple modules.
     *
     * @param {string|string[]} subject A module or modules to require.
     * @param {Espo.Loader~requireCallback} callback A callback with resolved dependencies.
     * @param {Object} [context] A context.
     * @param {Function|null} [errorCallback] An error callback.
     */
    root.require = Espo.require = function (subject, callback, context, errorCallback) {
        if (context) {
            callback = callback.bind(context);
        }

        loader.require(subject, callback, errorCallback);
    };

    /**
     * Define an [AMD](https://github.com/amdjs/amdjs-api/blob/master/AMD.md) module.
     *
     * 3 signatures:
     * 1. `(callback)` – Unnamed, no dependencies.
     * 2. `(dependencyList, callback)` – Unnamed, with dependencies.
     * 3. `(moduleName, dependencyList, callback)` – Named.
     *
     * @param {string|string[]|Espo.Loader~requireCallback} arg1 A module name to be defined,
     *   a dependency list or a callback.
     * @param {string[]|Espo.Loader~requireCallback} [arg2] A dependency list or a callback with resolved
     *   dependencies.
     * @param {Espo.Loader~requireCallback} [arg3] A callback with resolved dependencies.
     */
    root.define = Espo.define = function (arg1, arg2, arg3) {
        let subject = null;
        let dependency = null;
        let callback;

        if (typeof arg1 === 'function') {
            callback = arg1;
        }
        else if (typeof arg1 !== 'undefined' && typeof arg2 === 'function') {
            dependency = arg1;
            callback = arg2;
        }
        else {
            subject = arg1;
            dependency = arg2;
            callback = arg3;
        }

        loader.define(subject, dependency, callback);
    };

}).call(window, _, $);
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

Espo.loader.addLibsConfig(
    {
        "espo": {
            "exportsTo": "window",
            "exportsAs": "Espo"
        },
        "jquery": {
            "exportsTo": "window",
            "exportsAs": "$"
        },
        "backbone": {
            "exportsTo": "window",
            "exportsAs": "Backbone"
        },
        "bullbone": {
            "exportsTo": "window",
            "exportsAs": "Bull"
        },
        "handlebars": {
            "exportsTo": "window",
            "exportsAs": "Handlebars"
        },
        "underscore": {
            "exportsTo": "window",
            "exportsAs": "_"
        },
        "marked": {
            "exportsTo": "window",
            "exportsAs": "marked"
        },
        "dompurify": {
            "exportsTo": "window",
            "exportsAs": "DOMPurify"
        }
    }
);
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

/**
 * @module exceptions
 */
define('exceptions', [], function () {
    Espo.Exceptions = Espo.Exceptions || {};

    /**
     * An access denied exception.
     *
     * @param {string} [message] A message.
     * @class
     */
    Espo.Exceptions.AccessDenied = function (message) {
        this.message = message;

        Error.apply(this, arguments);
    };

    Espo.Exceptions.AccessDenied.prototype = new Error();
    Espo.Exceptions.AccessDenied.prototype.name = 'AccessDenied';

    /**
     * A not found exception.
     *
     * @param {string} [message] A message.
     * @class
     */
    Espo.Exceptions.NotFound = function (message) {
        this.message = message;

        Error.apply(this, arguments);
    };

    Espo.Exceptions.NotFound.prototype = new Error();
    Espo.Exceptions.NotFound.prototype.name = 'NotFound';

    return Espo.Exceptions;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

/**
 * @module utils
 */
define('utils', [], function () {

    const IS_MAC = /Mac/.test(navigator.userAgent);

    /**
     * Utility functions.
     */
    Espo.Utils = {

        /**
         * Process a view event action.
         *
         * @param {module:view.Class} viewObject A view.
         * @param {JQueryKeyEventObject} e An event.
         * @param {string} [action] An action. If not specified, will be fetched from a target element.
         * @param {string} [handler] A handler name.
         */
        handleAction: function (viewObject, e, action, handler) {
            let $target = $(e.currentTarget);

            action = action || $target.data('action');

            let fired = false;

            if (!action) {
                return;
            }

            if (e.ctrlKey || e.metaKey || e.shiftKey) {
                let href = $target.attr('href');

                if (href && href !== 'javascript:') {
                    return;
                }
            }

            let data = $target.data();
            let method = 'action' + Espo.Utils.upperCaseFirst(action);

            handler = handler || data.handler;

            if (typeof viewObject[method] === 'function') {
                viewObject[method].call(viewObject, data, e);

                e.preventDefault();
                e.stopPropagation();

                fired = true;
            }
            else if (handler) {
                e.preventDefault();
                e.stopPropagation();

                fired = true;

                require(handler, function (Handler) {
                    let handler = new Handler(viewObject);

                    handler[method].call(handler, data, e);
                });
            }

            if (!fired) {
                return;
            }

            let $dropdown = $target.closest('.dropdown-menu');

            if (!$dropdown.length) {
                return;
            }

            let $dropdownToggle = $dropdown.parent().find('[data-toggle="dropdown"]');

            if (!$dropdownToggle.length) {
                return;
            }

            let isDisabled = false;

            if ($dropdownToggle.attr('disabled')) {
                isDisabled = true;

                $dropdownToggle.removeAttr('disabled').removeClass('disabled');
            }

            $dropdownToggle.dropdown('toggle');

            if (isDisabled) {
                $dropdownToggle.attr('disabled', 'disabled').addClass('disabled');
            }
        },

        /**
         * @typedef {Object} module:utils~ActionAvailabilityDefs
         *
         * @property {string|null} [configCheck] A config path to check. Path items are separated
         *   by the dot. If a config value is not empty, then the action is allowed.
         *   The `!` prefix reverses the check.
         */

        /**
         * Check action availability.
         *
         * @param {module:view-helper.Class} helper A view helper.
         * @param {module:utils~ActionAvailabilityDefs} item Definitions.
         * @returns {boolean}
         */
        checkActionAvailability: function (helper, item) {
            let config = helper.config;

            if (item.configCheck) {
                let configCheck = item.configCheck;

                let opposite = false;

                if (configCheck.substring(0, 1) === '!') {
                    opposite = true;

                    configCheck = configCheck.substring(1);
                }

                let configCheckResult = config.getByPath(configCheck.split('.'));

                if (opposite) {
                    configCheckResult = !configCheckResult;
                }

                if (!configCheckResult) {
                    return false;
                }
            }

            return true;
        },

        /**
         * @typedef {Object} module:utils~ActionAccessDefs
         *
         * @property {'create'|'read'|'edit'|'stream'|'delete'|null} acl An ACL action to check.
         * @property {string|null} [aclScope] A scope to check.
         * @property {string|null} [scope] Deprecated. Use `aclScope`.
         */

        /**
         * Check access to an action.
         *
         * @param {module:acl-manager.Class} acl An ACL manager.
         * @param {string|module:model.Class|null} [obj] A scope or a model.
         * @param {module:utils~ActionAccessDefs} item Definitions.
         * @param {boolean} [isPrecise=false] To return `null` if not enough data is set in a model.
         *   E.g. the `teams` field is not yet loaded.
         * @returns {boolean|null}
         */
        checkActionAccess: function (acl, obj, item, isPrecise) {
            let hasAccess = true;

            if (item.acl) {
                if (!item.aclScope) {
                    if (obj) {
                        if (typeof obj === 'string' || obj instanceof String) {
                            hasAccess = acl.check(obj, item.acl);
                        }
                        else {
                            hasAccess = acl.checkModel(obj, item.acl, isPrecise);
                        }
                    }
                    else {
                        hasAccess = acl.check(item.scope, item.acl);
                    }
                }
                else {
                    hasAccess = acl.check(item.aclScope, item.acl);
                }
            }
            else if (item.aclScope) {
                hasAccess = acl.checkScope(item.aclScope);
            }

            return hasAccess;
        },

        /**
         * @typedef {Object} module:utils~AccessDefs
         *
         * @property {'create'|'read'|'edit'|'stream'|'delete'|null} action An ACL action to check.
         * @property {string|null} [scope] A scope to check.
         * @property {string[]} [portalIdList] A portal ID list. To check whether a user in one of portals.
         * @property {string[]} [teamIdList] A team ID list. To check whether a user in one of teams.
         * @property {boolean} [isPortalOnly=false] Allow for portal users only.
         * @property {boolean} [inPortalDisabled=false] Disable for portal users.
         * @property {boolean} [isAdminOnly=false] Allow for admin users only.
         */

        /**
         * Check access to an action.
         *
         * @param {module:utils~AccessDefs[]} dataList List of definitions.
         * @param {module:acl-manager.Class} acl An ACL manager.
         * @param {module:models/user.Class} user A user.
         * @param {module:model.Class|null} [entity] A model.
         * @param {boolean} [allowAllForAdmin=false] Allow all for an admin.
         * @returns {boolean}
         */
        checkAccessDataList: function (dataList, acl, user, entity, allowAllForAdmin) {
            if (!dataList || !dataList.length) {
                return true;
            }

            for (var i in dataList) {
                var item = dataList[i];

                if (item.scope) {
                    if (item.action) {
                        if (!acl.check(item.scope, item.action)) {
                            return false;
                        }
                    } else {
                        if (!acl.checkScope(item.scope)) {
                            return false;
                        }
                    }
                } else if (item.action) {
                    if (entity) {
                        if (!acl.check(entity, item.action)) {
                            return false;
                        }
                    }
                }

                if (item.teamIdList) {
                    if (user && !(allowAllForAdmin && user.isAdmin())) {
                        var inTeam = false;

                        user.getLinkMultipleIdList('teams').forEach(teamId => {
                            if (~item.teamIdList.indexOf(teamId)) {
                                inTeam = true;
                            }
                        });

                        if (!inTeam) {
                            return false;
                        }
                    }
                }

                if (item.portalIdList) {
                    if (user && !(allowAllForAdmin && user.isAdmin())) {
                        var inPortal = false;

                        user.getLinkMultipleIdList('portals').forEach(portalId => {
                            if (~item.portalIdList.indexOf(portalId)) {
                                inPortal = true;
                            }
                        });

                        if (!inPortal) {
                            return false;
                        }
                    }
                }

                if (item.isPortalOnly) {
                    if (user && !(allowAllForAdmin && user.isAdmin())) {
                        if (!user.isPortal()) {
                            return false;
                        }
                    }
                }
                else if (item.inPortalDisabled) {
                    if (user && !(allowAllForAdmin && user.isAdmin())) {
                        if (user.isPortal()) {
                            return false;
                        }
                    }
                }

                if (item.isAdminOnly) {
                    if (user) {
                        if (!user.isAdmin()) {
                            return false;
                        }
                    }
                }
            }

            return true;
        },

        /**
         * @private
         * @param {string} string
         * @param {string} p
         * @returns {string}
         */
        convert: function (string, p) {
            if (string === null) {
                return string;
            }

            var result = string;

            switch (p) {
                case 'c-h':
                case 'C-h':
                    result = Espo.Utils.camelCaseToHyphen(string);

                    break;

                case 'h-c':
                    result = Espo.Utils.hyphenToCamelCase(string);

                    break;

                case 'h-C':
                    result = Espo.Utils.hyphenToUpperCamelCase(string);

                    break;
            }

            return result;
        },

        /**
         * Is object.
         *
         * @param {*} obj What to check.
         * @returns {boolean}
         */
        isObject: function (obj) {
            if (obj === null) {
                return false;
            }

            return typeof obj === 'object';
        },

        /**
         * A shallow clone.
         *
         * @param {*} obj An object.
         * @returns {*}
         */
        clone: function (obj) {
            if (!Espo.Utils.isObject(obj)) {
                return obj;
            }

            return _.isArray(obj) ? obj.slice() : _.extend({}, obj);
        },

        /**
         * A deep clone.
         *
         * @param {*} data An object.
         * @returns {*}
         */
        cloneDeep: function (data) {
            data = Espo.Utils.clone(data);

            if (Espo.Utils.isObject(data) || _.isArray(data)) {
                for (var i in data) {
                    data[i] = this.cloneDeep(data[i]);
                }
            }

            return data;
        },

        /**
         * Compose a class name.
         *
         * @param {string} module A module.
         * @param {string} name A name.
         * @param {string} [location=''] A location.
         * @return {string}
         */
        composeClassName: function (module, name, location) {
            if (module) {
                module = this.camelCaseToHyphen(module);
                name = this.camelCaseToHyphen(name).split('.').join('/');
                location = this.camelCaseToHyphen(location || '');

                return module + ':' + location + '/' + name;
            }
            else {
                name = this.camelCaseToHyphen(name).split('.').join('/');

                return location + '/' + name;
            }
        },

        /**
         * Compose a view class name.
         *
         * @param {string} name A name.
         * @returns {string}
         */
        composeViewClassName: function (name) {
            if (name && name[0] === name[0].toLowerCase()) {
                return name;
            }

            if (name.indexOf(':') !== -1) {
                var arr = name.split(':');
                var modPart = arr[0];
                var namePart = arr[1];

                modPart = this.camelCaseToHyphen(modPart);
                namePart = this.camelCaseToHyphen(namePart).split('.').join('/');

                return modPart + ':' + 'views' + '/' + namePart;
            }
            else {
                name = this.camelCaseToHyphen(name).split('.').join('/');

                return 'views' + '/' + name;
            }
        },

        /**
         * Convert a string from camelCase to hyphen and replace dots with hyphens.
         * Useful for setting to DOM attributes.
         *
         * @param {string} string A string.
         * @returns {string}
         */
        toDom: function (string) {
            return Espo.Utils.convert(string, 'c-h')
                .split('.')
                .join('-');
        },

        /**
         * Lower-case a first character.
         *
         * @param  {string} string A string.
         * @returns {string}
         */
        lowerCaseFirst: function (string) {
            if (string === null) {
                return string;
            }

            return string.charAt(0).toLowerCase() + string.slice(1);
        },

        /**
         * Upper-case a first character.
         *
         * @param  {string} string A string.
         * @returns {string}
         */
        upperCaseFirst: function (string) {
            if (string === null) {
                return string;
            }

            return string.charAt(0).toUpperCase() + string.slice(1);
        },

        /**
         * Hyphen to UpperCamelCase.
         *
         * @param {string} string A string.
         * @returns {string}
         */
        hyphenToUpperCamelCase: function (string) {
            if (string === null) {
                return string;
            }

            return this.upperCaseFirst(
                string.replace(
                    /-([a-z])/g,
                    function (g) {
                        return g[1].toUpperCase();
                    }
                )
            );
        },

        /**
         * Hyphen to camelCase.
         *
         * @param {string} string A string.
         * @returns {string}
         */
        hyphenToCamelCase: function (string) {
            if (string === null) {
                return string;
            }

            return string.replace(
                /-([a-z])/g,
                function (g) {
                    return g[1].toUpperCase();
                }
            );
        },

        /**
         * CamelCase to hyphen.
         *
         * @param {string} string A string.
         * @returns {string}
         */
        camelCaseToHyphen: function (string) {
            if (string === null) {
                return string;
            }

            return string.replace(/([a-z])([A-Z])/g, '$1-$2').toLowerCase();
        },

        /**
         * Trim an ending slash.
         *
         * @param {String} str A string.
         * @returns {string}
         */
        trimSlash: function (str) {
            if (str.slice(-1) === '/') {
                return str.slice(0, -1);
            }

            return str;
        },

        /**
         * Parse params in string URL options.
         *
         * @param {string} string An URL part.
         * @returns {Object.<string,string>}
         */
        parseUrlOptionsParam: function (string) {
            if (!string) {
                return {};
            }

            if (string.indexOf('&') === -1 && string.indexOf('=') === -1) {
                return {};
            }

            let options = {};

            if (typeof string !== 'undefined') {
                string.split('&').forEach(item => {
                    let p = item.split('=');

                    options[p[0]] = true;

                    if (p.length > 1) {
                        options[p[0]] = p[1];
                    }
                });
            }

            return options;
        },

        /**
         * Key a key from a key-event.
         *
         * @param {JQueryKeyEventObject} e A key event.
         * @return {string}
         */
        getKeyFromKeyEvent: function (e) {
            let key = e.code;

            if (e.shiftKey) {
                key = 'Shift+' + key;
            }

            if (e.altKey) {
                key = 'Alt+' + key;
            }

            if (IS_MAC ? e.metaKey : e.ctrlKey) {
                key = 'Control+' + key;
            }

            return key;
        },
    };

    /**
     * @deprecated Use `Espo.Utils`.
     */
    Espo.utils = Espo.Utils;

    return Espo.Utils;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('acl', [], function () {

    /**
     * Internal class for access checking. Can be extended to customize access checking
     * for a specific scope.
     *
     * @class
     * @name Class
     * @memberOf module:acl
     * @param {module:models/user.Class} user A user.
     * @param {string} scope A scope.
     * @param {Object} params Parameters.
     */
    let Acl = function (user, scope, params) {
        this.user = user || null;
        this.scope = scope;

        params = params || {};

        this.aclAllowDeleteCreated = params.aclAllowDeleteCreated;
        this.teamsFieldIsForbidden = params.teamsFieldIsForbidden;
        this.forbiddenFieldList = params.forbiddenFieldList;
    };

    _.extend(Acl.prototype, /** @lends module:acl.Class# */ {

        /**
         * A user.
         *
         * @type {module:models/user.Class}
         * @protected
         */
        user: null,

        /**
         * Get a user.
         *
         * @returns {module:models/user.Class}
         * @protected
         */
        getUser: function () {
            return this.user;
        },

        /**
         * Check access to a scope.
         *
         * @param {string|boolean|Object} data Access data.
         * @param {module:acl-manager.Class~action|null} [action=null] An action.
         * @param {boolean} [precise=false] To return `null` if `inTeam == null`.
         * @param {Object|null} [entityAccessData=null] Entity access data. `inTeam`, `isOwner`.
         * @returns {boolean|null} True if has access.
         */
        checkScope: function (data, action, precise, entityAccessData) {
            entityAccessData = entityAccessData || {};

            var inTeam = entityAccessData.inTeam;
            var isOwner = entityAccessData.isOwner;

            if (this.getUser().isAdmin()) {
                if (data === false) {
                    return false;
                }

                return true;
            }

            if (data === false) {
                return false;
            }

            if (data === true) {
                return true;
            }

            if (typeof data === 'string') {
                return true;
            }

            if (data === null) {
                return false;
            }

            action = action || null;

            if (action === null) {
                return true;
            }
            if (!(action in data)) {
                return false;
            }

            var value = data[action];

            if (value === 'all') {
                return true;
            }

            if (value === 'yes') {
                return true;
            }

            if (value === 'no') {
                return false;
            }

            if (typeof isOwner === 'undefined') {
                return true;
            }

            if (isOwner) {
                if (value === 'own' || value === 'team') {
                    return true;
                }
            }

            var result = false;

            if (value === 'team') {
                result = inTeam;

                if (inTeam === null) {
                    if (precise) {
                        result = null;
                    }
                    else {
                        return true;
                    }
                }
                else if (inTeam) {
                    return true;
                }
            }

            if (isOwner === null) {
                if (precise) {
                    result = null;
                }
                else {
                    return true;
                }
            }

            return result;
        },

        /**
         * Check access to model (entity).
         *
         * @param {module:model.Class} model A model.
         * @param {Object|string|null} data Access data.
         * @param {module:acl-manager.Class~action|null} [action=null] Action to check.
         * @param {boolean} [precise=false] To return `null` if not enough data is set in a model.
         *   E.g. the `teams` field is not yet loaded.
         * @returns {boolean|null} True if has access, null if not clear.
         */
        checkModel: function (model, data, action, precise) {
            if (this.getUser().isAdmin()) {
                return true;
            }

            let entityAccessData = {
                isOwner: this.checkIsOwner(model),
                inTeam: this.checkInTeam(model),
            };

            return this.checkScope(data, action, precise, entityAccessData);
        },

        /**
         * Check `delete` access to model.
         *
         * @param {module:model.Class} model A model.
         * @param {Object|string|null} data Access data.
         * @param {boolean} [precise=false] To return `null` if not enough data is set in a model.
         *   E.g. the `teams` field is not yet loaded.
         * @returns {boolean} True if has access.
         */
        checkModelDelete: function (model, data, precise) {
            let result = this.checkModel(model, data, 'delete', precise);

            if (result) {
                return true;
            }

            if (data === false) {
                return false;
            }

            var d = data || {};

            if (d.read === 'no') {
                return false;
            }

            if (model.has('createdById')) {
                if (model.get('createdById') === this.getUser().id && this.aclAllowDeleteCreated) {
                    if (!model.has('assignedUserId')) {
                        return true;
                    }

                    if (!model.get('assignedUserId')) {
                        return true;
                    }

                    if (model.get('assignedUserId') === this.getUser().id) {
                        return true;
                    }

                }
            }

            return result;
        },

        /**
         * Check if a user is owner to a model.
         *
         * @param {module:model.Class} model A model.
         * @returns {boolean|null} True if owner. Null if not clear.
         */
        checkIsOwner: function (model) {
            let result = false;

            if (model.hasField('assignedUser')) {
                if (this.getUser().id === model.get('assignedUserId')) {
                    return true;
                }

                if (!model.has('assignedUserId')) {
                    result = null;
                }
            }
            else {
                if (model.hasField('createdBy')) {
                    if (this.getUser().id === model.get('createdById')) {
                        return true;
                    }

                    if (!model.has('createdById')) {
                        result = null;
                    }
                }
            }

            if (model.hasField('assignedUsers')) {
                if (!model.has('assignedUsersIds')) {
                    return null;
                }

                if (~(model.get('assignedUsersIds') || []).indexOf(this.getUser().id)) {
                    return true;
                }

                result = false;
            }

            return result;
        },

        /**
         * Check if a user in a team of a model.
         *
         * @param {module:model.Class} model A model.
         * @returns {boolean|null} True if in a team. Null if not clear.
         */
        checkInTeam: function (model) {
            var userTeamIdList = this.getUser().getTeamIdList();

            if (!model.has('teamsIds')) {
                if (this.teamsFieldIsForbidden) {
                    return true;
                }

                return null;
            }

            var teamIdList = model.getTeamIdList();

            var inTeam = false;

            userTeamIdList.forEach(id => {
                if (~teamIdList.indexOf(id)) {
                    inTeam = true;
                }
            });

            return inTeam;
        },

    });

    Acl.extend = Backbone.Router.extend;

    return Acl;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('model', [], function () {

    let Dep = Backbone.Model;

    /**
     * Save values to the backend.
     *
     * @function save
     * @memberof Backbone.Model.prototype
     * @param {Object} [attributes] Attribute values.
     * @param {Object} [options] Options.
     * @returns {Promise}
     *
     * @fires module:model.Class#sync
     */

    /**
     * Whether an attribute is changed. To be used only within a callback of a 'change' event listener.
     *
     * @function changed
     * @memberof Backbone.Model.prototype
     * @param {string} attribute An attribute name.
     * @returns {boolean}
     */

    /**
     * Removes all attributes from the model, including the `id` attribute.
     * Fires a `change` event unless `silent` is passed as an option.
     *
     * @function clear
     * @memberof Backbone.Model.prototype
     * @param {Object} [options] Options.
     */

    /**
     * When attributes have changed.
     *
     * @event module:model.Class#change
     * @param {module:model.Class} model A model.
     * @param {Object} o Options.
     */

    /**
     * On sync with backend.
     *
     * @event module:model.Class#sync
     * @param {module:model.Class} model A model.
     * @param {Object} response Response from backend.
     * @param {Object} o Options.
     */

    /**
     * A model.
     *
     * @class
     * @name Class
     * @extends Backbone.Model
     * @mixes Backbone.Events
     * @memberOf module:model
     */
    return Dep.extend(/** @lends module:model.Class.prototype */{

        /**
         * An entity type.
         *
         * @name entityType
         * @property {string}
         * @public
         * @memberof module:model.Class.prototype
         */

        /**
         * A record ID.
         *
         * @name cid
         * @type {string|null}
         * @public
         * @memberof module:model.Class.prototype
         */

        /**
         * An ID, unique among all models.
         *
         * @name cid
         * @type {string}
         * @public
         * @memberof module:model.Class.prototype
         */

        /**
         * Attribute values.
         *
         * @name attributes
         * @type {Object}
         * @public
         * @memberof module:model.Class.prototype
         */

        /**
         * A root URL.
         *
         * @type {string|null}
         * @public
         */
        urlRoot: null,

        /**
         * A name.
         *
         * @type {string}
         * @public
         */
        name: null,

        /**
         * @private
         */
        dateTime: null,

        /**
         * @private
         */
        _user: null,

        /**
         * Definitions.
         *
         * @type {Object|null}
         */
        defs: null,

        /**
         * Initialize.
         *
         * @protected
         */
        initialize: function () {
            this.urlRoot = this.urlRoot || this.name;

            this.defs = this.defs || {};

            this.defs.fields = this.defs.fields || {};
            this.defs.links = this.defs.links || {};
        },

        /**
         * @param {string} [method] HTTP method.
         * @param {module:model.Class} [model]
         * @param {Object} [options]
         * @returns {Promise}
         */
        sync: function (method, model, options) {
            if (method === 'patch') {
                options.type = 'PUT';
            }

            return Dep.prototype.sync.call(this, method, model, options);
        },

        /**
         * Set an attribute value or multiple values.
         *
         * @param {(string|Object)} key An attribute name or a {key => value} object.
         * @param {*} [val] A value or options if the first argument is an object.
         * @param {Object} [options] Options. `silent` won't trigger a `change` event.
         * @returns {this}
         *
         * @fires module:model.Class#change Unless `{silent: true}`.
         */
        set: function (key, val, options) {
            if (typeof key === 'object') {
                let o = key;

                if (this.idAttribute in o) {
                    this.id = o[this.idAttribute];
                }
            }
            else if (key === 'id') {
                this.id = val;
            }

            return Dep.prototype.set.call(this, key, val, options);
        },

        /**
         * Get an attribute value.
         *
         * @param {string} key An attribute name.
         * @returns {*}
         */
        get: function (key) {
            if (key === 'id' && this.id) {
                return this.id;
            }

            return Dep.prototype.get.call(this, key);
        },

        /**
         * Whether attribute is set.
         *
         * @param {string} key An attribute name.
         * @returns {boolean}
         */
        has: function (key) {
            let value = this.get(key);

            return (typeof value !== 'undefined');
        },

        /**
         * Whether is new.
         *
         * @returns {boolean}
         */
        isNew: function () {
            return !this.id;
        },

        /**
         * Set defs.
         *
         * @param {Object} defs
         */
        setDefs: function (defs) {
            this.defs = defs || {};

            this.defs.fields = this.defs.fields || {};
        },

        /**
         * Get cloned attribute values.
         *
         * @returns {Object}
         */
        getClonedAttributes: function () {
            var attributes = {};

            for (let name in this.attributes) {
                attributes[name] = Espo.Utils.cloneDeep(this.attributes[name]);
            }

            return attributes;
        },

        /**
         * Populate default values.
         */
        populateDefaults: function () {
            var defaultHash = {};

            if ('fields' in this.defs) {
                for (let field in this.defs.fields) {
                    let defaultValue = this.getFieldParam(field, 'default');

                    if (defaultValue !== null) {
                        try {
                            defaultValue = this.parseDefaultValue(defaultValue);

                            defaultHash[field] = defaultValue;
                        }
                        catch (e) {
                            console.error(e);
                        }
                    }

                    let defaultAttributes = this.getFieldParam(field, 'defaultAttributes');

                    if (defaultAttributes) {
                        for (let attribute in defaultAttributes) {
                            defaultHash[attribute] = defaultAttributes[attribute];
                        }
                    }
                }
            }

            defaultHash = Espo.Utils.cloneDeep(defaultHash);

            for (let attr in defaultHash) {
                if (this.has(attr)) {
                    delete defaultHash[attr];
                }
            }

            this.set(defaultHash, {silent: true});
        },

        /**
         * @protected
         *
         * @param {*} defaultValue
         * @returns {*}
         * @deprecated
         */
        parseDefaultValue: function (defaultValue) {
            if (
                typeof defaultValue === 'string' &&
                defaultValue.indexOf('javascript:') === 0
            ) {
                let code = defaultValue.substring(11);

                defaultValue = (new Function( "with(this) { " + code + "}")).call(this);
            }

            return defaultValue;
        },

        /**
         * Get a link multiple column value.
         *
         * @param {string} field
         * @param {string} column
         * @param {string} id
         * @returns {*}
         */
        getLinkMultipleColumn: function (field, column, id) {
            return ((this.get(field + 'Columns') || {})[id] || {})[column];
        },

        /**
         * @param {Object} data
         */
        setRelate: function (data) {
            let setRelate = options => {
                var link = options.link;
                var model = options.model;

                if (!link || !model) {
                    throw new Error('Bad related options');
                }

                var type = this.defs.links[link].type;

                switch (type) {
                    case 'belongsToParent':
                        this.set(link + 'Id', model.id);
                        this.set(link + 'Type', model.name);
                        this.set(link + 'Name', model.get('name'));

                        break;

                    case 'belongsTo':
                        this.set(link + 'Id', model.id);
                        this.set(link + 'Name', model.get('name'));

                        break;

                    case 'hasMany':
                        var ids = [];
                        ids.push(model.id);

                        let names = {};

                        names[model.id] = model.get('name');

                        this.set(link + 'Ids', ids);
                        this.set(link + 'Names', names);

                        break;
                }
            };

            if (Object.prototype.toString.call(data) === '[object Array]') {
                data.forEach(options => {
                    setRelate(options);
                });
            }
            else {
                setRelate(data);
            }
        },

        /**
         * Get a field type.
         *
         * @param {string} field
         * @returns {string|null}
         */
        getFieldType: function (field) {
            if (this.defs && this.defs.fields && (field in this.defs.fields)) {
                return this.defs.fields[field].type || null;
            }

            return null;
        },

        /**
         * Get a field param.
         *
         * @param {string} field
         * @param {string} param
         * @returns {*}
         */
        getFieldParam: function (field, param) {
            if (this.defs && this.defs.fields && (field in this.defs.fields)) {
                if (param in this.defs.fields[field]) {
                    return this.defs.fields[field][param];
                }
            }

            return null;
        },

        /**
         * Get a link type.
         *
         * @param {string} link
         * @returns {string|null}
         */
        getLinkType: function (link) {
            if (this.defs && this.defs.links && (link in this.defs.links)) {
                return this.defs.links[link].type || null;
            }

            return null;
        },

        /**
         * Get a link param.
         *
         * @param {string} link A link.
         * @param {string} param A param.
         * @returns {*}
         */
        getLinkParam: function (link, param) {
            if (this.defs && this.defs.links && (link in this.defs.links)) {
                if (param in this.defs.links[link]) {
                    return this.defs.links[link][param];
                }
            }

            return null;
        },

        /**
         * Is a field read-only.
         *
         * @param {string} field A field.
         * @returns {bool}
         */
        isFieldReadOnly: function (field) {
            return this.getFieldParam(field, 'readOnly') || false;
        },

        /**
         * If a field required.
         *
         * @param {string} field A field.
         * @returns {bool}
         */
        isRequired: function (field) {
            return this.getFieldParam(field, 'required') || false;
        },

        /**
         * Get IDs of a link-multiple field.
         *
         * @param {type} field A link-multiple field name.
         * @returns {string[]}
         */
        getLinkMultipleIdList: function (field) {
            return this.get(field + 'Ids') || [];
        },

        /**
         * Get team IDs.
         *
         * @returns {string[]}
         */
        getTeamIdList: function () {
            return this.get('teamsIds') || [];
        },


        /**
         * @protected
         * @returns {Espo.DateTime}
         */
        getDateTime: function () {
            return this.dateTime;
        },

        /**
         * @protected
         * @returns {Espo.Models.User}
         */
        getUser: function () {
            return this._user;
        },

        /**
         * Whether has a field.
         *
         * @param {string} field A field.
         * @returns {boolean}
         */
        hasField: function (field) {
            return ('defs' in this) && ('fields' in this.defs) && (field in this.defs.fields);
        },

        /**
         * Whether has a link.
         *
         * @param {string} link A link.
         * @returns {boolean}
         */
        hasLink: function (link) {
            return ('defs' in this) && ('links' in this.defs) && (link in this.defs.links);
        },

        /**
         * @returns {boolean}
         */
        isEditable: function () {
            return true;
        },

        /**
         * @returns {boolean}
         */
        isRemovable: function () {
            return true;
        },

        /**
         * Get an entity type.
         *
         * @returns {string}
         */
        getEntityType: function () {
            return this.name;
        },

        /**
         * Fetch values from the backend.
         *
         * @param {Object} [options] Options.
         * @returns {Promise<Object>}
         *
         * @fires module:model.Class#sync
         */
        fetch: function (options) {
            this.lastXhr = Dep.prototype.fetch.call(this, options);

            return this.lastXhr;
        },

        /**
         * Abort the last fetch.
         */
        abortLastFetch: function () {
            if (this.lastXhr && this.lastXhr.readyState < 4) {
                this.lastXhr.abort();
            }
        },
    });
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('model-offline', ['model'], function (Model) {

    /**
     * @internal Not used.
     *
     * @class
     * @name Class
     * @extends module:model.Class
     * @memberOf module:model-offline
     */
    return Model.extend(/** @lends module:model-offline.Class# */{

        cache: null,

        _key: null,

        initialize: function (attributes, options) {
            Model.prototype.initialize.apply(this, arguments);

            options = options || {};

            this._key = this.url = this.name;

            this.cache = options.cache || null;
        },

        load: function (callback, disableCache) {
            this.once('sync', callback);

            if (!disableCache) {
                if (this.loadFromCache()) {
                    this.trigger('sync');

                    return new Promise(resolve => resolve());
                }
            }

            return new Promise(resolve => {
                this.fetch()
                    .then(() => {
                        this.storeToCache();

                        resolve();
                    });
            });
        },

        loadSkipCache: function () {
            return this.load(null, true);
        },

        loadFromCache: function () {
            if (this.cache) {
                let cached = this.cache.get('app', this._key);

                if (cached) {
                    this.set(cached);

                    return true;
                }
            }

            return null;
        },

        storeToCache: function () {
            if (this.cache) {
                this.cache.set('app', this._key, this.toJSON());
            }
        },

        isNew: function () {
            return false;
        },
    });
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

/**
 * @module ajax
 */
define('ajax', [], function () {

    /**
     * Ajax request functions.
     */
    let Ajax = Espo.Ajax = {

        /**
         * Options.
         *
         * @typedef {Object} Espo.Ajax~Options
         *
         * @property {Number} [timeout] A timeout.
         * @property {Object.<string,string>} [headers] A request headers.
         * @property {'xml'|'json'|'text'} [dataType] A data type.
         * @property {boolean} [local] If true, the API URL won't be prepended.
         * @property {string} [contentType] A content type.
         */

        /**
         * Request.
         *
         * @param {string} url An URL.
         * @param {string} type A method.
         * @param {any} [data] Data.
         * @param {Espo.Ajax~Options} [options] Options.
         * @returns {Promise<any>}
         */
        request: function (url, type, data, options) {
            options = options || {};

            options.type = type;
            options.url = url;

            if (data) {
                options.data = data;
            }

            return $.ajax(options);
        },

        /**
         * POST request.
         *
         * @param {string} url An URL.
         * @param {any} [data] Data.
         * @param {Espo.Ajax~Options} [options] Options.
         * @returns {Promise<any>}
         */
        postRequest: function (url, data, options) {
            if (data) {
                data = JSON.stringify(data);
            }

            return Ajax.request(url, 'POST', data, options);
        },

        /**
         * PATCH request.
         *
         * @param {string} url An URL.
         * @param {any} [data] Data.
         * @param {Espo.Ajax~Options} [options] Options.
         * @returns {Promise<any>}
         */
        patchRequest: function (url, data, options) {
            if (data) {
                data = JSON.stringify(data);
            }

            return Ajax.request(url, 'PATCH', data, options);
        },

        /**
         * PUT request.
         *
         * @param {string} url An URL.
         * @param {any} [data] Data.
         * @param {Espo.Ajax~Options} [options] Options.
         * @returns {Promise<any>}
         */
        putRequest: function (url, data, options) {
            if (data) {
                data = JSON.stringify(data);
            }

            return Ajax.request(url, 'PUT', data, options);
        },

        /**
         * DELETE request.
         *
         * @param {string} url An URL.
         * @param {any} [data] Data.
         * @param {Espo.Ajax~Options} [options] Options.
         * @returns {Promise<any>}
         */
        deleteRequest: function (url, data, options) {
            if (data) {
                data = JSON.stringify(data);
            }

            return Ajax.request(url, 'DELETE', data, options);
        },

        /**
         * GET request.
         *
         * @param {string} url An URL.
         * @param {any} [data] Data.
         * @param {Espo.Ajax~Options} [options] Options.
         * @returns {Promise<any>}
         */
        getRequest: function (url, data, options) {
            return Ajax.request(url, 'GET', data, options);
        },
    };

    return Ajax;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('controller', [], function () {

    /**
     * @callback module:controller.Class~viewCallback
     * @param {module:view.Class} view A view.
     */

    /**
     * A controller. To be extended.
     *
     * @class
     * @name Class
     * @mixes Backbone.Events
     * @memberOf module:controller
     *
     * @param {Object} params
     * @param {Object} injections
     */
    var Controller = function (params, injections) {
        this.params = params || {};

        this.baseController = injections.baseController;
        this.viewFactory = injections.viewFactory;
        this.modelFactory = injections.modelFactory;
        this.collectionFactory = injections.collectionFactory;

        this.initialize();

        this._settings = injections.settings || null;
        this._user = injections.user || null;
        this._preferences = injections.preferences || null;
        this._acl = injections.acl || null;
        this._cache = injections.cache || null;
        this._router = injections.router || null;
        this._storage = injections.storage || null;
        this._metadata = injections.metadata || null;
        this._dateTime = injections.dateTime || null;
        this._broadcastChannel = injections.broadcastChannel || null;

        if (!this.baseController) {
            this.on('logout', () => this.clearAllStoredMainViews());
        }

        this.set('masterRendered', false);
    };

    _.extend(Controller.prototype, /** @lends module:controller.Class# */ {

        /**
         * A default action.
         *
         * @type {string}
         */
        defaultAction: 'index',

        /**
         * A name.
         *
         * @type {string|null}
         * @public
         */
        name: null,

        /**
         * Params.
         *
         * @type {Object}
         * @private
         */
        params: null,

        /**
         * A view factory.
         *
         * @type {Bull.Factory}
         * @protected
         */
        viewFactory: null,

        /**
         * A model factory.
         *
         * @type {module:model-factory.Class}
         * @protected
         */
        modelFactory: null,

        /**
         * A body view.
         *
         * @public
         * @type {string|null}
         */
        masterView: null,

        /**
         * Initialize.
         *
         * @protected
         */
        initialize: function () {},

        /**
         * Set the router.
         *
         * @internal
         * @param {module:router.Class} router
         */
        setRouter: function (router) {
            this._router = router;
        },

        /**
         * @protected
         * @returns {module:models/settings.Class}
         */
        getConfig: function () {
            return this._settings;
        },

        /**
         * @protected
         * @returns {module:models/user.Class}
         */
        getUser: function () {
            return this._user;
        },

        /**
         * @protected
         * @returns {module:models/preferences.Class}
         */
        getPreferences: function () {
            return this._preferences;
        },

        /**
         * @protected
         * @returns {module:acl-manager.Class}
         */
        getAcl: function () {
            return this._acl;
        },

        /**
         * @protected
         * @returns {module:cache.Class}
         */
        getCache: function () {
            return this._cache;
        },

        /**
         * @protected
         * @returns {module:router.Class}
         */
        getRouter: function () {
            return this._router;
        },

        /**
         * @protected
         * @returns {module:storage.Class}
         */
        getStorage: function () {
            return this._storage;
        },

        /**
         * @protected
         * @returns {module:metadata.Class}
         */
        getMetadata: function () {
            return this._metadata;
        },

        /**
         * @protected
         * @returns {module:date-time.Class}
         */
        getDateTime: function () {
            return this._dateTime;
        },

        /**
         * Get a parameter of all controllers.
         *
         * @param {string} key A key.
         * @return {*} Null if a key doesn't exist.
         */
        get: function (key) {
            if (key in this.params) {
                return this.params[key];
            }

            return null;
        },

        /**
         * Set a parameter for all controllers.
         *
         * @param {string} key A name of a view.
         * @param {*} value
         */
        set: function (key, value) {
            this.params[key] = value;
        },

        /**
         * Unset a parameter.
         *
         * @param {string} key A key.
         */
        unset: function (key) {
            delete this.params[key];
        },

        /**
         * Has a parameter.
         *
         * @param {string} key A key.
         * @returns {boolean}
         */
        has: function (key) {
            return key in this.params;
        },

        /**
         * Get a stored main view.
         *
         * @param {string} key A key.
         * @returns {module:view.Class|null}
         */
        getStoredMainView: function (key) {
            return this.get('storedMainView-' + key);
        },

        /**
         * Has a stored main view.
         * @param {string} key
         * @returns {boolean}
         */
        hasStoredMainView: function (key) {
            return this.has('storedMainView-' + key);
        },

        /**
         * Clear a stored main view.
         * @param {string} key
         */
        clearStoredMainView: function (key) {
            var view = this.getStoredMainView(key);

            if (view) {
                view.remove(true);
            }

            this.unset('storedMainView-' + key);
        },

        /**
         * Store a main view.
         *
         * @param {string} key A key.
         * @param {module:view.Class} view A view.
         */
        storeMainView: function (key, view) {
            this.set('storedMainView-' + key, view);

            this.listenTo(view, 'remove', (o) => {
                o = o || {};

                if (o.ignoreCleaning) {
                    return;
                }

                this.stopListening(view, 'remove');

                this.clearStoredMainView(key);
            });
        },

        /**
         * Clear all stored main views.
         */
        clearAllStoredMainViews: function () {
            for (let k in this.params) {
                if (k.indexOf('storedMainView-') !== 0) {
                    continue;
                }

                let key = k.substr(15);

                this.clearStoredMainView(key);
            }
        },

        /**
         * Check access to an action.
         *
         * @param {string} action An action.
         * @returns {boolean}
         */
        checkAccess: function (action) {
            return true;
        },

        /**
         * Process access check to the controller.
         */
        handleAccessGlobal: function () {
            if (!this.checkAccessGlobal()) {
                throw new Espo.Exceptions.AccessDenied("Denied access to '" + this.name + "'");
            }
        },

        /**
         * Check access to the controller.
         *
         * @returns {boolean}
         */
        checkAccessGlobal: function () {
            return true;
        },

        /**
         * Check access to an action. Throwing an exception.
         *
         * @param {string} action An action.
         */
        handleCheckAccess: function (action) {
            if (!this.checkAccess(action)) {
                let msg;

                if (action) {
                    msg = "Denied access to action '" + this.name + "#" + action + "'";
                }
                else {
                    msg = "Denied access to scope '" + this.name + "'";
                }

                throw new Espo.Exceptions.AccessDenied(msg);
            }
        },

        /**
         * Process an action.
         *
         * @param {string} action
         * @param {Object} options
         */
        doAction: function (action, options) {
            this.handleAccessGlobal();

            action = action || this.defaultAction;

            var method = 'action' + Espo.Utils.upperCaseFirst(action);

            if (!(method in this)) {
                throw new Espo.Exceptions.NotFound("Action '" + this.name + "#" + action + "' is not found");
            }

            let preMethod = 'before' + Espo.Utils.upperCaseFirst(action);
            let postMethod = 'after' + Espo.Utils.upperCaseFirst(action);

            if (preMethod in this) {
                this[preMethod].call(this, options || {});
            }

            this[method].call(this, options || {});

            if (postMethod in this) {
                this[postMethod].call(this, options || {});
            }
        },

        /**
         * Create a master view, render if not already rendered.
         *
         * @param {module:controller.Class~viewCallback} callback A callback with a created master view.
         */
        master: function (callback) {
            let entire = this.get('entire');

            if (entire) {
                entire.remove();

                this.set('entire', null);
            }

            let master = this.get('master');

            if (master) {
                callback.call(this, master);

                return;
            }

            let masterView = this.masterView || 'views/site/master';

            this.viewFactory.create(masterView, {el: 'body'}, (master) => {
                this.set('master', master);

                if (!this.get('masterRendered')) {
                    master.render(() => {
                        this.set('masterRendered', true);

                        callback.call(this, master);
                    });

                    return;
                }

                callback.call(this, master);
            });
        },

        /**
         * Create a main view in the master.
         * @param {String} view A view name.
         * @param {Object} options Options for view.
         * @param {module:controller.Class~viewCallback} [callback] A callback with a created view.
         * @param {boolean} [useStored] Use a stored view if available.
         * @param {string} [storedKey] A stored view key.
         */
        main: function (view, options, callback, useStored, storedKey) {
            let isCanceled = false;
            let isRendered = false;

            this.listenToOnce(this.baseController, 'action', () => {
                isCanceled = true;
            });

            view = view || 'views/base';

            this.master(master => {
                if (isCanceled) {
                    return;
                }

                options = options || {};
                options.el = '#main';

                let process = main => {
                    if (isCanceled) {
                        return;
                    }

                    if (storedKey) {
                        this.storeMainView(storedKey, main);
                    }

                    main.listenToOnce(this.baseController, 'action', () => {
                        if (isRendered) {
                            return;
                        }

                        main.cancelRender();

                        isCanceled = true;
                    });

                    if (master.currentViewKey) {
                        this.set('storedScrollTop-' + master.currentViewKey, $(window).scrollTop());

                        if (this.hasStoredMainView(master.currentViewKey)) {
                            var mainView = master.getView('main');

                            if (mainView) {
                                mainView.propagateEvent('remove', {ignoreCleaning: true});
                            }

                            master.unchainView('main');
                        }
                    }

                    master.currentViewKey = storedKey;
                    master.setView('main', main);

                    let afterRender = () => {
                        isRendered = true;

                        main.updatePageTitle();

                        if (useStored && this.has('storedScrollTop-' + storedKey)) {
                            $(window).scrollTop(this.get('storedScrollTop-' + storedKey));

                            return;
                        }

                        $(window).scrollTop(0);
                    };

                    if (callback) {
                        this.listenToOnce(main, 'after:render', afterRender);

                        callback.call(this, main);

                        return;
                    }

                    main.render()
                        .then(afterRender);
                };

                if (useStored && this.hasStoredMainView(storedKey)) {
                    let main = this.getStoredMainView(storedKey);

                    let isActual = true;

                    if (main && typeof main.isActualForReuse === 'function') {
                        isActual = main.isActualForReuse();
                    }

                    if (
                        (!main.lastUrl || main.lastUrl === this.getRouter().getCurrentUrl()) &&
                        isActual
                    ) {
                        process(main);

                        if (main && typeof main.applyRoutingParams === 'function') {
                            main.applyRoutingParams(options.params || {});
                        }

                        return;
                    }

                    this.clearStoredMainView(storedKey);
                }

                this.viewFactory.create(view, options, process);
            });
        },

        /**
         * Show a loading notify-message.
         */
        showLoadingNotification: function () {
            let master = this.get('master');

            if (master) {
                master.showLoadingNotification();
            }
        },

        /**
         * Hide a loading notify-message.
         */
        hideLoadingNotification: function () {
            let master = this.get('master');

            if (master) {
                master.hideLoadingNotification();
            }
        },

        /**
         * Create a view in the <body> element.
         *
         * @param {String} view A view name.
         * @param {Object} options Options for a view.
         * @param {module:controller.Class~viewCallback} [callback] A callback with a created view.
         */
        entire: function (view, options, callback) {
            let master = this.get('master');

            if (master) {
                master.remove();
            }

            this.set('master', null);
            this.set('masterRendered', false);

            options = options || {};
            options.el = 'body';

            this.viewFactory.create(view, options, view => {
                this.set('entire', view);

                callback(view);
            });
        }

    }, Backbone.Events);

    Controller.extend = Backbone.Router.extend;

    return Controller;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

/**
 * @module ui
 */
define('ui', ['lib!marked', 'lib!dompurify'],
function (/** marked~ */marked, /** DOMPurify~ */ DOMPurify) {

    /**
     * Dialog parameters.
     *
     * @typedef {Object} module:ui.Dialog~Params
     *
     * @property {string} [className='dialog'] A class-name or multiple space separated.
     * @property {'static'|true|false} [static='static'] A backdrop.
     * @property {boolean} [closeButton=true] A close button.
     * @property {boolean} [collapseButton=false] A collapse button.
     * @property {string|null} [header] A header HTML.
     * @property {string} [body] A body HTML.
     * @property {number|null} [width] A width.
     * @property {boolean} [removeOnClose=true] To remove on close.
     * @property {boolean} [draggable=false] Is draggable.
     * @property {function (): void} [onRemove] An on-remove callback.
     * @property {function (): void} [onClose] An on-close callback.
     * @property {function (): void} [onBackdropClick] An on-backdrop-click callback.
     * @property {string} [container='body'] A container selector.
     * @property {boolean} [keyboard=true] Enable a keyboard control. The `Esc` key closes a dialog.
     * @property {boolean} [footerAtTheTop=false] To display a footer at the top.
     * @property {module:ui.Dialog~Button[]} [buttonList] Buttons.
     * @property {module:ui.Dialog~Button[]} [dropdownItemList] Dropdown action items.
     */

    /**
     * A button or dropdown action item.
     *
     * @typedef {Object} module:ui.Dialog~Button
     *
     * @property {string} name A name.
     * @property {boolean} [pullLeft=false] Deprecated. Use the `position` property.
     * @property {'left'|'right'} [position='left'] A position.
     * @property {string} [html] HTML.
     * @property {string} [text] A text.
     * @property {boolean} [disabled=false] Disabled.
     * @property {boolean} [hidden=false] Hidden.
     * @property {'default'|'danger'|'success'|'warning'} [style='default'] A style.
     * @property {function():void} [onClick] An on-click callback.
     * @property {string} [className] An additional class name.
     * @property {string} [title] A title.
     */

    /**
     * @class
     * @name Espo.Ui.Dialog
     *
     * @param {module:ui.Dialog~Params} options Options.
     */
    let Dialog = function (options) {
        options = options || {};

        /** @private */
        this.className = 'dialog';
        /** @private */
        this.backdrop = 'static';
        /** @private */
        this.closeButton = true;
        /** @private */
        this.collapseButton = false;
        /** @private */
        this.header = null;
        /** @private */
        this.body = '';
        /** @private */
        this.width = null;
        /**
         * @private
         * @type {module:ui.Dialog~Button[]}
         */
        this.buttonList = [];
        /**
         * @private
         * @type {module:ui.Dialog~Button[]}
         */
        this.dropdownItemList = [];
        /** @private */
        this.removeOnClose = true;
        /** @private */
        this.draggable = false;
        /** @private */
        this.container = 'body';
        /** @private */
        this.onRemove = function () {};
        /** @private */
        this.onClose = function () {};
        /** @private */
        this.options = options;
        /** @private */
        this.onBackdropClick = function () {};
        /** @private */
        this.keyboard = true;

        this.activeElement = document.activeElement;

        let params = [
            'className',
            'backdrop',
            'keyboard',
            'closeButton',
            'collapseButton',
            'header',
            'body',
            'width',
            'height',
            'fitHeight',
            'buttons',
            'buttonList',
            'dropdownItemList',
            'removeOnClose',
            'draggable',
            'container',
            'onRemove',
            'onClose',
            'onBackdropClick',
        ];

        params.forEach(param => {
            if (param in options) {
                this[param] = options[param];
            }
        });

        /** @private */
        this.onCloseIsCalled = false;

        if (this.buttons && this.buttons.length) {
            /**
             * @private
             * @type {module:ui.Dialog~Button[]}
             */
            this.buttonList = this.buttons;
        }

        this.id = 'dialog-' + Math.floor((Math.random() * 100000));

        if (typeof this.backdrop === 'undefined') {
            /** @private */
            this.backdrop = 'static';
        }

        let $header = this.getHeader();
        let $footer = this.getFooter();

        let $body = $('<div>')
            .addClass('modal-body body')
            .html(this.body);

        let $content = $('<div>').addClass('modal-content');

        if ($header) {
            $content.append($header);
        }

        if ($footer && this.options.footerAtTheTop) {
            $content.append($footer);
        }

        $content.append($body);

        if ($footer && !this.options.footerAtTheTop) {
            $content.append($footer);
        }

        let $dialog = $('<div>')
            .addClass('modal-dialog')
            .append($content);

        let $container = $(this.container);

        $('<div>')
            .attr('id', this.id)
            .attr('class', this.className + ' modal')
            .attr('role', 'dialog')
            .attr('tabindex', '-1')
            .append($dialog)
            .appendTo($container);

        /**
         * An element.
         *
         * @type {JQuery}
         */
        this.$el = $('#' + this.id);

        /**
         * @private
         * @type {Element}
         */
        this.el = this.$el.get(0);

        this.$el.find('header a.close').on('click', () => {
            //this.close();
        });

        this.initButtonEvents();

        if (this.draggable) {
            this.$el.find('header').css('cursor', 'pointer');

            this.$el.draggable({
                handle: 'header',
            });
        }

        let modalContentEl = this.$el.find('.modal-content');

        if (this.width) {
            modalContentEl.css('width', this.width);
            modalContentEl.css('margin-left', '-' + (parseInt(this.width.replace('px', '')) / 5) + 'px');
        }

        if (this.removeOnClose) {
            this.$el.on('hidden.bs.modal', e => {
                if (this.$el.get(0) === e.target) {
                    if (!this.onCloseIsCalled) {
                        this.close();
                    }

                    if (this.skipRemove) {
                        return;
                    }

                    this.remove();
                }
            });
        }

        let $window = $(window);

        this.$el.on('shown.bs.modal', (e, r) => {
            $('.modal-backdrop').not('.stacked').addClass('stacked');

            let headerHeight = this.$el.find('.modal-header').outerHeight() || 0;
            let footerHeight = this.$el.find('.modal-footer').outerHeight() || 0;

            let diffHeight = headerHeight + footerHeight;

            if (!options.fullHeight) {
                diffHeight = diffHeight + options.bodyDiffHeight;
            }

            if (this.fitHeight || options.fullHeight) {
                let processResize = () => {
                    let windowHeight = window.innerHeight;
                    let windowWidth = $window.width();

                    if (!options.fullHeight && windowHeight < 512) {
                        this.$el.find('div.modal-body').css({
                            maxHeight: 'none',
                            overflow: 'auto',
                            height: 'none',
                        });

                        return;
                    }

                    let cssParams = {
                        overflow: 'auto',
                    };

                    if (options.fullHeight) {
                        cssParams.height = (windowHeight - diffHeight) + 'px';

                        this.$el.css('paddingRight', 0);
                    }
                    else {
                        if (windowWidth <= options.screenWidthXs) {
                            cssParams.maxHeight = 'none';
                        } else {
                            cssParams.maxHeight = (windowHeight - diffHeight) + 'px';
                        }
                    }

                    this.$el.find('div.modal-body').css(cssParams);
                };

                $window.off('resize.modal-height');
                $window.on('resize.modal-height', processResize);

                processResize();
            }
        });

        let $documentBody = $(document.body);

        this.$el.on('hidden.bs.modal', e => {
            if ($('.modal:visible').length > 0) {
                $documentBody.addClass('modal-open');
            }
        });
    };

    /**
     * @private
     */
    Dialog.prototype.initButtonEvents = function () {
        this.buttonList.forEach(o => {
            if (typeof o.onClick === 'function') {
                $('#' + this.id + ' .modal-footer button[data-name="' + o.name + '"]')
                    .on('click', (e) => {
                        o.onClick(this, e);
                    });
            }
        });

        this.dropdownItemList.forEach(o => {
            if (typeof o.onClick === 'function') {
                $('#' + this.id + ' .modal-footer a[data-name="' + o.name + '"]')
                    .on('click', (e) => {
                        o.onClick(this, e);
                    });
            }
        });
    };

    /**
     * @private
     * @return {JQuery|null}
     */
    Dialog.prototype.getHeader = function () {
        if (!this.header) {
            return null;
        }

        let $header = $('<header />')
            .addClass('modal-header')
            .addClass(this.options.fixedHeaderHeight ? 'fixed-height' : '')
            .append(
                $('<h4 />')
                    .addClass('modal-title')
                    .append(
                        $('<span />')
                            .addClass('modal-title-text')
                            .html(this.header)
                    )
            );


        if (this.collapseButton) {
            $header.prepend(
                $('<a>')
                    .addClass('collapse-button')
                    .attr('role', 'button')
                    .attr('tabindex', '-1')
                    .attr('data-action', 'collapseModal')
                    .append(
                        $('<span />')
                            .addClass('fas fa-minus')
                    )
            );
        }

        if (this.closeButton) {
            $header.prepend(
                $('<a>')
                    .addClass('close')
                    .attr('data-dismiss', 'modal')
                    .attr('role', 'button')
                    .attr('tabindex', '-1')
                    .append(
                        $('<span />')
                            .attr('aria-hidden', 'true')
                            .html('&times;')
                    )
            );
        }

        return $header;
    }

    /**
     * @private
     * @return {JQuery|null}
     */
    Dialog.prototype.getFooter = function () {
        if (!this.buttonList.length && !this.dropdownItemList.length) {
            return null;
        }

        let $footer = $('<footer>').addClass('modal-footer');

        let $main = $('<div>')
            .addClass('btn-group')
            .addClass('main-btn-group');

        let $additional = $('<div>')
            .addClass('btn-group')
            .addClass('additional-btn-group');

        this.buttonList.forEach(/** module:ui.Dialog~Button */o => {
            let style = o.style || 'default';

            let $button =
                $('<button>')
                    .attr('type', 'button')
                    .attr('data-name', o.name)
                    .addClass('btn')
                    .addClass('btn-' + style)
                    .addClass(o.className || 'btn-xs-wide')

            if (o.disabled) {
                $button.attr('disabled', 'disabled');
                $button.addClass('disabled');
            }

            if (o.hidden) {
                $button.addClass('hidden');
            }

            if (o.title) {
                $button.attr('title', o.title);
            }

            if (o.text) {
                $button.text(o.text);
            }

            if (o.html) {
                $button.html(o.html);
            }

            if (o.pullLeft || o.position === 'right') {
                $additional.append($button);

                return;
            }

            $main.append($button);
        });

        let allDdItemsHidden = this.dropdownItemList.filter(o => !o.hidden).length === 0;

        let $dropdown = $('<div>')
            .addClass('btn-group')
            .addClass(allDdItemsHidden ? 'hidden' : '')
            .append(
                $('<button>')
                    .attr('type', 'button')
                    .addClass('btn btn-default dropdown-toggle')
                    .addClass(allDdItemsHidden ? 'hidden' : '')
                    .attr('data-toggle', 'dropdown')
                    .append(
                        $('<span>').addClass('fas fa-ellipsis-h')
                    )
            );

        let $ul = $('<ul>').addClass('dropdown-menu pull-right');

        $dropdown.append($ul);

        this.dropdownItemList.forEach(/** module:ui.Dialog~Button */o => {
            let $a = $('<a>')
                .attr('role', 'button')
                .attr('tabindex', '0')
                .attr('data-name', o.name);

            if (o.text) {
                $a.text(o.text);
            }

            if (o.title) {
                $a.attr('title', o.title);
            }

            if (o.html) {
                $a.html(o.html);
            }

            let $li = $('<li>')
                .addClass(o.hidden ? ' hidden' : '')
                .append($a)

            $ul.append($li);
        });

        if ($ul.children().length) {
            $main.append($dropdown);
        }

        if ($additional.children().length) {
            $footer.append($additional);
        }

        $footer.append($main);

        return $footer;
    }

    /**
     * Show.
     */
    Dialog.prototype.show = function () {
        this.$el.modal({
             backdrop: this.backdrop,
             keyboard: this.keyboard,
        });

        this.$el.find('.modal-content').removeClass('hidden');

        let $modalBackdrop = $('.modal-backdrop');

        $modalBackdrop.each((i, el) => {
            if (i < $modalBackdrop.length - 1) {
                $(el).addClass('hidden');
            }
        });

        let $modalContainer = $('.modal-container');

        $modalContainer.each((i, el) => {
            if (i < $modalContainer.length - 1) {
                $(el).addClass('overlaid');
            }
        });

        this.$el.off('click.dismiss.bs.modal');

        this.$el.on(
            'click.dismiss.bs.modal',
            '> div.modal-dialog > div.modal-content > header [data-dismiss="modal"]',
            () => this.close()
        );

        this.$el.on('mousedown', e => {
            this.$mouseDownTarget = $(e.target);
        });

        this.$el.on('click.dismiss.bs.modal', (e) => {
            if (e.target !== e.currentTarget) {
                return;
            }

            if (
                this.$mouseDownTarget &&
                this.$mouseDownTarget.closest('.modal-content').length
            ) {
                return;
            }

            this.onBackdropClick();

            if (this.backdrop === 'static') {
                return;
            }

            this.close();
        });

        $('body > .popover').addClass('hidden');
    };

    /**
     * Hide.
     */
    Dialog.prototype.hide = function () {
        this.$el.find('.modal-content').addClass('hidden');
    };

    /**
     * Hide with a backdrop.
     */
    Dialog.prototype.hideWithBackdrop = function () {
        let $modalBackdrop = $('.modal-backdrop');

        $modalBackdrop.last().addClass('hidden');
        $($modalBackdrop.get($modalBackdrop.length - 2)).removeClass('hidden');

        let $modalContainer = $('.modal-container');

        $($modalContainer.get($modalContainer.length - 2)).removeClass('overlaid');

        this.skipRemove = true;

        setTimeout(() => {
            this.skipRemove = false;
        }, 50);

        this.$el.modal('hide');
        this.$el.find('.modal-content').addClass('hidden');
    };

    /**
     * @private
     */
    Dialog.prototype._close = function () {
        let $modalBackdrop = $('.modal-backdrop');

        $modalBackdrop.last().removeClass('hidden');

        let $modalContainer = $('.modal-container');

        $($modalContainer.get($modalContainer.length - 2)).removeClass('overlaid');
    };

    /**
     * @private
     * @param {Element} element
     * @return {Element|null}
     */
    Dialog.prototype._findClosestFocusableElement = function (element) {
        let isVisible = !!(
            element.offsetWidth ||
            element.offsetHeight ||
            element.getClientRects().length
        );

        if (isVisible) {
            element.focus({preventScroll: true});

            return element;
        }

        let $element = $(element);

        if ($element.closest('.dropdown-menu').length) {
            let $button = $element.closest('.btn-group').find(`[data-toggle="dropdown"]`);

            if ($button.length) {
                $button.get(0).focus({preventScroll: true});

                return $button.get(0);
            }
        }

        return null;
    };

    /**
     * Close.
     */
    Dialog.prototype.close = function () {
        if (!this.onCloseIsCalled) {
            this.onClose();
            this.onCloseIsCalled = true;

            if (this.activeElement) {
                setTimeout(() => {
                    let element = this._findClosestFocusableElement(this.activeElement);

                    if (element) {
                        element.focus({preventScroll: true});
                    }
                }, 50);
            }
        }

        this._close();
        this.$el.modal('hide');
        $(this).trigger('dialog:close');
    };

    /**
     * Remove.
     */
    Dialog.prototype.remove = function () {
        this.onRemove();

        // Hack allowing multiple backdrops.
        // `close` function may be called twice.
        this._close();
        this.$el.remove();

        $(this).off();
        $(window).off('resize.modal-height');
    };

    /**
     * UI utils.
     */
    Espo.Ui = {

        Dialog: Dialog,

        /**
         * @typedef {Object} Espo.Ui~ConfirmOptions
         *
         * @property {string} confirmText A confirm-button text.
         * @property {string} cancelText A cancel-button text.
         * @property {'danger'|'success'|'warning'|'default'} [confirmStyle='danger']
         *   A confirm-button style.
         * @property {'static'|boolean} [backdrop=false] A backdrop.
         * @property {function():void} [cancelCallback] A cancel-callback.
         * @property {boolean} [isHtml=false] Whether the message is HTML.
         */

        /**
         * Show a confirmation dialog.
         *
         * @param {string} message A message.
         * @param {Espo.Ui~ConfirmOptions|{}} o Options.
         * @param {function} [callback] Deprecated. Use a promise.
         * @param {Object} [context] Deprecated.
         * @returns {Promise} Resolves if confirmed.
         */
        confirm: function (message, o, callback, context) {
            o = o || {};

            let confirmText = o.confirmText;
            let cancelText = o.cancelText;
            let confirmStyle = o.confirmStyle || 'danger';
            let backdrop = o.backdrop;

            if (typeof backdrop === 'undefined') {
                backdrop = false;
            }

            let isResolved = false;

            let processCancel = () => {
                if (!o.cancelCallback) {
                    return;
                }

                if (context) {
                    o.cancelCallback.call(context);

                    return;
                }

                o.cancelCallback();
            };

            if (!o.isHtml) {
                message = Handlebars.Utils.escapeExpression(message);
            }

            return new Promise(resolve => {
                let dialog = new Dialog({
                    backdrop: backdrop,
                    header: false,
                    className: 'dialog-confirm',
                    body: '<span class="confirm-message">' + message + '</a>',
                    buttonList: [
                        {
                            text: ' ' + confirmText + ' ',
                            name: 'confirm',
                            className: 'btn-s-wide',
                            onClick: () => {
                                isResolved = true;

                                if (callback) {
                                    if (context) {
                                        callback.call(context);
                                    } else {
                                        callback();
                                    }
                                }

                                resolve();

                                dialog.close();
                            },
                            style: confirmStyle,
                            position: 'right',
                        },
                        {
                            text: cancelText,
                            name: 'cancel',
                            className: 'btn-s-wide',
                            onClick: () => {
                                isResolved = true;

                                dialog.close();
                                processCancel();
                            },
                            position: 'left',
                        }
                    ],
                    onClose: () => {
                        if (isResolved) {
                            return;
                        }

                        processCancel();
                    },
                });

                dialog.show();
                dialog.$el.find('button[data-name="confirm"]').focus();
            });
        },

        /**
         * Create a dialog.
         *
         * @param {module:ui.Dialog~Params} options Options.
         * @returns {Dialog}
         */
        dialog: function (options) {
            return new Dialog(options);
        },


        /**
         * Popover options.
         *
         * @typedef {Object} Espo.Ui~PopoverOptions
         *
         * @property {'bottom'|'top'} [placement='bottom'] A placement.
         * @property {string|JQuery} [container] A container selector.
         * @property {string} [content] An HTML content.
         * @property {string} [text] A text.
         * @property {'manual'|'click'|'hover'|'focus'} [trigger='manual'] A trigger type.
         * @property {boolean} [noToggleInit=false] Skip init toggle on click.
         * @property {boolean} [preventDestroyOnRender=false] Don't destroy on re-render.
         * @property {function(): void} [onShow] On-show callback.
         * @property {function(): void} [onHide] On-hide callback.
         */

        /**
         * Init a popover.
         *
         * @param {JQuery} $el An element.
         * @param {Espo.Ui~PopoverOptions} o Options.
         * @param {module:view} [view] A view.
         */
        popover: function ($el, o, view) {
            let $body = $('body')
            let content = o.content || Handlebars.Utils.escapeExpression(o.text || '');
            let isShown = false;

            let container = o.container;

            if (!container) {
                let $modalBody = $el.closest('.modal-body');

                container = $modalBody.length ? $modalBody : 'body';
            }

            $el
                .popover({
                    placement: o.placement || 'bottom',
                    container: container,
                    viewport: container,
                    html: true,
                    content: content,
                    trigger: o.trigger || 'manual',
                })
                .on('shown.bs.popover', () => {
                    isShown = true;

                    if (!view) {
                        return;
                    }

                    $body.off('click.popover-' + view.cid);

                    $body.on('click.popover-' + view.cid, e => {
                        if ($(e.target).closest('.popover-content').get(0)) {
                            return;
                        }

                        if ($.contains($el.get(0), e.target)) {
                            return;
                        }

                        if ($el.get(0) === e.target) {
                            return;
                        }

                        $body.off('click.popover-' + view.cid);
                        $el.popover('hide');
                    });

                    if (o.onShow) {
                        o.onShow();
                    }
                })
                .on('hidden.bs.popover', () => {
                    isShown = false;

                    if (o.onHide) {
                        o.onHide();
                    }
                });

            if (!o.noToggleInit) {
                $el.on('click', () => {
                    $el.popover('toggle');
                });
            }

            if (view) {
                let hide = () => {
                    if (!isShown) {
                        return;
                    }

                    $el.popover('hide');
                };

                let destroy = () => {
                    $el.popover('destroy');
                    $body.off('click.popover-' + view.cid);

                    view.off('remove', destroy);
                    view.off('render', destroy);
                    view.off('render', hide);
                };

                view.once('remove', destroy);

                if (!o.preventDestroyOnRender) {
                    view.once('render', destroy);
                }

                if (o.preventDestroyOnRender) {
                    view.on('render', hide);
                }
            }
        },

        /**
         * Show a notify-message.
         *
         * @param {string|false} message A message. False removes an already displayed message.
         * @param {'warning'|'danger'|'success'|'info'} [type='warning'] A type.
         * @param {number} [timeout] Microseconds. If empty, then won't be hidden.
         *   Should be hidden manually or by displaying another message.
         * @param {boolean} [closeButton] A close button.
         */
        notify: function (message, type, timeout, closeButton) {
            $('#notification').remove();

            if (!message) {
                return;
            }

            let parsedMessage = message.indexOf('\n') !== -1 ?
                marked.parse(message) :
                marked.parseInline(message);

            let sanitizedMessage = DOMPurify.sanitize(parsedMessage).toString();

            type = type || 'warning';
            closeButton = closeButton || false;

            if (type === 'error') {
                // For bc.
                type = 'danger';
            }

            let additionalClassName = closeButton ? ' alert-closable' : '';

            let $el = $('<div>')
                .addClass('alert alert-' + type + additionalClassName + ' fade in')
                .attr('id', 'notification')
                .css({
                    'position': 'fixed',
                    'top': '0',
                    'left': '50%',
                    'transform': 'translate(-50%, 0)',
                    'z-index': 2000,
                })
                .append(
                    $('<div>')
                        .addClass('message')
                        .html(sanitizedMessage)
                );

            if (closeButton) {
                let $close = $('<button>')
                    .attr('type', 'button')
                    .attr('data-dismiss', 'modal')
                    .attr('aria-hidden', 'true')
                    .addClass('close')
                    .html('&times;');

                $el.append(
                    $('<div>')
                        .addClass('close-container')
                        .append($close)
                );

                $close.on('click', () => $el.alert('close'));
            }

            if (timeout) {
                setTimeout(() => $el.alert('close'), timeout);
            }

            $el.appendTo('body')
        },

        /**
         * Show a warning message.
         *
         * @param {string} message A message.
         */
        warning: function (message) {
            Espo.Ui.notify(message, 'warning', 2000);
        },

        /**
         * Show a success message.
         *
         * @param {string} message A message.
         */
        success: function (message) {
            Espo.Ui.notify(message, 'success', 2000);
        },

        /**
         * Show an error message.
         *
         * @param {string} message A message.
         * @param {boolean} [closeButton] A close button.
         */
        error: function (message, closeButton) {
            closeButton = closeButton || false;
            let timeout = closeButton ? 0 : 4000;

            Espo.Ui.notify(message, 'danger', timeout, closeButton);
        },

        /**
         * Show an info message.
         *
         * @param {string} message A message.
         */
        info: function (message) {
            Espo.Ui.notify(message, 'info', 2000);
        },
    };

    /**
     * @deprecated Use `Espo.Ui`.
     */
    Espo.ui = Espo.Ui;

    return Espo.Ui;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('acl-manager', ['acl', 'utils'], function (Acl, Utils) {

    /**
     * Access checking.
     *
     * @class
     * @name Class
     * @memberOf module:acl-manager
     * @param {module:models/user.Class} user A user.
     * @param {Object} implementationClassMap `acl` implementations.
     * @param {boolean} aclAllowDeleteCreated Allow a user to delete records they created regardless a
     *   role access level.
     */
    var AclManager = function (user, implementationClassMap, aclAllowDeleteCreated) {
        this.setEmpty();

        this.user = user || null;
        this.implementationClassMap = implementationClassMap || {};
        this.aclAllowDeleteCreated = aclAllowDeleteCreated;
    };

    /**
     * An action.
     *
     * @typedef {'create'|'read'|'edit'|'delete'|'stream'} module:acl-manager.Class~action
     */

    _.extend(AclManager.prototype, /** @lends module:acl-manager.Class# */{

        /**
         * @protected
         */
        data: null,

        /**
         * @protected
         */
        user: null,

        /**
         * @protected
         */
        fieldLevelList: ['yes', 'no'],

        /**
         * @protected
         */
        setEmpty: function () {
            this.data = {
                table: {},
                fieldTable:  {},
                fieldTableQuickAccess: {},
            };

            this.implementationHash = {};
            this.forbiddenFieldsCache = {};
            this.implementationClassMap = {};
            this.forbiddenAttributesCache = {};
        },

        /**
         * Get an `acl` implementation.
         *
         * @protected
         * @param {string} scope A scope.
         * @returns {module:acl.Class}
         */
        getImplementation: function (scope) {
            if (!(scope in this.implementationHash)) {
                let implementationClass = Acl;

                if (scope in this.implementationClassMap) {
                    implementationClass = this.implementationClassMap[scope];
                }

                let forbiddenFieldList = this.getScopeForbiddenFieldList(scope);

                let params = {
                    aclAllowDeleteCreated: this.aclAllowDeleteCreated,
                    teamsFieldIsForbidden: !!~forbiddenFieldList.indexOf('teams'),
                    forbiddenFieldList: forbiddenFieldList,
                };

                let obj = new implementationClass(this.getUser(), scope, params);

                this.implementationHash[scope] = obj;
            }

            return this.implementationHash[scope];
        },

        /**
         * @protected
         */
        getUser: function () {
            return this.user;
        },

        /**
         * @protected
         */
        set: function (data) {
            data = data || {};

            this.data = data;
            this.data.table = this.data.table || {};
            this.data.fieldTable = this.data.fieldTable || {};
            this.data.attributeTable = this.data.attributeTable || {};
        },

        /**
         * @deprecated Use `getPermissionLevel`.
         *
         * @returns {string|null}
         */
        get: function (name) {
            return this.data[name] || null;
        },

        /**
         * Get a permission level.
         *
         * @param {string} permission A permission name.
         * @returns {'yes'|'all'|'team'|'no'}
         */
        getPermissionLevel: function (permission) {
            let permissionKey = permission;

            if (permission.substr(-10) !== 'Permission') {
                permissionKey = permission + 'Permission';
            }

            return this.data[permissionKey] || 'no';
        },

        /**
         * Get access level to a scope action.
         *
         * @param {string} scope A scope.
         * @param {module:acl-manager.Class~action} action An action.
         * @returns {'yes'|'all'|'team'|'no'|null}
         */
        getLevel: function (scope, action) {
            if (!(scope in this.data.table)) {
                return null;
            }

            if (typeof this.data.table[scope] !== 'object' || !(action in this.data.table[scope])) {
                return null;
            }

            return this.data.table[scope][action];
        },

        /**
         * Clear access data.
         *
         * @internal
         */
        clear: function () {
            this.setEmpty();
        },

        /**
         * Check whether a scope has ACL.
         *
         * @param {string} scope A scope.
         * @returns {boolean}
         */
        checkScopeHasAcl: function (scope) {
            var data = (this.data.table || {})[scope];

            if (typeof data === 'undefined') {
                return false;
            }

            return true;
        },

        /**
         * Check access to a scope.
         *
         * @param {string} scope A scope.
         * @param {module:acl-manager.Class~action|null} [action=null] An action.
         * @param {boolean} [precise=false] Deprecated. Not used.
         * @returns {boolean} True if has access.
         */
        checkScope: function (scope, action, precise) {
            let data = (this.data.table || {})[scope];

            if (typeof data === 'undefined') {
                data = null;
            }

            return this.getImplementation(scope).checkScope(data, action, precise);
        },

        /**
         * Check access to a model.
         *
         * @param {module:model.Class} model A model.
         * @param {module:acl-manager.Class~action|null} [action=null] An action.
         * @param {boolean} [precise=false] To return `null` if not enough data is set in a model.
         *   E.g. the `teams` field is not yet loaded.
         * @returns {boolean|null} True if has access, null if not clear.
         */
        checkModel: function (model, action, precise) {
            var scope = model.name;

            // todo move this to custom acl
            if (action === 'edit') {
                if (!model.isEditable()) {
                    return false;
                }
            }

            if (action === 'delete') {
                if (!model.isRemovable()) {
                    return false;
                }
            }

            let data = (this.data.table || {})[scope];

            if (typeof data === 'undefined') {
                data = null;
            }

            let impl = this.getImplementation(scope);

            if (action) {
                let methodName = 'checkModel' + Espo.Utils.upperCaseFirst(action);

                if (methodName in impl) {
                    return impl[methodName](model, data, precise);
                }
            }

            return impl.checkModel(model, data, action, precise);
        },

        /**
         * Check access to a scope or a model.
         *
         * @param {string|module:model.Class} subject What to check. A scope or a model.
         * @param {module:acl-manager.Class~action|null} [action=null] An action.
         * @param {boolean} [precise=false]  To return `null` if not enough data is set in a model.
         *   E.g. the `teams` field is not yet loaded.
         * @returns {boolean|null} {boolean|null} True if has access, null if not clear.
         */
        check: function (subject, action, precise) {
            if (typeof subject === 'string') {
                return this.checkScope(subject, action, precise);
            }

            return this.checkModel(subject, action, precise);
        },

        /**
         * Check if a user is owner to a model.
         *
         * @param {module:model.Class} model A model.
         * @returns {boolean|null} True if owner, null if not clear.
         */
        checkIsOwner: function (model) {
            return this.getImplementation(model.name).checkIsOwner(model);
        },

        /**
         * Check if a user in a team of a model.
         *
         * @param {module:model.Class} model A model.
         * @returns {boolean|null} True if in a team, null if not clear.
         */
        checkInTeam: function (model) {
            return this.getImplementation(model.name).checkInTeam(model);
        },

        /**
         * Check an assignment permission to a user.
         *
         * @param {module:models/User.Class} user A user.
         * @returns {boolean} True if has access.
         */
        checkAssignmentPermission: function (user) {
            return this.checkPermission('assignmentPermission', user);
        },

        /**
         * Check a user permission to a user.
         *
         * @param {module:models/User.Class} user A user.
         * @returns {boolean} True if has access.
         */
        checkUserPermission: function (user) {
            return this.checkPermission('userPermission', user);
        },

        /**
         * Check a specific permission to a user.
         *
         * @param {string} permission A permission name.
         * @param {module:models/User.Class} user A user.
         * @returns {boolean} True if has access.
         */
        checkPermission: function (permission, user) {
            if (this.getUser().isAdmin()) {
                return true;
            }

            let level = this.get(permission);

            if (level === 'no') {
                if (user.id === this.getUser().id) {
                    return true;
                }

                return false;
            }

            if (level === 'team') {
                if (!user.has('teamsIds')) {
                    return false;
                }

                let result = false;

                let teamsIds = user.get('teamsIds') || [];

                teamsIds.forEach(id => {
                    if (~(this.getUser().get('teamsIds') || []).indexOf(id)) {
                        result = true;
                    }
                });

                return result;
            }

            if (level === 'all') {
                return true;
            }

            if (level === 'yes') {
                return true;
            }

            return false;
        },

        /**
         * Get a list of forbidden fields for an entity type.
         *
         * @param {string} scope An entity type.
         * @param {'read'|'edit'} [action='read'] An action.
         * @param {'yes'|'no'} [thresholdLevel='no'] A threshold level.
         * @returns {string[]} A forbidden field list.
         */
        getScopeForbiddenFieldList: function (scope, action, thresholdLevel) {
            action = action || 'read';
            thresholdLevel = thresholdLevel || 'no';

            let key = scope + '_' + action + '_' + thresholdLevel;

            if (key in this.forbiddenFieldsCache) {
                return Utils.clone(this.forbiddenFieldsCache[key]);
            }

            let levelList = this.fieldLevelList.slice(this.fieldLevelList.indexOf(thresholdLevel));

            let fieldTableQuickAccess = this.data.fieldTableQuickAccess || {};
            let scopeData = fieldTableQuickAccess[scope] || {};
            let fieldsData = scopeData.fields || {};
            let actionData = fieldsData[action] || {};

            let fieldList = [];

            levelList.forEach(level => {
                let list = actionData[level] || [];

                list.forEach(field => {
                    if (~fieldList.indexOf(field)) {
                        return;
                    }

                    fieldList.push(field);
                });
            });

            this.forbiddenFieldsCache[key] = fieldList;

            return Utils.clone(fieldList);
        },

        /**
         * Get a list of forbidden attributes for an entity type.
         *
         * @param {string} scope An entity type.
         * @param {'read'|'edit'} [action='read'] An action.
         * @param {'yes'|'no'} [thresholdLevel='no'] A threshold level.
         * @returns {string[]} A forbidden attribute list.
         */
        getScopeForbiddenAttributeList: function (scope, action, thresholdLevel) {
            action = action || 'read';
            thresholdLevel = thresholdLevel || 'no';

            let key = scope + '_' + action + '_' + thresholdLevel;

            if (key in this.forbiddenAttributesCache) {
                return Utils.clone(this.forbiddenAttributesCache[key]);
            }

            let levelList = this.fieldLevelList.slice(this.fieldLevelList.indexOf(thresholdLevel));

            let fieldTableQuickAccess = this.data.fieldTableQuickAccess || {};
            let scopeData = fieldTableQuickAccess[scope] || {};

            let attributesData = scopeData.attributes || {};
            let actionData = attributesData[action] || {};

            let attributeList = [];

            levelList.forEach(level => {
                let list = actionData[level] || [];

                list.forEach(attribute => {
                    if (~attributeList.indexOf(attribute)) {
                        return;
                    }

                    attributeList.push(attribute);
                });
            });

            this.forbiddenAttributesCache[key] = attributeList;

            return Utils.clone(attributeList);
        },

        /**
         * Check an assignment permission to a team.
         *
         * @param {string} teamId A team ID.
         * @returns {boolean} True if has access.
         */
        checkTeamAssignmentPermission: function (teamId) {
            if (this.get('assignmentPermission') === 'all') {
                return true;
            }

            return !!~this.getUser().getLinkMultipleIdList('teams').indexOf(teamId);
        },

        /**
         * Check access to a field.
         * @param {string} scope An entity type.
         * @param {string} field A field.
         * @param {'read'|'edit'} [action='read'] An action.
         * @returns {boolean} True if has access.
         */
        checkField: function (scope, field, action) {
            return !~this.getScopeForbiddenFieldList(scope, action).indexOf(field);
        },
    });

    AclManager.extend = Backbone.Router.extend;

    return AclManager;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('cache', [], function () {

    /**
     * Cache for source and resource files.
     *
     * @class
     * @name Class
     * @memberOf module:cache
     * @param {Number} [cacheTimestamp] A cache timestamp.
     */
    var Cache = function (cacheTimestamp) {
        this.basePrefix = this.prefix;

        if (cacheTimestamp) {
            this.prefix =  this.basePrefix + '-' + cacheTimestamp;
        }

        if (!this.get('app', 'timestamp')) {
            this.storeTimestamp();
        }
    };

    _.extend(Cache.prototype, /** @lends module:cache.Class# */ {

        /**
         * @private
         */
        prefix: 'cache',

        /**
         * Handle actuality. Clears cache if not actual.
         *
         * @param {Number} cacheTimestamp A cache timestamp.
         */
        handleActuality: function (cacheTimestamp) {
            let storedTimestamp = this.getCacheTimestamp();

            if (storedTimestamp) {
                if (storedTimestamp !== cacheTimestamp) {
                    this.clear();
                    this.set('app', 'cacheTimestamp', cacheTimestamp);
                    this.storeTimestamp();
                }

                return;
            }

            this.clear();
            this.set('app', 'cacheTimestamp', cacheTimestamp);
            this.storeTimestamp();
        },

        /**
         * Get a cache timestamp.
         *
         * @returns {number}
         */
        getCacheTimestamp: function () {
            return parseInt(this.get('app', 'cacheTimestamp') || 0);
        },

        /**
         * @deprecated
         * @todo Revise whether is needed.
         */
        storeTimestamp: function () {
            let frontendCacheTimestamp = Date.now();

            this.set('app', 'timestamp', frontendCacheTimestamp);
        },

        /**
         * @private
         * @param {string} type
         * @returns {string}
         */
        composeFullPrefix: function (type) {
            return this.prefix + '-' + type;
        },

        /**
         * @private
         * @param {string} type
         * @param {string} name
         * @returns {string}
         */
        composeKey: function (type, name) {
            return this.composeFullPrefix(type) + '-' + name;
        },

        /**
         * @private
         * @param {string} type
         */
        checkType: function (type) {
            if (typeof type === 'undefined' && toString.call(type) !== '[object String]') {
                throw new TypeError("Bad type \"" + type + "\" passed to Cache().");
            }
        },

        /**
         * Get a stored value.
         *
         * @param {string} type A type/category.
         * @param {string} name A name.
         * @returns {string|null} Null if no stored value.
         */
        get: function (type, name) {
            this.checkType(type);

            let key = this.composeKey(type, name);

            let stored;

            try {
                stored = localStorage.getItem(key);
            }
            catch (error) {
                console.error(error);

                return null;
            }

            if (stored) {
                let result = stored;

                if (stored.length > 9 && stored.substr(0, 9) === '__JSON__:') {
                    let jsonString = stored.substr(9);

                    try {
                        result = JSON.parse(jsonString);
                    }
                    catch (error) {
                        result = stored;
                    }
                }

                return result;
            }

            return null;
        },

        /**
         * Store a value.
         *
         * @param {string} type A type/category.
         * @param {string} name A name.
         * @param {any} value A value.
         */
        set: function (type, name, value) {
            this.checkType(type);

            let key = this.composeKey(type, name);

            if (value instanceof Object || Array.isArray(value)) {
                value = '__JSON__:' + JSON.stringify(value);
            }

            try {
                localStorage.setItem(key, value);
            }
            catch (error) {
                console.log('Local storage limit exceeded.');
            }
        },

        /**
         * Clear a stored value.
         *
         * @param {string} [type] A type/category.
         * @param {string} [name] A name.
         */
        clear: function (type, name) {
            let reText;

            if (typeof type !== 'undefined') {
                if (typeof name === 'undefined') {
                    reText = '^' + this.composeFullPrefix(type);
                }
                else {
                    reText = '^' + this.composeKey(type, name);
                }
            }
            else {
                reText = '^' + this.basePrefix + '-';
            }

            let re = new RegExp(reText);

            for (var i in localStorage) {
                if (re.test(i)) {
                    delete localStorage[i];
                }
            }
        },
    });

    return Cache;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('storage', [], function () {

    /**
     * A storage. Data is saved across browser sessions, has no expiration time.
     *
     * @class
     * @name Class
     * @memberOf module:storage
     */
    let Storage = function () {};

    _.extend(Storage.prototype, /** @lends module:storage.Class# */{

        /**
         * @protected
         */
        prefix: 'espo',

        /**
         * @protected
         */
        storageObject: localStorage,

        /**
         * @private
         * @param {string} type
         * @returns {string}
         */
        composeFullPrefix: function (type) {
            return this.prefix + '-' + type;
        },

        /**
         * @private
         * @param {string} type
         * @param {string} name
         * @returns {string}
         */
        composeKey: function (type, name) {
            return this.composeFullPrefix(type) + '-' + name;
        },

        /**
         * @private
         * @param {string} type
         */
        checkType: function (type) {
            if (
                typeof type === 'undefined' &&
                toString.call(type) !== '[object String]' || type === 'cache'
            ) {
                throw new TypeError("Bad type \"" + type + "\" passed to Espo.Storage.");
            }
        },

        /**
         * Has a value.
         *
         * @param {string} type A type (category).
         * @param {string} name A name.
         * @returns {boolean}
         */
        has: function (type, name) {
            this.checkType(type);

            let key = this.composeKey(type, name);

            return this.storageObject.getItem(key) !== null;
        },

        /**
         * Get a value.
         *
         * @param {string} type A type (category).
         * @param {string} name A name.
         * @returns {*} Null if not stored.
         */
        get: function (type, name) {
            this.checkType(type);

            let key = this.composeKey(type, name);

            try {
                var stored = this.storageObject.getItem(key);
            }
            catch (error) {
                console.error(error);

                return null;
            }

            if (stored) {
                let result = stored;

                if (stored.length > 9 && stored.substr(0, 9) === '__JSON__:') {
                    let jsonString = stored.substr(9);

                    try {
                        result = JSON.parse(jsonString);
                    }
                    catch (error) {
                        result = stored;
                    }
                }
                else if (stored[0] === "{" || stored[0] === "[") { // for backward compatibility
                    try {
                        result = JSON.parse(stored);
                    }
                    catch (error) {
                        result = stored;
                    }
                }

                return result;
            }

            return null;
        },

        /**
         * Set (store) a value.
         *
         * @param {string} type A type (category).
         * @param {string} name A name.
         * @param {*} value A value.
         */
        set: function (type, name, value) {
            this.checkType(type);

            let key = this.composeKey(type, name);

            if (value instanceof Object || Array.isArray(value) || value === true || value === false) {
                value = '__JSON__:' + JSON.stringify(value);
            }

            try {
                this.storageObject.setItem(key, value);
            }
            catch (error) {
                console.error(error);
                return null;
            }
        },

        /**
         * Clear a value.
         *
         * @param {string} type A type (category).
         * @param {string} name A name.
         */
        clear: function (type, name) {
            let reText;

            if (typeof type !== 'undefined') {
                if (typeof name === 'undefined') {
                    reText = '^' + this.composeFullPrefix(type);
                }
                else {
                    reText = '^' + this.composeKey(type, name);
                }
            }
            else {
                reText = '^' + this.prefix + '-';
            }

            let re = new RegExp(reText);

            for (let i in this.storageObject) {
                if (re.test(i)) {
                    delete this.storageObject[i];
                }
            }
        }
    });

    Storage.extend = Backbone.Router.extend;

    return Storage;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('models/settings', ['model'], function (Dep) {

    /**
     * A config.
     *
     * @class
     * @name Class
     * @extends module:model.Class
     * @memberOf module:models/settings
     */
    return Dep.extend(/** @lends module:models/settings.Class# */{

        /**
         * @inheritDoc
         */
        name: 'Settings',

        entityType: 'Settings',

        /**
         * Load.
         *
         * @returns {Promise}
         */
        load: function () {
            return new Promise(resolve => {
                this.fetch()
                    .then(() => resolve());
            });
        },

        /**
         * Get a value by a path.
         *
         * @param {string[]} arr A path.
         * @returns {*} Null if not set.
         */
        getByPath: function (arr) {
            if (!arr.length) {
                return null;
            }

            let p;

            for (let i = 0; i < arr.length; i++) {
                var item = arr[i];

                if (i === 0) {
                    p = this.get(item);
                }
                else {
                    if (item in p) {
                        p = p[item];
                    }
                    else {
                        return null;
                    }
                }

                if (i === arr.length - 1) {
                    return p;
                }

                if (p === null || typeof p !== 'object') {
                    return null;
                }
            }
        },
    });
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('language', ['ajax'], function (Ajax) {

    /**
     * A language.
     *
     * @class
     * @name Class
     * @memberOf module:language
     * @param {module:cache.Class} [cache] A cache.
     */
    let Language = function (cache) {
        /**
         * @private
         * @type {module:cache.Class|null}
         */
        this.cache = cache || null;

        /**
         * @private
         * @type {Object}
         */
        this.data = {};

        /**
         * A name.
         *
         * @type {string}
         */
        this.name = 'default';
    };

    _.extend(Language.prototype, /** @lends module:language.Class# */{

        /**
         * @private
         */
        url: 'I18n',

        /**
         * Whether an item is set in language data.
         *
         * @param {string} scope A scope.
         * @param {string} category A category.
         * @param {string} name An item name.
         * @returns {boolean}
         */
        has: function (name, category, scope) {
            if (scope in this.data) {
                if (category in this.data[scope]) {
                    if (name in this.data[scope][category]) {
                        return true;
                    }
                }
            }

            return false;
        },

        /**
         * Get a value set in language data.
         *
         * @param {string} scope A scope.
         * @param {string} category A category.
         * @param {string} name An item name.
         * @returns {*}
         */
        get: function (scope, category, name) {
            if (scope in this.data) {
                if (category in this.data[scope]) {
                    if (name in this.data[scope][category]) {
                        return this.data[scope][category][name];
                    }
                }
            }

            if (scope === 'Global') {
                return name;
            }

            return false;
        },

        /**
         * Translate a label.
         *
         * @param {string} name An item name.
         * @param {string|null} [category='labels'] A category.
         * @param {string|null} [scope='Global'] A scope.
         * @returns {string}
         */
        translate: function (name, category, scope) {
            scope = scope || 'Global';
            category = category || 'labels';

            let res = this.get(scope, category, name);

            if (res === false && scope !== 'Global') {
                res = this.get('Global', category, name);
            }

            return res;
        },

        /**
         * Translation an option item value.
         *
         * @param {string} value An option value.
         * @param {string} field A field name.
         * @param {string} [scope='Global'] A scope.
         * @returns {string}
         */
        translateOption: function (value, field, scope) {
            let translation = this.translate(field, 'options', scope);

            if (typeof translation !== 'object') {
                translation = {};
            }

            return translation[value] || value;
        },

        /**
         * @private
         */
        loadFromCache: function (loadDefault) {
            let name = this.name;
            if (loadDefault) {
                name = 'default';
            }

            if (this.cache) {
                let cached = this.cache.get('app', 'language-' + name);

                if (cached) {
                    this.data = cached;

                    return true;
                }
            }

            return null;
        },

        /**
         * Clear a language cache.
         */
        clearCache: function () {
            if (this.cache) {
                this.cache.clear('app', 'language-' + this.name);
            }
        },

        /**
         * @private
         */
        storeToCache: function (loadDefault) {
            let name = this.name;

            if (loadDefault) {
                name = 'default';
            }

            if (this.cache) {
                this.cache.set('app', 'language-' + name, this.data);
            }
        },

        /**
         * Load data from cache or backend (if not yet cached).
         *
         * @param {Function} [callback] Deprecated.
         * @param {boolean} [disableCache=false] Deprecated
         * @param {boolean} [loadDefault=false] Deprecated.
         * @returns {Promise}
         */
        load: function (callback, disableCache, loadDefault) {
            if (callback) {
                this.once('sync', callback);
            }

            if (!disableCache) {
                if (this.loadFromCache(loadDefault)) {
                    this.trigger('sync');

                    return new Promise(resolve => resolve());
                }
            }

            return new Promise(resolve => {
                this.fetch(loadDefault)
                    .then(() => resolve());
            });
        },

        /**
         * Load default-language data from the backend.
         *
         * @returns {Promise}
         */
        loadDefault: function () {
            return this.load(null, false, true);
        },

        /**
         * Load data from the backend.
         *
         * @returns {Promise}
         */
        loadSkipCache: function () {
            return this.load(null, true);
        },

        /**
         * Load default-language data from the backend.
         *
         * @returns {Promise}
         */
        loadDefaultSkipCache: function () {
            return this.load(null, true, true);
        },

        /**
         * @private
         * @param {boolean} loadDefault
         * @returns {Promise}
         */
        fetch: function (loadDefault) {
            return Ajax.getRequest(this.url, {default: loadDefault}).then(data => {
                this.data = data;

                this.storeToCache(loadDefault);
                this.trigger('sync');
            });
        },

        /**
         * Sort a field list by a translated name.
         *
         * @param {string} scope An entity type.
         * @param {string[]} fieldList A field list.
         * @returns {string[]}
         */
        sortFieldList: function (scope, fieldList) {
            return fieldList.sort((v1, v2) => {
                 return this.translate(v1, 'fields', scope)
                     .localeCompare(this.translate(v2, 'fields', scope));
            });
        },

        /**
         * Sort an entity type list by a translated name.
         *
         * @param {string[]} entityList An entity type list.
         * @param {boolean} [plural=false] Use a plural label.
         * @returns {string[]}
         */
        sortEntityList: function (entityList, plural) {
            let category = 'scopeNames';

            if (plural) {
                category += 'Plural';
            }

            return entityList.sort((v1, v2) => {
                 return this.translate(v1, category)
                     .localeCompare(this.translate(v2, category));
            });
        },

        /**
         * Get a value by a path.
         *
         * @param {string[]|string} path A path.
         * @returns {*}
         */
        translatePath: function (path) {
            if (typeof path === 'string' || path instanceof String) {
                path = path.split('.');
            }

            let pointer = this.data;

            path.forEach(key => {
                if (key in pointer) {
                    pointer = pointer[key];
                }
            });

            return pointer;
        },

    }, Backbone.Events);

    return Language;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('metadata', [], function () {

    /**
     * Application metadata.
     *
     * @class
     * @name Class
     * @memberOf module:metadata
     *
     * @param {module:cache.Class} [cache] A cache.
     */
    let Metadata = function (cache) {
        /**
         * @private
         * @type {module:cache.Class|null}
         */
        this.cache = cache || null;

        /**
         * @private
         * @type {Object}
         */
        this.data = {};
    };

    _.extend(Metadata.prototype, /** @lends module:metadata.Class# */{

        /**
         * @private
         */
        url: 'Metadata',

        /**
         * Load from cache or the backend (if not yet cached).
         *
         * @param {Function|null} [callback] Deprecated. Use a promise.
         * @param {boolean} [disableCache=false] Bypass cache.
         * @returns {Promise}
         */
        load: function (callback, disableCache) {
            this.off('sync');

            if (callback) {
                this.once('sync', callback);
            }

            if (!disableCache) {
                 if (this.loadFromCache()) {
                    this.trigger('sync');

                    return new Promise(resolve => resolve());
                }
            }

            return new Promise(resolve => {
                this.fetch()
                    .then(() => resolve());
            });
        },

        /**
         * Load from the server.
         *
         * @returns {Promise}
         */
        loadSkipCache: function () {
            return this.load(null, true);
        },

        /**
         * @private
         * @returns {Promise}
         */
        fetch: function () {
            return Espo.Ajax
                .getRequest(this.url, null, {
                    dataType: 'json',
                    success: data => {
                        this.data = data;
                        this.storeToCache();
                        this.trigger('sync');
                    },
                });
        },

        /**
         * Get a value.
         *
         * @param {string[]|string} path A key path.
         * @param {*} [defaultValue] A value to return if not set.
         * @returns {*} Null if not set.
         */
        get: function (path, defaultValue) {
            defaultValue = defaultValue || null;

            let arr;

            if (Array && Array.isArray && Array.isArray(path)) {
                arr = path;
            }
            else {
                arr = path.split('.');
            }

            let pointer = this.data;
            let result = defaultValue;

            for (var i = 0; i < arr.length; i++) {
                let key = arr[i];

                if (!(key in pointer)) {
                    result = defaultValue;

                    break;
                }

                if (arr.length - 1 === i) {
                    result = pointer[key];
                }

                pointer = pointer[key];
            }

            return result;
        },

        /**
         * @private
         * @returns {boolean} True if success.
         */
        loadFromCache: function () {
            if (this.cache) {
                let cached = this.cache.get('app', 'metadata');

                if (cached) {
                    this.data = cached;

                    return true;
                }
            }

            return null;
        },

        /**
         * @private
         */
        storeToCache: function () {
            if (this.cache) {
                this.cache.set('app', 'metadata', this.data);
            }
        },

        /**
         * Clear cache.
         */
        clearCache: function () {
            if (!this.cache) {
                return;
            }

            this.cache.clear('app', 'metadata');
        },

        /**
         * Get a scope list.
         *
         * @returns {string}
         */
        getScopeList: function () {
            let scopes = this.get('scopes') || {};
            let scopeList = [];

            for (let scope in scopes) {
                var d = scopes[scope];

                if (d.disabled) {
                    continue;
                }

                scopeList.push(scope);
            }

            return scopeList;
        },

        /**
         * Get an object-scope list. An object-scope represents a business entity.
         *
         * @returns {string[]}
         */
        getScopeObjectList: function () {
            let scopes = this.get('scopes') || {};
            let scopeList = [];

            for (let scope in scopes) {
                let d = scopes[scope];

                if (d.disabled) {
                    continue;
                }

                if (!d.object) {
                    continue;
                }

                scopeList.push(scope);
            }

            return scopeList;
        },

        /**
         * Get an entity-scope list. Scopes that represents entities.
         *
         * @returns {string[]}
         */
        getScopeEntityList: function () {
            var scopes = this.get('scopes') || {};
            var scopeList = [];

            for (let scope in scopes) {
                let d = scopes[scope];

                if (d.disabled) {
                    continue;
                }

                if (!d.entity) {
                    continue;
                }

                scopeList.push(scope);
            }

            return scopeList;
        }

    }, Backbone.Events);

    return Metadata;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('field-manager', [], function () {

    /**
     * Utility for getting field related meta information.
     *
     * @class
     * @name Class
     * @memberOf module:field-manager
     *
     * @param {Object} defs Field type definitions (metadata > fields).
     * @param {module:metadata.Class} metadata Metadata.
     * @param {modules:acl-manager.Class} [acl] An ACL.
     */
    let FieldManager = function (defs, metadata, acl) {
        /**
         * @private
         * @type {Object}
         */
        this.defs = defs || {};

        /**
         * @private
         * @type {module:metadata.Class}
         */
        this.metadata = metadata;

        /**
         * @private
         * @type {module:acl-manager.Class}
         */
        this.acl = acl;
    };

    _.extend(FieldManager.prototype, /** @lends module:field-manager.Class# */{

        /**
         * Get a list of parameters for a specific field type.
         *
         * @param {string} fieldType A field type.
         * @returns {string[]}
         */
        getParamList: function (fieldType) {
            if (fieldType in this.defs) {
                return this.defs[fieldType].params || [];
            }

            return [];
        },

        /**
         * Whether search filters are allowed for a field type.
         *
         * @param {string} fieldType A field type.
         * @returns {boolean}
         */
        checkFilter: function (fieldType) {
            if (fieldType in this.defs) {
                if ('filter' in this.defs[fieldType]) {
                    return this.defs[fieldType].filter;
                }

                return false;
            }

            return false;
        },

        /**
         * Whether a merge operation is allowed for a field type.
         *
         * @param {string} fieldType A field type.
         * @returns {boolean}
         */
        isMergeable: function (fieldType) {
            if (fieldType in this.defs) {
                return !this.defs[fieldType].notMergeable;
            }

            return false;
        },

        /**
         * Get a list of attributes of an entity type.
         *
         * @param {string} entityType An entity type.
         * @returns {string[]}
         */
        getEntityTypeAttributeList: function (entityType) {
            let list = [];

            let defs = this.metadata.get('entityDefs.' + entityType + '.fields') || {};

            Object.keys(defs).forEach(field => {
                this.getAttributeList(defs[field]['type'], field).forEach(attr => {
                    if (!~list.indexOf(attr)) {
                        list.push(attr);
                    }
                });
            });

            return list;
        },

        /**
         * Get a list of actual attributes by a given field type and field name.
         * Non-actual attributes contains data that for a representation-only purpose.
         * E.g. `accountId` is actual, `accountName` is non-actual.
         *
         * @param {string} fieldType A field type.
         * @param {string} fieldName A field name.
         * @returns {string[]}
         */
        getActualAttributeList: function (fieldType, fieldName) {
            let fieldNames = [];

            if (fieldType in this.defs) {
                if ('actualFields' in this.defs[fieldType]) {
                    let actualFields = this.defs[fieldType].actualFields;

                    let naming = 'suffix';

                    if ('naming' in this.defs[fieldType]) {
                        naming = this.defs[fieldType].naming;
                    }

                    if (naming === 'prefix') {
                        actualFields.forEach(f => {
                            fieldNames.push(f + Espo.Utils.upperCaseFirst(fieldName));
                        });
                    }
                    else {
                        actualFields.forEach(f => {
                            fieldNames.push(fieldName + Espo.Utils.upperCaseFirst(f));
                        });
                    }
                }
                else {
                    fieldNames.push(fieldName);
                }
            }

            return fieldNames;
        },

        /**
         * Get a list of non-actual attributes by a given field type and field name.
         * Non-actual attributes contains data that for a representation-only purpose.
         * E.g. `accountId` is actual, `accountName` is non-actual.
         *
         * @param {string} fieldType A field type.
         * @param {string} fieldName A field name.
         * @returns {string[]}
         */
        getNotActualAttributeList: function (fieldType, fieldName) {
            let fieldNames = [];

            if (fieldType in this.defs) {
                if ('notActualFields' in this.defs[fieldType]) {
                    let notActualFields = this.defs[fieldType].notActualFields;

                    let naming = 'suffix';

                    if ('naming' in this.defs[fieldType]) {
                        naming = this.defs[fieldType].naming;
                    }

                    if (naming === 'prefix') {
                        notActualFields.forEach(f => {
                            if (f === '') {
                                fieldNames.push(fieldName);
                            }
                            else {
                                fieldNames.push(f + Espo.Utils.upperCaseFirst(fieldName));
                            }
                        });
                    }
                    else {
                        notActualFields.forEach(f => {
                            fieldNames.push(fieldName + Espo.Utils.upperCaseFirst(f));
                        });
                    }
                }
            }

            return fieldNames;
        },

        /**
         * Get an attribute list of a specific field.
         *
         * @param {string} entityType An entity type.
         * @param {string} field A field.
         * @returns {string[]}
         */
        getEntityTypeFieldAttributeList: function (entityType, field) {
            let type = this.metadata.get(['entityDefs', entityType, 'fields', field, 'type']);

            if (!type) {
                return [];
            }

            return _.union(
                this.getAttributeList(type, field),
                this._getEntityTypeFieldAdditionalAttributeList(entityType, field)
            );
        },

        /**
         * Get an actual attribute list of a specific field.
         *
         * @param {string} entityType An entity type.
         * @param {string} field A field.
         * @returns {string[]}
         */
        getEntityTypeFieldActualAttributeList: function (entityType, field) {
            let type = this.metadata.get(['entityDefs', entityType, 'fields', field, 'type']);

            if (!type) {
                return [];
            }

            return _.union(
                this.getActualAttributeList(type, field),
                this._getEntityTypeFieldAdditionalAttributeList(entityType, field)
            );
        },

        /**
         * @private
         */
        _getEntityTypeFieldAdditionalAttributeList: function (entityType, field) {
            let type = this.metadata.get(['entityDefs', entityType, 'fields', field, 'type']);

            if (!type) {
                return [];
            }

            let partList = this.metadata
                .get(['entityDefs', entityType, 'fields', field, 'additionalAttributeList']) || [];

            if (partList.length === 0) {
                return [];
            }

            let isPrefix = (this.defs[type] || {}).naming === 'prefix';

            let list = [];

            partList.forEach(item => {
                if (isPrefix) {
                    list.push(item + Espo.Utils.upperCaseFirst(field));

                    return;
                }

                list.push(field + Espo.Utils.upperCaseFirst(item));
            });

            return list;
        },

        /**
         * Get a list of attributes by a given field type and field name.
         *
         * @param {string} fieldType A field type.
         * @param {string} fieldName A field name.
         * @returns {string}
         */
        getAttributeList: function (fieldType, fieldName) {
            return _.union(
                this.getActualAttributeList(fieldType, fieldName),
                this.getNotActualAttributeList(fieldType, fieldName)
            );
        },

        /**
         * @typedef {Object} module:field-manager.Class~FieldFilters
         *
         * @property {string} [type] Only of a specific field type.
         * @property {string[]} [typeList] Only of a specific field types.
         * @property {boolean} [onlyAvailable] To exclude disabled, admin-only, internal, forbidden fields.
         * @property {'read'|'edit'} [acl] To exclude fields not accessible for a current user over
         *   a specified access level.
         */

        /**
         * Get a list of fields of a specific entity type.
         *
         * @param {string} entityType An entity type.
         * @param {module:field-manager.Class~FieldFilters} [o] Filters.
         * @returns {string[]}
         */
        getEntityTypeFieldList: function (entityType, o) {
            let list = Object.keys(this.metadata.get(['entityDefs', entityType, 'fields']) || {});

            o = o || {};

            let typeList = o.typeList;

            if (!typeList && o.type) {
                typeList = [o.type];
            }

            if (typeList) {
                list = list.filter(item => {
                    let type = this.metadata.get(['entityDefs', entityType, 'fields', item, 'type']);

                    return ~typeList.indexOf(type);
                });
            }

            if (o.onlyAvailable || o.acl) {
                list = list.filter(item => {
                    return this.isEntityTypeFieldAvailable(entityType, item);
                });
            }

            if (o.acl) {
                let level = o.acl || 'read';

                let forbiddenEditFieldList = this.acl.getScopeForbiddenFieldList(entityType, level);

                list = list.filter(item => {
                    return !~forbiddenEditFieldList.indexOf(item);
                });
            }

            return list;
        },

        /**
         * @deprecated Since v5.7.
         */
        getScopeFieldList: function (entityType) {
            return this.getEntityTypeFieldList(entityType);
        },

        /**
         * Get a field parameter value.
         *
         * @param {string} entityType An entity type.
         * @param {string} field A field name.
         * @param {string} param A parameter name.
         * @returns {*}
         */
        getEntityTypeFieldParam: function (entityType, field, param) {
            return this.metadata.get(['entityDefs', entityType, 'fields', field, param]);
        },

        /**
         * Get a view name/path for a specific field type.
         *
         * @param {string} fieldType A field type.
         * @returns {string}
         */
        getViewName: function (fieldType) {
            if (fieldType in this.defs) {
                if ('view' in this.defs[fieldType]) {
                    return this.defs[fieldType].view;
                }
            }

            return 'views/fields/' + Espo.Utils.camelCaseToHyphen(fieldType);
        },

        /**
         * @deprecated Use `getParamList`.
         */
        getParams: function (fieldType) {
            return this.getParamList(fieldType);
        },

        /**
         * @deprecated Use `getAttributeList`.
         */
        getAttributes: function (fieldType, fieldName) {
            return this.getAttributeList(fieldType, fieldName);
        },

        /**
         * @deprecated Use `getActualAttributeList`.
         */
        getActualAttributes: function (fieldType, fieldName) {
            return this.getActualAttributeList(fieldType, fieldName);
        },

        /**
         * @deprecated Use `getNotActualAttributeList`.
         */
        getNotActualAttributes: function (fieldType, fieldName) {
            return this.getNotActualAttributeList(fieldType, fieldName);
        },

        /**
         * Check whether a field is not disabled, not only-admin, not forbidden and not internal.
         *
         * @param {string} entityType An entity type.
         * @param {string} field A field name.
         * @returns {boolean}
         */
        isEntityTypeFieldAvailable: function (entityType, field) {
            if (this.metadata.get(['entityDefs', entityType, 'fields', field, 'disabled'])) {
                return false;
            }

            if (
                this.metadata.get(['entityAcl', entityType, 'fields', field, 'onlyAdmin']) ||
                this.metadata.get(['entityAcl', entityType, 'fields', field, 'forbidden']) ||
                this.metadata.get(['entityAcl', entityType, 'fields', field, 'internal'])
            ) {
                return false;
            }

            return true;
        },

        /**
         * @deprecated Use `isEntityTypeFieldAvailable`.
         */
        isScopeFieldAvailable: function (entityType, field) {
            return this.isEntityTypeFieldAvailable(entityType, field);
        },
    });

    return FieldManager;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('models/user', ['model'], function (Dep) {

    /**
     * A user.
     *
     * @class
     * @name Class
     * @extends module:model.Class
     *
     * @memberOf module:models/user
     */
    return Dep.extend(/** @lends module:models/user.Class# */{

        /**
         * @inheritDoc
         */
        name: 'User',

        /**
         * Is admin.
         *
         * @returns {boolean}
         */
        isAdmin: function () {
            return this.get('type') === 'admin' || this.isSuperAdmin();
        },

        /**
         * Is portal.
         *
         * @returns {boolean}
         */
        isPortal: function () {
            return this.get('type') === 'portal';
        },

        /**
         * Is API.
         *
         * @returns {boolean}
         */
        isApi: function () {
            return this.get('type') === 'api';
        },

        /**
         * Is regular.
         *
         * @returns {boolean}
         */
        isRegular: function () {
            return this.get('type') === 'regular';
        },

        /**
         * Is system.
         *
         * @returns {boolean}
         */
        isSystem: function () {
            return this.get('type') === 'system';
        },

        /**
         * Is super-admin.
         *
         * @returns {boolean}
         */
        isSuperAdmin: function () {
            return this.get('type') === 'super-admin';
        },
    });
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('models/preferences', ['model'], function (Dep) {

    /**
     * User preferences.
     *
     * @class
     * @name Class
     * @extends module:model.Class
     *
     * @memberOf module:models/preferences
     */
    return Dep.extend(/** @lends module:models/preferences.Class# */{

        /**
         * @inheritDoc
         */
        name: 'Preferences',

        entityType: 'Preferences',

        /**
         * Get dashlet options.
         *
         * @param {string} id A dashlet ID.
         * @returns {Object|null}
         */
        getDashletOptions: function (id) {
            let value = this.get('dashletsOptions') || {};

            return value[id] || null;
        },

        /**
         * Whether a user is portal.
         *
         * @returns {boolean}
         */
        isPortal: function () {
            return this.get('isPortalUser');
        },
    });
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('model-factory', [], function () {

    /**
     * A model factory.
     *
     * @class
     * @name Class
     * @memberOf module:model-factory
     */
    let ModelFactory = function (metadata, user) {
        this.metadata = metadata;
        this.user = user;

        this.seeds = {};
    };

    _.extend(ModelFactory.prototype, /** @lends module:model-factory.Class# */ {

        /**
         * @private
         */
        metadata: null,

        /**
         * @private
         */
        seeds: null,

        /**
         * @public
         * @type {module:date-time.Class|null}
         * @internal
         */
        dateTime: null,

        /**
         * @private
         */
        user: null,

        /**
         * Create a model.
         *
         * @param {string} name An entity type.
         * @param {Function} [callback] Deprecated.
         * @param {Object} [context] Deprecated.
         * @returns {Promise<module:model.Class>}
         */
        create: function (name, callback, context) {
            return new Promise(resolve => {
                context = context || this;

                this.getSeed(name, seed => {
                    let model = new seed();

                    if (callback) {
                        callback.call(context, model);
                    }

                    resolve(model);
                });
            });
        },

        /**
         * @private
         */
        getSeed: function (name, callback) {
            if ('name' in this.seeds) {
                callback(this.seeds[name]);

                return;
            }

            let className = this.metadata.get('clientDefs.' + name + '.model') || 'model';

            require(className, modelClass => {
                this.seeds[name] = modelClass.extend({
                    name: name,
                    entityType: name,
                    defs: this.metadata.get('entityDefs.' + name) || {},
                    dateTime: this.dateTime,
                    _user: this.user,
                });

                callback(this.seeds[name]);
            });
        },
    });

    return ModelFactory;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

 define('collection-factory', [], function () {

    /**
     * A collection factory.
     *
     * @class
     * @name Class
     * @memberOf module:collection-factory
     */
    let CollectionFactory = function (modelFactory, config) {
        this.modelFactory = modelFactory;
        this.config = config;
    };

    _.extend(CollectionFactory.prototype, /** @lends module:collection-factory.Class# */ {

        /**
         * @private
         */
        modelFactory: null,

        /**
         * @private
         */
        recordListMaxSizeLimit: 200,

        /**
         * Create a collection.
         *
         * @param {string} name An entity type.
         * @param {Function} [callback] Deprecated.
         * @param {Object} [context] Deprecated.
         * @returns {Promise<module:collection.Class>}
         */
        create: function (name, callback, context) {
            return new Promise(resolve => {
                context = context || this;

                this.modelFactory.getSeed(name, seed => {
                    let orderBy = this.modelFactory.metadata
                        .get(['entityDefs', name, 'collection', 'orderBy']);

                    let order = this.modelFactory.metadata
                        .get(['entityDefs', name, 'collection', 'order']);

                    let className = this.modelFactory.metadata
                        .get(['clientDefs', name, 'collection']) || 'collection';

                    require(className, collectionClass => {
                        let collection = new collectionClass(null, {
                            name: name,
                            orderBy: orderBy,
                            order: order,
                        });

                        collection.model = seed;
                        collection._user = this.modelFactory.user;
                        collection.entityType = name;

                        collection.maxMaxSize = this.config.get('recordListMaxSizeLimit') ||
                            this.recordListMaxSizeLimit;

                        if (callback) {
                            callback.call(context, collection);
                        }

                        resolve(collection);
                    });
                });
            });
        },
    });

    return CollectionFactory;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('pre-loader', [], function () {

    /**
     * A pre-loader.
     *
     * @class
     * @name Class
     * @memberOf module:pre-loader
     *
     * @param {module:cache.Class} cache A cache.
     * @param {Bull.Factory} viewFactory A view factory.
     * @param {string} [basePath] A base path.
     */
    let PreLoader = function (cache, viewFactory, basePath) {
        /**
         * @private
         * @type {module:cache.Class}
         */
        this.cache = cache;

        /**
         * @private
         * @type {Bull.Factory}
         */
        this.viewFactory = viewFactory;

        /**
         * @private
         * @type {string}
         */
        this.basePath = basePath || '';
    };

    _.extend(PreLoader.prototype, /** @lends module:pre-loader.Class# */{

        /**
         * @private
         * @type {string}
         */
        configUrl: 'client/cfg/pre-load.json',

        /**
         * Load.
         *
         * @param {Function} callback A callback.
         * @param {module:app.Class} app An application instance.
         */
        load: function (callback, app) {
            let bar = $(
                '<div class="progress pre-loading">' +
                '<div class="progress-bar" id="loading-progress-bar" role="progressbar" ' +
                'aria-valuenow="0" style="width: 0%;"></div></div>'
            ).prependTo('body');

            bar = bar.children();

            bar.css({
                'transition': 'width .1s linear',
                '-webkit-transition': 'width .1s linear'
            });

            let count = 0;
            let countLoaded = 0;
            let classesLoaded = 0;
            let layoutTypesLoaded = 0;
            let templatesLoaded = 0;

            let updateBar = () => {
                let percents = countLoaded / count * 100;

                bar.css('width', percents + '%').attr('aria-valuenow', percents);
            };

            let checkIfReady = () => {
                if (countLoaded >= count) {
                    clearInterval(timer);
                    callback.call(app, app);
                }
            };

            let timer = setInterval(checkIfReady, 100);

            let load = (data) => {
                data.classes = data.classes || [];
                data.templates = data.templates || [];
                data.layoutTypes = data.layoutTypes || [];

                let d = [];

                data.classes.forEach(item => {
                    if (item !== 'views/fields/enum') {
                        d.push(item); // TODO remove this hack
                    }
                });

                data.classes = d;

                count = data.templates.length + data.layoutTypes.length+ data.classes.length;

                let loadTemplates = () => {
                    data.templates.forEach(name =>  {
                        this.viewFactory._loader.load('template', name, () => {
                            templatesLoaded++;
                            countLoaded++;

                            updateBar();
                        });
                    });
                };

                let loadLayoutTypes = () => {
                    data.layoutTypes.forEach(name => {
                        this.viewFactory._loader.load('layoutTemplate', name, () => {
                            layoutTypesLoaded++;
                            countLoaded++;

                            updateBar();
                        });
                    });
                };

                let loadClasses = () => {
                    data.classes.forEach(name => {
                        Espo.loader.require(name, () => {
                            classesLoaded++;
                            countLoaded++;

                            updateBar();
                        });
                    });
                };

                loadTemplates();
                loadLayoutTypes();
                loadClasses();
            };

            Espo.Ajax
                .getRequest(this.basePath + this.configUrl, null, {
                    dataType: 'json',
                    local: true,
                })
                .then(data => load(data));
        }
    });

    return PreLoader;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('controllers/base', ['controller'], function (Dep) {

    /**
     * A base controller.
     *
     * @class
     * @name Class
     * @extends module:controller.Class
     * @memberOf module:controllers/base
     */
    return Dep.extend(/** @lends module:controllers/base.Class# */{

        /**
         * Log in.
         */
        login: function () {
            var viewName = this.getConfig().get('loginView') || 'views/login';

            this.entire(viewName, {}, loginView => {
                loginView.render();

                loginView.on('login', (userName, data) => {
                    this.trigger('login', this.normalizeLoginData(userName, data));
                });

                loginView.once('redirect', (viewName, userName, password, data) => {
                    loginView.remove();

                    this.entire(viewName, {
                        loginData: data,
                        userName: userName,
                        password: password,
                    }, secondStepView => {
                        secondStepView.render();

                        secondStepView.once('login', (userName, data) => {
                            this.trigger('login', this.normalizeLoginData(userName, data));
                        });

                        secondStepView.once('back', () => {
                            secondStepView.remove();

                            this.login();
                        });
                    });
                });
            });
        },

        /**
         * @private
         */
        normalizeLoginData: function (userName, data) {
            return {
                auth: {
                    userName: userName,
                    token: data.token,
                },
                user: data.user,
                preferences: data.preferences,
                acl: data.acl,
                settings: data.settings,
                appParams: data.appParams,
                language: data.language,
            };
        },

        /**
         * Log out.
         */
        logout: function () {
            var title = this.getConfig().get('applicationName') || 'EspoCRM';
            $('head title').text(title);

            this.trigger('logout');
        },

        /**
         * Clear cache.
         */
        clearCache: function () {
            this.entire('views/clear-cache', {
                cache: this.getCache()
            }, view => {
                view.render();
            });
        },

        actionLogin: function () {
            this.login();
        },

        actionLogout: function () {
            this.logout();
        },

        actionClearCache: function () {
            this.clearCache();
        },

        /**
         * Error Not Found.
         */
        error404: function () {
            this.entire('views/base', {template: 'errors/404'}, (view) => {
                view.render();
            });
        },

        /**
         * Error Forbidden.
         */
        error403: function () {
            this.entire('views/base', {template: 'errors/403'}, (view) => {
                view.render();
            });
        },
    });
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('router', [], function () {

    /**
     * On route.
     *
     * @event Backbone.Router#route
     * @param {string} name A route name.
     * @param {any[]} args Arguments.
     */

    /**
     * After dispatch.
     *
     * @event module:router#routed
     * @param {{
     *   controller: string,
     *   action:string,
     *   options: Object.<string,*>,
     * }} data A route data.
     */

    /**
     * A router.
     *
     * @class
     * @name Class
     * @memberOf module:router
     * @mixes Espo.Events
     */
    let Router = Backbone.Router.extend(/** @lends module:router.Class# */ {

        /**
         * @private
         */
        routeList: [
            {
                route: "clearCache",
                resolution: "clearCache"
            },
            {
                route: ":controller/view/:id/:options",
                resolution: "view"
            },
            {
                route: ":controller/view/:id",
                resolution: "view"
            },
            {
                route: ":controller/edit/:id/:options",
                resolution: "edit"
            },
            {
                route: ":controller/edit/:id",
                resolution: "edit"
            },
            {
                route: ":controller/create",
                resolution: "create"
            },
            {
                route: ":controller/:action/:options",
                resolution: "action",
                order: 100
            },
            {
                route: ":controller/:action",
                resolution: "action",
                order: 200
            },
            {
                route: ":controller",
                resolution: "defaultAction",
                order: 300
            },
            {
                route: "*actions",
                resolution: "home",
                order: 500
            },
        ],

        /**
         * @private
         */
        _bindRoutes: function() {},

        /**
         * @private
         */
        setupRoutes: function () {
            this.routeParams = {};

            if (this.options.routes) {
                let routeList = [];

                Object.keys(this.options.routes).forEach(route => {
                    let item = this.options.routes[route];

                    routeList.push({
                        route: route,
                        resolution: item.resolution || 'defaultRoute',
                        order: item.order || 0
                    });

                    this.routeParams[route] = item.params || {};
                });

                this.routeList = Espo.Utils.clone(this.routeList);

                routeList.forEach(item => {
                    this.routeList.push(item);
                });

                this.routeList = this.routeList.sort((v1, v2) => {
                    return (v1.order || 0) - (v2.order || 0);
                });
            }

            this.routeList.reverse().forEach(item => {
                this.route(item.route, item.resolution);
            });
        },

        /**
         * @private
         */
        _last: null,

        /**
         * Whether a confirm-leave-out was set.
         *
         * @public
         * @type {boolean}
         */
        confirmLeaveOut: false,

        /**
         * Whether back has been processed.
         *
         * @public
         * @type {boolean}
         */
        backProcessed: false,

        /**
         * @type {string}
         * @internal
         */
        confirmLeaveOutMessage: 'Are you sure?',

        /**
         * @type {string}
         * @internal
         */
        confirmLeaveOutConfirmText: 'Yes',

        /**
         * @type {string}
         * @internal
         */
        confirmLeaveOutCancelText: 'No',

        /**
         * @private
         */
        initialize: function (options) {
            this.options = options || {};
            this.setupRoutes();

            this.history = [];

            let hashHistory = [window.location.hash];

            window.addEventListener('hashchange', () => {
                let hash = window.location.hash

                if (
                    hashHistory.length > 1 &&
                    hashHistory[hashHistory.length - 2] === hash
                ) {
                    hashHistory = hashHistory.slice(0, -1);

                    this.backProcessed = true;
                    setTimeout(() => this.backProcessed = false, 50);

                    return;
                }

                hashHistory.push(hash);
            });

            this.on('route', () => {
                this.history.push(Backbone.history.fragment);
            });

            window.addEventListener('beforeunload', (e) => {
                e = e || window.event;

                if (this.confirmLeaveOut) {
                    e.preventDefault();

                    e.returnValue = this.confirmLeaveOutMessage;

                    return this.confirmLeaveOutMessage;
                }
            });
        },

        /**
         * Get a current URL.
         *
         * @returns {string}
         */
        getCurrentUrl: function () {
            return '#' + Backbone.history.fragment;
        },

        /**
         * @callback module:router.Class~checkConfirmLeaveOutCallback
         */

        /**
         * Process confirm-leave-out.
         *
         * @param {module:router.Class~checkConfirmLeaveOutCallback} callback Proceed if confirmed.
         * @param {Object|null} [context] A context.
         * @param {boolean} [navigateBack] To navigate back if not confirmed.
         */
        checkConfirmLeaveOut: function (callback, context, navigateBack) {
            if (this.confirmLeaveOutDisplayed) {
                this.navigateBack({trigger: false});

                this.confirmLeaveOutCanceled = true;

                return;
            }

            context = context || this;

            if (this.confirmLeaveOut) {
                this.confirmLeaveOutDisplayed = true;
                this.confirmLeaveOutCanceled = false;

                Espo.Ui.confirm(
                    this.confirmLeaveOutMessage,
                    {
                        confirmText: this.confirmLeaveOutConfirmText,
                        cancelText: this.confirmLeaveOutCancelText,
                        backdrop: true,
                        cancelCallback: () => {
                            this.confirmLeaveOutDisplayed = false;

                            if (navigateBack) {
                                this.navigateBack({trigger: false});
                            }
                        },
                    },
                    () => {
                        this.confirmLeaveOutDisplayed = false;
                        this.confirmLeaveOut = false;

                        if (!this.confirmLeaveOutCanceled) {
                            callback.call(context);
                        }
                    }
                );

                return;
            }

            callback.call(context);
        },

        /**
         * @private
         */
        route: function (route, name, callback) {
            let routeOriginal = route;

            if (!_.isRegExp(route)) {
                route = this._routeToRegExp(route);
            }

            if (_.isFunction(name)) {
                callback = name;
                name = '';
            }

            if (!callback) {
                callback = this[name];
            }

            let router = this;

            Backbone.history.route(route, function (fragment) {
                let args = router._extractParameters(route, fragment);

                let options = {};

                if (name === 'defaultRoute') {
                    let keyList = [];

                    routeOriginal.split('/').forEach(key => {
                        if (key && key.indexOf(':') === 0) {
                            keyList.push(key.substr(1));
                        }
                    });

                    keyList.forEach((key, i) => {
                        options[key] = args[i];
                    });
                }

                if (router.execute(callback, args, name, routeOriginal, options) !== false) {
                    router.trigger.apply(router, ['route:' + name].concat(args));

                    router.trigger('route', name, args);

                    Backbone.history.trigger('route', router, name, args);
                }
            });

            return this;
        },

        /**
         * @private
         */
        execute: function (callback, args, name, routeOriginal, options) {
            this.checkConfirmLeaveOut(function () {
                if (name === 'defaultRoute') {
                    this.defaultRoute(this.routeParams[routeOriginal], options);

                    return;
                }

                Backbone.Router.prototype.execute.call(this, callback, args, name);
            }, null, true);
        },

        /**
         * Navigate.
         *
         * @param {string} fragment An URL fragment.
         * @param {Object} [options] Options: trigger, replace.
         */
        navigate: function (fragment, options) {
            this.history.push(fragment);

            return Backbone.Router.prototype.navigate.call(this, fragment, options);
        },

        /**
         * Navigate back.
         *
         * @param {Object} [options] Options: trigger, replace.
         */
        navigateBack: function (options) {
            let url;

            if (this.history.length > 1) {
                url = this.history[this.history.length - 2];
            }
            else {
                url = this.history[0];
            }

            this.navigate(url, options);
        },

        /**
         * @private
         */
        _parseOptionsParams: function (string) {
            if (!string) {
                return {};
            }

            if (string.indexOf('&') === -1 && string.indexOf('=') === -1) {
                return string;
            }

            let options = {};

            if (typeof string !== 'undefined') {
                string.split('&').forEach((item, i) => {
                    let p = item.split('=');

                    options[p[0]] = true;

                    if (p.length > 1) {
                        options[p[0]] = p[1];
                    }
                });
            }

            return options;
        },

        /**
         * @private
         */
        defaultRoute: function (params, options) {
            let controller = params.controller || options.controller;
            let action = params.action || options.action;

            this.dispatch(controller, action, options);
        },

        /**
         * @private
         */
        record: function (controller, action, id, options) {
            options = this._parseOptionsParams(options);

            options.id = id;

            this.dispatch(controller, action, options);
        },

        /**
         * @private
         */
        view: function (controller, id, options) {
            this.record(controller, 'view', id, options);
        },

        /**
         * @private
         */
        edit: function (controller, id, options) {
            this.record(controller, 'edit', id, options);
        },

        /**
         * @private
         */
        create: function (controller, options) {
            this.record(controller, 'create', null, options);
        },

        /**
         * @private
         */
        action: function (controller, action, options) {
            this.dispatch(controller, action, this._parseOptionsParams(options));
        },

        /**
         * @private
         */
        defaultAction: function (controller) {
            this.dispatch(controller, null);
        },

        /**
         * @private
         */
        home: function () {
            this.dispatch('Home', null);
        },

        /**
         * Process `logout` route.
         */
        logout: function () {
            this.dispatch(null, 'logout');

            this.navigate('', {trigger: false});
        },

        /**
         * @private
         */
        clearCache: function () {
            this.dispatch(null, 'clearCache');
        },

        /**
         * Dispatch a controller action.
         *
         * @param {string} controller A controller.
         * @param {string} action An action.
         * @param {Object} [options] Options.
         * @fires module:router#routed
         */
        dispatch: function (controller, action, options) {
            let o = {
                controller: controller,
                action: action,
                options: options,
            };

            this._last = o;

            this.trigger('routed', o);
        },

        /**
         * Get the last route data.
         *
         * @returns {Object}
         */
        getLast: function () {
            return this._last;
        },
    });

    return Router;
});

function isIOS9UIWebView() {
    let userAgent = window.navigator.userAgent;

    return /(iPhone|iPad|iPod).* OS 9_\d/.test(userAgent) && !/Version\/9\./.test(userAgent);
}

// Override `backbone.history.loadUrl()` and `backbone.history.navigate()`
// to fix the navigation issue (`location.hash` not changed immediately) on iOS9.
if (isIOS9UIWebView()) {
    Backbone.history.loadUrl = function (fragment, oldHash) {
        fragment = this.fragment = this.getFragment(fragment);

        return _.any(this.handlers, function (handler) {
            if (handler.route.test(fragment)) {
                function runCallback() {
                    handler.callback(fragment);
                }

                function wait() {
                    if (oldHash === location.hash) {
                        window.setTimeout(wait, 50);
                    }
                    else {
                        runCallback();
                    }
                }

                wait();

                return true;
            }
        });
    };

    Backbone.history.navigate = function (fragment, options) {
        let pathStripper = /#.*$/;

        if (!Backbone.History.started) {
            return false;
        }

        if (!options || options === true) {
            options = {
                trigger: !!options
            };
        }

        let url = this.root + '#' + (fragment = this.getFragment(fragment || ''));

        fragment = fragment.replace(pathStripper, '');

        if (this.fragment === fragment) {
            return;
        }

        this.fragment = fragment;

        if (fragment === '' && url !== '/') {
            url = url.slice(0, -1);
        }

        let oldHash = location.hash;

        if (this._hasPushState) {
            this.history[options.replace ? 'replaceState' : 'pushState']({}, document.title, url);
        }
        else if (this._wantsHashChange) {
            this._updateHash(this.location, fragment, options.replace);

            if (
                this.iframe &&
                (fragment !== this.getFragment(this.getHash(this.iframe)))
            ) {
                if (!options.replace) {
                    this.iframe.document.open().close();
                }

                this._updateHash(this.iframe.location, fragment, options.replace);
            }
        }
        else {
            return this.location.assign(url);
        }

        if (options.trigger) {
            return this.loadUrl(fragment, oldHash);
        }
    };
}
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('date-time', [], function () {

    /**
     * A date-time util.
     *
     * @class
     * @name Class
     * @memberOf module:date-time
     */
    let DateTime = function () {};

    _.extend(DateTime.prototype, /** @lends module:date-time.Class# */{

        /**
         * A system date format.
         *
         * @type {string}
         */
        internalDateFormat: 'YYYY-MM-DD',

        /**
         * A system date-time format.
         *
         * @type {string}
         */
        internalDateTimeFormat: 'YYYY-MM-DD HH:mm',

        /**
         * A system date-time format including seconds.
         *
         * @type {string}
         */
        internalDateTimeFullFormat: 'YYYY-MM-DD HH:mm:ss',

        /**
         * A date format for a current user.
         *
         * @type {string}
         */
        dateFormat: 'MM/DD/YYYY',

        /**
         * A time format for a current user.
         *
         * @type {string}
         */
        timeFormat: 'HH:mm',

        /**
         * A time zone for a current user.
         *
         * @type {string|null}
         */
        timeZone: null,

        /**
         * A week start for a current user.
         *
         * @type {Number}
         */
        weekStart: 1,

        /**
         * @private
         */
        readableDateFormatMap: {
            'DD.MM.YYYY': 'DD MMM',
            'DD/MM/YYYY': 'DD MMM',
        },

        /**
         * @private
         */
        readableShortDateFormatMap: {
            'DD.MM.YYYY': 'D MMM',
            'DD/MM/YYYY': 'D MMM',
        },

        /**
         * Whether a time format has a meridian (am/pm).
         *
         * @returns {boolean}
         */
        hasMeridian: function () {
            return (new RegExp('A', 'i')).test(this.timeFormat);
        },

        /**
         * Get a date format.
         *
         * @returns {string}
         */
        getDateFormat: function () {
            return this.dateFormat;
        },

        /**
         * Get a time format.
         *
         * @returns {string}
         */
        getTimeFormat: function () {
            return this.timeFormat;
        },

        /**
         * Get a date-time format.
         *
         * @returns {string}
         */
        getDateTimeFormat: function () {
            return this.dateFormat + ' ' + this.timeFormat;
        },

        /**
         * Get a readable date format.
         *
         * @returns {string}
         */
        getReadableDateFormat: function () {
            return this.readableDateFormatMap[this.getDateFormat()] || 'MMM DD';
        },

        /**
         * Get a readable short date format.
         *
         * @returns {string}
         */
        getReadableShortDateFormat: function () {
            return this.readableShortDateFormatMap[this.getDateFormat()] || 'MMM D';
        },

        /**
         * Get a readable date-time format.
         *
         * @returns {string}
         */
        getReadableDateTimeFormat: function () {
            return this.getReadableDateFormat() + ' ' + this.timeFormat;
        },

        /**
         * Get a readable short date-time format.
         *
         * @returns {string}
         */
        getReadableShortDateTimeFormat: function () {
            return this.getReadableShortDateFormat() + ' ' + this.timeFormat;
        },

        /**
         * Convert a date from a display representation to system.
         *
         * @param {string} string A date value.
         * @returns {string} A system date value.
         */
        fromDisplayDate: function (string) {
            if (!string) {
                return null;
            }

            let m = moment(string, this.dateFormat);

            if (!m.isValid()) {
                return -1;
            }

            return m.format(this.internalDateFormat);
        },

        /**
         * Get a time-zone.
         *
         * @returns {string}
         */
        getTimeZone: function () {
            return this.timeZone ? this.timeZone : 'UTC';
        },

        /**
         * Convert a date from system to a display representation.
         *
         * @param {string} string A system date value.
         * @returns {string} A display date value.
         */
        toDisplayDate: function (string) {
            if (!string || (typeof string !== 'string')) {
                return '';
            }

            let m = moment(string, this.internalDateFormat);

            if (!m.isValid()) {
                return '';
            }

            return m.format(this.dateFormat);
        },

        /**
         * Convert a date-time from system to a display representation.
         *
         * @param {string} string A system date-tyime value.
         * @returns {string} A display date-time value.
         */
        fromDisplay: function (string) {
            if (!string) {
                return null;
            }

            let m;

            if (this.timeZone) {
                m = moment.tz(string, this.getDateTimeFormat(), this.timeZone).utc();
            }
            else {
                m = moment.utc(string, this.getDateTimeFormat());
            }

            if (!m.isValid()) {
                return -1;
            }

            return m.format(this.internalDateTimeFormat) + ':00';
        },

        /**
         * Convert a date-time from system to a display representation.
         *
         * @param {string} string A system date value.
         * @returns {string} A display date-time value.
         */
        toDisplay: function (string) {
            if (!string) {
                return '';
            }

            return this.toMoment(string).format(this.getDateTimeFormat());
        },

        /**
         * @deprecated Use `fromDisplay`.
         */
        fromDisplayDateTime: function (string) {
            return this.fromDisplay(string);
        },

        /**
         * @deprecated Use `toDisplay`.
         */
        toDisplayDateTime: function (string) {
            return this.toDisplay(string);
        },

        /**
         * Get a now moment.
         *
         * @returns {moment.Moment}
         */
        getNowMoment: function () {
            return moment().tz(this.getTimeZone())
        },

        /**
         * Convert a date to a moment.
         *
         * @param {string} string A date value in a system representation.
         * @returns {moment.Moment}
         */
        toMomentDate: function (string) {
            return moment.utc(string, this.internalDateFormat);
        },

        /**
         * Convert a date-time to a moment.
         *
         * @param {string} string A date-time value in a system representation.
         * @returns {moment.Moment}
         */
        toMoment: function (string) {
            let m = moment.utc(string, this.internalDateTimeFullFormat);

            if (this.timeZone) {
                m = m.tz(this.timeZone);
            }

            return m;
        },

        /**
         * Convert a date-time value from ISO to a system representation.
         *
         * @param {string} string
         * @returns {string} A date-time value in a system representation.
         */
        fromIso: function (string) {
            if (!string) {
                return '';
            }

            let m = moment(string).utc();

            return m.format(this.internalDateTimeFormat);
        },

        /**
         * Convert a date-time value from system to an ISO representation.
         *
         * @param string A date-time value in a system representation.
         * @returns {string} An ISO date-time value.
         */
        toIso: function (string) {
            if (!string) {
                return null;
            }

            return this.toMoment(string).format();
        },

        /**
         * Get a today date value in a system representation.
         *
         * @returns {string}
         */
        getToday: function () {
            return moment().tz(this.getTimeZone()).format(this.internalDateFormat);
        },

        /**
         * Get a date-time value in a system representation, shifted from now.
         *
         * @param {Number} shift A number to shift by.
         * @param {'minutes'|'hours'|'days'|'weeks'|'months'|'years'} type A shift unit.
         * @param {Number} [multiplicity] A number of minutes a value will be aliquot to.
         * @returns {string} A date-time value in a system representation
         */
        getDateTimeShiftedFromNow: function (shift, type, multiplicity) {
            if (!multiplicity) {
                return moment.utc().add(shift, type).format(this.internalDateTimeFormat);
            }

            let unix = moment().unix();

            unix = unix - (unix % (multiplicity * 60));

            return moment.unix(unix).utc().add(shift, type).format(this.internalDateTimeFormat);
        },

        /**
         * Get a date value in a system representation, shifted from today.
         *
         * @param {Number} shift A number to shift by.
         * @param {'days'|'weeks'|'months'|'years'} type A shift unit.
         * @returns {string} A date value in a system representation
         */
        getDateShiftedFromToday: function (shift, type) {
            return moment.tz(this.getTimeZone()).add(shift, type).format(this.internalDateFormat);
        },

        /**
         * Get a now date-time value in a system representation.
         *
         * @param {Number} [multiplicity] A number of minutes a value will be aliquot to.
         * @returns {string}
         */
        getNow: function (multiplicity) {
            if (!multiplicity) {
                return moment.utc().format(this.internalDateTimeFormat);
            }

            let unix = moment().unix();

            unix = unix - (unix % (multiplicity * 60));

            return moment.unix(unix).utc().format(this.internalDateTimeFormat);
        },

        /**
         * Set settings and preferences.
         *
         * @param {module:models/settings.Class} settings Settings.
         * @param {module:models/preferences.Class} preferences Preferences.
         * @internal
         */
        setSettingsAndPreferences: function (settings, preferences) {
            if (settings.has('dateFormat')) {
                this.dateFormat = settings.get('dateFormat');
            }

            if (settings.has('timeFormat')) {
                this.timeFormat = settings.get('timeFormat');
            }

            if (settings.has('timeZone')) {
                this.timeZone = settings.get('timeZone') || null;

                if (this.timeZone === 'UTC') {
                    this.timeZone = null;
                }
            }

            if (settings.has('weekStart')) {
                this.weekStart = settings.get('weekStart');
            }

            preferences.on('change', model => {
                if (model.has('dateFormat') && model.get('dateFormat')) {
                    this.dateFormat = model.get('dateFormat');
                }

                if (model.has('timeFormat') && model.get('timeFormat')) {
                    this.timeFormat = model.get('timeFormat');
                }

                if (model.has('timeZone') && model.get('timeZone')) {

                    this.timeZone = model.get('timeZone');
                }
                if (model.has('weekStart') && model.get('weekStart') !== -1) {
                    this.weekStart = model.get('weekStart');
                }

                if (this.timeZone === 'UTC') {
                    this.timeZone = null;
                }
            });
        },

        /**
         * Set a language.
         *
         * @param {module:language.Class} language A language.
         * @internal
         */
        setLanguage: function (language) {
            moment.updateLocale('en', {
                months: language.translate('monthNames', 'lists'),
                monthsShort: language.translate('monthNamesShort', 'lists'),
                weekdays: language.translate('dayNames', 'lists'),
                weekdaysShort: language.translate('dayNamesShort', 'lists'),
                weekdaysMin: language.translate('dayNamesMin', 'lists'),
            });

            moment.locale('en');
        },
    });

    return DateTime;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('layout-manager', [], function () {

    /**
     * A layout manager.
     *
     * @class
     * @name Class
     * @memberOf module:layout-manager
     *
     * @param {module:cache.Class|null} [cache] A cache.
     * @param {string} [applicationId] An application ID.
     * @param {string} [userId] A user ID.
     */
    let LayoutManager = function (cache, applicationId, userId) {
        /**
         * @private
         * @type {module:cache.Class|null}
         */
        this.cache = cache || null;

        /**
         * @private
         * @type {string}
         */
        this.applicationId = applicationId || 'default-id';

        /**
         * @private
         * @type {string|null}
         */
        this.userId = userId || null;

        /**
         * @private
         * @type {Object}
         */
        this.data = {};

        /**
         * @private
         */
        this.ajax = Espo.Ajax;
    };

    _.extend(LayoutManager.prototype, /** @lends module:layout-manager.Class# */{

        /**
         * Set a user ID. To be used for the cache purpose.
         *
         * @param {string} userId A user ID.
         *
         * @todo Throw an exception if already set.
         */
        setUserId: function (userId) {
            this.userId = userId
        },

        /**
         * @private
         * @param {string} scope
         * @param {string} type
         * @returns {string}
         */
        getKey: function (scope, type) {
            if (this.userId) {
                return this.applicationId + '-' + this.userId + '-' + scope + '-' + type;
            }

            return this.applicationId + '-' + scope + '-' + type;
        },

        /**
         * @private
         * @param {string} scope
         * @param {string} type
         * @param {string} [setId]
         * @returns {string}
         */
        getUrl: function (scope, type, setId) {
            let url = scope + '/layout/' + type;

            if (setId) {
                url += '/' + setId;
            }

            return url;
        },

        /**
         * @callback module:layout-manager~getCallback
         *
         * @param {*} layout A layout.
         */

        /**
         * Get a layout.
         *
         * @param {string} scope A scope (entity type).
         * @param {string} type A layout type (name).
         * @param {module:layout-manager~getCallback} callback
         * @param {boolean} [cache=true] Use cache.
         */
        get: function (scope, type, callback, cache) {
            if (typeof cache === 'undefined') {
                cache = true;
            }

            let key = this.getKey(scope, type);

            if (cache) {
                if (key in this.data) {
                    if (typeof callback === 'function') {
                        callback(this.data[key]);
                    }

                    return;
                }
            }

            if (this.cache && cache) {
                let cached = this.cache.get('app-layout', key);

                if (cached) {
                    if (typeof callback === 'function') {
                        callback(cached);
                    }

                    this.data[key] = cached;

                    return;
                }
            }

            this.ajax
                .getRequest(this.getUrl(scope, type))
                .then(
                    layout => {
                        if (typeof callback === 'function') {
                            callback(layout);
                        }

                        this.data[key] = layout;

                        if (this.cache) {
                            this.cache.set('app-layout', key, layout);
                        }
                    }
                );
        },

        /**
         * Get an original layout.
         *
         * @param {string} scope A scope (entity type).
         * @param {string} type A layout type (name).
         * @param {string} [setId]
         * @param {module:layout-manager~getCallback} callback
         */
        getOriginal: function (scope, type, setId, callback) {
            let url = 'Layout/action/getOriginal?scope='+scope+'&name='+type;

            if (setId) {
                url += '&setId=' + setId;
            }

            Espo.Ajax
                .getRequest(url)
                .then(
                    layout => {
                        if (typeof callback === 'function') {
                            callback(layout);
                        }
                    }
                );
        },

        /**
         * Store and set a layout.
         *
         * @param {string} scope A scope (entity type).
         * @param {string} type A type (name).
         * @param {*} layout A layout.
         * @param {Function} callback A callback.
         * @param {string} [setId] A set ID.
         * @returns {Promise}
         */
        set: function (scope, type, layout, callback, setId) {
            return Espo.Ajax
                .putRequest(this.getUrl(scope, type, setId), layout)
                .then(
                    () => {
                        let key = this.getKey(scope, type);

                        if (this.cache && key) {
                            this.cache.clear('app-layout', key);
                        }

                        delete this.data[key];

                        this.trigger('sync');

                        if (typeof callback === 'function') {
                            callback();
                        }
                    }
                );
        },

        /**
         * Reset a layout to default.
         *
         * @param {string} scope A scope (entity type).
         * @param {string} type A type (name).
         * @param {Function} callback A callback.
         * @param {string} [setId] A set ID.
         */
        resetToDefault: function (scope, type, callback, setId) {
            Espo.Ajax
                .postRequest('Layout/action/resetToDefault', {
                    scope: scope,
                    name: type,
                    setId: setId,
                })
                .then(
                    () => {
                        let key = this.getKey(scope, type);

                        if (this.cache) {
                            this.cache.clear('app-layout', key);
                        }

                        delete this.data[key];

                        this.trigger('sync');

                        if (typeof callback === 'function') {
                            callback();
                        }
                    }
                );
        },

        /**
         * Clear loaded data.
         */
        clearLoadedData: function () {
            this.data = {};
        },

    }, Backbone.Events);

    return LayoutManager;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('theme-manager', [], function () {

    /**
     * A theme manager.
     *
     * @class
     * @name Class
     * @memberOf module:theme-manager
     *
     * @param {module:models/settings.Class} config A config.
     * @param {module:models/preferences.Class} preferences Preferences.
     * @param {module:metadata.Class} metadata Metadata.
     * @param {?string} [name] A name. If not set, then will be obtained from config and preferences.
     */
    let ThemeManager = function (config, preferences, metadata, name) {
        /**
         * @private
         * @type {module:models/settings.Class}
         */
        this.config = config;
        /**
         * @private
         * @type {module:models/preferences.Class}
         */
        this.preferences = preferences;
        /**
         * @private
         * @type {module:metadata.Class}
         */
        this.metadata = metadata;

        /**
         * @private
         * @type {?string}
         */
        this.name = name || null;
    };

    _.extend(ThemeManager.prototype, /** module:theme-manager.Class# */{

        /**
         * @private
         */
        defaultParams: {
            screenWidthXs: 768,
            dashboardCellHeight: 155,
            dashboardCellMargin: 19,
        },

        /**
         * Get a theme name for the current user.
         *
         * @returns {string}
         */
        getName: function () {
            if (this.name) {
                return this.name;
            }

            if (!this.config.get('userThemesDisabled')) {
                let name = this.preferences.get('theme');

                if (name && name !== '') {
                    return name;
                }
            }

            return this.config.get('theme');
        },

        /**
         * Get a theme name currently applied to the DOM.
         *
         * @returns {string|null} Null if not applied.
         */
        getAppliedName: function () {
            let name = window.getComputedStyle(document.body).getPropertyValue('--theme-name');

            if (!name) {
                return null;
            }

            return name.trim();
        },

        /**
         * Whether a current theme is applied to the DOM.
         *
         * @returns {boolean}
         */
        isApplied: function () {
            let appliedName = this.getAppliedName();

            if (!appliedName) {
                return true;
            }

            return this.getName() === appliedName;
        },

        /**
         * Get a stylesheet path for a current theme.
         *
         * @returns {string}
         */
        getStylesheet: function () {
            let link = this.getParam('stylesheet') || 'client/css/espo/espo.css';

            if (this.config.get('cacheTimestamp')) {
                link += '?r=' + this.config.get('cacheTimestamp').toString();
            }

            return link;
        },

        /**
         * Get an iframe stylesheet path for a current theme.
         *
         * @returns {string}
         */
        getIframeStylesheet: function () {
            let link = this.getParam('stylesheetIframe') || 'client/css/espo/espo-iframe.css';

            if (this.config.get('cacheTimestamp')) {
                link += '?r=' + this.config.get('cacheTimestamp').toString();
            }

            return link;
        },

        /**
         * Get an iframe-fallback stylesheet path for a current theme.
         *
         * @returns {string}
         */
        getIframeFallbackStylesheet: function () {
            let link = this.getParam('stylesheetIframeFallback') || 'client/css/espo/espo-iframe.css'

            if (this.config.get('cacheTimestamp')) {
                link += '?r=' + this.config.get('cacheTimestamp').toString();
            }

            return link;
        },

        /**
         * Get a theme parameter.
         *
         * @param {string} name A parameter name.
         * @returns {*} Null if not set.
         */
        getParam: function (name) {
            if (name !== 'params' && name !== 'mappedParams') {
                let varValue = this.getVarParam(name);

                if (varValue !== null) {
                    return varValue;
                }

                let mappedValue = this.getMappedParam(name);

                if (mappedValue !== null) {
                    return mappedValue;
                }
            }

            let value = this.metadata.get(['themes', this.getName(), name]);

            if (value !== null) {
                return value;
            }

            value = this.metadata.get(['themes', this.getParentName(), name]);

            if (value !== null) {
                return value;
            }

            return this.defaultParams[name] || null;
        },

        /**
         * @private
         * @param {string} name
         * @returns {*}
         */
        getVarParam: function (name) {
            let params = this.getParam('params') || {};

            if (!(name in params)) {
                return null;
            }

            let values = null;

            if (!this.config.get('userThemesDisabled') && this.preferences.get('theme')) {
                values = this.preferences.get('themeParams');
            }

            if (!values) {
                values = this.config.get('themeParams');
            }

            if (values && (name in values)) {
                return values[name];
            }

            if ('default' in params[name]) {
                return params[name].default;
            }

            return null;
        },

        /**
         * @private
         * @param {string} name
         * @returns {*}
         */
        getMappedParam: function (name) {
            let mappedParams = this.getParam('mappedParams') || {};

            if (!(name in mappedParams)) {
                return null;
            }

            let mapped = mappedParams[name].param;
            let valueMap = mappedParams[name].valueMap;

            if (mapped && valueMap) {
                let key = this.getParam(mapped);

                return valueMap[key];
            }

            return null;
        },

        /**
         * @private
         * @returns {string}
         */
        getParentName: function () {
            return this.metadata.get(['themes', this.getName(), 'parent']) || 'Espo';
        },

        /**
         * Whether a current theme is different from a system default theme.
         *
         * @returns {boolean}
         */
        isUserTheme: function () {
            if (this.config.get('userThemesDisabled')) {
                return false;
            }

            let name = this.preferences.get('theme');

            if (!name || name === '') {
                return false;
            }

            return name !== this.config.get('theme');
        },
    });

    return ThemeManager;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('session-storage', ['storage'], function (Dep) {

    /**
     * A session storage. Cleared when a page session ends.
     *
     * @class
     * @name Class
     * @memberOf module:session-storage
     */
    return Dep.extend(/** @lends module:session-storage.Class# */{

        /**
         * @private
         */
        storageObject: sessionStorage,

        /**
         * Get a value.
         *
         * @param {string} name A name.
         * @returns {*} Null if not set.
         */
        get: function (name) {
            try {
                var stored = this.storageObject.getItem(name);
            }
            catch (error) {
                console.error(error);

                return null;
            }

            if (stored) {
                let result = stored;

                if (stored.length > 9 && stored.substr(0, 9) === '__JSON__:') {
                    let jsonString = stored.substr(9);

                    try {
                        result = JSON.parse(jsonString);
                    }
                    catch (error) {
                        result = stored;
                    }
                }

                return result;
            }

            return null;
        },

        /**
         * Set (store) a value.
         *
         * @param {string} name A name.
         * @param {*} value A value.
         */
        set: function (name, value) {
            if (value instanceof Object || Array.isArray(value) || value === true || value === false) {
                value = '__JSON__:' + JSON.stringify(value);
            }

            try {
                this.storageObject.setItem(name, value);
            }
            catch (error) {
                console.error(error);
            }
        },

        /**
         * Has a value.
         *
         * @param {string} name A name.
         * @returns {boolean}
         */
        has: function (name) {
            return this.storageObject.getItem(name) !== null;
        },

        /**
         * Clear a value.
         *
         * @param {string} name A name.
         */
        clear: function (name) {
            for (let i in this.storageObject) {
                if (i === name) {
                    delete this.storageObject[i];
                }
            }
        },
    });
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('view-helper', ['lib!marked', 'lib!dompurify', 'lib!handlebars'],
function (marked, DOMPurify, /** typeof Handlebars */Handlebars) {

    /**
     * A view helper.
     *
     * @class
     * @name Class
     * @memberOf module:view-helper
     */
    let ViewHelper = function () {
        this._registerHandlebarsHelpers();

        /**
         * @private
         */
        this.mdBeforeList = [
            {
                regex: /\&\#x60;\&\#x60;\&\#x60;\n?([\s\S]*?)\&\#x60;\&\#x60;\&\#x60;/g,
                value: function (s, string) {
                    return '<pre><code>' +string.replace(/\*/g, '&#42;').replace(/\~/g, '&#126;') +
                        '</code></pre>';
                }
            },
            {
                regex: /\&\#x60;([\s\S]*?)\&\#x60;/g,
                value: function (s, string) {
                    return '<code>' + string.replace(/\*/g, '&#42;').replace(/\~/g, '&#126;') + '</code>';
                }
            }
        ];

        marked.setOptions({
            breaks: true,
            tables: false,
        });

        DOMPurify.addHook('beforeSanitizeAttributes', function (node) {
            if (node instanceof HTMLAnchorElement) {
                if (node.getAttribute('target')) {
                    node.targetBlank = true;
                }
                else {
                    node.targetBlank = false;
                }
            }
        });

        DOMPurify.addHook('afterSanitizeAttributes', function (node) {
            if (node instanceof HTMLAnchorElement) {
                if (node.targetBlank) {
                    node.setAttribute('target', '_blank');
                    node.setAttribute('rel', 'noopener noreferrer');
                }
                else {
                    node.removeAttribute('rel');
                }
            }
        });
    };

    _.extend(ViewHelper.prototype, /** @lends module:view-helper.Class# */{

        /**
         * A layout manager.
         *
         * @type {module:layout-manager.Class}
         */
        layoutManager: null,

        /**
         * A config.
         *
         * @type {module:models/settings.Class}
         */
        settings: null,

        /**
         * A config.
         *
         * @type {module:models/settings.Class}
         */
        config: null,

        /**
         * A current user.
         *
         * @type {module:models/user.Class}
         */
        user: null,

        /**
         * A preferences.
         *
         * @type {module:models/preferences.Class}
         */
        preferences: null,

        /**
         * An ACL manager.
         *
         * @type {module:acl-manager.Class}
         */
        acl: null,

        /**
         * A model factory.
         *
         * @type {module:model-factory.Class}
         */
        modelFactory: null,

        /**
         * A collection factory.
         *
         * @type {module:collection-factory.Class}
         */
        collectionFactory: null,

        /**
         * A storage.
         *
         * @type {module:storage.Class}
         */
        storage: null,

        /**
         * A session storage.
         *
         * @type {module:session-storage.Class}
         */
        sessionStorage: null,

        /**
         * A date-time util.
         *
         * @type {module:date-time.Class}
         */
        dateTime: null,

        /**
         * A language.
         *
         * @type {module:language.Class}
         */
        language: null,

        /**
         * A metadata.
         *
         * @type {module:metadata.Class}
         */
        metadata: null,

        /**
         * A field-manager util.
         *
         * @type {module:field-manager.Class}
         */
        fieldManager: null,

        /**
         * A cache.
         *
         * @type {module:cache.Class}
         */
        cache: null,

        /**
         * A theme manager.
         *
         * @type {module:theme-manager.Class}
         */
        themeManager: null,

        /**
         * A web-socket manager
         *
         * @type {module:web-socket-manager.Class}
         */
        webSocketManager: null,

        /**
         * A number util.
         *
         * @type {module:number.Class}
         */
        numberUtil: null,

        /**
         * A page-title util.
         *
         * @type {module:page-title.Class}
         */
        pageTitle: null,

        /**
         * A broadcast channel.
         *
         * @type {?module:broadcast-channel.Class}
         */
        broadcastChannel: null,

        /**
         * A base path.
         *
         * @type {string}
         */
        basePath: '',

        /**
         * Application parameters.
         *
         * @type {Object}
         */
        appParams: null,

        /**
         * @private
         */
        _registerHandlebarsHelpers: function () {
            Handlebars.registerHelper('img', img => {
                return new Handlebars.SafeString("<img src=\"img/" + img + "\"></img>");
            });

            Handlebars.registerHelper('prop', (object, name) => {
                if (name in object) {
                    return object[name];
                }
            });

            Handlebars.registerHelper('var', (name, context, options) => {
                if (typeof context === 'undefined') {
                    return null;
                }

                let contents = context[name];

                if (options.hash.trim) {
                    contents = contents.trim();
                }

                return new Handlebars.SafeString(contents);
            });

            Handlebars.registerHelper('concat', function (left, right) {
                return left + right;
            });

            Handlebars.registerHelper('ifEqual', function (left, right, options) {
                if (left == right) {
                    return options.fn(this);
                }

                return options.inverse(this);
            });

            Handlebars.registerHelper('ifNotEqual', function (left, right, options) {
                if (left != right) {
                    return options.fn(this);
                }

                return options.inverse(this);
            });

            Handlebars.registerHelper('ifPropEquals', function (object, property, value, options) {
                if (object[property] == value) {
                    return options.fn(this);
                }

                return options.inverse(this);
            });

            Handlebars.registerHelper('ifAttrEquals', function (model, attr, value, options) {
                if (model.get(attr) == value) {
                    return options.fn(this);
                }

                return options.inverse(this);
            });

            Handlebars.registerHelper('ifAttrNotEmpty', function (model, attr, options) {
                let value = model.get(attr);

                if (value !== null && typeof value !== 'undefined') {
                    return options.fn(this);
                }

                return options.inverse(this);
            });

            Handlebars.registerHelper('ifNotEmptyHtml', function (value, options) {
                value = value.replace(/\s/g, '');

                if (value) {
                    return options.fn(this);
                }

                return options.inverse(this);
            });

            Handlebars.registerHelper('get', (model, name) => model.get(name));

            Handlebars.registerHelper('length', arr => arr.length);

            Handlebars.registerHelper('translate', (name, options) => {
                let scope = options.hash.scope || null;
                let category = options.hash.category || null;

                if (name === 'null') {
                    return '';
                }

                return this.language.translate(name, category, scope);
            });

            Handlebars.registerHelper('button', (name, options) => {
                let style = options.hash.style || 'default';
                let scope = options.hash.scope || null;
                let label = options.hash.label || name;

                let html =
                    options.hash.html ||
                    options.hash.text ||
                    this.language.translate(label, 'labels', scope);

                if (!options.hash.html) {
                    html = this.escapeString(html);
                }

                let $button = $('<button>')
                    .attr('type', 'button')
                    .addClass('btn action')
                    .addClass(options.hash.className || '')
                    .addClass(options.hash.hidden ? 'hidden' : '')
                    .addClass(options.hash.disabled ? 'disabled' : '')
                    .attr('data-action', name)
                    .addClass('btn-' + style)
                    .html(html);

                if (options.hash.disabled) {
                    $button.attr('disabled', 'disabled');
                }

                if (options.hash.title) {
                    $button.attr('title', options.hash.title);
                }

                return new Handlebars.SafeString($button.get(0).outerHTML);
            });

            Handlebars.registerHelper('hyphen', (string) => {
                return Espo.Utils.convert(string, 'c-h');
            });

            Handlebars.registerHelper('toDom', (string) => {
                return Espo.Utils.toDom(string);
            });

            Handlebars.registerHelper('breaklines', (text) => {
                text = Handlebars.Utils.escapeExpression(text || '');
                text = text.replace(/(\r\n|\n|\r)/gm, '<br>');

                return new Handlebars.SafeString(text);
            });

            Handlebars.registerHelper('complexText', (text, options) => {
                return this.transformMarkdownText(text, options.hash);
            });

            Handlebars.registerHelper('translateOption', (name, options) => {
                let scope = options.hash.scope || null;
                let field = options.hash.field || null;

                if (!field) {
                    return '';
                }

                var translationHash = options.hash.translatedOptions || null;

                if (translationHash === null) {
                    translationHash = this.language.translate(field, 'options', scope) || {};

                    if (typeof translationHash !== 'object') {
                        translationHash = {};
                    }
                }

                if (name === null) {
                    name = '';
                }

                return translationHash[name] || name;
            });

            Handlebars.registerHelper('options', (list, value, options) => {
                if (typeof value === 'undefined') {
                    value = false;
                }

                list = list || [];

                let html = '';

                let multiple = (Object.prototype.toString.call(value) === '[object Array]');

                let checkOption = name => {
                    if (multiple) {
                        return value.indexOf(name) !== -1;
                    }

                    return value === name;
                };

                options.hash = options.hash || {};

                let scope = options.hash.scope || false;
                let category = options.hash.category || false;
                let field = options.hash.field || false;
                let styleMap = options.hash.styleMap || {};

                if (!multiple && options.hash.includeMissingOption && (value || value === '')) {
                    if (!~list.indexOf(value)) {
                        list = Espo.Utils.clone(list);

                        list.push(value);
                    }
                }

                let translationHash = options.hash.translationHash ||
                    options.hash.translatedOptions ||
                    null;

                if (translationHash === null) {
                    if (!category && field) {
                        translationHash = this.language.translate(field, 'options', scope) || {};

                        if (typeof translationHash !== 'object') {
                            translationHash = {};
                        }
                    }
                    else {
                        translationHash = {};
                    }
                }

                let translate = name => {
                    if (!category) {
                        return translationHash[name] || name;
                    }

                    return this.language.translate(name, category, scope);
                };

                for (let key in list) {
                    let value = list[key];
                    let label = translate(value);

                    let $option =
                        $('<option>')
                            .attr('value', value)
                            .addClass(styleMap[value] ? 'text-' + styleMap[value]: '')
                            .text(label);

                    if (checkOption(list[key])) {
                        $option.attr('selected', 'selected')
                    }

                    html += $option.get(0).outerHTML;
                }

                return new Handlebars.SafeString(html);
            });

            Handlebars.registerHelper('basePath', () => {
                return this.basePath || '';
            });
        },

        /**
         * Get an application parameter.
         *
         * @param {string} name
         * @returns {*}
         */
        getAppParam: function (name) {
            return (this.appParams || {})[name];
        },

        /**
         * Strip tags.
         *
         * @deprecated
         * @param {string} text
         * @returns {string}
         */
        stripTags: function (text) {
            text = text || '';

            if (typeof text === 'string' || text instanceof String) {
                return text.replace(/<\/?[^>]+(>|$)/g, '');
            }

            return text;
        },

        /**
         * Escape a string.
         *
         * @param {string} text A string.
         * @returns {string}
         */
        escapeString: function (text) {
            return Handlebars.Utils.escapeExpression(text);
        },

        /**
         * Get a user avatar HTML.
         *
         * @param {string} id A user ID.
         * @param {'small'|'medium'|'large'} [size='small'] A size.
         * @param {int} [width=16]
         * @param {string} [additionalClassName]  An additional class-name.
         * @returns {string}
         */
        getAvatarHtml: function (id, size, width, additionalClassName) {
            if (this.config.get('avatarsDisabled')) {
                return '';
            }

            let t = this.cache ? this.cache.get('app', 'timestamp') : Date.now();

            let basePath = this.basePath || '';
            size = size || 'small';
            width = width || 16;

            let className = 'avatar';

            if (additionalClassName) {
                className += ' ' + additionalClassName;
            }

            return $('<img>')
                .attr('src', `${basePath}?entryPoint=avatar&size=${size}&id=${id}&t=${t}`)
                .addClass(className)
                .attr('width', width.toString())
                .get(0).outerHTML;
        },

        /**
         * A Markdown text to HTML (one-line).
         *
         * @param {string} text A text.
         * @returns {string} HTML.
         */
        transformMarkdownInlineText: function (text) {
            return this.transformMarkdownText(text, {inline: true});
        },

        /**
         * A Markdown text to HTML.
         *
         * @param {string} text A text.
         * @param {{inline?: boolean, linksInNewTab?: boolean}} [options] Options.
         * @returns {string} HTML.
         */
        transformMarkdownText: function (text, options) {
            text = text || '';

            text = Handlebars.Utils.escapeExpression(text).replace(/&gt;+/g, '>');

            this.mdBeforeList.forEach(function (item) {
                text = text.replace(item.regex, item.value);
            });

            options = options || {};

            if (options.inline) {
                text = marked.parseInline(text);
            }
            else {
                text = marked.parse(text);
            }

            text = DOMPurify.sanitize(text).toString();

            if (options.linksInNewTab) {
                text = text.replace(/<a href=/gm, '<a target="_blank" rel="noopener noreferrer" href=');
            }

            text = text.replace(
                /<a href="mailto:(.*)"/gm,
                '<a type="button" class="selectable" data-email-address="$1" data-action="mailTo"'
            );

            return new Handlebars.SafeString(text);
        },

        /**
         * Get a color-icon HTML for a scope.
         *
         * @param {string} scope A scope.
         * @param {boolean} [noWhiteSpace=false] No white space.
         * @param {string} [additionalClassName] An additional class-name.
         * @returns {string}
         */
        getScopeColorIconHtml: function (scope, noWhiteSpace, additionalClassName) {
            if (this.config.get('scopeColorsDisabled') || this.preferences.get('scopeColorsDisabled')) {
                return '';
            }

            var color = this.metadata.get(['clientDefs', scope, 'color']);

            var html = '';

            if (color) {
                var $span = $('<span class="color-icon fas fa-square-full">');

                $span.css('color', color);

                if (additionalClassName) {
                    $span.addClass(additionalClassName);
                }

                html = $span.get(0).outerHTML;
            }

            if (!noWhiteSpace) {
                if (html) {
                    html += '&nbsp;';
                }
            }

            return html;
        },

        /**
         * Sanitize HTML.
         *
         * @param {type} text HTML.
         * @param {Object} [options] Options.
         * @returns {string}
         */
        sanitizeHtml: function (text, options) {
            return DOMPurify.sanitize(text, options);
        },

        /**
         * Moderately sanitize HTML.
         *
         * @param {string} value HTML.
         * @returns {string}
         */
        moderateSanitizeHtml: function (value) {
            value = value || '';
            value = value.replace(/<[\/]{0,1}(base)[^><]*>/gi, '');
            value = value.replace(/<[\/]{0,1}(object)[^><]*>/gi, '');
            value = value.replace(/<[\/]{0,1}(embed)[^><]*>/gi, '');
            value = value.replace(/<[\/]{0,1}(applet)[^><]*>/gi, '');
            value = value.replace(/<[\/]{0,1}(iframe)[^><]*>/gi, '');
            value = value.replace(/<[\/]{0,1}(script)[^><]*>/gi, '');
            value = value.replace(/<[^><]*([^a-z]{1}on[a-z]+)=[^><]*>/gi, function (match) {
                return match.replace(/[^a-z]{1}on[a-z]+=/gi, ' data-handler-stripped=');
            });

            value = this.stripEventHandlersInHtml(value);

            value = value.replace(/href=" *javascript\:(.*?)"/gi, function(m, $1) {
                return 'removed=""';
            });

            value = value.replace(/href=' *javascript\:(.*?)'/gi, function(m, $1) {
                return 'removed=""';
            });

            value = value.replace(/src=" *javascript\:(.*?)"/gi, function(m, $1) {
                return 'removed=""';
            });

            value = value.replace(/src=' *javascript\:(.*?)'/gi, function(m, $1) {
                return 'removed=""';
            });

            return value;
        },

        /**
         * Strip event handlers in HTML.
         *
         * @param {string} html HTML.
         * @returns {string}
         */
        stripEventHandlersInHtml: function (html) {
            function stripHTML() {
                html = html.slice(0, strip) + html.slice(j);
                j = strip;

                strip = false;
            }

            function isValidTagChar(str) {
                return str.match(/[a-z?\\\/!]/i);
            }

            var strip = false;
            var lastQuote = false;

            for (var i = 0; i < html.length; i++){
                if (html[i] === "<" && html[i + 1] && isValidTagChar(html[i + 1])) {
                    i++;

                    for (var j = i; j<html.length; j++){
                        if (!lastQuote && html[j] === ">"){
                            if (strip) {
                                stripHTML();
                            }

                            i = j;

                            break;
                        }

                        if (lastQuote === html[j]){
                            lastQuote = false;

                            continue;
                        }

                        if (!lastQuote && html[j - 1] === "=" && (html[j] === "'" || html[j] === '"')) {
                            lastQuote = html[j];
                        }

                        if (!lastQuote && html[j - 2] === " " && html[j - 1] === "o" && html[j] === "n") {
                            strip = j - 2;
                        }

                        if (strip && html[j] === " " && !lastQuote){
                            stripHTML();
                        }
                    }
                }
            }

            return html;
        },

        /**
         * Calculate a content container height.
         *
         * @param {$} $el Element.
         * @returns {number}
         */
        calculateContentContainerHeight: function ($el) {
            var smallScreenWidth = this.themeManager.getParam('screenWidthXs');

            var $window = $(window);

            var footerHeight = $('#footer').height() || 26;
            var top = 0;
            var element = $el.get(0);

            if (element) {
                top = element.getBoundingClientRect().top;

                if ($window.width() < smallScreenWidth) {
                    var $navbarCollapse = $('#navbar .navbar-body');

                    if ($navbarCollapse.hasClass('in') || $navbarCollapse.hasClass('collapsing')) {
                        top -= $navbarCollapse.height();
                    }
                }
            }

            var spaceHeight = top + footerHeight;

            return $window.height() - spaceHeight - 20;
        },

        /**
         * Process view-setup-handlers.
         *
         * @param {module:view} view A view.
         * @param {string} type A view-setup-handler type.
         * @param {string} [scope] A scope.
         */
        processSetupHandlers: function (view, type, scope) {
            scope = scope || view.scope;

            let handlerList = this.metadata.get(['clientDefs', 'Global', 'viewSetupHandlers', type]) || [];

            if (scope) {
                handlerList = handlerList
                    .concat(
                        this.metadata.get(['clientDefs', scope, 'viewSetupHandlers', type]) || []
                    );
            }

            if (handlerList.length === 0) {
                return;
            }

            for (let handlerClassName of handlerList) {
                let promise = new Promise(function (resolve) {
                    require(handlerClassName, function (Handler) {
                        let result = (new Handler(view)).process(view);

                        if (result && Object.prototype.toString.call(result) === '[object Promise]') {
                            result.then(function () {
                                resolve();
                            });

                            return;
                        }

                        resolve();
                    });
                });

                view.wait(promise);
            }
        },

        /**
         * @deprecated Use `transformMarkdownText`.
         * @internal Used in extensions.
         */
        transfromMarkdownText: function (text, options) {
            return this.transformMarkdownText(text, options);
        },

        /**
         * @deprecated Use `transformMarkdownInlineText`.
         * @internal Used in extensions.
         */
        transfromMarkdownInlineText: function (text) {
            return this.transformMarkdownInlineText(text);
        },
    });

    return ViewHelper;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in  the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('page-title', [], function () {

    /**
     * A page-title util.
     *
     * @class
     * @name Class
     * @memberOf module:page-title
     *
     * @param {module:models/settings.Class} config A config.
     */
    let PageTitle = function (config) {
        /**
         * @private
         * @type {boolean}
         */
        this.displayNotificationNumber = config.get('newNotificationCountInTitle') || false;

        /**
         * @private
         * @type {string}
         */
        this.title = $('head title').text() || '';

        /**
         * @private
         * @type {number}
         */
        this.notificationNumber = 0;
    };

    _.extend(PageTitle.prototype, /** @lends module:page-title.Class# */{

        /**
         * Set a title.
         *
         * @param {string} title A title.
         */
        setTitle: function (title) {
            this.title = title;

            this.update();
        },

        /**
         * Set a notification number.
         *
         * @param {number} notificationNumber A number.
         */
        setNotificationNumber: function (notificationNumber) {
            this.notificationNumber = notificationNumber;

            if (this.displayNotificationNumber) {
                this.update();
            }
        },

        /**
         * Update a page title.
         */
        update: function () {
            let value = '';

            if (this.displayNotificationNumber && this.notificationNumber) {
                value = '(' + this.notificationNumber.toString() + ')';

                if (this.title) {
                    value += ' ';
                }
            }

            value += this.title;

            $('head title').text(value);
        },
    });

    return PageTitle;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('broadcast-channel', [], function () {

    /**
     * @memberOf module:broadcast-channel
     */
    class Class {
        constructor() {
            this.object = null;

            if (window.BroadcastChannel) {
                this.object = new BroadcastChannel('app');
            }
        }

        /**
         * Post a message.
         *
         * @param {string} message A message.
         */
        postMessage(message) {
            if (!this.object) {
                return;
            }

            this.object.postMessage(message);
        }

        /**
         * @callback module:broadcast-channel.Class~callback
         *
         * @param {Event} event An event. A message can be obtained from the `data` property.
         */

        /**
         * Subscribe to a message.
         *
         * @param {module:broadcast-channel.Class~callback} callback A callback.
         */
        subscribe(callback) {
            if (!this.object) {
                return;
            }

            this.object.addEventListener('message', callback);
        }
    }

    return Class;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('web-socket-manager', [], function () {

    /**
     * A web-socket manager.
     *
     * @class
     * @name Class
     * @memberOf module:web-socket-manager
     *
     * @param {module:models/settings.Class} config A config.
     */
    let WebSocketManager = function (config) {
        /**
         * @private
         * @type {module:models/settings.Class}
         */
        this.config = config;

        /**
         * @private
         * @type {{category: string, callback: Function}[]}
         */
        this.subscribeQueue = [];

        /**
         * @private
         * @type {boolean}
         */
        this.isConnected = false;

        /**
         * @private
         */
        this.connection = null;

        /**
         * @private
         * @type {string}
         */
        this.url = '';

        /**
         * @private
         * @type {string}
         */
        this.protocolPart = '';

        let url = this.config.get('webSocketUrl');

        if (url) {
            if (url.indexOf('wss://') === 0) {
                this.url = url.substring(6);
                this.protocolPart = 'wss://';
            }
            else {
                this.url = url.substring(5);
                this.protocolPart = 'ws://';
            }
        }
        else {
            let siteUrl = this.config.get('siteUrl') || '';

            if (siteUrl.indexOf('https://') === 0) {
                this.url = siteUrl.substring(8);
                this.protocolPart = 'wss://';
            }
            else {
                this.url = siteUrl.substring(7);
                this.protocolPart = 'ws://';
            }

            if (~this.url.indexOf('/')) {
                this.url = this.url.replace(/\/$/, '');
            }

            let port = this.protocolPart === 'wss://' ? 443 : 8080;

            let si = this.url.indexOf('/');

            if (~si) {
                this.url = this.url.substring(0, si) + ':' + port;
            }
            else {
                this.url += ':' + port;
            }

            if (this.protocolPart === 'wss://') {
                this.url += '/wss';
            }
        }
    };

    _.extend(WebSocketManager.prototype, /** @lends module:web-socket-manager.Class# */{

        /**
         * Connect.
         *
         * @param {string} auth An auth string.
         * @param {string} userId A user ID.
         */
        connect: function (auth, userId) {
            let authArray = Base64.decode(auth).split(':');

            let authToken = authArray[1];

            let url = this.protocolPart + this.url;

            url += '?authToken=' + authToken + '&userId=' + userId;

            try {
                this.connection = new ab.Session(
                    url,
                    () => {
                        this.isConnected = true;

                        this.subscribeQueue.forEach(item => {
                            this.subscribe(item.category, item.callback);
                        });

                        this.subscribeQueue = [];
                    },
                    e => {
                        if (e === ab.CONNECTION_CLOSED) {
                            this.subscribeQueue = [];
                        }

                        if (e === ab.CONNECTION_LOST || e === ab.CONNECTION_UNREACHABLE) {
                            setTimeout(
                                () => {
                                    this.connect(auth, userId);
                                },
                                3000
                            );
                        }
                    },
                    {skipSubprotocolCheck: true}
                );
            }
            catch (e) {
                console.error(e.message);

                this.connection = null;
            }
        },

        /**
         * Subscribe to a topic.
         *
         * @param {string} category A topic.
         * @param {Function} callback A callback.
         */
        subscribe: function (category, callback) {
            if (!this.connection) {
                return;
            }

            if (!this.isConnected) {
                this.subscribeQueue.push({
                    category: category,
                    callback: callback,
                });

                return;
            }

            try {
                this.connection.subscribe(category, callback);
            }
            catch (e) {
                if (e.message) {
                    console.error(e.message);
                }
                else {
                    console.error("WebSocket: Could not subscribe to "+category+".");
                }
            }
        },

        /**
         * Unsubscribe.
         *
         * @param {string} category A topic.
         * @param {Function} [callback] A callback.
         */
        unsubscribe: function (category, callback) {
            if (!this.connection) {
                return;
            }

            this.subscribeQueue = this.subscribeQueue.filter(item => {
                return item.category !== category && item.callback !== callback;
            });

            try {
                this.connection.unsubscribe(category, callback);
            }
            catch (e) {
                if (e.message) {
                    console.error(e.message);
                }
                else {
                    console.error("WebSocket: Could not unsubscribe from "+category+".");
                }
            }
        },

        /**
         * Close a connection.
         */
        close: function () {
            if (!this.connection) {
                return;
            }

            try {
                this.connection.close();
            }
            catch (e) {
                console.error(e.message);
            }

            this.isConnected = false;
        },
    });

    return WebSocketManager;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('number', [], function () {

    /**
     * A number util.
     *
     * @class
     * @name Class
     * @memberOf module:number
     *
     * @param {module:models/settings.Class} config A config.
     * @param {module:models/preferences.Class} preferences Preferences.
     */
    let NumberUtil = function (config, preferences) {
        /**
         * @private
         * @type {module:models/settings.Class}
         */
        this.config = config;

        /**
         * @private
         * @type {module:models/preferences.Class}
         */
        this.preferences = preferences;

        /**
         * A thousand separator.
         *
         * @private
         * @type {string|null}
         */
        this.thousandSeparator = null;

        /**
         * A decimal mark.
         *
         * @private
         * @type {string|null}
         */
        this.decimalMark = null;

        this.config.on('change', () => {
            this.thousandSeparator = null;
            this.decimalMark = null;
        });

        this.preferences.on('change', () => {
            this.thousandSeparator = null;
            this.decimalMark = null;
        });

        /**
         * A max decimal places.
         *
         * @private
         * @type {number}
         */
        this.maxDecimalPlaces = 10;
    };

    _.extend(NumberUtil.prototype, /** @lends module:number.Class# */{

        /**
         * Format an integer number.
         *
         * @param {number} value A value.
         * @returns {string}
         */
        formatInt: function (value) {
            if (value === null || value === undefined) {
                return '';
            }

            let stringValue = value.toString();

            stringValue = stringValue.replace(/\B(?=(\d{3})+(?!\d))/g, this.getThousandSeparator());

            return stringValue;
        },

        /**
         * Format a float number.
         *
         * @param {number} value A value.
         * @param {number} [decimalPlaces] Decimal places.
         * @returns {string}
         */
        formatFloat: function (value, decimalPlaces) {
            if (value === null || value === undefined) {
                return '';
            }

            if (decimalPlaces === 0) {
                value = Math.round(value);
            }
            else if (decimalPlaces) {
                value = Math.round(value * Math.pow(10, decimalPlaces)) / (Math.pow(10, decimalPlaces));
            }
            else {
                value = Math.round(
                    value * Math.pow(10, this.maxDecimalPlaces)) / (Math.pow(10, this.maxDecimalPlaces)
                );
            }

            var parts = value.toString().split('.');

            parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, this.getThousandSeparator());

            if (decimalPlaces === 0) {
                return parts[0];
            }

            if (decimalPlaces) {
                let decimalPartLength = 0;

                if (parts.length > 1) {
                    decimalPartLength = parts[1].length;
                }
                else {
                    parts[1] = '';
                }

                if (decimalPlaces && decimalPartLength < decimalPlaces) {
                    let limit = decimalPlaces - decimalPartLength;

                    for (let i = 0; i < limit; i++) {
                        parts[1] += '0';
                    }
                }
            }

            return parts.join(this.getDecimalMark());
        },

        /**
         * @private
         * @returns {string}
         */
        getThousandSeparator: function () {
            if (this.thousandSeparator !== null) {
                return this.thousandSeparator;
            }

            let thousandSeparator = '.';

            if (this.preferences.has('thousandSeparator')) {
                thousandSeparator = this.preferences.get('thousandSeparator');
            }
            else if (this.config.has('thousandSeparator')) {
                thousandSeparator = this.config.get('thousandSeparator');
            }

            /**
             * A thousand separator.
             *
             * @private
             * @type {string|null}
             */
            this.thousandSeparator = thousandSeparator;

            return thousandSeparator;
        },

        /**
         * @private
         * @returns {string}
         */
        getDecimalMark: function () {
            if (this.decimalMark !== null) {
                return this.decimalMark;
            }

            let decimalMark = '.';

            if (this.preferences.has('decimalMark')) {
                decimalMark = this.preferences.get('decimalMark');
            }
            else {
                if (this.config.has('decimalMark')) {
                    decimalMark = this.config.get('decimalMark');
                }
            }

            /**
             * A decimal mark.
             *
             * @private
             * @type {string|null}
             */
            this.decimalMark = decimalMark;

            return decimalMark;
        },
    });

    return NumberUtil;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('helpers/file-upload', [], function () {

    /**
     * A file-upload helper.
     *
     * @memberOf module:helpers/file-upload
     */
    class Class {
        /**
         * @param {module:models/settings.Class} config A config.
         */
        constructor(config) {
            /**
             * @private
             * @type {module:models/settings.Class}
             */
            this.config = config;
        }

        /**
         * @typedef {Object} module:helpers/file-upload~Options
         *
         * @property {function(number):void} [afterChunkUpload] After every chunk is uploaded.
         * @property {function(module:model.Class):void} [afterAttachmentSave] After an attachment is saved.
         * @property {{isCanceled?: boolean}} [mediator] A mediator.
         */

        /**
         * Upload.
         *
         * @param {File} file A file.
         * @param {module:model.Class} attachment An attachment model.
         * @param {module:helpers/file-upload~Options} [options] Options.
         * @returns {Promise}
         */
        upload(file, attachment, options) {
            options = options || {};

            options.afterChunkUpload = options.afterChunkUpload || (() => {});
            options.afterAttachmentSave = options.afterAttachmentSave || (() => {});
            options.mediator = options.mediator || {};

            attachment.set('name', file.name);
            attachment.set('type', file.type || 'text/plain');
            attachment.set('size', file.size);

            if (this._useChunks(file)) {
                return this._uploadByChunks(file, attachment, options);
            }

            return new Promise((resolve, reject) => {
                let fileReader = new FileReader();

                fileReader.onload = (e) => {
                    attachment.set('file', e.target.result);

                    attachment
                        .save({}, {timeout: 0})
                        .then(() => resolve())
                        .catch(() => reject());
                };

                fileReader.readAsDataURL(file);
            });
        }

        /**
         * @private
         */
        _uploadByChunks(file, attachment, options) {
            return new Promise((resolve, reject) => {
                attachment.set('isBeingUploaded', true);

                attachment
                    .save()
                    .then(() => {
                        options.afterAttachmentSave(attachment);

                        return this._uploadChunks(
                            file,
                            attachment,
                            resolve,
                            reject,
                            options
                        );
                    })
                    .catch(() => reject());
            });
        }

        /**
         * @private
         */
        _uploadChunks(file, attachment, resolve, reject, options, start) {
            start = start || 0;
            let end = start + this._getChunkSize() + 1;

            if (end > file.size) {
                end = file.size;
            }

            if (options.mediator.isCanceled) {
                reject();

                return;
            }

            let blob = file.slice(start, end);

            let fileReader = new FileReader();

            fileReader.onloadend = (e) => {
                if (e.target.readyState !== FileReader.DONE) {
                    return;
                }

                Espo.Ajax
                    .postRequest('Attachment/chunk/' + attachment.id, e.target.result, {
                        headers: {
                            contentType: 'multipart/form-data',
                        }
                    })
                    .then(() => {
                        options.afterChunkUpload(end);

                        if (end === file.size) {
                            resolve();

                            return;
                        }

                        this._uploadChunks(
                            file,
                            attachment,
                            resolve,
                            reject,
                            options,
                            end
                        );
                    })
                    .catch(() => reject());
            };

            fileReader.readAsDataURL(blob);
        }

        /**
         * @private
         */
        _useChunks(file) {
            let chunkSize = this._getChunkSize();

            if (!chunkSize) {
                return false;
            }

            if (file.size > chunkSize) {
                return true;
            }

            return false;
        }

        /**
         * @private
         */
        _getChunkSize() {
            return (this.config.get('attachmentUploadChunkSize') || 0) * 1024 * 1024;
        }
    }

    return Class;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('helpers/mass-action', [], function () {

    /**
     * A mass-action helper.
     *
     * @memberOf module:helpers/mass-action
     */
    class Class {
        /**
         * @param {module:view.Class} view A view.
         */
        constructor(view) {
            /**
             * @private
             * @type {module:view.Class}
             */
            this.view = view;

            /**
             * @private
             * @type {module:models/settings.Class}
             */
            this.config = view.getConfig();
        }

        /**
         * Check whether an action should be run in idle.
         *
         * @param {number} totalCount A total record count.
         * @returns {boolean}
         */
        checkIsIdle(totalCount) {
            if (this.view.getUser().isPortal()) {
                return false;
            }

            if (typeof totalCount === 'undefined') {
                totalCount = this.view.options.totalCount;
            }

            return totalCount === -1 || totalCount > this.config.get('massActionIdleCountThreshold');
        }

        /**
         * Process.
         *
         * @param {string} id An ID.
         * @param {string} action An action.
         * @returns {Promise<module:view.Class>}  Resolves with a dialog view.
         *   The view emits the 'close:success' event.
         */
        process(id, action) {
            Espo.Ui.notify(false);

            return new Promise(resolve => {
                this.view
                    .createView('dialog', 'views/modals/mass-action', {
                        id: id,
                        action: action,
                    })
                    .then(view => {
                        view.render();

                        resolve(view);

                        this.view.listenToOnce(view, 'success', data => {
                            resolve(data);

                            this.view.listenToOnce(view, 'close', () => {
                                view.trigger('close:success', data);
                            });
                        });
                    });
            });
        }
    }

    return Class;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('helpers/export', [], function () {

    /**
     * An export helper.
     *
     * @memberOf module:helpers/export
     */
     class Class {
        /**
         * @param {module:view.Class} view A view.
         */
        constructor(view) {
            /**
             * @private
             * @type {module:view.Class}
             */
            this.view = view;

            /**
             * @private
             * @type {module:models/settings.Class}
             */
            this.config = view.getConfig();
        }

        /**
         * Check whether an export should be run in idle.
         *
         * @param {number} totalCount A total record count.
         * @returns {boolean}
         */
        checkIsIdle(totalCount) {
            if (this.view.getUser().isPortal()) {
                return false;
            }

            if (typeof totalCount === 'undefined') {
                totalCount = this.view.options.totalCount;
            }

            return totalCount === -1 || totalCount > this.config.get('exportIdleCountThreshold');
        }

        /**
         * Process export.
         *
         * @param {string} id An ID.
         * @returns {Promise<module:view.Class>} Resolves with a dialog view.
         *   The view emits the 'close:success' event.
         */
        process(id) {
            Espo.Ui.notify(false);

            return new Promise(resolve => {
                this.view
                    .createView('dialog', 'views/export/modals/idle', {
                        id: id,
                    })
                    .then(view => {
                        view.render();

                        resolve(view);

                        this.view.listenToOnce(view, 'success', data => {
                            resolve(data);

                            this.view.listenToOnce(view, 'close', () => {
                                view.trigger('close:success', data);
                            });
                        });
                    });
            });
        }
    }

    return Class;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/
/**
 * @module helpers/action-item-setup
 */
define("helpers/action-item-setup", [], () => {
    /**
     * @memberOf module:helpers/action-item-setup
     */
    class Class {
        /**
         * @param {module:metadata.Class} metadata
         * @param {module:view-helper.Class} viewHelper
         * @param {module:acl-manager.Class} acl
         * @param {module:language.Class} language
         */
        constructor(metadata, viewHelper, acl, language) {
            this.metadata = metadata;
            this.viewHelper = viewHelper;
            this.acl = acl;
            this.language = language;
        }
        /**
         * @param {module:view.Class} view
         * @param {string} type
         * @param {function(Promise): void} waitFunc
         * @param {function(Object): void} addFunc
         * @param {function(string): void} showFunc
         * @param {function(string): void} hideFunc
         * @param {{listenToViewModelSync?: boolean}} options
         */
        setup(view, type, waitFunc, addFunc, showFunc, hideFunc, options) {
            options = options || {};
            let actionList = [];
            let scope = view.scope || view.model.entityType;
            if (!scope) {
                throw new Error();
            }
            let actionDefsList = (this.metadata
                .get(["clientDefs", scope, type + "ActionList"]) || [])
                .concat(this.metadata.get(["clientDefs", "Global", type + "ActionList"]) || []);
            actionDefsList.forEach(item => {
                if (typeof item === "string") {
                    item = { name: item };
                }
                item = Espo.Utils.cloneDeep(item);
                let name = item.name;
                if (!item.label) {
                    item.html = this.language.translate(name, "actions", scope);
                }
                addFunc(item);
                if (!Espo.Utils.checkActionAvailability(this.viewHelper, item)) {
                    return;
                }
                if (!Espo.Utils.checkActionAccess(this.acl, view.model, item, true)) {
                    item.hidden = true;
                }
                actionList.push(item);
                let data = item.data || {};
                let handlerName = item.handler || data.handler;
                if (!handlerName) {
                    return;
                }
                if (!item.initFunction && !item.checkVisibilityFunction) {
                    return;
                }
                waitFunc(new Promise(resolve => {
                    require(handlerName, Handler => {
                        let handler = new Handler(view);
                        if (item.initFunction) {
                            handler[item.initFunction].call(handler);
                        }
                        if (item.checkVisibilityFunction) {
                            let isNotVisible = !handler[item.checkVisibilityFunction].call(handler);
                            if (isNotVisible) {
                                hideFunc(item.name);
                            }
                        }
                        item.handlerInstance = handler;
                        resolve();
                    });
                }));
            });
            if (!actionList.length) {
                return;
            }
            let onSync = () => {
                actionList.forEach(item => {
                    if (item.handlerInstance && item.checkVisibilityFunction) {
                        let isNotVisible = !item.handlerInstance[item.checkVisibilityFunction]
                            .call(item.handlerInstance);
                        if (isNotVisible) {
                            hideFunc(item.name);
                            return;
                        }
                    }
                    if (Espo.Utils.checkActionAccess(this.acl, view.model, item, true)) {
                        showFunc(item.name);
                        return;
                    }
                    hideFunc(item.name);
                });
            };
            if (options.listenToViewModelSync) {
                view.listenTo(view, "model-sync", () => onSync());
                return;
            }
            view.listenTo(view.model, "sync", () => onSync());
        }
    }
    return Class;
});
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define(
    'app',
[
    'lib!espo',
    'lib!jquery',
    'lib!backbone',
    'lib!underscore',
    'lib!bullbone',
    'ui',
    'utils',
    'acl-manager',
    'cache',
    'storage',
    'models/settings',
    'language',
    'metadata',
    'field-manager',
    'models/user',
    'models/preferences',
    'model-factory',
    'collection-factory',
    'pre-loader',
    'controllers/base',
    'router',
    'date-time',
    'layout-manager',
    'theme-manager',
    'session-storage',
    'view-helper',
    'web-socket-manager',
    'ajax',
    'number',
    'page-title',
    'broadcast-channel',
    'exceptions'
],
function (
    /** Espo */Espo,
    /** $ */$,
    /** Backbone */Backbone,
    /** _ */_,
    /** Bull */Bull,
    Ui,
    Utils,
    /** typeof module:acl-manager.Class */AclManager,
    /** typeof module:cache.Class */Cache,
    /** typeof module:storage.Class */Storage,
    /** typeof module:models/settings.Class */Settings,
    /** typeof module:language.Class */Language,
    /** typeof module:metadata.Class */Metadata,
    /** typeof module:field-manager.Class */FieldManager,
    /** typeof module:models/user.Class */User,
    /** typeof module:models/preferences.Class */Preferences,
    /** typeof module:model-factory.Class */ModelFactory,
    /** typeof module:collection-factory.Class */CollectionFactory,
    /** typeof module:pre-loader.Class */PreLoader,
    /** typeof module:controllers/base.Class */BaseController,
    /** typeof module:router.Class */Router,
    /** typeof module:date-time.Class */DateTime,
    /** typeof module:layout-manager.Class */LayoutManager,
    /** typeof module:theme-manager.Class */ThemeManager,
    /** typeof module:session-storage.Class */SessionStorage,
    /** typeof module:view-helper.Class */ViewHelper,
    /** typeof module:web-socket-manager.Class */WebSocketManager,
    Ajax,
    /** typeof module:number.Class */NumberUtil,
    /** typeof module:page-title.Class */PageTitle,
    /** typeof module:broadcast-channel.Class */BroadcastChannel,
    Exceptions
) {
    /**
     * A main application class.
     *
     * @class
     * @name Class
     * @memberOf module:app
     * @param {module:app.Class~Options} options Options.
     * @param {module:app.Class~callback} callback A callback.
     */
    let App = function (options, callback) {
        options = options || {};

        /**
         * An application ID.
         *
         * @private
         * @type {string}
         */
        this.id = options.id || 'espocrm-application-id';

        /**
         * Use cache.
         *
         * @private
         * @type {boolean}
         */
        this.useCache = options.useCache || this.useCache;

        this.apiUrl = options.apiUrl || this.apiUrl;

        /**
         * A base path.
         *
         * @type {string}
         */
        this.basePath = options.basePath || '';

        /**
         * A default ajax request timeout.
         *
         * @private
         * @type {Number}
         */
        this.ajaxTimeout = options.ajaxTimeout || 0;

        /**
         * A list of internal modules.
         *
         * @private
         * @type {string[]}
         */
        this.internalModuleList = options.internalModuleList || [];

        this.initCache(options)
            .then(() => this.init(options, callback));

        this.initDomEventListeners();
    };

    /**
     * @callback module:app.Class~callback
     *
     * @param {module:app.Class} app A created application instance.
     */

    /**
     * Application options.
     *
     * @typedef {Object} module:app.Class~Options
     *
     * @property {string} [id] An application ID.
     * @property {string} [basePath] A base path.
     * @property {boolean} [useCache] Use cache.
     * @property {string} [apiUrl] An API URL.
     * @property {Number} [ajaxTimeout] A default ajax request timeout.
     * @property {string} [internalModuleList] A list of internal modules.
     *   Internal modules located in the `client/modules` directory.
     * @property {Number|null} [cacheTimestamp] A cache timestamp.
     */

    _.extend(App.prototype, /** @lends module:app.Class# */{

        /**
         * @private
         * @type {boolean}
         */
        useCache: false,

        /**
         * @private
         * @type {module:models/user.Class}
         */
        user: null,

        /**
         * @private
         * @type {module:models/preferences.Class}
         */
        preferences: null,

        /**
         * @private
         * @type {module:models/settings.Class}
         */
        settings: null,

        /**
         * @private
         * @type {module:metadata.Class}
         */
        metadata: null,

        /**
         * @private
         * @type {module:language.Class}
         */
        language: null,

        /**
         * @private
         * @type {module:field-manager.Class}
         */
        fieldManager: null,

        /**
         * @private
         * @type {module:cache.Class|null}
         */
        cache: null,

        /**
         * @private
         * @type {module:storage.Class|null}
         */
        storage: null,

        /**
         * @private
         */
        loader: null,

        /**
         * An API URL.
         *
         * @private
         */
        apiUrl: 'api/v1',

        /**
         * An auth credentials string.
         *
         * @private
         * @type {string|null}
         */
        auth: null,

        /**
         * A base controller.
         *
         * @private
         * @type {module:controllers/base.Class}
         */
        baseController: null,

        /**
         * @private
         */
        controllers: null,

        /**
         * @private
         * @type {module:router.Class}
         */
        router: null,

        /**
         * @private
         * @type {module:model-factory.Class}
         */
        modelFactory: null,

        /**
         * @private
         * @type {module:collection-factory.Class}
         */
        collectionFactory: null,

        /**
         * A view factory.
         *
         * @private
         * @type {Bull.Factory}
         */
        viewFactory: null,

        /**
         * @type {Function}
         * @private
         */
        viewLoader: null,

        /**
         * @private
         * @type {module:view-helper.Class}
         */
        viewHelper: null,

        /**
         * A body view.
         *
         * @protected
         * @type {string}
         */
        masterView: 'views/site/master',

        /**
         * @private
         * @type {Cache|null}
         */
        responseCache: null,

        /**
         * @private
         * @type {module:broadcast-channel.Class|null}
         */
        broadcastChannel: null,

        /**
         * @private
         * @type {module:date-time.Class|null}
         */
        dateTime: null,

        /**
         * @private
         * @type {module:number.Class|null}
         */
        numberUtil: null,

        /**
         * @private
         * @type {?int}
         */
        appTimestamp: null,

        /**
         * @private
         */
        initCache: function (options) {
            let cacheTimestamp = options.cacheTimestamp || null;
            let storedCacheTimestamp = null;

            if (this.useCache) {
                this.cache = new Cache(cacheTimestamp);

                storedCacheTimestamp = this.cache.getCacheTimestamp();

                if (cacheTimestamp) {
                    this.cache.handleActuality(cacheTimestamp);
                }
                else {
                    this.cache.storeTimestamp();
                }
            }

            let handleActuality = () => {
                if (
                    !cacheTimestamp ||
                    !storedCacheTimestamp ||
                    cacheTimestamp !== storedCacheTimestamp
                ) {
                    return caches.delete('espo');
                }

                return new Promise(resolve => resolve());
            };

            return new Promise(resolve => {
                if (!this.useCache) {
                    resolve();
                }

                if (!window.caches) {
                    resolve();
                }

                handleActuality()
                    .then(() => caches.open('espo'))
                    .then(responseCache => {
                        this.responseCache = responseCache;

                        resolve();
                    })
                    .catch(() => {
                        console.error("Could not open `espo` cache.");
                        resolve();
                    });
            });
        },

        /**
         * @private
         */
        init: function (options, callback) {
            this.appParams = {};
            this.controllers = {};

            this.loader = Espo.loader;

            this.loader.setCache(this.cache);
            this.loader.setResponseCache(this.responseCache);

            if (this.useCache && !this.loader.getCacheTimestamp() && options.cacheTimestamp) {
                this.loader.setCacheTimestamp(options.cacheTimestamp);
            }

            this.storage = new Storage();
            this.sessionStorage = new SessionStorage();

            this.setupAjax();

            this.settings = new Settings(null);
            this.language = new Language(this.cache);
            this.metadata = new Metadata(this.cache);
            this.fieldManager = new FieldManager();

            Promise
            .all([
                this.settings.load(),
                this.language.loadDefault()
            ])
            .then(() => {
                this.loader.setIsDeveloperMode(this.settings.get('isDeveloperMode'));
                this.loader.addLibsConfig(this.settings.get('jsLibs') || {});

                this.user = new User();
                this.preferences = new Preferences();

                this.preferences.settings = this.settings;

                this.acl = this.createAclManager();

                this.fieldManager.acl = this.acl;

                this.themeManager = new ThemeManager(this.settings, this.preferences, this.metadata);
                this.modelFactory = new ModelFactory(this.metadata, this.user);
                this.collectionFactory = new CollectionFactory(this.modelFactory, this.settings);

                this.appTimestamp = this.settings.get('appTimestamp') || null;

                if (this.settings.get('useWebSocket')) {
                    this.webSocketManager = new WebSocketManager(this.settings);
                }

                this.initUtils();
                this.initView();
                this.initBaseController();

                this.preLoader = new PreLoader(this.cache, this.viewFactory, this.basePath);

                this.preLoad(() => {
                    callback.call(this, this);
                });
            });
        },

        /**
         * Start the application.
         */
        start: function () {
            this.initAuth();

            if (!this.auth) {
                this.baseController.login();
            }
            else {
                this.initUserData(null, () => {
                    this.onAuth.call(this);
                });
            }

            this.on('auth', this.onAuth, this);
        },

        /**
         * @private
         */
        onAuth: function () {
            this.metadata.load().then(() => {
                this.fieldManager.defs = this.metadata.get('fields');
                this.fieldManager.metadata = this.metadata;

                this.settings.defs = this.metadata.get('entityDefs.Settings') || {};
                this.user.defs = this.metadata.get('entityDefs.User');
                this.preferences.defs = this.metadata.get('entityDefs.Preferences');
                this.viewHelper.layoutManager.userId = this.user.id;

                if (this.themeManager.isUserTheme()) {
                    this.loadStylesheet();
                }

                if (this.webSocketManager) {
                    this.webSocketManager.connect(this.auth, this.user.id);
                }

                this.initBroadcastChannel();

                let promiseList = [];
                let aclImplementationClassMap = {};

                let clientDefs = this.metadata.get('clientDefs') || {};

                Object.keys(clientDefs).forEach(scope => {
                    let o = clientDefs[scope];

                    let implClassName = (o || {})[this.aclName || 'acl'];

                    if (!implClassName) {
                        return;
                    }

                    promiseList.push(
                        new Promise(resolve => {
                            this.loader.require(implClassName, implClass => {
                                aclImplementationClassMap[scope] = implClass;

                                resolve();
                            });
                        })
                    );
                });

                if (!this.themeManager.isApplied() && this.themeManager.isUserTheme()) {
                    promiseList.push(
                        new Promise(resolve => {
                            (function check (i) {
                                i = i || 0;

                                if (!this.themeManager.isApplied()) {
                                    if (i === 50) {
                                        resolve();

                                        return;
                                    }

                                    setTimeout(check.bind(this, i + 1), 10);

                                    return;
                                }

                                resolve();
                            }).call(this);
                        })
                    );
                }

                Promise
                    .all(promiseList)
                    .then(() => {
                        this.acl.implementationClassMap = aclImplementationClassMap;

                        this.initRouter();
                    });
            });
        },

        /**
         * @private
         */
        initRouter: function () {
            let routes = this.metadata.get(['app', 'clientRoutes']) || {};

            this.router = new Router({routes: routes});

            this.viewHelper.router = this.router;

            this.baseController.setRouter(this.router);

            this.router.confirmLeaveOutMessage = this.language.translate('confirmLeaveOutMessage', 'messages');
            this.router.confirmLeaveOutConfirmText = this.language.translate('Yes');
            this.router.confirmLeaveOutCancelText = this.language.translate('Cancel');

            this.router.on('routed', params => this.doAction(params));

            try {
                Backbone.history.start({
                    root: window.location.pathname
                });
            }
            catch (e) {
                Backbone.history.loadUrl();
            }
        },

        /**
         * @private
         */
        doAction: function (params) {
            this.trigger('action', params);

            this.baseController.trigger('action');

            this.getController(params.controller, controller => {
                try {
                    controller.doAction(params.action, params.options);

                    this.trigger('action:done');
                }
                catch (e) {
                    console.error(e);

                    switch (e.name) {
                        case 'AccessDenied':
                            this.baseController.error403();

                            break;

                        case 'NotFound':
                            this.baseController.error404();

                            break;

                        default:
                            throw e;
                    }
                }
            });
        },

        /**
         * @private
         */
        initBaseController: function () {
            this.baseController = new BaseController({}, this.getControllerInjection());

            this.viewHelper.baseController = this.baseController;
        },

        /**
         * @private
         */
        getControllerInjection: function () {
            return {
                viewFactory: this.viewFactory,
                modelFactory: this.modelFactory,
                collectionFactory: this.collectionFactory,
                settings: this.settings,
                user: this.user,
                preferences: this.preferences,
                acl: this.acl,
                cache: this.cache,
                router: this.router,
                storage: this.storage,
                metadata: this.metadata,
                dateTime: this.dateTime,
                broadcastChannel: this.broadcastChannel,
            };
        },

        /**
         * @param {string} name
         * @param {function(module:controller.Class): void} callback
         * @private
         */
        getController: function (name, callback) {
            if (!name) {
                callback(this.baseController);

                return;
            }

            if (name in this.controllers) {
                callback(this.controllers[name]);

                return;
            }

            try {
                let className = this.metadata.get(['clientDefs', name, 'controller']);

                if (!className) {
                    let module = this.metadata.get(['scopes', name, 'module']);

                    className = Utils.composeClassName(module, name, 'controllers');
                }

                require(
                    className,
                    /** typeof module:controller.Class */
                    controllerClass => {
                        let injections = this.getControllerInjection();

                        injections.baseController = this.baseController;

                        let controller = new controllerClass(this.baseController.params, injections);

                        controller.name = name;
                        controller.masterView = this.masterView;

                        this.controllers[name] = controller

                        callback(controller);
                    },
                    this,
                    () => this.baseController.error404()
                );
            }
            catch (e) {
                this.baseController.error404();
            }
        },

        /**
         * @private
         */
        preLoad: function (callback) {
            this.preLoader.load(callback, this);
        },

        /**
         * @private
         */
        initUtils: function () {
            this.dateTime = new DateTime();
            this.modelFactory.dateTime = this.dateTime;
            this.dateTime.setSettingsAndPreferences(this.settings, this.preferences);
            this.numberUtil = new NumberUtil(this.settings, this.preferences);
        },

        /**
         * Create an acl-manager.
         *
         * @protected
         * @return {module:acl-manager.Class}
         */
        createAclManager: function () {
            return new AclManager(this.user, null, this.settings.get('aclAllowDeleteCreated'));
        },

        /**
         * @private
         */
        initView: function () {
            let helper = this.viewHelper = new ViewHelper();

            helper.layoutManager = new LayoutManager(this.cache, this.id);
            helper.settings = this.settings;
            helper.config = this.settings;
            helper.user = this.user;
            helper.preferences = this.preferences;
            helper.acl = this.acl;
            helper.modelFactory = this.modelFactory;
            helper.collectionFactory = this.collectionFactory;
            helper.storage = this.storage;
            helper.sessionStorage = this.sessionStorage;
            helper.dateTime = this.dateTime;
            helper.language = this.language;
            helper.metadata = this.metadata;
            helper.fieldManager = this.fieldManager;
            helper.cache = this.cache;
            helper.themeManager = this.themeManager;
            helper.webSocketManager = this.webSocketManager;
            helper.numberUtil = this.numberUtil;
            helper.pageTitle = new PageTitle(this.settings);
            helper.basePath = this.basePath;
            helper.appParams = this.appParams;

            this.viewLoader = (viewName, callback) => {
                require(Utils.composeViewClassName(viewName), callback);
            };

            let internalModuleMap = {};

            let isModuleInternal = (module) => {
                if (!(module in internalModuleMap)) {
                    internalModuleMap[module] = this.internalModuleList.indexOf(module) !== -1;
                }

                return internalModuleMap[module];
            };

            let getResourceInnerPath = (type, name) => {
                let path = null;

                switch (type) {
                    case 'template':
                        if (~name.indexOf('.')) {
                            console.warn(name + ': template name should use slashes for a directory separator.');
                        }

                        path = 'res/templates/' + name.split('.').join('/') + '.tpl';

                        break;

                    case 'layoutTemplate':
                        path = 'res/layout-types/' + name + '.tpl';

                        break;

                    case 'layout':
                        path = 'res/layouts/' + name + '.json';

                        break;
                }

                return path;
            };

            let getResourcePath = (type, name) => {
                if (name.indexOf(':') === -1) {
                    return 'client/' + getResourceInnerPath(type, name);
                }

                let arr = name.split(':');
                let mod = arr[0];
                let path = arr[1];

                if (mod === 'custom') {
                    return 'client/custom/' + getResourceInnerPath(type, path);
                }

                if (isModuleInternal(mod)) {
                    return 'client/modules/' + mod + '/' + getResourceInnerPath(type, path);
                }

                return 'client/custom/modules/' + mod + '/' + getResourceInnerPath(type, path);
            };

            this.viewFactory = new Bull.Factory({
                useCache: false,
                defaultViewName: 'views/base',
                helper: helper,
                viewLoader: this.viewLoader,
                resources: {
                    loaders: {
                        template: (name, callback) => {
                            let path = getResourcePath('template', name);

                            this.loader.require('res!' + path, callback);
                        },
                        layoutTemplate: (name, callback) => {
                            let path = getResourcePath('layoutTemplate', name);

                            this.loader.require('res!' + path, callback);
                        },
                    },
                },
            });
        },

        /**
         * @private
         */
        initAuth: function () {
            this.auth = this.storage.get('user', 'auth') || null;

            this.baseController.on('login', data => {
                let userId = data.user.id;
                let userName = data.auth.userName;
                let token = data.auth.token;

                this.auth = Base64.encode(userName  + ':' + token);

                let lastUserId = this.storage.get('user', 'lastUserId');

                if (lastUserId !== userId) {
                    this.metadata.clearCache();
                    this.language.clearCache();
                }

                this.storage.set('user', 'auth', this.auth);
                this.storage.set('user', 'lastUserId', userId);

                this.setCookieAuth(userName, token);

                this.initUserData(data, () => this.trigger('auth'));
            });

            this.baseController.on('logout', () => this.logout());
        },

        /**
         * @private
         */
        logout: function () {
            if (this.auth) {
                let arr = Base64.decode(this.auth).split(':');

                if (arr.length > 1) {
                    Ajax.postRequest('App/action/destroyAuthToken', {
                        token: arr[1]
                    });
                }
            }

            if (this.webSocketManager) {
                this.webSocketManager.close();
            }

            this.auth = null;

            this.user.clear();
            this.preferences.clear();

            this.acl.clear();

            this.storage.clear('user', 'auth');

            this.doAction({action: 'login'});

            this.unsetCookieAuth();

            if (this.broadcastChannel && this.broadcastChannel.object) {
                this.broadcastChannel.object.close();
            }

            this.broadcastChannel = null;

            let xhr = new XMLHttpRequest;

            xhr.open('GET', this.basePath + this.apiUrl + '/');
            xhr.setRequestHeader('Authorization', 'Basic ' + Base64.encode('**logout:logout'));
            xhr.send('');
            xhr.abort();

            this.loadStylesheet();
        },

        /**
         * @private
         */
        loadStylesheet: function () {
            if (!this.metadata.get(['themes'])) {
                return;
            }

            let stylesheetPath = this.basePath + this.themeManager.getStylesheet();

            $('#main-stylesheet').attr('href', stylesheetPath);
        },

        /**
         * @private
         */
        setCookieAuth: function (username, token) {
            let date = new Date();

            date.setTime(date.getTime() + (1000 * 24*60*60*1000));

            document.cookie = 'auth-token='+token+'; SameSite=Lax; expires='+date.toGMTString()+'; path=/';
        },

        /**
         * @private
         */
        unsetCookieAuth: function () {
            document.cookie = 'auth-token' + '=; SameSite=Lax; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/';
        },

        /**
         * @private
         */
        initUserData: function (options, callback) {
            options = options || {};

            if (this.auth === null) {
                return;
            }

            new Promise(resolve => {
                if (options.user) {
                    resolve(options);

                    return;
                };

                this.requestUserData(data => {
                    options = data;

                    resolve(options);
                });
            })
            .then(options => {
                this.language.name = options.language;

                return this.language.load();
            })
            .then(() => {
                this.dateTime.setLanguage(this.language);

                let userData = options.user || null;
                let preferencesData = options.preferences || null;
                let aclData = options.acl || null;

                let settingData = options.settings || {};

                this.user.set(userData);
                this.preferences.set(preferencesData);

                this.settings.set(settingData);
                this.acl.set(aclData);

                for (let param in options.appParams) {
                    this.appParams[param] = options.appParams[param];
                }

                if (!this.auth) {
                    return;
                }

                let xhr = new XMLHttpRequest();

                xhr.open('GET', this.basePath + this.apiUrl + '/');

                xhr.setRequestHeader('Authorization', 'Basic ' + this.auth);

                xhr.onreadystatechange = () => {
                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {

                        let arr = Base64.decode(this.auth).split(':');

                        this.setCookieAuth(arr[0], arr[1]);

                        callback();
                    }

                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 401) {
                        Ui.error('Auth error');
                    }
                };

                xhr.send('');
            });
        },

        /**
         * @private
         */
        requestUserData: function (callback) {
            Ajax
                .getRequest('App/user')
                .then(callback);
        },

        /**
         * @private
         */
        setupAjax: function () {
            $.ajaxSetup({
                beforeSend: (xhr, options) => {
                    if (!options.local && this.apiUrl) {
                        options.url = Utils.trimSlash(this.apiUrl) + '/' + options.url;
                    }

                    if (!options.local && this.basePath !== '') {
                        options.url = this.basePath + options.url;
                    }

                    if (this.auth !== null) {
                        xhr.setRequestHeader('Authorization', 'Basic ' + this.auth);
                        xhr.setRequestHeader('Espo-Authorization', this.auth);
                        xhr.setRequestHeader('Espo-Authorization-By-Token', 'true');
                    }

                },
                dataType: 'json',
                timeout: this.ajaxTimeout,
                contentType: 'application/json',
            });

            let appTimestampChangeProcessed = false;

            $(document).ajaxSuccess((e, xhr, options) => {
                let appTimestampHeader = xhr.getResponseHeader('X-App-Timestamp');

                if (appTimestampHeader && !appTimestampChangeProcessed) {
                    let appTimestamp = parseInt(appTimestampHeader);

                    if (
                        this.appTimestamp &&
                        appTimestamp !== this.appTimestamp &&
                        !options.bypassAppReload
                    ) {
                        appTimestampChangeProcessed = true;

                        Ui
                            .confirm(
                                this.language.translate('confirmAppRefresh', 'messages'),
                                {
                                    confirmText: this.language.translate('Refresh'),
                                    cancelText: this.language.translate('Cancel'),
                                    backdrop: 'static',
                                    confirmStyle: 'success',
                                }
                            )
                            .then(() => {
                                window.location.reload();

                                if (this.broadcastChannel) {
                                    this.broadcastChannel.postMessage('reload');
                                }
                            });
                    }
                }
            });

            $(document).ajaxError((e, xhr, options) => {
                if (xhr.errorIsHandled) {
                    return;
                }

                switch (xhr.status) {
                    case 0:
                        if (xhr.statusText === 'timeout') {
                            Ui.error(this.language.translate('Timeout'), true);
                        }

                        break;

                    case 200:
                        Ui.error(this.language.translate('Bad server response'));

                        console.error('Bad server response: ' + xhr.responseText);

                        break;

                    case 401:
                        if (!options.login) {
                            if (this.auth) {
                                this.logout();

                                break
                            }

                            console.error('Error 401: Unauthorized.');
                        }

                        break;

                    case 403:
                        if (options.main) {
                            this.baseController.error403();

                            break;
                        }

                        this._processErrorAlert(xhr, 'Access denied');

                        break;

                    case 400:
                        this._processErrorAlert(xhr, 'Bad request');

                        break;

                    case 404:
                        if (options.main) {
                            this.baseController.error404();

                            break
                        }

                        this._processErrorAlert(xhr, 'Not found', true);

                        break;

                    default:
                        this._processErrorAlert(xhr, null);
                }

                let statusReason = xhr.getResponseHeader('X-Status-Reason');

                if (statusReason) {
                    console.error('Server side error ' + xhr.status + ': ' + statusReason);
                }
            });
        },

        /**
         * @private
         */
        _processErrorAlert: function (xhr, label, noDetail) {
            let msg = this.language.translate('Error') + ' ' + xhr.status;

            if (label) {
                msg += ': ' + this.language.translate(label);
            }

            let obj = {
                msg: msg,
                closeButton: false,
            };

            let isMessageDone = false;

            if (noDetail) {
                isMessageDone = true;
            }

            if (!isMessageDone && xhr.responseText && xhr.responseText[0] === '{') {
                let data = null;

                try {
                    data = JSON.parse(xhr.responseText);
                }
                catch (e) {}

                if (data && data.messageTranslation && data.messageTranslation.label) {
                    let msgDetail = this.language.translate(
                        data.messageTranslation.label,
                        'messages',
                        data.messageTranslation.scope
                    );

                    let msgData = data.messageTranslation.data || {};

                    for (let key in msgData) {
                        msgDetail = msgDetail.replace('{' + key + '}', msgData[key]);
                    }

                    obj.msg += '\n' + msgDetail;
                    obj.closeButton = true;

                    isMessageDone = true;
                }
            }

            if (!isMessageDone) {
                let statusReason = xhr.getResponseHeader('X-Status-Reason');

                if (statusReason) {
                    obj.msg += '\n' + statusReason;
                    obj.closeButton = true;

                    isMessageDone = true;
                }
            }

            Ui.error(obj.msg, obj.closeButton);
        },

        /**
         * @private
         */
        initBroadcastChannel: function () {
            this.broadcastChannel = new BroadcastChannel();

            this.broadcastChannel.subscribe(event => {
                if (event.data === 'update:all') {
                    this.metadata.loadSkipCache();
                    this.settings.loadSkipCache();
                    this.language.loadSkipCache();
                    this.viewHelper.layoutManager.clearLoadedData();
                }

                if (event.data === 'update:metadata') {
                    this.metadata.loadSkipCache();
                }

                if (event.data === 'update:config') {
                    this.settings.load();
                }

                if (event.data === 'update:language') {
                    this.language.loadSkipCache();
                }

                if (event.data === 'update:layout') {
                    this.viewHelper.layoutManager.clearLoadedData();
                }

                if (event.data === 'reload') {
                    window.location.reload();
                }
            });

            this.viewHelper.broadcastChannel = this.broadcastChannel;
        },

        initDomEventListeners: function () {
            $(document).on('keydown.espo.button', e => {
                if (
                    e.code !== 'Enter' ||
                    e.target.tagName !== 'A' ||
                    e.target.getAttribute('role') !== 'button' ||
                    e.target.getAttribute('href') ||
                    e.ctrlKey ||
                    e.altKey ||
                    e.metaKey
                ) {
                    return;
                }

                $(e.target).click();

                e.preventDefault();
            });
        },

    }, Backbone.Events);

    App.extend = Backbone.Router.extend;

    return App;
});
