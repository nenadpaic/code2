<?php $user_lagnguage = $this->session->userdata('language');
	  $this->lang->load('header_'. $user_lagnguage,$user_lagnguage);

?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo (isset($title))? $title : "Nemesis Development";?></title>
<meta name="description" content="<?php echo (isset($description))? $description : "Ovo je probica"; ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url();?>Nemesis Development responsive/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="<?php  echo base_url(); ?>Nemesis Development responsive/css/bootstrap-responsive.css" type="text/css" />
<link rel="stylesheet" href="<?php  echo base_url(); ?>Nemesis Development responsive/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php  echo base_url(); ?>Nemesis Development responsive/css/stylesheet.css" type="text/css" />

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>




</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/sr_RS/all.js#xfbml=1&appId=133605773364692";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<section class="hero-unit">
	<div class="container">
    	<div class="navbar">

        	<div class="navbar-inner">
             <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>
            <a href="#" class="brand"></a>
             <div class="nav-collapse collapse">

            <ul class="nav">
            <li class="<?php echo (isset($active_link))? $active_link : "";?>"><a href="index.html"><?php echo $this->lang->line('pocetna');?></a></li>
            <li><a href="#"><?php echo $this->lang->line('oMeni');?></a></li>
            <li><a href="#"><?php echo $this->lang->line('usluge');?></a></li>
            <li><a href="#"><?php echo $this->lang->line('portfolio');?></a></li>
            <li><a href="#"><?php echo $this->lang->line('shop');?></a></li>
            <li><a href="#"><?php echo $this->lang->line('kontakt');?></a></li>
            <li><?php echo($user_lagnguage == "srpski")? anchor('template/englishVersion', '<img src="' . base_url() .'Nemesis Development responsive/img/english_ikonica.png" alt="english version of site" title="English Version" />') : anchor('template/serbianVersion', '<img src="'.base_url().'Nemesis Development responsive/img/srbija_ikonica.png" alt="serbian version of site" title="Serbian Version" />') ;   ?></li>


            </ul>



				</div>




            </div><!--end of navbar-inner -->
            </div><!--end of navbar -->
            <div id="bannerCarousel" class="carouselBanner slide">
            <div class="carousel-inner">
            	<div class="active item">
                	<div class="hero-unit-inner text-center">
                	<h1><?php echo $this->lang->line('banner_h1_1');?></h1>
                    <h4><?php echo $this->lang->line('banner_h4_1');?></h4>

                    <a href="#" id="button_header" class="btn btn-primary btn-large"><?php echo $this->lang->line('button_banner_1');?></a><br />

                    <img src="<?php echo base_url(); ?>Nemesis Development responsive/img/broswer.png" alt="siguran dizajn" width="941" height="283" />


            	</div><!--end of hero unit inner -->
                 </div>

                <div class="item">
                	<div class="hero-unit-inner text-center">
                	<h1><?php echo $this->lang->line('banner_h1_2')?></h1>
                    <h4><?php echo $this->lang->line('banner_h4_2');?></h4>

                    <a href="#" id="button_header" class="btn btn-primary btn-large"><?php echo $this->lang->line('button_banner_2');?></a><br />

                    <img src="<?php  echo base_url(); ?>Nemesis Development responsive/img/broswer.png" alt="siguran dizajn" width="941" height="283" />


            	</div><!--end of hero unit inner -->
                </div>
                <div class="item">
                	<div class="hero-unit-inner text-center">
                	<h1><?php echo $this->lang->line('banner_h1_3')?></h1>
                    <h4><?php echo $this->lang->line('banner_h4_3');?></h4>

                    <a href="#" id="button_header" class="btn btn-primary btn-large"><?php echo $this->lang->line('button_banner_3');?></a><br />

                    <img src="<?php  echo base_url(); ?>Nemesis Development responsive/img/broswer.png" alt="siguran dizajn" width="941" height="283" />


            	</div><!--end of hero unit inner -->
                </div>

                <div class="item">
                	<div class="hero-unit-inner text-center">
                	<h1><?php echo $this->lang->line('banner_h1_4')?></h1>
                    <h4><?php echo $this->lang->line('banner_h4_4');?></h4>

                    <a href="#" id="button_header" class="btn btn-primary btn-large"><?php echo $this->lang->line('button_banner_4');?></a><br />

                    <img src="<?php  echo base_url(); ?>Nemesis Development responsive/img/broswer.png" alt="siguran dizajn" width="941" height="283" />


            	</div><!--end of hero unit inner -->
                </div>



            </div><!--end of carousel-inner -->
             <a class="carousel-control left" href="#bannerCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#bannerCarousel" data-slide="next">&rsaquo;</a>


            </div><!--end of carousel -->












    </div><!--end of container -->




</section><!--end hero unit -->
<?php $this->load->view($module."/".$view_file); // ucitavanje stranice modula ?>
<?php $this->lang->load('footer_'. $user_lagnguage,$user_lagnguage); ?>
<footer>
<div class="container">
	<div class="row">
    <div class="span12 text-center">
    	<nav class="table"><ul class="footer-links">
        	<li><a href="#" target="_blank"><?php echo $this->lang->line('footer_linkovi_pocetna');?></a></li>
            <li><a href="#" target="_blank"><?php echo $this->lang->line('footer_linkovi_oMeni');?></a></li>
            <li><a href="#" target="_blank"><?php echo $this->lang->line('footer_linkovi_usluge');?></a></li>
            <li><a href="#" target="_blank"><?php echo $this->lang->line('footer_linkovi_portfolio');?></a></li>
            <li><a href="#" target="_blank"><?php echo $this->lang->line('footer_linkovi_shop');?></a></li>
            <li><a href="#" target="_blank"><?php echo $this->lang->line('footer_linkovi_kontakt');?></a></li>

        </ul></nav>

        	<div class="social">
           <div class="fb-like" data-href="https://www.facebook.com/pages/Nemesisdevelopment/555835361174760?ref=hl" data-width="100" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>

            </div>
            <small>&copy; <a href="#" target="_blank">Nemesis Development</a> 2013.</small>

    </div>
    </div>


</div>


</footer> <!-- end of footer -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?php echo  base_url(); ?>Nemesis Development responsive/js/bootstrap.js" type="text/javascript"></script>
<script>
$(function(){
	$('.carouselBanner').carousel()

	});
$(function(){
	$('.carouselTestimonial').carousel()

	});

</script>
</body>
</html>
