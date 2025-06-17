@extends('layouts.master')

@section('comics')

    @include('partials.jumbotron')

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

        @include('partials.shop-link')
    </section>
@endsection