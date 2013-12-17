
<?php
foreach($obavestenja->result() as $row){
	if($lang == "srpski"){
		
	
	?>
	<div class="media prostor">
    <a class="pull-left" href="#">
    <img class="media-object" src="http://placehold.it/100x100" data-src="holder.js/64x64">
    </a>
    <div class="media-body">
    <h4 class="media-heading"><?php echo $row->naslov_srb; ?></h4>
	<p><?php echo $row->sadrzaj_srb ?></p>
    
     
    <!-- Nested media object -->
    <div class="media">
    ...
    </div>
    </div>
    </div>
<?php
}
if($lang == "english"){
	

?>
<div class="media prostor">
    <a class="pull-left" href="#">
    <img class="media-object" src="http://placehold.it/100x100" data-src="holder.js/64x64">
    </a>
    <div class="media-body">
    <h4 class="media-heading"><?php echo $row->naslov_eng; ?></h4>
	<p><?php echo $row->sadrzaj_eng ?></p>
    
     
    <!-- Nested media object -->
    <div class="media">
    ...
    </div>
    </div>
    </div>
	
	<?php
}}
?>
