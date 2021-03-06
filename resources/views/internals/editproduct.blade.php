@extends('layouts.layout')

@section('content')
<hr>
<h2 style="color: rgb(18, 25, 119)">Edit Product</h2>
<form action="{{route('update',$product->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <hr>
    <table align="center">
        {{-- <tr>
            <td><hr></td>
            <td><hr></td>
        </tr> --}}
        <tr>
            <td>Name : </td>
            <td><input type="text" name="name" id="" value="{{$product->name}}" class="form-control"></td>
        </tr>
        <tr>
            <td>Sku : </td>
            <td><input type="number" name="sku" id="" value="{{$product->sku}}" class="form-control"></td>
        </tr>
        <tr>
            <td>Description : </td>
            <td><input type="text" name="description" id="" value="{{$product->description}}" class="form-control"></td>
        </tr>
        <tr>
            <td>Available Quantity : </td>
            <td><input type="number" name="availablequantity" id="" value="{{$product->available_quantity}}" class="form-control"></td>
        </tr>
        <tr>
            <td>Purchase Price : </td>
            <td><input type="number" name="purchaseprice" id="" value="{{$product->purchase_price}}" class="form-control"></td>
        </tr>
        <tr>
            <td>Update Product Image : </td>
            <td><input type="file" id="" name="image" class="form-control"></td>
        </tr>
       <tr>
        <td><hr></td>
        <td><hr></td>
       </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" class="btn btn-success" value="UPDATE PRODUCT">
            </td>
           
        </tr>
       
    </table>
    <hr>
    
</form>
@endsection