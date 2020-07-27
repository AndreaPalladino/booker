<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('id','desc')->get();

        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('book.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
       /* dd($request->all()); */
       
       $categories = $request->input('tag_id');
       
        $book = new Book();

        
        $book->title=$request->input('title');
        $book->author=$request->input('author');
        $book->img=$request->file('img')->store('public/img');
        $book->pdf=$request->file('pdf')->store('public/pdf');
        $book->plot=$request->input('plot');
        $book->user_id=Auth::id();
        
        $book->save();

        

        foreach($categories as $category) {
            $book->categories()->attach($category);
        }

        /* foreach($request->input() as $key=>$input){
            if(is_numeric($key)){
                $book->categories()->attach($input);
            }
        } */
        

       return redirect()->back()->with('message','Book Uploaded Correctly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('book.show', ['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('book.edit', compact('book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->title=$request->input('title');
        $book->author=$request->input('author');
        $book->img=$request->file('img')->store('public/img');
        $book->pdf=$request->file('pdf')->store('public/pdf');
        $book->plot=$request->input('plot');
        $book->user_id=Auth::id();
        $book->update();
        foreach($request->input() as $key=>$input){
            if(is_numeric($key)){
                $book->categories()->attach($input);
            }
        }

        return redirect(route('book.index', ['book'=>$book]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect(route('book.index'));
    }
}
