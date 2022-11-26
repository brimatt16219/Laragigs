<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Jugram Haschwalth (ユーグラム・ハッシュヴァルト, Yūguramu Hasshuvaruto) is a Quincy and the Wandenreichs Sternritter Grandmaster (星十字騎士団最高位 (シュテルンリッター・グランドマスター), Shuterunrittā Gurandomasutā; Japanese for "Highest-Ranked of the Band of Star-Cross Knights") with the designation "B" - "The Balance".[4] He is also the advisor to Emperor Yhwach[2] and the substitute as the monarch when Yhwach sleeps, as well as the second-in-command of the Wandenreich.[5]'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'description' => 'Grimmjow Jaegerjaquez (グリムジョー・ジャガージャック, Gurimujō Jagājakku)[2] is an Arrancar and was the Sexta (6th) Espada in Sōsuke Aizens affiliated army.[3]'
        // ]);
    }
}
