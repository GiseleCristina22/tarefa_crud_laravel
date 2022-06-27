<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        Book::create([
            'isbn' => $request->isbn,
            'name' => $request->name,
            'author' => $request->author,
            'price' => $request->price,
        ]);
        return "Livro salvo com sucesso";
    }

    public function show()
    {
        $book = Book::all();
        return view('book.list',['book' => $book]);
    }

    public function destroy($id)
    {
        $book=Book::findOrFail($id);
        $book->delete();
        return "Livro excluído com sucesso";
    }

    public function edit($id)
    {
        $book=Book::findOrFail($id);
        return view('book.edit',['book' => $book]);
    }

    public function update(Request $request, $id)
    {
        $book=Book::findOrFail($id);
        $book->update([
            'isbn' => $request->isbn,
            'name' => $request->name,
            'author' => $request->author,
            'price' => $request->price,
        ]);
        return "Livro atualizado com sucesso.";
    }
}
