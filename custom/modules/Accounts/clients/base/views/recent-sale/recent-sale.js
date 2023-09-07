({
    extendsFrom: 'RecordView',
    decoratorField: 'record-decor',
    initialize: function (options) {
        this._super("initialize", [options]);
        
        var current_account = this.model.get('id');
;
        var url = app.api.buildURL('sl_Sales', null, null, {
            fields: 'id,name,amount,date_entered', 
            max_num: 1,
            filter: [
                {
                    'account_id': current_account
                }
            ],
            order_by: 'date_entered:desc'     
        });

        let self = this;
        
        app.api.call('read', url, null, {
            success: function(data) {
                
                console.log(self);

                var newModel=app.data.createBean('sl_Sales',data.records[0]);
                
                self.myModel = newModel;
                
                self.render();
            },
            error: function(error) {
                console.error('Error fetching accounts:', error);
            }
        });

    }
})