@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                           <a href="#profile" class="nav-link active" data-toggle="tab">Profile</a>
                        </li>
                        <li class="nav-item">
                           <a href="#history" class="nav-link" data-toggle="tab">History</a>
                        </li>
                    </ul>
                    
                    <div class="tab-content">
                        <div id="profile" class="tab-pane active">
                            <div class="m-4 p-4">
                                
                            <form action="{{ route('home.update.name', ['id' => $user->id]) }}" method="post" class="">
                                    @csrf
                                    @method('put')
                                    <div class="sub-title mb-2">Name</div>
                                    <div class="form-group form-inline">
                                        <input type="text" value="{{ old('name', $user->name) }}" class="form-control w-50" name="name" id="name"><button type="submit" class="btn btn-green ml-4 w-25">Update</button>
                                    </div>
                                </form>

                                <form action="{{ route('home.update.email', ['id' => $user->id]) }}" method="post" class="">
                                    @csrf
                                    @method('put')
                                    <div class="sub-title mb-2">E-mail</div>
                                    <div class="form-group form-inline mb-5">
                                        <input type="text" value="{{ old('email', $user->email) }}" class="form-control w-50" name="email" id="email">
                                        <button type="submit" class="btn btn-green ml-4 w-25">Update</button>
                                    </div>
                                </form>
                                    
                                <form action="{{ route('home.update.password', ['id' => $user->id]) }}" method="post" class="">
                                    @csrf
                                    @method('put')
                                    <div class="sub-title mb-2">Password</div>
                                    <div class="form-group form-inline">
                                        <input type="text" placeholder="Current Password" class="form-control w-50" id="current_password" name="current_password">
                                    </div>
                                    <div class="form-group form-inline">
                                        <input type="text" placeholder="New Password" class="form-control w-50" id="new_password" name="new_password">
                                    </div>
                                    <div class="form-group form-inline mb-5">
                                        <input type="text" placeholder="Confirm New Password" class="form-control w-50" id="confirm_password" name="confirm_password">
                                        <button type="submit" class="btn btn-green ml-4 w-25">Update</button>
                                    </div>
                                </form>
                                    
                                <form action="{{ route('home.delete.user', ['id' => $user->id]) }}" method="post" class="">
                                    @csrf
                                    @method('put')
                                    <div class="mb-2 sub-title">Delete your account</div>
                                    <div class="form-group form-inline">
                                        <input type="text" placeholder="Current Password" class="form-control w-50" id="current_password" name="current_password">
                                        <button type="submit" class="btn btn-green ml-4 w-25">Delete</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div id="history" class="tab-pane">
                            @foreach ($donations as $donation)
                            <div class="m-4 p-4 border-green">
                                <p class="font-green"><span class="strong">No.</span> {{ $donation->id }}</p>
                                <p class="font-green"><span class="strong">Date : </span>{{ $donation->created_at }}</p>
                                <p class="font-green"><span class="strong">Amount : </span>${{ $donation->amount }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection