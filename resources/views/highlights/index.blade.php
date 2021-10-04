@extends('layouts.layout')
@section('title','Highlights from our collection')
@section('description', 'A collection of objects from the collection of the Fitzwilliam Museum')
@section('keywords', 'museum,highlights,collection,objects')
@section('hero_image',env('CONTENT_STORE') . 'img_20190105_153947.jpg')
@section('hero_image_title', "The inside of our Founder's entrance")

@section('content')
<div class="row">
  @foreach($pharos['data'] as $record)
    <x-image-card
    :params="[$record['slug']]"
    :route="'highlight'"
    :image="$record['image']"
    :altTag="$record['image_alt_text']"
    :title="$record['title']"
    />
  @endforeach
</div>
<nav aria-label="Page navigation">
  {{ $paginator->links() }}
</nav>
@endsection
