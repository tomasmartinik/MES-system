define('custom:handlers/convert-to-planning', ['action-handler'], function(Dep){

    return Dep.extend({

        actionConvertToPlanning: function (data, e){
            Espo.Ajax
                .getRequest('Orders/' + this.view.model.id)
                .then(response => {
                    console.log(response);
                })
        },

        initConvertToPlanning: function () {
            this.controlButtonVisibility();

            this.view.listenTo(
                this.view.model,
                'change:status',
                this.controlButtonVisibility.bind(this)
            );
        },

        controlButtonVisibility: function () {
            if (~['Converted', 'Dead', 'Recycled'].indexOf(this.view.model.get('status'))){
                this.view.hideHeaderActionItem('convertToPlanning');

                return;
            }
            this.view.showHeaderActionItem('convertToPlanning')
        }
    });
});