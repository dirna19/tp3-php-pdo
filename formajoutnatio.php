<?php include "header.php";
?>
<div class="container mt-5">
    <form action="valideajoutnatio.php" mthod="post">
        <div class="form-group">
            <label for='libelle'> Libellé </label>
            <input type="text" class='form-control' id='libelle' placehoder='Saisir le Libellé' name='libelle'>
        </div>
        <div class="row">
            <div class="col"> <a href=LISTENATIONALITES.php" class='btn btn-warning'>Revenir à la liste</a> </div>
            <div class="col"><button type='submit' class='btn btn-success'> Ajouter </buttonW></div>
</div>
    </form>
</div>
<?php include "footer.php";

?>
