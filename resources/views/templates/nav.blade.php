@section('nav')

   
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    APPOLLO
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
            

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li class="dropdown">
                        <a href="/home" class="dropdown dropdown-toggle" >
                                Login</li>
                        
                            </a>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Register <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/mRegister"><i class="fa fa-btn fa-sign-out"></i>Register as Mentor</a></li>
                                <li><a href="{{ url('/register') }}"><i class="fa fa-btn fa-sign-out"></i>Register as User</a></li>
                            </ul>
                        </li>
                    @else
                        
                        
                        <li class="dropdown">
                            <a href="/home" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{Auth::user()->name}} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/home">View Profile</a></li>
                                <li><a href="{{ route('changePass.edit', Auth::user()->id) }}">Change Password</a></li>
                                <li><a href="/logout">Log out</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav><!-- 
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">

                @if(Auth::guest())                
                <a class="navbar-brand topnav network-name" href="/">APPOLLO</a>
                <a class="navbar-brand topnav network-name pull-right" href="home">LOGIN</a>
                @elseif(Auth::user()->uType == 1)
                <a class="navbar-brand topnav network-name" href="/">APPOLLO</a>
                <a class="navbar-brand topnav network-name pull-right" href="/home">DBOARD</a>
                @else
                <a class="navbar-brand topnav network-name" href="/">APPOLLO</a>
                <ul class="nav navbar-nav navbar-right" style="margin-right: 20px">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{Auth::user()->name}} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/profile"><i class="fa fa-btn fa-sign-out"></i>View Profile</a></li>
                            <li><a href="{{ route('changePass.edit', Auth::user()->id) }}"><i class="fa fa-btn fa-sign-out"></i>Change Password</a></li>
                            <li><a href="/logout"><i class="fa fa-btn fa-sign-out"></i>Log Out</a></li>
                        </ul>
                    </li>
                </ul>             
                @endif
    </nav> -->
@endsection