@extends('layouts/layout')
@section('title', 'Look, think, do')
@section('hero_image', 'https://content.fitz.ms/fitz-website/assets/SpringtimeWEB.jpg?key=directus-large-crop')
@section('hero_image_title', 'Springtime by Claude Monet')
  @section('content')
  <h2>Look, think, do activities</h2>
  <div class="col-12 shadow-sm p-3 mx-auto mb-3 rounded">
<p>
  These activities have been designed as a starting point for looking, talking and doing together. We will be adding new entries throughout April and May 2020.

The Look and Think activities should take 5 -10 minutes.

The Do activities might take longer depending on the task and how creative you are feeling!

Answers and suggestions about how to find out more at the bottom of each page.

Have fun and don't forget to share your creations using #FitzVirtual #LookThinkDo.
</p>
</div>
      <div class="row">

        @foreach($ltd['data'] as $look)
        <div class="col-md-6 mb-3">
          <div class="card card-body h-100">
            <img class="img-fluid" src="{{ $look['focus_image']['data']['thumbnails'][4]['url']}}"/>
          <div class="container h-100">
            <div class="contents-label mb-3">
              <h3>
                <a href="look-think-do/{{ $look['slug']}}">{{ $look['title_of_work']}}</a>
              </h3>
              {!! Str::limit($look['main_text_description'],200, ' (...)') !!}
            </div>
          </div>
          <a href="look-think-do/{{ $look['slug']}}" class="btn btn-dark">Read more</a>
        </div>

      </div>
      @endforeach
      </div>
  @endsection