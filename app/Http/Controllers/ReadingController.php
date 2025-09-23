<?php

namespace App\Http\Controllers;

use App\Models\Reading;
use Illuminate\Http\Request;

class ReadingController extends Controller
{
    public function index()
    {
        $readings = Reading::all();
        return view('readings.index', compact('readings'));
    }

    public function create()
    {
        return view('readings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'type' => 'required|string',
            'current_chapter' => 'nullable|integer|min:0',
            'total_chapters' => 'nullable|integer|min:1',
            'status' => 'required|string',
        ]);

        Reading::create($request->only([
            'title',
            'genre',
            'type',
            'current_chapter',
            'total_chapters',
            'status'
        ]));

        return redirect()->route('readings.index')
                         ->with('success', 'Reading added successfully.');
    }

    public function edit(Reading $reading)
    {
        return view('readings.edit', compact('reading'));
    }

    public function update(Request $request, Reading $reading)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'type' => 'required|string',
            'current_chapter' => 'nullable|integer|min:0',
            'total_chapters' => 'nullable|integer|min:1',
            'status' => 'required|string',
        ]);

        $reading->update($request->only([
            'title',
            'genre',
            'type',
            'current_chapter',
            'total_chapters',
            'status'
        ]));

        return redirect()->route('readings.index')
                         ->with('success', 'Reading updated successfully.');
    }

    public function destroy(Reading $reading)
    {
        $reading->delete();
        return redirect()->route('readings.index')
                         ->with('success', 'Reading deleted successfully.');
    }
}
