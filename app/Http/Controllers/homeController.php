<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Twitter;
use Youtube;
use Cache;

class homeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $api = $this->getApi();
    $api->setEndpoint('carousels');
    $api->setArguments(
      $args = array(
          'fields' => '*.*.*.*',
          'meta' => '*',
          'filter[section][eq]' => 'home',
          'single' => '1',
          'sort' => '-id'
      )
    );
    $carousel = $api->getData();


    $api2 = $this->getApi();
    $api2->setEndpoint('news_articles');
    $api2->setArguments(
      $args = array(
          'fields' => '*.*.*.*',
          'meta' => '*',
          'sort' => '-id',
          'limit' => 3
      )
    );
    $news = $api2->getData();

    $api3 = $this->getApi();
    $api3->setEndpoint('research_projects');
    $api3->setArguments(
      $args = array(
          'fields' => '*.*.*.*',
          'meta' => '*',
          'sort' => '-id',
          'limit' => 3
      )
    );
    $research = $api3->getData();

    $api4 = $this->getApi();
    $api4->setEndpoint('themes');
    $api4->setArguments(
      $args = array(
          'fields' => '*.*.*.*',
          'meta' => '*',
          'sort' => '-id',
          'limit' => 3
      )
    );
    $themes = $api4->getData();

    $api5 = $this->getApi();
    $api5->setEndpoint('things_to_do');
    $api5->setArguments(
      $args = array(
          'fields' => '*.*.*.*',
          'meta' => '*',
          'sort' => '-id',
          'limit' => 3
      )
    );
    $things = $api5->getData();
    $expiresTwitter = now()->addMinutes(60);
    $expiresYouTube = now()->addMinutes(6000);

    if (Cache::has('cache_twitter')) {
      $tweets = Cache::get('cache_twitter');
    } else {
      $tweets = Twitter::getUserTimeline(['screen_name' => 'fitzmuseum_uk', 'count' => 3, 'format' => 'object']);
      Cache::put('cache_twitter', $tweets, $expiresTwitter); // 1 hour
    }
    if (Cache::has('cache_yt')) {
      $videoList = Cache::get('cache_yt');
    } else {
      $videoList = Youtube::listChannelVideos('UCFwhw5uPJWb4wVEU3Y2nScg', 3, 'date');
      Cache::put('cache_yt', $videoList, $expiresYouTube); // 1 hour
    }
    return view('index', compact(
      'carousel','news', 'research',
      'themes','tweets', 'videoList',
      'things'
    ));
  }
}
