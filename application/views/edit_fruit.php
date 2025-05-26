<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Fruit</title>
    <?php include "components/header.php" ?>
    <?php linkCSS("assets/css/dataTables.bootstrap5.css") ?>
</head>
<body>
    <?php include "components/nav.php"; ?>

 <div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
          <?php include "components/editFruitForm.php"; ?>
        </div>
        <!-- close col-md-5 -->
    </div>
    <!-- close row -->
 </div>
 <!-- close container -->
  <?php include "components/footer.php"; ?>

  <script>
    $document.ready(function(){
        $('#example').FruitTable();
    });
  </script>
  <?php linkJS("assets/js/bootstrap.bundle.min.js");?>
  <?php linkJS("assets/js/dataTables.bootstrap5.js");?>

</body>
</html>