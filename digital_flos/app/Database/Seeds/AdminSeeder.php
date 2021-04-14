<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
        public function run()
        {
                $data = [
                        'email'    => 'admin@gmail.com',
                        'password' => 'admin123',
                        'firstName' => 'Toma',
                        'lastName' => 'Zdravkovic'                
                ];

                // Using Query Builder
                $this->db->table('author')->insert($data);
        }
}