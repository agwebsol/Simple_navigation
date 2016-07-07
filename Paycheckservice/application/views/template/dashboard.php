<!---Dashboard with Ajax functions--->
        <body>
            <div class="jumbotron">
                <form Method="POST" class="form-inline" role="form" >
                    <h3 style=""><i class="fa fa-home" style="font-size:70px; "></i>Home</h3>
                    <table class="table table-hover" style="margin-top: 20px;">
                        <tr>
                            <th><i class="fa fa-calendar" style="font-size:25px; color:BLUE;"></th>
                            <td>
                                <select id= "month" name= "month" onchange="view_payroll_month(this.value)">
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
                            <th>Federal Tax %</th><td><input type="text" id="f_tax" value="5.1" required></td>
                            <th>State Tax %</th><td><input type="text" id="s_tax" value="4.5" required></td>
                            <th>Others %</th><td><input type="text" id="o_tax" value="6.45" required></td>
                            <th></th><td><input class="btn btn-info" id="btnn" type="button" name="submit" value="Estimate Tax"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="data">
                <div>
                    <h1>Welcome</h1>
                    <h5 style="margin-top: 80px;">Sample Project/Code by Daro Omwanor Copyright 2016</h5>
                </div>
            </div>
                <script type="text/javascript">
                            $(document).ready(function(){
                                $("#btnn").click(function(){
                                    $.ajax("http://52.40.215.168//index.php/App_Controller/index", function(data, status){
                                        alert("Data: " + data + "\nStatus: " + status);
                                    });
                                });
                            });
                </script>
        </body>
