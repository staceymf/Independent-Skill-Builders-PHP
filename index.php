<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Code</title>
</head>
<body>

<form action="product_insert_result.php" method="get">
    Company: <input type="text" name="company"/><br/>
    Type: <input type="text" name="type"/><br/>
    Roast:
    <input type="radio" name="roast" value="light">Light</input>
    <input type="radio" name="roast" value="medium">Medium </input>
    <input type="radio" name="roast" value="dark">Dark</input>
    <br/>
    <textarea name="description" rows="10" cols="40"></textarea><br/>
    <input type="submit" value="Submit"/>
</form>
</body>
</html>




