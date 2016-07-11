<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Drag and Drop</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="../js/materialize/css/materialize.css">
        <script type="text/javascript" src="../js/jquery-3.0.0.js"></script>
        <script type="text/javascript" src="../js/materialize/js/materialize.min.js"></script>
        <script type="text/javascript" src="../js/script-for-jqueryui.js"></script> 
    </head>
    <body class="">
    	<div class="yellow lighten-3" style="margin: 0 5%;">
            <div class="row">
                <div class="card center collection-header" style="padding:2%; "><span><h4>Test Generator</h4></span></div>
                <div class="instructions-panel">    
                        <div class="instruction main row" style="padding: 2% 10% 0 10%;">
                        	<div class="input-field col s4">
                        		<input type="text" id="quizTitle" name="quizTitle" class="validate"></input>
                        		<label for="quizTitle">Title of the Quiz</label>
                        	</div>
                        	<div class="input-field col s8">
                        		<textarea type="text" id="quizTitle" name="quizInstruction" class="materialize-textarea" style="overflow: auto; max-height: 3em; padding: 2%;"></textarea>
                        		<label for="quizInstruction">Title of the Quiz</label>
                        	</div>
                        	
                        </div>
                </div>

                <div class="content-selection" style="padding: 2% 10%;" id="test_0001">    
                    <div class="card-panel row center" >
                    	<div class="col s3">
                    		<a href="#modal1" id="insertText" class="waves-effect waves-light btn-large" style="width:100%">Text</a>
                    	</div>
                        <div class="col s3"><a href="#modal2" id="insertImage" class="waves-effect waves-light btn-large" style="width:100%">Image</a></div>
                        <div class="col s3"><a href="#modal1" id="insertAudio" class="waves-effect waves-light btn-large" style="width:100%">Audio</a></div>
                        <div class=" col s3"><a href="#modal2" id="insertVideo" class="waves-effect waves-light btn-large" style="width:100%">Video</a></div>
                    </div>
                    <!-- <div class="card-content row" >
                    	<div class="col s5" style="border-right: 1px dashed orange;">
                    		<div class="dropzone center" style="text-align:center;height:5em;width:100%; border: 1px dashed blue; border-radius: 5px; padding: 5% 10% 10% 10%; ">Drag item here</div>
                    	</div>
                    	<div class="col s5" style="border-right: 1px dashed orange;">
                    		<div class="dropzone center" style="text-align:center;height:5em;width:100%; border: 1px dashed green; border-radius: 5px; padding: 5% 10% 10% 10%; ">Drag item here</div>	
                    	</div>
                    	<div class="col s2">
                    		 <a href="#!" class="modal-trigger waves-effect waves-light btn-large" style="width:100%; height: 100%;">Save</a>
                    	</div>
                    </div>
                    <div class="card-content row">
                    	<div class="col s5" style="border-right: 1px dashed orange;">
                    		<div class="dropzone center" style="text-align:center;height:5em;width:100%; border: 1px dashed blue; border-radius: 5px; padding: 5% 10% 10% 10%; ">Drag item here</div>
                    	</div>
                    	<div class="col s5" style="border-right: 1px dashed orange;">
                    		<div class="dropzone center" style="text-align:center;height:5em;width:100%; border: 1px dashed green; border-radius: 5px; padding: 5% 10% 10% 10%; ">Drag item here</div>	
                    	</div>
                    	<div class="col s2">
                    		 <a href="#!" class="modal-trigger waves-effect waves-light btn-large" style="width:100%; height: 100%;">Save</a>
                    	</div>
                    </div>
                    <div class="card-content row">
                    	<div class="col s5" style="border-right: 1px dashed orange;">
                    		<div class="dropzone center" style="text-align:center;height:5em;width:100%; border: 1px dashed blue; border-radius: 5px; padding: 5% 10% 10% 10%; ">Drag item here</div>
                    	</div>
                    	<div class="col s5" style="border-right: 1px dashed orange;">
                    		<div class="dropzone center" style="text-align:center;height:5em;width:100%; border: 1px dashed green; border-radius: 5px; padding: 5% 10% 10% 10%; ">Drag item here</div>	
                    	</div>
                    	<div class="col s2">
                    		 <a href="#!" class="modal-trigger waves-effect waves-light btn-large" style="width:100%; height: 100%;">Save</a>
                    	</div>
                    </div> -->
                </div>
            </div> 
    	</div>
    </body>
</html>

<script type="text/javascript">
	
</script>