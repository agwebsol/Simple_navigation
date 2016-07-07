<html>
    <head>
        <script type="application/javascript">
             function run(k)
             {
                $('#myModal').modal();
                var form_data =
                    {
                        id : k,
                        ajax : '1'
                    };
                $.ajax
                ({
                    url: "<?php echo site_url('ajax_employee'); ?>",
                    type: 'POST',
                    async : false,
                    data: form_data,
                    success: function(msg)
                            {
                                $('#info').html(msg);
                            }
                });
             }
             
             function delete_employee(k)
             {
                $('#delete').modal();
                var form_data =
                    {
                        id : k,
                        ajax : '1'
                    };
                $.ajax
                ({
                    url: "<?php echo site_url('ajax_delete_employee'); ?>",
                    type: 'POST',
                    async : false,
                    data: form_data,
                    success: function(msg)
                            {
                                $('#data').html(msg);
                            }
                });
             }
        </script>
    </head>
    <body>
        <div>
            <div>
                <div class="jumbotron">
                   <h3 style=""><i class="fa fa-group" style="font-size:80px;"></i>Modify Employee Data</h3>
                </div>
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>SSN #</th>
                        <th>Hour Rate</th>
                        <th>Salary</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($employees as $employee)
                        {
                            ?>
                                <tr>
                                    <td><?php echo $employee['Firstname']; ?></td>
                                    <td><?php echo $employee['Lastname']; ?></td>
                                    <td><?php echo $employee['SSN']; ?></td>
                                    <td><?php echo $employee['Hour_rate']; ?></td>
                                    <td><?php echo $employee['Salary']; $id = $employee['ID']; ?></td>
                                    <td>
                                        <button class="btn btn-primary" onclick="run(<?php echo $id; ?>)" value="Edit" role="button" >Edit</button>
                                    </td>
                                    <td><button class="btn btn-danger" onclick="delete_employee(<?php echo $id; ?>)">Delete</button></td>
                                </tr>
                            <?    
                        }
                    ?>
                    </tbody>
                </table>
                <div>
                    <div class="container">
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading"><h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span>Edit Data</h4></div>
                                            <div class="panel-body">
                                               <div id="info">
                                                    
                                               </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="modal fade" id="delete" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading"><h4 class="modal-title"><span class="glyphicon glyphicon-remove"></span>Remove Data</h4></div>
                                            <div class="panel-body">
                                               <div id="data">
                                                    
                                               </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <script>

                    </script>
                    
                </div>
            </div>
        </div>
    </body>
</html>
