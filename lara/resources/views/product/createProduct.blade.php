@extends('layout.app')
@section ('title', 'product')
@section('headTitle','Add Product')
@section('body')
<div class="container-fluid marginTopBottom">
<form action="/product/@yield('editId')" method="POST" name="frm" id="frm1" enctype="multipart/form-data">
{{csrf_field()}}
@section('editFormMethod')
@show()
	<div class="row wrapper border1 paddingTopBottom">
			<div class="row leftMargin">
				<div class="col-md-6 form-group">
					<span class="categoryText1 ">Product Name</span>
				</div>
			</div>
			<div class="row leftMargin">
				<div class="col-md-6 form-group">
					<input type="text" class="categoryNameBox1 left form-control b" name="productName" id="productName" placeholder="Product Name" value="@yield('product_name')"/><span class="error" id='nameError'></span>
				</div>
			</div>
		
			<div class="row leftMargin">
				<div class="col-md-6 form-group">
					<span class="categoryText1 left">Product Price</span>
				</div>
			</div>
			<div class="row leftMargin">	
					<div class="col-md-6 form-group">
						<input type="text" class="categoryNameBox1 left form-control b" name="productPrice" id="productPrice" placeholder="Product Price" value="@yield('product_price')"/><span class="error" id='priceError'></span>
					</div>
			</div>
		
			<div class="row leftMargin">
					<div class="col-md-6 form-group">
						<span class="categoryText1 left">Upload Image</span>
					</div>
			</div>
			<div class="row leftMargin">	
				<div class="col-md-6 form-group ">
					<input type="file" class="categoryNameBox1 left form-control red" name="file" id="file" value="@yield('filename')"/>
					<span class="error" id='imgError'></span>
				</div>
				
					@section('image')
					@show

			</div>
			<div class="row leftMargin">
				<div class="col-md-6 form-group">
					<span class="categoryText1 left">Select Category</span>
				</div>
				
			</div>
			<div class="row leftMargin">	
				<div class="col-md-6 form-group styled-select">
							
					<select class="categoryNameBox1 left form-control " name="select" id="select">
						<option value="@yield('cat_id')">@yield('cat_name')</option>
						@foreach(App\category::all() as $category)
						<option value="{{$category->id}}">{{$category->cat_name}}
						</option>
						@endforeach
					</select>
							
				</div>
				<span class="error" id='selectError'></span>	

			</div>
		<div class="row center hr">
			<div class="categoryBtn col-md-12 ">
				<input type="submit" class="btn btn-success btn-lg" value="submit" id="submit1"/>
			</div>
		</div>
	</div>
</form>
</div>
@endsection