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
                        <h4 class="card-title">{{$restaurant->resname}}</h4>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-8 invoicepreview p-5">
                <h4>blanns Resto</h4>
                <div class="row justify-content-between">
                    <div class="col-6">
                        <br>
                        <p class="my-auto">Purok 7 Gordonas Vill Mangagoy Bislig City</p>
                    </div>
                    <div class="col-6 text-end">
                        <p><b>Invoice Date:</b> 12/32/43</p>
                        <p><b>Invoice Number:</b> #12345132</p>
                        <p><b>Invoce Period</b> #12345132</p>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped-columns
                    table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Column 1</th>
                                <th>Column 2</th>
                                <th>Column 3</th>
                            </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <td>Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                </tr>
                                <tr>
                                    <td>Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                </tr>
                            </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection




