<?php

namespace App\Models;

use App\DirectUs;

class TtnLabels extends Model
{
    /**
     * @return array
     */
    public static function list(): array
    {
        $api = new DirectUs;
        $api->setEndpoint('ttn_labels');
        $api->setArguments(
            array(
                'fields' => '*.*.*.*.*.*',
                'meta' => '*',
                'sort' => 'display_id_number',
                'limit' => 150
            )
        );
        return $api->getData();
    }

    /**
     * @param string $slug
     * @return array
     */
    public static function find(string $slug): array
    {
        $api = new DirectUs;
        $api->setEndpoint('ttn_labels');
        $api->setArguments(
            array(
                'fields' => '*.*.*.*.*.*',
                'meta' => '*',
                'filter[slug][eq]' => $slug
            )
        );
        return $api->getData();
    }

    /**
     * @param int $id
     * @return array
     */
    public static function byArtist(int $id): array
    {
        $api = new DirectUs;
        $api->setEndpoint('ttn_labels');
        $api->setArguments(
            array(
                'fields' => '*.*.*.*.*.*',
                'meta' => '*',
                'filter[artist][eq]' => $id
            )
        );
        return $api->getData();
    }
}