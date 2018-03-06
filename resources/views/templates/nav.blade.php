@section('nav')

   <!-- Navigation -->
    
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">

                @if(Auth::guest())                
                <a class="navbar-brand topnav network-name" href="/">APPOLLO</a>
                <a class="navbar-brand topnav network-name" href="">PROGRAMS</a>
                <a class="navbar-brand topnav network-name" href="">CONTACT US</a>
                <a class="navbar-brand topnav network-name " href="">ABOUT</a>
                <a class="navbar-brand topnav network-name " href="home">LOGIN</a>
                @elseif(Auth::user()->uType == 1)
                <a class="navbar-brand topnav network-name" href="/">APPOLLO</a>
                <a class="navbar-brand topnav network-name pull-right" href="/home">DBOARD</a>
                @else
                <a class="navbar-brand topnav network-name" href="/">APPOLLO</a><a class="navbar-brand topnav network-name pull-right" href="/logout">LOGOUT</a>    
                <a class="navbar-brand topnav network-name pull-right" href="{{ route('profile.index', Auth::user()->id)}}">{{Auth::user()->name}}</a>
                @endif

        <!-- /.container -->
    </nav>
@endsection