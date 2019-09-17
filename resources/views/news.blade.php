@extends('layout')

@section('title', 'News sharing with ZERO price')

<link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">
<script defer src="{{ asset('/js/news.js') }}"></script>

@section('content')

    <h1 class="news_title">Make <span class="orange">donations</span> with <span class="orange">ZERO</span> price</h1>

    <div class="news_subtitle">We believe Love can be the only way to save the world.<br>
    If you want to save the earth without money.<br>
    If you sympathize with someone or something <br>when you see a miserable news, you want help them.<br>
    Just <span class="red">share</span> your feelings or news.<br>
    Just do it whatever you can do right now!</div>

    <div class="timeline_section">
        <div class="box">
            @foreach ($news as $value)
            <ul>
                <li class="boxa">
                    <a class="twitter-timeline" data-theme="light" data-width="400" data-height="500"  data-link-color="#37654E" href="{{ $value->url }}?ref_src=twsrc%5Etfw">Tweets by {{ $value->title }}</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </li>
            </ul>
            @endforeach
        </div>
    </div>

@endsection