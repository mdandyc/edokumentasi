
@if (Auth::user()->jabatan !== 'admin')
	{{-- expr --}}
	@if (Auth::user()->username == $dokumen->usernameFK)

<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Tables :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="/css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="/css/font.css" type="text/css"/>
<link href="/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="/js/jquery2.0.3.min.js"></script>
<script src="/js/modernizr.js"></script>
<script src="/js/jquery.cookie.js"></script>
<script src="/js/screenfull.js"></script>
<script>
	$(function () {
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

		if (!screenfull.enabled) {
			return false;
		}

		$('#toggle').click(function () {
			screenfull.toggle($('#container')[0]);
		});	
	});
</script>
<!-- tables -->
<link rel="stylesheet" type="text/css" href="/css/table-style.css" />
<link rel="stylesheet" type="text/css" href="/css/basictable.css" />
<script type="text/javascript" src="/js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
	<nav class="main-menu">
		<ul>
			<li>
				<a href="/dokumen">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Dashboard
					</span>
				</a>
			</li>

						<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-file-text-o nav_icon"></i>
						<span class="nav-text">Pages</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="/dokumen">
							Dokumen
						</a>
					</li>
					<li>
						<a class="subnav-text" href="/uploadedfile">
							UploadedFile
						</a>
					</li>
					@if(Auth::user()->jabatan == 'admin')
					<li>
						<a class="subnav-text" href="/kategori">
							Kategori
						</a>
					</li>
					@endif
				</ul>
			</li>

		</ul>
		<ul class="logout">
			<li>
			<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
			</span>
			</a>
			</li>
		</ul>
	</nav>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<a href="index.html"><img src="/images/logoo.png" alt="" /></a>
			</div>


			<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			
			<div class="agile-grids">	
				<form action="/dokumen/{{$dokumen->id}}" method="post" enctype="multipart/form-data">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
    <div class="form-group">
        <label>File</label>
        <input type="file" name="nama_dokumen" class="form-control">
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <select name="kategoriFK" id="" class="form-control">
        	@foreach($kategori as $data)
        	<option value="{{$data->id}}"
        	@if($dokumen->kategoriFK == $data->id)
        	selected
        	@endif
        	>{{$data->jenis_kategori}}</option>
        	@endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" value="{{$dokumen->keterangan}}">
    </div>
    <div class="form-group">
        <label>Tanggal</label>
        <input type="date" name="tanggal" placeholder="Tanggal" class="form-control" value="{{$dokumen->tanggal}}">
    </div>
    @if (Auth::user()->jabatan == 'admin')
    <div class="form-group">
        <label>Username</label>
        <select name="usernameFK" id="" class="form-control">
        	@foreach($user as $data)
        	<option value="{{$data->username}}"
        	@if($dokumen->usernameFK == $data->username)
        	selected
        	@endif>{{$data->username}}</option>
        	@endforeach
        </select>
    </div>
    @else
	<input type="hidden" name="usernameFK" value="{{Auth::user()->username}}">
	@endif

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="put">
    <input type="submit" value="SUBMIT" class="btn btn-primary">
</form>
			</div>

		</div>
		<!-- footer -->
		<div class="footer">
			<p>© 2018 Design by Hamba Allah</p>
		</div>
		<!-- //footer -->
	</section>
	<script src="/js/bootstrap.js"></script>
	<script src="/js/proton.js"></script>
</body>
</html>
	@endif
@else
<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Tables :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="/css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="/css/font.css" type="text/css"/>
<link href="/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="/js/jquery2.0.3.min.js"></script>
<script src="/js/modernizr.js"></script>
<script src="/js/jquery.cookie.js"></script>
<script src="/js/screenfull.js"></script>
<script>
	$(function () {
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

		if (!screenfull.enabled) {
			return false;
		}

		$('#toggle').click(function () {
			screenfull.toggle($('#container')[0]);
		});	
	});
</script>
<!-- tables -->
<link rel="stylesheet" type="text/css" href="/css/table-style.css" />
<link rel="stylesheet" type="text/css" href="/css/basictable.css" />
<script type="text/javascript" src="/js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
	<nav class="main-menu">
		<ul>
			<li>
				<a href="/dokumen">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Dashboard
					</span>
				</a>
			</li>

						<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-file-text-o nav_icon"></i>
						<span class="nav-text">Pages</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="/dokumen">
							Dokumen
						</a>
					</li>
					<li>
						<a class="subnav-text" href="/uploadedfile">
							UploadedFile
						</a>
					</li>
					@if(Auth::user()->jabatan == 'admin')
					<li>
						<a class="subnav-text" href="/kategori">
							Kategori
						</a>
					</li>
					@endif
				</ul>
			</li>

		</ul>
		<ul class="logout">
			<li>
			<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
			</span>
			</a>
			</li>
		</ul>
	</nav>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<a href="index.html"><img src="/images/logoo.png" alt="" /></a>
			</div>


			<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			
			<div class="agile-grids">	
				<form action="/dokumen" method="post" enctype="multipart/form-data">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
    <div class="form-group">
        <label>File</label>
        <input type="file" name="nama_dokumen" class="form-control">
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <select name="kategoriFK" id="" class="form-control">
        	@foreach($kategori as $data)
        	<option value="{{$data->id}}">{{$data->jenis_kategori}}</option>
        	@endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="keterangan" placeholder="Keterangan" class="form-control">
    </div>
    <div class="form-group">
        <label>Tanggal</label>
        <input type="date" name="tanggal" placeholder="Tanggal" class="form-control">
    </div>
    @if (Auth::user()->jabatan == 'admin')
    <div class="form-group">
        <label>Username</label>
        <select name="usernameFK" id="" class="form-control">
        	@foreach($user as $data)
        	<option value="{{$data->username}}">{{$data->username}}</option>
        	@endforeach
        </select>
    </div>
    @else
	<input type="hidden" name="usernameFK" value="{{Auth::user()->username}}">
	@endif

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="SUBMIT" class="btn btn-primary">
</form>
			</div>

		</div>
		<!-- footer -->
		<div class="footer">
			<p>© 2018 Design by Hamba Allah</p>
		</div>
		<!-- //footer -->
	</section>
	<script src="/js/bootstrap.js"></script>
	<script src="/js/proton.js"></script>
</body>
</html>

@endif
