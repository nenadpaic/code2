<div class="span4">
<img src="<?php base_url() ?>/upload/avatar_default.jpg" alt="Onovni avatar" />
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
<?php foreach($profil->result() as $row){
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
	<div class="span4"></div>