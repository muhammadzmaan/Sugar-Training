({
    extendsFrom: 'RecordView',
    initialize: function (options) {
        
        this._super("initialize", [options]);
        
        this.model.once('sync', function() {

            var requestData = {
                id:this.model.get('id'),
                emails:this.model.attributes.email
            };

            var apiUrl = app.api.buildURL('Accounts', 'GetAccounts', null, {
            params: requestData
            });
            
            let self = this;
            app.api.call('read', apiUrl, null, {
                success: function(data) {
                
                    console.log(data);
                    self.model.set('api_response_field_c',data);

                    self.model.save({}, {
                        success: function (model, response, options) {
                        
                        },
                        error: function (model, response, options) {
                        
                            console.error('Error saving record:', response);
                        },
                    });

                },
                error: function(error) {
                    console.error('Error fetching Accounts:', error);
                }
            });
     
         }, this);
    },
    loadData: function (options) {
       
    },
    
})