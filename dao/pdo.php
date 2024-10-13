<?php 
function pdo_get_connection(){
$servername="localhost";
$dbname="du_an_mau";
$username="NTHY";
$password="";
try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $conn;
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
}
function pdo_execute($sql) {
    $args = func_get_args();
    $sql = array_shift($args); // Lấy câu lệnh SQL ra khỏi mảng tham số
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($args); // Truyền các tham số còn lại vào execute
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

function pdo_query($sql){
    $sql_args=array_slice(func_get_args(), 1);
    try{
        $conn =pdo_get_connection();
        $stmt=$conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows=$stmt->fetchAll();
        return $rows;
    }catch(PDOException $e){
        throw $e;
    }finally{
        unset($conn);
    }
}
function pdo_query_one($sql){
    $sql_args=array_slice(func_get_args(), 1);
    try{
        $conn =pdo_get_connection();
        $stmt=$conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows=$stmt->fetch(PDO::FETCH_ASSOC);
        return $rows;
    }catch(PDOException $e){
        throw $e;
    }finally{
        unset($conn);
    }
}
function pdo_query_value($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
?>