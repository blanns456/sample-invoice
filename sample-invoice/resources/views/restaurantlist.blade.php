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
        <div class="row justify-content-center align-items-center m-3">
            <div class="col-md-4">
                @foreach ($restaurants as $restaurant)
                <div class="card text-center mb-3">
                  <div class="card-body">
                        <h4 class="card-title"><a href="{{ route('invoices.generateinvoice', ['resid'=>$restaurant->id, 'date_from'=> $restaurant->date_from, 'date_to' => $restaurant->date_to]) }}" target="_blank">{{$restaurant->resname}}</a></h4>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection




