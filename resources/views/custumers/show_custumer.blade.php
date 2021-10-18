@extends('layouts.master')
@section('content')
<div class="card">
	<div class="card-header row">
		<div class="col">
			<i class="fas fa-list-ul"> {{__('Thông tin khách hàng') }}</i> 
		</div>
		<div class="col text-right">
			<button class="btn btn-info" data-toggle="modal" data-target="#modal-1">
				<i class="fas fa-plus-circle"> Tạo mới</i>
			</button>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered table-hover" id="table_infocustumer">
			<thead class="thead-light text-center">
				<tr>
					<th>{{__('#')}}</th>
					<th><i class="fas fa-industry"></i> {{__('Tên công ty')}}</th>
					<th><i class="fas fa-users"></i> {{__('Đại diện')}}</th>
					<th><i class="fas fa-map-marked-alt"></i> {{__('Địa chỉ')}}</th>
					<th><i class="fas fa-calendar-alt"></i> {{__('Giao dịch cuối')}}</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td><i class="fas fa-building"></i> Công ty Bách Khoa 4 <br>
						 <a href="#">({{__('Chi tiết')}} <i class="fa fa-info-circle" aria-hidden="true"></i>)</a>
					</td>
					<td>
						<p><i class="fas fa-user"></i> Ngô Tuấn Vũ<br>
						<i class="fas fa-phone"></i> <a href="tel:0984131355">0984-131-355</a></p>
						</td>
					<td><i class="fas fa-map-pin"></i> 20C13 Ngõ 6 Nguyễn Văn Trỗi, Hà Đông, Hà Nội</td>
					<td>19/03/2021</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="modal fade" id="modal-1">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			@include('custumers.create_custumer')
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- extend js & bs -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<!-- script -->
<script>
	$(document).ready( function () {
	    $('#table_infocustumer').DataTable();
	} );
</script>
@endsection
