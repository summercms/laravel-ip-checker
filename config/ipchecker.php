<?php

/**
 * Laravel IP Checker
 *
 * @author    Hayri Can BARÇIN <hayricanbarcin (#) gmail (.) com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://github.com/HayriCan/laravel-ip-checker
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Driver
    |--------------------------------------------------------------------------
    | Driver option currently supports "db" and "file"
    |
    */

    "driver" => "file",

    /*
    |--------------------------------------------------------------------------
    | File Path and File Name
    |--------------------------------------------------------------------------
    | If you switch driver to "file" it will write Allowed Ip Addresses on this path
    |
    */

    "filepath"=>"ipchecker",
    "filename" => "iplist.php",


    /*
    |--------------------------------------------------------------------------
    | Dashboard Settings
    |--------------------------------------------------------------------------
    | If you change 'auth' to true your IpChecker dashboard will require 'auth' middleware
    | You can change  IpChecker dashboard route prefix from 'route_prefix'
    |
    */

    'settings'=>[
        'auth'=> false,
        "route_prefix"=> "",
    ],

    /*
    |--------------------------------------------------------------------------
    | Route Group Middleware
    |--------------------------------------------------------------------------
    | You can specify your 'api.php' and 'web.php' route group middleware for filtering response type.
    |
    |
    */

    'api_middleware'=>'api',
    'web_middleware'=>'web',

];