<div class="col-md-4 mb-3">
    <div class="card card-fitz h-100">
        @if(!empty($labels['image']))
            <a href="{{ route('exhibition.ttn.label', $labels['slug']) }}">
                <img class="card-img-top" src="{{$labels['image']['data']['thumbnails'][2]['url']}}"
                     alt="{{ $labels['alt_text'] }}"
                     width="{{ $labels['image']['data']['thumbnails'][2]['width'] }}"
                     loading="lazy"/>
            </a>
        @else
            <a href="{{ route('exhibition.ttn.label', $labels['slug']) }}">
                <img class="card-img-top"
                     src="https://content.fitz.ms/fitz-website/assets/gallery3_roof.jpg?key=directus-large-crop"
                     alt="A stand in image for {{ $labels['title'] }}"
                     loading="lazy"/>
            </a>
        @endisset
        <div class="card-body h-100">
            <div class="contents-labels mb-3">
                <h3>
                    <a href="{{ route('exhibition.ttn.label', $labels['slug']) }}" class="stretched-link">
                        {{ $labels['title'] }}
                    </a>
                </h3>
               <p>
                   {{$labels['artist']['display_name']}}
               </p>
            </div>
        </div>
    </div>
</div>

