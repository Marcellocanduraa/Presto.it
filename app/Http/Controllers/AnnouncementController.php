<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function create(){
        $announcements = Announcement::all();
        $categories = Category::all();
        return view('announcements.create', [
            'announcements' => $announcements,
            'categories' => $categories,
        ]);
    }

    public function show($id){
        $announcement = Announcement::find($id);

    }
}
