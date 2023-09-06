({
    
    plugins: ['Dashlet'],
    initialize: function(options) {
        options.meta = options.meta || {};
        this._super('initialize', [options]);
    },
    loadData: function (options) {
        console.log(this);
        var contact_id = this.model.attributes.id
       
        
        var url = app.api.buildURL('Tasks', null, null, {
            fields: 'id,name,assigned_user_name,assigned_user_id,date_due', 
            max_num: 100,   
            filter: [
                {
                    'contact_id': contact_id
                }
            ]     
        });
                
        let self = this;
        
        app.api.call('read', url, null, {
            success: function(data) {
               
                //for count
                Handlebars.registerHelper("counter", function (index){
                    return index + 1;
                });

                //for link
                Handlebars.registerHelper('buildHref', function(id) {
                    return `#Tasks/${id}`;
                });

                //tasks data
                var opentasks = data.records;
                self.data = opentasks;
                
                self.render();

            },
            error: function(error) {
                console.error('Error fetching tasks:', error);
            }
        });

        
        
    },
})