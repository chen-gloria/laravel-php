<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Test extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'test';

    // The SoftDeletes trait will automatically cast the deleted_at attribute to a DateTime / Carbon instance for you.
    // Add $dates to database;
    // protected $dates = ['deleted_at'];

    // allow some data to be inserted to the database
    protected $fillable = [

        'title',
        'content'
    ];
}
