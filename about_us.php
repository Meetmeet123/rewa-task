<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#career').click(function() {
                $("#div1").load("career.php");
            });
            $('#home').click(function() {
                $("#div1").load("home.php");
            });
        });
    </script>
</head>

<body>


    <div id="div1">
        <h1>this is About Us Page</h1>
        <button id="home">home</button>
        <button id="career">Career</button>
    </div>





</body>


</html>