<?php

namespace Sstottelaar\Pirsch\Tags;

use Statamic\Tags\Tags;
use Pirsch\Facades\Pirsch as PirschFacade;

class Pirsch extends \Statamic\Tags\Tags
{
    public function event()
    {
        $metadata = $this->params->get('metadata');
        $metadataArray = json_decode($metadata, true);

        PirschFacade::track(
            name: $this->params->get('name'),
            meta: $metadataArray ?? [],
        );
    }
}