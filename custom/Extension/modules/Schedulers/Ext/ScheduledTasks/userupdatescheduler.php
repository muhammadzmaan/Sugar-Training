<?php

array_push($job_strings, 'userupdatescheduler');

function userupdatescheduler()
{
    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    $tenMinutesAgo = strtotime('-10 minutes');
    $accounts = BeanFactory::getBean('Accounts')->get_full_list("date_entered <= '{$tenMinutesAgo}'");

    foreach ($accounts as $account) {
        
        $account->assigned_user_id = 'seed_jim_id'; // Replace with the actual user ID
        $account->save();
    
    }
    
    return true;
}