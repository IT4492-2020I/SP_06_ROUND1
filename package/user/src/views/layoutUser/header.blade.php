<div id="header">
    <div class="header-top">
        <div class="container ">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Dai Hoc Bach Khoa Ha Noi</a></li>
                    <li><a href="{{route('home')}}"><i class="fa fa-phone"></i> 0983567927</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="menu-beta l-inline">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <span>{{Auth::user()}}</span>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()-> name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{route('user',Auth::id())}}">
                                {{ __('Trang Cá Nhân') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- .container -->
    </div>
    <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <p style="font-size: 500%; font-family: 'Georgia', Agency FB, serif; color: #e8103a">
                    <a href="{{route('home')}}" id="logo"><img src="assets/dest/images/logo1.png" style="width:75px; height:75px;vertical-align: middle; display: inline" alt=""></a>
                    <i>Nebula</i>
                </p>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="{{route('sreach')}}">
                        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>

                <div class="beta-comp">
                    <div class="cart">
                        <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng<i class="fa fa-chevron-down"></i></div>
                    </div>
                    <!-- .cart -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- .container -->
    </div>
    <!-- .header-body -->
    <div class="header-bottom" style="background-color: rgb(1,93,127);">
        <div class="container">
            <!--  <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a> -->
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{route('home')}}">Trang chủ</a></li>
                    <li><a href="{{route('category',18)}}">Sản phẩm</a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div>
        <!-- .container -->
    </div>
    <!-- .header-bottom -->
</div>
