<?php  require_once './button.css'; ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
function input(e) {
    var tbInput = document.getElementById("tbInput");
    tbInput.value = tbInput.value + e.value;
}

function del() {
    var tbInput = document.getElementById("tbInput");
    tbInput.value = tbInput.value.
    substr(0, tbInput.value.length - 1);
}
function bekuld(){
    if(tbInput.length<2 && tbInput>0){
        var szam=tbInput.value;
    }
    

}
    </script>
    <title>Document</title>
</head>
<body>
    <input id="tbInput" type="text" size="6" disabled/>
    <input class="button"id="buttons" type="submit" value="Beküld" onclick="bekuld()"/>
    
    <div id="VirtualKey">
        <input class="button" id="btn1" type="button" value="1" onclick="input(this);" />
        <input class="button"id="btn2" type="button" value="2" onclick="input(this);"/>
        <input class="button"id="btn3" type="button"value="3" onclick="input(this);" />
        <br />
        <input class="button"id="btn4" type="button"value="4" onclick="input(this);" />
        <input class="button"id="btn5" type="button"value="5" onclick="input(this);" />
        <input class="button"id="btn6" type="button"value="6" onclick="input(this);" />
        <br />
        <input class="button"id="btn7" type="button"value="7" onclick="input(this);" />
        <input class="button"id="btn8" type="button"value="8" onclick="input(this);" />
        <input class="button"id="btn9" type="button"value="9" onclick="input(this);" />
        <br />
        <input class="button"id="btn0" type="button"value="0" onclick="input(this)" />
        <input class="button"id="btnDel" type="button" value="Töröl " onclick="del();" />
    </div>
</body>
</html>