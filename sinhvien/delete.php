<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $con = mysqli_connect("localhost","root","","qlsv_lehoangdieu");
        if(!$con){
            die("Kết  nối thất bại".mysql_connect_error());
        }
            $ID = $_GET['id'];       
            $query = "delete from tblsinhvien where ID=$ID";
            $result = mysqli_query($con,$query);
    ?>
    <script>
        window.location.href="index.php?page_layout=list";
    </script>
</body>
</html>