<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function announcements(){
        return $this->hasMany(Announcement::class);
    }

}
