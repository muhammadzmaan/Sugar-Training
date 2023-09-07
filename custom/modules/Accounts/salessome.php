<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
    
    class someAmount
    {
        function someAmountMethod ($bean, $event, $arguments) {
            
            $bean->load_relationship('accounts_sales_om');
            $RelatedSales = $bean->accounts_sales_om->getBeans();
            
            $totalSales = 0;
            
            foreach($RelatedSales as $sale){
                
                $totalSales = $totalSales + $sale->amount;
            }
            
            $bean->total_sales_c=$totalSales;
        }
        
    }
?>