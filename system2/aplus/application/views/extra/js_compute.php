<script type="text/javascript">
var percent1 = <?php echo floatval($ww_percentage);?>;
var percent2 = <?php echo floatval($perf_percentage);?>;

var num_assignment = <?php echo intval($assignment);?>;
var num_seatwork = <?php echo intval($seatwork);?>;
var num_quiz = <?php echo intval($quiz);?>;
var num_recitation = <?php echo intval($recitation);?>;
var num_gwork = <?php echo intval($gwork);?>;

var per_row_total = num_assignment + num_seatwork + num_quiz + num_recitation + num_gwork;

function compute()
{
 	var grade_collection = [];
 	var total = [];
 	var i = 0;
 	var id = 0;
 	var hw = 0;
 	var sw = 0;
 	var q = 0;
 	var r = 0;
 	var g = 0;
 	var a = 0;
 	var next_row_column = -1;

 	var rowcount = $('#table tr.start').length;

 	$("tr.start > td:not(:nth-child(2))").each(function(obj, val) 
 	{
 		if ($(this).attr('class') == 'id')
 			id = val.innerHTML;

 		if ($(this).attr('class') == 'assignment')
 		{
 			hw += parseFloat(val.innerHTML);
 			grade_collection[next_row_column] = ['assignment', parseFloat(val.innerHTML)];
 		}

 		if ($(this).attr('class') == 'seatwork')
 		{
 			sw += parseFloat(val.innerHTML);
 			grade_collection[next_row_column] = ['seatwork', parseFloat(val.innerHTML)];
 		}

 		if ($(this).attr('class') == 'quiz')
 		{
 			q += parseFloat(val.innerHTML);
 			grade_collection[next_row_column] = ['quiz', parseFloat(val.innerHTML)];
 		}

 		if ($(this).attr('class') == 'rec')
 		{
 			r += parseFloat(val.innerHTML);
 			grade_collection[next_row_column] = ['rec', parseFloat(val.innerHTML)];
 		}

 		if ($(this).attr('class') == 'gwork')
 		{
 			g += parseFloat(val.innerHTML);
 			grade_collection[next_row_column] = ['gwork', parseFloat(val.innerHTML)];
 		}

 		if ($(this).attr('class') == 'attendance')
 		{
 			a += parseFloat(val.innerHTML);
 			grade_collection[next_row_column] = ['attendance', parseFloat(val.innerHTML)];
 		}

 		next_row_column++;

 		if (next_row_column > per_row_total && $(this).attr('class') == 'f_grade')
 		{
 			var avg_hw = parseFloat((hw / num_assignment).toFixed(2));
 			var avg_sw = parseFloat((sw / num_seatwork).toFixed(2));
 			var avg_q = parseFloat((q / num_quiz).toFixed(2));
 			var avg_r = parseFloat((r / num_recitation).toFixed(2));
 			var avg_g = parseFloat((g / num_gwork).toFixed(2));

 			var final_rw = parseFloat(((avg_hw + avg_sw) / 2 * percent1).toFixed(2));
 			var final_p = parseFloat(((avg_q + avg_r + avg_g + a) / 4 * percent2).toFixed(2));

 			var final_grade = final_rw + final_p;
 			
 			total[i] = [id, grade_collection, final_grade];

 			$(this).html(total[i][2]);

 			grade_collection = [];

 			next_row_column = -1;
 			i++;
 			hw = 0;
		 	hw = 0;
		 	sw = 0;
		 	q = 0;
		 	r = 0;
		 	g = 0;
		 	a = 0;
 		}
 	});

 	console.log(total);

 	return total;
 }

 jQuery(document).ready(function()
 {
 	jQuery("#grades").submit(function(e)
 	{
		e.preventDefault();

		var collection = compute();

		jQuery.ajax({
			type: "POST",
			url: '<?php echo base_url(); ?>lecturer/save_grades',
			data: {grades: collection},

			success: function(e)
			{	
			},

			error: function()
			{
			}
		})
 	});
 });
</script>