@extends('layouts.app')
@section('content')
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            @forelse ($vits as $vit)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <div class="font-semibold"> {{ $vit->user ? $vit->user->name : 'Anonymous' }}</div>
                        <div class="mt-1">{{ $vit->message }}</div>
                        <div class="text-sm text-gray-500 mt-2">
                            {{ $vit->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No vits yet. Be the first to vit!</p>
        @endforelse
        </div>
    </div>
@endsection