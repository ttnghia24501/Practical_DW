<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table='students_table';
    /**
     * @var mixed
     */
    public $fillable =[
        "feedback",
        "name",
        "email",
        "telephone"
];
}
