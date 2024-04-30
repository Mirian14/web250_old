<form method="POST"> 
    <div>
        <label for="txtFirst"> Start Number </label>
        <input type="text" id="txtFirst" value= "1">
    </div>
    <div>
        <label for="txtEnd"> End Number </label>
        <input type="text" id="txtEnd" value="100">
    </div>
    <div>
        <label for="txtFizz"> Text 3  </label>
        <input type="text" id="txtFizz" value= "Fizz">
    </div>
    <div>
        <label for="txtBuzz"> Text 5 </label>
        <input type="text" id="txtBuzz" value= "Buzz">
    </div>
    <div>
        <label for="txtFizzBuzz"> Text 3 and 5 </label>
        <input type="text" id="txtFizzBuzz" value= "FizzBuzz">
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>
<?php
  if ($_SERVER['REQUEST_METHOD'] =='POST')
  echo 'result'; 
?>