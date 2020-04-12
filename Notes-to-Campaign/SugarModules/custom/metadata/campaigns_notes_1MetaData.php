<?php
// created: 2018-07-25 22:44:36
$dictionary["campaigns_notes_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'campaigns_notes_1' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'campaigns_notes_1_c',
      'join_key_lhs' => 'campaigns_notes_1campaigns_ida',
      'join_key_rhs' => 'campaigns_notes_1notes_idb',
    ),
  ),
  'table' => 'campaigns_notes_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'campaigns_notes_1campaigns_ida' => 
    array (
      'name' => 'campaigns_notes_1campaigns_ida',
      'type' => 'id',
    ),
    'campaigns_notes_1notes_idb' => 
    array (
      'name' => 'campaigns_notes_1notes_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_campaigns_notes_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_campaigns_notes_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'campaigns_notes_1campaigns_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_campaigns_notes_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'campaigns_notes_1notes_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'campaigns_notes_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'campaigns_notes_1notes_idb',
      ),
    ),
  ),
);