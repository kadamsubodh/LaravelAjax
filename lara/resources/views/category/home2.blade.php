@extends('layout.app')
@section ('title', 'home')
@section ('headTitle','List Category')
@section('body')


<div class="row wrapper">	
<div class="container-fluid">
	<div class="col-md-12 Manage">
		<div class="row right1">
		<div class="manageBtn">
			<form name="frm" action="{{'deleteSelectedCategories'}}" method="POST" id="frm">
	{{csrf_field()}}
			<ul>
				<!-- <li>
					<a href="main.php">Create Category</a>
				</li>
				<li>
					<a href="deleteMultiCategory.php" onclick="document.getElementById('frm').submit(); return true;">Delete</a>
				</li> -->
				<li>
					<a href="/category/create">Create Category</a>
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
						<th width="45%">NAME</th>
						<th width="45%">Action</th>
					</tr>
					@foreach($categories as $cat)
						<tr>
						<td><input type="checkbox" value='{{$cat->id}}' class="checkboxall" name="check_list[]" form="frm"/></td>
						<td>{{$cat->cat_name}}</td>
						<td>
							<div class="row" style="margin-left:0px" id="">
								<!-- <a href="{{'/category/'.$cat->id}}" );"> -->
								<div class="btn">
									<button class="delicon" value="{{$cat->id}}">
								<!-- <form action="{{'/category/'.$cat->id }}" method="post" id="f1">	
									{{csrf_field()}}
									{{method_field('delete')}}
								<input type="hidden" value="DELETE" name="_method" form="f1"/>
								</form> -->
								</button>
							</div>
						
							<div class="btn">
								<a href="javascript:void(0);" class="editicon">
								<form action="{{'/category/'.$cat->id.'/edit'}}" method="post" id="f2">
									{{csrf_field()}}
									{{method_field('GET')}}
								<input type="hidden" value="GET" name="_method" form="f2"/>
								</form>
							</a>
							</div>
							
						</div>
							
					</td>
					</tr>
					@endforeach
				</table>
				{{$categories->links()}}
			</div>
		</div>
	</div>
</div>
	{{method_field('POST')}}
</form>

@endsection
