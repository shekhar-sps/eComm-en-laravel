@extends('master')
@section('content')
<div class="container custom-product">
    <div class="row">
        <div class="col-sm-6"Filter></div>
        <div class="col-sm-6">
        <div class="trending-wrapper">
                <h4>Result For Product</h4>
                @foreach($products as $item)
                <div class="searching-item">
                <a href="details/{{$item['id']}}">
                    <img src="{{$item['gallery']}}" class="trending-image" style="width:100%;">
                    <div class="">
                        <h3>{{$item['name']}}</h3>
                        <h5>{{$item['description']}}</h5>
                    </div>
                    </a>
                </div>
                @endforeach
        </div>
        </div>
  </div>
</div>
@endsection