<script src="lib/jquery/jquery.min.js"></script>

<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="lib/jquery.scrollTo.min.js"></script>
<script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
<script src="lib/jquery.sparkline.js"></script>
<!--common script for all pages-->
<script src="lib/common-scripts.js"></script>
<script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="lib/gritter-conf.js"></script>
<!--script for this page-->
<script src="lib/sparkline-chart.js"></script>
<script src="lib/zabuto_calendar.js"></script>


<script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="lib/advanced-form-components.js"></script>

<script src="lib/form-validation-script.js"></script>

<script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
<!--common script for all pages-->
<script src="lib/common-scripts.js"></script>
<script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
<!--script for this page-->
<script type="text/javascript">
    /* Formating function for row details */
//    function fnFormatDetails(oTable, nTr) {
//        var aData = oTable.fnGetData(nTr);
//        var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
//        sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
//        sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
//        sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
//        sOut += '</table>';
//
//        return sOut;
//    }

    $(document).ready(function () {
        /*
         * Insert a 'details' column to the table
         */
//      var nCloneTh = document.createElement('th');
//      var nCloneTd = document.createElement('td');
//      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
//      nCloneTd.className = "center";

//      $('#hidden-table-info thead tr').each(function() {
//        this.insertBefore(nCloneTh, this.childNodes[0]);
//      });
//
//      $('#hidden-table-info tbody tr').each(function() {
//        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
//      });

//

        /*
         * Initialse DataTables, with no sorting on the 'details' column
         */
        var oTable = $('#hidden-table-info').dataTable({
            "aoColumnDefs": [{
                    "bSortable": true,
                    "aTargets": [0]
                }],
            "aaSorting": [
                [1, 'asc']
            ]
        });
        /* Add event listener for opening and closing details
         * Note that the indicator for showing which row is open is not controlled by DataTables,
         * rather it is done here
         */
//        $('#hidden-table-info tbody td img').live('click', function () {
//            var nTr = $(this).parents('tr')[0];
//            if (oTable.fnIsOpen(nTr)) {
//                /* This row is already open - close it */
//                this.src = "lib/advanced-datatable/media/images/details_open.png";
//                oTable.fnClose(nTr);
//            } else {
//                /* Open this row */
//                this.src = "lib/advanced-datatable/images/details_close.png";
//                oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
//            }
//        });


    });</script>
<script>
    $(document).ready(function () {
        $('.editbtn').on('click', function () {
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#lbl').text(data[0]);
            $('#idprojet').val(data[0]);
            $('#nomprojet').val(data[1]);
            $('#dateD').val(data[2]);
            $('#dateF').val(data[3]);
            $('#progression').val(data[4]);
            $('#commentaire').val(data[5]);
            $('#cuid').val(data[6]);
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('.deletebtn').on('click', function () {
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();
            console.log(data);

            $('#id').val(data[0]);
            $('#prt').text(data[1]);

        });
    });
</script>



<!--

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 Core plugin JavaScript
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

 Custom scripts for all pages
<script src="js/sb-admin-2.min.js"></script>

 Page level plugins 
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

 Page level custom scripts 
<script src="js/demo/datatables-demo.js"></script>-->

</body>

</html> 
