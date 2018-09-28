@extends('layout.app')
@section ('title', 'home')
@section ('headTitle','List Product')
@section('body')



	<div class="container-fluid">
		<div class="row wrapper">
		<div class="col-md-12  Manage">
			<div class="row right1">
				<div class="manageBtn">
					<form name="frm" action="{{'deleteSelectedProducts'}}" method="POST" id="frm">
	{{csrf_field()}}
					<ul>
				<!-- <li>
					<a href="main.php">Create Category</a>
				</li>
				<li>
					<a href="deleteMultiCategory.php" onclick="document.getElementById('frm').submit(); return true;">Delete</a>
				</li> -->
					<li>
					<a href="/product/create">Add Product</a>
					</li>
					<li>
					<input type="submit" value="Delete Multiple" class="delBtn" form="frm"/>
					</li>

					</ul>
					</form>
				</div>

			</div>

			<div class="tableDiv" id="tableDiv">
				<table class="table table-bordered table-hover ">
					<tr>
						<th width='10%'><input type="checkbox" id="selectall"/></th>
						<th>Product NAME</th>
						<th>Image</th>
						<th>Price</th>
						<th>Catgeory Name</th>
						<th>Action</th>
					</tr>
					<?php $inc = 1; ?>
					@foreach($products as $product)
						<tr>
						<td><input type="checkbox" value='{{$product->id}}' class="checkboxall" name="check_list[]" form="frm"/></td>
						<td>{{$product->product_name}}</td>
						<td><div class="viewImage"><img src="{{'/storage/uploads/'.$product->product_img}}" class="viewImage"></div></td>
						<td style="text-align:right">Rs {{$product->product_price}}</td>
						<td>{{$product->category->cat_name}}</td>
						<td>
							<div class="row" style="margin-left:0px" id="">
								
								<div class="btn">
								<a href="javascript:void(0);" class="delicon">
								<form action="{{'/product/'.$product->id }}" method="post" id="{{'del'.$inc}}">	
									{{csrf_field()}}
									{{method_field('delete')}}
								<input type="hidden" value="DELETE" name="_method" form="{{'del'.$inc}}"/>
								</form>
								</a>
								</div>
						
								<div class="btn">
								<a href="javascript:void(0);" class="editicon">
								<form action="{{'/product/'.$product->id.'/edit'}}" method="post" id="{{'edit'.$inc}}">
									{{csrf_field()}}
									{{method_field('GET')}}
								<input type="hidden" value="GET" name="_method" form="{{'edit'.$inc}}"/>
								</form>
								</a>
								</div>
							
						</div>
							
					</td>
					</tr>
					<?php $inc++; ?>
					@endforeach
				</table>
				{{$products->links()}}
			</div>
		</div>
		</div>
		</div>
		{{method_field('POST')}}
</form>

@endsection
