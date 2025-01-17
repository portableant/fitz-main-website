@extends('layouts.layout')

@section('title', $page['title'])
@section('description', $page['meta_description'])
@section('keywords', $page['meta_keywords'])
@if(!empty($page['hero_image']))
    @section('hero_image', $page['hero_image']['data']['url'])
    @section('hero_image_title', $page['hero_image_alt_text'])
@else
    @section('hero_image','https://fitz-cms-images.s3.eu-west-2.amazonaws.com/img_20190105_153947.jpg')
    @section('hero_image_title', "The inside of our Founder's entrance")
@endif

@section('content')
    @if(!empty($page['carousel_associated']))
        @if($page['carousel_associated'][0]['carousels_id'])
            <div class="container-fluid">
                <div class="negative-padding">
                    @include('includes.structure.carousel-pages')
                </div>
            </div>
        @endif
    @endif

    <div class="col-12 shadow-sm p-3 mx-auto mb-3">
        @markdown($page['body'])
    </div>

    @if($page['vimeo_id'])
        <div class="col-12 shadow-sm p-3 mx-auto mb-3 ">
            @include('includes.social.vimeo')
        </div>
    @endif

    @if($page['youtube_id'])
        <div class="col-12 shadow-sm p-3 mx-auto mb-3 ">
            @include('includes.social.youtube')
        </div>
    @endif

    @if($page['sms_id'])
        <div class="col-12 shadow-sm p-3 mx-auto mb-3 ">
            @include('includes.social.sms')
        </div>
    @endif

    @include('includes.structure.learning-blocks')
    @if($page['youtube_playlist_id'])
        @include('includes.social.community-youtube-playlist')
    @endif
    @include('includes.structure.related-pages')

@endsection

