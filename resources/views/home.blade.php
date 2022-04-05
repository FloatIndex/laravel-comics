@extends('layouts.standard')

@section('title', 'DC - Home page')

@section('content')
    <section id="home">
        <div class="container">

            <div class="panel-display">
                <div class="panel small">
                    <img src="{{ asset('img/home-latest-news.jpg') }}">
                    <h2>Latest News, Updates and Everything The Batman</h2>
                </div>

                <div class="panel large">
                    <img src="{{ asset('img/home-round-robin.jpg') }}">
                    <h2>DC Round Robin 2022 is Underway! Cast Your Votes Now at DC Community!</h2>
                </div>

                <div class="panel large">
                    <img src="{{ asset('img/home-gear-batman.jpg') }}">
                    <h2>Gear Up For The Batman with Exclusives from DC Shop</h2>
                </div>

                <div class="panel small">
                    <img src="{{ asset('img/home-select-comics.jpg') }}">
                    <h2>Read Select Comics for FREE With Registration</h2>
                </div>
            </div>

            <div class="community">
                <h2 class="title">community</h2>
                <div class="article">
                    <h3 class="article-title">what's new this week on dcui</h3>
                    <span class="article-date">mar 15</span>
                    <p class="article-preview">Looking to pile up your pull list? Click no further!</p>
                </div>
                <div class="article">
                    <h3 class="article-title">community events highlights</h3>
                    <span class="article-date">dec 17</span>
                    <p class="article-preview">Check out all the events occurring in the community this week! </p>
                </div>
                <div class="article">
                    <h3 class="article-title">the dc book club: batman: ego</h3>
                    <span class="article-date">feb 14</span>
                    <p class="article-preview">Join the DC Book Club -- This month we're reading Batman: Ego</p>
                </div>
            </div>
            
        </div>
  </section>
@endsection