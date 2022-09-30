<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookMaster;
use Carbon\Carbon;

class ApiController extends Controller
{
    // ユーザーが登録した本のデータの一覧を取得する関数
      // 引数:$user_id
      // 返り値:BookMasterから取得したデータをjson形式で返す

      // ①引数($user_id)を定める
      // ②引数にuser_idを代入する
      // ③user_idが存在すれば、BookMasterモデルから書籍のデータを取得する
      // ④json形式で取得したデータを返す
    
      public function getAllBooks() {
        $user_id = 'user_id';
        $user_id = 4;
        if (BookMaster::where('user_id', $user_id)->exists()) {
          $book_masters = BookMaster::where('user_id', $user_id)->get()->toJson(JSON_PRETTY_PRINT);
          return response($book_masters, 200);
        } else {
          return response()->json([
            "message" => 'ユーザーID not found'
          ], 404);
        }
      }

      // 変更後
      // 空のデータがあってもデータを作成する
      // public function createBook(Request $request) {
      //   $book_master = new BookMaster;
      //   $book_master->user_id = is_null($request->user_id) ? $book_master->user_id : $request->user_id;
      //   $book_master->title = is_null($request->title) ? $book_master->title : $request->title;
      //   $book_master->author = is_null($request->author) ? $book_master->author : $request->author;
      //   $book_master->isbn = is_null($request->isbn) ? $book_master->isbn : $request->isbn;
      //   $book_master->register_date = is_null($request->register_date) ? $book_master->register_date : $request->register_date;
      //   $book_master->memo = is_null($request->memo) ? $book_master->memo : $request->memo;
      //   $book_master->status = is_null($request->status) ? $book_master->status : $request->status;
      //   $book_master->save();

      //   return response()->json([
      //       "message" => "book record created"
      //   ], 201);
      // }
    
      // 変更前
      public function createBook(Request $request) {
        // $user_id = "user_id";  //変更①
        $book_master = BookMaster::find($user_id);
        $cb = Carbon::now();
        $book_master = new BookMaster;
        // user_idをquery文字列から取得
        $book_master->user_id = $request->query("user_id");  //変更① または $book_master->user_id = $request->query($user_id); 
        $book_master->title = $request->title;
        $book_master->author = is_null($request->author) ? $book_master->author : $request->author;
        //今日のデータを取得
        $book_master->register_date = $request->$cb;  //変更予定②
        $book_master->memo = is_null($request->memo) ? $book_master->memo : $request->memo;
        $book_master->status = $request->status;
        $book_master->save();

        return response()->json([
            "message" => "book record created"
        ], 201);
      }
    
      // 編集ページで本のデータを表示する
      // 引数: $id
      // 返り値: $book_masteと200レスポンス
      public function getBook($id) {
        if(BookMaster::where('id', $id)->exists()) {
          $book_master = BookMaster::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
          return response($book_master, 200);
        } else {
          return response()->json([
            "message" => "Book not found"
          ], 404);
        }
      }
    
      // BookMasterのレコードを確認し、存在していなければ値を新規登録し、存在していれば値を更新する関数
      //   引数:$id
      //   返り値:レスポンスをjson形式にして記入し、レコードが存在していればメッセージと200を返し、存在していなければメッセージと404を返す
           
          // ①idが存在すれば、BookMaster::find($id)を実行しモデルの値($id)を返す
          // ②リクエストを受け取ると、user_id、title、author、isbn、register_date、memo、statusがnullかどうかチェックする。
          // nullの場合は、データベースのレコードを既存の値に置き換える。nullでない場合はnullが新い値として渡される。

          
      public function updateBook(Request $request, $id) {
        if(BookMaster::where('id', $id)->exists()) {
          $book_master = BookMaster::find($id);
          $book_master->user_id = is_null($request->user_id) ? $book_master->user_id : $request->user_id;
          $book_master->title = is_null($request->title) ? $book_master->title : $request->title;
          $book_master->author = is_null($request->author) ? $book_master->author : $request->author;
          $book_master->isbn = is_null($request->isbn) ? $book_master->isbn : $request->isbn;
          $book_master->register_date = is_null($request->register_date) ? $book_master->register_date : $request->register_date;
          $book_master->memo = is_null($request->memo) ? $book_master->memo : $request->memo;
          $book_master->status = is_null($request->status) ? $book_master->status : $request->status;
          $book_master->save();

          return response()->json([
            "message" => "records updated successfully"
          ], 200);
        } else {
          return response()->json([
            "message" => "Book not found"
          ], 404);
        }
      }
    
      public function deleteBook($id) {
        if(BookMaster::where('id', $id)->exists()) {
          $book_master = BookMaster::find($id);
          $book_master->delete();

          return response()->json([
            "message" => "records deleted"
          ], 202);
      } else {
        return response()->json([
          "message" => "Book not found"
        ], 404);
      }
    }
}
