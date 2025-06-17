@extends('layouts.master')

@section('comics')

    <div class="jumbotron"></div>

    <section id="current-series" class="dark">
        <div class="container">
            <h2 class="section-title">CURRENT SERIES</h2>

            <div class="series-container">

                <div class="row">

                    @foreach ($comics as $comic)
                    
                    <div class="col-2 mb-5">
                        <div class="card">
                            
                            <x-comic-card :comic="$comic" />

                        </div>
                    </div>
                    
                    @endforeach

                </div>

                <div class="button d-flex justify-content-center mb-5">
                    <a class="btn btn-primary" href="#">LOAD MORE</a>
                </div>
            </div>
        </div>

        <section class="shop-link py-5">
            <div class="container d-flex justify-content-center gap-5 align-items-center">
                <div class="card-shop d-flex gap-3 align-items-center">
                    <img src="{{ Vite::asset('public/img/buy-comics-digital-comics.png') }}" alt="Digital Comics">
                    <a class="uppercase" href="#">digital comics</a>
                </div>
                <div class="card-shop d-flex gap-3 align-items-center">
                    <img src="{{ Vite::asset('public/img/buy-comics-merchandise.png') }}" alt="DC Merchandise">
                    <a class="uppercase" href="#">dc merchandise</a>
                </div>
                <div class="card-shop d-flex gap-3 align-items-center">
                    <img src="{{ Vite::asset('public/img/buy-comics-subscriptions.png') }}" alt="Subscription">
                    <a class="uppercase" href="#">subscription</a>
                </div>
                <div class="card-shop d-flex gap-3 align-items-center">
                    <img class="locator" src="{{ Vite::asset('public/img/buy-comics-shop-locator.png') }}" alt="Comic Shop Locator">
                    <a class="uppercase" href="#">comic shop locator</a>
                </div>
                <div class="card-shop d-flex gap-3 align-items-center">
                    <img src="{{ Vite::asset('public/img/buy-dc-power-visa.svg') }}" alt="DC Power Visa">
                    <a class="uppercase" href="#">dc power visa</a>
                </div>
            </div>
        </section>
    </section>
@endsection