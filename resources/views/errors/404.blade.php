@extends('layout.pageDefault')

@section('title', 'Page Introuvable')
@section('content')
    VOUS FAITE ERREUR
    <h2>{{ $exception->getMessage() }}</h2>
@endsection
