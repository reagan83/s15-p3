<?php
use Badcow\LoremIpsum\Generator;

// default paragraphs amount
$paragraphs = 5;

$form_submitted = false;

// route specifications (easy)
if (!empty($paras))
{
    $form_submitted = 1;
    $paragraphs = $paras;
}

// form validation (harder part of assignment)
if (!empty($_GET)) {
    $form_submitted = 1;

    // if paragraphs is a number
    if (is_numeric($_GET['paragraphs'])) {
        $paragraphs = $_GET['paragraphs'];
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lorem Ipsum: Developer's Best Friend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                            <li class=""><a href="/">Home</a></li>
                            <li class="active"><a href="/loremipsum">Lorem Ipsum</a></li>
                            <li class=""><a href="/useripsum">Random Users!</a></li>
                        </ul>
                    </div>
                </div>

                <div class="inner cover">
                    <div class="hero-avatar">
                        <span class="avatar--large">
                        <a href="/" alt="home">
                            <img src="/images/reagan.williams.jpg" class="avatar-image avatar-image--large imagePicker-target" title="Reagan Williams" alt="Reagan Williams">
                        </a>
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
                        <label for="paragraphs">How many paragraphs do you want?</label>
                        <input type="text" class="form-control" id="paragraphs" name="paragraphs" value="<?php echo $paragraphs; ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Generate</button>
                </form>
                <br>

<?php

if ($form_submitted == true) {
    $generator = new Badcow\LoremIpsum\Generator();

    // generate lorem ipsum based on user input
    $paragraphs = $generator->getParagraphs($paragraphs);
    echo implode('<p>', $paragraphs);
}

?>

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
