
  <!-- jQuery -->
  <script src="<?php echo base_url();?>scripts/jquery.js" type="text/javascript"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url();?>scripts/bootstrap.min.js" type="text/javascript"></script>
  <!-- Morris Charts JavaScript -->
  <script src="<?php echo base_url();?>scripts/plugins/morris/raphael.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>scripts/plugins/morris/morris.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>scripts/plugins/morris/morris-data.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>scripts/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>scripts/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>scripts/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>scripts/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">

$.noConflict();
jQuery(document).ready(function()
{
	jQuery("#cra_submit").submit(function(e)
	{
		e.preventDefault();
		var username1 = $('#username').val();
		var password1 = $('#password').val();
		var fname1 = $('#fname').val();
		var mname1 = $('#mname').val();
		var lname1 = $('#lname').val();
		var gender1 = $('#gender').val();
		var address1 = $('#address').val();
		var city1 = $('#city').val();
		var state1 = $('#state').val();
		var zip1 = $('#zip').val();
		var number1 = $('#number').val();
		var email1 = $('#email').val();

		jQuery.ajax({
			type: "POST",
			url: '<?php echo base_url(); ?>admin/cra_form_submit',
			data: { 
				username: username1,
				password: password1,
				fname: fname1,
				mname: mname1,
				lname: lname1,
				gender: gender1,
				address: address1,
				city: city1,
				state: state1,
				zip: zip1,
				number: number1,
				email: email1
				},

			success: function(data)
			{
				$('#success').css('display', 'block');
			}
		});
	});
});
</script>