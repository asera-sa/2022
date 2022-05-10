@extends('layouts.masterLogin')

@section('content')
<div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-6 text-right" dir="rtl">
        <div class="form-block" >
          <div class="text-center mb-5">
          <h6> الدخول  <strong>المنظومة الإلكترونية لكلية طب وجرافة الفم والأسنان</strong></h6>
          <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
          </div>
          <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="form-group first">
              <label for="username">البريدالإلكتروني</label>
              <input type="email" class="form-control" name="email" placeholder="your-email@gmail.com" id="username">
            </div>
            <div class="form-group last mb-3">
              <label for="password">كلمة المرور</label>
              <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
            </div>
            
            <div class="d-sm-flex mb-5 align-items-center">
              <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                <input type="checkbox" checked="checked"/>
                <div class="control__indicator"></div>
              </label>
              <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
            </div>

            <input type="submit" value="دخـول" class="btn btn-block btn-primary">

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
