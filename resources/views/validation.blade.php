@extends('layout.pageDefault')

@section('title', 'success')

<link rel="stylesheet" type="text/css" href="{{ asset('css/validation.css') }}">

@section('content')
<div class="successContainer">
    <div class="content">
        <img src="https://cdn1.iconfinder.com/data/icons/positive-result/100/positive-07-512.png" alt="mail success">
        <h2>Votre demande a bien été transmise à notre équipe!</h2>
    </div>
</div>
@endSection