<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Page</title>
</head>
<body style="text-align:center;">

    <main>
        <form action="formhandler.php" method="POST">
            <label style="color:blue;" title="Enter your name"  for="firstname"><b>First Name</b></label>
            <input required id="firstname" type="text" name="firstname" placeholder="First Name...">

            <br><br>

            <label style="border:2px solid blue;" for="lastname"> Last Name </label>
            <input id="lastname" type="text" name="lastname" placeholder="Last Name...">

            <br><br>

            <label for="favouritepet">Favourite Pet</label>
            <select id="favouritepet" name="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="birds">Birds</option>
                <option value="hen">Hen</option>
            </select>

            <br>
            <hr>

            <button type="submit">Submit</button>
        </form>
    </main>

    

</body>
</html>