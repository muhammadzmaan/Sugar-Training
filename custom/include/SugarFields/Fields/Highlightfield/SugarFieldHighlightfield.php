<?php

require_once 'include/SugarFields/Fields/Base/SugarFieldBase.php';
require_once 'data/SugarBean.php';

class SugarFieldHighlightfield extends SugarFieldBase
{
    public function save($bean, $params, $field, $properties, $prefix = '')
    {
        $GLOBALS['log']->debug("SugarFieldHighlightfield::save() function called.");
        parent::save($bean, $params, $field, $properties, $prefix);
    }
}

?>