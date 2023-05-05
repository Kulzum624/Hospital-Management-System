<?php
   include('session.php');
   
   $con=mysqli_connect("localhost","root","","hmsdd");
//    $sp=$_POST['special'];
 
   $query = "SELECT *  FROM `doctor`,`specialization` where specialization.sno=doctor.sno ";
   $result1 = mysqli_query($con, $query);
   if(isset($_POST["btnReserve"])) {
    $username=$_SESSION['username'];
    
     
 
   
}
?>
 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient-portal</title>
    <link rel="stylesheet" href="styles.css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
 
 
 
 
  <body >
 
  <div class="sidebar">
  <a class="active" href="#">Dashboard</a>
  <a class="active" href="appointment-history.php">Appointments</a>
  <a  class="active" href="patients.php">Patients</a>
  
 </div>

 
 
<nav class="navbar navbar-expand-lg bg-light pl-8">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;HOSPITAL-MS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto custom-nav">
              <li class="nav-item custom-nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item custom-nav-item">
                <a class="nav-link" href="doctor-panel.php">Dashboard</a>
              </li>
              
              <li class="nav-item custom-nav-item">
                <a class="nav-link" href="logout.php">LOGOUT</a>
              </li>
             
            </ul>
          </div>
        </div>
</nav>
 
     
                </div>
            </div>
            <div class="row mt-5">
            <div class="offset-2 col-8 mt-5">
            
                <table class="table table-striped table-bordered"  id="myTable">
                
                    <legend class="bg-secondary p-3 text-light text-center rounded">
                        <h2 class="m-0">Patients Table</h2>
                    </legend>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search  Pateint Name ">
                    <thead>
                    <th>Full name</th>
                    <th>Appointment ID</th>
                    
                        <th>Pateint Email</th>
                       
                       
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        <?php                        
                            // Display database table data
                            $u=$_SESSION['username'];
                            $query3 = "SELECT *  FROM `doctor` where Email='$u'";
                            $result3 = mysqli_query($con, $query3);
                            $row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
                            $rot=$row3["fullname"];
                           
                           
                           
                            if ($stmt = $con->prepare("SELECT * FROM `patientent`")) {
                                $stmt->execute();
                                $result = $stmt->get_result();
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>".
                                    "<td>".$row["fullname"]."</td>".
                                            "<td>".$row["AppNo"]."</td>".
                                            
                                            "<td>".$row["Email"]."</td>".
                                            "<td>".$row["Age"]."</td>".
                                            "<td>".$row["Symptoms"]."</td>".
                                            "<td>".$row["diagnosis"]."</td>".
                                            "<td>".$row["prescription"]."</td>".
                                        "</tr>";
                                }
                                $stmt->close();
                            } else {
                                die('prepare() failed: ' . htmlspecialchars($con->error));
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
           
   
         
     
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                autoclose: true,
                todayHighlight: true,
                todayBtn: 'linked',
                startDate: 'today',
            });
 
            $('#datatable').DataTable();
 
            $('#txtDate').keypress(function(e) {
                e.preventDefault();
            });
        });
       
    </script>  
</body>
</html>