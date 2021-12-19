<?php

namespace super_offers;

use super_offers\constant;

final class super_offers
{
    public function __construct($registry)
    {
        $this->db = $registry->get('db');
        $this->config = $registry->get('config');
        $this->session = $registry->get('session');
    }

    public function getSupportedOptionTypes()
    {
        return array(
            constant::TYPE_SELECT, constant::TYPE_RADIO, constant::TYPE_IMAGE
        );
    }

    public function getDefaultActiveColumns()
    {
        return array(
            constant::IMPORT_ID     => array('name' => false, 'active' => false, 'code' => constant::IMPORT_ID, 'default' => ''),
            constant::MODEL         => array('name' => false, 'active' => false, 'code' => constant::MODEL, 'default' => ''),
            constant::PRODUCT_CODE  => array('name' => false, 'active' => false, 'code' => constant::PRODUCT_CODE, 'default' => ''),
            constant::QUANTITY      => array('name' => false, 'active' => true, 'code' => constant::QUANTITY, 'default' => ''),
            constant::SUBTRACT      => array('name' => false, 'active' => false, 'code' => constant::SUBTRACT, 'default' => true),
            constant::PRICE         => array('name' => false, 'active' => true, 'code' => constant::PRICE, 'default' => ''),
            constant::SPECIAL       => array('name' => false, 'active' => false, 'code' => constant::SPECIAL, 'default' => ''),
            constant::REWARD        => array('name' => false, 'active' => false, 'code' => constant::REWARD, 'default' => ''),
            constant::WEIGHT        => array('name' => false, 'active' => false, 'code' => constant::WEIGHT, 'default' => ''),
            constant::BARCODE       => array('name' => false, 'active' => true, 'code' => constant::BARCODE, 'default' => ''),
            constant::IMAGE         => array('name' => false, 'active' => true, 'code' => constant::IMAGE, 'default' => ''),
        );
    }

}
