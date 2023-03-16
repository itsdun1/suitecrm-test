<?php
$module_name = 'le_as_AssignedLeads';
$listViewDefs [$module_name] = 
array (
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'LEAD_ASSIGNED_ID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEAD_ASSIGNED_ID',
    'width' => '20%',
    'default' => true,
  ),
  'LEAD_PHONE_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_LEAD_PHONE_NUMBER',
    'width' => '10%',
  ),
  'LEAD_FIRST_NAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_LEAD_FIRST_NAME',
    'width' => '10%',
  ),
  'LEAD_WORK_CITY_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_LEAD_WORK_CITY',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '20%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
;
?>
