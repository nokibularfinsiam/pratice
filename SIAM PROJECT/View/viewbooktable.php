<?php
require_once('../Model/bookTableModel.php');
$viewtables= getbooktable();
?>
<html>
    <head>
        <title>View tables</title>
    </head>
    <body>
        <form action="">
        <center>
            <fieldset style="width: 80%">
            <legend><b>Booked table</b></legend>
            <center>
            <table border="1" width=70%>

                <tr>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Guests</th>
                </tr>
                <?php for($i=0;$i<count($viewtables);$i++)
                {?>
                
                <tr>
                    <td><?=$viewtables[$i]['Name']?></td>
                    <td><?=$viewtables[$i]['Number']?></td>
                    <td><?=$viewtables[$i]['Date']?></td>
                    <td><?=$viewtables[$i]['Time']?></td>
                    <td><?=$viewtables[$i]['Guests']?></td>

        <?php   }?>
                </tr>
                
            
            </table>
            </center>
            </fieldset>
            </center>
        </form>
        
    </body>
</html>