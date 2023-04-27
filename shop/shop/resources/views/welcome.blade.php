<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Petshop</title>
    <link href="{{asset('user/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('user/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('user/css/responsive.css')}}" rel="stylesheet">     
</head><!--/head-->
<body>
	<header id="header"><!--header-->		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="/"><img src="{{asset('user/image/logo1.png')}}" alt="" style="width:100px;height:100px"></a>
						</div>
						<div class="btn-group pull-right">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="/cart"><i class="fa fa-shopping-cart"></i> Cart </a><span class="badge badge-pill badge-danger"></span></li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/Home')}}" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach($category as $key => $cate)
							
									<li class="panel-title"><a href="{{URL::to('/list-of-product/'.$cate->category_id)}}">{{$cate->category_name}}</a></li>

							@endforeach
                                    </ul>
                                </li> 
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>PET</span>SHOP</h1>
									<p>Save up to <span>$1000</span> on your monthly groceries</p>
									<a href = Home><button type="button" class="btn btn-default get">SHOPPING NOW</button></a>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('user/image/slide.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>			
						</div>		
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
			
	<section>
		<div class="container">
			<div class="row">			
				<div class="col-sm-12 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>
</body>
</html>