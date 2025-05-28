<?php
namespace App\Http\Controllers;

use App\Models\ToeicScore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ToeicScoreController extends Controller
{
    public function index()
    {
        $toeicScores = ToeicScore::latest()->get();
        return view('toeic_scores.index', compact('toeicScores'));
    }

    public function create()
    {
        return view('toeic_scores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'picture' => 'required|mimes:pdf|max:2048',
        ]);

        $path = $request->file('picture')->store('toeic_pdfs', 'public');

        ToeicScore::create([
            'picture' => $path
        ]);

        return redirect()->route('toeic-scores.index')->with('success', 'PDF berhasil diunggah.');
    }

    public function show($id)
    {
        $toeicScore = ToeicScore::findOrFail($id);
        return view('toeic_scores.show', compact('toeicScore'));
    }

    public function edit($id)
    {
        $toeicScore = ToeicScore::findOrFail($id);
        return view('toeic_scores.edit', compact('toeicScore'));
    }

    public function update(Request $request, $id)
    {
        $toeicScore = ToeicScore::findOrFail($id);

        if ($request->hasFile('picture')) {
            $request->validate([
                'picture' => 'mimes:pdf|max:2048',
            ]);

            if ($toeicScore->picture) {
                Storage::disk('public')->delete($toeicScore->picture);
            }

            $path = $request->file('picture')->store('toeic_pdfs', 'public');
            $toeicScore->update(['picture' => $path]);
        }

        return redirect()->route('toeic-scores.index')->with('success', 'PDF berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $toeicScore = ToeicScore::findOrFail($id);

        if ($toeicScore->picture) {
            Storage::disk('public')->delete($toeicScore->picture);
        }

        $toeicScore->delete();

        return redirect()->route('toeic-scores.index')->with('success', 'PDF berhasil dihapus.');
    }
}
