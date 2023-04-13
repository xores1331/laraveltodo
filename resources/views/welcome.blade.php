@extends('layouts.app')

@section('content')
@guest
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Welcome on Laravel ToDo-App</div>

                <div class="card-body">
                    <div class="text-center">
                    <h2>Nerver forgot your tasks!</h2>
                    <p>We'd like to help you by reminding of all tasks<p>
                    <p>We see that you're not logged in. Do it now!</p>
                    <a class="btn btn-success" href="{{route('login');}}">Login</a>
                    <p>Or if you haven't account, just join tu us!</p>
                    <a class="btn btn-primary" href="{{route('register');}}">Register</a>
                    <!-- gruby@gruby.gruby
                        grubyy@gruby.gruby
                        gruby123
                -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endguest
@auth
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header text-center">Laravel ToDo-App</div>

                <div class="card-body">
                    <div class="text-center mb-5">
                    <h2>Nerver forgot your tasks!</h2>
                    <p>We'd like to help you by reminding of all tasks<p>
                    <p>We see that you're not logged in. Do it now!</p>
                    </div>
                    <div></div>
                    <hr />
                    @foreach($userPosts as $userPost)
                    <div id="taks" class="d-flex flex-row justify-content-between d-flex align-items-center">
                        <span>{{$loop->iteration}}</span>
                        <span>{{$userPost->text}}</span>
                        <form action="/{{$userPost->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">Done</button>
                        </form>
                    </div>
                    <hr />
                    @endforeach
                    <div>
                        <form
                                action="/"
                                method="POST"
                                enctype="multipart/form-data"
                                class="d-flex flex-column align-items-center mt-5">
                                @csrf
                            <div class="">
                                <div class="col-md-12">
                                <input type="text" name="task" class="form-control" id="task" placeholder="task">
                             </div>
                        </div>
                        <div class="m-3"><button type="submit" class="btn btn-success">Add</button></div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endauth

@endsection

