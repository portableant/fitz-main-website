@if($project['youtube_playlist_id'] ?? $news['youtube_playlist_id'] ?? $page['youtube_playlist_id'])
    <div class="container">
        <div class="col-12 shadow-sm p-3 mx-auto mb-3 ">
            <div class="ratio ratio-16x9">
                <iframe title="A YouTube video playlist from the Fitzwilliam Museum"
                        src="https://www.youtube.com/embed/videoseries?list={{ $project['youtube_playlist_id'] ?? $news['youtube_playlist_id'] ?? $page['youtube_playlist_id']}}"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endif
