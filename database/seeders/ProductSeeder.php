<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                // data faker indonesia
                $faker = Faker::create('id_ID');

                // membuat data dummy sebanyak 10 record
                for ($x = 1; $x <= 10; $x++) {
        
                    // insert data dummy product dengan faker
                    DB::table('products')->insert([
                        'namabarang' => $faker->name,
                        'hargabarang' => $faker->randomFloat(2, 10, 100),
                        'deskripsibarang' => $faker->sentence,
                    ]);
                }
            }
        }
?>       
    

