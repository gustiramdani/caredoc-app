@extends('template.backend.template')
@section('content')
  <div class="container-fluid" style="margin-top:20px">
        <center>
            <font size="6">Data Administrator</font>
        </center>
        <hr>
        <br>
        <a href="{!! route('backend.administrator.create') !!}"><button class="btn btn-primary right">Tambah Data</button></a>
        <div class="table-responsive"><br />
            <table class="table table-bordered table-striped jambo_table bulk_action table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @forelse ($users as $key => $user)
                    <tr>
                      <td>{{$key+1}}</td>		
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>
                        <div class="d-flex" style="column-gap: 5px">
                          <a href="{!! route('backend.administrator.create',['id'=>$user->id]) !!}" class="btn btn-secondary btn-sm">
                              <iconify-icon icon="mdi:pencil"></iconify-icon> edit
                          </a>
                          <form action="{!! route('backend.administrator.delete',['id'=>$user->id]) !!}" method="post" class="delete-form" style="display: inline-block;">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-outline-danger btn-sm delete-btn" type="submit">
                                  <iconify-icon icon="mdi:trash"></iconify-icon>
                                  Hapus
                              </button>
                              {{-- <input type="submit" class="" value="Hapus"/> --}}
                          </form>
                        </div>
                      </td>
                    </tr>
                  @empty
                    <tr class="text-center">
                      <td colspan="6">Tidak ada data.</td>
                    </tr>
                  @endforelse
                <tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.delete-btn').click(function(e) {
                e.preventDefault();
                if (confirm('Are you sure you want to delete this item?')) {
                    $(this).closest('form').submit();
                }
            });
        });
    </script>
@endsection