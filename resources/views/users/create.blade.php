@extends("layouts.global")
@section("title") Create New User @endsection
@section("content")
<div class="col-md-8">
    <h2>Create New User</h2>
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.store')}}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input value="{{old('name')}}" class="form-control" placeholder="Full Name" type="text" name="name" id="name" />
        @error('name')
           <span style="color:red">{{$message}}</span> 
        @enderror
        <br>
        <label for="username">Username</label>
        <input value="{{old('username')}}" class="form-control" placeholder="username" type="text" name="username" id="username" />
        @error('username')
           <span style="color:red">{{$message}}</span> 
        @enderror
        <br>
        <label for="">Roles</label>
        <br>
        <input {{$errors->first('roles') ? "is-invalid" : ""}} type="checkbox" name="roles[]" id="ADMIN" value="ADMIN">
        <label for="ADMIN">Administrator</label>
        <input {{$errors->first('roles') ? "is-invalid" : ""}} type="checkbox" name="roles[]" id="STAFF" value="STAFF">
        <label for="STAFF">Staff</label>
        <input {{$errors->first('roles') ? "is-invalid" : ""}} type="checkbox" name="roles[]" id="CUSTOMER" value="CUSTOMER">
        <label for="CUSTOMER">Customer</label>
        <br>
        @error('roles')
           <span style="color:red">{{$message}}</span> 
        @enderror
        <br>
        <label for="phone">Phone number</label>
        <br>
        <input value="{{old('phone')}}" {{$errors->first('phone') ? "is-invalid" : ""}} type="text" name="phone" class="form-control">
        @error('phone')
           <span style="color:red">{{$message}}</span> 
        @enderror
        <br>
        <label for="address">Address</label>
        <textarea name="address" {{$errors->first('address') ? "is-invalid" : ""}} id="address" class="form-control">{{old('address')}}</textarea>
        @error('address')
           <span style="color:red">{{$message}}</span> 
        @enderror
        <br>
        <label for="avatar">Avatar image</label>
        <br>
        <input id="avatar" name="avatar" {{$errors->first('avatar') ? "is-invalid" : ""}} type="file" class="form-control">
        @error('avatar')
           <span style="color:red">{{$message}}</span> 
        @enderror
        <hr class="my-3">
        <label for="email">Email</label>
        <input class="form-control" value="{{old('email')}}" {{$errors->first('email') ? "is-invalid" : ""}} placeholder="user@mail.com" type="text" name="email" id="email" />
        @error('email')
           <span style="color:red">{{$message}}</span> 
        @enderror
        <br>
        <label for="password">Password</label>
        <input class="form-control" {{$errors->first('password') ? "is-invalid" : ""}} placeholder="password" type="password" name="password" id="password" />
        @error('password')
           <span style="color:red">{{$message}}</span> 
        @enderror
        <br>
        <label for="password_confirmation">Password Confirmation</label>
        <input class="form-control" {{$errors->first('password_confirmation') ? "is-invalid" : ""}} placeholder="password confirmation" type="password" name="password_confirmation" id="password_confirmation" />
        @error('password_confirmation')
           <span style="color:red">{{$message}}</span> 
        @enderror
        <br>
        <input class="btn btn-primary" type="submit" value="Save" />
    </form>
</div>
@endsection
