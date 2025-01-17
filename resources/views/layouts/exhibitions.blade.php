@include('includes.structure.name-spaces')
<head>

    @include('includes.structure.meta')
    <x-feed-links></x-feed-links>

    @include('includes.css.css')

    @include('includes.structure.manifest')
    @include('googletagmanager::head')

</head>
<body class="doc-body bg-pastel c_darkmode">
@include('googletagmanager::body')

@include('includes.structure.accessibility')
@include('includes.structure.nav')

@hasSection('banner')
    @yield('banner')
    @include('includes.structure.exhibition-title')
@else
    @include('includes.structure.head')
@endif

    @include('includes.structure.open')

<div class="container mt-3">
    @include('includes.structure.breadcrumb')
</div>
@yield('content')
@yield('ttn-actions')
@yield('tnew-data')
@yield('exhibitions-files')
@yield('shopify')
@yield('exhibitionCaseCards')
@yield('exhibition-objects')
@yield('exhibition-labels')
@yield('exhibitionAudio')
@yield('excarousel')
@yield('youtube')
@yield('curators')
@yield('research-funders')
@yield('current')
@yield('sketchfab')
@yield('displays')
@yield('future')
@yield('archive')
@yield('galleries')
@yield('departments')
@yield('exhibition-thanks')
@yield('360')
@yield('mlt')
@include('includes.structure.email-signup')
@include('includes.structure.footer')
@include('includes.structure.modal')
@include('includes.scripts.javascript')

@hasSection('360')
    @include('includes.scripts.photosphere-js')
@endif
</body>
</html>
