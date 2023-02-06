<?php

namespace App\Http\Controllers;

use App\Models\ProgressNote;
use Illuminate\Http\Request;

class ProgressNoteController extends Controller
{
    public function edit($id)
    {
        $progress_notes = ProgressNote::find($id);

        return view('editProgressNote')->with('progress_note', $progress_notes);
    }

    public function store(Request $request)
    {
        $progresss_notes = new ProgressNote;

        $progresss_notes->doctor_order_id    = $request->doctor_order_id;
        $progresss_notes->notes     = $request->progress_notes;

        $progresss_notes->save();

        return redirect()->route('orders')->with('success', 'New Note added successfully!');
    }
    public function update(Request $request)
    {
        $progresss_notes = ProgressNote::find($request->id);

        $progresss_notes->doctor_order_id    = $request->doctor_order_id;
        $progresss_notes->notes              = $request->progress_notes;

        $progresss_notes->save();

        return redirect()->route('orders')->with('success', 'Note updated successfully!');
    }

    public function destroy($id)
    {
        $progresss_notes = ProgressNote::find($id);
        $progresss_notes->delete();

        return redirect()->route('orders')->with('success', 'Note deleted successfully!');
    }
}
