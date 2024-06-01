<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>Collection</title>
</head>
<body>
    <div class="collections">
    <div class="heading">Trichy :</div>
    <form action="DataInsert.php" method="post">
        <div class="can">
        <label for="Aranthangi">Aranthangi :</label>
        <input type="text" name="Aranthangi" id="Aranthangi" placeholder="Aranthangi"autocomplete="off" required></div>
        <div class="can">
        <label for="Karur">Karur :</label>
        <input type="text" name="Karur" id="Karur" placeholder="Karur"autocomplete="off" required></div>
        <div class="can">
        <label for="Mayiladuthurai">Mayiladuthurai :</label>
        <input type="text" name="Mayiladuthurai" id="Mayiladuthurai" placeholder="Mayiladuthurai"autocomplete="off" required></div>
        <div class="can">
        <label for="Musiri">Musiri :</label>
        <input type="text" name="Musiri" id="Musiri" placeholder="Musiri"autocomplete="off" required></div>
        <div class="can">
        <label for="Nagapattinam">Nagapattinam :</label>
        <input type="text" name="Nagapattinam" id="Nagapattinam" placeholder="Nagapattinam"autocomplete="off" required></div>
        <div class="can">
        <label for="Nanjikottai">Nanjikottai :</label>
        <input type="text" name="Nanjikottai" id="Nanjikottai" placeholder="Nanjikottai"autocomplete="off" required></div>
        <div class="can">
        <label for="Pattukottai">Pattukottai :</label>
        <input type="text" name="Pattukottai" id="Pattukottai"placeholder="Pattukottai"autocomplete="off" required></div>
        <div class="can">
        <label for="Pudukottai">Pudukottai :</label>
        <input type="text" name="Pudukottai" id="Pudukottai" placeholder="Pudukottai"autocomplete="off" required></div>
        <div class="can">
        <label for="Thiruvarur">Thiruvarur :</label>
        <input type="text" name="Thiruvarur" id="Thiruvarur" placeholder="Thiruvarur"autocomplete="off" required></div>
        <div class="can">
        <label for="Tirchy">Tirchy :</label>
        <input type="text" name="Tirchy" id="Tirchy" placeholder="Tirchy"autocomplete="off" required>
        </div>
        <button>Submit</button>
    </form>
    <div class="datas">
    <div class="heading">Trichy</div>
        <?php
        include "connection.php";
        $sql="Select * from collections";
        $result=mysqli_query($con,$sql);
        echo "<table><tr>
              <th>Sno</th>
              <th>Aranthangi</th>
              <th>karur</th>
              <th>mayiladuthurai</th>
              <th>musiri</th>
              <th>nagapattinam</th>
              <th>nanjikottai</th>
              <th>pattukottai</th>
              <th>pudukottai</th>
              <th>thiruvarur</th>
              <th>tirchy</th>
              <th>total</th>
             </tr>";
             while($row=mysqli_fetch_array($result)){
                echo "<tr>";
                     echo "<td>".$row['id']."</td>";
                     echo "<td>".$row['aranthangi']."</td>";
                     echo "<td>".$row['karur']."</td>";
                     echo "<td>".$row['mayiladuthurai']."</td>";
                     echo "<td>".$row['musiri']."</td>";
                     echo "<td>".$row['nagapattinam']."</td>";
                     echo "<td>".$row['nanjikottai']."</td>";
                     echo "<td>".$row['pattukottai']."</td>";
                     echo "<td>".$row['pudukottai']."</td>";
                     echo "<td>".$row['thiruvarur']."</td>";
                     echo "<td>".$row['tirchy']."</td>";
                     echo "<td>".$row['total']."</td>";
                echo "</tr>";
             }
        ?>
    </div>  
</div>
</body>
</html>