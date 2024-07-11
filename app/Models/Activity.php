<?php
/*
 * Copyright (c) 2024.
 * author: Miftahul Ulum
 * email: ulumiftahul06@gmail.com
 * github: miftahululum002.github.io
 * instagram: @berandal_usaha_apik / @miftahululum002
 *
 * Filename: Activity.php
 * created: 2024-07-11 07:57:54
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table='activity';
    protected $guarded =['id'];
    protected $primaryKey='id';
}
