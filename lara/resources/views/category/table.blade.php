<div class="flash-message" id="m1">
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
</div>
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
									<a href="javascript:void(0);" class="delicon" data-id="{{$cat->id}}">
								<!-- <form action="{{'/category/'.$cat->id }}" method="post" id="f1">	
									{{csrf_field()}}
									{{method_field('delete')}}
								<input type="hidden" value="DELETE" name="_method" form="f1"/>
								</form> -->
								</a>
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
				<ul class="pagination text-center paginationBtn" id="pagination">
				<li id="0"><a href="javascript.void(0)">First</a></li>
					@for($i= 1; $i<=($page);$i++)
					<li id="{{$i}}"><a href="javascript.void(0)">{{$i}}</a></li>
					@endfor
				<li id="{{$page}}"><a href="javascript.void(0)">Last</a></li>
			</ul>
	<script>
			
		$(document).ready(function(){
			$("#pagination li").on('click',function(e){
			 		e.preventDefault();
			        var pageNum = this.id;
					$(this).addClass('active');
			        ajax_index(pageNum);
			 });

			$(".checkboxall").click(function(){
				var v1=$('.checkboxall').length;
				var check=$('.checkboxall').filter(':checked').length;
				if(check==v1)
				{

				$('#selectall').prop("checked", true);
				}
				else{
				$('#selectall').prop("checked", false);
				}

			});

			$("#selectall").click(function(){
        //alert("just for check");
       			 if(this.checked){
            		$('.checkboxall').each(function(){
              		  this.checked = true;
           			 })
        		}
        		else{
           		 	$('.checkboxall').each(function(){
                	this.checked = false;
            		})
        		}
    		});
		});
		
	</script>