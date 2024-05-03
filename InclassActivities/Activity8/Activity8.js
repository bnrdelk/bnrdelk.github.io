
$(document).ready(function(){
    var languages = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "C",
        "C++",
        "C#",
        "Java",
        "Swift",
        "Objective-C",
        "Rust",
        "Go",
        "Kotlin",
        "TypeScript",
        "Scala",
        "Haskell",
        "Clojure",
        "Dart",
        "Lua",
        "R",
        "Matlab",
        "Visual Basic",
        "SQL",
        "HTML",
        "CSS"
    ];
    

    $("#birthday").datepicker();
    $( "#language" ).autocomplete({
        source: languages
        });
});

