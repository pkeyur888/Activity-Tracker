

<?php
require_once('conn.php');
global $conn;
    


    function fetch_data(){
  
        global $conn;           
    $query_select="SELECT * FROM `activities` ";
    $res=$conn->query($query_select);
         $result=array();
        if($res->num_rows > 0) 
        {   
            while($row = $res->fetch_assoc() )
            {
                $result[] =$row;
               
            }
            return $result;
        }
    
    }
    

 ?>   