@extends('layout.template')

@section('title','User')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $judul }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ $judul }}</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-2">
          <a href="/user/create" class="btn btn-block btn-primary btn-lg">+ Tambah Data</a>      
        </div>
      </div>
      <br>
      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Position</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{ $user->username }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->position }}</td>
                  <td>
                    <a href="/user/{{ $user->id }}/edit" class="btn btn-success">Edit</a>
                    <form action="/user/{{ $user->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection