

<?php
require_once('conn.php');
global $conn;
    


    function fetch_data(){
  
        global $conn;  
        $userid = $_SESSION['userid'];         
    $query_select="SELECT * FROM `activities` where userId = $userid ";
    $res=$conn->query($query_select);
         $result=array();
        if($res && $res->num_rows > 0) 
        {   
            while($row = $res->fetch_assoc() )
            {
                $result[] =$row;
               
            }
            return $result;
        }
    
    }

    function fetch_category_data(){
  
        global $conn;  
        $userid = $_SESSION['userid'];         
    $query_select="SELECT * FROM `categories` where userId = $userid ";
    $res=$conn->query($query_select);
         $result=array();
        if($res && $res->num_rows > 0) 
        {   
            while($row = $res->fetch_assoc() )
            {
                $result[] =$row;
               
            }
            return $result;
        }
    
    }
    

 ?>   