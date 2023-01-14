<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $query = $request->query();

        $queryParams = "";
        foreach($query as $key => $item) {
            if($queryParams == "") {
                $queryParams = $queryParams . "?" . $key . "=" . $item;
            } else {
                $queryParams = $queryParams . "&" . $key . "=" . $item;
            }
        }

        $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json' . $queryParams);
        $jobs = $response->json();

        $description = $query['description'] ?? "";
        $location = $query['location'] ?? "";
        $type = $query['type'] ?? "";

        return view('home', compact('jobs', 'description', 'location', 'type'));
    }

    public function show($id) 
    {
        $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions/' . $id);
        $detailJob = $response->json();
        return view('detail', compact('detailJob'));
    }
}
