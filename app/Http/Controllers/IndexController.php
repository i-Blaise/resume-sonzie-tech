<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(): View
    {
        return view('index', [
            'about' => About::findOrFail(1),
            'portfolios' => Portfolio::all()->sortDesc(),
            'contact' => Contact::findOrFail(1)
        ]);
    }

    public function portfolio($id): View
    {
        return view('portfolio', [
            'portfolio' => Portfolio::findOrFail($id)
        ]);
    }

    public function contactMessages(Request $request){
        dd($request);
        $request->validate([
            'name' => 'required|image',
            'email' => 'email|required',
            'subject' => 'required|max:100',
            'message' => 'required|max:4000'
        ]);

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect()->back()->with('success', 'Cause Created Successfully');
    }
}
