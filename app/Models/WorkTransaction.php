<?php
/*
 * Copyright (c) 2024.
 * author: Miftahul Ulum
 * email: ulumiftahul06@gmail.com
 * github: miftahululum002.github.io
 * instagram: @berandal_usaha_apik / @miftahululum002
 *
 * Filename: WorkTransaction.php
 * created: 2024-07-11 07:58:19
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkTransaction extends Model
{
    use HasFactory;
    protected $table='work_transaction';
    protected $guarded =['id'];
    protected $primaryKey='id';

    public function user()
    {
      return $this->hasOne(User::class,'id','user_id');
    }

    public function site()
    {
        return $this->hasOne(Site::class,'id','site_id');
    }

    public function activity()
    {
        return $this->hasOne(Activity::class,'id','activity_id');
    }

    public function machine()
    {
        return $this->hasOne(Machine::class,'id','machine_id');
    }
}
