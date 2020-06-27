@extends('layouts.master');

@section('content')

<h1>Clients</h1>
<p>
    <ul>
        @foreach ($clients as $client)
            <li>
            {{ $client->name }} <em class="text-muted"> {{ $client->email }}</em>
            </li>    
        @endforeach
    </ul>
</p>
<hr>

<form action="/clients" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control @error('pseudo') is-invalid @enderror" name="pseudo" placeholder="Rentrer votre pseudo">
        @error('pseudo')
            <div class="alert alert-danger">{{ $errors->first('pseudo') }}</div>
        @enderror
    </div>

    <div class="form-group">
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Rentrer votre email">
        @error('email')
            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Ajouter un client</button>
</form>
    
@endsection