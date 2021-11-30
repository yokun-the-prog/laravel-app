@extends('guest/layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Spots</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right">検索する</a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>


            @include('guest/spots.table')


    </div>

@endsection

