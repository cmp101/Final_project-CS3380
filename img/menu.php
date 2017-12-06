

<!DOCTYPE html>

<html>
<head>
	<title>Menu</title>
    <link href="https://fonts.googleapis.com/css?family=Macondo+Swash+Caps" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
	<link href="app.css" rel="stylesheet" type="text/css">
    
    
    
        
        <style>
        
        body {
        background-image: url("img/cnres.jpg");
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size:cover;
        }
            
            .form-style-6{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 400px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
                border-radius: 5px;
}

            #home{
                text-align: center;
            }
            h1{
                font-family: 'Cabin Sketch', cursive;
                font-size:40px;
            }
              
            p{
                font-family: 'Macondo Swash Caps', cursive;
                font-size: 28px;
            }
            
        </style>
</head>
<body>
     
    <div id="loginWidget" class="form-style-6">
 <p>Current Cuisines in the database:</p>
     
        
        <form action="index.php" method="POST">
        <?php
require ('db_credentials.php');

$connect = mysqli_connect($servername,$username,$password,$dbname);


$sql = "SELECT * FROM China";
$result = $connect->query($sql);
            
            if (mysqli_num_rows($result) > 0) {
   
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["Menu"];
    
        
    }
} else {
    echo "0 results";
}
echo "<br>"
?>

            
    <label >Choose:</label>
                <input type="text" name="Cuisine" placeholder="example: China"  value="" >
            
            <input type="submit" value="Confirm">
          
        </form>
        <br>
        <a href="createnewtable.php"><button>Create a new Cuisine Table!</button></a>
        <span><a href="deletetable.php"><button>Delete a Cuisine Table!</button></a></span>
         <a href="logout.php"><p>Logout!</p></a>
    </div>
    
</body>
</html>
