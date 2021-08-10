<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).ready(function() {
                $('#about_us').click(function() {
                    $("#div1").load("about_us.php");
                });
                $('#home').click(function() {
                    $("#div1").load("home.php");
                });
            });
        });
    </script>
</head>

<body>


    <div id="div1">
        <h1>this is Career Page</h1>
        <button id="home">Home</button>
        <button id="about_us">About Us</button>

    </div>

</body>


</html>