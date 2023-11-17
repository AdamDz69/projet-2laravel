<?php

namespace Database\Seeders;

use App\Models\Goat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class GoatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $u = new User;
        $u->name = "Adam dz";
        $u->email =  "adam.belaidounipro@gmail.com";
        $u->password = Hash::make("dzpower694");
        $u->save();

        $u = new User;
        $u->name = "Adam BELAIDOUNI";
        $u->email =  "adaam.belaidounii@gmail.com";
        $u->password = Hash::make("motdepasse694");
        $u->save();
        

        $cpt = 1;

        $g = new Goat();
        $g->sex = true;
        $g->name = "Bastien";
        $g->price = 8500;
        $g->color = 'darkorange';
        $g->birthday = '1990-07-31';
        $g->image_path = '/goat_'.$cpt++.'.jpg';
        $g->user_id = 1;
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "Bastien";
        $g->price = 300;
        $g->color = 'purple';
        $g->birthday = '2004-07-21';
        $g->image_path = '/goat_'.$cpt++.'.jpg';
        $g->user_id = 1;
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "Alexandre";
        $g->price = 858500;
        $g->color = 'red';
        $g->birthday = '2004-08-23';
        $g->image_path = '/goat_'.$cpt++.'.jpg';
        $g->user_id = 1;
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "Léo";
        $g->price = 5;
        $g->color = 'green';
        $g->birthday = '2003-10-11';
        $g->image_path = '/goat_'.$cpt++.'.jpg';
        $g->user_id = 1;
        $g->save();

        $g = new Goat();
        $g->sex = true;
        $g->name = "Miruna";
        $g->price = 987978500;
        $g->color = 'green';
        $g->birthday = '2003-04-03';
        $g->image_path = '/goat_'.$cpt++.'.jpg';
        $g->user_id = 1;
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "Evan";
        $g->price = 654231;
        $g->color = 'black';
        $g->birthday = '2004-02-06';
        $g->image_path = '/goat_'.$cpt++.'.jpg';
        $g->user_id = 1;
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "Erwann";
        $g->price = 12;
        $g->color = 'orange';
        $g->birthday = '2003-03-21';
        $g->image_path = '/goat_'.$cpt++.'.jpg';
        $g->user_id = 1;
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "Alhousseyni";
        $g->price = 100000000;
        $g->color = 'blue';
        $g->birthday = '2003-10-12';
        $g->image_path = '/goat_'.$cpt++.'.jpg';
        $g->user_id = 1;
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "Adam";
        $g->price = 900;
        $g->color = 'green';
        $g->birthday = '2004-10-04';
        $g->image_path = '/goat_'.$cpt++.'.jpg';
        $g->user_id = 1;
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "Hugo";
        $g->price = 777;
        $g->color = 'black';
        $g->birthday = '2002-03-18';
        $g->image_path = '/goat_'.$cpt++.'.jpg';
        $g->user_id = 2;
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "Guillaume";
        $g->price = 1;
        $g->color = 'blue';
        $g->birthday = '2004-04-09';
        $g->image_path = '/goat_'.$cpt++.'.jpg';
        $g->user_id = 2;
        $g->save();
    }
}

