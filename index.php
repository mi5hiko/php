<!DOCTYPE html>
<html>
<head>
 <title>PHP MySQL Insert</title>
 </head>
 <body style="margin-left: 200px;">
 <h1 PHP My SQL INSERT</h1>
 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "eumysql2018";

  //create coonection
  $conn = mysqp_connect($servername, $username, $password, $dbname);
  mysqli_query($sonn, "SET NAMES 'utf8');

  //check connection
  if (!$conn)
   die("Connection failed: ". mysqp_connect_error());
   }
   echo"Connected successfully";
   ?>
 <div>
   <?php
   $nameError = "";
   if(isset($_POST['insert'])){
       $name = $_POST['name'];
       echo $name;
       echo "<br>"
       echo mb_strlen($name);
       if(mb_strlen($name)>=2 && mb_strlen($name)<=22){
           $sql = "INSERT INTO students(name) VALUES ('$name')";
           $result = musqli_query($conn, $sql);
       }else{
             $nameError = "სახელი არ არის მოთავსებული 2-სა და 20-ს შორის";
       }
    }
    ?>
    <from method="post"
     <table border="1" cellpadding="10" cellspaceing="0"
      <tr>
       <td>
          <label>სახელი:</label>
          </td>
          <td>

           <label style="color: red; font-size: 12px">
           <?php
            echo $nameError;
            ?>
            </label>
            </td>
            </tr>
              <td colspan="3"
              <button type="submit" name="insert">მონაცემების ჩაწერა</button>
            </td>
            </tr>
            </table>
            </form>
            </div>
            </body>
            </html>
