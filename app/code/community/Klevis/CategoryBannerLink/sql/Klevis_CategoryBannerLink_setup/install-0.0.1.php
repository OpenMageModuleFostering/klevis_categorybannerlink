<?php 
$this->startSetup();
$this->addAttribute('catalog_category', 'category_banner_link', array(
    'group'     => 'General', //tab name where it should go - use General or General Information - if the tab does not exist it will be created
    'type'              => 'varchar', //the type of the attribute
    'backend'           => '', //a backend model if needed
    'frontend_input'    => '',
    'frontend'          => '',
    'label'             => 'Banner Link',
    'input'             => 'text',
    'class'             => '',
    'source'            => '', //a source model if needed - only for selects or multiselects
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL, //attribute scope
    'visible'           => true, 
    'frontend_class'    => '',
    'required'          => false, //required or not
    'user_defined'      => true,
    'default'           => '',
    'unique'            => false, //unique or not
    'note'              => ''
));
$this->endSetup();