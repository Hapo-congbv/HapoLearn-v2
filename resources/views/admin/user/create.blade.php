@extends('admin.index')
@section('title','Admin-user-create')
@section('contents')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-9">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Create User</h3>
                        </div>
                        <form role="form" method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data" class="col-xs-8">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="role_id">Role: </label>
                                    <input class="form-check-input ml-4 @error('role_id') is-invalid @enderror" type="radio"  name="role_id" id="1" value="{{ App\User::ROLE['user'] }}" {{ old('role') ==  App\User::ROLE['user'] ? 'checked' : '' }}>
                                    <label for="1" class="ml-5">User</label>
                                    <input class="form-check-input ml-4 @error('role_id') is-invalid @enderror" type="radio"  name="role_id" id="2" value="{{ App\User::ROLE['teacher'] }}" {{ old('role') ==  App\User::ROLE['teacher'] ? 'checked' : '' }}>
                                    <label for="0" class="ml-5">Teacher</label>
                                    @error('role_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter name" value="{{old('name')}}">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email" value="{{old('email')}}">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{old('phone')}}">
                                    @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Address" value="{{old('address')}}">
                                    @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="birth_day">Birth day</label>
                                    <input type="date" class="form-control @error('birth_day') is-invalid @enderror" id="birth_day" name="birth_day" value="{{old('birth_day')}}">
                                    @error('birth_day')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-xs-6">
                                    <label for="avatar">Choose avatar</label>
                                    <input type="file" id="avatar" name="avatar"
                                           class="@error('avatar') is-invalid @enderror" value="">
                                    <p class="help-block">Please chosse file</p>
                                    @error('avatar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
