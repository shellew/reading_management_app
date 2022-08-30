<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookMaster;

class ApiController extends Controller
{
    public function getAllBooks() {
        $book_masters = BookMaster::get()->toJson(JSON_PRETTY_PRINT);
        return response($book_masters, 200);
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
        // logic to delete a book record goes here
      }
}
