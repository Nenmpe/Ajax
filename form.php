<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form1</title>
</head>
<body>
    <form id="form">
      Name: <input type="text" name="name" class="name"> 
      Address: <input type="text" name="address" class="address"> 
      Contact: <input type="text" name="contact" class="contact"> 
      <input type="submit" onclick="submitForm(event)" value="Submit">
    </form>

    <script>
        function submitForm(event){
            event.preventDefault();

            var formData=new FormData(document.getElementById("form"));
            var xhr=new XMLHttpRequest();

            xhr.open("post",'save.php',true);

            xhr.onreadystatechange=function(){
                if(xhr.readyState===4 && xhr.status===200){
                    alert(xhr.responseText);
                    // document.getElementById("form").reset();
                    window.location.href = "stdDetail.php";
                }

            };
            xhr.send(formData);
        }
       

    </script>
</body>
</html>