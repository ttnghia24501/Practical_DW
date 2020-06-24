<?php

namespace App\Http\Controllers;

use App\news;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view("form");
    }
    public function show()
    {
        return view("notification");
    }
    public function save(Request $request)
    {
        $request->validate([
            "feedback" => "required",
            "name"=>"required",
            "email"=>"required",
            "telephone"=>"required"
        ]);
        try {
            news::create([
                "feedback" => $request->get("feedback"),
                "name" => $request->get("name"),
                "email" => $request->get("email"),
                "telephone" => $request->get("telephone")
            ]);
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to('StudentController@show');
    }
}
