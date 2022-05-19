<?php

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\loginModels;
    use App\Libraries\Hash;

    class Auth extends BaseController

    {
        public function _construct(){
            helper(['url','form']);
        }
        public function index()
        {
            return view('login');
        }
        public function formaulario_cliente(){
            return view('formulario_cliente');
        }

        public function save(){
            $validation = $this->validate([

                'usuario_cliente'=>[
                    'rules'=> 'required',
                    'errors'=>[
                        'required'=> 'Coloque o login'
                    ]
                ]
            ]);
        }
    }

?>