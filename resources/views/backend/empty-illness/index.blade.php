@extends('template.backend.template')
@section('content')
  <div class="" style="margin-top:20px">
      <center>
          <font size="6">Data Penyakit Kosong</font>
      </center>
      <hr>
      <br>
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
      @endif
      <div class="table-responsive"><br />
          <table class="table table-bordered table-striped jambo_table bulk_action table-hover" >
              <thead>
                  <tr>
                      <th>NO.</th>
                      <th>Nama Penyakit</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                @forelse ($emptyIllnesses as $key => $illness)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$illness->illness}}</td>
                      <td>
                        <div class="d-flex" style="column-gap: 5px">
                            <form action="{!! route('backend.empty-illness.delete',['id'=>$illness->id]) !!}" method="post" class="delete-form" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm delete-btn" type="submit">
                                    <iconify-icon icon="mdi:trash"></iconify-icon>
                                    Hapus
                                </button>
                            </form>
                        </div>
                      </td>
                    </tr>
                @empty
                  <tr class="text-center">
                    <td colspan="3">Tidak ada data.</td>
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
