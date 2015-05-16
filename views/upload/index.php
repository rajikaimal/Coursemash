	<label>Answers</label>
<div class="row">
	<div class="col-md-5">
		<form enctype="multipart/form-data" method="post" action="<?php echo URL?>upload/answerup">
		<label>Type</label>
		<select name="type" class="form-control">
			<option value="mid">Mid Semester exam</option>
			<option value="final">Final exam</option>
			<option value="repeat">Repeat exam</option>
			<option value="lab">Lab sessions</option>
		</select>
	</div>

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
	</div>
</div>	
<div class="row">	
	<div class="col-md-5">
		<label>Module</label>
	<select name="module" id="modules" class="form-control">
		<option value=""> ------- </option>
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
<div class="row">
	<div class="col-md-5">
	<label>Confidence level</label>
		<input type="range"  min="0" max="100" value="0" onchange="showValue(this.value)" name="confidence">
		<br/>
		<span id="range">0</span>%
		<script type="text/javascript">
		function showValue(newValue)
		{
			document.getElementById("range").innerHTML=newValue;
		}
		</script>
	</div>
</div>	
<div class="row">
	<div class="col-md-7">
		<a class='btn btn-primary' href='javascript:;'>
			Choose File...
			<input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file" id="file" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
		</a>
		&nbsp;
		<span class='label label-info' id="upload-file-info"></span>
		
		

		<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
		<!--<input type="file" name="file" id="file"> -->
		<br/>
		<input type="submit" name="submit" value="Submit" class="btn btn-success">
		
	</div>
</div>	
	</form>
</div>