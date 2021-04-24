<?php get_header();?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NHS Website</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>

<div class="slider" style="margin-top: 30px;">
    <div class="slides">

      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">

      <div class="slide first">
        <img src="http://localhost:8888/wordpressnhs/wp-content/uploads/2021/04/nhs.png" alt="">
      </div>
      <div class="slide">
        <img src="http://localhost:8888/wordpressnhs/wp-content/uploads/2021/04/img-1.jpg" alt="">
      </div>
      <div class="slide">
        <img src="http://localhost:8888/wordpressnhs/wp-content/uploads/2021/04/img-2.jpg" alt="">
      </div>
      <div class="slide">
        <img src="http://localhost:8888/wordpressnhs/wp-content/uploads/2021/04/WINCHNHS.jpg" alt="">
      </div>

      <div class="navigation-auto" style="display: none;">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
      </div>

    </div>

    <div class="navigation-manual" style="margin-left: 15rem;">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
    </div>

  </div>

  <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
  </script>


<br>
	<section class="page-wrap">
<div class="container">


<section class="row">

	<div class="col-lg-3">

						
						<?php if( is_active_sidebar('page-sidebar') ):?>

						<?php dynamic_sidebar('page-sidebar');?>

					<?php endif;?>

				</div>



<div class="col-lg-9">

	<h1><?php the_title();?></h1>


<br>
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
		<?php the_content ();?>
	
	<?php endwhile; endif;?>


	<?php get_template_part('includes/section','content');?>





  </html>
</div>

</section>
</section>


</div>

<section>
	
	
<div class="col-lg-9">

</div>
	


<?php get_footer();?>



</section>

