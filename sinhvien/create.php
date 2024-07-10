<?php
        if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['submit'])){
            $ID= $_POST['ID'];
            $HoTen= $_POST['txtHoTen'];
            $NgaySinh= $_POST['txtNgaySinh'];
            $GioiTinh=$_POST['gender'];
            $QueQuan=$_POST['txtQueQuan'];
            $TrinhDoHocVan=$_POST['level'];
            if(isset($_POST['gender'])){
                $GioiTinh=$_POST['gender'];
            }
            else{
                $GioiTinh=false;
            }

            if(isset($_POST['level'])){
                $TrinhDoHocVan=$_POST['level'];
            }
            else{
                $TrinhDoHocVan=false;
            }
            $sql = "INSERT into tblsinhvien values('','$HoTen','$NgaySinh','$GioiTinh','$QueQuan','$TrinhDoHocVan')";
                $result= mysqli_query($conn,$sql);
                if($result){
                    echo "<script > alert('Thêm thành công');
                     window.location.href='index.php?page_layout=list';
                    </script>";
                }
                else {
                    echo "insert error ". mysqli_error($conn);
                }
            }
            if(isset($_POST['gender'])){
                $GioiTinh=$_POST['gender'];
                
            }
            else{
                $GioiTinh=false;
            }

            if(isset($_POST['level'])){
                $TrinhDoHocVan=$_POST['level'];
            }
            else{
                $TrinhDoHocVan=false;
            }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thêm Sinh Viên</title>
    </head>
    <body>
        <div class=" container-fluid" >
            <div class="form-group card">
                <div class="card-header">
                    <h2>Thêm sinh viên</h2>
                </div>
                <div class= "card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Tên sinh viên</label>
                            <input type="text" name="txtHoTen" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Ngày Sinh</label>
                            <input type="date" name="txtNgaySinh" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="lab" for="">Giới tính</label> <br>
                            <label class="radio-inline"><input type="radio" name="gender" value="1" checked="checked" echo $GioiTinh >Nam</label>
                            <label class="radio-inline"><input type="radio" name="gender" value="0" echo $GioiTinh>Nữ</label>
                        </div> 
                        <div class="form-group">
                            <label for="">Quê Quán</label>
                            <input type="text" name="txtQueQuan" class="form-control">
                        </div>
                        <div class="form">
                            <label class="lab" for="">Trình Độ Học Vấn</label> <br>
                            <label class="radio-inline"><input type="radio" name="level" value="0" checked="checked" echo $TrinhDoHocVan >Tiến sĩ</label>
                            <label class="radio-inline"><input type="radio" name="level" value="1" echo $TrinhDoHocVan>Thạc sĩ</label>
                            <label class="radio-inline"><input type="radio" name="level" value="2" echo $TrinhDoHocVan>Kỹ sư</label>
                            <label class="radio-inline"><input type="radio" name="level" value="3" echo $TrinhDoHocVan>Khác</label>
                        </div>
                        <button name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
