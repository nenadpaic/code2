<?php $this->lang->load('change_profile_'. $user_lagnguage,$user_lagnguage);?>

<div class="span4 text-center">
<h3><?php echo $this->lang->line('avatar'); ?></h3><hr>
<?php foreach($profil->result() as $row){ 
	if(is_file(FCPATH."upload/$row->id.png")){?>
	<img class="img-polaroid" src='<?php  base_url() ?>/upload/<?php echo $row->id ?>.png' alt="profilni avatar" />
	<?php }else{ ?>
<img class="img-polaroid" src="<?php base_url() ?>/upload/avatar_default.jpg" alt="Onovni avatar" />
<?php } ?>
<br /><br/>

<?php echo form_open_multipart('users/do_upload');?>
<p class="email">
<input type="file" name="userfile" size="20" />

</p>
<br />
<p class="submit">
<input type="submit" value="Upload" />
</p>
</form>

</div>

<div class="span4">
<h3><?php echo $this->lang->line('profil'); ?></h3><hr>
<?php 
	$form = array(
	'class' => 'form prostor',
	'id' => 'forma'
	);
	echo form_open('users/change_profil_base', $form);
	?>
	<p class="email">
	<?php
	echo form_label($this->lang->line('ime'), 'ime');
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
	echo form_label($this->lang->line('prezime'), 'prezime');
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
	echo form_label($this->lang->line('adresa'), 'adresa');
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
	echo form_label($this->lang->line('grad'), 'grad');
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
	echo form_label($this->lang->line('drzava'), 'drzava');
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
	echo form_label($this->lang->line('zip'), 'zip');
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
	echo form_submit('submit', $this->lang->line('izmeni'));
	?>
	</p>
	<?php
	echo form_close();
	
	
	
	} ?>
	</div>
	<div class="span4">
		<h3><?php echo $this->lang->line('change_pass'); ?></h3><hr>

		<?php 

			echo form_open('users/changePass');

				?>
				<p class="email">
				<?php
			$password = array(
				'name' =>'old_pass' ,
				'id'   => 'old_pass',
				'placeholder' => $this->lang->line('old_pass') );
			echo form_label($this->lang->line('old_pass'), 'old_pass');
			echo form_password($password);
			?>
			</p>
			<p class="email">
			<?php
			$password_new = array(
				'name' =>'new_pass' ,
				'id'   => 'new_pass',
				'placeholder' => $this->lang->line('new_pass') );
			echo form_label($this->lang->line('new_pass'), 'new_pass');
			echo form_password($password_new);
			?>
			</p>
			<p class="email">
			<?php
			$password_conf = array(
				'name' =>'conf_pass' ,
				'id'   => 'conf_pass',
				'placeholder' => $this->lang->line('conf_pass') );
			echo form_label($this->lang->line('conf_pass'), 'conf_pass');
			echo form_password($password_conf);
			?>
				</p>
				<p class="submit">
			<?php
			echo form_submit('submit', $this->lang->line('izmeni_pass'));

		?>
		</p>
		<?php
			echo form_close();
		?>
	</div>