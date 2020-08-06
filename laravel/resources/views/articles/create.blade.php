@extends('app')

@section('title', '記事投稿')

@include('nav')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-text">
                        <form method="POST" action="{{'articles.store'}}">
                            @include('articles.form')
                            <button type="submit" class="btn blue-gradient btn-block">投稿</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection