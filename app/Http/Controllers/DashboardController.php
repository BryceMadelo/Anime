<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Reading;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Anime progress
        $animes = Anime::all()->map(function ($anime) {
            $anime->progress = $anime->episodes && $anime->watched_episodes
                ? round(($anime->watched_episodes / $anime->episodes) * 100)
                : 0;
            return $anime;
        });

        // Reading progress
        $readings = Reading::all()->map(function ($reading) {
            $reading->progress = $reading->total_chapters && $reading->current_chapter
                ? round(($reading->current_chapter / $reading->total_chapters) * 100)
                : 0;
            return $reading;
        });

        return view('dashboard', compact('animes', 'readings'));
    }

}
