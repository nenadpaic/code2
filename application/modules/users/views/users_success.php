<section id="process">
	<div class="container">
		<div class="row">
			
			<div class="span4"></div>
			<div class="span4">
			<h3>Dobrodosao <?php echo $this->session->userdata('username'); ?>,</h3>
			<p>Uspesno ste se ulogovali na moj sajt,zelim vam da uzivate u sadrzaju koji ja pruzam. Iskoristite posebne pogodnosti
			koje vam omogucava sistem za kupovinu.</p>
			
			
			</div>
			<div class="span4"></div>
			
			
</div>
</div>
</section>
<script>
	$(document).ready(function(){
		
		setTimeout('lokacija()', 5000);
		
	});
	
function lokacija(){
	
	location.href ='profile';
}	
	
</script>