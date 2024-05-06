<main>
<div class="divintro container-contract">
        <div class="tittle-contract">
            <div class="container-main">
                <h2>Services</h2>
            </div>
        </div>
        <div class='container-login'>
            <fieldset class="list">  
                <legend>Enter detail service </legend>             
                <form method="POST">
                    <div class="dflex">
                        <label for="txtDescription" class="description-form">Description</label>
                        <input type="text" class="field" id="txtDescription" name="description" required >
                    </div>
                    <div class="dflex">
                        <label for="txtPrice" class="description-form">Price</label>
                        <input type="text" name="price" id="txtPrice" class="field" required>
                    </div>
                    <div class="dflex">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST')
                    {
                        require_once('CRUD.php');
                        $table = 'services';
                        $fields = 'description_service, price';
                        $description = $_POST['description'];
                        $price = $_POST['price'];
                        $values = "'$description', $price";
                        create($table,$fields,$values);
                        header('Location: index.php?p=services.php');
                    }
                ?>
            </fieldset>
        </div>
    </div>
</main>
