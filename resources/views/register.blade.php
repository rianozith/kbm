@extends('layouts.master_navbar')

@section('title')
register
@stop

@section('content')
<!--register modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Register</h1>
      </div>
      <div class="modal-body">
          {{-- {!! Form::open(['action'=>'Auth\AuthController@getRegister', 'method'=>'post', 'class'=>'form col-md-12 center-block']) !!} --}}
          <form class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Your Name" name="name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Email" name="email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Username" name="username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" name="password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Sign Up</button>
            </div>
          </form>
          {{-- {{!! Form::clse()!!}} --}}
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>
  </div>
</div>
@stop