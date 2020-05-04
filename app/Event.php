<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Event extends Model implements HasMedia
{
  protected $fillable = ['event_title', 'event_description', 'event_month', 'event_location', 'event_date'];

  use InteractsWithMedia;

      public function registerMediaCollections(): void
  {
      $this->addMediaCollection('events');
  }
}
