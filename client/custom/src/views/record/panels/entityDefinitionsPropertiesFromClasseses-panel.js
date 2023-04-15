define(
    'custom:views/record/panels/entityDefinitionsPropertiesFromClasseses-panel',
    'views/record/panels/relationship', function (Dep) {
    return Dep.extend({
        setup: function () {
            Dep.prototype.setup.call(this);
            this.listenTo(this.model, 'sync', function () {
                this.collection.fetch();
            }, this);
       },
    });
});