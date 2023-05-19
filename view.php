<?php
require_once('db.php');
$query="select * from customer";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <!-- bootstrap libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</head>

<body >
<nav class="navbar bg-body-tertiary my-3" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      
        Banking System
    </a>
    <ul class="navbar-nav">
        <li class="nav-item me-5">
          <a class="nav-link active" aria-current="page" href="index.html">GO Back To HomePage</a>
        </li>
      </ul>
  </div>
</nav>
    <table class="table table-primary table-hover ">
        <tr>
            <th>Customer ID</th>
            <th>Name</th>
            <th>Balance</th>
            <th>Transfer Money</th>
        </tr>
        <tr>
           <?php
           while($row=mysqli_fetch_assoc($result))
           {
            ?>
            
                <td><?php echo $row['c_id'] ?></td>
                <td><?php echo $row['Name'] ?></td>
                <td><?php echo $row['Amount'] ?></td>
                <!-- <td><a class="btn btn-primary" href="select_c.html" role="button">Transfer</a></td> -->
                <td><form action="select_c.php" method="post">
             <input type="hidden" name="t1" value="<?php echo $row['c_id']?>">
            <!-- form fields go here -->
            <!-- <input type="submit"> -->
            <button type="submit" class="btn btn-primary">Transfer</button>
            </form></td>
        </tr>
        <?php
           }   
           ?>   
    </table>
    <div class="fixed-bottom text-center h5">@thesparksfoundation..#gripmay23</div>
</body>

</html>