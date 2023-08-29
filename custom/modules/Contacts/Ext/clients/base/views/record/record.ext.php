<?php
// WARNING: The contents of this file are auto-generated.


$buttons = isset($viewdefs['Contacts']['base']['view']['record']['buttons'])?$viewdefs['Contacts']['base']['view']['record']['buttons']:array();
$zipCodeButton = array (
    'type' => 'rowaction',
    'event' => 'button:open_drawer_button:click',
    'name' => 'open_drawer_button',
    'label' => 'LBL_OPEN_DRAWER_BUTTON_LABEL',
    'acl_action' => 'view;',
);

if (!empty($buttons)){
    foreach($buttons as $key => $button){
        if ($button['type'] == 'actiondropdown' && $button['name'] == 'main_dropdown'){
            //Get everything from this point down
            $slicedBtns = array_slice($viewdefs['Contacts']['base']['view']['record']['buttons'],$key);
            //Remove everything from this point down
            array_splice($viewdefs['Contacts']['base']['view']['record']['buttons'],$key);
            //Add Zip Code Button
            $viewdefs['Contacts']['base']['view']['record']['buttons'][] = $zipCodeButton;
            //Add back the buttons we removed
            foreach($slicedBtns as $oldButton){
                $viewdefs['Contacts']['base']['view']['record']['buttons'][] = $oldButton;
            }
            break;
        }
    }
} else {
    $viewdefs['Contacts']['base']['view']['record']['buttons'] = array(
        $zipCodeButton
    );
}
unset($zipCodeButton);