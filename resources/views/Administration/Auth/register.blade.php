@extends('Administration.Layout.master')

@section('page_title','User Register')
@section('page_heading','User Register')
@section('main_content')
<div class="container">
   <div class="row g-0 auth-row justify-content-center">
      <div class="col-lg-6">
         @if (Session::has('success'))
            <div class="alert alert-success">
               {{ Session::get('success') }}
            </div>
         @endif
         <div class="signup-wrapper">
            <div class="form-wrapper">
               <form action="{{ route('admin.register') }}" method="POST">
                  @csrf
                  <div class="row">
                     <div class="col-12">
                        <div class="input-style-1">
                           <label>Name</label>
                           <input type="text" placeholder="Name" name="name"
                              class="form-control @error('name')is-invalid @enderror" value="{{ old('name') }}">
                           @error('name')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <!-- end col -->
                     <div class="col-12">
                        <div class="input-style-1">
                           <label>Email</label>
                           <input type="email" placeholder="Email" name="email"
                              class="form-control @error('email')is-invalid @enderror" value="{{ old('email') }}">
                           @error('email')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <!-- end col -->
                     <div class="col-12">
                        <div class="input-style-1">
                           <label>Password</label>
                           <input type="password" placeholder="Password" name="password"
                              class="form-control @error('password')is-invalid @enderror" value="{{ old('password') }}">
                           @error('password')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <!-- end col -->
                     <div class="col-12">
                        <div class=" button-group d-flex justify-content-center flex-wrap">
                           <button class=" main-btn primary-btn btn-hover w-100 text-center">
                              Add User
                           </button>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
               </form>
            </div>
         </div>
      </div>
      <!-- end col -->
   </div>
</div>
@endsection