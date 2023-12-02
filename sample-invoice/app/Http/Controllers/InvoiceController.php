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
            ->select('id', DB::raw("concat(DATE_FORMAT(date_from, '%Y-%m-%d'), ' - ', DATE_FORMAT(date_to, '%Y-%m-%d'))AS formatted_date_created"))
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
            'startDate' => 'required ',
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
}
