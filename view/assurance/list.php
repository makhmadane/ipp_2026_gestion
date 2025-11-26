

   <div class="container mt-5">

    <a href="?action=addAssurance" class="btn btn-success">Add</a>

        <table class="table table-striped">
            <tr>
                <td>Id</td>
                <td>Montant</td>
                <td>description</td>
                <td>Bonus</td>
            <td>Action(s)</td>

            </tr>

            <?php foreach($assurances as $a){ ?>
            <tr>
                    <td><?= $a['id']?></td>
                    <td><?php echo $a['montant']?></td>
                    <td><?php echo $a['description']?></td>
                    <td><?php echo $a['bonus']?></td>
                    <td>
                        <a href="?action=deleteAssurance&id=<?= $a['id']?>" class="btn btn-danger">Supprimer</a>
                        <a href="?action=modifierAssurance&id=<?= $a['id']?>" class="btn btn-primary">Modifier</a>
                    </td>
                    
            </tr>
            <?php } ?>


        </table>
   </div> 
