
<!DOCTYPE html>
<html lang="en">
	    <head>
	        <meta charset="utf-8">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	        <meta name="viewport" content="width=device-width, initial-scale=1">

	        <title>Home Work</title>
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

			<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		</head>
	<body>
		
		<nav class="navbar navbar-default navbar-fixed-top">
		    <div class="container">
		        <div id="navbar" class="navbar-collapse collapse">
		            <ul class="nav navbar-nav">
		               <li><a href="{{ url('banners')}}">Banners</a></li>
		               <li><a href="{{ url('languages')}}">Languages</a></li>
		            	
		            </ul>
		        </div>
		    </div>
        </nav>

        <div class="container">
            <div class="row">
               <h3>Laravel CRUD MASTER CLASS -{{ ucfirst($current-route) }}</h3>
            </div>

            <div class="row">
            	@yield('content')
            </div>
        	
        </div>

	</body>	
</html>	

		
