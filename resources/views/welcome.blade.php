<!DOCTYPE html>
<html>
    <head>
        <title>Hello</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Hello</div>
                <div class="container">
	                <div class="row">
		                <div class="col-xs-12 col-sm-6">
			                <h3>Login</h3>
			                @include('auth.login')
		                </div>
		                <div class="col-xs-12 col-sm-6">
			                <h3>Register</h3>
			                @include('auth.register')
		                </div>
	                </div>
                </div>
            </div>
        </div>
    </body>
</html>
