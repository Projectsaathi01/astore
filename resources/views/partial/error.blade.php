@if(isset($err)&&count($err)>0)
<div class="alert alert-dismissable alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-label="close">
		<span aria-hidden="true">&times;</span>
	</button>
	
	<li><strong>{!! $err !!}</strong></li>
	
</div>
@endif