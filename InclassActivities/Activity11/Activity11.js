$(document).ready(function() {
    $("#nav_list ul").on("click", "a", function(event) {
        event.preventDefault(); 
        
        var title = $(this).attr("title");
        
        var jsonFile = "json_files/" + title.toLowerCase() + ".json"; 
        $("main").empty(); // delete old data
       
        $.getJSON(jsonFile, function(data) {
            // Build HTML elements for the speaker
            var newHtml = '<h1>' + data.speakers[0].title + '</h1>' +
                              '<img src="' + data.speakers[0].image + '">' +
                              '<h2>' + data.speakers[0].month + '<br>' + data.speakers[0].speaker + '</h2>' +
                              '<p>' + data.speakers[0].text + '</p>';
            
            $("main").append(newHtml);
        });
    });
});