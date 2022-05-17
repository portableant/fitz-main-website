@extends('layouts.visitus')

@foreach($pages['data'] as $page)
    @section('hero_image', 'https://fitz-cms-images.s3.eu-west-2.amazonaws.com/european-pottery-bond.jpg')
    @section('title', 'Visit us')
    @section('description', $page['meta_description'])
    @section('keyword', $page['meta_keywords'])
@endforeach

@section('content')
    <div class="row">
        <x-visit-us-static-card
            :image="'https://content.fitz.ms/fitz-website/assets/C.7-1986_201810_adn21_dc1.jpg?key=exhibition'"
            :alt="'Magdalene Odundo vessel'"
            :route="'exhibitions'"
            :params="[]"
            :title="'Exhibitions'"
            :colWidth="'3'"></x-visit-us-static-card>

        <x-visit-us-static-card
            :image="'https://content.fitz.ms/fitz-website/assets/Women%20makers%20and%20muses.jpg?key=exhibition'"
            :alt="'A highlight image for Gallery 1: British and European Art, 19th–20th Century'"
            :route="'exhibitions'"
            :params="[]"
            :title="'New Displays'"
            :colWidth="'3'"></x-visit-us-static-card>

        <x-visit-us-static-card
            :image="'https://content.fitz.ms/fitz-website/assets/Fitzwilliam Museum_GalleryOne_Panorama_02_0.jpg?key=exhibition'"
            :alt="'A highlight image for Gallery 1: British and European Art, 19th–20th Century'"
            :route="'galleries'"
            :params="[]"
            :title="'Our galleries'"
            :colWidth="'3'"></x-visit-us-static-card>

        <x-visit-us-static-card
            :image="'https://content.fitz.ms/fitz-website/assets/unknown_st_augustine_st_jerome_and_st_benedict.jpg?key=exhibition'"
            :alt="'An image depicting St Augustine, St Jerome and St Benedict'"
            :route="'events'"
            :params="[]"
            :title="'Events and talks'"
            :colWidth="'3'"></x-visit-us-static-card>
    </div>

    @foreach($pages['data'] as $page)
        <div class="col-12 shadow-sm p-3 mt-3 mx-auto mb-3">
            <h2>{{ $page['title']}}</h2>
            @markdown($page['body'] ?? 'No text available')
        </div>
    @endforeach
@endsection

@include('includes.elements.fitzwilliam-map')

@section('associated_pages')
    <div class="container-fluid py-4 bg-grey">
        <div class="container">
            <div class="row">
                <x-static-image-card
                    :image="'https://content.fitz.ms/fitz-website/assets/saturday_4th_april_139 SMALL.jpg?key=directus-medium-crop'"
                    :alt="'Visitor in Gallery 5'"
                    :route="'landing-section'"
                    :params="['visit-us','frequently-asked-questions']"
                    :title="'Frequently Asked Questions'"></x-static-image-card>
                @foreach($associated['data'] as $associate)
                    <x-image-card
                        :altTag="$associate['hero_image_alt_text']"
                        :title="$associate['title']"
                        :image="$associate['hero_image']"
                        :route="'landing-section'"
                        :params="[$associate['section'],$associate['slug']]"></x-image-card>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('floorplans')
    <div class="row">
        @foreach($floors as $floorplans)
            <div class="col-md-4">
                <x-floor-plans :floorplans="$floorplans"></x-floor-plans>
            </div>
        @endforeach
    </div>
@endsection

