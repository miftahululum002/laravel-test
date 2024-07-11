<?php
/*
 * Copyright (c) 2024.
 * author: Miftahul Ulum
 * email: ulumiftahul06@gmail.com
 * github: miftahululum002.github.io
 * instagram: @berandal_usaha_apik / @miftahululum002
 *
 * Filename: Site.php
 * created: 2024-07-11 07:58:06
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    protected $table='site';
    protected $guarded =['id'];
    protected $primaryKey='id';
}
