@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Tambah Data User</b>
                </div>
                <form action="{{url('user')}}" method="post">
                @csrf
                <div  class="card-body">
                    <div>
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div>
                        <label for="" class="control-label">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div>
                        <label for="" class="control-label">No WhatsApp</label>
                        <input type="text" class="form-control" name="no_whatsapp">
                    </div>
                    <div>
                        <label for="" class="control-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div>
                        <label for="" class="control-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <button class="btn btn-dark float-right"><i class="fa - fa-save">Simpan</i></button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
