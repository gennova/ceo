<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Quote extends Model
{
    use HasFactory;
    protected $table = 'quotes';
    protected $primaryKey = 'id';
    public $incrementing = 'true';
    protected $fillable = [
        'quote',
        'desc',
        'owner',
        'time',
    ];
}



function getOne(){
    return DB::select('select * from quotes');
}
