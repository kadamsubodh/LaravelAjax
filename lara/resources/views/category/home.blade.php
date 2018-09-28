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
			<div class="flash-message" id="m1">
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
</div>
			<div class="tableDiv" id="tableDiv">

			</div>
			
		</div>
	</div>
</div>
	

@endsection
