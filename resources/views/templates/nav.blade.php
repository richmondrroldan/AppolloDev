@section('nav')

   <!-- Navigation -->
    
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">

                @if(Auth::guest())                
                <a class="navbar-brand topnav network-name" href="/">APPOLLO</a>
                <a class="navbar-brand topnav network-name pull-right" href="home">LOGIN</a>
                @elseif(Auth::user()->uType == 1)
                <a class="navbar-brand topnav network-name" href="/">APPOLLO</a>
                <a class="navbar-brand topnav network-name pull-right" href="/home">DBOARD</a>
                @else
                <a class="navbar-brand topnav network-name" href="/">APPOLLO</a>
                <a class="navbar-brand topnav network-name pull-right" href="/logout"></a>
                <div class="collapse navbar-collapse" id="app-navbar-collapse"> 
                    <ul class="nav navbar-nav navbar-right">
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
                </div>
                
                @endif

        <!-- /.container -->
    </nav>
@endsection