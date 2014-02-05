
<?php
$user_lagnguage = $this->session->userdata('language');
 $this->lang->load('change_profile_'. $user_lagnguage,$user_lagnguage);?>
 <section id="process">
	<div class="container">
		<div class="row">
<div class="span4"><img src="<?php base_url()?>/Nemesis Development responsive/img/stop.png" /></div>
<div class="span4 text-center">
<h2><?php echo $this->lang->line('naslov_greska'); ?></h2>
<p><?php echo $this->lang->line('poruka_greska'); ?></p>
<p><?php echo anchor('users/profile', $this->lang->line('link_profil'))?></p>


</div>
<div class="span4"><img  src="<?php base_url()?>/Nemesis Development responsive/img/question-mark.png" /></div>
</div>
</div>
</section>