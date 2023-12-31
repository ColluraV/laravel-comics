
@extends('layouts.public')

@section('content')
    <div class=" text-center">

        {{-- @include('partials.cardsContainer') --}}
        <div class=" darkBanner ">

            <div class="text-center relative">
                <h3 id="title" class="absolute">CURRENT SERIES</h3>

                <div id="cards_container" class="row row-cols-6 gy-3 my-5 flex-wrap">

                    {{-- ////////////// cards in ciclo for //////////////// --}}
                    @foreach ($comicsList as $cardComics)
                        <div class="col">

                            <div class="card border-0 rounded-0 h-100">
                                <img class="relative card-img-top" src={{ $cardComics['thumb'] }}
                                    alt="" />{{-- //////immagine////// --}}

                                <div class="card-body text-white bg-dark"> {{-- //////nome////// --}}
                                    {{ $cardComics['series'] }}
                                </div>

                                <div class="overlay"> {{-- //////info in hover////// --}}
                                    <div class="absolute top hidden">Tipologia: <br>{{ $cardComics['type'] }}</div>
                                    <div class="absolute bottom hidden">Prezzo: {{ $cardComics['price'] }}</div>
                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>
            </div>


        </div>
    @endsection
