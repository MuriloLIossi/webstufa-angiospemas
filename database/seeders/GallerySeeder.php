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
            'name' => 'Galeria Exemplo',
            'scientific_name' => 'Nome Científico Exemplo',
            'description' => 'Descrição da galeria de exemplo.',
            'image' => 'https://thumbs.dreamstime.com/b/etiqueta-vermelha-do-exemplo-117502755.jpg',
        ]);

        Gallery::create([
            'name' => 'Galeria Exemplo 2',
            'scientific_name' => 'Nome Científico Exemplo 2',
            'description' => 'Descrição da galeria de exemplo 2.',
            'image' => 'https://st.depositphotos.com/2935381/4189/i/450/depositphotos_41897159-stock-photo-example-concept.jpg',
        ]);
    }
}
