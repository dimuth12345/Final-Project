<!DOCTYPE html>
<html>
<head>
    <title>Admin Main Page</title>
    <style>
        /* CSS styles for buttons */
        button {
            font-size: 16px; /* Change the font size */
            font-family: Arial, sans-serif; /* Change the font family */
            padding: 10px 20px; /* Change the button padding */
            border-radius: 5px; /* Add border radius for rounded corners */
            background-color: #007bff; /* Change the background color */
            color: #ffffff; /* Change the text color */
            border: none; /* Remove the button border */
            cursor: pointer; /* Add cursor pointer on hover */
            margin-bottom: 10px; /* Add margin bottom for spacing */
        }
    </style>
</head>
<body align = "center">
    <h1>Welcome to the Admin Main Page</h1>
    <form action="additemtofeatures_product.php" method="GET">
        <button type="submit">Go to additemtofeatures_product Page</button>
    </form><br>
    <form action="additemtolatestproduct.php" method="GET">
        <button type="submit">Go to additemtolatestproduct Page</button>
    </form><br>
    <form action="additemtotblproduct.php" method="GET">
        <button type="submit">Go to additemtotblproduct Page</button>
    </form>

    <br>
    <form action="additemwomen.php" method="GET">
        <button type="submit">Go to additem to women Page</button>
    </form><br>
    <form action="additemmen.php" method="GET">
        <button type="submit">Go to additemmen Page</button>
    </form><br>
    <form action="index.php" method="GET">
        <button type="submit">Go to Main Page</button>
    </form>
</body>
</html>
