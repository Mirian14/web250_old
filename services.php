<main>
<div class="divintro container-contract">
        <div class="tittle-contract">
            <div class="container-main">
                <h2>Services</h2>
            </div>
        </div>
        <div class='container-login'>
            <fieldset class="list">
                <legend>Services</legend>
                <div class="dflex">
                    <a href="index.php?p=new-register.php"><button class="btn btn-primary">New</button></a>
                </div>
                <?php 
                        require_once('CRUD.php');
                        $records = select('services');
                        foreach ($records as $record) {?>
                            <div class="dflex single-border ">
                            <div class="register w-70">
                                <input type="hidden" name="id" value="<?php echo $record['id']; ?>">
                                <?php echo $record['description_service']; ?>
                            </div>
                            <div class="register w-30">
                                <a href="index.php?p=edit-register&id=<?php echo $record['id'];?>"><button class="btn btn-edit">Edit</button></a>
                                <button class="btn btn-delete">Delete</button>
                            </div>
                            </div>
                        <?php } ?>
              </div>
            </fieldset>
        </div>
    </div>
</main>
