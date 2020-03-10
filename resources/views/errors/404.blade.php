@extends('layout.pageDefault')

@section('title', 'Page Introuvable')
@section('content')
    ERREUR 404
    <h2>{{ $exception->getMessage() }}</h2>
@endsection
