<?php

namespace App\Http\Controllers;
use App\Ticket;
use App\Ticketcar;
use Illuminate\Http\Request;
use DB;
use Auth;
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login_name = Auth::user()->name;

        $posts=Ticketcar::orderBy('created_at','DESC')->take(1)->get();
        $data=['posts'=>$posts];

        //$pos=Ticket::orderBy('created_at','DESC')->take(1)->get();
        $pos=Ticket::orderBy('created_at','DESC')->where('name', $login_name)->take(1)->get();
        $data4=['pos'=>$pos];

        $ticketnum = DB::table('tickets')
            ->select('quantity')
            ->get();
        $data2=['ticketnum'=>$ticketnum];

        $money = DB::table('tickets')
            ->select('price')
            ->get();
        $data3=['money'=>$money];
        //
        $station1=DB::table('ticketcars')
            ->join('station', function($join)
            {
                $join->on('ticketcars.start', '=', 'station.SID1')
                    ->orOn('ticketcars.arrive', '=', 'station.SID2')
                    ->select('stationname.stationname');
                //->on('tests.arrive', '=', 'station.SID2')
                // ->select('stationname.stationname');
            })
            ->get();
        $station = compact('station1');
        //訂購人


        $name=Ticket::orderBy('created_at','DESC')->take(1)->get();
        $data6=['name'=>$name];



        return View('/ticket')
            ->with($data)
            ->with($data2)
            ->with($data3)
            ->with($data4)
            ->with($data6)

            ->with($station);
    }

    public function tests()
    {
       $login_name = Auth::user()->name;
        $pos=Ticket::orderBy('created_at','DESC')->where('name', $login_name)->take(1)->get();
        $data4=['pos'=>$pos];
        return View('/test')->with($data4);

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
        Ticket::create($request->all());
        return redirect()->route('ticket.index');
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
        Ticket::destroy($id);
        Ticketcar::destroy($id);
        return redirect()->route('ticket.index');
    }
    public function back($id)
    {
        Ticketcar::destroy($id);
        Ticket::destroy($id);
        return redirect()->route('welcome.index');
    }
}
