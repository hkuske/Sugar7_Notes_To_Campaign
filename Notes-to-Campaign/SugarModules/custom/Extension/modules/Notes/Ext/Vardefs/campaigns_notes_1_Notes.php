<?php
// created: 2018-07-25 22:44:36
$dictionary["Note"]["fields"]["campaigns_notes_1"] = array (
  'name' => 'campaigns_notes_1',
  'type' => 'link',
  'relationship' => 'campaigns_notes_1',
  'source' => 'non-db',
  'module' => 'Campaigns',
  'bean_name' => 'Campaign',
  'side' => 'right',
  'vname' => 'LBL_CAMPAIGNS_NOTES_1_FROM_NOTES_TITLE',
  'id_name' => 'campaigns_notes_1campaigns_ida',
  'link-type' => 'one',
);
$dictionary["Note"]["fields"]["campaigns_notes_1_name"] = array (
  'name' => 'campaigns_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CAMPAIGNS_NOTES_1_FROM_CAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'campaigns_notes_1campaigns_ida',
  'link' => 'campaigns_notes_1',
  'table' => 'campaigns',
  'module' => 'Campaigns',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["campaigns_notes_1campaigns_ida"] = array (
  'name' => 'campaigns_notes_1campaigns_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CAMPAIGNS_NOTES_1_FROM_NOTES_TITLE_ID',
  'id_name' => 'campaigns_notes_1campaigns_ida',
  'link' => 'campaigns_notes_1',
  'table' => 'campaigns',
  'module' => 'Campaigns',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
