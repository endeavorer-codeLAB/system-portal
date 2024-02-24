<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Http\Requests\ProgramRequest;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function index()
    {
        return view('admin.programs.index');
    }

    public function create()
    {
        return view('admin.programs.create');
    }

    public function store(ProgramRequest $request)
    {
        $dateStamp = date("Ymdhi");

        if($request->hasFile('image'))
        {
            $image = $request->image;
            $name = $dateStamp.'.'.$image->getClientOriginalExtension();
            $programImage = Storage::putFileAs('',$image,$name);


           // $request->file('image')->move(public_path('storage/img'), 'sample');
        }

        $program = new Program();
        $program->description = $request->description;
        $program->link = $request->link;
        $program->image = $programImage;
        $program->save();
        return redirect()->back()->with('message','New Program has been added successfully');

    }
}
