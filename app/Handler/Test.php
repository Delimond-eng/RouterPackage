<?php

namespace App\Handler;

class Test{
    public function execute():void{
        echo "execute callback";
    }

    public function register() :void{
        require_once __DIR__ . '/../../templates/test.phtml';
    }

    public function sendRequest($params) :void{
        var_dump($params);
    }

    public function executeGetWithParameters(array $params) :void{
        echo '<h1> Hello Mr '.$params['username'] .'</h1>';
    }
}