({
    loadData: function (options) {
        
        var url = app.api.buildURL('Accounts', null, null, {
            fields: 'name,account_type,date_entered', 
            max_num: 10,
            filter: [
                {
                    'assigned_user_id': 'seed_jim_id'
                }
            ]    
        });

        let self = this;
        
        app.api.call('read', url, null, {
            success: function(data) {
                console.log('Success');
                console.log(data.records); // Array of account records
                
                var accountsData = data.records;
                
                self.data = accountsData;
               
                self.render();

            },
            error: function(error) {
                console.error('Error fetching accounts:', error);
            }
        });
        
    },
})
