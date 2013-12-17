<div class="span4 text-center">
<h3>Avatar upload</h3><hr>
<?php foreach($profil->result() as $row){ 
	if(is_file(FCPATH."upload/$row->id.png")){?>
	<img class="img-polaroid" src='<?php  base_url() ?>/upload/<?php echo $row->id ?>.png' alt="profilni avatar" />
	<?php }else{ ?>
<img class="img-polaroid" src="<?php base_url() ?>/upload/avatar_default.jpg" alt="Onovni avatar" />
<?php } ?>
<br /><br/>

<?php echo form_open_multipart('upload/do_upload');?>
<p class="email">
<input type="file" name="userfile" size="20" />
</p>
<br />
<p class="submit">
<input type="submit" value="upload" />
</p>
</form>

</div>

<div class="span4">
<h3>Profilni podaci</h3><hr>
<?php 
	$form = array(
	'class' => 'form prostor',
	'id' => 'forma'
	);
	echo form_open('#', $form);
	?>
	<p class="email">
	<?php
	echo form_label('Ime :', 'ime');
	$ime = array(
	'name' => 'ime',
	'value' => $row->ime,
	'id'  => 'ime'
	
	);
	echo form_input($ime);
	?>
	</p>
	<p class="email">
	<?php
	echo form_label('Prezime :', 'prezime');
		$prezime = array(
	'name' => 'prezime',
	'value' => $row->prezime,
	'id' => 'prezime'
	
	);
	echo form_input($prezime);
	
	?>
	</p>
	<p class="email">
	<?php
	echo form_label('Adresa :', 'adresa');
		$adresa = array(
	'name' => 'adresa',
	'value' => $row->adresa,
	'id'    => 'adresa'
	
	);
	echo form_input($adresa);
	?>
	</p>
	<p class="email">
	<?php
	echo form_label('Grad :', 'grad');
			$grad = array(
	'name' => 'grad',
	'value' => $row->grad,
	'id'    => 'grad'
	
	);
	echo form_input($grad);
	?>
	</p>
	<p class="email">
	<?php
	echo form_label('Drzava :', 'drzava');
			$drzava = array(
	'name' => 'drzava',
	'value' => $row->drzava,
	'id'    => 'drzava'
	
	);
	echo form_input($drzava);
	?>
	</p>
	<p class="email">
	<?php
	echo form_label('Zip :', 'zip');
			$zip = array(
	'name' => 'zip',
	'value' => $row->zip,
	'id'    => 'zip'
	
	);
	echo form_input($zip);
	?>
	</p>
	<p class="submit">
	<?php
	echo form_submit('submit', 'posalji');
	?>
	</p>
	<?php
	echo form_close();
	
	
	
	} ?>
	</div>
	<div class="span4">
		<h3>Promena passworda</h3><hr>

	</div>