<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $dados=$this->request->getPost();
        $model = model("\app\models\banco");
        $model->where('nome', $nome);
        return view('cadastrar/cadastro');

        
    }
}
