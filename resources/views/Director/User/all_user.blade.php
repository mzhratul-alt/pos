@extends('Director.Layout.director_master')
@section('page_title','All Users')
@section('main_content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <h6 class="mb-10">All User</h6>
                <div class="table-wrapper table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <h6>#</h6>
                                </th>
                                <th>
                                    <h6>ID</h6>
                                </th>
                                <th>
                                    <h6>Profile</h6>
                                </th>
                                <th>
                                    <h6>Name</h6>
                                </th>
                                <th>
                                    <h6>Email</h6>
                                </th>
                                <th>
                                    <h6>Phone</h6>
                                </th>
                                <th>
                                    <h6>Status</h6>
                                </th>
                                <th>
                                    <h6>Action</h6>
                                </th>
                            </tr>
                            <!-- end table row-->
                        </thead>
                        <tbody>
                            @foreach ($users as $key=>$user)
                            <tr>
                                <td>
                                    {{ ++$key }}
                                </td>
                                <td class="min-width">
                                    <p>{{ $user->employee_id }}</p>
                                </td>
                                <td>
                                    <div class="employee-image">
                                        <img src="{{ asset('assets/images/profile/'.$user->profile_pic) }}" alt="">
                                    </div>
                                </td>
                                <td class="min-width">
                                    <p>{{ $user->name }}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{ $user->email }}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{ $user->phone }}</p>
                                </td>
                                <td class="min-width">
                                    @if ($user->status)
                                    <span class="status-btn success-btn">Active</span>
                                    @else
                                    <span class="status-btn close-btn">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="action">
                                        <a href="#" class="btn-primary btn-sm mx-1">
                                            <i class="lni lni-eye"></i>
                                        </a>
                                        <a href="#" class="btn-warning btn-sm mx-1">
                                            <i class="lni lni-pencil-alt"></i>
                                        </a>
                                        <div class="form-check form-switch toggle-switch">
                                            <input class="form-check-input" type="checkbox" id="toggleSwitch2" {{
                                                $user->status ? 'checked' : '' }}>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <!-- end table row -->

                        </tbody>
                    </table>
                    <!-- end table -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
</div>
@endsection
