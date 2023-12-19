@extends('layouts.app')

@section('invoicepreview')
<style>
    .invoicepreview{
        border:1px solid #000;
    }
</style>

@endsection


@section('content')
    <div class="container-xl">
        <div class="invoicepreview p-4 m-md-5">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <h1 class="text-start">Invoice</h1>
                </div>
               <div class="col-md-6">
                    <img src="" alt="restaurant_logo">
               </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                   <p><b>{{$restoinfos[0]->address}} {{$restoinfos[0]->district}} {{$restoinfos[0]->barangay}}, {{$restoinfos[0]->city." City"}}</b></p>
                   <p>{{$restoinfos[0]->address}} {{$restoinfos[0]->district}} {{$restoinfos[0]->barangay}}, {{$restoinfos[0]->city." City"}}</p>
                </div>
               <div class="col-md-6">
                    <p><b>Invoice date:</b></p>
                    <p><b>Invoice number:</b></p>
                    <p><b>Invoice period:</b> {{$daterange}}</p>
               </div>
            </div>
            <p class="text-end"><b>Amount</b></p>
            <hr>
            <div class="row justify-content-between align-items-center mt-3">
                <div class="col-md-6">
                    <p class="text-start"><b>Number of Successful orders</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-end"><b>{{$orders->countorder}}</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-start"><b>Your revenue via {{$restoinfos[0]->name}}</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-end"><b>{{$orders->sumtotal}} PHP</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-start"><b>Already recieved amount</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-end"><b>0.00 PHP</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-start"><b>Outstanding amount</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-end"><b>{{$orders->sumtotal}} PHP</b></p>
                </div>
            </div>
            <hr>
            <div class="row justify-content-between align-items-center mt-3">
                <div class="col-md-6">
                    <p class="text-start"><b>Agency Fee base</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-end"><b>35,075.00 PHP</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-start"><b>Agency Fee Percentage</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-end"><b>26.79%</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-start"><b>Total Agency Fees</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-end"><b>9,396.66 PHP</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-start"><b>Net invoice total</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-end"><b>9,396.66 PHP</b></p>
                </div>
            </div>
            <hr>
            <div class="row justify-content-between align-items-center mt-3">
                <div class="col-md-6">
                    <p class="text-start"><b>Vat on agency fees and pandabox fees, if any &lpar;12.00%&rpar;</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-end"><b>1,127.71 PHP</b></p>
                </div>
            </div>
            <hr>
            <div class="row justify-content-between align-items-center mt-3">
                <div class="col-md-6">
                    <p class="text-start"><b>Fees & Adjustments</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-end"><b>9,905.56 PHP</b></p>
                </div>
            </div>
            <hr>
            <div class="row justify-content-between align-items-center mt-3">
                <div class="col-md-6">
                    <p class="text-start"><b>Gross invoice total</b></p>
                </div>
                <div class="col-md-6">
                    <p class="text-end"><b>20,429.93 PHP</b></p>
                </div>
            </div>
            <div class="row justify-content-between align-items-center mt-3 border border-dark">
                <div class="col-md-6">
                    <p class="text-start"><b>Total Amount paid out</b></p>
                    <p><i>Gross invoice total minus Outstanding amount</i></p>
                </div>
                <div class="col-md-6">
                    <p class="text-end"><b>2,946.07 PHP</b></p>
                </div>
            </div>
        </div>
    </div>
@endsection
