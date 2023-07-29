<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="pbcss.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Phonebook</title>

    <script>
        $(document).ready(function(){
            $("#searchInput").on("keyup",function(){
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function(){
                    $(this).toggle($(this).find('td:nth-child(2)').text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>

</head>
<body>
<a href="krisa.php" class="logo">
<img src="kl.png" alt>
    </a>
    <div id="center-overlay">
        <img src="hmcc.jpg" alt="Center Overlay Image">
    </div>
    <div class="container my-5">
        <h2>Phonebook Contacts</h2>
        <a class="btn btn-primary" href="addcontact.php" role="button">Add Contact</a>
        <br>

        <div class="my-3"></div>
        <div class="form-group">
            <input type="text" id="searchInput" placeholder="Search..." class="form-control">
        </div>
        <div class="my-3"></div>
        
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact Number</th>
                    <th>Email Address</th>
                    <th>Address</th>
                    <th>Notes</th>
                    <th> </th>
                </tr>
            </thead>

            <tbody id="myTable">

                <?php
                    $servername= "localhost";
                    $username = "id21003546_khryzza";
                    $password = "Ubian_2020";
                    $database ="id21003546_accountsreg";

                    //Connection pi sa data base uwu - cduminek
                    $connection = new mysqli($servername, $username, $password, $database);

                    //Verify connection
                    if($connection->connect_error){
                        die("Connection Failed: ".$connection->connect_error);
                    }

                    //Read all row from the data base lamesa
                    $sql = "SELECT * FROM kphone";
                    $result = $connection->query($sql);


                    if(!$result){
                        die("Invalid query: ". $connection->error);
                    }

                    //basa data sa bawat row 
                    while($row = $result->fetch_assoc()){
                        echo"
                        <tr>
                        <td>$row[id]</td>
                        <td>$row[username]</td>
                        <td>$row[phone]</td>
                        <td>$row[email]</td>
                        <td>$row[address]</td>
                        <td>$row[notes]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='editcontact.php?id=$row[id]'>EDIT</a>
                            <a class='btn btn-primary btn-sm' href='deletecontact.php?id=$row[id]'>DELETE</a>
                        </td>
                        </tr>
                        ";
                    }
                ?>


               
            </tbody>
        </table>        
    </div>
</body>
</html>