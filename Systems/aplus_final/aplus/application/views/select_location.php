<!DOCTYPE html>
<html>
<head>
	<title>A+</title>
    <link href="<?php echo base_url(); ?>css/location.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/login.css" rel="stylesheet">
</head>

<body>

    <div class="container">
    <h1 class="welcome text-center">Welcome to A+</h1>
        <div class="card card-container">
        <h2 class='login_title text-center'>Log In</h2>
        <hr>
         <?php echo form_open('selectlocation/login');?>
            <form class="form-signin" id="location" method="POST" >
                <div id = id01>
                <div class="imgcontainer">
                  <!--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
                  <img src="<?php echo base_url();?>assets/images/person.png" alt="Avatar" class="avatar">
                </div>

                <div class="container-modal">
                  <label><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="username" id="username" required>

                  <label><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="password" id="password" required>
                    
                  <button type="submit" class="btn btn-lg btn-primary">Login</button>
                  <input type="checkbox" checked="checked"> Remember me
                   <span class="psw">Forgot <a href="#">password?</a></span>
                <?php echo form_close();?>
                <!--<div class="container-modal" style="background-color:#f1f1f1">-->
                  <!--<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>-->
                          
            </div>
            </form>
          
                </div>
            <button onclick="document.getElementById('id02').style.display = 'block'" class="btn btn-lg btn-primary" id="reg" type="submit">Register as Student</button>    
            </div>
          </div>

            <!--Register-->
            <div id="id02" class="modal">

            <?php echo form_open("selectlocation/register");?>

            <div class="modal-content animate">
            	<div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="<?php echo base_url();?>assets/images/person.png" alt="Avatar" class="avatar">
                </div>

                <div class="container-modal">
                 <div class="col-sm-12">
                 <div class="row">
                    <div class="col-sm-6 form-group">
                      <label>Grade Level</label>
                  <select name="grdlvl" id="grdlvl" class="form-control" required>
                        <option selected="true" disabled="disabled">-- Select Level --</option>
                        <option value="1">Grade 1</option>
                        <option value="2">Grade 2</option>
                        <option value="3">Grade 3</option>
                        <option value="4">Grade 4</option>
                        <option value="5">Grade 5</option>
                        <option value="6">Grade 6</option>
                        <option value="7">Grade 7</option>
                        <option value="8">Grade 8</option>
                        <option value="9">Grade 9</option>
                        <option value="10">Grade 10</option>
                        <option value="11">Grade 11</option>
                        <option value="12">Grade 12</option>
                      </select>
                    </div>
                    <div class="col-sm-6 form-group">
                    <h4 id="edu_lvl"></h4>
                    </div>
                  </div>  
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <label>First Name</label>
                      <input type="text" name="fname" placeholder="First Name" class="form-control" required>
                    </div>
                    <div class="col-sm-6 form-group">
                      <label>Middle Name</label>
                      <input type="text" name="mname" placeholder="Middle Name" class="form-control">
                    </div>
                    <div class="col-sm-6 form-group">
                      <label>Last Name</label>
                      <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
                    </div>
                  </div>  
                  <div class="form-group">
                  <label>Gender</label>
                  <select name="gender" class="form-control" required>
                        <option selected="true" disabled="disabled">-- Select Gender --</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                      </select>
                </div>         	
                  <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" placeholder="Address" rows="3" class="form-control" required></textarea>
                  </div>   
                <div class="row">
                    <div class="col-sm-6 form-group">
                      <label>City</label>
                      <input type="text" name="city" placeholder="(ex. Makati City)" class="form-control" required>
                    </div>    
                    <div class="col-sm-6 form-group">
                      <label>Province</label>
                      <input type="text" name="province" placeholder="(ex. Quezon Province)" class="form-control" required>
                    </div>  
                  </div> 
                <div class="row">
                    <div class="col-sm-6 form-group">
                      <label>Phone Number</label>
                      <input type="text" name="phone" placeholder="(ex. 09123456789)" class="form-control" required>
                    </div>    
                    <div class="col-sm-6 form-group">
                      <label>Email Address</label>
                      <input type="text" name="email" placeholder="(ex. emaild@gmail.com)" class="form-control" required>
                    </div>  
                    <div class="col-sm-6 form-group">
                      <label>Zip Code</label>
                      <input type="text" name="zip" placeholder="(ex. 1234)" class="form-control" required>
                    </div>  
                  </div> 
               
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <label>Username</label>
                      <input type="text" name="username" placeholder="Username" class="form-control" required>
                    </div>    
                    <div class="col-sm-6 form-group">
                      <label>Password</label>
                      <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div> 
                  </div>
                  <div class="form-group">
                    <label>Generated Key</label>
                    <input type="text" name="key" placeholder="Key" class="form-control" required>
                  </div>
                  <div class ="row">
              	<div class="col-sm-6 from-goup">                   
                <label>School Num</label>
                <input type="text" placeholder="school" name="school" class="form-control" required>
              	</div>    
              	</div> 
                  </div>
                    
                <button type="submit" id="submitstud">Submit</button>
                </div>


              	
            </div>

        </div><!-- /card-container -->

    </div><!-- /container -->
   
