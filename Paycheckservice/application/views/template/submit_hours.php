<!--Submit hours to database--> 
<body>
    <form Method="POST">
        <div>
            <div class="jumbotron" style="width:80%">
                <h3 style=""><i class="fa fa-calendar-plus-o" style="font-size:70px; "></i>Enter Hours</h3>
                <table class="table table-hover table-striped" style="margin-top: 25px;">
                    <tr>
                        <th>Month</th>
                        <td>
                            <select name= "month" required>
                                <option value="">Select Month</option>
                                <option value="1">Jan</option>
                                <option value="2">Feb</option>
                                <option value="3">Mar</option>
                                <option value="4">Apr</option>
                                <option value="5">May</option>
                                <option value="6">Jun</option>
                                <option value="7">Jul</option>
                                <option value="8">Aug</option>
                                <option value="9">Sep</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                            </select>
                        </td>
                        <th>Start Period</th>
                        <td><input type="date" name="start_period" required></td>
                        <th>End Period</th>
                        <td><input type="date" name="end_period" required></td>
                    </tr>
                </table>
            </div>
            <div>
                <table class="table table-hover table-striped " style="width:80%; ">
                    <tbody>
                        <?php
                            $k = 0;
                            foreach($employees as $employee)
                            {
                                $k++;
                              ?>
                                <tr>
                                    <td><? echo $employee['Firstname']; ?></td>
                                    <td><? echo $employee['Lastname']; ?></td>
                                    <td><? echo $employee['SSN']; ?></td>
                                    <td><? echo $employee['Hour_rate']; ?></td>
                                    <td>
                                        <input type="input" name="hours_<? echo $k; ?>" required>
                                    </td>
                                    <td>
                                        <input type="hidden" value="<? echo $employee['SSN']; ?>" name="ssn_<? echo $k; ?>">
                                        <input type="hidden" value="<? echo $employee['ID']; ?>" name="id_<? echo $k; ?>">
                                    </td>
                                </tr>
                              <?  
                            }
                        ?>
                        <input type="hidden" value="<? echo count($employees); ?>" name="count">
                    </tbody>
                </table>
                <div><input class="btn btn-info" type="submit" value="Submit Hours" name="submit"></div>
            </div>
        </div>
    </form>
</body>