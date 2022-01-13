<?php
define('TITLE','Work Order');
define('PAGE','assest');
 include('../connection.php');
 include('includes/header.php');
 session_start();
 if($_SESSION['is_adminlogin']){
    $aEmail=$_SESSION['aEmail'];
}else{
   echo "<script> location.href='login.php'</script>";  
}
 ?>
 <!-- Requester part -->
 <div class="col-sm-9 col-md-10 text-center ">
    <p class="blkColor text-white  mt-5 p-2">Product/Part Details</p>
    <?php   $sql = "SELECT * FROM `assest`";
                    $result= $conn->query($sql);
                    if($result->num_rows > 0){
                        echo'<table class="table mt-3 mr-5">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">DOP</th>
                                    <th scope="col">Available</th>
                                    <th scope="col">Original Price</th>
                                    <th scope="col">Total Cost</th>
                                    <th scope="col">Selling Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>';
                                while($row = $result->fetch_assoc()){
                                    ?>
                                    <tr>
                                    <td><?php echo $row['pid'] ?></td>
                                    <td><img src=" <?php echo $row['image']; ?>" height="60px",width="20px"></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['date'] ?></td>
                                    <td><?php echo $row['available'] ?></td> 
                                    <td>$<?php echo $row['ocost'] ?></td>
                                    <td><?php echo $row['available']*$row['ocost'] ?></td>
                                    <td>$<?php echo $row['scost'] ?></td>
                                    <?php
                             echo '<td>';   
                             echo '<form action="editProdut.php" method="post"class=" d-inline mr-2">';
                             echo '<input type="hidden" name="id" value='.$row["pid"].'><button class="btn " 
                             name ="edit" value ="Edit" type="submit"><i class="fas fa-pen"></i></button>';
                             echo '</form>';
                             echo '<form action="" method="post" class="d-inline mr-2">';
                             echo '<input type="hidden" name="id" value='.$row["pid"].'><button class="btn btn1" 
                             name ="delete" value ="delete" type="submit"><i class="fa fa-trash"></i></button>';
                             echo '</form>';
                             echo '<form action="sellProd.php" method="post" class="d-inline mr-2">';
                             echo '<input type="hidden" name="id" value='.$row["pid"].'><button class="btn " 
                             name ="sell" value ="sell" type="submit"><i class="fa fa-handshake"></i></button>';
                             echo '</form>';
                             echo '</td>';
                             echo     '</tr>';
                                    }
                          echo  '</tbody>
                             </table>';
                    }
                    else{
                        echo '0 Result';
                    }
                    if(isset($_REQUEST['delete'])){
                        $sql = "DELETE FROM `assest` WHERE pid = {$_REQUEST['id']}";
                        if($conn->query($sql) == TRUE){
                            echo '<meta h-ttp-equvi="refresh" content= "0;URL=?deleted"/>';
                        }else{
                            echo 'Unable to delete';
                        }
                     }
               ?>
</div>
<!-- footer -->
</div>
<div class="float-right"><a href="prodAdd.php" class="btn btn mx-3 mb-5"><i class="fa fa-plus "></i></a></div>
 </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
 
</body>
</html>
