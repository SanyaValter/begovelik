@extends('layouts.app')

@section('content')
<Section>
    <h2 class="text-center fs-2 p-3"><b>Новости и статьи</b></h2>
    @foreach($news as $item)
<div class="container">
    <hr>
    <div class="p-3">
    <div class="row gx-5">
            <div class="col-md-6 mb-4">
                <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                    <img src="{{asset('img/'.$item->img)}}" class="img-fluid" style="max-width:75%;border-radius: 20px"><a href="#">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div></a>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">{{$item->date}}</span>
                <h4><strong class="fs-4">{{$item->name}}</strong></h4>
                    <p class="text-muted fs-4">{{$item->text}}</p>
            </div>
        </div>
    </div>
</div>
</Section>
@endforeach

@endsection
