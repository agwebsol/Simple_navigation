<!----Display employee informaation in a form---> 
<!DOCTYPE html>
    <html>
        <head>
            
        </head>
        <body>
            <div>
                <form method="POST" action="<? echo base_url(); ?>App_Controller/ajax_employee">
                     <table class="table table-hover">
                         <?php
                            foreach($employee as $data)
                            {
                                 $j_data = json_decode($data['Personal_info'], TRUE);
                                ?>
                                    <tr>
                                        <th>Firstname</th>
                                        <td><input type="text" name="fname" value ="<? echo $data["Firstname"]; ?>"</td>
                                    </tr>
                                    <tr>
                                        <th>Lastname</th>
                                        <td><input type="text" name="lname" value ="<? echo $data["Lastname"]; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Other Names</th>
                                        <td><input type="text" name="oname" value ="<? echo $j_data["other_name"]; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Address 1</th>
                                        <td><input type="text" name="address1" value ="<? echo $j_data["address1"]; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Address 2</th>
                                        <td><input type="text" name="address2" value ="<? echo $j_data["address2"]; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td><input type="text" name="city" value ="<? echo $j_data["city"]; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>State</th>
                                        <td><input type="text" name="state" value ="<? echo $j_data["state"]; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Zip Code</th>
                                        <td><input type="text" name="zip" value ="<? echo $j_data["zip_code"]; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Social Security</th>
                                        <td><input type="text" name="sos" value ="<? echo $data["SSN"]; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Date Of Birth</th>
                                        <td><input type="date" name="dob" value ="<? echo $data["DOB"]; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Marital Status</th>
                                        <td>
                                            <select name="status">
                                                <option value="<? echo $data['Status']; ?>">--Select--</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorced">Divorced</option>
                                                <option value="Confused">Confused</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Employee Rate</th>
                                        <td><input type="text" name="hour_rate" value ="<? echo $data["Hour_rate"]; ?>"></td>
                                        <td><input type="text" name="salary" value ="<? echo $data["Salary"]; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Employee Start Date</th>
                                        <td><input type="date" name="start_date" value ="<? echo $data["Start_date"]; ?>"></td>
                                    </tr>
                                    <tr>
                                        <th><input type="hidden" name="id" value="<? echo $data["ID"]; ?>"></th>
                                        <td><input type="submit" name="submit" value="Update Employee" ></td>
                                    </tr>
                                <?
                            }
                         ?>
                     </table>
                </form> 
             </div>
        </body>
    </html>