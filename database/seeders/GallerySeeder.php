<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::create([
            'name' => 'pé de café',
            'scientific_name' => 'Coffea',
            'description' => 'A angiosperma café (gênero Coffea) é uma planta originária da África tropical, amplamente cultivada em regiões tropicais do mundo por seus frutos, que originam uma das bebidas mais consumidas globalmente. Pertencente à família Rubiaceae, o cafeeiro é uma planta arbustiva que produz frutos chamados de "cerejas do café", contendo sementes conhecidas como grãos de café. Além de seu valor econômico, o café é uma planta de flor vistosa, com flores brancas e perfumadas, características típicas das angiospermas — como a presença de flores verdadeiras e frutos que envolvem as sementes. É uma das plantas presentes do game sobre angiospermas.',
            'image' => 'https://i.postimg.cc/mrF9Djvn/arabica.png',
            'sprite_game' => 'https://i.postimg.cc/d1jKjPMT/cafe.png',
        ]);
    }
}
