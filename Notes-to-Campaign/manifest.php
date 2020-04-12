<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$manifest = array (
  'acceptable_sugar_versions' => 
  array (
    '7.*.*',
    '8.*.*',
	'9.*.*',
	'10.*.*',
  ),
  'acceptable_sugar_flavors' => 
  array (
    'PRO',
    'CORP',
    'ENT',
    'ULT',
  ),
  'readme' => 'Notes to Campaign - many-to-one',
  'key' => '',
  'author' => 'kuske',
  'description' => 'Notes to Campaign - many-to-one',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'NotesToCampaign',
  'published_date' => '2020-04-10 00:00:01',
  'type' => 'module',
  'version' => 20200410000001,
  'remove_tables' => 'prompt',
);

$installdefs = array (
  'id' => 'NotesToCampaign',
  
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/custom/metadata/campaigns_notes_1MetaData.php',
    ),
  ),


  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/application/Ext/TableDictionary/campaigns_notes_1.php',
      'to' => 'custom/Extension/application/Ext/TableDictionary/campaigns_notes_1.php',
    ),

    1 => 
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/Campaigns/Ext/Language/en_us.customcampaigns_notes_1.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Language/en_us.customcampaigns_notes_1.php',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/Campaigns/Ext/Layoutdefs/campaigns_notes_1_Campaigns.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Layoutdefs/campaigns_notes_1_Campaigns.php',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/Campaigns/Ext/Vardefs/campaigns_notes_1_Campaigns.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/campaigns_notes_1_Campaigns.php',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/Campaigns/Ext/WirelessLayoutdefs/campaigns_notes_1_Campaigns.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/WirelessLayoutdefs/campaigns_notes_1_Campaigns.php',
    ),

    5 => 
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/Notes/Ext/Language/en_us.customcampaigns_notes_1.php',
      'to' => 'custom/Extension/modules/Notes/Ext/Language/en_us.customcampaigns_notes_1.php',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/Notes/Ext/Vardefs/campaigns_notes_1_Notes.php',
      'to' => 'custom/Extension/modules/Notes/Ext/Vardefs/campaigns_notes_1_Notes.php',
    ),
	
    7 => 
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/relationships/language/Campaigns.php',
      'to' => 'custom/Extension/modules/relationships/language/Campaigns.php',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/relationships/language/Notes.php',
      'to' => 'custom/Extension/modules/relationships/language/Notes.php',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/relationships/layoutdefs/campaigns_notes_1_Campaigns.php',
      'to' => 'custom/Extension/modules/relationships/layoutdefs/campaigns_notes_1_Campaigns.php',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/relationships/relationships/campaigns_notes_1MetaData.php',
      'to' => 'custom/Extension/modules/relationships/relationships/campaigns_notes_1MetaData.php',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/relationships/vardefs/campaigns_notes_1_Campaigns.php',
      'to' => 'custom/Extension/modules/relationships/vardefs/campaigns_notes_1_Campaigns.php',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/relationships/vardefs/campaigns_notes_1_Notes.php',
      'to' => 'custom/Extension/modules/relationships/vardefs/campaigns_notes_1_Notes.php',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/relationships/wirelesslayoutdefs/campaigns_notes_1_Campaigns.php',
      'to' => 'custom/Extension/modules/relationships/wirelesslayoutdefs/campaigns_notes_1_Campaigns.php',
    ),

/*
    14 => 
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/Campaigns/Ext/Layoutdefs/_overrideCampaign_subpanel_campaigns_notes_1.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Layoutdefs/_overrideCampaign_subpanel_campaigns_notes_1.php',
    ),	
*/

	15 => 
    array (
      'from' => '<basepath>/SugarModules/custom/modules/Campaigns/views/view.detail.php',
      'to' => 'custom/modules/Campaigns/views/view.detail.php',
    ),
	16 => 
    array (
      'from' => '<basepath>/SugarModules/custom/modules/Notes/clients/base/views/record/record.php',
      'to' => 'custom/modules/Notes/clients/base/views/record/record.php',
    ),
	17 => 
    array (
      'from' => '<basepath>/SugarModules/custom/modules/Notes/clients/base/views/subpanel-for-campaigns-notes/subpanel-for-campaigns-notes.php',
      'to' => 'custom/modules/Notes/clients/base/views/subpanel-for-campaigns-notes/subpanel-for-campaigns-notes.php',
    ),
	18 => 
    array (
      'from' => '<basepath>/SugarModules/custom/modules/Notes/metadata/subpanels/Contract_subpanel_notes.php',
      'to' => 'custom/modules/Notes/metadata/subpanels/Contract_subpanel_notes.php',
    ),
	
  ),
);

