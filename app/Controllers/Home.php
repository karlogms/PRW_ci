<?php

namespace App\Controllers;

class Prw extends BaseController
{
    public function index()
    {
        echo 'Teste função ';
    }

    public function comment()
    {
        echo 'Teste função 2';
    }
    
    if (! $this->request->isSecure()) {
        $this->forceHTTPS();
    }
}

?>