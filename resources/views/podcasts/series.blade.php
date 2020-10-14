@extends('layouts.layout')
@section('hero_image', 'https://content.fitz.ms/fitz-website/assets/SpringtimeWEB.jpg?key=directus-large-crop')
@section('hero_image_title', 'Springtime by Claude Monet')
@section('description', 'Culture in quarantine - in my mind\'s eye')
@section('content')
  <div class="row">
    @if(!empty($podcasts['data']))
    @foreach($podcasts['data'] as $podcast)

      @php
      $title = $podcast['podcast_series'][0]['podcast_series_id']['title'];
      @endphp
      @section('title', $title )

      <div class="col-md-4 mb-3">
        <div class="card h-100">
            <a href="{{ route('podcasts.episode', $podcast['slug']) }}"><img class="img-fluid" src="{{ $podcast['hero_image']['data']['thumbnails'][4]['url']}}"
            alt="{{ $podcast['hero_image_alt_tag'] }}"
            width="{{ $podcast['hero_image']['data']['thumbnails'][4]['width'] }}"
            height="{{ $podcast['hero_image']['data']['thumbnails'][4]['height'] }}"
            loading="lazy"/></a>
            <div class="card-body h-100">
              <div class="contents-label mb-3">
                <h3>
                  <a href="{{ route('podcasts.episode', $podcast['slug']) }}">{{ $podcast['title'] }}</a>
                </h3>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @endif
    </div>
  @endsection
