<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{


      public function listing()
{
	return $this->belongsTo('App\Listing'); 
}

      public function recu()
{
	return $this->belongsTo('App\Recu'); 
}

      public function transfere()
{
	return $this->belongsTo('App\Transfere'); 
}

}
