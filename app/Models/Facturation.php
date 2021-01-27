<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturation extends Model
{
    use HasFactory;
    protected $fillable = [
        'userID',
        'productID',
        'nom',
        'prix',
        'quantite',
        'code',
        'date_achat',
    ];
}
