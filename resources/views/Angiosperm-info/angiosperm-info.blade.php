@extends('layout')

@section('content')

@php
    // You might need to include the namespace if it's not auto-loaded
    // or just use the fully qualified name \Parsedown
    //use Parsedown;

    $markdownString = "
      # 🌸 **Características Gerais das Angiospermas** 🌸

As **angiospermas** são plantas vasculares, o que significa que possuem **xilema** e **floema** (características presentes a partir das **pteridófitas**). Elas possuem **sementes** e, ao contrário de outras categorias de plantas, o grande diferencial é a presença de **fruto** e **flores**. O **fruto** é, na verdade, a flor fecundada e tem a função de **proteção** e de **facilitar a dispersão das sementes**. 🌱

### 💡 Diferenças das Angiospermas em Relação às Gimnospermas

* As angiospermas possuem **dois tegumentos**, **fecundação dupla** e **endosperma triploide**, enquanto nas gimnospermas o endosperma é **haploide**.
* Sua fase dominante é o **esporófito**.
* A **polinização** pode ocorrer de diversas formas, devido à presença das flores. Entre os modos de polinização estão:
    * 🐝 **Insetos**
    * 🌬️ **Vento**
    * 🦋 **Animais**
    * E outros! 🌸

### 🌿 Variedade de Formas

As angiospermas podem ser encontradas em formas variadas, desde **grandes árvores** até **pequenos arbustos**. 🌳

## 🌱 **Monocotiledôneas vs. Dicotiledôneas** 🌱

As angiospermas se dividem em **monocotiledôneas** e **dicotiledôneas**. Abaixo está uma tabela comparando as principais características dessas duas categorias:

| **Característica** | **Monocotiledôneas** 🌾           | **Dicotiledôneas** 🌳                     |
| :----------------------------- | :------------------------------- | :---------------------------------------- |
| **Cotilédones na semente** | 1                                | 2                                         |
| **Tipo de raiz** | Fasciculada (raiz em 'cabelos') 🌿 | Axial (uma raiz principal forte) 🌳         |
| **Venação das folhas** | Paralela 🌾                       | Reticulada (em forma de rede) 🍃          |
| **Número de partes da flor** | Múltiplos de 3 (3, 6, 9 pétalas, etc.) 🌸 | Múltiplos de 4 ou 5 (4, 5, 10 pétalas, etc.) 🌺 |
| **Caule** | Feixes de vasos espalhados       | Feixes de vasos organizados em anel 🌿    |
| **Exemplos** | Capim, milho, orquídeas, palmeiras 🌽🌻 | Feijão, rosas, carvalho, manga 🌰🌹      |

### 🦋 Resumo:

* **Monocotiledôneas**: Apresentam 1 cotilédone, raízes fasciculadas, folhas com nervuras paralelas e flores com múltiplos de 3.
* **Dicotiledôneas**: Apresentam 2 cotilédones, raízes axiais, folhas com nervuras reticuladas e flores com múltiplos de 4 ou 5.

💚 **As Angiospermas são fascinantes e variam enormemente, desempenhando um papel crucial na biodiversidade do nosso planeta!** 🌍
    "; // Your test markdown string

    // Instantiate Parsedown inside the Blade view's PHP block
    $parsedown = new Parsedown();

    // Convert the markdown
    $htmlString = $parsedown->text($markdownString);
@endphp


<div class="container mt-5 bg-dark text-light table-bordered ">

  {!! $htmlString !!}



  <!--

  -->
</div>

@endsection
