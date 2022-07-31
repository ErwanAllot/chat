function writing(){
    pseudo = document.getElementById('pseudo').value;
    text = document.getElementById('text').value;
    text = text.replaceAll("\n", "Bourricot");

    document.getElementById('text').value = '';

    edition(text, pseudo);
}

function edition(text, pseudo) {
    if (text.length == 0 || pseudo.length == 0) {return;}
    else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("output").innerHTML = this.responseText;               
            }
        };
    xmlhttp.open("GET", "write.php?text=" + text + "&pseudo="+ pseudo, true);
    xmlhttp.send();
    }
}