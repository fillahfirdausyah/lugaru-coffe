@extends('layouts.admin')

@section('title', 'admin-product')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="row justify-content-center">
	<h1>Product</h1>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="item">
	<div class="item-head text-center">
		<p>Jumlah Product saat ini</p>
		<h1>{{ $productCount }}</h1>
		<a href="/pengurus/inputproduct"><button class="btn btn-success">Tambah Product</button></a>
	</div>
	<br>

	<table>
		<tr>
			<th>Id.</th>
			<th>Nama</th>
			<th>Kategori</th>
			<th>Kandungan</th>
			<th>Aksi</th>
		</tr>
		@foreach($product as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->name }}</td>
			<td>{{ $p->category }}</td>
			<td>{{ $p->contains }}</td>
			<td>
			<div class="d-flex">
				<form method="get" action="{{ '/pengurus/editproduct/'.$p->id}}">
					@csrf
					<button class="btn-sm btn-success"> Ubah </button> 
				</form>
				<button type="button" class="btn-sm btn-danger" data-toggle="modal" data-target=".myModal{{$p->id}}"> Hapus </button>
				<!-- Modal -->
				<div id="myModal" class="modal myModal{{$p->id}}" tabindex="-1" role="dialog">
				  	<div class="modal-dialog" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        	<h5 class="modal-title">Peringatan!</h5>
				        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          	<span aria-hidden="true">&times;</span>
				        	</button>
				      		</div>
				      		<div class="modal-body">
				        	<p>Anda akan menghapus sebuah data, jika anda yakin tekan hapus.</p>
				      	</div>
				      	<div class="modal-footer">
							<form method="post" action="{{ '/pengurus/deleteproduct/'.$p->id }}">
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