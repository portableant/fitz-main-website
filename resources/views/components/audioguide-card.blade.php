<div class="col-md-4 mb-3">
  <div class="card card-fitz h-100">
    @isset($image)
      <a href="{{ route($route, $params) }}">
        <img class="card-img-top" src="{{ $image['data']['thumbnails'][2]['url']}}"
        alt="{{ $altTag }}"
        width="{{ $image['data']['thumbnails'][2]['width'] }}"
        loading="lazy" />
      </a>
    @else
      <a href="{{ route($route, $params) }}">
        <img class="card-img-top" src="https://content.fitz.ms/fitz-website/assets/gallery3_roof.jpg?key=directus-large-crop"
        alt="A stand in image for {{ $title }}"
        loading="lazy" />
      </a>
    @endisset
    <div class="card-body h-100">
      <div class="contents-label mb-3">
        <h3 class="lead">
          <a href="{{ route($route, $params) }}" class="stretched-link">
            {{ $title }}
          </a>
        </h3>
        @isset($stop)
          <p class="text-info">
            Stop number: {{ $stop }}
          </p>
        @endif
      </div>
    </div>
  </div>
</div>