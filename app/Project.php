<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'company_id',
        'days',
        'user_id'
    ];

//    public function user()
//    {
//        return $this->belongsTo('App\User');
//    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}