// JavaScript Document

$(function(){
	// usual main starting point when web page loads


	// use jquery to find the div with id button1
	// set the mouse enter and mouse leave functions, just like the onclick in the lecture
	// use the html attribute to set the text
	$("#button1").mouseenter(function(){
		$("#button1").html("<p>Thank You</p>");
	});
	$("#button1").mouseleave(function(){
		$("#button1").html("<p>Mouse Over Me</p>");
	});
	$("#button2").mousedown(function(){
		$("#button2").html("<p>Gerrof me</p>").css("background-color", "lightblue");
	});
	$("#button2").mouseup(function(){
		$("#button2").html("<p>Thank you DickHead</p>").css("background-color", "lightgreen");
	});

	// now you need to do the same for button1 for mouseleave
	// and mouseup, mousedown for button2

});