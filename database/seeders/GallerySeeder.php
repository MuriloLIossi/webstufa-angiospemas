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

        /*
        Gallery::create([
            'name' => '',
            'scientific_name' => '',
            'description' => '',
            'image' => '',
            'sprite_game' => '',
        ]);
        */

        Gallery::create([
            'name' => 'Bananeira',
            'scientific_name' => 'Musa',
            'description' => 'A origem das bananeiras é do Sudeste Asiático e das ilhas do Pacífico. De lá, elas foram levadas para outras partes do mundo. Elas crescem bem em lugares quentes e úmidos, sendo muito comuns em regiões tropicais e subtropicais. Por isso, vemos muitas bananeiras em países como o Brasil. A bananeira é cultivada principalmente por seus frutos, as bananas, que são comidas frescas, cozidas, fritas ou usadas em diversas receitas como bolos e vitaminas. Além das frutas, as folhas grandes da bananeira também podem ser usadas em algumas culturas para cozinhar alimentos enrolados nelas ou como pratos naturais.',
            'image' => 'https://i.postimg.cc/K8rJJqPN/banana.jpg',
            'sprite_game' => '',
        ]);       

        Gallery::create([
            'name' => 'coqueiro',
            'scientific_name' => 'Cocos nucifera',
            'description' => 'Acredita-se que sua origem seja em algum lugar no Sudeste Asiático ou na Melanésia, uma região da Oceania Ele cresce bem em solos com areia e perto do mar, por isso é encontrado em regiões tropicais e subtropicais de vários continentes. O coqueiro é muito útil, quase todas as partes podem ser utilizadas. O coco pode ser usado para criar leite de coco, óleo de coco e água de coco, e do coqueiro também se aproveita o palmito e as folhas são usadas para fazer cestos e chapéus, isso faz com que a árvore seja muito importante economicamente.',
            'image' => 'https://i.postimg.cc/wMLh3MFV/coqueiro-01.jpg',
            'sprite_game' => '',
        ]);

        Gallery::create([
            'name' => 'Lírio',
            'scientific_name' => 'Lilium',
            'description' => 'A origem dos lírios é bastante ampla, costuma ser mais comum em áreas de clima temperado, é uma planta nativa do hemisfério norte, com forte presença na Europa, América do Norte e Ásia Por sua diversidade, diferentes tipos de lírios podem se adaptar a várias condições de jardim. Então ela consegue facilmente ser criada em qualquer jardim, desde que tenha solos bem drenados e boa luminosidade solar. Os lírios são principalmente cultivados por sua beleza ornamental. Suas flores vistosas e muitas vezes perfumadas são usadas para decorar jardins, casas e são muito populares em buquês e arranjos para presentear em diversas ocasiões. O lírio é frequentemente usado em cerimônias religiosas e casamentos devido à sua associação com a pureza e inocência de acordo com a linguagem das flores.',
            'image' => 'https://i.postimg.cc/CLM1Rdvx/lirios-brancos-foto-independent-agriculture.png',
            'sprite_game' => '',
        ]);

    }
}
