@extends('layouts.ui')

@section('title', 'Home')


@section('css')
@endsection

@section('content')
    <div class="content-line">
        <x-frontend.card title="Movies">
            <div class="row">
                @foreach ([1, 2, 3, 4, 5, 6] as $item)
                    <div class="col-2">
                        <x-frontend.video name="Test Movie" year="2024" src="{{ asset('images/poster.jpg') }}" />
                    </div>
                @endforeach
            </div>
        </x-frontend.card>

        <hr class="line-bar" />

        <x-frontend.card title="TV Series">
            <div class="row">
                @foreach ([1, 2, 3, 4, 5, 6] as $item)
                    <div class="col-2">
                        <x-frontend.video name="Test Series" year="2022" src="{{ asset('images/poster2.jpg') }}" />
                    </div>
                @endforeach
            </div>
        </x-frontend.card>

        <hr class="line-bar" />
    </div>
@endsection


@section('js')
@endsection
