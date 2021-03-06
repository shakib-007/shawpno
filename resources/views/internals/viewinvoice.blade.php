@extends('layouts.layout')

@section('content')
<hr>
<h2 style="color: rgb(18, 25, 119)">Invoice</h2>
<hr>
<table style="width:50%" class="table table-striped" >
    <tr>
        <td>Invoice Id : </td>
        <td>{{$invoices->id}}</td>
    </tr>
    <tr>
        <td>Invoice Number : </td>
        <td>{{$invoices->invoice_number}}</td>
    </tr>
    <tr>
        <td>Customer Email : </td>
        <td>{{$invoices->customer_email}}</td>
    </tr>
    <tr>
        <td>Payment Method : </td>
        <td>{{$invoices->payment_method}}</td>
    </tr>
    <tr>
        <td>Total : </td>
        <td>{{$invoices->total}} Taka</td>
    </tr>
    <tr>
        <td>Date: </td>
        <td>{{$invoices->date}}</td>
    </tr>
    
</table>
@php
    $serial = 0;
@endphp
<hr>
<table style="width:100%" class="table table-striped">
    <tr>
        <th>SL</th>
        <th>Products Name</th>
        <th>SKU</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Selling Price</th>
        <th>Sub total</th>
       
    </tr>
    @php
        $totalpurchaseprice = 0;
    @endphp
    @foreach ($sold_items as $sold_item)
        <tr>
        
            <td>{{++$serial}}</td>
            <td>{{$sold_item->name}}</td>
            <td>{{$sold_item->sku}}</td>
            <td>{{$sold_item->description}}</td>
            <td>{{$sold_item->quantity}}</td>
            <td>{{$sold_item->selling_price}}</td>
            <td>{{$sold_item->quantity * $sold_item->selling_price}}</td>
            
            {{-- <td>{{$sold_item->profit}}</td>
            @php
                $totalpurchaseprice += $sold_item->profit;
            @endphp --}}
        </tr>
    @endforeach
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <th>Grand Total  =  </th>
        <td>{{$invoices->total}}</td>
        {{-- <td>{{$sold_item->profit}}</td> --}}
        {{-- <td>{{$totalpurchaseprice}}</td> --}}
    </tr>
</table>
<center> 
    <a href="{{route('viewpdf',$invoices->id)}}" class="btn btn-info ">View Invoice</a>
    <a href="{{route('downloadInvoice',$invoices->id)}}" class="btn btn-info ">Download Invoice</a>
</center>

@endsection