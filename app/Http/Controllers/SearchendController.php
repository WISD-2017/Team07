<?php

namespace App\Http\Controllers;
use App\Ticketcar;
use DB;
use Illuminate\Http\Request;

class SearchendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查詢票價
        $sqlprice=DB::table('ticketcars')
            ->join('price', function($join)
            {
                $join->on('ticketcars.start', '=', 'price.SID1')
                    ->on('ticketcars.arrive', '=', 'price.SID2')
                    ->select('price.price');
            })
            ->orderBy('created_at','DESC')->take(1)->get();
        $pricedata = compact('sqlprice');

        return View('/searchend')
               ->with($pricedata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ticketcar::create($request->all());
        return redirect()->route('searchend.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}