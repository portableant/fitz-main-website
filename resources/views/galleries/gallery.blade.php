@extends('layouts/layout')
@foreach($galleries['data'] as $gallery)
  @section('title', $gallery['gallery_name'])
  @if(isset($gallery['hero_image']['data']['full_url']))
  @section('hero_image', $gallery['hero_image']['data']['full_url'])
  @section('hero_image_title', $gallery['hero_image_alt_text'])
  @endif
  @section('content')
      <h2>{{ $gallery['gallery_name'] }}</h2>
      <div class="col-12 shadow-sm p-3 mx-auto mb-3 rounded">
        @markdown($gallery['gallery_description'])
      </div>
  @endsection
  @section('360')
  @if(!empty($gallery['image_360_pano']))
  <div class="container">
    <div class="col-12 shadow-sm p-3 mx-auto mb-3 rounded">
      <div id="panorama"></div>
    </div>
  </div>
  @section('360_image', $gallery['image_360_pano']['data']['full_url']))
  @endif
  @endsection
@endforeach
