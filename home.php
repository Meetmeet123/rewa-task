<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#about_us').click(function() {
                $("#div1").load("about_us.php");
            });
            $('#career').click(function() {
                $("#div1").load("career.php");
            });
        });
    </script>
</head>

<body>


    <div id="div1">
        <h1>this is Home Page</h1>
        <button id="about_us">About Us</button>
        <button id="career">Career</button>
    </div>




</body>


</html>