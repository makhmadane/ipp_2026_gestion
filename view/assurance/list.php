

<table>
    <tr>
        <td>Id</td>
        <td>Montant</td>
        <td>description</td>
        <td>Bonus</td>

    </tr>

    <?php foreach($assurances as $a){ ?>
       <tr>
            <td><?php echo $a['id']?></td>
            <td><?php echo $a['montant']?></td>
            <td><?php echo $a['description']?></td>
            <td><?php echo $a['bonus']?></td>
       </tr>
    <?php } ?>


</table>