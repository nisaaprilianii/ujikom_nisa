@extends('layouts.master')
@section('title', 'Form Edit Data User')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Edit Data User</h4>
                    <form class="forms-sample" action="/user/{{$user->id}}/update" method="POST">
                        @csrf                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="exampleInputUsername1" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" name="username" value="{{ $user->username }}" class="form-control" id="exampleInputEmail1" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" value="{{ $user->password }}" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <select name="level" id="" class="form-control">
                                <option value="Admin">Admin</option>
                                <option value="Kasir">Kasir</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/user" class="btn btn-secondary">Hapus</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection