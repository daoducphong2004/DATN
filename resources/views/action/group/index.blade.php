@extends('user.layout.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					Nhóm
					<div style="float: right">
						<a href="https://ln.hako.vn/action/group/create">[Thêm]</a>
					</div>
				</div>

				<div class="panel-body">
					
					<div style="float: right; margin-bottom: 20px">
	<form class="form-inline" method="post">
		<input type="hidden" name="_token" value="yDNzShrYudbx2YHOo8CZ8noNuzNgylrJLGNpEJJ4"> 
       <div class="input-group">
          <input style="width: 300px" type="text" class="form-control" name="keywords" placeholder="Tên nhóm" id="keywords_input" value="">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit" value="Tìm kiếm">Tìm kiếm</button>
          </span>
        </div><!-- /input-group -->							
	</form>
</div>

<table class="table">
		<tr>
		<td>Không có nhóm nào</td>
	</tr>
	</table>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection