<script type="text/javascript" src="{{ asset('js/pannellum.js') }}"></script>
<script>
    pannellum.viewer('panorama', {
        "type": "equirectangular",
        "panorama": "@yield('360_image')",
        "autoLoad": true
    });
</script>
