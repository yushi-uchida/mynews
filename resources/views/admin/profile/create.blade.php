<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Myプロフィール</title>
    </head>
     <body>
        <h1>プロフィール</h1>
    </body>
</html>
{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

//PHP/Laravel 11 課題４
{{-- profile.blade.phpの@yield('title')に'myプロフィール作成'を埋め込む --}}
@section('title', 'myプロフィール作成')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>myプロフィール作成</h2>
            </div>
        </div>
    </div>
@endsection
