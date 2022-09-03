<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReadTime;

class ReadTimeController extends Controller
{
    public function createReadTime(Request $request) {
        $read_time = new ReadTime;
        $read_time->book_id = $request->book_id;
        $read_time->read_date = $request->read_date;
        $read_time->read_minute = $request->read_minute;
        $read_time->user_id = $request->user_id;
        $read_time->save();

        return response()->json([
            "message" => "readtime record created"
        ], 201);
    }
}
