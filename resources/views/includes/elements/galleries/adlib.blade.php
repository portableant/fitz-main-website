@isset($gallery['object_id_numbers'])
    @inject('galleriesController', 'App\Http\Controllers\galleriesController')
    @php
        $records = $galleriesController::getObjects($gallery['object_id_numbers']);
    @endphp
    @if(!empty($records))
        <h3>
            Selected objects in gallery {{ $gallery['gallery_name'] }}
        </h3>
        <div class="row">
            @foreach($records as $record)
                <x-ciim-card :record="$record"></x-ciim-card>
            @endforeach
        </div>
    @endif
@endisset
