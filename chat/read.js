reading();

setInterval(reading, 3000);

function reading(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("output").innerHTML = this.responseText;  
        }
    };
    xmlhttp.open("GET", "read.php", true);
    xmlhttp.send();
}