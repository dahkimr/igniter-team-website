<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/myCss.css">
    <script>

        $(window).scroll(function() {
            if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/
            {
                $('.custom-navbar').addClass('opaque');
            } else {
                $('.custom-navbar').removeClass('opaque');
            }
        });


    </script>
</head>

<body >

<nav class="navbar navbar-default navbar-fixed-top  custom-navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="#">Logo</a>-->
            <a class="navbar-logo" href="#" class="pull-left"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
			<li <?php if($title =="Home") echo "class=\"active\""?>><a href="home">Home</a></li>
            <li <?php if($title =="Page1") echo "class=\"active\""?>><a href="page1">Summary</a></li>
            <li <?php if($title =="Page2") echo "class=\"active\""?>><a href="page2">Installation</a></li>
            <li <?php if($title =="Page3") echo "class=\"active\""?>><a href="page3">Tutorial</a></li>
            <li <?php if($title =="Page4") echo "class=\"active\""?>><a href="page4">Sample</a></li>
            <li <?php if($title =="Page5") echo "class=\"active\""?>><a href="page5">Conclusion</a></li>
            <li <?php if($title =="Page6") echo "class=\"active\""?>><a href="page6">Credits</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
	<img class="banner" src="<?php echo base_url(); ?>assets/img/banner.png" width="1145" height="310"/>





