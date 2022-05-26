<?php

namespace App\Controllers;
namespace App\Models\loginModels;

class Home extends BaseController
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('conteudo');
        $this->load->view('rodape');


        $dados=$this->request->getPost();
        $model = new loginModels();
        $model->where('nome', $nome);
        return view('cadastrar/cadastro');

        
    }
}
