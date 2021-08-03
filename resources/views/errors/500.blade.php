@extends('layouts/error')
@section('title', 'Page not found')
@section('hero_image','https://fitz-cms-images.s3.eu-west-2.amazonaws.com/cupidpsychelarge.jpg')
@section('hero_image_title', 'Cupid and Psyche - del Sallaio')
@section('content')

<div class="col-12 shadow-sm p-3 mx-auto mb-3 mt-3">
  <div class="row">
  <div class="col-md-6">
    <figure class="figure">
      <img class="img-fluid" src="https://fitz-cms-images.s3.eu-west-2.amazonaws.com/searle_cat.jpg" />
    </figure>
  </div>
  <div class="col-md-6">
      <p>
        Sorry, we can’t seem to find what you’re looking for. You've landed on a URL
        that doesn't seem to exist.
      </p>
      <p>
        We have just changed our website (3/8/2021) and are reorganising our information, so
        things you may want to see could have been moved.
      </p>
      <p>
        Please do try using our search engine and see if that can find what you
        are lookimng for.
      </p>
  </div>
  </div>
</div>
@endsection
