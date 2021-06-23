<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Infaqq extends Seeder
{
	public function run()
	{
		//
		$infaqq_data = [
			[
				'id_infaq' => '1',
				'nama'    => 'Elmuru Megan',
				'email'    => 'megan@gmail.com',
				'no_telp'    => '567698',
				'jumlah'    => '500000',
				'id_pembayaran'    => '1'
			],
			[
				'id_infaq' => '2',
				'nama'    => 'Bayuangga',
				'email'    => 'bayu@gmail.com',
				'no_telp'    => '555879',
				'jumlah'    => '20000',
				'id_pembayaran'    => '3'
			],
			[
				'id_infaq' => '3',
				'nama'    => 'Megan Bayu',
				'email'    => 'megannn@gmail.com',
				'no_telp'    => '2356427',
				'jumlah'    => '100000',
				'id_pembayaran'    => '2'
			]
		];
		foreach ($infaqq_data as $data) {
			// insert semua data ke tabel
			$this->db->table('Infaqq')->insert($data);
		}
	}
}
