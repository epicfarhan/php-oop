<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Php Form</title>
    <link rel="stylesheet" href="./styles/main.css">
</head>
<body>

        <form action="formhandler.php" method="post">
            <h1 class="form-header">Test Form.</h1>
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" placeholder="enter first name">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" placeholder="enter last name">
            <label for="colors">Choose a color : </label>
            <select name="colors" id="colors">
                <option value="none">None</option>
                <option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="green">Green</option>
                <option value="pink">Pink</option>
            </select>
            <div class="submit-button-container">
            <button type="submit">Send</button>
            </div>
        </form>
    
</body>
</html>