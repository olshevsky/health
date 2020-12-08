<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Christina Foley', 'email' => 'cfoley@myhst.com', 'password' => bcrypt('Ab7djn27cjzbn!'), 'email_verified_at' => time()]);
    }
}
