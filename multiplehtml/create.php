<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body style="text-align: center; width: 100%; height: 100%;">
<form action="add.php" method="POST" enctype="multipart/form-data">
    <label>Full Name</label>
    <input type="text" name="full_name" />
    <br>

    <label>Hobby :</label><br>
    <input type="checkbox" name="hobby_gardening" value="Gardening">Gardening<br>
    <input type="checkbox" name="hobby_reading" value="Reading">Reading<br>
    <input type="checkbox" name="hobby_dancing" value="Dancing">Dancing<br>
    <input type="checkbox" name="hobby_singing" value="Singing">Singing<br>
    <br>

    <label>Favorite Food(s) :</label><br>
    <input type="checkbox" name="favorite_food[]" value="Nanna Biriani">Nanna Biriani<br>
    <input type="checkbox" name="favorite_food[]" value="Vuna Khichuri">Vuna Khichuri<br>
    <input type="checkbox" name="favorite_food[]" value="Grilled Chicken">Grilled Chicken<br>
    <input type="checkbox" name="favorite_food[]" value="Fried Rice">Fried Rice<br>
    <br>


    <label>Preferred Job Location: </label>
    <select name="cities[]" multiple>
        <option value="Dhaka">Dhaka</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Khulna">Khulna</option>
        <option value="Jessore">Jessore</option>
        <option value="Rangpur">"Rangpur</option>
        <option value="Dinajpur">Dinajpur</option>
        <option value="Barisal">Barisal</option>
        <option value="Bogra">Bogra</option>
        <option value="Comilla">Comilla</option>
        <option value="Coxes Bazar">Coxes Bazar</option>
        <option value="Sunamgonj">Sunamgonj</option>
        <option value="Tangail">Tangail</option>
        <option value="Thakurgong">Thakurgong</option>
        <option value="Pabna">Pabna</option>
        <option value="Kurigram">"Kurigram</option>
        <option value="Pirojpur">Pirojpur</option>
        <option value="Faridpur">Faridpur</option>
        <option value="Chandpur">Chandpur</option>

    </select>
    <br>

<!--    <label>Upload Your Photo :</label>-->
<!--    <input type="file" name="photo">-->
<!--    <br>-->


    <button type="submit">Submit</button>
</form>
</body>
</html>