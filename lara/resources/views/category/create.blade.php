@extends('layout.app')
@section ('title', 'home')
@section('headTitle','Create Category')
@section('body')
<div class="container-fluid marginTopBottom">
<form action="/category/@yield('editId')" method="POST" name="frm">
{{csrf_field()}}
@section('editMethod')
@show()
	<div class="row wrapper border1 paddingTopBottom">
		<div class="row leftMargin">
			<div class="col-md-6 form-group">
				<span class="categoryText1 left">Category Name</span>
			</div>
		</div>
		<div class="row leftMargin">	
			<div class="col-md-6 form-group">
				<input type="text" class=" form-control" name="categoryName" id="categoryName" placeholder="Category Name" value="@yield('edit_catname')"/>
			</div>
		</div>
	
		<div class="row center hr">
			<div class="categoryBtn col-md-12 ">
				<input type="submit" class="btn btn-success btn-lg" value="submit" id="submit"/>
				<a class="btn btn-success btn-lg" href="{{ route('cancel') }}">Cancel</a>
			</div>
		</div>
	</div>

</form>
</div>
@endsection