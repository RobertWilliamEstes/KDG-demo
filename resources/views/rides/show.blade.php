@extends('home')

@section('title') 
    <h3>View a Ride</h3>
@endsection

@section('dashboard_content')

    <table>
            <tr>
              <td>Rider:</td>
              <td style="text-transform: capitalize;">{{$ride->last_name}},{{$ride->first_name}}</td>
            </tr>
            <tr>
              <td>Pickup Location:</td>
              <td style="text-transform: capitalize;">{{$ride->city}},{{$ride->state}}</td>
            </tr>
            <tr>
              <td>Pickup Details:</td>
              <td style="text-transform: capitalize;">{{$ride->pickup_date}} at {{$ride->pickup_time}}</td>
            </tr> 
            <tr>
              <td>Fare:</td>
              <td>${{$ride->fare}}</td>
            </tr>
          </table>
    <small>Scheduled on {{$ride ->created_at}}</small>
    <hr>
    <a href ="/rides" class="btn btn-default">Back</a>
    {{-- {!!Form::open(['action' => ['RidesController@destroy', $ride->id], 'method' => 'POST', 'class' => "pull-right"]) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!} --}}
    <hr>
@endsection
