@extends('layouts.app')

@section('content')

<h1>Creer un nouveau Client</h1>
    <form action="/clients" method="POST">
        @include('includes.form')
    <button type="submit" class="btn btn-primary">Ajouter un client</button>
</form>

@endsection
