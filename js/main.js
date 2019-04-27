

function validate(id, value) {
    console.log(id);
    console.log(value);
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "php/validate_delete.php?id=" + id + "&value=" + value, true);
        xmlhttp.send();
}

