<?php
require '../assest/database.php';

$pdo = Database::connect();

// Get the total row count
$sql = "SELECT COUNT(*) AS total_lost FROM lost_id";
$stmt = $pdo->query($sql);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$totalLost = $row['total_lost'];

Database::disconnect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assest/css/dashboardstyleAdmin.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                  <img src="../assest/images/adminLogo.png" alt="GameZoneX Logo" class="img-fluid" style="max-width: 200px;">
            
                <h4>Administrator</h4>
                <ul class="nav flex-column">
                <li class="nav-item ">
    <a href="#" class="active nav-link "><i class="fas fa-tachometer-alt "></i> Dashboard</a>
</li>
 
 
<li class="nav-item">
    <a href="../index.html" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
</li>

                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-10">
                <h3 class="welcome">Welcome back, Administrator!</h3>
                <div class="row">
                    <!-- Profile Container -->
                    <div class="col-md-6">
                    <a href="registration/registration.php" class="text-decoration-none active">
                    <div class="box clickable">
                            <div class="icon-container">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <h4>Add customer</h4>
                          
                        </div>
                        </a>
                    </div>

                    <!-- Balance Container -->
                    <div class="col-md-6">
                    <a href="./manage_user/user data.php" class="text-decoration-none active">
                    <div class="box clickable">
                            <div class="icon-container">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4>Manage customer</h4>
                           
                        </div>
                        </a>
                    </div>

                 <!-- View Customer -->
                    <div class="col-md-6">
                        <a href="view_customer/view data.php" class="text-decoration-none active">
                            <div class="box clickable">
                                <div class="icon-container">
                                <i class="fas fa-address-card"></i>
                                </div>
                                <h4>View customer</h4>
                               
                            </div>
                        </a>
                    </div>


                    <!-- Manage Computer -->
                    <div class="col-md-6">
                     <a href="./manage_pc/bookPC.php" class="text-decoration-none active">
                         <div class="box clickable">
                             <div class="icon-container">
                                 <i class="fas fa-laptop"></i>
                             </div>
                             <h4>Manage Computers</h4>
                              
                         </div>
                     </a>
                    </div>
                      <!-- Store Container -->
                      <div class="col-md-6">
                      <a href="../gamezonexshop/admin.php" class="text-decoration-none active">
                        <div class="box clickable">
                            <div class="icon-container">
                                <i class="fas fa-store-alt"></i>
                            </div>
                            <h4>Manage Store</h4>
                             
                        </div>
                        </a>
                    </div>

                    <!-- lost card Container -->
                    <div class="col-md-6">
        <a href="replace_card/replace.php" class="text-decoration-none active">
            <div class="box clickable">
                <div class="icon-container">
                    <i class="fas fa-id-card"></i>
                </div>
                <h4>Replace Card</h4>
                <p>Issue <?php echo $totalLost; ?> new card</p>
            </div>
        </a>       
    </div>

                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
