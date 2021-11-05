<div class="container mt-3">
  <h3 class="lead">
    <a href="{{route('things')}}">Things to do</a>
  </h3>
  <div class="row">
    @foreach($things['data'] as $thing)
      <x-partner-card
      :altTag="$thing['hero_image_alt_text']"
      :title="$thing['title']"
      :image="$thing['hero_image']"
      :url="$thing['url']"
      />
    @endforeach
  </div>
</div>
