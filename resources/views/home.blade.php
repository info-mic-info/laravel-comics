
@extends('layouts.app')
@section('content')

    <div class="bg-secondary py-3">
        <section class="container w-75">
            <div class="album d-flex flex-wrap ">
                @foreach($products as $key => $albumcover)
                        @include('/partials/detail_card')
                @endforeach
            </div>
        </section>
            <div class="text-center">
                <button class="button_load my-5">Load more</button>
            </div>
    </div>
        @include('partials.icon-cont')
    @endsection