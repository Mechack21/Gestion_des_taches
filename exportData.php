<?php

require_once 'classesdao/PersonneDAO.php';
$per = new PersonneDAO();
$hopi = $per->afficher();
$table = '';
if (isset($_POST['exporter'])) {
    $table .='<table class="table" bordered=1>
                <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>DATE DE NAISSANCE</th>
                </tr>
            ';
    foreach ($hopi as $hosp):
        $table .='
            <tr>
                <td>'.$hosp->getId().'</td>
                <td>'.$hosp->getNom().'</td>
                <td>'.$hosp->getPrenom().'</td>
                <td>'.$hosp->getDateNaiss().'</td>
            </tr>
            ';
    endforeach;
    $table .='</table>';
    header("Content-Type: application/xls");
    header("Content-Disposition:attachment, filename=projet.xls");
    echo $table;
}
