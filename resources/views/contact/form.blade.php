@extends('layouts.default')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="{{ asset('/js/form.js') }}"></script>


    @section('content')
  <main>
            <!--
        ララベル の使い方
        $ mkdir フォルダ名　でフォルダを作り
        $ cd フォルダ名　で移動
        $ composer create-project laravel/laravel フォルダ名 "5.5.*"　でララベル インストール
        $ cd フォルダ名で移動
        $ php artisan serve　でサーバの起動
        -->




  

    <h1 class="title">About Us</h1>
       
      <figure> <img src="{{ asset('/img/mac.jpg')}}" id="box-img" class="fadein"　alt="mac"></figure>
      
    <div class="contents1">
   
    AmaArbaro is composed of students are learning IT(Information Technology)group .<br>
    We are not sure what we can do because we are just students however<br>
     we believe we can do even small things for the Earth through internet<br>
     where people can know anythings and communicate with anyones.<br>
    This is the main reason this web site exist.<br>
    AmaArbaro administers this site for you who believe we can do something for protecting this beautiful earth.
    </div>
    
        
       <figure> <img src="{{ asset('/img/tree.jpg')}}" id="box-img" class="fadein" alt="森を守る" title="protectrre"></figure>
         
        <br>
    <p class="contents1">
       
    We work as NGO(non-governmental organizations) and plant trees around the world by contribution.<br>
    AmaArbaro was a small group that consist of only 5 students when we start this work but collaborators are increased,<br>
     and we are still growing around the world.<br>     
    However people don’t change anythings because people can not accept their quality of daily lives decline.<br>
    If that's the case, why don’t you even plant trees?
    </p>
   
  
     <figure><img src="{{ asset('/img/tree.form.jpg')}}" alt="木の実際の画像" title="tree" class="fadein" id="box-img"></figure>
    
        
    <p class="contents1">
    The cost to plant a tree is $50.<br>
    Do you feel it’s expensive?<br>
    Do you feel difficult payment method?<br>
    You can donate any amounts and simply for planting tree, saving the earth.<br>
    </p>

    <h1 class="title">Vision</h1>
    <p class="contents">
    Be the environment everyone should have a sense of ownership to solve problems.</p>

    <h1 class="title">Mission</h1>
    <p class="contents">We have ZERO price policy.<br>
    To provide the environment everyone can take action whenever they want.<br>

    
    <h1 class="title">Our Works/History</h1>
    <p class="contents">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
     Nobis doloribus mollitia animi qui error asperiores, accusantium, ipsam veniam eos beatae, veritatis maiores nostrum?<br>
      Quisquam consequatur quam iusto tenetur minus ab.</p>

    <h1 class="title"> Contact</h1>
    

    <div class="container"  >
        
<div class="row" >
 
</div>
<div class="row">
    <form action="{{ route('confirm') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="InputEmail">email</label>
        <input type="email" name="email" class="form-control" id="InputEmail" value="{{ old('email') }}">
        @if($errors->has('email'))
            <p class="text-danger">{{ $errors->first('email')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="InputSubject">subject</label>
        <input type="text" name="subject" class="form-control" id="InputSubject" value="{{ old('subject') }}">
        @if($errors->has('subject'))
            <p class="text-danger">{{ $errors->first('subject')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="InputMessage">message</label>
        <textarea name="message" id="InputMessage" class="form-control" cols="40" rows="4">
        {{ old('message') }}
        </textarea>
        @if($errors->has('message'))
            <p class="text-danger">{{ $errors->first('message')}}</p>
        @endif
    </div>
   
    <button type="submit" name="action" class="btn btn-primary" value="sent">send</button>
    </form>
</div>
</div>
  </main>
  @endsection