<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personTable extends Model
{
    protected $table = 'person_tables';
    protected $fillable = [
        'name',
        'address',
        'phone_number',
        'email',
        'gender',
        'check',
    ];
}
