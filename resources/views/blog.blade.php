@extends('layouts.main')
@section('content')
<div  class="row">
    @foreach ($data_artikel as $item)
     <div class="col-md-4 col-sm-12 mt-4">
        <div class="card">
             <img src="{{ asset('p.jpeg') }}" alt="">   
             <div class="card-body">
                <h5 class="card-title">{{ $item->judul }}</h5>
                <a href="/detail/{{ $item->id }}" class="btn btn-primary">Baca Selengkapnya</a>
             </div>
        </div>    
    </div>   
    @endforeach
</div>
@endsection
