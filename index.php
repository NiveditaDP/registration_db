<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR59GsYX77RZmdt5ZCWe2iysOd6FRGKUGeU3w-ziIoFSzUINQ4T_8gTvbDTxV42BiFnt_M&usqp=CAU') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9); /* semi-transparent white */
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
            width: 650px;
        }
        h2 {
            text-align: center;
            color: #333333;
            margin-bottom: 25px;
        }
        form label {
            display: block;
            margin-top: 12px;
            color: #333;
            font-weight: bold;
        }
        form input, form select, form textarea {
            width: 100%;
            padding: 8px 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .radio-checkbox {
            display: flex;
            gap: 15px;
            margin-top: 5px;
        }
        form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-top: 20px;
            padding: 10px 20px;
            border-radius: 5px;
        }
        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <label>First Name</label>
            <input type="text" name="firstname" required>

            <label>Last Name</label>
            <input type="text" name="lastname" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Number</label>
            <input type="number" name="number">

            <label>Telephone</label>
            <input type="tel" name="tel">

            <label>Website URL</label>
            <input type="url" name="url">

            <label>Date of Birth</label>
            <input type="date" name="date_of_birth">

            <label>Date & Time</label>
            <input type="datetime-local" name="datetime_local">

            <label>Time</label>
            <input type="time" name="time_input">

            <label>Month</label>
            <input type="month" name="month_input">

            <label>Week</label>
            <input type="week" name="week_input">

            <label>Favorite Color</label>
            <input type="color" name="color_input">

            <label>Gender</label>
            <div class="radio-checkbox">
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
            </div>

            <label>Hobbies</label>
            <div class="radio-checkbox">
                <input type="checkbox" name="hobbies[]" value="Reading"> Reading
                <input type="checkbox" name="hobbies[]" value="Sports"> Sports
                <input type="checkbox" name="hobbies[]" value="Music"> Music
            </div>

            <label>City</label>
            <input type="text" name="city">

            <label>Country</label>
            <input type="text" name="country">

            <label>Upload File</label>
            <input type="file" name="file_input">

            <label>Range</label>
            <input type="range" name="range_input" min="0" max="100">

            <label>Search</label>
            <input type="search" name="search_input">

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
