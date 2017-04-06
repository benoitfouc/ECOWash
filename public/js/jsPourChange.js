/**
 * Created by Alexandre on 30/03/2017.
 */
function action() {
    var Item = document.getElementById("bac");
    var selectedItem = Item.options[Item.selectedIndex].text;
    if (selectedItem == "1") {
        $("#premier").show();
        alert("CHANGEMENT 1 ");
    }
    else if (selectedItem == "2") {
        $("#second").show();
        alert("CHANGEMENT 2");
    }
    else if (selectedItem == "3") {
        $("#troisieme").show();
        alert("CHANGEMENT 3");
    }
}

