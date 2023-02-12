<?php

namespace App\Http\Controllers;

use App\Models\ProgressNote;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;

class ProgressNoteController extends Controller
{
    public function edit($id)
    {
        $progress_notes = ProgressNote::findOrFail($id);
        $doctor_order_id = $progress_notes->doctor_order_id;

        return view('editProgressNote', ['id' => $doctor_order_id])->with('progress_note', $progress_notes);
    }

    public function store(Request $request)
    {
        $progresss_notes = new ProgressNote;
        $doctor_order_id                    = $request->input('doctor_order_id');
        $progresss_notes->doctor_order_id   = $doctor_order_id;


        $progresss_notes->notes     = $request->progress_notes;
        $progresss_notes->created_at      = Carbon::now(new DateTimeZone('Asia/Singapore'));
        
        $progresss_notes->save();

        return redirect()->route('orders', ['id' => $doctor_order_id]);
    }
    public function update(Request $request)
    {
        $progresss_notes = ProgressNote::find($request->id);

        $doctor_order_id = $progresss_notes->doctor_order_id;
        $progresss_notes->notes              = $request->progress_notes;

        $progresss_notes->save();

        return redirect()->route('orders', ['id' => $doctor_order_id]);
    }

    public function destroy($id)
    {
        $progresss_notes = ProgressNote::find($id);
        $doctor_order_id = $progresss_notes->doctor_order_id;
        $progresss_notes->delete();

        return redirect()->route('orders', ['id' => $doctor_order_id]);
    }
}
