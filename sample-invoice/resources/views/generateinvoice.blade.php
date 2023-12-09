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
                    <p class="text-end"><b>106</b></p>
                </div>
            </div>
        </div>
    </div>
@endsection
