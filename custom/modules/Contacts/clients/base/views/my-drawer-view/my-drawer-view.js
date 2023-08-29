({
    
    decoratorField: 'record-decor',
    events:{
        'click .cancel-button':'closeDrawer',
        'click .alert-button':'alertInfo',
    },
    initialize: function (options) {
        this._super('initialize', [options]);
        console.log("options: ",options);
        console.log("this: ",this);
          
    },
    closeDrawer: function() {
        app.drawer.close();
    },
    alertInfo: function() {
        app.alert.show('message-id', {
            level: 'success',
            messages: 'Task completed!',
            autoClose: true
        });
    },
    loadData: function (options) {
        this.render();        
    },
    
})

  