<?php

namespace TechnoHiveKenya\MpesaShoppingCart\Facades;
use Illuminate\Support\Facades\Facade;
/**
 * Class MpesaShoppingCartFacade
 * @package TechnoHive\MpesaShoppingCart
 */

class MpesaShoppingCartFacades extends  Facade{
    /**
     * @return string
     */
    protected static function  getFacadeAccessor(){
        return "mpesashoppingcard";
    }
}


?>