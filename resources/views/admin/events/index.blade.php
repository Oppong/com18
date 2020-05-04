@extends('admin.adminhome')


@section('content')

<div role="main" class="">

  @if($events->isEmpty())

<div class="text-center">
  <img src="/images/empty.png" alt="" class="img-fluid" width="50%">
  <br>
  <a href="{{route('event.create')}}" type="button" class="btn btn-primary mt-4">Create event</a>
</div>

@else
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">event</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

          <a href="{{route('event.create')}}" type="button" class="btn btn-primary">
            Create event
          </a>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>TITLE</th>
              <th>DESCRIPTION</th>
              <th>DATE</th>
              <th>MONTH</th>
              <th>LOCATION</th>
              <th>IMAGE</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>

        @foreach($events as $event)
            <tr>
              <td>{{$event->id}}</td>
              <td>{{$event->event_title}}</td>
              <td>{{$event->event_description}}</td>
              <td>{{$event->event_date}}</td>
              <td>{{$event->event_month}}</td>
              <td>{{$event->event_location}}</td>
              <td><img src="{{$event->getFirstMediaUrl('events')}}" alt="" class="img-fluid" width="50" height="50" style="border-radius: 100%;"></td>
              <td class="d-flex align-items-center">
              <a href="{{ route('event.edit', $event->id)}}" class=" px-2"> <i class="fas fa-edit"></i> </a>
              {{--<a href="{{ route('event.show', $event->id)}}" class="text-success px-2">View</a>--}}
              <form action="{{ route('event.destroy', $event->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn"> <i class="fas fa-trash-alt text-danger"></i></button>
              </form>
              </td>
            </tr>
        @endforeach
          </tbody>
        </table>
      </div>

      @endif
    </div>


@endsection
