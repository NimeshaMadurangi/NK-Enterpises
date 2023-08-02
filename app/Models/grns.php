<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grns extends Model
{
    use HasFactory;
  
    protected $table = 'grns';
    protected $filebale = ['id','grn', 'product_id','supplier','price','cost','qty','create_date'];
    public $timestamp = false;   

}
