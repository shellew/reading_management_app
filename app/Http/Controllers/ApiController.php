<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookMaster;

class ApiController extends Controller
{
    // ユーザーが登録した本のデータを取得してリストで表示する関数
    // 引数:$user_id
    // 返り値:BookMasterから取得したデータをjson形式で返す

    // ①引数($user_id)を定める
    // ②引数にuser_idを代入する
    // ③user_idが存在すれば、BookMasterモデルから書籍のデータを取得する
    // ④json形式で取得したデータを返す
  
    // public function getAllBooks() {
    //   $user_id = 'user_id';
    //   $user_id = 2;
    public function getAllBooks(Request $request) {
      // $user_id = $request->user_id;

      // TODO: 一時的に仮の値を代入する
      $user_id = 2;

      if (BookMaster::where('user_id', $user_id)->exists()) {
        $book_masters = BookMaster::where('user_id', $user_id)->get()->toJson(JSON_PRETTY_PRINT);
        return response($book_masters, 200);
      } else {
        return response()->json([
          "message" => 'ユーザーID not found'
        ], 404);
      }
    }
    
    public function createBook(Request $request) {
      $book_master = new BookMaster;
      $book_master->user_id = $request->user_id;
      $book_master->title = $request->title;
      $book_master->author = $request->author;
      $book_master->isbn = $request->isbn;
      $book_master->register_date = $request->register_date;
      $book_master->memo = $request->memo;
      $book_master->status = $request->status;
      $book_master->save();

      return response()->json([
          "message" => "book record created"
      ], 201);
    }
    
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
           
          //  ①idが存在すれば、BookMaster::find($id)を実行しモデルの値($id)を返す
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
