<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
function populatecontacts()
{
    $GLOBALS['log']->fatal("yes");
    $contacts = array();
   
    $sugarQuery = new SugarQuery();
    $sugarQuery->from(BeanFactory::getBean('Contacts'));


    $results = $sugarQuery->execute();
    foreach ($results as $contact) {
        $contacts[$contact['id']] = $contact['first_name'];
    }
    return $contacts;
}
