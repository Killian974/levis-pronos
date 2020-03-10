@extends('layout.pageDefault')

@section('title', 'Blog')

@push('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/blog.css') }}">
@endpush

@section('content')
<div class="blogContainer">
    <div class="titleContainer">
        <h1>Le blog de Levis</h1>
        <p>Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus.</p>
    </div>
    <div class="articleContainer">
        <div class="item">
            <a href="#">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Titre article</h2>
                        <p class="card-text articleText">Contenu de l'article.Contenu de l'article.Contenu de l'article.Contenu de l'article.Contenu de l'article.Contenu de l'article.Contenu de l'article.Contenu de l'article.Contenu de l'article.Contenu de l'article.Contenu de l'article.</p>
                        <a href="#" class="card-link">Lire l'article</a>
                        <p class="date">xx/xx/xxx</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<script>
</script>
@endSection