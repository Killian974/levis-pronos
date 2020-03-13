@extends('layout.pageDefault')

@section('title', $article->title)

@push('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/article.css') }}">
@endpush

@section('content')
<div class="articleContainer">
    <div class="titleContainer">
        <h2>{{$article->title}}</h2>
        <p>{{$article->author}}, {{$article->created_date}}</p>
    </div>
    <div class="contentContainer">
    <img src="{{$article->url_img_article}}" class="articleImg"/>
    <p>{{$article->content}}</p>
    </div>
</div>
@endSection