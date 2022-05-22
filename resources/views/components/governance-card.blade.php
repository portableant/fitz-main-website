<div class="col-md-4 mb-3">
    <div class="card card-fitz h-100">
        @isset($image['data']['thumbnails'])
            <a href="{{ $image['data']['full_url'] }}">
                <img class="card-img-top"
                     src="{{ $image['data']['thumbnails'][13]['url']}}"
                     alt="{{ $altTag }}"
                     width="{{ $image['data']['thumbnails'][13]['width'] }}"
                     height="{{ $image['data']['thumbnails'][13]['height'] }}"
                     loading="lazy"
                />
            </a>
        @else
            <a href="{{ $file['data']['full_url'] }}">
                <img class="card-img-top"
                     src="{{ env('MISSING_IMAGE_URL') }}"
                     alt="A stand in image for {{ $title }}"
                     loading="lazy"
                />
            </a>
        @endisset
        <div class="card-body h-100">
            <div class="contents-label mb-3">
                <h3>
                    <a href="{{ $file['data']['full_url'] }}" class="stretched-link">
                        {{ $title }}
                    </a>
                </h3>
                <p>@mime($file['type']) - @humansize($file['filesize'])</p>
                <p class="text-info">
                    Document type: {{ ucfirst($type) }}
                </p>
            </div>
        </div>
    </div>
</div>
