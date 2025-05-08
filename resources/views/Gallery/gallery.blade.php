@extends('layout')

@section('content')
<div class="container mt-5 bg-dark">
    <div class="row">
        <!-- Lista de Galerias -->
        <div class="col-md-4">
            <h1 class="mb-4">Exemplos de angiospernas</h1>

            @if($galleries->isEmpty())
                <div class="alert alert-warning">Não há exemplos cadastrados.</div>
            @else
                <ul class="list-group bg-dark text-light">
                    @foreach($galleries as $gallery)
                        <li class="list-group-item">
                            <a href="{{ route('gallery.show', $gallery->id) }}" class="text-decoration-none text-dark">
                                {{ $gallery->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Detalhes da Galeria -->
        <div class="col-md-8 bg-dark text-light">
            @if($selected)
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $selected->name }}</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>Nome Científico:</strong> {{ $selected->scientific_name }}</p>
                        <p>{{ $selected->description }}</p>

                        @if($selected->image)
                            <img src="{{ $selected->image }}" alt="{{ $selected->name }}" class="img-fluid">
                        @else
                            <p>Imagem não disponível.</p>
                        @endif
                    </div>
                </div>
            @else
                <div class="alert alert-info">Selecione uma angiosperma listada para ver os detalhes.</div>
            @endif
        </div>
    </div>
</div>
@endsection