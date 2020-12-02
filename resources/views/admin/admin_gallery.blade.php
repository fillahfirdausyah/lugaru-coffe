@extends('layouts.admin')

@section('title', 'admin-gallery')
@section('content')
<div class="row justify-content-center">
	<h1>Gallery</h1>
</div>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="item">
	<div class="item-head text-center">
		<p>Jumlah Foto saat ini</p>
		<h1>{{ $galleryCount }}</h1>
		<a href="/pengurus/inputgallery"><button class="btn btn-success">Tambah Foto</button></a>
	</div>
	<br>

	<table>
		<tr>
			<th>Id.</th>
			<th>Judul</th>
			<th>Deskripsi</th>
			<th>Aksi</th>
		</tr>
		@foreach($gallery as $g)
		<tr>
			<td>{{ $g->id }}</td>
			<td>{{ $g->name }}</td>
			<td>{{ $g->description }}</td>
			<td>
			<div class="d-flex">
				<form method="get" action="{{ '/pengurus/editgallery/'.$g->id }}">
					@csrf
					<button class="btn-sm btn-success"> Ubah </button>
				</form>
				<button type="button" class="btn-sm btn-danger" data-toggle="modal" data-target=".myModal{{$g->id}}"> Hapus </button>
				<!-- Modal -->
				<div id="myModal" class="modal myModal{{$g->id}}" tabindex="-1" role="dialog">
				  	<div class="modal-dialog" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        	<h5 class="modal-title">Hapus</h5>
				        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          	<span aria-hidden="true">&times;</span>
				        	</button>
				      		</div>
				      		<div class="modal-body">
				        	<p>Apakah anda Yakin untuk menghapus foto dengan id={{ $g->id }}?</p>
				      	</div>
				      	<div class="modal-footer">
							<form method="post" action="{{ '/pengurus/deletegallery/'.$g->id }}">
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
			</div>
			</td>
		</tr>
		@endforeach
	</table>

</div>
@endsection