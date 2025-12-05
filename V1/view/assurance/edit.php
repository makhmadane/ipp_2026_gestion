<div class="container mt-5">

    <form action="?action=editAssurance" method="POST">
        <input hidden  type="number" name="id" id="" class="form-control" value ="<?= $assurance['id'] ?>" >
        <label for="">Montant</label>
        <input  type="number" name="montant" id="" class="form-control" value ="<?= $assurance['montant'] ?>" >
        <label for="">Description</label>
        <input type="text" name="description" id="" class="form-control" value ="<?= $assurance['description'] ?>"  >
        <label for="">Bonus</label>
        <input type="number" name="bonus" id="" class="form-control" value ="<?= $assurance['bonus']?>" >
        <br>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>