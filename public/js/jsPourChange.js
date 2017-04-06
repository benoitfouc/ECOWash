/**
 * Created by Alexandre on 30/03/2017.
 */
function action() {
    console.log("ok");
    var Item = document.getElementById("bac");
    var selectedItem = Item.options[Item.selectedIndex].text;
    if (selectedItem == "1") {
        $("#premier").show();
        $("#second").hide();
        $("#troisieme").hide();
        $("#info").show();
    }
    else if (selectedItem == "2") {
        $("#premier").hide();
        $("#second").show();
        $("#troisieme").hide();
        $("#info").show();
    }
    else if (selectedItem == "3") {
        $("#premier").hide();
        $("#second").hide();
        $("#troisieme").show();
        $("#info").show();
    }
}

$(document).ready(function(){
    $("#bac").on("change",function(){
        action();
    });
});



