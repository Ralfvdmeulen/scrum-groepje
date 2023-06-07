$(document).ready(function(){
    $(".del-form").on("click", ".del-knop-input" , function(){
        var result = window.confirm("Weet je zeker dat je dit wilt verwijderen?");
        if (result) {
            $(this).closest("form").submit();
        } else {
            return false;
        }
    });
});