<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
class Task extends Model
{
    protected $fillable = 
    [
        'project_id',
        'assigned_to',
        'title',
        'status',
        'deadline'
    ];
    public function project() { 
        return $this->belongsTo(Project::class); 
    }
    public function user()    { 
        return $this->belongsTo(User::class, 'assigned_to'); 
    }
}
