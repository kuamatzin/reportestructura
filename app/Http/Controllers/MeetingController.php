<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Meeting;

class MeetingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $meetings = Meeting::all();
        return view('meetings.index', compact('meetings'));
    }
    public function create()
    {
        return view('meetings.create');
    }

    public function store(Request $request)
    {
        Meeting::create($request->all());

        return redirect('/meetings');
    }

    public function edit(Meeting $meeting)
    {
        return view('meetings.edit', compact('meeting'));
    }

    public function update(Meeting $meeting, Request $request)
    {
        $meeting->update($request->all());

        return redirect('/meetings');
    }

    public function destroy(Meeting $meeting)
    {
        $meeting->delete();

        return redirect('/meetings');
    }
}
