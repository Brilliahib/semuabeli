<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected static function booted(): void
    {
        static::deleting(function (Project $project) {
            // Hapus semua gambar terkait
            Storage::disk('public')->delete($project->cover);
        });
    }

    public function tools(){
        return $this->belongsToMany(Tools::class, 'project_tools');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
