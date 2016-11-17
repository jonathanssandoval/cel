<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Catap. Celebrate. Archive. your animation cel collection</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.standalone.min.css"/>
    <link rel="stylesheet" href="{{asset ('style.css')}}">

</head>

<body class="@yield('bodyclass')">
@if(Auth::check())
@else
<nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
            
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/logo.png') }}"alt="cel"> 
                </a>
            </div>
                <!-- Right Side Of Navbar -->
                 <ul class="nav navbar-nav navbar-right">
                    <li class="register"><a href="{{ url('register') }}">CREATE AN ACCOUNT</a></li>
               </ul>  
                <ul class="nav navbar-nav navbar-right">
                    <li class="login"><a href="{{ url('login') }}">LOGIN</a></li>
               </ul>                          
        </div>
    </nav>
@endif

@if(Auth::check())
<nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
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
                <img src="{{ asset('img/logo.png') }}"alt="cel"> 
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                   <!--  <li><a href="{{ url('cats') }}">Cats</a></li>
                    <li><a href="{{ url('toys') }}">Toys</a></li> -->
                    <li><a href="{{ url('cels') }}">Collection</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" id="custom" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
@endif



@if (Session::has('message'))
    <div class="note note-info">
        <p>{{ Session::get('message') }}</p>
    </div>
@endif
@if ($errors->count() > 0)
    <div class="note note-danger">
        <ul class="list-unstyled">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif



@yield('content')


</div>

<script src="https://use.typekit.net/pwr0stt.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3.0/dist/isotope.pkgd.js"></script>

<script>
$(function(){
    // init Isotope
var $grid = $('.isotope').isotope({
  itemSelector: '.item',
  layoutMode: 'fitRows',
  // getSortData: {
  //   category: '[data-filter]',
  // }
});
// external js: isotope.pkgd.js

// bind filter button click
$('#filters').on( 'click', 'a', function() {
  var filterValue = $( this ).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});

});

</script>


<script>
    window._token = '{{ csrf_token() }}';
</script>


</body>
</html>