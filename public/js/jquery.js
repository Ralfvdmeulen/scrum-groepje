$(document).ready(function(){
    $(".del-form").on("click", ".del-knop-input" , function(){
        var result = window.confirm("Weet je zeker dat je dit wilt verwijderen?");
        if (result) {
            alert("Je hebt ja gekozen!");
        } else {
            alert("Je hebt nee gekozen!");
        }
    });
});