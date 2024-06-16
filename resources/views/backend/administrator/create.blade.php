@extends('template.backend.template')
@section('content')
  <center>
      <font size="6">Tambah Data Administrator</font>
  </center>
  <hr>

  <form action="{!! route('backend.administrator.action') !!}" method="post">
    @csrf
    @if ($user)
      <input type="hidden" name="id" value="{{$user->id}}">
    @endif
      <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
          <div class="col-md-6 col-sm-6">
              <input type="text" name="email" value="{{$user->email ?? ''}}" class="form-control" required>
              @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
          </div>
      </div>
      <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
          <div class="col-md-6 col-sm-6">
              <input type="password" name="password" class="form-control" required>
              @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
          </div>
      </div>
      <div class="item form-group">
          <div class="col-md-6 col-sm-6 offset-md-0">
              <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
              <a href="index.php?page=tampil_admin" class="btn btn-secondary">Kembali</a>
          </div>
  </form>
@endsection