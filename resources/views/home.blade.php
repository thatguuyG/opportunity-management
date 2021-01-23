@extends('layouts.app')

@section('css')
<style>
    .space{
        height: 40px;
    }
    .proposal-card:hover{
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Available Opportunities</h1>
        <br><br><br><br>
        <div class="space"></div>
        <div class="container">
            <div class="row">
                @foreach ($opportunities as $item)
                <div class="col-sm">
                  <div class="card proposal-card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title text-center bold">{{$item->name}}</h5>
                        <p class="card-text text-center">{{$item->description}}</p>
                        <p class="card-text text-center">Amount: {{$item->amount}}</p>
                        <p class="card-text text-center">Stage: {{$item->stage}}</p>
                      </div>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
