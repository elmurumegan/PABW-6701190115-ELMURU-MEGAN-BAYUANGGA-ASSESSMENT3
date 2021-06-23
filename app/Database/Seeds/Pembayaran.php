<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pembayaran extends Seeder
{
	public function run()
	{
		//
		$pembayaran_data = [
			[
				'id_pembayaran' => '1',
				'metode'    => 'BCA',
				'norek'    => 'dweweu',
				'logo'    => 'tidak ada'
			],
			[
				'id_pembayaran' => '2',
				'metode'    => 'BNI',
				'norek'    => '2547534635',
				'logo'    => 'tidak ada'
			],
			[
				'id_pembayaran' => '3',
				'metode'    => 'BRI',
				'norek'    => '8866757',
				'logo'    => 'tidak ada'
			]
		];
		foreach ($pembayaran_data as $data) {
			// insert semua data ke tabel
			$this->db->table('Pembayaran')->insert($data);
		}
	}
}
