<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vidroom extends Model 
{
   use HasFactory;

   public $timestamps = false;
   protected $fillable = [
       'id',
       'Name',
       
   ];

}