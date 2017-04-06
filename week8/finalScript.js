$(function(){
	$('#searchform').submit(function(){
		//get current value and add to items list
		var searchterms = $("#searchterms").val();
		//call our search youtube function
		getResultsFromYouTube(searchterms);
		return false;
	});
});

function getResultsFromYouTube (searchterms) {
	//call youtube API using AJAX
	//build url for the request
		var url = "http://www.omdbapi.com/?s="+searchterms+"&type=movie";
		//use jquery json shortcut
		$.getJSON(url, function(jsondata){
			//handle the results
			addResultTitles(jsondata);
		});

}

function addResultTitles(jsondata) {
	//create a string to contain our HTML code to inject
	var htmlstring = "";
	//iterate over the collection of results
	for (var i=0; i<10; i++){
		// core part, something from the APIs
		var title = jsondata.Search[i].Title;
		var img = "<img src=" + jsondata.Search[i].Poster +" >"
		htmlstring += "<li>" + title + "<br>" + img
		+ "<br><a href='" + "http://www.imdb.com/title/" + jsondata.Search[i].imdbID + "/'> imbd Link</a>" + "</li>";
	}

	//inject the HTML into our empty list
	$("#results").html(htmlstring);
}
