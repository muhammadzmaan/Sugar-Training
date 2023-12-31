<?php
$viewdefs['Contacts'] = 
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
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'divider',
              ),
              5 => 
              array (
                'type' => 'manage-subscription',
                'name' => 'manage_subscription_button',
                'label' => 'LBL_MANAGE_SUBSCRIPTIONS',
                'showOn' => 'view',
                'value' => 'edit',
              ),
              6 => 
              array (
                'type' => 'vcard',
                'name' => 'vcard_button',
                'label' => 'LBL_VCARD_DOWNLOAD',
                'acl_action' => 'edit',
              ),
              7 => 
              array (
                'type' => 'divider',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'Contacts',
                'acl_action' => 'create',
              ),
              10 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              11 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              12 => 
              array (
                'type' => 'divider',
              ),
              13 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
              14 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:open_drawer_button:click',
                'name' => 'open_drawer_button',
                'label' => 'LBL_OPEN_DRAWER_BUTTON_LABEL',
                'acl_action' => 'view;',
              ),
              15 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:refresh_notes_button:click',
                'name' => 'refresh_notes_button',
                'label' => 'LBL_REFRESH_NOTES_BUTTON_LABEL',
                'acl_action' => 'view;',
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
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'hint-contacts-photo',
                'size' => 'large',
                'dismiss_label' => true,
                'white_list' => true,
                'related_fields' => 
                array (
                  0 => 'hint_contact_pic',
                ),
              ),
              1 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'dismiss_label' => true,
                'type' => 'fullname',
                'fields' => 
                array (
                  0 => 'salutation',
                  1 => 'first_name',
                  2 => 'last_name',
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
              0 => 'title',
              1 => 'phone_mobile',
              2 => 'department',
              3 => 'do_not_call',
              4 => 'account_name',
              5 => 'business_center_name',
              6 => 'market_score',
              7 => 
              array (
                'name' => 'email',
                'licenseDependency' => 
                array (
                  'HINT' => 
                  array (
                    'type' => 'hint-email',
                  ),
                ),
              ),
              8 => 
              array (
                'name' => 'tag',
                'span' => 6,
              ),
              9 => 
              array (
                'name' => 'accounts_contacts_1_name',
                'span' => 6,
              ),
              10 => 
              array (
                'name' => 'contacts_quotes_1_name',
                'span' => 12,
              ),
              11 => 
              array (
                'name' => 'customtypefield_c',
                'studio' => 'visible',
                'label' => 'LBL_CUSTOMTYPEFIELD_C',
                'span' => 12,
              ),
              12 => 
              array (
                'name' => 'tasks_contacts_om_name',
                'label' => 'LBL_TASKS_CONTACTS_OM_FROM_CONTACTS_TITLE',
                'span' => 12,
              ),
              13 => 
              array (
                'name' => 'documents_contacts_om_name',
                'label' => 'LBL_DOCUMENTS_CONTACTS_OM_FROM_DOCUMENT_TITLE',
              ),
              14 => 
              array (
              ),
            ),
          ),
          2 => 
          array (
            'columns' => 2,
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'primary_address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_PRIMARY_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'primary_address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'primary_address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'primary_address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'primary_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
                  ),
                  4 => 
                  array (
                    'name' => 'primary_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
                  ),
                ),
              ),
              1 => 
              array (
                'name' => 'alt_address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_ALT_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'alt_address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_ALT_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'alt_address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_ALT_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'alt_address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_ALT_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'alt_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_ALT_ADDRESS_POSTALCODE',
                  ),
                  4 => 
                  array (
                    'name' => 'alt_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_ALT_ADDRESS_COUNTRY',
                  ),
                  5 => 
                  array (
                    'name' => 'copy',
                    'label' => 'NTC_COPY_PRIMARY_ADDRESS',
                    'type' => 'copy',
                    'mapping' => 
                    array (
                      'primary_address_street' => 'alt_address_street',
                      'primary_address_city' => 'alt_address_city',
                      'primary_address_state' => 'alt_address_state',
                      'primary_address_postalcode' => 'alt_address_postalcode',
                      'primary_address_country' => 'alt_address_country',
                    ),
                  ),
                ),
              ),
              2 => 
              array (
                'name' => 'geocode_status',
                'licenseFilter' => 
                array (
                  0 => 'MAPS',
                ),
              ),
              3 => 'phone_fax',
              4 => 'phone_work',
              5 => 'twitter',
              6 => 
              array (
                'name' => 'dnb_principal_id',
                'readonly' => true,
              ),
              7 => 
              array (
              ),
              8 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              9 => 'report_to_name',
              10 => 'sync_contact',
              11 => 'lead_source',
              12 => 'assigned_user_name',
              13 => 
              array (
                'name' => 'campaign_name',
                'span' => 12,
              ),
              14 => 
              array (
                'name' => 'preferred_language',
                'type' => 'language',
              ),
              15 => 'portal_user_company_name',
              16 => 'portal_name',
              17 => 'portal_active',
              18 => 
              array (
                'name' => 'portal_password',
                'type' => 'change-password',
              ),
              19 => 
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
              20 => 'team_name',
              21 => 
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
              0 => 
              array (
                'name' => 'hint_account_website',
                'label' => 'LBL_HINT_COMPANY_WEBSITE',
                'type' => 'stage2_url',
                'white_list' => true,
                'fields' => 
                array (
                  0 => 'hint_photo',
                  1 => 'hint_account_logo',
                ),
              ),
              1 => 'hint_education',
              2 => 
              array (
                'name' => 'hint_education_2',
                'parent_key' => 'hint_education',
              ),
              3 => 'hint_job_2',
              4 => 'hint_account_size',
              5 => 'hint_account_industry',
              6 => 'hint_account_location',
              7 => 
              array (
                'name' => 'hint_account_description',
                'account_key' => 'description',
              ),
              8 => 'hint_account_founded_year',
              9 => 
              array (
                'name' => 'hint_industry_tags',
                'account_key' => 'hint_account_industry_tags',
              ),
              10 => 'hint_account_naics_code_lbl',
              11 => 
              array (
                'name' => 'hint_account_sic_code_label',
                'account_key' => 'sic_code',
              ),
              12 => 'hint_account_fiscal_year_end',
              13 => 
              array (
                'name' => 'hint_account_annual_revenue',
                'account_key' => 'annual_revenue',
              ),
              14 => 
              array (
                'name' => 'hint_facebook',
                'type' => 'stage2_url',
              ),
              15 => 
              array (
                'name' => 'hint_twitter',
                'type' => 'stage2_url',
              ),
              16 => 
              array (
                'name' => 'hint_account_facebook_handle',
                'type' => 'stage2_url',
              ),
              17 => 
              array (
                'name' => 'hint_account_twitter_handle',
                'type' => 'stage2_url',
                'account_key' => 'twitter',
              ),
              18 => 
              array (
              ),
              19 => 
              array (
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'empid_c',
                'label' => 'LBL_EMPID',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'empname_c',
                'label' => 'LBL_EMPNAME',
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'joindate_c',
                'label' => 'LBL_JOINDATE',
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'conrelate_c',
                'studio' => 'visible',
                'label' => 'LBL_CONRELATE',
              ),
              4 => 
              array (
                'readonly' => false,
                'name' => 'acctype_c',
                'label' => 'LBL_ACCTYPE',
              ),
              5 => 
              array (
                'readonly' => false,
                'name' => 'date_of_birth_c',
                'label' => 'LBL_DATE_OF_BIRTH',
              ),
              6 => 
              array (
                'readonly' => false,
                'name' => 'age_c',
                'label' => 'LBL_AGE',
              ),
            ),
          ),
          5 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'intcustom_c',
                'label' => 'LBL_INTCUSTOM_C',
                'studio' => 'visible',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'customname_c',
                'studio' => 'visible',
                'label' => 'LBL_CUSTOMNAME_C',
              ),
              2 => 
              array (
                'name' => 'dropdowncustom_c',
                'label' => 'LBL_DROPDOWNCUSTOM_C',
                'studio' => 'visible',
              ),
              3 => 
              array (
                'name' => 'datetimecustom_c',
                'label' => 'LBL_DATETIMECUSTOM_C',
                'studio' => 'visible',
              ),
              4 => 
              array (
                'name' => 'relatecustom_c',
                'label' => 'LBL_RELATECUSTOM_C',
                'studio' => 'visible',
              ),
              5 => 
              array (
              ),
              6 => 
              array (
              ),
            ),
          ),
          6 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL3',
            'label' => 'LBL_RECORDVIEW_PANEL3',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'have_car_c',
                'label' => 'LBL_HAVE_CAR',
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'car_maker_c',
                'label' => 'LBL_CAR_MAKER',
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
