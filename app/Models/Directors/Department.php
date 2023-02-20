<?php

namespace App\Models\Directors;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany(User::class);
    }

    protected $fillable = [
        'name',
        'slug',
    ];
}
