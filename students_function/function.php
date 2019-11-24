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
    function storeStudent($name,$email,$edu,$gender,$skills){
        global $conn;
        $sql = "INSERT INTO students(name,email,edu,gender,skill)VALUES('$name','$email','$edu','$gender','$skills')";
        mysqli_query($conn,$sql);
    }