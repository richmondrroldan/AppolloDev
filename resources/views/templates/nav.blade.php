@section('nav')

   <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                @if(Auth::guest())                
                <a class="navbar-brand topnav network-name" href="/">APPOLLO</a>
                <a class="navbar-brand topnav network-name pull-right" href="home">LOGIN</a>
                @elseif(Auth::user()->uType == 1)
                <a class="navbar-brand topnav network-name" href="/">APPOLLO</a>
                <a class="navbar-brand topnav network-name pull-right" href="/home">DBOARD</a>
                @else
                <a class="navbar-brand topnav network-name" href="/">APPOLLO</a><a class="navbar-brand topnav network-name pull-right" href="/logout">LOGOUT</a>    
                <a class="navbar-brand topnav network-name pull-right" href="{{ route('profile.show', Auth::user()->id)}}">{{Auth::user()->name}}</a>
                @endif

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
@endsection