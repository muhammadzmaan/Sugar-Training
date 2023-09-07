({
    extendsFrom: 'PanelTopView',
    initialize: function (options) {
        this._super("initialize", [options]);
    },
    createRelatedClicked: function(event) {

        
        if (this.parentModule=='Accounts'){

            var accountType = this.model.link.bean.attributes.account_type;
            
            if (accountType !='Customer'){
 
                app.alert.show('message-id', {
                    level: 'warning',
                    messages: 'Sales can only be created for Accounts with Type Customer',
                    autoClose: true
                });
 
            }else{
 
                this.createRelatedRecord(this.module);
 
            }
 
        }else{
 
            this.createRelatedRecord(this.module);
 
        } 
    },
})