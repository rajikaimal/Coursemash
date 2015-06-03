	<script type="text/javascript">
		$(document).ready(function(){
			var frm = $('#ans');
			frm.submit(function(env){
				$.ajax({
					type: frm.attr('method'),
            		url: frm.attr('action'),
           			data: frm.serialize(),
            		success: function (data) {
               			$('#linkk').empty();
               			$('#icon-x').empty();
 						var val = JSON.parse(data);
 						for(var a = 0; a<val.length;a++){
        					var directory = val[a];
               				$('#linkk').append("<a href='" + directory +"'><img src='/Coursemash/views/answers/answer-icon.png' style='width:100px' /></a>");	
 						}
            		}
				});
				env.preventDefault();
			});
		});
	</script>
	<label>Download Past-papers</label>
	<form method="post" action="papers/search" id="ans">
		<div class="row">
			<div class="col-md-5">

				<label>Semester</label>
				<select name="semester" onchange="loadModules()" id="semester" class="form-control">
					<option value="1y1s">Select an option</option>
					<option value="1y1s">1st year 1st semester</option>
					<option value="1y2s">1st year 2nd semester</option>
					<option value="2y1s">2nd year 1st semester</option>
					<option value="2y2s">2nd year 2nd semester</option>
					<option value="3y1s">3rd year 1st semester</option>
					<option value="3y2s">3rd year 2nd semester</option>
					<option value="4y1s">4th year 1st semester</option>
					<option value="4y2s">4th year 2nd semester</option>
				</select>

			</div>
		<script type="text/javascript">
			function loadModules(){
				for(var a=0;a<5;a++){
					var x = document.getElementById("modules");
					x.remove(x.selectedIndex);
				}
				var e = document.getElementById('semester').selectedIndex;
				var select = document.getElementById('modules');
				if(e == 0){
					var opt = document.createElement('option');
					opt.value = '-----';
					opt.innerHTML = '-------';
					select.appendChild(opt);
				}
				if(e == 1){
					var modules = ['IPE','CF','DCCN','MIT','ELS-I'];
				}
				if(e == 2){
					var modules = ['ITA','ST-I','FCS','DB-I','ELS-II'];	
				}
				for(var a=0;a<5;a++){
					var opt = document.createElement('option');
					opt.value = modules[a];
					opt.innerHTML = modules[a];
					select.appendChild(opt);
				}
			}
		</script>
		
			<div class="col-md-5">
					<label>Module</label>
						<select name="module" id="modules" class="form-control">
							<option value=""> ------- </option>
						</select>
			</div>
		</div>	
		<div class="row">	
			<div class="col-md-5">
				<label>Type</label>
					<select name="type" class="form-control">
						<option value="mid">Mid Semester exam</option>
						<option value="final">Final exam</option>
						<option value="repeat">Repeat exam</option>
						<option value="lab">Lab sessions</option>
					</select>
			</div>
			<div class="col-md-5">
			<label>Year</label>
			<select name="year" class="form-control">
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
				<option value="2011">2011</option>
			</select>

			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-md-5">
				<input type="submit" class="btn btn-success" value="Go !" onclick="loadMe()">
			</div>
			<script type="text/javascript">

			</script>
		</div>
	<!--
		<div class="row">
			<div class="col-md-3">
				<img src="<?php URL?>views/answers/answer-icon.png">
			</div>
		</div>
		<div class="row">
		<div class="col-md-10">
			<div class="sk-spinner sk-spinner-wandering-cubes" id="cube">
		       <div class="sk-cube1"></div>
		       <div class="sk-cube2"></div>
 		    </div>
		</div>	
		</div>
		<script type="text/javascript">
		$(window).unload(function(){
			
				$('#cube').delay(3000).fadeOut();
			
		});
		</script> -->
	</form>
	<div id="results">
		<label id="icon-x"></label>
		<p id="linkk"></p>
	</div>