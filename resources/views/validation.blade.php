@extends('layout.pageDefault')

@section('title', 'Demande envoyée')

<link rel="stylesheet" type="text/css" href="{{ asset('css/validation.css') }}">

@section('content')
<div class="successContainer">
    <div class="content">
        <img src="https://cdn1.iconfinder.com/data/icons/positive-result/100/positive-07-512.png" alt="mail success">
        <h2>Votre demande a bien été transmise à notre équipe!</h2>
    </div>
</div>

<script>

    setTimeout(function(){ document.location.href = '/' }, 1500);

</script>
@endSection
