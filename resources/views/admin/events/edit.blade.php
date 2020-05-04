@extends('admin.adminhome')


@section('content')

<div class="mt-5">
  <h3 class="py-3">Create New Event</h3>

      <form class="form-group" action="{{route('event.update', $event->id)}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mt-4">
              <label for="event_title"> Event Title</label>
              <input type="text" name="event_title" id="event_title" class="form-control" value="{{$event->event_title}}">
              @error('event_title')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="event_description">Event Description</label>
              <textarea name="event_description" rows="8" cols="80" class="form-control" value="{{$event->event_description}}"></textarea>
              @error('event_description')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="event_date">Event Date</label>
              <input name="event_date" class="form-control" value="{{$event->event_date}}">
              @error('event_date')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="event_month">Event Month</label>
              <input name="event_month" class="form-control" value="{{$event->event_month}}">
              @error('event_month')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="event_location">Event Location</label>
              <input name="event_location" class="form-control" value="{{$event->event_month}}">
              @error('event_location')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
                <label for="image">Image for Event </label>
                <input type="file" name="image" class="form-control">
                  @error('image')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
                <button class="btn btn-primary" type="submit">Save and Go Back</button>
                <a href="{{route('event.index')}}" class="btn btn-success" type="submit">Go Back</a>
            </div>
      </form>
</div>

@endsection
