@extends('layout.app')

@section('main')

<h1>Liste de produits</h1>


<ul>
    @foreach($products as $product)
        <li>{{ $product->name }} - {{ $product->description }} - ${{ $product->price }}</li>
    @endforeach
</ul>

@endsection
