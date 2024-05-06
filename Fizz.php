<main>
    <div class="divintro container-contract">
        <div class="tittle-contract">
            <div class="container-main">
                <h2>Fizz</h2>
            </div>
        </div>
        <div class='container-fizz'>
            <form class="form" method="POST">
                <div class="line">
                    <div class="description-form">
                        <label for="textName">Your Name</label>
                    </div>
                    <div class= "value-form">
                        <input type="text" class="field" name="yourname" id="textName" value='Mirian'>
                    </div>
                </div>

                <div class= "line">
                    <div class="description-form">
                        <label for="txtFirst"> Start Number </label>
                    </div>
                    <div class="value-form">
                        <input type="text" class="field" name="start" id="txtFirst" value="1">
                    </div>
                </div>
                <div class= "line">
                    <div class="description-form">
                        <label for="txtEnd"> End Number </label>
                    </div>
                    <div class="value-form">
                        <input type="text" class="field" name="end" id="txtEnd" value="100">
                    </div>
                </div>
                <div class= "line">
                    <div class="description-form">
                        <label for="txtFizz"> Fizz Number </label>
                    </div>
                    <div class="value-form">
                        <input type="text" class="field" name="fizz" id="txtFizz" value="3">
                    </div>
                </div>
                <div class= "line">
                    <div class="description-form">
                        <label for="textFizz">Fizz Name</label>
                    </div>
                    <div class="value-form">
                        <input type="text" class="field" name="fizzname" id="textFizz" value="Fizz">
                    </div>
                </div>

                <div class= "line">
                    <div class="description-form">
                        <label for="txtBuzz"> Buzz Number </label>
                    </div>
                    <div class="value-form">
                        <input type="text" class="field" name="buzz" id="txtBuzz" value="5">
                    </div>
                </div>
                <div class= "line">
                    <div class="description-form">
                        <label for="textBuzz">Buzz Name</label>
                    </div>
                    <div class="value-form">
                        <input type="text" class="field" name="buzzname" id="textBuzz" value="Buzz">
                    </div>
                </div>
                <div class= "line">
                    <div class="description-form">
                        <label for="txtFizzBuzz"> Bang Number </label>
                    </div>
                    <div class="value-form">
                        <input type="text" class="field" name="bang" id="txtFizzBuzz" value="7">
                    </div>
                </div>
                <div class= "line">
                    <div class="description-form">
                        <label for="Bang Name">Bang Name</label>
                    </div>
                    <div class="value-form">
                        <input type="text" class="field" name="bangname" id="textBang" value="Bang">
                    </div>
                </div>
                <div class= "line-control">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {?>
            <div class="result-fizz"><?php
                $name = $_POST['yourname'];
                $firSt = $_POST['start'];
                $end = $_POST['end'];
                $num_fizz = $_POST['fizz'];
                $text_fizz = $_POST['fizzname'];
                $num_buzz = $_POST['buzz'];
                $text_buzz = $_POST['buzzname'];
                $num_bang = $_POST['bang'];
                $text_bang = $_POST['bangname'];

                $msg = "Here is your Fizz Buzz Bang, $name!";
                for ($i = $first; $i <= $end; $i++) {
                    if ($i % $num_fizz == 0)
                        $msg .= " $text_fizz, ";
                    else {
                        if ($i % $num_buzz == 0)
                            $msg .= " $text_buzz, ";
                        else {
                            if ($i % $num_bang == 0)
                                $msg .= " $text_bang, ";
                            else
                                $msg .= " $i, ";
                        }
                    }
                }
                $msg = substr($msg, 0, strlen($msg) - 2);
                echo "$msg.";?>
                </div><?php
            }
            ?>
    </div>
</main>
