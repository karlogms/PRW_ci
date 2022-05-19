<?php

namespace App\Models;

use CodeIgniter\Models;

class loginModels extends Models

{

    protected $table = 'teste';
    protected $primarykey = 'cod';
    protected $allowedFilds = ['cod','nome','cpfcnpj','rgie','social','tipo','cep','endereco','bairro','fone','cel','email','endumero','cidade','estado'];

}


?>