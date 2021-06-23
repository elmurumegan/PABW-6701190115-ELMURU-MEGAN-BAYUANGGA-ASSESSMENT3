<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Infaqq extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_infaq'          => [
				'type'           => 'INT',
				'constraint'     => 10,
			],
			'nama'    => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
			],
			'email'    => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
			],
			'no_telp'    => [
				'type'       => 'INT',
				'constraint' => 15,
			],
			'jumlah'    => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'id_pembayaran'    => [
				'type'       => 'INT',
				'constraint' => 10,
			],
		]);
		$this->forge->addPrimaryKey('id_infaq', true);
		$this->forge->addForeignKey('id_pembayaran', 'Pembayaran', 'id_pembayaran');
		$this->forge->createTable('Infaqq');
	}

	public function down()
	{
		//
		$this->forge->dropTable('Infaqq');
	}
}
