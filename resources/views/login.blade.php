@extends('layouts.layout')
@section('body')
<div id="header" style="background: URL('images/bg.jpg') scroll repeat center center/cover; direction: ltr; padding: 100px 0px; padding-top: 141px;">
	<div class="pa w100 flipHoriz" style="left: 0px; top: 0px; max-width: 600px; height: 240px; background: URL('/images/hbgl.png') scroll no-repeat left top/contain;"></div>
	<div class=ov style="background: rgba(255,255,255,0.2);"></div><span class=fh><div class=pageTit><h3>Videos</h3></div><nav aria-label="breadcrumb"><ol class="breadcrumb site-breadcumb-1 justify-content-center"><li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li><li class="breadcrumb-item active" aria-current="page">Videos</li></ol></nav></span></div>
<div style="background: #81729C; height: 4px;"></div>

<div class="container">
    <div id="login">
        <fieldset>
            @if(Session::has('errors'))
                <div style="color:#F00">{{Session::get('errors')->first()}}</div>
            @endif
            <legend>Login</legend>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="form-group">
                     <div class="label">Email</div>
                    <input type="email" name="email" id="" placeholder="something@gmail.com" required>
                </div>
                <div class="form-group">
                    <div class="label">Password</div>
                    <input type="password" name="password" id="" placeholder="********" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Login">
                </div>
            </form>
        </fieldset>
    </div>
</div>


<style>
    input,
    textarea {
        width: 100%;
        border: 1px solid #f2f2f2;
        font-size: 12px;
        height: 45px;
        padding: 15px;
        outline: none;
    }
    #login fieldset {
        max-width: 700px;
        margin: 50px auto;
        padding: 50px;
        border: 1px solid #f0f0f0;
    }
    #login legend {
        color: #9281B2;
        font-size: 35px;
    }

    #login fieldset .form-group {
        margin: 15px 0;
    }

    #login input[type="submit"] {
        background-color: #9281B2;
        color: #fff;
        font-size: 17px;
        padding: 0;
        width: 150px;
        margin: auto;
        height: 35px;
        margin-top: 15px;
        border: 1px solid #9281B2;
        outline: none;
        cursor: pointer;
    }

    #login .label {
        font-size: 14px;
        text-align: left
    }
</style>
@endsection