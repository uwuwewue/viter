@extends('layouts.app')
@section('content')
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            @foreach ($vits as $vit)
                <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <div class="font-semibold">{{ $vit['author'] }}</div>
                        <div class="mt-1">{{ $vit['message'] }}</div>
                        <div class="text-sm text-gray-500 mt-2">{{ $vit['time'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection