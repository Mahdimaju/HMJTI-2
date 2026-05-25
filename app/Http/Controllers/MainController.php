<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\News;
use App\Models\Event;
use App\Models\Member;
use App\Models\Academic;
use App\Models\Download;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display the HMJTI landing page with all relevant data.
     */
    public function index()
    {
        // Fetch profile (History, Vision, Mission, AD/ART)
        $profile = Profile::latest()->first() ?? new Profile([
            'sejarah' => 'Sejarah HMJTI belum dikonfigurasi.',
            'visi' => 'Visi HMJTI belum dikonfigurasi.',
            'misi' => 'Misi HMJTI belum dikonfigurasi.',
            'ad_art' => 'AD/ART HMJTI belum dikonfigurasi.',
        ]);

        // Fetch all news ordered by latest date
        $news = News::orderBy('tanggal', 'desc')->get();

        // Fetch events ordered by upcoming date
        $events = Event::orderBy('tanggal_pelaksanaan', 'asc')->get();

        // Fetch members grouped or sorted
        $members = Member::orderBy('id', 'asc')->get();

        // Fetch academic information (Scholarship, Internships, Projects)
        $academics = Academic::orderBy('created_at', 'desc')->get();

        // Fetch downloads (Files, Templates, Documents)
        $downloads = Download::orderBy('created_at', 'desc')->get();

        return view('index', compact('profile', 'news', 'events', 'members', 'academics', 'downloads'));
    }
}
