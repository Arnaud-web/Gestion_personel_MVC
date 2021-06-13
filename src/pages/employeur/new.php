<?php

require (__DIR__ . '/../base.php');
?>

<body>
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card " style="background-color: rgba(0, 0, 0, 0.2);">
              <div class="card-header">
                <h3 class="card-title">New Employeur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nom </label>
                    <input type="text" name="nom" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Adresse</label>
                    <input type="text" name="adresse" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Date de naissance</label>
                    <input type="text" name="date_de_naissance"  class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">CIN</label>
                    <input type="text" name="cin" class="form-control" id="" placeholder="">
                  </div>          
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="/employeur">Listes des employeurs</a>
                </div>
              </form>
            </div>
            <!-- /.card -->

</body>