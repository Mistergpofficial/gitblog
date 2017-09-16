@extends('layouts.base')
@section('title', ' | Contact ') 
@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
	@if(Session::has('success'))
      <div class="alert alert-success">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
        {{ Session::get('success') }}
      </div>
   @endif
   
		<h1>Contact Me</h1>
		<hr>
		<form action="{{ url('contact') }}" method="post">
		{{ csrf_field() }}
			<div class="form-group">
			<label for="email">Email Address:</label>
			<input type="email" name="email" class="form-control">
			 @if ($errors->has('email'))
      <span class="  help-block">
        <strong class="bg-white">{{ $errors->first('email') }}</strong>
      </span>
      @endif
  
			</div>
			<div class="form-group">
			<label for="subject">Subject:</label>
			<input type="text" name="subject" class="form-control">
			 @if ($errors->has('subject'))
      <span class="  help-block">
        <strong class="bg-white">{{ $errors->first('subject') }}</strong>
      </span>
      @endif
  
			</div>
			<div class="form-group">
			<label for="message">Message:</label>
			<textarea rows="4" cols="50" class="form-control" name="message"></textarea>
			 @if ($errors->has('message'))
      <span class="  help-block">
        <strong class="bg-white">{{ $errors->first('message') }}</strong>
      </span>
      @endif
  
			</div>
			<input type="submit" name="submit" value="Send Message">
		</form>
	</div>
</div>
@endsection