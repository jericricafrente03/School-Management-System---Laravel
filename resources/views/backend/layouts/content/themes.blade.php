@extends('backend.app')

@section('title')
  Themes
@endsection

@push('css')
    <link href="{{ asset('css/themes.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="card">
        <div class="card-header">
          <h2 class="title">Themes</h2>
          <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</span>
        </div>
        <div class="card-body">
          <div class="row">
              <ul id="projects">
                 @foreach($theme as $themes)
                      <li id="p1" class="img-fluid flipper">
                        <div class="front"><img src="{{ Voyager::image( $themes->picture ) }}" alt="">
                        </div>
                        <div class="back">
                              <h2>{{ $themes->title }}</h2>
                              <hr class="mb-4">
                        <p class="author">by <a href="http://dribbble.com/brandclay">Jeric Ricafrente</a></p>
                          <p>{{ $themes->details }}</p>
                        <p class="date">Posted : {{ $themes->created_at }}</p>
                        </div>
                      </li>
                  @endforeach
              </ul>
          </div>
        </div>

         {{$theme->links()}} 
      </div>
    </div>
  </div>
</div>




@endsection


@push('js')
    <script type="text/javascript" src="{{ asset('js/themes.js') }}"></script>
@endpush


