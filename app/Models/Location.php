<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
    	'id','a','name','type','prix','chambre','salon','cuisine','bain', 'surface','description','tel','email','image', ];

    	
}
