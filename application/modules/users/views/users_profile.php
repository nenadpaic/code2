<?php $user_lagnguage = $this->session->userdata('language');

		$this->lang->load('profil_'. $user_lagnguage,$user_lagnguage); ?>

<section id="process">
	<div class="container">
		<div class="row">
			
			
    <ul class="nav nav-tabs" id="myTab">
    <li><a href="#home" id="ho"><?php echo $this->lang->line('obavestenja'); ?></a></li>
    <li><a href="#profile" id="prof"><?php echo $this->lang->line('profil'); ?></a></li>
    <li><a href="#messages" id="mess"><?php echo $this->lang->line('poruke'); ?></a></li>
    <li><a href="#settings" id="set"><?php echo $this->lang->line('kupljeno'); ?></a></li>
    </ul>
     
    <div class="tab-content">
    <div class="tab-pane active" id="home"><img src="<?php echo base_url() ?>Nemesis Development responsive/img/ajax-loader.gif" alt="ajax-loader" /></div>
    <div class="tab-pane" id="profile"><img src="<?php echo base_url() ?>Nemesis Development responsive/img/ajax-loader.gif" alt="ajax-loader" /></div>
    <div class="tab-pane" id="messages"><img src="<?php echo base_url() ?>Nemesis Development responsive/img/ajax-loader.gif" alt="ajax-loader" /></div>
    <div class="tab-pane" id="settings"><img src="<?php echo base_url() ?>Nemesis Development responsive/img/ajax-loader.gif" alt="ajax-loader" /></div>
    </div>
     

			
			
			
</div>
</div>

</section>
    <script>
	var base = '<?php echo base_url(); ?>';
	var lang = '<?php echo $this->session->userdata("language") ?>';
	
	
	$(function(){
		
	$('#myTab a:first').tab('show');
	sadrzaj();
	
	});
	
		
	function sadrzaj(){
		
	
	 $.ajax({
		url:base+'obavestenja/get_obavestenja',
		type:'get',
		data:{
				language: lang,
		},
		success:function(data){
			$('#home').html(data).fadeIn("fast");
		},
		error:function(){
			$('#home').html("<p>Trenutno nema obavestenja</p>").fadeIn("fast");
		}
		
		
		
	});}
	function profil(){
		var id = '<?php echo $this->session->userdata("id") ?>';
		var email = '<?php echo $this->session->userdata("email") ?>';
		
	
	 $.ajax({
		url:base+'users/change_profil',
		type:'get',
		data:{
				id_s: id,
				email_s: email,
				language: lang
				
		},
		success:function(data){
			$('#profile').html(data).fadeIn("fast");
		},
		error:function(){
			$('#profile').html("<p>User doesn't exist or you are not logged in</p>").fadeIn("fast");
		}
		
		
		
	});
	
	
	
	
	}
	
	
    $('#set').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
	
    });
	   $('#ho').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
	sadrzaj();
	
	
    });
		   $('#prof').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
	profil();
	
	
    });
	 $('#mess').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
	
    });
    </script>

