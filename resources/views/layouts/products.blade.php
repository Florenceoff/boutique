@extends('boutique.app')

@section('main')
    <div class="container">
        <h1>Liste des produits</h1>
        <ul>
            @foreach($products as $product)
                <li>{{ $product->name }} - {{ $product->price }}$</li>
            @endforeach
        </ul>
    </div>
@endsection
