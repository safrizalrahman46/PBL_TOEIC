<?php

namespace App\Http\Controllers;
use App\Models\Announcement;


use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
public function index()
{
    $announcements = Announcement::all();
    return view('Announcement.index', compact('announcements'));
}
}
