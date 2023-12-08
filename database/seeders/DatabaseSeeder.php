<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $u = new User;
        $u->name = "Adam dz";
        $u->email =  "adam.belaidounipro@gmail.com";
        $u->password = Hash::make("dzpower694");
        $u->is_admin = true;
        $u->save();

        $u = new User;
        $u->name = "Adam BELAIDOUNI";
        $u->email =  "adaam.belaidounii@gmail.com";
        $u->password = Hash::make("motdepasse694");
        $u->is_admin = false;
        $u->save();
        
        $this->call([
            GoatSeeder::class,
        ]);
    }
}
