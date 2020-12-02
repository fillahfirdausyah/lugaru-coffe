@extends('layouts.admin')

@section('title', 'admin-event')
@section('content')
<div class="row justify-content-center">
	<h1>Event</h1>
</div>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="item">
	<div class="item-head text-center">
		<p>Jumlah Event saat ini</p>
		<h1>{{ $eventCount }}</h1>
		<a href="/pengurus/inputevent"><button class="btn btn-success">Tambah Event</button></a>
	</div>
	<br>

	<table>
		<tr>
			<th>Id.</th>
			<th>Judul</th>
			<th>Deskripsi</th>
			<th>Waktu</th>
			<th>Aksi</th>
		</tr>
		@foreach($event as $e)
		<tr>
			<td>{{ $e->id }}</td>
			<td>{{ $e->title }}</td>
			<td>{{ $e->content }}</td>
			<td>{{ $e->date }} , {{ $e->clock }}</td>
			<td>
			<div class="d-flex">
				<form method="get" action="{{ '/pengurus/editevent/'.$e->id }}">
					@csrf
					<button class="btn-sm btn-success"> Ubah </button> 
				</form>
				<button type="button" class="btn-sm btn-danger" data-toggle="modal" data-target=".myModal{{$e->id}}"> Hapus </button>
				<!-- Modal -->
				<div id="myModal" class="modal myModal{{$e->id}}" tabindex="-1" role="dialog">
				  	<div class="modal-dialog" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        	<h5 class="modal-title">Hapus</h5>
				        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          	<span aria-hidden="true">&times;</span>
				        	</button>
				      		</div>
				      		<div class="modal-body">
				        	<p>Apakah anda Yakin untuk menghapus data event dengan id={{ $e->id }}?</p>
				      	</div>
				      	<div class="modal-footer">
							<form method="post" action="{{ '/pengurus/deleteevent/'.$e->id }}">
								@method('delete')
								@csrf
								<button class="btn-sm btn-danger">Hapus</button>
							</form>
				        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				      	</div>
				    	</div>
				  </div>
				</div>
			</div>
			</td>
		</tr>
		@endforeach
	</table>

</div>
@endsection