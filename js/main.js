$(document).ready(function(){

    $("#addFavorite").on("click", addFavorite);
    $("#removeFavorite").on("click", removeFavorite);

    //$("#save").on("click", removeFavorite);
});

function addFavorite(idRecipe) {

    var idRecipe = location.search.substring(location.search.indexOf("=")+1);

        $.ajax({
            type: "POST",
            url: "favorite.php",
            dataType: "json",
            data: {idRecipe : idRecipe},
            success: function() {
    
                $(location).attr("href", "./recipe.php?id="+idRecipe);
            },
            error: function() {
                $(location).attr("href", "./connexion.php");
            }
        });  
}

function removeFavorite(idRecipe) {

    var idRecipe = location.search.substring(location.search.indexOf("=")+1);

        $.ajax({
            type: "POST",
            url: "removeFavorite.php",
            dataType: "json",
            data: {idRecipe : idRecipe},
            success: function() {
    
                $(location).attr("href", "./recipe.php?id="+idRecipe);
            },
            error: function() {
                $(location).attr("href", "./connexion.php");
            }
        });  
}

/*

function verifEmail() {
    
    email = $("#email").val();

    if(email.trim().length > 0) {
        var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
        return reg.test(email);
    }
}
*/
