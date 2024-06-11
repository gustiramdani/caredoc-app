@extends('template.frontend.template')
@section('content')
  <div class="container-caredoc-dies">
      <h1 class="d-flex justify-content-center tsh"></h1>
  </div>
  <div class="container-fluid p-3">
    <div class="row">
      @foreach ($illnesses as $key => $illness)
        <div class="col-sm-6 p-3">
            <div class="container">
                <div class="card sdh2 mb-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                          @if ($illness->image_name)
                            <img class="card-img mt-10" src="{{Storage::url('images/'.$illness->image_name)}}" alt="{{'gambar penyakit '.$illness->name}}" title="{{'gambar penyakit '.$illness->name}}" >
                          @else
                            <img class="card-img mt-10" src="" alt="No Image">
                          @endif
                            {{-- <img src="{{Storage::}}" class="card-img mt-10" alt="..."> --}}
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$illness->name}}</h5>
                                <p class="card-text text-left" style="overflow: auto;">{{$illness->description}}</p>
                                <a href="{!!route("illness.detail",['id'=>$illness->id])!!}" class="btn btn-primary" data>Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection