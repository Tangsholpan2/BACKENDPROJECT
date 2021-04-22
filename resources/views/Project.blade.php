<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <title>{{ config('app.name', 'Laravel') }}</title>
<link rel="stylesheet" type="text/css" href="Project.css"/>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Dancing+Script:wght@500;700&family=Karla:wght@700&family=Lexend+Peta&family=Lobster&family=Mukta:wght@600&family=Tajawal&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>




<div class="main">
<img src="img/6f3418b772434120b740.jpg" style="width:100%; height:100vh; border-bottom:3px solid white;"/>
<div class="dark">
<div class="textMain">
<div data-aos="fade-up">
<h1 class="best">{{__('lang.best')}}</h1>
</div>
<div data-aos="fade-up">
<h1 class="asian">{{__('lang.asianFoods')}}</h1>
</div>
<div data-aos="fade-up">
<h3 class="you">{{__('lang.never')}}</h3>
</div>
<div data-aos="flip-right">
<a href="{{route('try')}}"><button class="try">{{__('lang.try')}}</button></a>
</div>
</div>
<div class="header">
<div class="header-item"><img src="img/logo.png" id="logo"></div>
<div class="header-item"><h3 class="item" onclick="window.location.reload();">{{__('lang.main')}}</h3></div>
<div class="header-item"><h3 class="item" id="toloc">{{__('lang.comments')}}</h3></div>
<div class="header-item"><h3 class="item" id="contct">{{__('lang.contact')}}</h3></div>
<div class="header-item"><h3 class="item" id="menu">{{__('lang.menu')}}</h3></div>
<div class="header-item"><h3 class="item" id="featured">{{__('lang.featured')}}</h3></div>
</div>

<div id="submited">

<h1 id="submitting">{{__('lang.submitted')}}</h1>

</div>

</div>
  <div class="main1" >
                       <div class="main-item"><a class="dropdown-item" href="/en"><h4>EN<h4></a></div>
                       <div class="main-item"><a class="dropdown-item" href="/kr"><h4>KR</h4></a></div>
                       <div class="main-item"><a class="dropdown-item" href="/kz"><h4>KZ</h4></a></div>
    </div>

<div class="main">
<div data-aos="zoom-in"><h1 class="featured">{{__('lang.featured')}}<h1></div>
<div class="containers">
<div class="text-center">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	<div class="row">
	<div class="col-3"><div data-aos="zoom-in"><img src="img/uzbek-prepared-boiled-manti-manty-dumplings-traditional-bowl-wooden-table-uzbek-prepared-boiled-manti-manty-190953873.jpg" class="d-block w-100" alt="..." style="border-radius:50%;width:300px;height:310px;"><span class="name"><h1 class="names">{{__('lang.manty')}}</h1></span><span><h1>$10.99</h1></span></div></div>
	<div class="col-3"><div data-aos="zoom-in"><img src="img/2.png" class="d-block w-100" alt="..." style="border-radius:50%;"><span class="prices"><h1 class="name">{{__('lang.rice')}}</h1></span><span><h1>$15.99</h1></span></div></div>
      <div class="col-3"><div data-aos="zoom-in"><img src="img/Uzbek-Plov-04-500x500.jpg" class="d-block w-100" alt="..." style="border-radius:50%;"><span class="prices"><h1 class="name">{{__('lang.pilaf')}}</h1></span><span><h1>$20.75</h1></span></div></div>
          <div class="col-3"><div data-aos="zoom-in"><img src="img/4.jpg" class="d-block w-100" alt="..." style="border-radius:50%;"><span class="prices"><h1 class="name">{{__('lang.fish')}}</h1></span><span><h1>$19.99</h1></span></div></div>
        </div>
	 </div>
    <div class="carousel-item">
  <div class="row">
      <div class="col-3"><img src="img/Cottage-Cheese-Traditional-Cooking-School-GNOWFGLINS-square-1-300x270.jpg" class="d-block w-100" alt="..." style="border-radius:50%;height:310px;"><span><h1>{{__('lang.cottage')}}</h1></span><span><h1>$9.99</h1></span></div>
      <div class="col-3"><img src="img/Marinated-Thanksgiving-Turkey_EXPS_THN17_1316_B06_15_5b.jpg" class="d-block w-100" alt="..." style="border-radius:50%;"><span><h1>{{__('lang.turkey')}}</h1></span><span><h1>$22.15</h1></span></div>
      <div class="col-3"><img src="img/unnamed.jpg" class="d-block w-100" alt="..." style="border-radius:50%;"><span><h1>{{__('lang.pasta')}}</h1></span><span><h1>$15.55</h1></span></div>
      <div class="col-3"><img src="img/buttermilk-fried-chicken-12-square.jpg" class="d-block w-100" alt="..." style="border-radius:50%;"><span><h1>{{__('lang.chicken')}}</h1></span><span><h1>$13.99</h1></span></div>
        </div>
	</div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<div class="third">
