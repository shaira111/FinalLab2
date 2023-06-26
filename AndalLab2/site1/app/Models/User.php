<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    public $timestamps = false;

    protected $table = 'table_site1';

    protected $fillable = [
        'username', 'password', 'gender'
    ];

    protected $hidden =[
        "password"
    ];
}