@extends('layouts.standard')

@section('title', 'DC - ' . $comic["title"])

@section('specificCss')
    <link rel="stylesheet" href="{{asset('css/comic-shopping.css')}}">
@endsection

@section('content')
    <section id="comic-detail">

        <div class="clear-wrap">
            <div class="container">

                <div class="comic-thumb">
                    <span>comic book</span>
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <span class="bottom">view gallery</span>
                </div>

                {{-- comic preview --}}
                <div class="comic-preview">

                    <h2 class="comic-title">{{$comic['title']}}</h2>
        
                    <div class="bar">
                        <div class="bar-left">
                            <span>U.S.Price: <span class="price">{{$comic['price']}}</span></span>
                            <span>AVAILABLE</span>
                        </div>
                        <div class="bar-right">
                            <a href="#"><span>Check Availability</span></a>
                        </div>
                    </div>
        
                    <p class="description">{{$comic['description']}}</p>
                </div>
                {{-- fine comic preview --}}
                
                {{-- adv --}}
                <div class="adv">
                    <a href="#">
                        <img src="{{asset('img/adv.jpg')}}" alt="advertising">
                    </a>
                    <span>advertisement</span>
                </div>
                {{-- inizio adv --}}

            </div>
        </div>
        {{-- fine comic preview --}}



        {{-- comic specs --}}
        <div class="comic-specs">
            <div class="container">

                {{-- talent column --}}
                <div class="column">

                    <h2 class="specs-title">Talent</h2>

                    {{-- art row --}}
                    <div class="row">
                        <div class="left-col">
                            <span>Art by:</span>
                        </div>

                        <div class="right-col">
                            <ul>
                                @foreach ($comic['artists'] as $artist)
                                    <li>{{$artist}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    {{-- fine art row --}}

                    {{-- written row --}}
                    <div class="row">
                        <div class="left-col">
                            <span>Written by:</span>
                        </div>

                        <div class="right-col">
                            <ul>
                                @foreach ($comic['writers'] as $writer)
                                    <li>{{$writer}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    {{-- fine written row --}}
                </div>
                {{-- fine talent column --}}


                {{-- specs column --}}
                <div class="column">

                    <h2 class="specs-title">Specs</h2>

                    {{-- series row --}}
                    <div class="row">
                        <div class="left-col">
                            <span>Series:</span>
                        </div>

                        <div class="right-col">
                            <span class="series">{{$comic['series']}}</span>
                        </div>
                    </div>
                    {{-- fine series row --}}

                    {{-- usprice row --}}
                    <div class="row">
                        <div class="left-col">
                            <span>U.S. Price:</span>
                        </div>

                        <div class="right-col">
                            <span>{{$comic['price']}}</span>
                        </div>
                    </div>
                    {{-- fine usprice row --}}

                    {{-- onsaledate row --}}
                    <div class="row">
                        <div class="left-col">
                            <span>On Sale Date:</span>
                        </div>

                        <div class="right-col">
                            <span>{{$comic['sale_date']}}</span>
                        </div>
                    </div>
                    {{-- fine onsaledate row --}}
                </div>
                {{-- fine specs column --}}


            </div>
        </div>
        {{-- fine comic specs --}}
    </section>
@endsection