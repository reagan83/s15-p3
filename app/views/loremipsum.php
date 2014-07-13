<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lorem Ipsum: Developer's Best Friend</title>
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:700);

        body {
            margin:0;
            font-family:'Lato', sans-serif;
            text-align:center;
            color: #999;
        }

        .welcome {
            width: 300px;
            height: 200px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -150px;
            margin-top: -100px;
        }

        a, a:visited {
            text-decoration:none;
        }

        h1 {
            font-size: 32px;
            margin: 16px 0 0 0;
        }
    </style>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>P2 - Reagan Williams - cscie-s15 portfoilio</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/cover.css" rel="stylesheet">

</head>

<body>

    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">

                <div class="masthead clearfix">
                    <div class="inner">
                        <h4 class="masthead-brand">Reagan Williams</h4>
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="#">Home</a></li>
                        </ul>
                    </div>
                </div>

                <div class="inner cover">
                    <div class="hero-avatar">
                        <span class="avatar--large">
                            <img src="/images/reagan.williams.jpg" class="avatar-image avatar-image--large imagePicker-target" title="Reagan Williams" alt="Reagan Williams">
                        </span>
                    </div>
                    <h1 class="cover-heading">P3: Laravel App</h1>
                    <p class="lead">Come wonder in the amazement of what Laravel can do!</p>
                </div>
            </div>
            <div class="container">

            <div class="row " style="margin-top: 25px;">
            <div class="col-md-3" style="float: none; margin: 0 auto;" role="main">

                <h3>Lorem Ipsum Generator</h3>

                <form method="get" name="pwoptions" role="form">

                    <div class="form-group">
                        <label for="num_words">How many paragraphs do you want?</label>
                        <input type="text" class="form-control" id="num_words" name="num_words" value="<?php echo $password_num_paragraph; ?>">
                    </div>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" name="include_numbers" <?php echo $password_include_numbers == "on" ? "checked" : ""; ?> > Include numbers?
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" name="include_specialchars" <?php echo $password_include_specialchars == "on" ? "checked" : ""; ?> > Include special characters?
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" name="include_uppercase" <?php echo $password_include_uppercase == "on" ? "checked" : ""; ?> > Upper case first letter of password?
                        </label>
                    </div>

                    <button type="submit" class="btn btn-success">Generate Words!</button>
                </form>
                <br>
            </div>
            </div>


                <div class="mastfoot">
                    <div class="inner">
                        <p>Bootstrap template inspired by <a href="https://twitter.com/mdo">@mdo</a>.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  

</body>
</html>
