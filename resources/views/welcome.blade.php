@extends('layouts.base')

@section('css')
<style>
    .space2{
        height:100px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>

            <div class="container py-5">
              <header class="text-center text-white py-5">
                <h1 class="display-4 font-weight-bold mb-4">Opportunity Management System</h1>
                <div class="container">
                    <div class="row">
                      <div class="col-sm">
                        <button type="button" class="btn btn-outline-dark" style="color: white;font-weight:600;border:1px solid"
                        onclick="location.href='/login'">Login</button>
                      </div>
                      <div class="col-sm">
                        <button type="button" class="btn btn-outline-dark" style="color: white;font-weight:600;border:1px solid"
                        onclick="location.href='/register'">Register</button>
                      </div>
                    </div>
                  </div>
                  <br><br><br><br><br><br><br>
                  <br><br><br><br><br><br>
                  <div class="space2"></div>
              </header>


            </div>
          </div>
    </div>
</div>
@endsection

