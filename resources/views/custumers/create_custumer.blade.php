<form action="{{route('custumers.store')}}" method="POST">@csrf
<div class="modal-header">
@method('POST')
	<h4 class="modal-title"><i class="fas fa-user-circle"> {{__('Cá nhân')}}</i></h4>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		<span class="sr-only">Close</span>
	</button>
</div>
<div class="modal-body">
	Tên cá nhân: <input type="text" class="form-control">
	Điện thoại: <input type="text" class="form-control">
	Địa chỉ: <input type="text" class="form-control">
</div>
<div class="text-center">
	<button type="submit" class="btn btn-primary">Tạo mới</button>
</div>
<br>
</form>

<script>
	
</script>