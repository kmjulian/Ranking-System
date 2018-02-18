<script type="text/javascript">

$.noConflict();

jQuery(document).ready(function()
{
	jQuery("#region").change(function()
	{
		var regionId = $("#region").val();

		console.log(regionId);

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
});
</script>