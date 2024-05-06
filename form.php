<main>
    <div class="divintro container-contract">
        <div class="tittle-contract">
            <div class="container-main">
                <h2>Form</h2>
            </div>
        </div>
        <div class="container-fizz">
            <?php
            echo "
                    <fieldset>
                        <legend>Method POST</legend>
                        <form action='' method='POST'>
                            <div class='line'>
                                <div class='description-form'>
                                    <label for='txtFirstName'>First Name</label>
                                </div>
                                <div class='value-form'>
                                    <input type='text' name='firstname' id='txtFirstName' />
                                </div>
                            </div>
                            <div class='line'>
                                <div class='description-form'>
                                    <label for='txtLastName'>Last Name</label>
                                </div>
                                <div class='value-form'>
                                    <input type='text' name='lastname' id='txtLastName' />
                                </div>
                            </div>
                            <div class='line'>
                                <div class='description-form'>
                                    <label for='txtEmail'>Email</label>
                                </div>
                                <div class='value-form'>
                                    <input type='email' name='email' id='txtEmail' />
                                </div>
                            </div>
                            <div class='line'>
                                <div class='description-form'>
                                    <label for='txtGender'>Gender</label>
                                </div>
                                <div class='value-form'>
                                    <select name='gender' id='txtGender'>
                                        <option value=''>Select your gender</option>
                                        <option value='m'>Male</option>
                                        <option value='f'>Female</option>
                                    </select>
                                </div>
                            </div class='line'>
                            <div class='line'>
                                <label>How do you find us?</label>
                                <input type='radio' value='Instagram' id='txtInstagram' name='findUs'><label for='txtInstagram'>Instagram</label>
                                <input type='radio' value='Facebook' id='txtFacebook' name='findUs'><label for='txtFacebook'>Facebook</label>
                                <input type='radio' value='Others' id='txtOthers' name='findUs'><label for='txtOthers'>Others</label>
                            </div>
                            <div class='line'>
                                <input type='submit' value='Submit POST form'>
                            </div>
                        </form>";
            if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['firstname'])) {
                echo '<div>Post Results</div>';
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $gender = $_POST['gender'];
                $findus = $_POST['findUs'];
                echo "FirstName: $firstname <br> ";
                echo "LastName: $lastname <br> ";
                echo "Email: $email <br>";
                echo ($gender == "m") ? "Gender: Male<br>" : "Gender: Female<br>";
                echo "Email: $email <br> Find: $findus";

            }
            ;
            echo "</fieldset>";
            echo "<fieldset>
                <legend>Method GET</legend>
                    <form action='' method='GET'>
                        <input type='hidden' name='p' id='p' value='form.php'/>
                        <div class='line'>
                            <div class='description-form'>
                                <label for='txtFirstNameg'>First Name</label>
                            </div>
                            <div class='value-form'>
                                <input type='text' name='getfirstname' id='gettxtFirstName' />
                            </div>
                        </div>
                        <div class='line'>
                            <div class='description-form'>
                                <label for='txtLastNameg'>Last Name</label>
                            </div>
                            <div class='value-form'>
                                <input type='text' name='getlastname' id='gettxtLastName' />
                            </div>
                        </div>
                        <div class='line'>
                            <div class='description-form'>
                                <label for='txtEmailg'>Email</label>
                            </div>
                            <div class='value-form'>
                                <input type='email' name='getemail' id='gettxtEmail' />
                            </div>
                        </div>
                        <div class='line'>
                            <div class='description-form'>
                                <label for='gettxtGender'>Gender</label>
                            </div>
                            <div class='value-form'>
                                <select name='getgender' id='gettxtGender'>
                                    <option value=''>Select your gender</option>
                                    <option value='m'>Male</option>
                                    <option value='f'>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class='line'>
                            <label>How do you find us?</label>
                            <input type='radio' value='Instagram' id='gettxtInstagram' name='getfindUs'><label for='gettxtInstagram'>Instagram</label>
                            <input type='radio' value='Facebook' id='gettxtFacebook' name='getfindUs'><label for='gettxtFacebook'>Facebook</label>
                            <input type='radio' value='Others' id='gettxtOthers' name='getfindUs'><label for='gettxtOthers'>Others</label>
                        </div>
                        <div class='line'>                            
                            <input type='submit' value='Submit GET form'>
                        </div>
                    </form>";

            if ($_SERVER['REQUEST_METHOD'] == "GET") {
                if (isset($_GET['getfirstname']) && isset($_GET['getlastname']) && isset($_GET['getemail']) && isset($_GET['getgender']) && isset($_GET['getfindUs'])) {
                    echo '<div>Get Results</div>';
                    $getfirstname = $_GET['getfirstname'];
                    $getlastname = $_GET['getlastname'];
                    $getemail = $_GET['getemail'];
                    $getgender = $_GET['getgender'];
                    $getfindus = $_GET['getfindUs'];
                    echo '<section>';
                    echo "FirstName: $getfirstname <br> ";
                    echo "LastName: $getlastname <br> ";
                    echo "Email: $getemail <br>";
                    echo ($getgender == "m") ? "Gender: Male<br>" : "Gender: Female<br>";
                    echo "Find: $getfindus";
                    echo '</section>';
                }
            }
            echo "</fieldset>";
            /////////////////////////////////////
            echo "<fieldset style='margin-bottom: 100px;'>
                <legend>Everything Form</legend>
                    <form action='' method='POST' name='frmEverything'>
                        <div class='line'>
                            <div class='description-form'>
                                <label for='evertxtFirstName'>First Name</label>
                            </div>
                            <div class='value-form'>
                                <input type='text' name='everfirstname' id='evertxtFirstName' />
                            </div>
                        </div>
                        <div class='line'>
                            <div class='description-form'>
                                <label for='evertxtLastNameg'>Last Name</label>
                            </div>
                            <div class='value-form'>
                                <input type='text' name='everlastname' id='evertxtLastName' />
                            </div>
                        </div>
                        <div class='line'>
                            <div class='description-form'>
                                <label for='evertxtEmail'>Email</label>
                            </div>
                            <div class='value-form'>
                                <input type='email' name='everemail' id='evertxtEmail' />
                            </div>
                        </div>
                        <div class='line'>
                            <div class='description-form'>
                                <label for='evertxtCellPhone'>Cell Phone</label>
                            </div>
                            <div class='value-form'>
                                <input type='fone' name='everCellPhone' id='everTxtCellPhone' >
                            </div>
                        </div>
                        <div class='line'>
                            <div class='description-form'>
                                <label for='evertxtGender'>Gender</label>
                            </div>
                            <div class='value-form'>
                                <select name='evergender' id='evertxtGender'>
                                    <option value=''>Select your gender</option>
                                    <option value='m'>Male</option>
                                    <option value='f'>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class='line'>
                                <label for='evertxtAppoitment'>I would like to book an appoitment for:</label>
                                <select name='appoitment' id='evertxtAppoitment'>
                                    <option value=''>Select</option>
                                    <option value='waxing'>Waxing</option>
                                    <option value='body-treatments'>Body Treatments</option>
                                    <option value='micro-hair'>Microneediling Hair</option>
                                    <option value='face-treatments'>Face Treatments</option>
                                </select>
                        </div>
                        <div class='line'>
                            <label>How do you find us?</label>
                            <input type='radio' value='Instagram' id='evertxtInstagram' name='everfindUs'><label for='evertxtInstagram'>Instagram</label>
                            <input type='radio' value='Facebook' id='evertxtFacebook' name='everfindUs'><label for='evertxtFacebook'>Facebook</label>
                            <input type='radio' value='Others' id='evertxtOthers' name='everfindUs'><label for='evertxtOthers'>Others</label>
                        </div>
                        <div class='line'>                            
                            <input type='submit' value='Submit Everything form'>
                        </div>
                    </form>";
                if (($_SERVER['REQUEST_METHOD'] == "POST") && isset($_POST['everfirstname'])) {
                    echo '<div>Get Results</div>';
                    $everfirstname = $_POST['everfirstname'];
                    $everlastname = $_POST['everlastname'];
                    $everemail = $_POST['everemail'];
                    $evergender = $_POST['evergender'];
                    $appoitment = $_POST['appoitment'];
                    $everfindus = $_POST['everfindUs'];
                    echo '<section>';
                    echo "FirstName: $everfirstname <br> ";
                    echo "LastName: $everlastname <br> ";
                    echo "Email: $everemail <br>";
                    echo ($evergender == "m") ? "Gender: Male<br>" : "Gender: Female<br>";
                    echo "Appoitment: $appoitment<br>";
                    echo "Find: $everfindus";
                    echo '</section>';
                }
            echo "</fieldset>";
            ?>
        </div>
    </div>
</main>
