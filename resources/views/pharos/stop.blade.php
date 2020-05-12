@extends('layouts/layout')

@foreach($stop['data'] as $record)
  @section('keywords', $record['meta_keywords'])
  @section('description', $record['meta_description'])
  @section('title', 'Audio guide: ' . $record['title'])
  @section('hero_image', $record['hero_image']['data']['full_url'])
  @section('hero_image_title', $record['hero_image_alt_text'])


  @section('content')

  <h2>Audio guide stop: {{ $record['stop_number'] }}</h2>

  <div class="col-12 shadow-sm p-3 mx-auto mb-3 rounded">
    <div class="shadow-sm p-3 mx-auto mb-3 rounded">
      <div class="plyr">
        <div class="embed-responsive audio-player">
          <audio id="player" controls class="embed-responsive-item">
            <source src="{{ $record['associated_audio_file'][0]['directus_files_id']['data']['full_url'] }}" type="audio/aac">
            </audio>
          </div>
        </div>
      </div>

    </div>

  <h3>Crowdsourced transcription of the audio file</h3>
  <div class="col-12 shadow-sm p-3 mx-auto mb-3 rounded">
    <figure class="figure float-right p-3">
      <img src="{{ $record['hero_image']['data']['thumbnails']['7']['url']}}"
      alt="{{ $record['hero_image_alt_text'] }}" class="img-fluid"
      loading="lazy"
      height="{{ $record['hero_image']['data']['thumbnails']['7']['height'] }}"
      width="{{ $record['hero_image']['data']['thumbnails']['7']['width'] }}"
      />
      <figcaption class="figure-caption text-right">{{$record['hero_image_alt_text']}}</figcaption>
      <span class="btn btn-wine m-1 p-2 share">
        <a href="{{ URL::to( $record['hero_image']['data']['full_url'] ) }}"
         download><i class="fas fa-download mr-2"></i>  Download image</a>
      </span>
      <span class="btn btn-dark p-2">
      <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons Licence" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a>
      </span>
    </figure>
    @markdown($record['transcription'])
  </div>
  <h3>Co-production of this resource</h3>
  <div class="col-12 shadow-sm p-3 mx-auto mb-3 rounded">
    <img src="https://content.fitz.ms/fitz-website/assets/MP_SQUARE_notype.png?key=directus-medium-crop" class="float-right img-fluid p-2" alt="The MicroPasts logo" width="100" height="100"/>
    <p>
      The transcription of the audio file for this stop was enabled by the crowd
      sourcing platform MicroPasts. The below generously gave their time to transcribe the
      file.
    </p>
    @markdown($record['transcribers'])
  </div>
  @endsection




  @if(!empty($record['associated_pharos_object']))
  @section('pharos-pages')
  <div class="container">
    <h3>Associated content</h3>
    <div class="row">
      @foreach($record['associated_pharos_object'] as $pharosassoc)
      <div class="col-md-4 mb-3">
        <div class="card card-body h-100">
          @if(!is_null($pharosassoc['pharos_id']['image']))
            <img class="img-fluid" src="{{ $pharosassoc['pharos_id']['image']['data']['thumbnails'][4]['url']}}"
            alt="{{ $pharosassoc['pharos_id']['image_alt_text'] }}"
            loading="lazy"/>
          @else
            <img src="https://fitz-cms-images.s3.eu-west-2.amazonaws.com/fvlogo.jpg" class="rounded img-fluid"  />
          @endif
          <div class="container h-100">
            <div class="contents-label mb-3">
              <h3><a href="/objects-and-artworks/pharos/{{ $pharosassoc['pharos_id']['slug']}}">{{ $pharosassoc['pharos_id']['title']}}</a></h3>
              <p class="card-text">{{ substr(strip_tags(htmlspecialchars_decode($pharosassoc['pharos_id']['description'])),0,200) }}...</p>
            </div>
          </div>
          <a href="/objects-and-artworks/pharos/{{ $pharosassoc['pharos_id']['slug']}}" class="btn btn-dark">Read more</a>
        </div>

      </div>
      @endforeach
    </div>
  </div>
  @endsection
  @endif

  @if(!empty($records))
  @section('mlt')
  <div class="container">
    <h3>Other audio guide stops you might like</h3>
    <div class="row">
      @foreach($records as $record)
      <div class="col-md-4 mb-3">
        <div class="card card-body h-100">
          @if(!is_null($record['searchImage']))
            <img class="img-fluid" src="{{ $record['searchImage'][0]}}"
            alt="Highlight image for {{ $record['title'][0] }}" loading="lazy"/>
          @endif
          <div class="container h-100">
            <div class="contents-label mb-3">
              <h3>
                <a href="/objects-and-artworks/audioguide/{{ $record['slug'][0] }}">{{ $record['title'][0] }}</a>
              </h3>
              <p class="card-text">
                {{ substr(strip_tags(htmlspecialchars_decode($record['description'][0])),0,200) }}...
              </p>
            </div>
          </div>
          <a href="/objects-and-artworks/audioguide/{{ $record['slug'][0]}}" class="btn btn-dark">Read more</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  @endsection
  @endif
@endforeach
