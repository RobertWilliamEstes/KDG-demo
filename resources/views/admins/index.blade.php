@extends('home')
@section('dashboard_content')


@section('title') 
    <h3>View Users</h3>
@endsection

<a href="/admins/create" class="btn btn-primary">Create a user</a>

<table class = "table table-striped">
  <tr>
    <th>User ID</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Admin</th>
    <th></th>
    <th></th>
  </tr>
  @foreach($users as $user)
  <tr>
    <td style="text-transform: capitalize;">{{$user->id}}</td>
    <td style="text-transform: capitalize;">{{$user->name}}</td>
    <td style="text-transform: capitalize;">{{$user->email}}</td>
    {{-- Handle role output --}}
    @if( $user->hasrole('admin') ) 
    <td style="text-transform: capitalize;">Yes</td>
    @else
    <td style="text-transform: capitalize;">No</td>
    @endif

    @if( Auth::user()->id == $user->id)
    <td><a class="btn btn-primary">Edit</a></td>
    <td>        
        <form method="POST" action="/admin/{{$user->id}}/destroy">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
    
            <div class="form-group">
                <input type="submit" class="btn btn-danger delete-user" value="Delete user" disabled>
            </div>
        </form>
    </td>
    @else
    <td><a href="/admins/{{$user->id}}/edit" class="btn btn-primary">Edit</a></td>
    <td>        
        <form method="POST" action="{{ route('admins.destroy', $user->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
    
            <div class="form-group">
                <input type="submit" class="btn btn-danger delete-user" value="Delete user">
            </div>
        </form>
    </td>
    @endif

  </tr>
  @endforeach
</table>
<script>
        $('.delete-user').click(function(e){
            e.preventDefault() // Don't post the form, unless confirmed
            if (confirm('Are you sure?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>
@endsection


