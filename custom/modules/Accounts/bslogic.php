<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
    
    class bslogic
    {
        function bslogicmethod ($bean, $event, $arguments) {
            
            if ($bean->fetched_row['account_type'] !== $bean->account_type) {
               
                
                $task = BeanFactory::newBean('Tasks');
                
                $task->name = 'Task related to account type change';
                $task->description = 'Type of the account changed to ' .$bean->account_type;
                $task->status = 'Not Started';
                $task->parent_type = 'Accounts';
                $task->parent_id = $bean->id;
                $task->save();
            }
        }
        
    }
?>