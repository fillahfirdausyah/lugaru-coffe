@extends('layouts.admin')

@section('title', 'admin-feedback')
@section('content')
<div class="row justify-content-center">
	<h1>Feedback</h1>
</div>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
	<table>
		<tr>
			<th>Id.</th>
			<th>E-mail</th>
			<th>Feedback</th>
			<th>Aksi</th>
		</tr>

@foreach($fb as $f)
		<tr>
			<td>{{ $f->id }}</td>
			<td>{{ $f->email }}</td>
			<td>{{ $f->feedback }}</td>
			<td>
			<div class="d-flex">
				<button type="button" class="btn-sm btn-danger" data-toggle="modal" data-target=".myModal{{$f->id}}"> Hapus </button>
				<div id="myModal" class="modal myModal{{$f->id}}" tabindex="-1" role="dialog">
				  	<div class="modal-dialog" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        	<h5 class="modal-title">Hapus</h5>
				        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          	<span aria-hidden="true">&times;</span>
				        	</button>
				      		</div>
				      		<div class="modal-body">
				        	<p>Apakah anda Yakin untuk menghapus data feedback dengan id={{ $f->id }}?</p>
				      	</div>
				      	<div class="modal-footer">
							<form method="post" action="{{ '/pengurus/deletefeedback/'.$f->id }}">
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

@endsection