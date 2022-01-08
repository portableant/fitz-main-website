<div class="container mt-3">
  <h2>
    <a href="{{ route('galleries') }}">Discover our galleries</a>
  </h2>
  <div class="row">
    @foreach($galleries['data'] as $gallery)
      <x-image-card
      :image="$gallery['hero_image']"
      :altTag="$gallery['hero_image_alt_text']"
      :params="[$gallery['slug']]"
      :route="'gallery'"
      :title="$gallery['gallery_name']"
      />
    @endforeach
  </div>
</div>
