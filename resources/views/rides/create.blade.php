@extends('home')

@section('title') 
    <h3>Schedule a Ride</h3>
@endsection

@section('dashboard_content')
<div class="col-md-15">
        <div class="card">
            <div class="card-header">Schedule a ride</div>

            <div class="card-body">
                <form method="POST" action="{{ route('rides.store') }}" aria-label="{{ route('rides.store') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="first_name" class="col-sm-4 col-form-label text-md-right">First Name:*</label>

                        <div class="col-md-6">
                            <input id="first_name" style="text-transform: capitalize;" type="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" required autofocus>

                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="last_name" class="col-sm-4 col-form-label text-md-right">Last Name:*</label>

                        <div class="col-md-6">
                            <input id="last_name" style="text-transform: capitalize;" type="last_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="last_name" required autofocus>

                            @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>   

                    <div class="form-group row">
                        <label for="Company" class="col-sm-4 col-form-label text-md-right">Company:</label>

                        <div class="col-md-6">
                            <input id="Company" style="text-transform: capitalize;" type="Company" class="form-control{{ $errors->has('Company') ? ' is-invalid' : '' }}" name="Company">

                            @if ($errors->has('Company'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('Company') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                            <label for="account" class="col-sm-4 col-form-label text-md-right">Account Number:*</label>
    
                            <div class="col-md-6">
                                <input id="account" type="account" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="account" required autofocus>
    
                                @if ($errors->has('account'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('account') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>   
                        
                        <div class="form-group row">
                                <label for="state" class="col-sm-4 col-form-label text-md-right">State:*</label>
                                <div class="col-sm-4 col-form-label text-md-right">
                                    <select class="form-control" id="state" name="state" required autofocus>
                                        <option value="">N/A</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DC">District of Columbia</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="IA">Iowa</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MD">Maryland</option>
                                        <option value="ME">Maine</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MT">Montana</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NY">New York</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VA">Virginia</option>
                                        <option value="VT">Vermont</option>
                                        <option value="WA">Washington</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                            </div>

                    <div class="form-group row">
                            <label for="city" class="col-sm-4 col-form-label text-md-right">City:*</label>
    
                            <div class="col-md-6">
                                <input style="text-transform: capitalize;" id="city" type="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" required autofocus>
    
                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>   

                        <div class="form-group row">
                                <label for="pickup_date" class="col-sm-4 col-form-label text-md-right">Date:*</label>
        
                                <div class="col-md-6">
                                    <input id="pickup_date" type="date" min='2018-07-01' class="form-control{{ $errors->has('pickup_date') ? ' is-invalid' : '' }}" name="pickup_date" required autofocus>
        
                                    @if ($errors->has('pickup_date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('pickup_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>   
    
                            <div class="form-group row">
                                    <label for="pickup_time" class="col-sm-4 col-form-label text-md-right">Time:*</label>
            
                                    <div class="col-md-6">
                                        <input id="pickup_time" type="time" class="form-control{{ $errors->has('pickup_time') ? ' is-invalid' : '' }}" name="pickup_time" required autofocus>
            
                                        @if ($errors->has('pickup_time'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('pickup_time') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div> 

                            <div class="form-group row">
                                <label for="fare" class="col-sm-4 col-form-label text-md-right">Fare:*</label>

                                <div class="col-md-6">
                                    <input id="fare" type="number" step="1" min='50' pattern="\d+" / class="form-control{{ $errors->has('fare') ? ' is-invalid' : '' }}" name="fare" required autofocus>

                                    @if ($errors->has('fare'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fare') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>   

                </div>   
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                               Schedule
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

              <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
              <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>


@endsection

@section ('scripts')

    <script type="text/javascript">

        $('.timepicker').datetimepicker({
            format: 'yy-mm-dd '
    
        }); 
    
    </script>
@endsection
