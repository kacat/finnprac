<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="jumbotron">
<p style="text-align: center;">The final countdown:</p>
<div class="row" style="margin: 0 20rem;">
  <div class="col-sm-3">
    <div class="card text-center text-white bg-dark" style="max-width: 10rem;">
      <div class="card-body">
  			<span class="days card-text"></span>d
	  </div>
	</div>
  </div>
  <div class="col-sm-3">
    <div class="card text-center text-white bg-dark" style="max-width: 10rem;">
      <div class="card-body">
  			<span class="hours card-text"></span>h
	  </div>
	</div>
  </div>
  <div class="col-sm-3">
    <div class="card text-center text-white bg-dark" style="max-width: 10rem;">
      <div class="card-body">
  			<span class="mins card-text"></span>m
	  </div>
	</div>
  </div>
  <div class="col-sm-3">
    <div class="card text-center text-white bg-dark" style="max-width: 10rem;">
      <div class="card-body">
  			<span class="sec card-text"></span>s
	  </div>
	</div>
  </div>
</div>
</div>

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