<div class="three">
<div class="t" id="f"><div data-aos="zoom-in"><img src="img/restaurant-in-valkenswaard.jpg" style="width:350px;border:3px solid #69491C;"/></div></div>
<div data-aos="flip-right"><div class="t" id="s"><h1 id="hd">{{__('lang.cook')}}</h1><div class="nom"><p id="hdr">{{__('lang.call')}}</p><p> +9985-38000-888-987</p></div><p id="or">{{__('lang.or')}}</p><a><button class="o">{{__('lang.con')}}</button></a></div></div>
<div class="t" id="th"><div data-aos="zoom-in"><img src="img/pincho-s.jpg" style="width:350px;border:3px solid #69491C;"/></div></div>
</div>
</div>
</div>
</div>
<div class="main2">
<div data-aos="flip-right"><h1 class="featured2">{{__('lang.what')}}<h1></div>
<div class="offer">
<div data-aos="zoom-in-down"><div><img src="img/Healthy-Breakfast-Recipes-Without-Eggs.jpg" style="width:300px;border:3px solid #69491C;border-radius:50%;"/><span><h1>{{__('lang.breakfast')}}</h1></span><span><h1>5$ {{__('lang.from')}}</h1></span></div></div>
<div data-aos="zoom-in-down"><div><img src="img/mexican-lunch-bowls-3.jpg" style="width:300px;border:3px solid #69491C; border-radius:50%;"/><span><h1>{{__('lang.lunch')}}</h1></span><span><h1>10$ {{__('lang.from')}}</h1></span></div></div>
<div data-aos="zoom-in-down"><div><img src="img/1474395998-ghk-0216-comfortfoodcover-meatballs.jpg" style="width:300px;border:3px solid #69491C;border-radius:50%;"/><span><h1>{{__('lang.dinner')}}</h1></span><span><h1>15$ {{__('lang.from')}}</h1></span></div></div>
<div data-aos="zoom-in-down"><div><img src="img/image.jpg" style="width:300px;border:3px solid #69491C; border-radius:50%;"/><span><h1>{{__('lang.desert')}}</h1></span><span><h1>12$ {{__('lang.from')}}</h1></span></div></div>
</div>
<div data-aos="flip-right"><h1 class="featured2" id="ctc">{{__('lang.co')}}<h1></div>

<form action="/send" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="contac">
<div class="forma">

<div data-aos="fade-up-right"><div class="iitem"><input type="text" placeholder="{{__('lang.fn')}}" id="FirstName" name="FirstName"/></div></div>
<div data-aos="fade-up-left"><div class="iitem"><input type="text" placeholder="{{__('lang.ln')}}" id="LastName" name="LastName"/></div></div>
<div data-aos="fade-up-right"><div class="iitem"><input type="text" placeholder="{{__('lang.pn')}}" id="PhoneNumber" name="PhoneNumber"/></div></div>
<div data-aos="fade-up-right"><div class="iitem"><input type="text" placeholder="{{__('lang.email')}}" id="Email" name="Email"/></div></div>
<div data-aos="fade-up-left"><div class="iitem"><textarea placeholder="{{__('lang.sug')}}" name="suggestions"></textarea></div></div>
<div class="uhu"><div data-aos="slide-up"><button id="send" type="submit">{{__('lang.sub')}}</button></div></div>

</div>
</div>
</form>
<div data-aos="flip-right"><h1 class="featured2" id="cmts">{{__('lang.our')}}</h1></div>
chef-ladle-mature-professional-man-isolated-over-white-background-35579888-removebg-preview.png
<div class="offer">
<div data-aos="zoom-in-down"><div><img src="img/kisspng-cook-chef-s-uniform-stock-photography-chef-png-5b5ebd286fb860.7195478915329354644576-removebg-preview.png" style="width:300px;border:3px solid white"/><span><h1>Emma Huston</h1></span></div></div>
<div data-aos="zoom-in-down"><div><img src="img/chef-ladle-mature-professional-man-isolated-over-white-background-35579888-removebg-preview.png" style="width:300px;border:3px solid white;"/><span><h1>Robert Sedgewek</h1></span></div></div>

<div data-aos="zoom-in-down"><div><img src="img/o-FEMALE-CHEF-facebook-removebg-preview.png" style="width:300px;border:3px solid white;"/><span><h1>Ariana Amanda</h1></span></div></div>
</div>

<div data-aos="flip-right"><h1 class="featured2" id="cmts">{{__('lang.comt')}}</h1></div>

<div class="wC">
{{__('lang.name')}}: <input type="text" id="name"/></br>
{{__('lang.date')}} : <input type="date" id="date"></br>
{{__('lang.text')}}: <textarea rows="5" cols="30" id="bodyText"></textarea></br>
<button id="addComment">{{__('lang.add')}}</button>
</div>

<div id="container"></div>



</div>
<div class="social">
<a href="http://instagram.com/tangsholpanabdipaiyz"><i class="fab fa-instagram" id="insta"></i></a>
<a href="http://wa.me/77782471170"><i class="fab fa-whatsapp" id="wh"></i></a>
<a href="http://t.me/77782471170"><i class="fab fa-telegram"></i></a>
</div>
</div>
</div>


  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&libraries=drawing"></script>
<script src="Project.js"></script>
</body>
</html>
