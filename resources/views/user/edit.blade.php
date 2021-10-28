@extends('layout.template')

@section('title','Edit User')

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
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/user/{{$user->id}}" method="POST">
              @method('PUT')
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" value ="{{$user->username}}" placeholder="Masukan Username" required/>
                </div>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value ="{{$user->name}}"  placeholder="Masukan Nama" required/>
                </div>
                <div class="form-group">
                  <label for="email">Alamat Email</label>
                  <input type="email" class="form-control" id="email" name="email" value ="{{$user->email}}"  placeholder="Masukan email" required/>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password"placeholder="Masukan Password">
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control" name="id_position">
                  @foreach($positions as $position)
                    <option value="{{ $position->id }}">{{ $position->position }}</option>
                  @endforeach
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
@endsection