@extends('layout.master')

@section('content')
<div class="container pt-100" style="min-height: calc(107vh - 30px);">
    <div class="row justify-content-center" style="padding-top: 100px;">
        <div class="col-md-6">
            <h5 class="text-center text-white fw-bold mb-4" style="text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.3); font-size: 1.5rem; margin-top: 20px;">
                Edit Profile
            </h5>
            <div class="card bg-dark text-white" style="border-radius: 10px; padding: 30px;">
                <form method="post" action="{{ route('profile.update', ['profile' => $user->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama Donatur</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan nama Anda" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="gender" name="gender">
                            <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>male</option>
                            <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="No" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="No" name="phone" placeholder="Masukkan nomor telepon Anda" value="{{old('phone_number')}}">
                    </div>
                    
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-lg rounded-pill py-3 px-5">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
