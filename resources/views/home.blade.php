@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">My Account</div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  Welcome, {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}!
                  <br>You currently have X points.
                  <br>Purchase points.
              </div>
          </div>
      </div>
        <div class="col-md-8" style="margin-top:15px">
            <div class="card">
                <div class="card-header" >Daily Options</div>

                <div class="card-body">
                    @if (count($items) > 0)
                      @foreach($items as $item)
                      <ul class="list-group">
                        <li class="list-group-item">{{$items->title}}</li>
                        <li class="list-group-item">{{$items->description}}</li>
                        <li class="list-group-item">{{$items->price}}</li>
                      </ul>
                      @endforeach
                    @endif

                    Welcome, {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}!
                    <br>You currently have X points.
                    <br>Purchase points.
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
