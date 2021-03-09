<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superadmin extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'sa_Id';
}
