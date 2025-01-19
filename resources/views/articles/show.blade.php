@extends('layout.master')

@section('content')
<div class="" style="background: linear-gradient(to bottom, rgb(65, 128, 117), #76AADB); padding: 40px;">
    <div style="margin-top: 135px;">
        <div class="container my-15 pt-5 pb-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fw-bold text-center" style="color: rgb(255, 255, 255); margin-top: 80px;"> {{$article->title}}</h1>
                    <p class="fw-bold text-center" style="color: rgb(255, 255, 255);"> Oleh: {{$article->author}}</p>
                    <br> 
                    <p class="fw-bold text-center" style="color: rgb(255, 255, 255);">Kategori: {{$article->category}}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-9 mx-auto bg-white text-black p-4 rounded">
                    {{$article->content}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

