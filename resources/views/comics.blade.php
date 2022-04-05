@extends('layouts.standard')

@section('title', 'DC - Comics')

@section('content')

    <section id="comicsList">
        <div class="container">

            <div id="section-title">
                current-series
            </div>

            @foreach ($comics as $key => $comic)
                <div class="comic">
                    <a href="/comic/{{$key}}">
                        <img src="{{$comic['thumb']}}" :alt="{{$comic['series']}}">
                        <p>{{$comic['series']}}</p>
                    </a>
                </div>
            @endforeach

            <button>load more</button>
        </div>
  </section>
@endsection
