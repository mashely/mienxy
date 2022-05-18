<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estimatedPrice extends Model
{
    use HasFactory;
    //table name
    protected $table = 'estimated_price';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamps = true;
    
}
