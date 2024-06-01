       <?php
       include 'connection.php';
       $Aranthangi=$_POST["Aranthangi"];
       $Karur=$_POST['Karur'];
       $Mayiladuthurai=$_POST['Mayiladuthurai'];
       $Musiri=$_POST['Musiri'];
       $Nagapattinam=$_POST['Nagapattinam'];
       $Pattukottai=$_POST['Pattukottai'];
       $Pudukottai=$_POST['Pudukottai'];
       $Thiruvarur=$_POST['Thiruvarur'];
       $Tirchy=$_POST['Tirchy'];
       $Nanjikottai=$_POST['Nanjikottai'];
       
       $total=($Aranthangi+$Karur+$Mayiladuthurai+$Musiri+$Nagapattinam+$Pattukottai+$Pudukottai+$Thiruvarur+
               $Tirchy+$Nanjikottai);
       
       $sql="INSERT INTO `collections`(`aranthangi`, `karur`, `mayiladuthurai`, `musiri`, `nagapattinam`, `nanjikottai`, `pattukottai`, `pudukottai`, `thiruvarur`, `tirchy`, `total`) VALUES ('$Aranthangi','$Karur','$Mayiladuthurai','$Musiri'
       ,'$Nagapattinam','$Nanjikottai','$Pattukottai','$Pudukottai','$Thiruvarur','$Tirchy','$total');";
       
       mysqli_query($con,$sql);
       header("Location:collections.php");
       ?>

