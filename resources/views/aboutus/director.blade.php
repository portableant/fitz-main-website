@extends('layouts/layout')

@section('hero_image','https://fitz-cms-images.s3.eu-west-2.amazonaws.com/img_20190105_153947.jpg')
@section('hero_image_title', "The inside of our Founder's entrance")
@foreach($directors['data'] as $director)
@section('title', $director['display_name'])

  @section('content')
  <div class="col-12 shadow-sm p-3 mx-auto mb-3 rounded ">
    @if(!is_null($director['hero_image']))
    <figure class="figure">
    <img src="{{ $director['hero_image']['data']['thumbnails']['5']['url']}}"
    alt="{{$director['hero_image_alt_text']}}" class="img-fluid "
    width="400"
    />
    <figcaption class="figure-caption text-right">{{$director['hero_image_alt_text']}}</figcaption>

    </figure>
    @endif
    <p>Dates of office:
      {{ $director['date_from'] }}
      @if(!is_null($director['date_to']))
        - {{ $director['date_to'] }}
      @endif
    </p>

    @markdown($director['biography'])
  </div>
  @endsection
@endforeach