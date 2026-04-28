<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nim'
    ];
=======
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['name' , 'nim'])]

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
>>>>>>> 035bb36a9d1b03611d34fa03981d20d296b14206
}