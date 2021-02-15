<?php


$host = "localhost";
$user = "root";
$password ="";
$database = "youtube";

$id = "";
$iname = "";
$cname = "";
$age = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['iname'];
    $posts[2] = $_POST['cname'];
    //$posts[3] = $_POST['age'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM places WHERE id = $data[0]";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['id'];
                $iname = $row['iname'];
                $cname = $row['cname'];
                //$age = $row['age'];
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `places`(id,iname,cname) VALUES ('$data[0]','$data[1]','$data[2]')";
    //$insert_Query = "INSERT INTO `places`(`iname`, `cname`) VALUES ('$data[1]','$data[2]')";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Inserted';
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM `places` WHERE `id` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
    //$update_Query = "UPDATE `places` SET `iname`='$data[1]',`cname`='$data[2]',`age`=$data[3] WHERE `id` = $data[0]";
    $update_Query = "UPDATE `places` SET `iname`='$data[1]',`cname`='$data[2]' WHERE `id` = $data[0]";
	try{
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



?>
<!DOCTYPE Html>
<html>
    <head>
        <title>PHP INSERT UPDATE DELETE SEARCH</title>
    </head>
<style>

.header
{
background-image:url(2222.jpg);
height:75vh;
background-size:cover;
background-position:center;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.box
{
border:0;
background:;
display:block;
margin:20px auto;
text-align:center;
border: 2px solid magenta;
padding:14px 10px;
width:200px;
outline:none;
color:black;
border-radius:15px;
transition:0.25s;
 }
</style>
    <body class="header">
        <form action="second.php" method="post" align="center">
        <h1>ENTER NEW PLACES<H1>
            <input type="text" class="box" name="id" placeholder="ENTER SOURCE" value="<?php echo $id;?>"><br><br>
            <input type="text" class="box" name="iname" placeholder="ENTER DESTINATION" value="<?php echo $iname;?>"><br><br>
            <input type="text" class="box" name="cname" placeholder="ENTER CATEGOREY" value="<?php echo $cname;?>"><br><br>
            <!--<input type="number" name="age" placeholder="Age" value="<?php echo $age;?>"><br><br>-->
            <div>
                <!-- Input For Add Values To Database-->
                <input type="submit" class="button" name="insert" value="Add">
                
                <!-- Input For Edit Values -->
                <input type="submit" class="button" name="update" value="Update">
                
                <!-- Input For Clear Values -->
                <input type="submit" class="button" name="delete" value="Delete">
                
                <!-- Input For Find Values With The given ID -->
                <input type="submit" class="button" name="search" value="Find"><br><br>


  <a href="homepagefinal.php" type="submit" class="button">CONTINUE BOOKING</a>


            </div>
        </form>
    </body>
</html>
