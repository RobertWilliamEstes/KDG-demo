<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Ride extends Model
{
    protected $fillable = ['first_name', 'last_name', 'company', 'account', 'state', 'city', 'pickup_time', 'pickup_date', 'fare'];

    public function user(){
        return $this->belongsTo('App\User');
    }

            /**
     * adds week to current date via carbon
     *     
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addWeek()
    {
        $nextWeek = Carbon::now()->addWeek();
        return  $nextWeek;
    }
}
