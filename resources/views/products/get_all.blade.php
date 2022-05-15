@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btn-success" href="{{ route('products/register') }}" role="button"> {{ __('New products') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('products LIST') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
 ID
 </th>
<th>
 name
 </th>
<th>
 unit
 </th>
 <th>price</th>
 <th>quantity</th>
 </tr>
 </thead>
 <tbody>
 @foreach($products as $products)
 <tr>
 <td> {{ $products->id }}</td>
 <td> {{ $products->name }}</td>
 <td> {{ $products->unit }}</td>
 <td> {{ $products->price }}</td>
 <td> {{ $products->quantity }}</td>
 <td>
 </td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection