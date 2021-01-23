@extends('layouts.app')

@section('css')
<style>
    .space{
        height: 30px;
    }
    .shaded-text{
        font-size: 15px;
    }
    .custom-hr{
        border: none;
        height: 0.2px;
        color: rgb(161, 158, 158); /* old IE */
        background-color: rgb(209, 202, 202); /* Modern Browsers */
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="space"></div>
        <div class="container">
            <div class="row">
              <div class="col-sm-auto">
                <h2 class="bold">Profile Information</h2>
                <figcaption class="blockquote-footer shaded-text">
                    Update your account's profile information and email address.
                </figcaption>
              </div>
              <div class="col-sm-7">
                <div class="card profile-card shadow p-3 mb-5 bg-white rounded-lg">
                    <div class="container">
                        <div class="container">
                            <div class="space"></div>
                            <form action="{{url('save_profile')}}" method="post" id="profileform">
                                {{ csrf_field() }}
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" name="company_name" id="exampleInputName" value="{{$company_name}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" name="company_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    value="{{$company_email}}">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                  </div>
                                {{-- <button type="submit" class="btn btn-primary">Save</button> --}}
                            <div class="space"></div>
                        </div>
                    </div>
                </div>
              </div>
            </div>

            <hr class="custom-hr">


            <div class="row">
                <div class="col-sm-auto">
                  <h2 class="bold">Other Information</h2>
                  <figcaption class="blockquote-footer shaded-text">
                    Update your company's profile information and  address. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </figcaption>
                </div>
                <div class="col-sm-7">
                  <div class="card profile-card shadow p-3 mb-5 bg-white rounded-lg">
                      <div class="container">
                          <div class="container">
                              <div class="space"></div>
                                  <div class="mb-3">
                                    <input type="hidden" name="owned_by" id="owned_by" value=" {{auth()->user()->id}}">
                                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="exampleInputName" value="{{$phone}}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Location</label>
                                    <input type="text" name="location" class="form-control" id="exampleInputName" value="{{$location}}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Website</label>
                                    <input type="text" name="website" class="form-control" id="exampleInputName" value="{{$website}}">
                                  </div>

                                  <br>
                                  <button type="submit" class="btn btn-primary">Save</button>
                              </form>
                              <div class="space"></div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>



          </div>



    </div>
</div>
@endsection

