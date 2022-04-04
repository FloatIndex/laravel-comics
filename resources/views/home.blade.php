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
                
            </div>
            
        </div>
  </section>
@endsection