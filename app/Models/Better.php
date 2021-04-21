<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Better extends Model
{
    use HasFactory;

    public $fillable = ['name', 'surname', 'bet', 'country_id'];

    public function betters(){
        return $this->belongsTo('App\Models\horse');
    }

}
