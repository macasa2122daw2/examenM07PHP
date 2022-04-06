<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soci extends Model
{
    use HasFactory;
    protected $primaryKey = 'id'; // Per a que agafi Email com a primary key
    public $timestamps = false;//Para que no introduzca campos de update at
    
    protected $fillable = [
        'nom', 
        'cognoms',
        'correu', 
    ];
}
