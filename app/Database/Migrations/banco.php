<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlog extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cliente'          => [
                'cod'           => 'INT',
                'nome'     => 'VARCHAR',
                'cpfcnpj'       => 'INT',
            ],
            'compra'       => [
                'com_cod'       => 'INT',
                'com_total' => 'INT',
            ],
        ]);
        $this->forge->addKey('cliente_id', true);
        $this->forge->createTable('cliente_teste');
    }

    public function down()
    {
        $this->forge->dropTable('cliente');
    }
}