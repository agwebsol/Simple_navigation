
<!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
            <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        </head>
        <body>
            <nav class="w3-sidenav w3-black" style="width:70px">
               <? include('template/navigation.php'); ?> 
            </nav>
            <div class="container-fluid" style="margin-left:70px">
                <div  style="float:left; width:100%; background-color:white; height:500px;">
                    <? include('template/'.$load.'.php'); ?>
                </div>
            </div>
        </body>
    </html>