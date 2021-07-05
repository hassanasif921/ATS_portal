<?php
include "connection_db.php";

$userid = 0;
if(isset($_POST['userid'])){
   $userid = mysqli_real_escape_string($connection,$_POST['userid']);
}



   ?>
   <table style="height:450px;" class="table table-responsive table-hover mt-3">
                    <thead>
                        <tr>
                            <th class="text-center">record id</th>
                            <th class="text-center">Changed Fields</th>
                            <th class="text-center">Changed&nbsp;By</th>
                            <th class="text-center">Changed At</th>
                            <th class="text-center">User ID</th>
                        </tr>
                    </thead>
                    <tbody><?php 
                $sql = "select * from changes_record where record_id='".$userid."' AND tablename='Customer'";
                $result = mysqli_query($connection,$sql);
                    while($row=mysqli_fetch_array($result))
                    {
                    ?>
                    
                        <tr>
                            <td><?php echo $row[6]?></td>
                            <td><?php echo $row[1]?></td>
                            <td><?php echo $row[2]?></td>
                            <td><?php echo $row[3]?></td>
                            <td><?php echo $row[5]?></td>
                          </tr>
                          <?php 
                    }
                          ?>                                    
                    </tbody>
                </table>  
   <?php

?>