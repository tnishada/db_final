// JavaScript Document\

function select_method(selector_object){
	
	var value = selector_object.value;
	
	if(value=='alocation'){
				
				$(".sensorradio").hide();
				$(".locationcheckbox").hide();
				$(".locationradio").show();
				$(".sensorcheckbox").show();
		}
		
	else if(value=='asensor') {
		
				$(".sensorradio").show();
				$(".locationcheckbox").show();
				$(".locationradio").hide();
				$(".sensorcheckbox").hide();
		
		}
		
	else if(value=='alllocations'){
		
			$(".sensorradio").hide();
				$(".locationcheckbox").hide();
				$(".locationradio").hide();
				$(".sensorcheckbox").show();
		}
	else {    // allsensors
				$(".sensorradio").hide();
				$(".locationcheckbox").show();
				$(".locationradio").hide();
				$(".sensorcheckbox").hide();
		
		}
	


}

