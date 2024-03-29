<!DOCTYPE html>
<html>
<head>
    <title>Search User</title>
    <link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Search User</h1>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Search User: <input type="text" name="username" class="form-control" onkeyup="showSuggestion(this.value)">
    </form>
    <p>Suggestions: <span id="output" style="font-weight: bold"></span></p>
</div>
</body>
</html>
<script>
    function showSuggestion(str) {
        if(str.length == 0){
            document.getElementById('output').innerHTML = '';
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('output').innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "suggest.php?q="+str, true);
            xmlhttp.send();
        }
    }
</script>