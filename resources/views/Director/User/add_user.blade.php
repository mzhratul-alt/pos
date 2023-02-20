@extends('Director.Layout.director_master')

@section('page_title','User-Add')
@section('main_content')

<div class="row mt-3 justify-content-center">
    <div class="col-lg-10">
        <div class="card-style settings-card-2 mb-30">
            <div class="title mb-30">
                <h6>Add Employee</h6>
            </div>
            <form action="{{ route('director.user.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-style-1">
                            <label>Full Name</label>
                            <input type="text" placeholder="Full Name" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-style-1">
                            <label>Email</label>
                            <input type="email" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-style-1">
                            <label>Phone</label>
                            <input type="tel" placeholder="Phone" name="phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-style-1">
                            <label>Password</label>
                            <input type="password" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-style-1">
                            <label>Picture</label>
                            <input type="file" placeholder="Phone" name="profile_pic">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="select-style-1">
                            <label>Department</label>
                            <div class="select-position">
                                <select>
                                    <option>Select Department</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->slug }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="main-btn primary-btn btn-hover" type="submit">
                            Add New Employee
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
