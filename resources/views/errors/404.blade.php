@extends('layout.pageDefault')

@section('title', 'Page Introuvable')
@section('content')
    ERREUR 404
    @if($exeption ?? '')
{{--    <h2>{{ $exception->getMessage() }}</h2>--}}
    @endif
@endsection
