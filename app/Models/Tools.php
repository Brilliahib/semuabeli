<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tools extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function project(){
        return $this->belongsToMany(Project::class, 'project_tools');
    }
}
