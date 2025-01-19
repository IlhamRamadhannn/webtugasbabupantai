@extends('layout.master')

@section('content')
<div class="container pt-5" style="min-height: calc(100vh - 88px);">
    <div class="row">
        <div class="col-8 offset-2">
            <h5 class="text-center text-white fw-bold mb-4" 
                style="text-shadow: 4px 4px 20px rgba(0, 0, 0, 0.3); font-size: 2.5rem; margin-top: 80px;">
                Profile
            </h5>
            <div style="background-color: rgba(0, 0, 0, 0.4); padding: 30px; border-radius: 10px;">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/Blue eyes.jpg') }}" alt="Profile Picture" class="rounded-circle" 
                         style="width: 150px; height: 150px; object-fit: cover; border: 3px solid white;">
                </div>

                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center text-white mb-3" style="font-size: 2rem;">
                        <span class="fw-bold">Nama Donatur:</span>
                        <span class="fw-bold">{{$user->name}}</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center text-white mb-3" style="font-size: 2rem;">
                        <span class="fw-bold">Jenis Kelamin:</span>
                        <span class="fw-bold">{{$user->gender}}</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center text-white mb-3" style="font-size: 2rem;">
                        <span class="fw-bold">Nomor Telepon:</span>
                        <span class="fw-bold">{{$user->phone_number}}</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center text-white mb-3" style="font-size: 2rem;">
                        <span class="fw-bold">Email:</span>
                        <span class="fw-bold">{{$user->email}}</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center text-white mb-3" style="font-size: 2rem;">
                        <span class="fw-bold">Jumlah Donasi:</span>
                        <span class="fw-bold">Rp {{$user->total_donate}}</span>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{route('profile.editpage')}}" class="btn btn-success btn-lg rounded-pill py-3 px-5">Edit Profile</a>
                </div>
                {{-- <div class="text-center">
                    <a href="{{route('logout')}}" class="btn btn-success btn-lg rounded-pill py-3 px-5" style="margin-top: 10px">logout</a>
                </div> --}}

                <div class="text-center" style="margin-top: 20px;">
                    <a class="btn btn-success btn-lg rounded-pill py-3 px-5" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 