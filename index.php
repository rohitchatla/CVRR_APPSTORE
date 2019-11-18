<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style type="text/css">
    body{
        background-image:linear-gradient(violet,blue);
    }
    #header{
        text-align: center;
    }
        .container { margin-top: 100px; }
        .list-group-item { padding: 5px; border: 0px; }
        .price { font-size: 72px; }
        .currency {
            font-size:25px;
            position: relative;
            top: -30px;
        }
        .card { 
        width: 350px;
        background-color: #72F904; }
        .card-title{
          color: #FA06AC; 
        }
        .card:hover {
            transform: scale(1.05);
            transition: all .4s ease-in-out;
        }
        .list-group{
          cursor: pointer;
        }
    </style>
</head>
<body>
  <h5 style="color: red;">CVRROCKET</h5>
    <h1 id=header>CVRR_APPSTORE</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="price"><span class="currency">$</span>10</h3>
                    </div>
                    <div class="card-block text-center">
                        <div class="card-title">
                           App1
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">Features</li>
                            <li class="list-group-item">Description</li>
                            <li class="list-group-item">Latest updates</li>
                            <li class="list-group-item">Bug fixes</li>
                            <li class="list-group-item">Released on</li>
                        </ul>
                        <br><br>
                       <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

                          <!-- Identify your business so that you can collect the payments. -->
                          <input type="hidden" name="business" value="">

                          <!-- Specify a Buy Now button. -->
                          <input type="hidden" name="cmd" value="_xclick">

                          <!-- Specify details about the item that buyers will purchase. -->
                          <input type="hidden" name="item_name" value="App1">
                          <input type="hidden" name="amount" value="10">
                          <input type="hidden" name="currency_code" value="USD">

                          <!-- Display the payment button. -->
                          <input type="image" name="submit" border="0"
                          src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                          alt="Buy Now">
                          <img alt="" border="0" width="1" height="1"
                          src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="price"><span class="currency">$</span>50</h3>
                    </div>
                    <div class="card-block text-center">
                        <div class="card-title">
                           App2
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">Features</li>
                            <li class="list-group-item">Description</li>
                            <li class="list-group-item">Latest updates</li>
                            <li class="list-group-item">Bug fixes</li>
                            <li class="list-group-item">Released on</li>
                        </ul>
                        <br><br>
                       <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

                          <input type="hidden" name="business" value="">

                          <input type="hidden" name="cmd" value="_xclick">

                          <input type="hidden" name="item_name" value="App2">
                          <input type="hidden" name="amount" value="50">
                          <input type="hidden" name="currency_code" value="USD">

                          <input type="image" name="submit" border="0"
                          src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                          alt="Buy Now">
                          <img alt="" border="0" width="1" height="1"
                          src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="price"><span class="currency">$</span>400</h3>
                    </div>
                    <div class="card-block text-center">
                        <div class="card-title">
                           App3
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">Features</li>
                            <li class="list-group-item">Description</li>
                            <li class="list-group-item">Latest updates</li>
                            <li class="list-group-item">Bug fixes</li>
                            <li class="list-group-item">Released on</li>
                        </ul>
                        <br><br>
                       <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

                          <input type="hidden" name="business" value="">

                          <input type="hidden" name="cmd" value="_xclick">

                          <input type="hidden" name="item_name" value="App3">
                          <input type="hidden" name="amount" value="400">
                          <input type="hidden" name="currency_code" value="USD">

                          <input type="image" name="submit" border="0"
                          src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                          alt="Buy Now">
                          <img alt="" border="0" width="1" height="1"
                          src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="price"><span class="currency">$</span>800</h3>
                    </div>
                    <div class="card-block text-center">
                        <div class="card-title">
                           App4
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">Features</li>
                            <li class="list-group-item">Description</li>
                            <li class="list-group-item">Latest updates</li>
                            <li class="list-group-item">Bug fixes</li>
                            <li class="list-group-item">Released on</li>
                        </ul>
                        <br><br>
                       <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

                          <input type="hidden" name="business" value="">

                          <input type="hidden" name="cmd" value="_xclick">

                          <input type="hidden" name="item_name" value="App4">
                          <input type="hidden" name="amount" value="800">
                          <input type="hidden" name="currency_code" value="USD">

                          <input type="image" name="submit" border="0"
                          src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                          alt="Buy Now">
                          <img alt="" border="0" width="1" height="1"
                          src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>