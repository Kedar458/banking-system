
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_GET["run"] == "true") {
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    ?>
    <h1 class="heading">CUSTOMER DATA</h1> 
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
            <th>PhNo</th>
            <th>Address</th>
            <th>Balance</th>
            <th>Selectsender</th>
        </thead>
<?php

        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
        echo '
        <tr>
            <td>'.$row["ID"].'</td>
            <td>'.$row["Name"].'</td>
            <td>'.$row["email"].'</td>
            <td>'.$row["PhNo"].'</td>
            <td>'.$row["Address"].'</td>
            <td>'.$row["Balance"].'</td> 
            <td class="send"><a href="transact.php?sender='.$row['ID'].'"
            <button type="button" class="btn mybtn btn-outline-light">Send Money</button>
            </a></td>
        </tr>';


        }
?>

        </table>
<?php
    }
}
$conn->close();
?>

<style>
   table {
          box-shadow: 2px 2px 10px black;
          font-size:22px;
             border-radius: 0.1px;
        
        background-color: white;
        font-family: Arial, Helvetica, sans-serif;
        border: 1px solid;
        /* width: 10%; */
        border-collapse: collapse; 
        text-align: center; 
        height: 150px;
        /* margin-top: 30px;  */
        margin:30px 60px ;   
    }
    .heading{
        text-align:center;
        margin-top:50px;
    }
    .send{
        text-align:center;
    }
    

    th, td{
        height:70px;
        padding: 15px;
        text-align: left;
        border-bottom: 1.5px solid #fff00f;
        border:1.5px solid black;
    }

    th{
        background-color:   orange;
    }
    .btn{
        text-decoration:none;
        background-color:green;
        color:white;
        padding:10px 15px;
        font-size:15px;
        border-radius:5px;
    }
    
    .center {
        margin: auto;
        width: 57.5%;
        border: 3px solid #73AD21;
        padding: 10px;
        text-align: center;
        border: 3px solid black;
    }
    .user-button{
    border: 2px solid #9dd1ff;
    border-radius: 10px;
    color: #348efe;
    display: inline-block;
    padding: 5px 25px;
    text-decoration: none;
    margin: 25px 0;
    transition: background-color 200ms ease-in-out;
    }
    .user-button:hover,.user-button:focus{
    background-color: #e1f1ff ;
    }

    html{
    background-color:   ;
    /* display: flex; */
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}   border-radius: 0.1px;
        font-weight: bold;
        background-color: white;
        font-family: Arial, Helvetica, sans-serif;
        border: 1px solid;
        width: 50%;
        border-collapse: collapse; 
        text-align: center; 
        height: 150px;
    

    th, td{
        height: 70px;
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th{
        background-color: orange;
    }
    
    .center {
        margin: auto;
        width: 57.5%;
        border: 3px solid #73AD21;
        padding: 10px;
        text-align: center;
        border: 3px solid black;
    }
    .user-button{
    border: 2px solid #9dd1ff;
    border-radius: 10px;
    color: #348efe;
    display: inline-block;
    padding: 5px 25px;
    text-decoration: none;
    margin: 25px 0;
    transition: background-color 200ms ease-in-out;
    }
    .user-button:hover,.user-button:focus{
    background-color: #e1f1ff ;
    }

    html{
    background-color: #b5e7a0;
    /* display: flex; */
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}  
</style>