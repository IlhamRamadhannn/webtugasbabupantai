@extends('layout.master')

@section('content')
<div class="position-relative" style="margin-bottom: 0px;">
    <img src="{{ asset('images/sea.png') }}" class="img-fluid" alt="" style="filter:brightness(75%); width: 100%;">
    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <h5 class="text-white fw-bold" style="font-size: 500%; text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.3);">
        {{ __('home.title') }}
        </h5>
        <a type="button" href="{{ route('homepage') }}#act" class="btn btn-light" style="font-weight: bold; padding: 12px; margin-top:40px">{{ __('home.action_button') }}</a>
    </div>
</div>

<div class="container">

</div>


<div id="act" class="" style="background-color:  #1F3039">
<div class="container">
            <div class="row">
            <div class="col-md-4 p-5 text-center">
                    <div class="card">
                        <!-- <div class="card-title mt-2">
                            <div class="rounded-circle mx-auto" style="width:150px; height:150px; background:url({{ asset('images/kurakura.png') }}) center no-repeat ; background-size :cover;" ></div>
                        </div> -->
                        <div class="card-body">
                            <h4 class="fw-bold mb-0" style="color:rgb(0, 90, 192);">{{ __('home.card1') }}</h4>
                            <small class="text-muted">&horbar; {{ __('home.carddetail') }}</small>
                            <p class="text-italic fw-light my-2">
                                <a type="button" href="#" class="btn btn-light" style=" color:rgb(0, 90, 192); font-weight: bold; padding: 12px; margin-top:40px ">{{ __('home.card1button') }}</a>
                            </p>
                        </div>
                    </div>
                    
                </div>


                <div class="col-md-4 p-5 text-center">
                    <div class="card">
                        <!-- <div class="card-title mt-2">
                            <div class="rounded-circle mx-auto" style="width:150px; height:150px; background:url({{ asset('images/kurakura.png') }}) center no-repeat ; background-size :cover;" ></div>
                        </div> -->
                        <div class="card-body">
                            <h4 class="fw-bold mb-0" style="color:rgb(0, 90, 192);">{{ __('home.card2') }}</h4>
                            <small class="text-muted">&horbar; {{ __('home.carddetail') }}</small>
                            <p class="text-italic fw-light my-2">
                                <a type="button" href="#" class="btn btn-light" style=" color:rgb(0, 90, 192); font-weight: bold; padding: 12px; margin-top:40px ">{{ __('home.card2button') }}</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-5 text-center">
                    <div class="card">
                        <!-- <div class="card-title mt-2">
                            <div class="rounded-circle mx-auto" style="width:150px; height:150px; background:url({{ asset('images/kurakura.png') }}) center no-repeat ; background-size :cover;" ></div>
                        </div> -->
                        <div class="card-body">
                            <h4 class="fw-bold mb-0" style="color:rgb(0, 90, 192);">{{ __('home.card3') }}</h4>
                            <small class="text-muted">&horbar; {{ __('home.carddetail') }}</small>
                            <p class="text-italic fw-light my-2">
                                <a type="button" href="#" class="btn btn-light" style=" color:rgb(0, 90, 192); font-weight: bold; padding: 12px; margin-top:40px ">{{ __('home.card3button') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- /.row --></div>
        <div class="" style="background-color:#5185A6; ">
        <div class="container my-5 py-5">
            <div class="row align-items-center text-center text-md-start">
             <div class="col-md-6">
            <h2 class="heading" style="color:white; font-weight: bold;">{{ __('home.oceandanger') }}</h2>
            <p class="lead" style="color:white;">
                Babu Pantai Helps in publishing and graphic design, 
                Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document 
                or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
            </p>
            </div>
            <div class="col-md-6">
            <img class="rounded mx-auto d-block img-fluid" src="{{ asset('images/pollutedbeach.jpg') }}" alt="Polluted Beach">
        </div>
        </div>
    </div>
</div>
<div id="about-us" class="" style="background: linear-gradient(to bottom, rgb(65, 128, 117), rgb(44, 63, 82)); padding: 40px;">
    <div class="container my-5 py-5">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-md-6 order-md-2"> <!-- Tulisan di kanan -->
                <h2 class="heading" style="color:white; font-weight: bold;">{{ __('home.aboutus') }}</h2>
                <p class="lead" style="color:white;">
                    Kami adalah Babu Pantai, sebuah gerakan yang didedikasikan untuk melindungi keindahan laut Indonesia. Berawal dari keprihatinan terhadap meningkatnya pencemaran sampah di pantai dan laut, kami hadir sebagai bagian dari solusi.

                    Melalui aksi peduli lingkungan, kami mengorganisir kegiatan bersih-bersih pantai yang melibatkan berbagai elemen masyarakat, mulai dari komunitas lokal hingga donatur yang peduli terhadap keberlanjutan ekosistem laut. Setiap donasi yang kami terima digunakan sepenuhnya untuk mendukung aksi nyata di lapangan, seperti pengadaan alat pembersih, edukasi lingkungan, hingga kampanye kesadaran publik.
                </p>
            </div>
            <div class="col-md-6 order-md-1"> <!-- Gambar di kiri -->
                <img class="rounded mx-auto d-block img-fluid" src="{{ asset('images/bersih.jpg') }}" alt="Cleaning Beach">
            </div>
        </div>
    </div>
</div>

              

<!-- <div class="container pt-100">
    <div class="row" style="padding-top: 20px; text-align: left;">
        <div class="col-12">
            <div style="backdrop-filter: blur(5px); background-color: rgba(0, 0, 0, 0.4); padding: 40px; border-radius: 10px;">
                <p style="font-size: 17.5px; text-align: justify; color: white; text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.3);">
                    Selamat datang di Babu Pantai!
                    <br><br>
                    Kami adalah platform donasi yang bertujuan untuk menjaga keindahan pantai-pantai Indonesia dari ancaman sampah dan polusi. Dengan bergotong-royong, kita dapat melindungi ekosistem laut, mendukung komunitas lokal, dan mewariskan pantai-pantai bersih untuk generasi mendatang.
                    <br><br>
                    Misi Kami:
                    <br>🌊 Mengurangi sampah di pantai melalui aksi bersih-bersih rutin.
                    <br>🌱 Memberdayakan masyarakat setempat dalam menjaga lingkungan mereka.
                    <br>💙 Meningkatkan kesadaran akan pentingnya menjaga kebersihan laut dan pesisir.
                    <br><br>
                    Setiap kontribusi Anda, besar atau kecil, akan berdampak besar dalam memulihkan keindahan alam Indonesia. Mari bergerak bersama untuk pantai yang lebih bersih dan kehidupan laut yang lebih sehat!
                    <br><br>
                    “Karena setiap butir pasir yang bersih adalah langkah menuju masa depan yang lebih baik.”
                </p>
            </div>
        </div>
    </div> -->
    
    <div class="" style="background-color: rgb(255, 255, 255); padding: 40px; border-radius: 10px;">
    <div class="container my-5 py-5">
    <div class="row mt-5" >
        <div class="col-2" ></div>
        <div class="col-4 text-center">
            <!-- Gambar kurakura yang lebih besar dan memaksa ukuran -->
            <img src="{{ asset('images/kurakura.png') }}" alt="" class="d-block mx-auto" style="width: 350px; height: auto;">
        </div>
        <div class="col-4 text-right" style="backdrop-filter: blur(5px); background-color: rgba(0, 0, 0, 0.4); padding: 40px; border-radius: 10px;">
            <h2 class="text-white">Bersama Kita Bisa Menyelamatkan Laut dan Makhluk Hidupnya!</h2>
            <p class="text-white">Setiap sampah plastik yang dibuang ke laut merusak ekosistem dan membahayakan hewan-hewan laut. Dengan donasi Anda, kita dapat membersihkan pantai dan menyelamatkan kehidupan laut.</p>
            <div class="row mt-3">
            <div class="col-4"></div>
        <div class="col-2 text-center">
            <a type="button" href="/donate" class="btn btn-success btn-lg rounded-pill py-3 px-5 mt-4 l-2">{{ __('home.donate_button') }}</a>
        </div>
            </div>
        </div> 
    </div>
       </div> 
    </div>
@endsection
