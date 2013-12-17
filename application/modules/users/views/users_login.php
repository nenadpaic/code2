<?php 
$user_lagnguage = $this->session->userdata('language');

$this->lang->load('login_'. $user_lagnguage,$user_lagnguage); ?>

<section id="process">
	<div class="container">
		<div class="row">
			
			<div class="span4 text-center" id="login"><img  class="img-polaroid" src="<?php echo base_url() ?>Nemesis Development responsive/img/user.jpg" alt="Korisnici slika"/></div>
			<div class="span4 text-center">
			<p><img class="img-rounded" src="<?php echo base_url() ?>Nemesis Development responsive/img/login.png" alt="Login slika"/></p>
				
				<?php 
				$attributes = array(
				'name' => 'login_forma',
				'class' => 'form-horizontal',
				'id'    => 'login_forma'
				 
				
				
				);
				echo form_open('users/login_validation', $attributes);
				
				
				
				
				 ?>
				
				
				 <?php
				 
				
					
					?>
					<p class="email">
					<?php
					$email_i = array(
					'name' => 'email',
					'id' => 'email',
					'placeholder' => 'Email...'
					
					);
					
					echo form_input($email_i);
					
					echo form_error('email', '<div class="alert alert-error">', '</div>');
					?></p>
					<?php
				
				
					
					?>
					<p class="email">
					<?php
					$password_i = array(
					'name' => 'password',
					'id' => 'password',
					'placeholder' => 'Password...'
					
					);
					
					echo form_password($password_i);
					
					echo form_error('password', '<div class="alert alert-error">', '</div>'); ?>
					
					</p>

					<p class="submit">
					<?php 
					$button = array(
					
					
					'value' => 'Login'
					
					
					);
					echo form_submit($button); ?>
					</p>
					
					 
					
					 
					
					<p>
					<?php echo $this->lang->line('registracija_poruka'). anchor('users/register', $this->lang->line('registracija')).",";
					echo $this->lang->line('zab_pass_poruka'). anchor('users/forgoten_pass', $this->lang->line('zaboravljen_pass'));
					
					 ?>
					</p>
					
				<?php
				
				
				
				
				
				
				echo form_close();
				
				
				
				
				
				 ?>
				
				
				
			</div>
			<div class="span4 text-center"><h4><?php echo $this->lang->line('naslov_log'); ?></h4>
		<p><?php echo $this->lang->line('text_log'); ?></p>
			
			</div>
			
			
			
		</div>
		
		
		
	</div> <!-- end container -->
	
	
	
	
	
</section>

