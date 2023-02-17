<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>PHP - AJAX - CRUD</title>
</head>
<body>
    <?php
        include("database/database.php");
    ?>
    <div class="container">
        <h3>Form</h3>

        <!-- <form> -->
        <div class="form-group">
                <label for="" class="form-label">Enter name</label>
                <input type="text" id='name' class="form-control">
                <small class='text-danger' id="name-error"></small>
            </div>

            <div class="form-group">
                <label for="" class="form-label">Enter adress</label>
                <input type="text" id='adress' class="form-control">
                <small class='text-danger' id="adress-error"></small>
            </div>

            <div class="form-group">
                <label for="" class="form-label">Enter age</label>
                <input type="text" id='age' class="form-control">
                <small class='text-danger' id="age-error"></small>
            </div>

            <div class="form-group">
                <label for="" class="form-label">Enter gender</label>
                <select name="" id="gender" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="" class="form-label">Enter phone number</label>
                <input type="text" id='phone' class="form-control">
                <small class='text-danger' id="phone-error"></small>
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit" id="submit" >Save</button>
            </div>
        <!-- </form> -->

        
        <hr>

        <?php
            $all_user = $mysqli->prepare("SELECT * from users");
            $all_user->execute(array());
        ?>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>N°</th>
                    <th>Name</th>
                    <th>Adress</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <!-- <th colspan=2>Actions</th> -->
                </tr>
            </thead>
        <?php 
            while($data = $all_user->fetch())
            {
         ?>
            <tbody>
                <tr>
                    <td><?php echo $data["id"];?></td>
                    <td><?php echo $data["name"];?></td>
                    <td><?php echo $data["adress"];?></td>
                    <td><?php echo $data["age"];?></td>
                    <td><?php echo $data["gender"];?></td>
                    <td><?php echo $data["phone"];?></td>
                </tr>
            </tbody>
        <?php      

                
            }
            ?>
        </table>

    </div>

    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/script.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
</body>
</html>