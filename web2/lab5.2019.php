<form action="lab5.2019valid.php" method="post">
    <fieldset style="width: 300px;">
    <legend>2019</legend>
    Name:<input type="text" name="name">
    <br>
    Age:<input type="text" name="age">
    <br>
    <label for="hobbies">Hobbies: </label>
    <input type="checkbox" name="hobbies[]" value="football">football
    <input type="checkbox" name="hobbies[]" value="singing">singing
    <input type="checkbox" name="hobbies[]" value="reading">Reading
    <br>
   Comments: <textarea name="comments"></textarea><br>
    <input type="submit" value="ok">
</fieldset>

</form>