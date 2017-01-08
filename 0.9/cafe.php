<?php include ("header.php");?>
	<div id="moblogo"><a href="http://focusjovanie.com/premium/"><img src="img/minibarblack.png" /></a></div>
	<div class="container">
		<div class="row" style="margin-top:-2em;">
			<h4>Our coffee shop is on the intersection of Stat St and Wabadash Avenue at 568 Stat St, Chicago IL 60604.</h4>
		</div>
	    <div class="row" style="padding: 2.5% 0;">
	    	<h5>Come in for a coffee between these times during the week!</h5>
	      <div class="one-half column" style="float:right;">
			<div class="imgwrapper" style="text-align: center; float: none;">
				<table style="margin-left: 50%;
    transform: translate(-50%, 0%); ">
				<tr>
					<td>Mon</td>
					<td>5AM-11PM</td>
				</tr>
				<tr>
					<td>Tues</td>
					<td>5AM-11PM</td>
				</tr>
				<tr>
					<td>Wed</td>
					<td>5AM-11PM</td>
				</tr>
				<tr>
					<td>Thurs</td>
					<td>5AM-11PM</td>
				</tr>
				<tr>
					<td>Fri</td>
					<td>5AM-12AM</td>
				</tr>
				<tr>
					<td>Sat</td>
					<td>7AM-11PM</td>
				</tr>
				<tr>
					<td>Sun</td>
					<td>9AM-4PM</td>
				</tr>

				</table>
		   	</div>
	      </div>
	      <div class="one-half column" style="padding: 2.5% 0; float:left; left:0;">
	        <div class="imgwrapper">
	        	<img src="img/coffeeshop.jpg" width="100%">
	        </div>
	      </div>

  		</div>

	        <h5>Here is a map!</h5>
  		<div class="row" style="">

	      <div class="one columns">&nbsp;</div>

	      <div class="ten columns">
			    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(41.87648913202968,-87.62624891634196),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.87648913202968,-87.62624891634196)});infowindow = new google.maps.InfoWindow({content:'<strong>Premium Coffee</strong><br>State Street Chicago IL 60604<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
	      </div>

	      <div class="one columns">&nbsp;</div>
  		</div>
  		
  		
<?php include ("footer.php");?>