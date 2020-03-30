function calc(reqType){
    var num1 = document.getElementById('num1').value;
    var num2 = document.getElementById('num2').value;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('result').innerHTML = xhr.responseText;
        }
    }
    xhr.open("post", "calc.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("req="+reqType+"&num1="+num1+"&num2="+num2);
}