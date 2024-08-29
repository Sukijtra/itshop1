<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Model\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //      'name' => 'kk',
        //      'email' => 'kk@example.com',
        //      'password' => Hash::make ('eiei'),
        // ]);

        $this->call([
            ProductTypesTableSeeder::class,
            ProductsTableSeeder::class,
        ]);
    }

}    

        // \App\Model\User::factory(10)->create();
    
        // \App\Models\User::factory()->create([
        //     'name' => 'Sukijtra Kosaengraksa',
        //     'email' => 'sukijtra.k@kkumail.com',
        //     'password' => Hash::make ('wordpass'),
        // ]);
