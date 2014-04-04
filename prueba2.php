<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

                <link href="styles.css" media="screen" rel="stylesheet" type="text/css" />
                <script type="text/javascript" src="jquery-1.3.2.js"></script>
                <script type="text/javascript">
                    $(document).ready(function() {
                    $('#username').blur(function(){
                    
                    $('#Info').html('<img src="loader.gif" alt="" />').fadeOut(1000);
                    
                    var username = $(this).val();
                    var dataString = 'username='+username;
                    
                    $.ajax({
                    type: "POST",
                    url: "check_username_availablity.php",
                    data: dataString,
                    success: function(data) {
                    $('#Info').fadeIn(1000).html(data);
                    }
                    });
                    });
                    });
                </script>

</head>
<body>
    
</body>
</html>