<?php
require_once 'classesdao/PersonneDAO.php';
//include '';
$per = new PersonneDAO();
//$hopi = $per->afficher();
$data = $per->afficherParId($_GET['IdP']);
include('includes/header.php');
include('includes/topnavbar.php');
include('includes/rightnavbar.php');
?>
<!-- AJOUTER -->

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> MODIFIEZ LE PROJET</h3>

        <!-- page start-->
        <div class="panel-body">
            <form method="post" action="oriente.php?a=modif">
                <div class="form-group">
                    <label for="id">Identifiant du Projet :<?php echo $data->getId(); ?></label>
                    <input type="hidden" name="id" placeholder="Tapez l'identifiant" 
                           class="form-control" value="<?php echo $data->getId() ?>" required="*">
                </div>
                <div class="form-group ">
                    <label for="firstname">Nom</label>
                    <input class=" form-control" value="<?php echo $data->getNom() ?>" name="nom" type="text" />
                </div>
                <div class="form-group ">
                    <label for="firstname">Prenom</label>
                    <input class=" form-control" value="<?php echo $data->getPrenom() ?>" name="prenom" type="text" />
                </div>
                <div class="form-group">
                    <div class="col-sm-5 col-xs-11">
                        <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="01-01-2014" class="input-append date dpYears">
                            <label for="Date">Date</label>
                            <input type="text" readonly="" name="date" value="<?php echo $data->getDateNaiss() ?>" size="16" class="form-control">
                            <span class="input-group-btn add-on">
                                <button class="btn btn-theme" type="buttotypen"><i class="fa fa-calendar"></i></button>
                            </span>
                        </div>
                    </div>
                </div>

        </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default">Annuler</button>
            <button type="submit" name="ajout" class="btn btn-primary">Valider</button>
        </div>
        </form>

        </div>

    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>