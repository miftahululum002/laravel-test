<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkTransaction extends Model
{
    use HasFactory;
    protected $table='work_transaction';
    protected $guarded =['id'];
    protected $primaryKey='id';
}
