<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchasing extends Model
{
    use HasFactory;

    protected $table = 'table_purchasing';

    protected $fillable = ['advertisement_id', 'user_id'];
}
