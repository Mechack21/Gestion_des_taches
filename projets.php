<?php
require_once 'classesdao/ProjetDAO.php';
//include '';;
$prjt = new ProjetDAO();
$hopi = $prjt->afficher();
include('includes/header.php');
include('includes/topnavbar.php');
include('includes/rightnavbar.php');
?>
<!-- AJOUTER -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un projet</h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <form method="post" action="oriente.php?a=inse">
                        <div class="form-group ">
                            <label for="idprojet">Id projet</label>
                            <input class=" form-control" id="" name="idprojet" type="text" />
                        </div>
                        <div class="form-group ">
                            <label for="nomprojet">Nom projet</label>
                            <input class=" form-control" id="" name="nomprojet" type="text" />
                        </div>
                        <label for="firstname">Date</label>
                        <div class="input-group input-large" data-date="2014/01/01" data-date-format="yyyy/mm/dd">
                            <span class="input-group-addon">Du</span>
                            <input type="text" class="form-control dpd1" id="" name="dateD">
                            <span class="input-group-addon">Au</span>
                            <input type="text" class="form-control dpd2" id="" name="dateF">
                        </div><br>
                        <div class="form-group ">
                            <label for="progression">Progression projet</label>
                            <input class=" form-control" id="" name="progression" type="number" />
                        </div>
                        <div class="form-group ">
                            <label for="commentaire">Commentaire</label>
                            <textarea class=" form-control" id="" name="commentaire"></textarea>
                        </div>
                        <div class="form-group ">
                            <label for="cuid">CUID</label>
                            <input class=" form-control" id="" name="cuid" type="text" />
                        </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" name="ajout" class="btn btn-primary">Save Project</button>
            </div>
            </form>
            <!--</form>-->
        </div>
    </div>
</div>
<!-- FIN AJOUTER -->

<!-- EDITER -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modifier un projet</h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <form method="post" action="oriente.php?a=modif">
                        <div class="form-group ">
                            <label for="idprojet">Id projet : <strong><span id="lbl"></span></strong></label>
                            <input class=" form-control" id="idprojet" name="idprojet" type="hidden" />
                        </div>
                        <div class="form-group ">
                            <label for="nomprojet">Nom projet</label>
                            <input class=" form-control" id="nomprojet" name="nomprojet" type="text" />
                        </div>
                        <label for="firstname">Date</label>
                        <div class="input-group input-large" data-date="2014/01/01" data-date-format="yyyy/mm/dd">
                            <span class="input-group-addon">Du</span>
                            <input type="text" class="form-control dpd1" id="dateD" name="dateD">
                            <span class="input-group-addon">Au</span>
                            <input type="text" class="form-control dpd2" id="dateF" name="dateF">
                        </div><br>
                        <div class="form-group ">
                            <label for="progression">Progression projet</label>
                            <input class=" form-control" id="progression" name="progression" type="number" />
                        </div>
                        <div class="form-group ">
                            <label for="commentaire">Commentaire</label>
                            <textarea class=" form-control" id="commentaire" name="commentaire"></textarea>
                        </div>
                        <div class="form-group ">
                            <label for="cuid">CUID</label>
                            <input class=" form-control" id="cuid" name="cuid" type="text" />
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" name="ajout" class="btn btn-primary">Validate</button>
            </div>
            </form>
        </div>

        <!--</form>-->            
    </div>


</div>

<!-- FIN EDITER -->

<!-- SUPPRIMER -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Supprimer un projet</h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <form method="post" action="oriente.php?a=sup">
                        <input class="form-control" id="id" name="idprojet" type="hidden" />
                        <h4>Valider la suppression du projet : <strong><span id="prt"></span></strong> ?</h4>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" name="ajout" class="btn btn-primary">Validate</button>
            </div>
            </form>
            <!--</form>-->
        </div>
    </div>
</div>
<!-- FIN SUPPRIMER -->

<!-- AFFICHAGE TACHE -->


<!-- FIN AFFICHAGE TACHE  -->
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> PROJETS
            <button class="btn btn-theme" data-toggle="modal" data-target="#myModal">
                ADD PROJET
            </button>
        </h3>

        <!-- page start-->

        <div class="adv-table">
            <form action="exportData.php" method="post" style="display: inline">
                <button type="submit" name="exporter" class="btn btn-success" ><i class="fa fa-download"></i>  Export to excel</button>   
            </form><br><br>
            <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOM PROJET</th>
                        <th>DATE DEBUT</th>
                        <th>DATE FIN</th>
                        <th>PROGRESSION</th>
                        <th>COMMENTAIRE</th>
                        <th>CUID</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hopi as $hosp): ?>
                        <tr class="">
                            <td><?php echo $hosp->getIdprojet(); ?></td>
                            <td><?php echo $hosp->getNomprojet(); ?></td>
                            <td><?php echo $hosp->getDatedebut(); ?></td>
                            <td><?php echo $hosp->getDatefin(); ?></td>
                            <td><?php echo $hosp->getProgression(); ?></td>
                            <td><?php echo substr($hosp->getCommentaire(), 0, 25); ?></td>
                            <td><?php echo $hosp->getCuid(); ?></td>
                            <td>
                                <!--<a href="modifierPersonne.php?IdP=<?php // echo $hosp->getId();              ?>" class="btn btn-theme" >Edit</a>-->
                                <a href="" class="btn btn-theme editbtn" data-toggle="modal" data-target="#edit" >Edit</a>
                                <a href="" class="btn btn-theme04 deletebtn" data-toggle="modal" data-target="#delete" >Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>