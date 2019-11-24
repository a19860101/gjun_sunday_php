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
    function showStudent($id){
        global $conn;
        $sql = "SELECT * FROM students WHERE id = ".$id;
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    function storeStudent($name,$email,$edu,$gender,$skills){
        global $conn;
        $sql = "INSERT INTO students(name,email,edu,gender,skill,created_at,updated_at)VALUES('$name','$email','$edu','$gender','$skills',NOW(),NOW())";
        mysqli_query($conn,$sql);
    }
    function deleteStudent($id){
        global $conn;
        $sql = "DELETE FROM students WHERE id = ".$id;
        mysqli_query($conn,$sql);
    }
    function updateStudent($name,$email,$edu,$gender,$skills,$id){
        global $conn;
        $sql = "UPDATE students SET 
        name = '$name',
        email = '$email',
        edu = '$edu',
        gender = '$gender',
        skill = '$skills',
        updated_at = NOW()
        WHERE id =".$id;

        mysqli_query($conn,$sql);
    }