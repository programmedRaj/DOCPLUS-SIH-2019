


<!DOCTYPE html>
<html lang="en">
<head>
	<title>convForm - example</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dist/jquery.convform.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="demo.css">
</head>
<body>
	<section id="demo">
	    <div class="vertical-align">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-6 col-sm-offset-3 col-xs-offset-0">
	                    <div class="card no-border">
	                        <div id="chat" class="conv-form-wrapper">
	                            <form action="act.php " method="post" class="hidden">
	                                <select data-conv-question="Hello! I'm your Virtual Doctor And I'm Here To Help You "first-question">
	                                    <option value="yes">Yes</option>
	                                    <option value="sure">Sure!</option>
	                                </select>
	                                <input type="text" name="name33" data-conv-question="Alright! First, tell me your full name, please.|Okay! Please, tell me your name first.">
	                                <input type="text" data-conv-question="Howdy, {name33}:0! It's a pleasure to meet you. " data-no-answer="true">
	                               
	                                <select name="multi" data-conv-question="What Body Part Are Showing Signs?" multiple >
	                                    <option value="Abdomen,Pelvis & Buttocks">Abdomen,Pelvis & Buttocks</option>
	                                    <option value="Arms and Shoulder">Arms & Shoulder</option>
	                                    <option value="Chest and Back">Chest and Back</option>
	                                    <option value="Head,Throat and Neck">Head,Throat and Neck</option>
	                                    <option value="Legs">Legs</option>
	                                    <option value="Skin, Joints & General">Skin, Joints & General</option>

	                                </select>
	                              
	                                <select name="programmer" data-callback="storeState" data-conv-question="Symptoms have you spotted so far?">
	                                    <option value="yes">Yes</option>
	                                    <option value="no">No</option>
	                                </select>

	                         
	                                <div data-conv-fork="programmer">
	                                    <div data-conv-case="yes">
	                                      <input type="text" name="sytoms" data-conv-question="What are they??">
	                                      <input type="number" name="num" data-conv-question="Please Provide Your Contact Detials(Mobile Number)" Min="1111111111" Max="9999999999">
		                                    	<option value="yes">Yes</option>
		                                    	<option value="no">No..</option>
	                                    </div>
	                                    <div data-conv-case="no">
		                                    <input type="number" name="num" data-conv-question="Please Provide Your Contact Detials(Mobile Number)" Min="1111111111" Max="9999999999">
		                                    	<option value="yes">Yes</option>
		                                    	<option value="no">No..</option>
		                                    </select>
	                                    </div>

	                                </div>
	                             </form>
	                        </div>
	                        
                           
	                    </div>
	                </div>

	            </div>

	        </div>

	    </div>
	
	</section>

	<script type="text/javascript" src="jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="dist/autosize.min.js"></script>
	<script type="text/javascript" src="dist/jquery.convform.js"></script>

	<script>
		function google(stateWrapper, ready) {
			window.open("https://google.com");
			ready();
		}
		function bing(stateWrapper, ready) {
			window.open("https://bing.com");
			ready();
		}
		var rollbackTo = false;
		var originalState = false;
		function storeState(stateWrapper, ready) {
			rollbackTo = stateWrapper.current;
			console.log("storeState called: ",rollbackTo);
			ready();
		}
		function rollback(stateWrapper, ready) {
			console.log("rollback called: ", rollbackTo, originalState);
			console.log("answers at the time of user input: ", stateWrapper.answers);
			if(rollbackTo!=false) {
				if(originalState==false) {
					originalState = stateWrapper.current.next;
						console.log('stored original state');
				}
				stateWrapper.current.next = rollbackTo;
				console.log('changed current.next to rollbackTo');
			}
			ready();
		}
		function restore(stateWrapper, ready) {
			if(originalState != false) {
				stateWrapper.current.next = originalState;
				console.log('changed current.next to originalState');
			}
			ready();
		}
	</script>
	<script>
		jQuery(function($){
			convForm = $('#chat').convform({selectInputStyle: 'disable'});
			console.log(convForm);
		});
	</script>
</body>
</html>