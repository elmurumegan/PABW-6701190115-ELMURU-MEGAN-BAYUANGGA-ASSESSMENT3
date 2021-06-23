<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_pembayaran'          => [
				'type'           => 'INT',
				'constraint'     => 10,
			],
			'metode'    => [
				'type'       => 'VARCHAR',
				'constraint' => '25',
			],
			'norek'    => [
				'type'       => 'VARCHAR',
				'constraint' => '25',
			], 'logo'    => [
				'type'       => 'VARCHAR',
				'constraint' => '25',
			],
		]);
		$this->forge->addPrimaryKey('id_pembayaran', true);
		$this->forge->createTable('Pembayaran');
	}

	public function down()
	{
		//
		$this->forge->dropTable('Pembayaran');
	}
}
