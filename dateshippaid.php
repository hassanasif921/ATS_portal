<?php
include("connection_db.php");

    $get_reservedreports_date_old= $_POST['get_remittance_date'];
    $get_reservedreports_date= date("Y-m-d", strtotime($get_reservedreports_date_old));
    $get_reservedreports_till_0ld = $_POST['get_remittance_date_till'];
    $get_reservedreports_till =  date("Y-m-d", strtotime($get_reservedreports_till_0ld));
    $queryreserved_search="select * from ats_stock_reservation where ";
    
    if(trim($_POST['get_all_reserved_reports_agent_name']))
    {
        $queryreserved_search.="agent_name='".$_POST['get_all_reserved_reports_agent_name']."' ";

    }
    if(trim($_POST['get_all_reserved_reports_customer_name']))
    {
        $queryreserved_search.="AND customer='".$_POST['get_all_reserved_reports_customer_name']."' ";
        
     }
    $query_reserved=mysqli_query($connection,$queryreserved_search);
    ?>
    <table style="font-size: 8px;" class="table" id="myTable">
                                                            <thead>

                                                                <tr>
                                                                    <th>Slct all<input type="checkbox" onclick="toggle(this);" /></th>
                                                                    <th>Rec#</th>
                                                                    <th >agent name</th>
                                                                   <th >customer name</th>
                                                                    
                                                                    <th>Kbtsu</th>
                                                                    <th>Chassis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                                    <th>Make</th>
                                                                    <th>Model</th>
                                                                    <th>Year</th>
                                                                    <th>Mth</th>
                                                                    <th>Color</th>
                                                                    <th>Sft</th>
                                                                    <th>Feul</th>
                                                                    <th>Door</th>
                                                                    <th>CC</th>
                                                                    <th style="text-align: center;">Opt.</th>
                                                                    <th>FOB</th>
                                                                    <th>Grd</th>
                                                                    <th>Mileage</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php 
                                                                    while($rowreserved=mysqli_fetch_array($query_reserved))
                                                                    {
                                                                        $querycar=mysqli_fetch_row(mysqli_query($connection,"select * from ats_car_stock where ats_car_stock_rec_no='".$rowreserved[1]."' AND ats_car_stock_ship_date<>'' AND ats_car_stock_ship_date BETWEEN '$get_reservedreports_date' AND '$get_reservedreports_till' "));
                                                                        if($querycar >0)
                                                                        {
                                                                ?>
                                                                <tr>
                                                                    <td><input type="checkbox" /></td>
                                                                    <td><?php echo $rowreserved[1]?></td>
                                                                    <td ><?php echo $rowreserved[12]?></td>
                                                                    <td ><?php echo $rowreserved[4]?></td>

                                                                    <td><?php echo $querycar[14]?></td>
                                                                    <td><?php echo $querycar[2]?></td>
                                                                    <td><?php echo $querycar[3]?></td>
                                                                    <td><?php echo $querycar[4]?></td>
                                                                    <td><?php echo $querycar[6]?></td>
                                                                    <td><?php echo $querycar[14]?></td>
                                                                    <td><?php echo $querycar[8]?></td>
                                                                    <td><?php echo $querycar[9]?></td>
                                                                    <td><?php echo $querycar[10]?></td>
                                                                    <td><?php echo $querycar[11]?></td>
                                                                    <td><?php echo $querycar[13]?></td>
                                                                    <td>
                                                                    <?php 
                                                                        for($i=32;$i<48;$i++)
                                                                        {
                                                                            if(trim($querycar[$i]))
                                                                            {
                                                                                $y=$i+1;
                                                                                echo $querycar[$i].",";
                                                                                
                                                                               
                                                                                
                                                                            }
                                                                        }
                                                                    ?>
                                                                    </td>
                                                                    <td><?php echo $querycar[66]?></td>
                                                                    <td><?php echo $querycar[12]?></td>
                                                                    <td><?php echo $querycar[17]?></td>
                                                                </tr>
                                                                <?php 
                                                                        }
                                                                    }
                                                                ?>
                                                              
                                                            </tbody>
                                                        </table>
   