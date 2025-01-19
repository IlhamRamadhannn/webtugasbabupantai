@extends('layout.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
             <h1 class="fw-bold text-center" style="color: rgb(28, 29, 32); margin-top: 80px;">{{$article->title}}</h1>
            <p class="fw-bold text-center" style="color: rgb(71, 80, 43);">{{$article->category}}</p> 
            
            
        </div>
    </div>

    <div class="row">
        <div class="col-md-9 mx-auto bg-dark text-white p-4 rounded" style="background-color: rgba(0, 0, 0, 0.8);">
            {{-- {{$article->content}} --}}
            <!-- <h3 class="mt-3" style="color: rgb(0, 4, 255);">Pendahuluan</h3>
           
            <ol class="fw-bold" style="text-align: justify;">

            </ol>

            <h3 class="mt-5" style="color: rgb(0, 4, 255);">Pembahasan</h3>
          
            <h3 class="mt-5" style="color: rgb(0, 4, 255);">Kajian Lingkungan Hidup Strategis</h3>
           
            <h3 class="mt-5" style="color: rgb(0, 4, 255);">Tantangan Wilayah Laut dan Pesisir</h3> -->
            comment
        </div>
    </div>

    <div class="row">
        COMMENT
    </div>
</div>



@endsection 
