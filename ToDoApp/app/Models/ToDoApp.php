<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoApp extends Model
{
    use HasFactory;
    protected $fillable=['note'];
}
