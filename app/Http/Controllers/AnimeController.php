<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class AnimeController extends Controller
{
    /**
     * Display all anime for the logged-in user.
     *
     * @return View
     */
    public function index(): View
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        if (!$user) {
            abort(403);
        }

        /** @var \Illuminate\Database\Eloquent\Collection<int, \App\Models\Anime> $animes */
        $animes = $user->animes()->latest()->get();

        return view('animes.index', compact('animes'));
    }

    /**
     * Show form to create a new anime.
     *
     * @return View
     */
    public function create(): View
    {
        return view('animes.create');
    }

    /**
     * Store new anime.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'episodes' => 'nullable|integer|min:1',
            'status' => 'required|in:Watching,Completed,Plan to Watch',
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();
        if (!$user) {
            abort(403);
        }

        $user->animes()->create($request->only('title', 'genre', 'episodes', 'status'));

        return redirect()->route('animes.index')->with('success', 'Anime added successfully.');
    }

    /**
     * Show form to edit anime.
     *
     * @param Anime $anime
     * @return View
     */
    public function edit(Anime $anime): View
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        if (!$user || $anime->user_id !== $user->id) {
            abort(403);
        }

        return view('animes.edit', compact('anime'));
    }

    /**
     * Update anime.
     *
     * @param Request $request
     * @param Anime $anime
     * @return RedirectResponse
     */
    public function update(Request $request, Anime $anime): RedirectResponse
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        if (!$user || $anime->user_id !== $user->id) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'episodes' => 'nullable|integer|min:1',
            'status' => 'required|in:Watching,Completed,Plan to Watch',
        ]);

        $anime->update($request->only('title', 'genre', 'episodes', 'status'));

        return redirect()->route('animes.index')->with('success', 'Anime updated successfully.');
    }

    /**
     * Delete anime.
     *
     * @param Anime $anime
     * @return RedirectResponse
     */
    public function destroy(Anime $anime): RedirectResponse
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        if (!$user || $anime->user_id !== $user->id) {
            abort(403);
        }

        $anime->delete();

        return redirect()->route('animes.index')->with('success', 'Anime deleted successfully.');
    }
}
