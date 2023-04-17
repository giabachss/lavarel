<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pet Shop</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
           
    </head>
    <head>
        <title>Fruits Website Landing page</title>
        <link rel="stylesheet" href="style.css">
        <style>
            *{
    padding:0;
    margin:0;
}
.container{
    height: 800px;
    width: 100%;
    background-image: url(http://www.atyourbusiness.com/blog/wp-content/uploads/2019/07/petsupply-1024x653.jpg);
    background-size:cover;
}
.top{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding:15px 10px 10px 10px;
}
.logo{
    width: 50%;
    height: 50px;
    display: flex;
    font-size: 30px;
    align-items: center;
    color:rgb(8, 7, 7);

}
.nav{
    display: flex;
    width: 50%;
    justify-content: space-between;
    align-items: center;
    list-style: none;
    padding:0px 20px;
    font-weight: bold;
    font-size: 18px;
    color:rgb(12,82,0);
}
li{
    padding:10px;
}
li:hover{
    color:rgb(255,192,0);
    background-color:rgb(12,82,0);
    cursor: pointer;
}
.right{
    width: 400px;
    height: 400px;
    background-size:cover;
    position: relative;
    left: -50px;

}
.heading{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    padding-top:100px;
}
.text{
    font-size: 70px;
    width: 470px;
    color:white;

}
span{
    font-weight: bold;
    color:rgb(0, 0, 0);
}
p{
    color:rgb(12,150,2);
    padding:10px 0px;
}
button{
    padding:15px 20px;
    border-radius: 30px;
    border:none;
    font-weight: bold;
    color:rgb(12,82,0);
    background-color:rgb(242, 242, 8);
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="container">
            <div class="top">
                <div class="logo">
                   <img src="https://st.depositphotos.com/1031343/2194/v/950/depositphotos_21949883-stock-illustration-pet-shop-stamp.jpg" width="100px" height="100px"> 
                  Pet Shop
                </div>
                <div class="nav">
                    <li>        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif</li>
                    <li>CAT</li>
                    <li>DOG</li>
                    <li>TURTLE</li>
                    <li>LOGIN</li>
                </div>
            </div>
            <div class="heading">
                <div class="left">
                    <p>Save up to <span>$1000</span>on your monthy groceries</p>
                    <button>SHOPPING NOW</button>
                </div>
                <div class="right"></div>
            </div>
        </div>
        </div>
    </body>
</html>