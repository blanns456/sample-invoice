@extends('layouts.app')

@section('invoicepreview')
<style>
    .invoicepreview{
        border:1px solid #000;
    }
</style>

@endsection


@section('content')
    <div class="container-xl text-center">
        <div class="invoicepreview p-4 m-md-5">
            <h2 class="text-start">{{$restoinfos[0]->name}}</h2>
            <div class="row justify-content-between align-items-center">
                <div class="col-6 text-start">
                    <p><b>Owners Name:</b> Blanns Lapening</p>
                </div>
                <div class="col-6 text-start">
                    <p><b>Invoce number:</b> #12345312</p>
                    <p><b>Invoce period:</b> {{$daterange}}</p>
                </div>

                <div class="table-responsive-lg">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Menu Name</th>
                                <th scope="col">Peices</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>{{$order["resname"]}}</td>
                                <td>{{$order["qty"]}}</td>
                                <td>{{$order["totalprice"]}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
