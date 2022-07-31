//numberOfPeopleConnected();

setInterval(numberOfPeopleConnected, 3000);

function numberOfPeopleConnected(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("numberOfPeopleConnected").innerHTML = this.responseText;  
        }
    };
    xmlhttp.open("GET", "count.php", true);
    xmlhttp.send();
}