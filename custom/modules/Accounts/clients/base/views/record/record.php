<?php
$viewdefs['Accounts'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' => 
            array (
              'click' => 'button:cancel_button:click',
            ),
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'escalate-action',
                'event' => 'button:escalate_button:click',
                'name' => 'escalate_button',
                'label' => 'LBL_ESCALATE_BUTTON_LABEL',
                'acl_action' => 'create',
              ),
              2 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              5 => 
              array (
                'type' => 'divider',
              ),
              6 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'Accounts',
                'acl_action' => 'create',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              10 => 
              array (
                'type' => 'divider',
              ),
              11 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'hint_account_pic',
                'type' => 'hint-accounts-logo',
                'size' => 'large',
                'dismiss_label' => true,
                'readonly' => true,
                'white_list' => true,
                'licenseDependency' => 
                array (
                  'HINT' => 
                  array (
                    'name' => 'hint_account_pic',
                    'type' => 'hint-accounts-logo',
                  ),
                ),
              ),
              1 => 
              array (
                'name' => 'name',
                'type' => 'hint-accounts-search-dropdown',
                'licenseDependency' => 
                array (
                  'HINT' => 
                  array (
                    'type' => 'hint-accounts-search-dropdown',
                  ),
                ),
              ),
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'is_escalated',
                'type' => 'badge',
                'badge_label' => 'LBL_ESCALATED',
                'warning_level' => 'important',
                'dismiss_label' => true,
              ),
              4 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'website',
              1 => 'industry',
              2 => 'parent_name',
              3 => 'account_type',
              4 => 'business_center_name',
              5 => 
              array (
                'name' => 'service_level',
              ),
              6 => 
              array (
              ),
              7 => 
              array (
              ),
              8 => 'assigned_user_name',
              9 => 'phone_office',
              10 => 
              array (
                'name' => 'tag',
                'span' => 6,
              ),
              11 => 
              array (
                'name' => 'contacts_accounts_1_name',
                'span' => 6,
              ),
              12 => 
              array (
                'name' => 'cases_accounts_oto_name',
                'label' => 'LBL_CASES_ACCOUNTS_OTO_FROM_CASES_TITLE',
                'span' => 12,
              ),
              13 => 
              array (
                'name' => 'cases_accounts_om_name',
                'label' => 'LBL_CASES_ACCOUNTS_OM_FROM_CASES_TITLE',
              ),
              14 => 
              array (
                'name' => 'custom_dropdown_c',
                'studio' => 'visible',
                'label' => 'LBL_CUSTOM_DROPDOWN_C',
              ),
              15 => 
              array (
                'name' => 'function_dropdown_c',
                'studio' => 'visible',
                'label' => 'LBL_FUNCTION_DROPDOWN_C',
              ),
              16 => 
              array (
                'readonly' => false,
                'name' => 'api_response_field_c',
                'studio' => 'visible',
                'label' => 'LBL_API_RESPONSE_FIELD',
              ),
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'columns' => 2,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'billing_address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_BILLING_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'billing_address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_BILLING_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'billing_address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_BILLING_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'billing_address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_BILLING_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'billing_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_BILLING_ADDRESS_POSTALCODE',
                  ),
                  4 => 
                  array (
                    'name' => 'billing_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_BILLING_ADDRESS_COUNTRY',
                  ),
                ),
              ),
              1 => 
              array (
                'name' => 'shipping_address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_SHIPPING_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'shipping_address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'shipping_address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'shipping_address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'shipping_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
                  ),
                  4 => 
                  array (
                    'name' => 'shipping_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
                  ),
                  5 => 
                  array (
                    'name' => 'copy',
                    'label' => 'NTC_COPY_BILLING_ADDRESS',
                    'type' => 'copy',
                    'mapping' => 
                    array (
                      'billing_address_street' => 'shipping_address_street',
                      'billing_address_city' => 'shipping_address_city',
                      'billing_address_state' => 'shipping_address_state',
                      'billing_address_postalcode' => 'shipping_address_postalcode',
                      'billing_address_country' => 'shipping_address_country',
                    ),
                  ),
                ),
              ),
              2 => 
              array (
                'name' => 'phone_alternate',
                'label' => 'LBL_PHONE_ALT',
              ),
              3 => 
              array (
                'name' => 'geocode_status',
                'licenseFilter' => 
                array (
                  0 => 'MAPS',
                ),
              ),
              4 => 'email',
              5 => 'phone_fax',
              6 => 'campaign_name',
              7 => 'twitter',
              8 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              9 => 'sic_code',
              10 => 'ticker_symbol',
              11 => 'annual_revenue',
              12 => 'employees',
              13 => 'ownership',
              14 => 'rating',
              15 => 
              array (
                'name' => 'duns_num',
                'readonly' => true,
              ),
              16 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              17 => 'team_name',
              18 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'panel_hint',
            'label' => 'LBL_HINT_PANEL',
            'columns' => 2,
            'labels' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'licenseFilter' => 
            array (
              0 => 'HINT',
            ),
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'hint_account_size',
              1 => 'hint_account_industry',
              2 => 'hint_account_location',
              3 => 'hint_account_founded_year',
              4 => 'hint_account_industry_tags',
              5 => 'hint_account_naics_code_lbl',
              6 => 'hint_account_fiscal_year_end',
              7 => 
              array (
                'name' => 'hint_account_facebook_handle',
                'type' => 'stage2_url',
              ),
              8 => 
              array (
                'name' => 'hint_account_logo',
                'type' => 'stage2_image',
                'readonly' => true,
                'dismiss_label' => true,
                'white_list' => true,
                'fields' => 
                array (
                  0 => 'hint_account_pic',
                ),
              ),
              9 => 
              array (
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
        ),
      ),
    ),
  ),
);
