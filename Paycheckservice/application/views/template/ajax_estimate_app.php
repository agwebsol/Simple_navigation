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
                            <td><? echo $k.'.'; ?></td>
                            <td><? echo $data['Firstname'].' '.$data['Lastname']; ?></td>
                            <td><? echo $data['SSN']; ?></td>
                            <td><? echo $data['Hour_rate']; ?></td>
                            <td><? echo $data['Salary']; ?></td>
                            <td><? echo $week = $data['Hour_rate']*$data['Salary'];?></td>
                            <td><? echo $month = 4*$week; ?></td>
                            <td><? echo $year = 12*$month; ?></td>
                            <td style="background-color:red;"><? echo $f_wth = ($f_tax/100)*$year; ?></td>
                            <td style="background-color:green;"><? echo $s_wth = ($s_tax/100)*$year; ?></td>
                            <td style="background-color:yellow;"><? echo $o_wth = ($o_tax/100)*$year; ?></td>
                        </tr>
                       <?
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
                    <th>Weekly Salary</th><td style="background-color:grey;"><? echo $total_week; ?></td>
                </tr>
                <tr>
                    <th>Monthly Salary</th><td style="background-color:#80dfff;"><? echo $total_month; ?></td>
                </tr>
                <tr>
                    <th>Annual Salary</th><td style="background-color:#99ffe6;"><? echo $total_cost; ?></td>
                </tr>
                <tr>
                    <th>Annual Fed. Witholdings</th><td style="background-color:red;"><? echo $total_ftax; ?></td>
                </tr>
                <tr>
                    <th>Annual State Witholdings</th><td style="background-color:green;"><? echo $total_stax; ?></td>
                </tr>
                <tr>
                    <th>Annual SOS/MED Witholdings</th><td style="background-color:yellow;"><? echo $total_otax; ?></td>
                </tr>
           </table>
        </body>
    </html>
    