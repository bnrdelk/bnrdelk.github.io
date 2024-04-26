var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };

window.onload = function () {
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("add").onclick = addScore;
};

function displayResults() {
    var total = 0;
    var highest = scores[0]; 
	var highestName = "";

    for (var i = 0; i < scores.length; i++) {
        total += parseInt(scores[i]);
        if (scores[i] > highest) {
            highest = scores[i]; 
			highestName = names[i];
        }
    }

    var average = total / scores.length; 

    var resultsDiv = document.getElementById("results");
    resultsDiv.innerHTML = "<h2>Results</h2>";
    resultsDiv.innerHTML += "Average score = " + average.toFixed(2) + "<br>"; 
    resultsDiv.innerHTML += "High score = " + highestName + " with a score of "+ highest + "<br>";
}



function displayScores() {
    var table = document.getElementById("scores_table");
    table.innerHTML = ""; 
	table.innerHTML = "<h2>Scores</h2>";
    
    var headerRow = table.insertRow(0);
    var nameHeader = headerRow.insertCell(0);
    var scoreHeader = headerRow.insertCell(1);
    nameHeader.innerHTML = "<b>Name</b>";
    scoreHeader.innerHTML = "<b>Score</b>";
    
    for (var i = 0; i < names.length; i++) {
        var row = table.insertRow(i + 1);
        var nameCell = row.insertCell(0);
        var scoreCell = row.insertCell(1);
        
        nameCell.textContent = names[i];
        scoreCell.textContent = scores[i];
    }
}

function addScore() {
    var newName = $("name").value;
    var newScore = parseInt($("score").value);
    
    if (newName === "" || isNaN(newScore) || newScore < 0 || newScore > 100) {
        alert("You must enter a name and a valid score");
    } else {
        names.push(newName);
        scores.push(newScore.toString()); 
    
        $("name").value = ""; 
        $("score").value = "";
        $("name").focus();
    }
}