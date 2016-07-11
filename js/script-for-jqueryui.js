$(document).ready(function(){
	$('.modal-trigger').leanModal({
		dismissible: true,
		opacity:.5,
		in_duration: 100,
		out_duration: 100

	});
	
	
	//var div_element = document.createElement('div');
	/*var div_element = $('<div />').attr({
		name: 'sample',
		class: 'card-content row',
		id: 'sampleId'
	}).css({"background-color":"blue","height":"20px","width":"20px"});
	$("#test_0001").append(div_element);*/
	var noOfRow = 0;
	for (var ia = 3; ia > 0; ia--) {
		addQuizItem(noOfRow)
	}
	
	var items = new Array();
	function addQuizItem(item_id){

		var id = "item"+item_id.toString();

		var div_element = $('<div />').attr({
			name: 'sample',
			class: 'card-content row',
			id: id
		});
		$("#test_0001").append(div_element);
		/**
			drop zones div
		*/
		for (var i = 0; i < 2; i++) {
			var div_element_child = $('<div />').attr({
				name: 'sample',
				class: 'col s5',   
				id: id+i
			}).css({"border-right": "1px dashed orange"});
			$("#"+id).append(div_element_child);

			var div_element_grand_child = $('<div />').attr({
				name: 'sample',
				class: 'dropzone center',
				id: id+id+i
			}).css({"text-align":"center","height":"5em","width":"100%","border": "1px dashed blue","border-radius": "5px","padding": "5% 10% 10% 10%"}).append("Drag and Drop Here.");
			
			$("#"+id+i).append(div_element_grand_child);
			grandChildElement = document.getElementById(id+id+i);
		
			grandChildElement.addEventListener("dragstart",function(e){e.preventDefault()},false);
			grandChildElement.addEventListener("dragover",function(e){e.preventDefault()},false);
			grandChildElement.addEventListener("drop",dropped,false);
		}
		/**
			for save button
		*/
		var div_element_child = $('<div />').attr({
			name: 'sample',
			class: 'col s2',   
			id: id+"save"
		}).css({});
		$("#"+id).append(div_element_child);

		var div_element_grand_child = $('<a />').attr({
			name: 'sample',
			class: 'modal-trigger waves-effect waves-light btn-large',
			id: id+id+"save",
			href: '#!'
		}).css({"height":"100%","width":"100%"}).append("Save");
		$("#"+id+"save").append(div_element_grand_child);

		noOfRow= noOfRow+1;	
	}

	function init(){
		textSrc = document.getElementById("insertText");
		textSrc.addEventListener("dragstart", startDrag,false);
		ImgSrc = document.getElementById("insertImage");
		ImgSrc.addEventListener("dragstart", startDrag,false);
		AudSrc = document.getElementById("insertAudio");
		AudSrc.addEventListener("dragstart", startDrag,false);
		VidSrc = document.getElementById("insertVideo");
		VidSrc.addEventListener("dragstart", startDrag,false);
	}

	window.addEventListener("load", init, false);

	function startDrag(e){
		var sample = '';
		if(e.target.id==="insertText" ){
			sample = '<input type="text" id="textitem" class="input-field" placeholder="Insert Text"/>';
		}
		if(e.target.id==="insertImage" ){
			sample = '<a href="#!" id="imgitem" class="btn">Image Here</a>';//call an upload image function here
		}
		if(e.target.id==="insertAudio"){
			sample = '<a href="#!" id="auditem" class="btn">Audio Here</a>';//call an upload audio function here
		}
		if(e.target.id==="insertVideo"){
			sample = '<a href="#!" id="viditem" class="btn">Video Here</a>';//call an upload video function here
		}
		e.dataTransfer.setData("Text", sample);
	}

	function dropped(e){
		e.preventDefault();
		e.currentTarget.innerHTML = e.dataTransfer.getData("Text");
	}
});