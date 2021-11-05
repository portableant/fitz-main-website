<?php

namespace App\Models;

use App\DirectUs;

class ThingsToDo extends Model
{
    public static function list(){
      $api = new DirectUs;
      $api->setEndpoint('things_to_do');
      $api->setArguments(
        $args = array(
            'fields' => '*.*.*.*',
            'meta' => '*',
            'sort' => '?',
            'limit' => 3
        )
      );
      return $api->getData();
    }

    public static function listAll($limit = 100){
      $api = new DirectUs;
      $api->setEndpoint('things_to_do');
      $api->setArguments(
        $args = array(
            'fields' => '*.*.*.*',
            'meta' => '*',
            'limit' => $limit
        )
      );
      return $api->getData();
    }

}
