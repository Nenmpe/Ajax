<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title> 
</head>
<body>
   <div id="details"></div> 

    <script>
        var xml = new XMLHttpRequest();

        xml.onreadystatechange = function() {
            if (xml.readyState === 4 && xml.status === 200) {
                var data = JSON.parse(xml.responseText);

                var result = document.getElementById("details");
                result.innerHTML = "<h2>Student Details</h2>";
                result.innerHTML += "<table border='2'><tr><th>ID</th><th>Name</th><th>Address</th><th>Contact</th></tr>";

                data.forEach(function(a) {
                    result.innerHTML += "<tr><td>" + a.id + "</td><td>" + a.name + "</td><td>" + a.address + "</td><td>" + a.contact + "</td></tr><br>";
                });

                result.innerHTML += "</table>";
            }
        };

        xml.open("GET", "stdQuery.php", true);
        xml.send();

    </script>

</body>
</html>
