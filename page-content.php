<?php
// TODO refactor this to JSON and MVC soon
session_start(); 
require_once("class.admin.php");
$admin = new ADMIN();

$stmt = $admin->runQuery("SELECT * FROM users");
$stmt->execute();
$user_row = $stmt->fetchAll(PDO::FETCH_ASSOC);

$admin_id = $_SESSION['admin_session'];
$stmt = $admin->runQuery("SELECT * FROM admins WHERE id = :admin_id");
$stmt->execute(array(":admin_id"=>$admin_id));
$admin_row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>

	<title></title>

	<link rel="stylesheet" href="assets/datatables/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="assets/datatables/css/buttons.bootstrap.min.css">
	<link rel="stylesheet" href="assets/datatables/css/fixedHeader.bootstrap.min.css">
	<link rel="stylesheet" href="assets/datatables/css/responsive.bootstrap.min.css">
	<link rel="stylesheet" href="assets/datatables/css/scroller.bootstrap.min.css">

	<!-- Datatables -->
    <script>

      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->

    <script>
	  $(document).ready(function() {

        $('button').click(function(){
          var myButton = $(this);

          var userFirstName = myButton.parent().prev().prev().prev().prev().prev().prev().text();
          var userLastName =  myButton.parent().prev().prev().prev().prev().prev().text();

          var conf = confirm('Are you sure you want to '+ myButton.text() + ' ' + userFirstName + ' ' + userLastName +'?');
          if (conf) {

            var userEmail = myButton.parent().prev().prev().prev().text();
            var adminEmail = "<?php echo $admin_row['email'] ?>";
            var textEmail;

            var tableCellAdminister = myButton.parent();
            var tableCellStatus = tableCellAdminister.prev();
            var userStatusText = tableCellStatus.text();
            var tableCellStatusSpan = tableCellStatus.children();
            var buttonI = myButton.children();

            var newStatus; 

            var userId = tableCellAdminister.parent().attr('id');
              if (myButton.text() == 'Delete') {
                textEmail = 'Deleted';
                $.post("delete-user.php",
                {
                  userId: userId
                },
                function(data,status){
                  var row = myButton.parents('tr');
                  row.remove();

                  sendEmail(userEmail, adminEmail, text);                           
                }); 
              }else{
                var newSpanClass;
                var newIclass;
                var newButtonText;

                if (userStatusText == 'Pending' || userStatusText == 'Deactivated') {
                  newStatus = 'Active';
                  newSpanClass = 'label label-success';
                  newButtonText = 'Deactivate';
                  newIclass = 'fa fa-ban';
                  textEmail = 'Activated';
                }else {
                  newStatus = 'Deactivated';
                  newSpanClass = 'label label-default';
                  newButtonText = 'Activate';
                  newIclass = 'fa fa-check';
                  textEmail = newStatus;
                }
              $.post("update-user.php",
                {
                  userId: userId,
                  newStatus: newStatus,
                  adminId: <?php echo "$admin_row[id]"; ?>
                },
                function(data,status){
                  tableCellStatus.empty();
                  tableCellStatus.prepend('<td><span class="'+ newSpanClass + '">'+ newStatus +'</span></td>');
                  
                  myButton.empty();
                  myButton.text(newButtonText);
                  myButton.prepend('<i class="'+ newIclass +'"></i>');    
                  
                  sendEmail(userEmail, adminEmail, textEmail);           
                });
              }
          }

          myButton.blur();
        });


        function sendEmail(userEmail, adminEmail, textEmail){
          $.post("send-email.php",
          {
              userEmail: userEmail,
              adminEmail: adminEmail,
              textEmail: textEmail
          },
          function(data, status){
              alert(data);
          });
        }

	  });
  	</script>

</head>
<body>

	<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <!--div class="title_left">
                <h3>Users Administration Panel</h3>
              </div-->

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="min-height:780px;">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Administration Panel</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      This list includes pending, active, and deactivated users. Click on the appropriate button to activate or deactivate a user's access to the advanced video tutorials page.
                    </p>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>First name</th>
                          <th>Last name</th>
                          <th>Contact Number</th>
                          <th>Email</th>
                          <th>Request Date</th>
                          <th>Status</th>
                          <th>Administer</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      <?php 

          						foreach ($user_row as $key => $value) {

          							$status = $value['status'];

          							if ($status == 'Pending') {
          								$span_class = 'label label-warning';
          								$activate_or_deactivate = 'Activate';
          								$i_class = 'fa fa-check';
          							}elseif ($status == 'Active') {
          								$span_class = 'label label-success';
          								$activate_or_deactivate = 'Deactivate';
          								$i_class = 'fa fa-ban';
          							}else{
          								$span_class = 'label label-default';
          								$activate_or_deactivate = 'Activate';
          								$i_class = 'fa fa-check';
          							}

          							echo '<tr id='.$value['id'].'>';
          							echo '<td>'.$value['first_name'].'</td>';
          							echo '<td>'.$value['last_name'].'</td>';
          							echo '<td>'.$value['contact_number'].'</td>';
          							echo '<td>'.$value['email'].'</td>';
          							echo '<td>'.date('m/d/Y', strtotime($value['request_date'])).'</td>';
          							echo '<td><span class="'.$span_class.'">'. $status .'</span></td>';
          							echo '<td>';
          							echo '<button class="btn btn-info btn-xs"><i class="'.$i_class.'"></i>'. $activate_or_deactivate .'</button>';
          							echo '<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</button>';
          							echo '</td>';
          							echo '</tr>';
          						}
                       ?>

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

    <script src="assets/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/datatables/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/datatables/js/dataTables.buttons.min.js"></script>
    <script src="assets/datatables/js/buttons.bootstrap.min.js"></script>
    <script src="assets/datatables/js/buttons.html5.min.js"></script>
    <script src="assets/datatables/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/datatables/js/dataTables.keyTable.min.js"></script>
    <script src="assets/datatables/js/dataTables.responsive.min.js"></script>
    <script src="assets/datatables/js/responsive.bootstrap.js"></script>
    <script src="assets/datatables/js/datatables.scroller.min.js"></script>

</body>
</html>

<?php 





 ?>