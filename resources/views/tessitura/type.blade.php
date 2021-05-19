@extends('layouts.layout')
@php
$title = str_replace("-", " ", $facility);
$title = ucwords($title);
@endphp
@section('title', $title . ' events')
@section('hero_image','https://fitz-cms-images.s3.eu-west-2.amazonaws.com/img_20190105_153947.jpg')
@section('hero_image_title', "The inside of our Founder's entrance")
@section('collections')
<div class="container">

    <h2>Events in the next 20 days</h2>
    @php
    usort($productions, function($a, $b) {
      return strtotime($a->PerformanceDate) - strtotime($b->PerformanceDate);
    });
    @endphp
    <div class="row">
    @foreach($productions as $production)
      {{-- @dd($production) --}}

    <div class="col-md-4 mb-3">
      <div class="card h-100">
        @if($production->Facility->Id === 21)
          <a class="stretched-link" href="https://tickets.museums.cam.ac.uk/{{ $production->ProductionSeason->Id }}/{{ $production->PerformanceId }}"><img class="card-img-top" src="https://content.fitz.ms/fitz-website/assets/HT%20Press%20August%201.jpg?key=directus-medium-crop"
          alt="A stand in image for "/></a>
        @else
          <a class="stretched-link" href="https://tickets.museums.cam.ac.uk/{{ $production->ProductionSeason->Id }}/{{ $production->PerformanceId }}"><img class="card-img-top" src="https://content.fitz.ms/fitz-website/assets/img_20190105_153947.jpg?key=directus-medium-crop"
          alt="A stand in image for "/></a>
        @endif
        <div class="card-body ">
          <div class="contents-label mb-3">
            <h3>
              <a class="stretched-link" href="https://tickets.museums.cam.ac.uk/{{ $production->ProductionSeason->Id }}/{{ $production->PerformanceId }}">{{ $production->PerformanceDescription }}</a>
            </h3>
            <h5 class="lead">
              {{ Carbon\Carbon::parse($production->PerformanceDate)->format('l j F Y')  }}
            </h5>
            @if($production->PerformanceDescription === 'The Human Touch')
              <p>This includes general admission</p>
            @endif

            @if($production->PerformanceStatusDescription == 'Cancelled')
              <p class="text-danger text-uppercase">{{ $production->PerformanceStatusDescription }}</p>
            @endif
            @php
$tmp = \App\TessituraApi::getPerfPrices($production->PerformanceId);
@endphp
@isset($tmp[0]->Price)
  @if($tmp[0]->Price > 0 )
  <p class="text-info">
  @fa('pound-sign') @fa('ticket-alt')<br/>
  From £{{ $tmp[0]->Price }}
  </p>
@else
  <p  class="text-info">FREE ENTRY/ Suggested Donation</p>
@endif
@endisset

            {{-- <p>
              <span class="lead">{{ $production->Season->Description }}</span>
                {{-- <br/>
              {{ $production->ZoneMapDescription }} --}}
            {{-- </p> --}}
            {{-- <p>
              {!! ucfirst(nl2br($production->SalesNotes)) !!}
            </p> --}}
            @isset($production->Duration)
              <p>Duration: {{ $production->Duration }} minutes</p>
            @endisset
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection