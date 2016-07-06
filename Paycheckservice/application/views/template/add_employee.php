<!----display form to add employee to database--->
<body>
    <div>
        <div class="jumbotron"><h3><i class="fa fa-user-plus" style="font-size:80px;"></i>Add Employee To Database</h3></div>
        <div>
           <form method="POST" action="">
                <table class="table table-hover">
                    <tr>
                        <th>Firstname</th>
                        <td><input type="text" name="fname" required ></td>
        
                        <th>Lastname</th>
                        <td><input type="text" name="lname" required></td>
                    
                        <th>Other Names</th>
                        <td><input type="text" name="oname"></td>
                    </tr>
                    <tr>
                        <th>Address 1</th>
                        <td><input type="text" name="address1"></td>
                    
                        <th>Address 2</th>
                        <td><input type="text" name="address2"></td>
                    
                        <th>City</th>
                        <td><input type="text" name="city"></td>
                    </tr>
                    <tr>
                        <th>State</th>
                        <td><input type="text" name="state"></td>
                    
                        <th>Zip Code</th>
                        <td><input type="text" name="zip"></td>
                    
                        <th>Social Security</th>
                        <td><input type="text" name="sos" required></td>
                    </tr>
                    <tr>
                        <th>Date Of Birth</th>
                        <td><input type="date" name="dob"></td>
                    
                        <th>Marital Status</th>
                        <td>
                            <select name="status">
                                <option>--Select--</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Confused">Confused</option>
                            </select>
                        </td>
                    
                        <th>Employee Rate</th>
                        <td><input type="text" name="hour_rate" required></td>
                    </tr>
                    <tr>
                        <th>Base Hours</th>
                        <td><input type="text" name="salary"></td>
                        <th>Employee Start Date</th>
                        <td><input type="date" name="start_date"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input class="btn btn-info" type="submit" name="submit" value="Add Employee"></td>
                    </tr>
                </table>
           </form> 
        </div>
    </div>
</body>