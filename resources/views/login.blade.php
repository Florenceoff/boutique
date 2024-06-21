@extends('boutique.app')

@section('content')
    <div>
        <h2>Connexion</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email</label>
            <input id="email" type="email" name="email" required autocomplete="email">

            <label for="password">Mot de passe</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">

            <button type="submit">Connexion</button>
        </form>

    </div>
@endsection
