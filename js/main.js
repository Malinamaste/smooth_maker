$(document).ready(function(){

    $("#addFavorite").on("click", addFavorite);
    $("#removeFavorite").on("click", removeFavorite);
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
