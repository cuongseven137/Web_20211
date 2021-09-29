<HTML>
<body>
	<h1>Debug Demo</h1>
	<table border="1" width="700">
		<tr style='background-color:red;text-align:center;font-weight: bold; color:white'>
    		<td>Name</td>
    		<td>Address</td>
    		<td>Phone</td>
		</tr>
	
        <?php
            $db = array(
                        array("Dinh Quoc Cuong", "Ha Noi", "0968137486"),
                        array("Nguyen Van An", "Bac Giang", "0123456789"),
                       );     
            $num = 0;
            
            foreach ($db as $person){
                if($num % 2 == 1)
                    echo "<tr style='background-color:green;color:white'>";
                foreach ($person as $value){
                    echo "<td>$value</td>";
                }
                echo "</tr>";
                $num++;
            }
        ?>
	</table>
</body>
</HTML>

