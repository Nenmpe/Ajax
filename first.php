<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX first</title>
</head>
<script>
    function getTextFromPage(){
        var xhttp=new XMLHttpRequest();
        xhttp.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200){
                document.getElementById("result").innerText=this.responseText;
            }
        };
        xhttp.open("GET","text_f.txt",true);
        xhttp.send();
    }
</script>
<body>
    <button onclick="getTextFromPage()">Get Text</button>
    <div id="result"></div>
</body>
</html>