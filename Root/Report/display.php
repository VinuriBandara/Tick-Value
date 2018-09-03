<?php
$dbhost="localhost";
$username="root";
$password="root";
$db="vinu";

$conn=new mysqli("$dbhost","$username","$password","$db");

 if(mysqli_connect_error())
 {
 	echo"oops";
 	die('Connect Error ('.mysqli_connect_errno() .') '. mysqli_connect_error());
 }


$sql = 'SELECT * 
		FROM table_1';
		
$result = mysqli_query($conn, $sql);

if (!$result) 
{
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<html>
<head>

	<title>Client</title>
		<script language="javascript" type="text/javascript">
        function printDiv(divID) 
        { 
            var divElements = document.getElementById(divID).innerHTML;
         
            var oldPage = document.body.innerHTML;

            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            window.print();
            
            document.body.innerHTML = oldPage;
          
        }
    	</script>
</script>
</head>
<body>
	<div id="content">
	<table>
		<thead>

			<th> ID</th>
			<th>Name</th>
			<th>Address</th>

		</thead>

		<?php
		while($row = mysqli_fetch_array($result))
        {

            echo "<tr>";

                echo "<td>" . $row['ID'] . "</td>";

                echo "<td>" . $row['Name'] . "</td>";

                echo "<td>" . $row['Address'] . "</td>";

            echo "</tr>";

        }

		?>
	</table>
	</div>
	<form id="form1" runat="server">
     <input type="button" value="Print" onclick="javascript:printDiv('content')" />
    </form>
</body>

</html>