<script src="<?php echo base_url(); ?>scripts/login.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>scripts/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>scripts/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>scripts/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>scripts/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">

$.noConflict();

jQuery(document).ready(function()
{
	jQuery("#region").change(function()
	{
		var regionId = $("#region").val();

		if (regionId == 0)
		{
			$("#province").prop('disabled', true);
			$("#city").prop('disabled', true);
			$("#barangay").prop('disabled', true);
			$("#school").prop('disabled', true);
		}
		else
		{
			$("#province").prop('disabled', false);
			$("#province").empty();
			jQuery.ajax(
			{
				url: "<?php echo base_url();?>selectlocation/get_provinces",
				data: {region: regionId},
				type: "POST",

				success: function(data)
				{
					jQuery("#province").html(data);
				}
			});
		}
	});

	jQuery("#province").change(function()
	{
		var provinceId = $("#province").val();

		if (provinceId == 0)
		{
			$("#city").prop('disabled', true);
			$("#barangay").prop('disabled', true);
			$("#school").prop('disabled', true);
		}

		else
		{
			$("#city").prop('disabled', false);
			$("#city").empty();
			jQuery.ajax(
			{
				url: "<?php echo base_url();?>selectlocation/get_cities",
				data: {province: provinceId},
				type: "POST",

				success: function(data)
				{
					jQuery("#city").html(data);
				}
			});
		}
	});

	jQuery("#city").change(function()
	{
		var cityId = $("#city").val();

		if (cityId == 0)
		{
			$("#barangay").prop('disabled', true);
			$("#school").prop('disabled', true);
		}
		else
		{
			$("#barangay").prop('disabled', false);
			$("#barangay").empty();
			jQuery.ajax(
			{
				url: "<?php echo base_url();?>selectlocation/get_barangays",
				data: {city: cityId},
				type: "POST",

				success: function(data)
				{
					jQuery("#barangay").html(data);
				}
			});
		}
	});

	jQuery("#barangay").change(function()
	{
		var barangayId = $("#barangay").val();

		if (barangayId == 0)
			$("#school").prop('disabled', true);
		else
		{
			$("#school").prop('disabled', false);
			$("#school").empty();
			jQuery.ajax(
			{
				url: "<?php echo base_url();?>selectlocation/get_schools",
				data: {barangay: barangayId},
				type: "POST",

				success: function(data)
				{
					jQuery("#school").html(data);
				}
			});
		}
	});

	jQuery("#location").submit(function(e)
	{
		e.preventDefault();
		
		var block;
		jQuery('#login').click(function()
		{
			block = 1;
		});

		jQuery('#reg').click(function()
		{
			block = 2;
		});

		var regionId = $("#region").val();
		var provinceId = $("#province").val();
		var cityId = $("#city").val();
		var barangayId = $("#barangay").val();
		var schoolId = $("#school").val();

		if (regionId == 0 || provinceId == 0 || cityId == 0 || barangayId == 0 || schoolId == 0)
		{
			alert("Please choose a location!");
		}

		else
		{
			jQuery.ajax({
				type: "POST",
				url: '<?php echo base_url(); ?>selectlocation/validate_location',
				data: { 
						region: regionId, 
						province: provinceId, 
						city: cityId, 
						barangay: barangayId,
						school: schoolId 
					},

				success: function(data)
				{
					if (block == 1)
						$("#id01").css('display', 'block');
					else if (block == 2)
						$('#id02').css('display', 'block');
				},

				error: function()
				{
					alert("error");
				}
			});
		}
	});

	jQuery("#grdlvl").change(function()
	{
		var grdlvl = $("#grdlvl").val();

		jQuery.ajax(
		{
			url: "<?php echo base_url();?>selectlocation/get_edulvl",
			data: {lvl: grdlvl},
			type: "POST",

			success: function(data)
			{
				jQuery('#edu_lvl').html(data);
			}

		});
	});
//---------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------
</script>
</body>
</html>