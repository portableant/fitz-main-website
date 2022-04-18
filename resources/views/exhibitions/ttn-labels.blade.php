@extends('layouts.exhibitions')
@section('keywords', 'labels,cases')
@section('hero_image', ('https://fitz-cms-images.s3.eu-west-2.amazonaws.com/johann-jakob-frey-cloud-study-3-_press-1000x450.jpg'))
@section('title', 'True To Nature. Open-air Painting 1780-1870')
@section('content')
    <a href="{{ route('exhibition.ttn.mapped') }}" class="btn btn-info d-block my-3 p-2">View a map of locations depicted in these images</a>

    <div class="row">
        @foreach($labels as $label)
         <x-ttn-labels :labels="$label"/>
        @endforeach
    </div>
@endsection