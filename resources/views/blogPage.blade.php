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
        @foreach($articles as $article)
            <div class="item">
            <a href="/blog/article/{{{$article->id}}}">
                    <div class="card">
                        <div class="card-body">
                        <h2 class="card-title">{{ $article->title }}</h2>
                        <p class="dateAuthor">{{ $article->author }}</p>
                        <p class="card-text articleText">{{ $article->content }}</p>
                        <a href="#" class="card-link">Lire l'article</a>
                        <p class="dateAuthor">{{ $article->created_date }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

<script>
</script>
@endSection