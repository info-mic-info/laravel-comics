<!-- {{-- Pagina 1 --}} -->
@extends('layouts.app')
@section('content')
    <!-- {{-- Contenitore e stampa di tutti i fumetti --}} -->
    <div class="bg-secondary">
        <section class="container w-75">
            <div class="album d-flex flex-wrap ">
                @foreach($products as $key => $albumcover)
                        @include('/partials/detail_card')
                @endforeach
            </div>
        </section>
            <div class="text-center">
                <button class="button_load">Load more</button>
            </div>
    </div>
        @include('partials.icon-cont')
    @endsection