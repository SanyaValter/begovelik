@extends('layouts.app')

@section('content')
<h2 class="text-center fs-2 p-2"><b>Новости и статьи</b></h2>
<Section>
    @foreach($news as $item)
<h2 class="pb-4 mb-4 fst-italic border-bottom text-center" id=""></h2>
<div class="container">
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
                <h4><strong>{{$item->name}}</strong></h4>
                    <p class="text-muted">{{$item->text}}</p>
            </div>
        </div>
    </div>
</div>
</Section>
@endforeach

@endsection
