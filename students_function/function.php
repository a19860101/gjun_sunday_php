<?php
    function showAll(){
        global $conn;
        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn,$sql);
        $rows = array();
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }