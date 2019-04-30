<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sparepart;

class HomeController extends Controller
{
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
        $spareparts = Sparepart::paginate(9);
        return view('home', compact('spareparts'));
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        $spareparts = Sparepart::where('name', 'LIKE', '%' . $query . '%')->paginate(9);

        return view('search_result', compact('spareparts', 'query'));
    }
}
