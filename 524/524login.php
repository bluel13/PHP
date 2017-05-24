<?php



?>

<form action="524main.php" method="post" >

     帳號:<input type=text" name="account"/><br>
     Password:<input type="password" name="password"/><br>
     生日:<input type="date" name="birthday"/><br>
    地區<select name=""area">

           <option value="401">北區</option>
    <option value="402">中區</option>
    <option value="403">南區</option>
    <option value="404">西區</option>

    </select>

    <input type="radio" name="gender" value="F">Female
    <input type="radio" name="gender" value="M">Male
    <br>
    <input type="checkbox" name="like[]" value="1">A
    <input type="checkbox" name="like[]" value="2">B
    <input type="checkbox" name="like[]" value="3">C<br>
    <input type="checkbox" name="like[]" value="4">D
    <input type="checkbox" name="like[]" value="5">E
    <input type="checkbox" name="like[]" value="6">F<br>
    <textarea type="write" name="word"></textarea><br>
    <input type="file" name="upload"/><br>




    <input type="submit" value="送出">

</form>