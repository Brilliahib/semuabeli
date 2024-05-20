<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTools extends Model
{
    use HasFactory;
    protected $table = 'project_tools';
    protected $guarded = ['id'];
}
