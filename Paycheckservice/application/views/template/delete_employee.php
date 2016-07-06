<!---Prompt to Delete Employee--->
<body>
    
    <form method="POST" action="<? base_url(); ?>ajax_delete_employee">
        <table>
            <?php
                foreach($employee as $data)
                {
                    ?>
                        <tr>
                            <th>Add You Sure You Want To Delete <? echo $data['Firstname'].' '. $data['Lastname']; ?> ? </th>
                        </tr>
                        <tr>
                            <th><input type="hidden" name="id" value="<? echo $data['ID']; ?>"></th>
                            <td><input class="btn btn-info" type="submit" name="delete" value="Confirm Delete"></td>
                        </tr>
                    <?
                }
            ?>
        </table>
    </form>
</body>