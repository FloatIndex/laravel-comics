@extends('layouts.standard')

@section('title', 'DC - Comics')

@section('content')
    <section id="comicsList">
        <div class="container">

            <div id="section-title">
                current-series
            </div>

            @foreach ($comics as $comic)
                <div class="comic">
                    <img src="{{$comic['thumb']}}" :alt="{{$comic['series']}}">
                    <p>{{$comic['series']}}</p>
                </div>
            @endforeach

            <button>load more</button>
        </div>
  </section>
@endsection