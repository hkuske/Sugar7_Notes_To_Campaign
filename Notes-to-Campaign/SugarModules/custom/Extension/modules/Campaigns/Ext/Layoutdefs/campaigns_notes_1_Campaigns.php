<?php
 // created: 2018-07-25 22:44:36
$layout_defs["Campaigns"]["subpanel_setup"]['campaigns_notes_1'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CAMPAIGNS_NOTES_1_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'campaigns_notes_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
