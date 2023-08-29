({

    extendsFrom: 'RecordView',
    initialize: function (options) {
        this._super('initialize', [options]);

        this.context.on('button:open_drawer_button:click', this.Open_drawer, this);
        this.context.on('button:refresh_notes_button:click', this.Refresh_Notes, this);
    },
    Open_drawer: function(){
        
        app.drawer.open({
            layout: 'my-drawer-layout',
            // context: {
            //     model: this.model
            // },
        });
    },
    Refresh_Notes: function(){
        
        console.log("Yes I am in")
        var linkName = 'tasks';
        var subpanelCollection = this.model.getRelatedCollection(linkName);
        console.log(subpanelCollection);
        subpanelCollection.fetch({relate: true});
        
    },
    

})