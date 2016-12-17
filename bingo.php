<html>
<head>
<style>
th {
    font-size:75px;
    padding:5px;
}
td {
    padding:20px;
    font-size:24px;
    width:150px;
}

</style>

<script>
function shuffle (itemList) {
     for (var i = 0; i < itemList.length; i++)  {
        var random = Math.floor(Math.random() * itemList.length);
        placeHolder = itemList[random];
        itemList[random] = itemList[i];
        itemList[i] = placeHolder;;
    }

    return itemList;
}

function generateBoard() {
    //Array of items
    var listOfCells = new Array();

    for(var i = 1; i <= 24; i++ ) {
        listOfCells.push(i);
    }

    var listOfItems = new Array();

    listOfItems[0] = "One shot Nythendria";
    listOfItems[1] = "Legendary drops for anyone";
    listOfItems[2] = "One shot Ursoc";
    listOfItems[3] = "One shot Cenarius";
    listOfItems[4] = "Ashley calls John out for farting";
    listOfItems[5] = "Someone falls off during spider bird";
    listOfItems[6] = "Someone says 'Bear ass'";
    listOfItems[7] = "More ranged DPS than Melee";
    listOfItems[8] = "Xavius defeated";
    listOfItems[9] = "One shot Dragons";
    listOfItems[10] = "No one is stunned during Dragons (10 stacks)";
    listOfItems[11] = "One shot Illy'G";
    listOfItems[12] = "One shot Spider bird";
    listOfItems[13] = "No one dies on trash after Nythendria";
    listOfItems[14] = "Someone pronounces Ashley's toon name correctly on the first try";
    listOfItems[15] = "Someone rolls 100 on loot";
    listOfItems[16] = "Someone received random epic from trash";
    listOfItems[17] = "Everyone is on time for raid";
    listOfItems[18] = "Everyone wins yay!";
    listOfItems[19] = "No one dies on any trash";
    listOfItems[20] = "No one dies on Nythendra";
    listOfItems[21] = "No one dies on Ursoc";
    listOfItems[22] = "No one dies on Dragons";
    listOfItems[23] = "No one dies on Spider bird";
    listOfItems[24] = "No one does on Illy G";
    
    // Randomize items
    listOfItems = shuffle(listOfItems);
    // Place in board

    for(var i = 0, item; item = listOfCells[i]; i++) {
        document.getElementById(listOfCells[i]).innerHTML = listOfItems[i];         
    }

}
</script>
</head>

<body onload="generateBoard()">
<table border=4>

<th> B </th> <th> I </th> <th> N </th> <th> G </th> <th> O </th>
<tr> 
    <td><input type="Checkbox"><span id="1"> </td>
    <td><input type="Checkbox"><span id="2"> </td>
    <td><input type="Checkbox"><span id="3"> </td>
    <td><input type="Checkbox"><span id="4"> </td>
    <td><input type="Checkbox"><span id="5"> </td>
</tr>
<tr> 
    <td><input type="Checkbox"><span id="6"> </td>
    <td><input type="Checkbox"><span id="7"> </td>
    <td><input type="Checkbox"><span id="8"> </td>
    <td><input type="Checkbox"><span id="9"> </td>
    <td><input type="Checkbox"><span id="10"> </td>
</tr>
<tr> 
    <td><input type="Checkbox"><span id="11"> </td>
    <td><input type="Checkbox"><span id="12"> </td>
    <td><input type="Checkbox" checked disabled >Free space</td>
    <td><input type="Checkbox"><span id="13"> </td>
    <td><input type="Checkbox"><span id="14"> </td>
</tr>
<tr> 
    <td><input type="Checkbox"><span id="15"> </td>
    <td><input type="Checkbox"><span id="16"> </td>
    <td><input type="Checkbox"><span id="17"> </td>
    <td><input type="Checkbox"><span id="18"> </td>
    <td><input type="Checkbox"><span id="19"> </td>
</tr>
<tr> 
    <td><input type="Checkbox"><span id="20"> </td>
    <td><input type="Checkbox"><span id="21"> </td>
    <td><input type="Checkbox"><span id="22"> </td>
    <td><input type="Checkbox"><span id="23"> </td>
    <td><input type="Checkbox"><span id="24"> </td>
</tr>