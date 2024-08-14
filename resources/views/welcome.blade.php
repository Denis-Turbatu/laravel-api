@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 rounded-3 text-white">
    <div class="container py-5 d-flex">
        <section class="w-50">
            <h1 class="display-5 fw-bold ms-fs-lg">
                BoolPress senza limiti
            </h1>
            <p class="col-md-8 ms-fs-sm">Tutto il necessario per creare e sviluppare un progetto a tuo piacimento.</p>
            <button class="btn btn-light text-black btn-lg ms-fs-sm" type="button">Comincia ora!</button>
        </section>
        <div class="w-50">
            <img src="{{ asset('storage/images/Projectmanagement.png') }}" alt="management">
        </div>
    </div>
</div>
@endsection
