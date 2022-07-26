<?php include('partials-front/menu.php'); ?>

    <!-- Contacts Section Starts Here -->
    <section class="contact">
        <div class="container">
            <h3 class="text-center text-white">Contact Us Here</h3><br><br>
            
                <?php 
                //Display Contacts that are mentioned in table
                $sql = "SELECT name, mail_id, phone FROM Contacts";

                //Execute the Query
                $res=mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //Check whether the contacts are availalable or not
                if($count>0)
                {
                    //Contacts Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values
                        $name = $row['name'];
                        $mail_id = $row['mail_id'];
                        $phone = $row['phone'];
                        ?>

                        <div class="contact-box">
                            <?php
                            echo $name;
                            echo '<br>';
                            echo 'Mail: ';
                            echo $mail_id;
                            echo '<br>';
                            echo 'Ph.: ';
                            echo $phone;
                            echo '<br>';
                            ?>
                        </div>
                        <?php
                    }
                }
                
                else
                {
                    //Contact not Available                    
                    echo "<div class='error'>Contact not found.</div>";
                    
                }
            
            ?>  
            
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Contacts Section Ends Here -->


    <?php include('partials-front/footer.php'); ?>