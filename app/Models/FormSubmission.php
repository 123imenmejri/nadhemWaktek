<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class FormSubmission extends Model

{   use HasFactory;
    use SoftDeletes;

     protected $fillable = ['name', 'color', 'message','lien','Durée','note', 'start_date'];

     public function emails()
     {
         return $this->hasMany(Email::class);
     }

     
}


