<!---display payroll by month--->
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
                            <td><? echo $no; ?></td>
                            <td>
                                <? foreach($period[$k] as $val)
                                    {
                                        ?>
                                            <form Method="POST" action="view_payroll_period">
                                                <input type="hidden" value="<? echo $f_tax; ?>" name="f_tax">
                                                <input type="hidden" value="<? echo $s_tax; ?>" name="s_tax">
                                                <input type="hidden" value="<? echo $o_tax; ?>" name="o_tax">
                                                <input type="submit" class="btn btn-info" value="<? echo $val; ?>" name="period">
                                            </form>
                                        <?
                                    }
                                ?>
                            </td>
                        </tr>
                        <?
                        $k++;
                        $no++;
                    }
                ?>
                </tbody>
            </table>
            <?
                if(count($period)<1)
                {
                    echo 'Please Enter Pay Stubs For This Month';
                }
            ?>
        </div>
    </div>
</body>