<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ride;


class RidesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $rides = Ride::all();//orderBy('pickup_time', "desc");
        return view('rides.index', compact('rides'));
    }

    public function list()
    {
        $rides = Ride::all();//orderBy('pickup_time', "desc");
        return view('rides.list', compact('rides'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'account' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pickup_date' => 'required',
            'pickup_time' => 'required',
            'fare' => 'required'
        ]);

        //create ride
        $ride = new Ride;
        $ride->first_name = $request->input('first_name');
        $ride->last_name = $request->input('last_name');
        $ride->company = $request->input('company');
        $ride->account = $request->input('account');
        $ride->state = $request->input('state');
        $ride->city = $request->input('city');
        $ride->pickup_date = $request->input('pickup_date');
        $ride->pickup_time = $request->input('pickup_time');
        $ride->fare = $request->input('fare');
        $ride->user_id = auth()->user()->id;
        $ride -> save();

        return redirect('/rides')->with('success', 'Ride Scheduled');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ride =  Ride::find($id);
        return view('rides.show')->with('ride', $ride);
        // $rides =  Ride::orderBy('account', "desc")->paginate(10);
        // return view ('rides.list')->with('rides',$rides);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ride =  Ride::find($id);
        return view('rides.edit')->with('ride', $ride);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return redirect('/rides')->with('success', 'Ride updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ride = Ride::find($id);
        $ride -> delete();
        return redirect('/rides')->with('success', 'Ride removed');
    }


}
