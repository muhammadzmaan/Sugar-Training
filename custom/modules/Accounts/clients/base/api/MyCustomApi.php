<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class MyCustomApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            //GET
            'MyCustomEndpoint' => array(
                
                'reqType' => 'GET',

                'noLoginRequired' => false,

                'path' => array('Accounts','GetAccounts'),

                'pathVars' => array('',''),

                'method' => 'GetAccounts',

                'shortHelp' => 'Accounts with same email and industry is education',

                'longHelp' => 'custom/clients/base/api/help/MyCustomApi_MyAccountsEndPoint_help.html',
            ),
        );
    }
    public function GetAccounts($api, $args)
    {
        $GLOBALS['log']->fatal("API");
        $id = $args['params']['id'];
        $emails = $args['params']['emails'];
        $accounts = array();
        
        foreach ($emails as $email) {

            $query = new SugarQuery();
            $query->from(BeanFactory::getBean('Accounts'));
 
            $query->select(array('name'));
            $query->where()->notEquals('id',$id);
            $query->where()->equals('email',$email['email_address']);
            
            $results = $query->execute();
    
            if(!empty($results)){
                foreach($results as $account)
                $accounts[] = $account['name'];
            }
        }

        $GLOBALS['log']->fatal($accounts);
        
        $accountslist = implode(", ", $accounts);
        
        $same_email_accounts = "These accounts: " . $accountslist . " have same primary email address";
      
        return $same_email_accounts;
        
    }
}