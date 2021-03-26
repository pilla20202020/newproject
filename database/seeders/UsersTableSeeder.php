<?php

namespace Database\Seeders;

use App\Modules\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create(
            array(
                'name' => 'Admin',
                'password' => bcrypt('admin@inventory'),
                'email' => 'admin@inventory.com',
                'status' => 'active'
            )
        );
    }
}
