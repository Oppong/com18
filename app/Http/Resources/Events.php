<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Events extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
          'id ' => $this->id,
          'event_title' => $this->event_title,
          'event_location' => $this->event_location,
          'event_description' => $this->event_description,
          'event_date' => $this->event_date,
          'event_month' => $this->event_month,
        ];
    }


    public function with($request) {
      return [
        'version' => '2.0.0',
        'sit_url' => 'amponsahtest.club'
      ];
    }
}
