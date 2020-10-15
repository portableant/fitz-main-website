@extends('layouts.layout')
@foreach($mindseye['data'] as $podcast)
  @section('description', $podcast['meta_description'])
  @section('title', $podcast['title'])
  @if(!is_null($podcast['hero_image']))
    @section('hero_image', $podcast['hero_image']['data']['full_url'])
    @section('hero_image_title', $podcast['hero_image_alt_text'])
  @endif

  @section('content')


    <div class="row ">
      <!-- Column one -->
      <div class="col-md-7 mb-3">
        <div class=" shadow-sm p-3 mb-3 mt-3">
          <figure class="figure">
            <img src="{{ $podcast['hero_image']['data']['full_url'] }}"
            class="img-fluid" alt="{{ $podcast['title'] }}" loading="lazy"
            width="{{ $podcast['hero_image']['width'] }}"
            height="{{ $podcast['hero_image']['height'] }}"
            />
          </figure>
          <span class="btn btn-wine m-1 p-2 share">
            <a href="{{ URL::to( $podcast['hero_image']['data']['full_url'] )  }}" target="_blank"
            download><i class="fas fa-download mr-2"></i>  Download this image</a>
          </span>

        </div>




            @foreach($adlib as $record)
              <h4>
                Collections database information
              </h4>
              <div class="shadow-sm p-3 mx-auto mb-3 mt-3 collections">

                @include('includes/elements/descriptive')

                @include('includes/elements/lifecycle')


                @include('includes/elements/identification-insta')

              </div>
            @endforeach

      </div>
      <!-- End of column one -->

      <!-- column two -->
      <div class="col-md-5 mt-3">
        <div class="col shadow-sm p-3 mx-auto mb-3">
          <div class="embed-responsive embed-responsive-21by9">
            <iframe  src="//html5-player.libsyn.com/embed/episode/id/15913487/height/90/theme/custom/thumbnail/yes/direction/forward/render-playlist/no/custom-color/87A93A/"
            height="90" width="100%" scrolling="no"  allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen class="embed-responsive-item"></iframe>
          </div>
        </div>
        <div class="col shadow-sm p-3 mx-auto mb-3">
          <img src="{{ $podcast['author_headshot']['data']['full_url'] }}" class="img-fluid"/>
        </div>

      </div>
      <!-- End of column two -->

    </div>



  @endsection
@endforeach