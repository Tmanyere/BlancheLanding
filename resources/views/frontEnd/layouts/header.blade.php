<div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
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
                            <li><a href="{{url('/')}}" class="active">SHOP</a></li>
                            <li ><a href="#">OUR STORY</a></li>
                            <!-- <li ><a href="#">EXPERTISE</a></li> -->
                            
                        </ul>
                    </div>
                </div>
                <!-- <div class="logo pull-left">
                        <a href="{{url('/')}}"><img src="{{asset('frontEnd/images/home/logo.png')}}" alt="" /></a>
                    </div> -->
                <div class="col-sm-4">
                    
                </div>
                <div class="col-sm-4">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                        <li><a href="#" target="_blank">Contact</a></li>
                        <li><a href="#"><i class="fa fa-search"></i> </a></li>
                            <li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                            @if(Auth::check())
                                <!-- <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                                <li><a href=""><i class="fa fa-lock"></i> Logout </a>
                                </li> -->
                            @else
                                <li><a href="{{url('/login_page')}}"><i class="fa fa-user"></i> </a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->