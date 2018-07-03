
@extends('home')
@section('dashboard_content')

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

@section('title') 
    <h3>Upcoming Rides</h3>
@endsection
<div class="myGroup">
        
                    <div class="card card-body">
                            @if(count($rides) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Future Scheduled Rides</th>
                                    <th>Location</th>
                                    <th>Pickup Details</th>
                                    <th></th>
    
                                </tr>
                                @foreach($rides as $ride)
                                    @if( $ride->pickup_date < $ride->addWeek())
                                        <tr>
                                        <td style="text-transform: capitalize;">{{$ride->last_name}},{{$ride->first_name}}</td>
                                        <td style="text-transform: capitalize;">{{$ride->city}},{{$ride->state}}</td>
                                        <td style="text-transform: capitalize;">
                                            @php echo date('m/d/y', strtotime($ride->pickup_date)) @endphp
                                            @php echo date('h:i:s a', strtotime($ride->pickup_time)) @endphp
                                        </td>
                                        <td><a href="/rides/{{$ride->id}}/" class="btn btn-info"> View</a></td>
                                        <td>   
                        
                                        </td>
                                    @endif
                                        </tr>
                                @endforeach
                            </table>
                        @else
                          <p>No Scheduled rides</p>
                        @endif
                    </div>
                  </div
                    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

                    <h3>Calendar</h3>

                    <div id='calendar'></div>

                    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
                    <script>
                            $(document).ready(function() {
                                // page is now ready, initialize the calendar...
                                $('#calendar').fullCalendar({
                                    events : [
                                        @foreach($rides as $ride)
                                        {
                                            title : '{{ $ride->pickup_time . " " . $ride->last_name}}',
                                            start : '{{ $ride->pickup_date}}',
                                            url : '{{ route('rides.show', $ride->id) }}'
                                        },
                                        @endforeach
                                    ]
                                })
                            });
                        </script>


@endsection


