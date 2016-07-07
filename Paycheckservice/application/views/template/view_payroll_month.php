<!---display payroll by month with form for hours--->
<body>
    <div>
        <div>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No. #</th>
                        <th>Payroll Period</th>                        
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no=1;
                    $k=0;
                    while(count($period)>$k)
                    {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td>
                                <?php foreach($period[$k] as $val)
                                    {
                                        ?>
                                            <form Method="POST" action="view_payroll_period">
                                                <input type="hidden" value="<?php echo $f_tax; ?>" name="f_tax">
                                                <input type="hidden" value="<?php echo $s_tax; ?>" name="s_tax">
                                                <input type="hidden" value="<?php echo $o_tax; ?>" name="o_tax">
                                                <input type="submit" class="btn btn-info" value="<?php echo $val; ?>" name="period">
                                            </form>
                                        <?php
                                    }
                                ?>
                            </td>
                        </tr>
                        <?php
                        $k++;
                        $no++;
                    }
                ?>
                </tbody>
            </table>
            <?php
                if(count($period)<1)
                {
                    echo 'Please Enter Pay Stubs For This Month';
                }
            ?>
        </div>
    </div>
</body>
