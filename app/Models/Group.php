<?php

namespace App\Models;

use App\Models\SubGroup;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory;

    protected $table = 'group';
    protected $fillable = ['department_id', 'group_title', 'status', 'image'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function subGroups()
    {
        return $this->hasMany(SubGroup::class);
    }
}
