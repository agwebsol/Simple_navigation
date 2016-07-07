<!DOCTYPE html>
    <html>
        <head>
            
        </head>
        <body>
           <table class="table table-hover table-striped" style="margin-top:15px;">
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>SSN #.</th>
                    <th>Rate</th>
                    <th>Hours</th>
                    <th>Weekly</th>
                    <th>Monthly</th>
                    <th>Annual</th>
                    <th>Fed</th>
                    <th>State</th>
                    <th>Med/SoS</th>
                </tr>
                <?php
                    $k =0;
                    $total_week = "";
                    $total_month ="";
                    $total_cost = "";
                    $total_ftax = "";
                    $total_stax = "";
                    $total_otax = "";
                    foreach($employees as $data)
                    {
                        $k++;
                       ?>
                        <tr>
                            <td><?php echo $k.'.'; ?></td>
                            <td><?php echo $data['Firstname'].' '.$data['Lastname']; ?></td>
                            <td><?php echo $data['SSN']; ?></td>
                            <td><?php echo $data['Hour_rate']; ?></td>
                            <td><?php echo $data['Salary']; ?></td>
                            <td><?php echo $week = $data['Hour_rate']*$data['Salary'];?></td>
                            <td><?php echo $month = 4*$week; ?></td>
                            <td><?php echo $year = 12*$month; ?></td>
                            <td style="background-color:red;"><?php echo $f_wth = ($f_tax/100)*$year; ?></td>
                            <td style="background-color:green;"><?php echo $s_wth = ($s_tax/100)*$year; ?></td>
                            <td style="background-color:yellow;"><?php echo $o_wth = ($o_tax/100)*$year; ?></td>
                        </tr>
                       <?php
                       $total_week = $total_week + $week;
                       $total_month = $total_month + $month;
                       $total_cost = $total_cost + $year;
                       $total_ftax = $total_ftax + $f_wth;
                       $total_stax = $total_stax + $s_wth;
                       $total_otax = $total_otax + $o_wth;
                    }
                ?>
           </table>
           
           <table style="margin-top:50px;">
                <tr>
                    <th>Weekly Salary</th><td style="background-color:grey;"><?php echo $total_week; ?></td>
                </tr>
                <tr>
                    <th>Monthly Salary</th><td style="background-color:#80dfff;"><?php echo $total_month; ?></td>
                </tr>
                <tr>
                    <th>Annual Salary</th><td style="background-color:#99ffe6;"><?php echo $total_cost; ?></td>
                </tr>
                <tr>
                    <th>Annual Fed. Witholdings</th><td style="background-color:red;"><?php echo $total_ftax; ?></td>
                </tr>
                <tr>
                    <th>Annual State Witholdings</th><td style="background-color:green;"><?php echo $total_stax; ?></td>
                </tr>
                <tr>
                    <th>Annual SOS/MED Witholdings</th><td style="background-color:yellow;"><?php echo $total_otax; ?></td>
                </tr>
           </table>
        </body>
    </html>
    
