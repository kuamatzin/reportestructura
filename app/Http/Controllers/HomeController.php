<?php

namespace App\Http\Controllers;

use App\Meeting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{

    protected $months = [
        'Enero',
        'Febrero',
        'Marzo',
        'Abril',
        'Mayo',
        'Junio',
        'Julio',
        'Agosto',
        'Septiembre',
        'Octubre',
        'Noviembre',
        'Diciembre'
    ];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats = new Meeting();
        $month = Input::get('month');
        $month = $month ? $month : Carbon::now()->month;
        $month_text = $this->months[$month - 1];

        return view('home', compact('stats', 'month', 'month_text'));
    }


    public function stats($municipality, $month)
    {
        $stats = Meeting::where('municipality', $municipality)->whereMonth('date', $month)->get();
        
        return view('meetings.stats', compact('stats', 'month', 'municipality'));
    }
}
