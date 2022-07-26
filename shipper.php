<?php include('partials-front/menu.php'); ?>

    <!-- Shipper Section Starts Here -->
    <section class="shipper">
        <div class="container">
            <h2 class="text-center">Shipper Details</h2>
                
            <?php 
                //Display Shipper Details
                $sql = "SELECT * FROM Shipper";

                //Execute the Query
                $res=mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //Check whether the shippers are availalable or not
                if($count>0)
                {
                    echo '<table id="shipper-table" border="1" cellspacing="2" cellpadding="2"> 
                        <tr> 
                            <th> <font face="Arial"> Shipper ID </font> </th> 
                            <th> <font face="Arial"> Shipper Name </font> </th> 
                            <th> <font face="Arial"> City </font> </th> 
                            <th> <font face="Arial"> Phone </font> </th> 
                        </tr>';

                    //Shippers Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values
                        $id = $row['id'];
                        $name = $row['name'];
                        $city = $row['city'];
                        $phone = $row['phone'];
                                        
                         
                        echo '<tr> 
                                <td>'.$id.'</td> 
                                <td>'.$name.'</td> 
                                <td>'.$city.'</td> 
                                <td>'.$phone.'</td> 
                            </tr>';
                        
                    }
                    echo '</table>';
                    
                }
                
                else
                {
                    
                    //Shipper not Available
                    echo "<div class='error'>Shipper not found.</div>";
                }
            ?>

            

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- Shipper Section Ends Here -->


    <?php include('partials-front/footer.php'); ?>