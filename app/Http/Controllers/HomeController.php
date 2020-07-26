<?php

namespace App\Http\Controllers;

use App\Book;
use App\Contact;
use App\Mail\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /*  public function __construct()
    {
        $this->middleware('auth');
    }
 */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        return view('home', compact('user'));
    }

    public function contact(){
        return view('contact');
    }

    public function submit(Request $request){

       $contact = new Contact();

       $name=$request->input('name');
       $email=$request->input('mail');
       $phone=$request->input('phone');

       $contact=compact('name','email','phone');
       
       Mail::to($email)->send(new ContactRequest($contact));

       return redirect(route('thank'));
    }

    public function thanks(){
        return view('thank');
    }

    public function profile(){
         
       
         $user=Auth::user();
         $books = $user->books()->get();

        return view('profile', compact('user','books'));
    }
}
