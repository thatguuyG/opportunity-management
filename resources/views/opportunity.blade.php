@extends('layouts.app')

@section('css')
<style>
    .shaded-text{
        font-size: 15px;
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
        <div class="space"></div>
        <div class="container">
            <div class="container">
                <div class="row">
                  <div class="col-sm-">
                    <h2 class="bold">Create a new Opportunity</h2>
                    <figcaption class="blockquote-footer shaded-text">
                       Create a new Opportunity linked to your account
                    </figcaption>
                  </div>
                  <br>
                  <div class="col-sm-12">
                    <div class="card profile-card shadow p-3 mb-5 bg-white rounded-lg">
                        <div class="container">
                            <div class="container">
                                <div class="space"></div>
                                <br>
                                <form action="{{url('add_opportunity')}}" method="post" id="opportunityform">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Opportunity name</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputName" >
                                        <input type="hidden" class="form-control" name="posted_by" id="exampleInputName" value="{{$company_name}}">
                                        <input type="hidden" class="form-control" name="user_id" id="exampleInputName" value="{{auth()->user()->id}}">
                                    </div>
                                    <div class="form-floating">
                                        <label for="exampleInputEmail1" class="form-label">Description</label>
                                        <textarea class="form-control" name="description" placeholder="Leave a description here.." id="floatingTextarea2" style="height: 100px"></textarea>
                                      </div>
                                      <br>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Amount</label>
                                        <input type="text" class="form-control loan_max_amount" name="amount" id="exampleInputName" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Stage</label>
                                        <select class="form-select" aria-label="Default select example" name="stage">
                                            <option value="Discovery">Discovery</option>
                                            <option value="Proposal shared">Proposal shared</option>
                                            <option value="Negotiations">Negotiations</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>

                                <div class="space"></div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>

                <hr class="custom-hr">

                <h1>Your proposals</h1>


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
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/cleave.js@1.5.3/dist/cleave.min.js"></script>
<script>
    document.querySelectorAll('.loan_max_amount').forEach(inp => new Cleave(inp, {
        numeral: true,
        numeralThousandsGroupStyle: 'thousand'
    }));
</script>

@endsection

