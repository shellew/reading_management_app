<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReadTime;

class ReadTimeController extends Controller
{
    //book_idのread_minuteの合計を出力
    //SQL:select sum(read_minute) from read_times where book_id = 5;
    //①ルーティングを作成
    //②関数(getReadTime)を作成
    //③$resultに値を出力
    public function getReadTime() {
        $result = ReadTime::where('book_id', 8)
                ->selectRaw('sum(read_minute) as totalTime')
                ->get();
        
        return response($result, 200);
    }


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
