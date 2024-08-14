@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="ms-alert text-emerald bg-emerald d-flex justify-content-center align-items-center" role="alert">
                    <section class="w-50">
                        <h2>{{ __('Dashboard') }}</h2>
                        <p>{{ __('Hai effettuato il login!') }} {{ Auth::user()->name }}</p>
                    </section>
                    <div class="w-50 text-end fs-2">
                        <i class="fa-regular fa-circle-check"></i>
                    </div>
                </div>  

            </div>
        </div>
    </div>
@endsection
