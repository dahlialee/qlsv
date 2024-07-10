<?php
    if (isset($_GET["ID"])) {

        $ID = $_GET["ID"];
        $sql = "SELECT * FROM tblsinhvien WHERE ID = '$ID'";
        $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){ 
                    $HoTen = $row['HoTen'];
                    $NgaySinh = $row['NgaySinh'];
                }
            }
            else{
                echo "Khong co ban ghi";
            }
    } 
        if (isset($_POST["Edit"])) {
            $ID = $_POST["txtID"];
            $HoTen = $_POST["txtHoTen"];
            $NgaySinh = $_POST["txtdate"];
            $GioiTinh=$_POST['gender'];
            $QueQuan = $_POST["txtQueQuan"];
            $TrinhDoHocVan = $_POST['level'];
            $sql = "UPDATE tblsinhvien SET HoTen = '$HoTen', NgaySinh = '$NgaySinh' WHERE ID = '$ID'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "Cập nhật thành công!";
                echo "<script type='text/javascript'>alert('Sửa dữ liệu thành công')
                    window.location.href='index.php?page_layout=list';
                    </script>";
            } else {
                echo "Lỗi cập nhật: " . mysqli_error($connect);
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin</title>
</head>
<body>
    <form METHOD="POST">
        <h2>Sửa Sinh Viên</h2>
            <div class="form-nhap">
            <div class="form-">
                    <label class="lab" for="">Họ Tên</label>
                    <input class="inp" type="text" id="txtHoTen" name="txtHoTen" value=" <?php echo $HoTen; ?>">
            </div> 
            <div class="form-">
                    <label class="lab" for="">Ngày Sinh</label>
                    <input type="date" name="txtdate" id="txtdate" value="<?php echo $NgaySinh; ?>">
            </div> 
            <div class="form-row">
                <label class="lab" for="">Giới tính</label> <br>
                <label class="radio-inline"><input class="oradio" type="radio" name="gender" value="0">Nam</label>
                <label class="radio-inline"><input class="oradio" type="radio" name="gender" value="1">Nữ</label>
           </div> 
           <div class="form-">
                    <label class="lab" for="">Quê Quán</label>
                    <input class="inp" type="text" id="txtQueQuan" name="txtQueQuan" value=" <?php echo $QueQuan; ?>">
            </div> 
            <div class="form">
                <label class="lab" for="">Trình Độ Học Vấn</label> <br>
                <label class="radio-inline"><input type="radio" name="level" value="0" checked="checked" echo $TrinhDoHocVan >Tiến sĩ</label>
                <label class="radio-inline"><input type="radio" name="level" value="1" echo $TrinhDoHocVan>Thạc sĩ</label>
                <label class="radio-inline"><input type="radio" name="level" value="2" echo $TrinhDoHocVan>Kỹ sư</label>
                <label class="radio-inline"><input type="radio" name="level" value="3" echo $TrinhDoHocVan>Khác</label>
            </div>
                <button type="submit" name="edit" id="edit">Edit</button>
            </div>
        </form>
</body>
</html>