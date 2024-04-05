<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Projector</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h1 {
            color: yellow;
            background-color: black;
            text-align: center;
            padding: 10px;
            margin: 0;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .calc-error {
            color: red;
        }
        .calc-result {
            color: green;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h1>SUBMIT THE FORM BEFORE USING DISKOX CALCULATOR</h1>

    <form action="formhandler.php" method="POST">
            <label style="color:blue;" title="Enter your name!" for="firstname"><b>First Name</b></label>
            <input required id="firstname" type="text" name="firstname" placeholder="First Name...">
            

            <br><br>

            <label style="color:blue;" for="lastname"><b> Last Name</b></label>
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
            <label for="browsers">Browsers</label>
            <input list="browsers" name="browser">
            <datalist id="browsers">
                <option value="Edge">
                <option value="Firefox">
                <option value="Chrome">
                <option value="Opera">
                <option value="Safari">
            </datalist>



            <br><br>
        

            <button type="submit">Submit</button>
    </form>

    <h1>DISKOX CALCULATOR</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="num01" placeholder="Enter number one" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num02" placeholder="Enter number two" required>
        <button>Calculate</button>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //Get data from POST request
            $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
            $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = htmlspecialchars($_POST["operator"]);

            //error handler
            $errors = false;
            if (empty($num01) || empty($num02) || empty($operator)) {
                echo "<p class='calc-error'>Fill in all Fields!</p>";
                $errors = true;
            }

            if (!is_numeric($num01) || !is_numeric($num02)) {
                echo "<p class='calc-error'>Only write numbers!</p>";
                $errors = true;
            }

            // Calculate the numbers if no errors
            if (!$errors) {
                $value = 0;
                switch ($operator) {
                    case "add":
                        $value = $num01 + $num02;
                        break;
                    case "subtract":
                        $value = $num01 - $num02;
                        break;
                    case "multiply":
                        $value = $num01 * $num02;
                        break;
                    case "divide":
                        $value = $num01 / $num02;
                        break;
                    default:
                        echo "<p class='calc-error'>SOMETHING WENT HORRIBLY WRONG!</p>";
                }

                echo "<p class='calc-result'>Result = " . $value . "</p>";
            }
        }


        ?>
    </form>

</body>
</html>