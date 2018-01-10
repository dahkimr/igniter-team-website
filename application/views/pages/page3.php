<header class="jumbotron">
    <div class="container text-center">
        <div class="row">
            <h1>Creating a Site</h1>
        </div>
    </div>
</header>


<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>Step 1: Set the base url
</h1>
    </div>
    <p>
		<img src="<?php echo base_url(); ?>assets/img/s1.png" />
    </p>
</div>

<div class="container">
    <div class="page-header">
        <h1>Step 2: Make a controller
</h1>
    </div>
    <p style="font-size:20px">
		In /application/controllers, make a file called Pages.php.
		<br>This file is a controller that will load pages for you, and should contain the following code:
		<br><br><img src="<?php echo base_url(); ?>assets/img/s2.png" />
    </p>
</div>

<div class="container">
    <div class="page-header">
        <h1>Step 3: Set up header and footer files
</h1>
    </div>
    <p style="font-size:20px">
		In /application/views, create a folder called templates.
		<br>In that folder, create header.php and footer.php files.
		<br>Using these files, you don't need to repeat the html and body tags for each page.
		<br><br><img src="<?php echo base_url(); ?>assets/img/s3-h.png" />
		<br><br><img src="<?php echo base_url(); ?>assets/img/s3-f.png" />
    </p>
</div>

<div class="container">
    <div class="page-header">
        <h1>Step 4: Make a page
</h1>
    </div>
    <p style="font-size:20px">
		In /application/views, create a folder called pages. 
		<br>In that folder, create a page.php file for your page.
		<br>You can put all your html code in here (and remember, you don't need html or body tags).
    </p>
</div>

<div class="container">
    <div class="page-header">
        <h1>Step 5: Use CSS
</h1>
    </div>
   <p style="font-size:20px">
		At the root, create a folder called assets. In /assets, create a folder called css.
		<br>In /assets/css, create a style.css file to keep all you css code.
		<br>And finally, create a link to it in your header.php file.
		<br>Note: Also include a link for bootstrap if you plan to use it.
		<br><br><img src="<?php echo base_url(); ?>assets/img/s5.png" />
    </p>
</div>

<div class="container">
    <div class="page-header">
        <h1>Step 6: Use Images
</h1>
    </div>
    <p style="font-size:20px">
		In your /assets folder, create a folder called img, and put your images in there.
		<br>Then if you're working with images, use php to specify the page to the image.
		<br><br><img src="<?php echo base_url(); ?>assets/img/s6.png" />
    </p>
</div>

<div class="container">
    <div class="page-header">
        <h1>Conclusion
</h1>
    </div>
    <p style="font-size:20px">
		Now you can go ahead and create a page using html code in your page.php file (/application/views/pages/page.php) and css in in your style.css file (/assets/css/style.css).
		<br><br>
	</p>
</div>