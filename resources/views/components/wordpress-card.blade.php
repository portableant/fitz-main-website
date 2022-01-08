<div class="col-md-4 mb-3">
  <div class="card card-fitz h-100">
    @isset($image)
      <a href="{{ $url }}">
        <img class="card-img-top" src="{{ $image}}"
        alt="{{ $title }}"
        loading="lazy"/>
      </a>
    @else
      <a href="{{ $url }}">
        <img class="card-img-top" src="https://content.fitz.ms/fitz-website/assets/gallery3_roof.jpg?key=directus-large-crop"
        alt="A stand in image for {{ $title }}"
        loading="lazy" />
      </a>
    @endisset
    <div class="card-body h-100">
      <div class="contents-label mb-3">
        <h3>
          <a href="{{ $url }}" class="stretched-link">
            {{ $title }}
          </a>
        </h3>
        
      </div>
    </div>
  </div>
</div>