@extends ('layout.master')

@section('content')
<div class="position-relative">
    <img src="{{ asset('images/transparentsea.png') }}" class="img-fluid" alt="" style="width: 100%;">
    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <h5 class="text-white fw-bold" style="font-size: 400%; text-shadow: 10px 10px 22px rgba(0, 0, 0, 0.3);">
        {{ __('article.title') }}
        </h5>
    </div>
</div>

<div style="margin-bottom: 135px;">
<div class="container my-5">
  <div class="row">
    @foreach($articles as $article)
    <div class="col-md-6 mb-3">
      <div class="card text-white" style="background-color:#bfd2d9;"> <!-- Warna biru ditambahkan -->
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/selokan.jpg" class="img-fluid rounded-start" alt="{{ $article->title }}">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title" style="color: rgb(0, 90, 192);">{{ $article->title }}</h5>
              <h6 class="card-text" style="color: rgb(0, 90, 192);">{{ Str::limit($article->content, 100) }}</p>
              <p class="card-text"><small style="color: rgb(0, 0, 0);">{{ __('article.category') }}: {{ $article->category }}</small></p>
              <p class="card-text">
                <small class="text-black" style="color: rgb(0, 0, 0);">
                {{ __('article.Last') }}
                    @if ($article->updated_at)
                        {{ $article->updated_at->diffForHumans() }}
                    @else
                        Not updated yet
                    @endif
                </small>
              </p>

              <!-- Button to view article -->
              <a href="{{ route('articles.show', $article->id) }}" class="btn btn-light position-absolute bottom-0 end-0 m-3">
              {{ __('article.view') }}
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <!-- Pagination links -->
  <div class="d-flex justify-content-center">
    {{ $articles->links() }}
  </div>
</div>
</div>
@endsection
