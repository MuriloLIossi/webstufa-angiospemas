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
            'name' => 'Pé de café',
            'scientific_name' => 'Coffea',
            'description' => "A angiosperma café (gênero Coffea) é uma planta originária da África tropical, amplamente cultivada em regiões tropicais do mundo por seus frutos, que originam uma das bebidas mais consumidas globalmente. Pertencente à família Rubiaceae, o cafeeiro é uma planta arbustiva que produz frutos chamados de cerejas do café, contendo sementes conhecidas como grãos de café. Além de seu valor econômico, o café é uma planta de flor vistosa, com flores brancas e perfumadas, características típicas das angiospermas — como a presença de flores verdadeiras e frutos que envolvem as sementes. É uma das plantas presentes do game sobre angiospermas.",
            'image' => 'cafe.jpg',
            'sprite_game' => 'cafe.png',
        ]);

        /*
        Gallery::create([
            'name' => '',
            'scientific_name' => '',
            'description' => "",
            'image' => '',
            'sprite_game' => '',
        ]);
        */

        Gallery::create([
            'name' => 'Bananeira',
            'scientific_name' => 'Musa',
            'description' => "A bananeira, conhecida por seus cachos de frutas deliciosas, é uma monocotiledônea do gênero Musa, e existem cerca de 50 plantas dessa espécie. 
            \n\n
            A origem das bananeiras é do Sudeste Asiático e das ilhas do Pacífico. De lá, elas foram levadas para outras partes do mundo.
            \n\n
            Elas crescem bem em lugares quentes e úmidos, sendo muito comuns em regiões tropicais e subtropicais. Por isso, vemos muitas bananeiras em países como o Brasil.
            \n\n
            A bananeira é cultivada principalmente por seus frutos, as bananas, que são comidas frescas, cozidas, fritas ou usadas em diversas receitas como bolos e vitaminas. Além das frutas, as folhas grandes da bananeira também podem ser usadas em algumas culturas para cozinhar alimentos enrolados nelas ou como pratos naturais.
            \n\n
            A banana não se faz presente no nosso jogo, mas fez parte de um dos penteados da Carmen Miranda, já é alguma coisa!",
            'image' => 'banana.jpg',
            'sprite_game' => '',
        ]);       

        Gallery::create([
            'name' => 'Coqueiro',
            'scientific_name' => 'Cocos nucifera',
            'description' => "O nome científico do Coqueiro é Cocos nucifera, ele é uma Monocotiledônea, e acredita-se que sua origem seja em algum lugar no Sudeste Asiático ou na Melanésia, uma região da Oceania
            \n\n\n\n
            Ele cresce bem em solos com areia e perto do mar, por isso é encontrado em regiões tropicais e subtropicais de vários continentes.
            \n\n\n\n
            O coqueiro é muito útil, quase todas as partes podem ser utilizadas. O coco pode ser usado para criar leite de coco, óleo de coco e água de coco, e do coqueiro também se aproveita o palmito e as folhas são usadas para fazer cestos e chapéus, isso faz com que a árvore seja muito importante economicamente. 
            \n\n\n\n
            E é claro, você pode usar o coqueiro no jogo!",
            'image' => 'coqueiro.jpg',
            'sprite_game' => 'coqueiro.png',
        ]);

        Gallery::create([
            'name' => 'Lírio',
            'scientific_name' => 'Lilium',
            'description' => "O Lírio é uma flor conhecida por sua beleza e elegância, admirada em jardins e arranjos florais em todo o mundo. Ele é uma monocotiledônea e seu nome científico mais comum é Lilium, que representa um gênero com cerca de 100 espécies de lírios ao redor do mundo. 
            A origem dos lírios é bastante ampla, costuma ser mais comum em áreas de clima temperado, é uma planta nativa do hemisfério norte, com forte presença na Europa, América do Norte e Ásia
            \n\n
            Por sua diversidade, diferentes tipos de lírios podem se adaptar a várias condições de jardim. Então ela consegue facilmente ser criada em qualquer jardim, desde que tenha solos bem drenados e boa luminosidade solar.
            \n\n
            Os lírios são principalmente cultivados por sua beleza ornamental. Suas flores vistosas e muitas vezes perfumadas são usadas para decorar jardins, casas e são muito populares em buquês e arranjos para presentear em diversas ocasiões. 
            \n\n
            O lírio é frequentemente usado em cerimônias religiosas e casamentos devido à sua associação com a pureza e inocência de acordo com a linguagem das flores.
            \n\n
            Infelizmente, o Lírio não se faz presente no nosso jogo.",
            'image' => 'lirio.png',
            'sprite_game' => '',
        ]);

        Gallery::create([
            'name' => 'Dente de leão',
            'scientific_name' => 'Taraxacum officinale',
            'description' => "Todos já devem ter visto um dente-de-leão, é aquela plantinha com flores amarelas vibrantes que depois se transformam numa esfera fofinha de sementes que a gente adora soprar, é muito mais do que uma simples matinho. Seu nome científico é Taraxacum officinale e ele é uma dicotiledônea.
            Acredita-se que o dente-de-leão seja originário da Europa e da Ásia, mas hoje em dia ele já se espalhou por quase todo o mundo, crescendo em diversos climas.
            É possível encontrar o dente-de-leão crescendo em jardins, gramados, campos, beiras de estradas e até em frestas de calçadas. Ele é uma planta bem resistente e se adapta facilmente a qualquer lugar que tenha uma graminha.
            Apesar de muita gente não saber, o dente-de-leão tem vários usos! Suas folhas jovens podem ser usadas em saladas (têm um gostinho um pouco amargo), e suas flores também podem ser comestíveis. Além disso, ele é uma planta importante para as abelhas, que coletam seu néctar. E, claro, quem nunca se divertiu soprando suas sementes ao vento para fazer um pedido?
            E o dente-de-leão está na lista de personagens do jogo! ",
            'image' => 'dente-de-leao.jpg',
            'sprite_game' => 'dente-de-leao.png',
        ]);

        Gallery::create([
            'name' => 'Jaqueira',
            'scientific_name' => 'Artocarpus heterophyllus',
            'description' => "A jaqueira é uma árvore grande e forte, famosa por dar a jaca, uma das maiores frutas que existem no mundo! Seu nome científico é Artocarpus heterophyllus e ela é uma Dicotiledônea.
            Essa árvore impressionante é originária da Índia e de outras partes do Sul e Sudeste Asiático. De lá, ela foi trazida para muitas outras regiões tropicais, incluindo o Brasil, onde se adaptou muito bem.
            A jaqueira gosta de lugares quentes e úmidos para crescer. Por isso, é comum encontrá-la em pomares, quintais e até mesmo em algumas matas de regiões com clima tropical.
            O principal uso da jaqueira é, claro, sua fruta enorme, a jaca! A polpa da jaca pode ser consumida ao natural quando está madura e docinha, ou cozida quando está verde, sendo usada em pratos salgados como uma substituta da carne. As sementes da jaca também podem ser cozidas ou assadas e são bem nutritivas. Além disso, a madeira da jaqueira pode ser usada em construções e para fazer móveis.
            A jaqueira está disponível no jogo! ",
            'image' => 'jaqueira.png',
            'sprite_game' => 'jaqueira.png',
        ]);

        Gallery::create([
            'name' => 'Ipê',
            'scientific_name' => 'Handroanthus albus',
            'description' => "O ipê é, sem dúvida, uma das árvores mais emblemáticas e bonitas do Brasil, famosa por suas flores que pintam a paisagem de amarelo, roxo, rosa ou branco. Seu nome científico pertence ao gênero Handroanthus  e a planta é uma Dicotiledónea.
            Originário da América do Sul e Central, o ipê é encontrado em diversas regiões do Brasil, sendo até a flor-símbolo do país.
            Ele cresce muito bem em vários tipos de solo e climas, desde as áreas mais secas do Cerrado até regiões mais úmidas. Por isso, é comum ver ipês enfeitando ruas, parques e florestas por todo o território brasileiro.
            O ipê é muito valorizado por sua beleza ornamental, especialmente durante a floração, que atrai muitos pássaros e abelhas. Sua madeira é de excelente qualidade, sendo usada na construção civil e na fabricação de móveis. Além disso, algumas espécies são usadas na medicina popular.
            O Ipê é uma árvore muito útil e fofa do nosso jogo! entre pra testar!",
            'image' => 'ipe.jpg',
            'sprite_game' => 'ipe.png',
        ]);

        Gallery::create([
            'name' => 'Pau-Brasil',
            'scientific_name' => 'Paubrasilia echinata',
            'description' => "O pau-brasil é uma árvore nativa que possui grande significado histórico para o nosso país. Ele é uma dicotiledônea e seu nome científico é Paubrasilia echinata.
            Originalmente, essa árvore é encontrada em parte da Mata Atlântica, uma floresta densa que se estende ao longo da costa brasileira. Era muito abundante em estados como Bahia, Pernambuco e Rio de Janeiro.
            O pau-brasil prefere solos mais ricos e úmidos, típicos da Mata Atlântica e costuma crescer em regiões de clima tropical e subtropical. 
            Essa árvore também é muito importante pra história do nosso país! Quando os portugueses chegaram em 1500, ficaram impressionados com a abundância dessa árvore, que possuía uma seiva avermelhada. Por ser tão valiosa na Europa para a produção de tintura, o pau-brasil se tornou o primeiro produto a ser explorado em larga escala pelos colonizadores. Essa exploração foi tão intensa e lucrativa que a terra recém-descoberta acabou sendo nomeada em homenagem a essa árvore: Terra do Brasil e, posteriormente, apenas Brasil. O pau-brasil, portanto, não é apenas uma árvore, mas um símbolo da riqueza natural e do início da exploração que moldou o destino do país. 
            Infelizmente, esse uso desenfreado fez a árvore se tornar mais difícil de se encontrar. Mas hoje, sua madeira também é muito utilizada por ser resistente e bonita, sendo usada para a fabricação de arcos para instrumentos musicais e em trabalhos de marcenaria fina.
            Ela é uma forte personagem do nosso jogo!",
            'image' => 'pau-brasil.jpg',
            'sprite_game' => 'pau-brasil.png',
        ]);

        Gallery::create([
            'name' => 'Cannabis',
            'scientific_name' => 'Cannabis sativa',
            'description' => "A Cannabis é uma planta dicotiledônica e que gera bastante interesse e debate devido às suas diversas aplicações e sua presença em diferentes culturas. Seu nome científico é Cannabis sativa.
            Originalmente, a Cannabis é nativa da Ásia Central e do Sul da Ásia. De lá, ela se espalhou por várias partes do mundo, sendo cultivada e utilizada por milênios.
            Ela se adapta a uma variedade de climas, crescendo tanto em regiões temperadas quanto em subtropicais e tropicais, dependendo da variedade e das condições de cultivo, preferindo lugares mais úmidos e com baixa iluminação.
            Ao longo da história, a Cannabis tem sido usada para diversas finalidades. Suas fibras são extremamente resistentes e foram amplamente empregadas na produção de cordas, tecidos (como o cânhamo) e papel. As sementes são nutritivas e podem ser consumidas, além de serem usadas para produzir óleo. Em algumas culturas e tradições, a planta também possui importância em rituais e práticas ancestrais, que usavam ela de forma medicinal para aliviar dores, prática que ainda é usada para tratamento de câncer. Partes dela também são estudadas por suas propriedades e componentes.
            Ela é uma planta muito popular e é jogável no nosso game!",
            'image' => 'makonha.png',
            'sprite_game' => 'maconha.png',
            //DJAMBA
        ]);

        Gallery::create([
            'name' => 'Vitória-régia',
            'scientific_name' => 'Victoria amazônica',
            'description' => "A vitória-régia é uma Dicotiledônea das plantas aquáticas mais famosas do mundo, conhecida por suas folhas gigantescas que flutuam na superfície da água, parecendo bandejas verdes. Seu nome científico é Victoria amazônica.
            Essa planta espetacular é nativa da região amazônica, sendo encontrada principalmente nos rios e lagosda Amazônia, no Brasil e em países vizinhos como a Guiana e o Peru.
            A vitória-régia cresce em águas calmas e rasas de rios, igarapés e lagos, em regiões declima tropical. Suas folhas podem chegar a mais de dois metros de diâmetro, capazes de suportar o peso de um bebê pequeno! Suas flores são brancas e perfumadas quando abrem à noite, mudando para tons de rosa no dia seguinte antes de murchar.
            A principal beleza da vitória-régia é ornamental, atraindo turistas e inspirando lendas e histórias populares. As sementes da planta são comestíveis e, em algumas comunidades ribeirinhas, são usadas para fazer uma espécie de farinha ou pipoca.",
            'image' => 'vitoria-regia.png',
            'sprite_game' => 'vitoria-regia.png',
        ]);

        Gallery::create([
            'name' => 'Capim-carrapicho',
            'scientific_name' => 'Cenchrus echinatus',
            'description' => "O capim-carrapicho é uma gramínea muito comum e fácil de reconhecer, principalmente pelas suas sementes que se agarram com força em tudo. Seu nome científico é Cenchrus echinatus  e ele é uma Monocotiledônea.
            Essa espécie é considerada nativa de regiões tropicais e subtropicais das Américas, mas, por conta de suas sementes viajantes, ela se espalhou por praticamente o mundo todo.
            O capim-carrapicho cresce em diversos ambientes, adaptando-se bem a pastagens, campos abertos, terrenos baldios, beiras de estradas e até em áreas cultivadas, sendo muitas vezes visto como uma planta invasora. Ele tolera bem solos mais pobres e períodos de seca.
            Embora seja um incômodo por se prender em roupas e animais, o capim-carrapicho é uma planta que serve de forragem para o gado em alguns lugares, especialmente quando jovem. Sua principal característica, no entanto, é o sistema de dispersão de suas sementes, que garante sua ampla distribuição e sucesso.",
            'image' => 'carrapicho.jpeg',
            'sprite_game' => 'carrapicho.png',
        ]);
    }
}
