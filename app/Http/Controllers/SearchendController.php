<?php

namespace App\Http\Controllers;
use App\Ticketcar;
use App\User;
use DB;
use Illuminate\Http\Request;
use Auth;
class SearchendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //查詢tests資料表資料
        $posts=Ticketcar::orderBy('created_at','DESC')->take(1)->get();
        $data=['posts'=>$posts];

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

        //查詢車次
        //南下
        $selectstanum1 = DB::table('table 4')
            ->select('stationnumber',DB::raw('count(*) as num'),'detime')
            ->join('ticketcars', function($join)
            {
                $join->on('table 4.SID', '=', 'ticketcars.start' )
                    ->orOn('table 4.SID', '=', 'ticketcars.arrive');
            })
            ->groupby('stationnumber')
            ->get();

        //北上
        $selectstanum2 = DB::table('table 3')
            ->select('stationnumber',DB::raw('count(*) as num'),'detime')
            ->join('ticketcars', function($join)
            {
                $join->on('table 3.SID', '=', 'ticketcars.start' )
                    ->orOn('table 3.SID', '=', 'ticketcars.arrive');
            })
            ->groupby('stationnumber')
            ->get();

        $selectstanumdata1 = compact('selectstanum1');
        $selectstanumdata2 = compact('selectstanum2');
        //訂購人
        //$name = DB::table('users')
            //->select('name')->take(1)
            //->get();
       // $data5=['name'=>$name];
        $name=Auth::user()->name;
        $data5=['name'=>$name];

        return View('/searchend')
               ->with($data)
               ->with($pricedata)
               ->with($selectstanumdata1)
               ->with($selectstanumdata2)
               ->with($data5);
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
