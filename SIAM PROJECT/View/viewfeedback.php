<?php
require_once('../Model/feedbackModel.php');
$viewfeedbacks= getfeedback();
?>
<html>
    <head>
        <title>View tables</title>
    </head> 
    <body>
        <form action="">
        <center>
            <fieldset style="width: 80%">
            <legend>Feedbacks</legend>
            <center>
            <table border="1" width=70%>

                <tr>
                    <th>Email</th>
                    <th>Feedbacks</th>
                </tr>
                <?php for($i=0;$i<count($viewfeedbacks);$i++)
                {?>
                
                <tr>
                    <td><?=$viewfeedbacks[$i]['Email']?></td>
                    <td><?=$viewfeedbacks[$i]['Feedbacks']?></td>

        <?php   }?>
                </tr>
                
            
            </table>
                </center>
            </fieldset>
            </center>

        </form>
        
    </body>
</html>