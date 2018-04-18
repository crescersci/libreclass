<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinalExam extends Model
{
    //

public function offers()
{
  return $this->belongsTo('App\Offer');
}

public function users()
{
  return $this->belongsTo('App\User');
}

}
