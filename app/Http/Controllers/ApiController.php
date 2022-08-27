<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookMaster;

class ApiController extends Controller
{
    public function getAllBooks() {
        // logic to get all books goes here
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
            "message" => "student record created"
        ], 201);
      }
    
      public function getBook($id) {
        // logic to get a book record goes here
      }
    
      public function updateBook(Request $request, $id) {
        // logic to update a book record goes here
      }
    
      public function deleteBook($id) {
        // logic to delete a book record goes here
      }
}
