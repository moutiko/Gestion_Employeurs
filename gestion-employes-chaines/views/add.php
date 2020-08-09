<?php
    if(isset($_POST['submit'])){
    $newemploye = new EmployesController();
    $newemploye->addEmploye();
    
    }

?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
            <div class="card-header">Ajouter un employé</div>
                <div class ="card-body bg-light">
                   <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2"> 
                   <i class="fas fa-home"></i>
                   </a>
                        <form method="post">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" class="form-control" placeholder="Nom">
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prenom</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Prenom">
                            </div>
                            <div class="form-group">
                                <label for="mat">Matricule</label>
                                <input type="text" name="mat" class="form-control" placeholder="Matricule">
                            </div>
                            <div class="form-group">
                                <label for="depart">Departement</label>
                                <input type="text" name="depart" class="form-control" placeholder="Departement">
                            </div>
                            <div class="form-group">
                                <label for="poste">Poste</label>
                                <input type="text" name="poste" class="form-control" placeholder="Poste">
                            </div>
                            <div class="form-group">
                                <label for="date_emb">Date</label>
                                <input type="date" name="date_emb" class="form-control">
                            </div>
                            <div class="from-group">
                                <select class="from-control" name="statut" id="">
                                    <option value="1">Active</option>
                                     <option value="0">Résilier</option>
                                 </select>
                            </div>
                            <div class="from-group">
                                <button type="submit" class="btn btn-primary" name="submit">Valider</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>