<?php

namespace App\Http\Controllers;

use App\Models\Invoices;
use App\Models\Restaurants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Throwable;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = DB::table('invoices')
            ->select('id', 'date_from', 'date_to', DB::raw("concat(DATE_FORMAT(date_from, '%Y-%m-%d'), ' - ', DATE_FORMAT(date_to, '%Y-%m-%d'))AS formatted_date_created"))
            ->groupBy("date_from")
            ->orderByDesc("date_from")
            ->get();

        return view("invoices", ["invoices" => $invoices]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = Validator::make($request->all(), [
            'startDate' => 'required',
            'endDate' => 'required',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        $restaurants = DB::table('restaurants')
            ->select('id')
            ->get();


        foreach ($restaurants as $restaurant) {
            $invoice = new Invoices();
            $invoice->date_from = $request->input('startDate');
            $invoice->date_to = $request->input('endDate');
            $invoice->date_created = Carbon::now();
            $invoice->restaurant_id = $restaurant->id;
            $resid = $restaurant->id;
            // $ordersinformation = DB::select("SELECT * FROM `orders` where id = '$resid'");
            $invoice->save();
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function invoices($date_from, $date_to)
    {
        $date_from = explode(" ", $date_from);
        $date_from = $date_from[0];
        $date_to = explode(" ", $date_to);
        $date_to = $date_to[0];
        // dd([$date_from, $date_to]);
        $restaurants = DB::select("SELECT restaurants.id, restaurants.name as resname , invoices.date_from as date_from , invoices.date_to as date_to FROM `invoices` join restaurants on restaurants.id = invoices.restaurant_id WHERE invoices.date_from = '$date_from' and date_to = '$date_to'");
        // dd($restaurant);
        return view("restaurantlist", ["restaurants" => $restaurants]);
    }

    public function generateinvoices($resid, $date_from,  $date_to)
    {
        $restaurantinformation = DB::select("SELECT * FROM `restaurants` where id = '$resid'");
        // $orders = array();
        $getorders = DB::select("SELECT count(*) as countorder , sum(`grand_total`) as sumtotal FROM `orders` where restaurant_id = '$resid'");


        // dd($orders);

        // dd($orders, array_search('1-pc Chicken w/ Fries Small Meal', $orders));
        // dd(array_search('1-pc Chicken w/ Fries Small Meal', $orders));

        $date_range = explode(" ", $date_from)[0] . " - " . explode(" ", $date_to)[0];
        return view("generateinvoice", ["restoinfos" => $restaurantinformation, "daterange" => $date_range, 'orders' => $getorders[0]],);
    }
}
