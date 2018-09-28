@extends('product.createProduct')
@section('editFormMethod')
{{method_field('PUT')}}
@endsection
@section ('headTitle','Edit Product')
@section('product_name',$products->product_name)
@section('product_price',$products->product_price)
@section('image')
<div class="col-md-6">
<img src="{{'/storage/uploads/'.$products->product_img}}" class="viewImage" id="product_image">
</div>
@endsection
@section('cat_id',$products->category->id)
@section('cat_name', $products->category->cat_name)
@section('editId',$products->id)
@section('filename',$products->product_img)