<!DOCTYPE html>
<html>
    <head>
        <title>Welcome back</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

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
                <div class="title">Welcome back <?php echo $name ?></div>
                <div>
	                <form method="GET" action="/auth/logout">
						<button name="Logout" title="Logout" class="btn btn-default">Logout</button>
	                </form>
                </div>
                <?php if ($quote['value']['joke']) { ?>
	                <blockquote> <?php print_r($quote['value']['joke']); ?></blockquote>
                <?php } ?>
               
            </div>
        </div>
    </body>
</html>
