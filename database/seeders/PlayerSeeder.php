<?php
use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    public function run()
    {
        Player::create([
            'name' => 'Scott Carson',
            'position' => 'Goalkeeper',
            'image_url' => 'https://via.placeholder.com/150',
            'country_flag_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/b/be/Flag_of_England.svg/2560px-Flag_of_England.svg.png',
            'number' => 33
        ]);

        Player::create([
            'name' => 'Ederson',
            'position' => 'Goalkeeper',
            'image_url' => 'https://via.placeholder.com/150',
            'country_flag_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/1024px-Flag_of_Brazil.svg.png',
            'number' => 31
        ]);

        Player::create([
            'name' => 'Stefan Ortega Moreno',
            'position' => 'Goalkeeper',
            'image_url' => 'https://via.placeholder.com/150',
            'country_flag_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/2560px-Flag_of_Germany.svg.png',
            'number' => 18
        ]);
    }
}
