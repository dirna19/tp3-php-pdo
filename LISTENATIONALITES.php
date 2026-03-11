
<?php include "header.php";
include "connexion-pdo.php";
$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$listenationalitees=$req->fetchALL();
?>

<div class="container mt-5">
  <div class="row pt-3">
    <div class="col-9"><h2>Liste des nationalités</h2></div>
    <div class="col-3"><a href=""class='btn btn-success'><i class="fas fa-plus-circle"></i> Crée une nationalité</a> </div>
  
  </div>
<table class="table table-hover                                                                    table-hover">
  <thead>
    <tr class="d-flex">
      <th scope="col" class="col-md-2">numero</th>
      <th scope="col" class="col-md-8">numero>libellé</th>
      <th scope="col" class="col-md-2">numero>actions</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($listenationalitees as $nationalite)
      {  echo "<tr class='d-flex'>";
        echo "<td class='col-md-2'>numero>$nationalite->num</td>";
        echo "<td class='col-md-8'>$nationalite->libelle</td>";
        echo "<td>
        <a href=''class='btn btn-primary'><i class='fas fa-pen'></i>
        <a href=''class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
        </td>";
        echo "</tr>";
      }
      ?>

     
  </tbody>
</table>

</main>
<?php include "footer.php";
?>