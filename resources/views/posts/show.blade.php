@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <p class="edit">[<a href="/posts/{{$post->id}}/edit">edit</a>]</p>
        <a href ="/categories/{{$post->category->id}}">{{$post->category->name}}</a>
        <h1 class="title">
            {{$post->title}}
        </h1>
        <div class="content">
            <div class="content_post">
                <h3>本文</h3>
                <a href = "">{{$post->category->name}}</a>
                <p>{{$post->body}}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>

@endsection