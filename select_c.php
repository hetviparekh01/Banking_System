
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
   
    <body style="background-color:#e3f2fd ;">
 
<form action="select_1.php">

  <div class="row my-5">
    <div class="text-center h3">The Sparks Foundation</div>
  </div>
  <div class="row my-5">
    <div class="text-center h5">Tranfer Your Money Here..</div>
  </div>
  <!-- <div class="input-group mb-3 container-fluid">
   Payee:<input type="text" class="form-control " placeholder="Transfer_id" aria-label="Username"
      aria-describedby="basic-addon1" name="t1">
  </div> -->
  <input type="hidden" name="t1" value="<?php echo $_POST['t1']; ?>">
  <div class="input-group mb-3 container-fluid">
    Receiver:<input type="text" class="form-control" placeholder="receiver_id" aria-label="Username"
      aria-describedby="basic-addon1" name="r1">
  </div>
  <div class="input-group mb-3 container-fluid">
    Amount:<input type="number" class="form-control" placeholder="amount" aria-label="Username" aria-describedby="basic-addon1"
      name="a1">
  </div>
  <div class="text-center">
    <input class=" btn btn-primary" type="submit" value="Transfer">
  </div>
</form>
<div class="fixed-bottom text-center h5">@thesparksfoundation..#gripmay23</div>


</body>

</html>