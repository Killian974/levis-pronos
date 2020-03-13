@extends('layout.pageDefault')

@push('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/404.css') }}">
@endpush

@section('title', 'Page Introuvable')
@section('content')
<div class="errorContainer">
    <div class="content">
        <h1>404</h1>
        <h3>Page Introuvable, Rechargez le site ou verifier que vous possédez les droits correspondant.</h3>
    </div>
</div>
    @if($exeption ?? '')
{{--    <h2>{{ $exception->getMessage() }}</h2>--}}
    @endif
@endsection
