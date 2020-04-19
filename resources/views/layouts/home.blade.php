
<!DOCTYPE html>
<html lang="en">
<head>

    @include('includes.meta')

    @include('includes.css')

    @include('includes.manifest')
    @include('feed::links')
</head>
<body class="doc-body">

<!-- Screen reader skip to main -->
<a class="sr-only sr-only-focusable doc-skip" href="#doc-main-h1">
    <div class="container">
        <span class="doc-skip-text">Skip to main content</span>
    </div>
</a>

  @include('includes.nav')

  @include('includes.announcement')

  @include('includes.head')

  <div class="container">
      @include('includes.breadcrumb')
  </div>

  <div class="container">
        @yield('content')
  </div>
  <div class="container-fluid parallax parallax-home">
  </div>

  <div class="container mt-3">
    <h2>Latest news from us</h2>
    <div class="row">
        @yield('news')
    </div>
  </div>

  <div class="container-fluid parallax second-parallax-home">
  </div>
  <div class="container mt-3">
    <h2>Museum themes</h2>
    <div class="row">
        @yield('themes')
    </div>
  </div>
  <div class="container-fluid carousel-pad">
      @yield('carousel')
  </div>

  <div class="container mt-3">
    <h2>Latest featured research</h2>
    <div class="row">
        @yield('research')
    </div>
  </div>
  <div class="container-fluid parallax third-parallax-home mb-3">
  </div>

  <div class="container ">
    <h2>Latest Tweets</h2>
    @yield('twitter')
  </div>
  <div class="container-fluid parallax fourth-parallax-home mb-3">
  </div>
  <div class="container ">
    <h2>Latest videos</h2>
    @yield('youtube-list')
  </div>
  @include('includes.share')

  @include('includes.footer')
  @include('includes.modal')
  @include('includes.javascript')

  @include('includes.fullscreen')

</body>
</html>
