<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<p>The final countdown:</p>
<span class="days"></span>d
<span class="hours"></span>h
<span class="mins"></span>m
<span class="sec"></span>s


<script type="text/javascript">
	var time_diff = <?= $time_diff ?>;
	function pad(str){
		str = str.toString();
		if(str.length > 1){
			return str;
		}
		return '0' + str;
	}
	function toDate(){
		if(time_diff == 0){
			console.log('Time is up!');
			return;
		}
		var days = Math.floor(time_diff / (24*60*60)),
			hours = Math.floor((time_diff - (days*(24*60*60))) / (60*60)),
			mins = Math.floor((time_diff - (days*(24*60*60)) - (hours * (60*60))) / 60),
			sec = (time_diff - (days*(24*60*60)) - (hours * (60*60)) - mins * 60);
		console.log(days, hours, mins, sec);
		$('span.days').html(pad(days));
		$('span.hours').html(pad(hours));
		$('span.mins').html(pad(mins));
		$('span.sec').html(pad(sec));
		time_diff -= 1;
		setTimeout(toDate, 1000);
	}

toDate();

</script>
