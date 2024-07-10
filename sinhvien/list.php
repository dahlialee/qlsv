<?php
    require_once '../config/connect.php';
    $sql= "SELECT * FROM tblsinhvien";
    $result= mysqli_query($conn,$sql);
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách sinh viên</h2>
            <a class="btn btn-success" href='index.php?page_layout=create'>Thêm sinh viên</a>
            <!-- btn btn-primary -->
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Họ Tên</th>
                        <th>Ngày Sinh</th>
                        <th>Giới Tính</th>
                        <th>Quê Quán</th>
                        <th>Trình Độ Học Vấn</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count=1;
                    while($row=mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td> <?php echo $count++; ?></td>
                            <td> <?php echo $row['HoTen']; ?> </td>
                            <td> <?php echo $row['NgaySinh']; ?> </td>
                            <td> <?php echo $row['GioiTinh']; ?></td>
                            <td> <?php echo $row['QueQuan']; ?></td>
                            <td> <?php echo $row['TrinhDoHocVan']; ?></td>
                            <td> <a style="text-decoration:none" href="index.php?page_layout=edit&id=<?php echo $row['ID']; ?> ">Sửa</a> 
                                 <a style="text-decoration:none" onclick="return del('<?php echo $row['HoTen']; ?>')" href="index.php?page_layout=delete&id=<?php echo $row['ID']; ?>">Xóa</a> 
                            </td>
                        </tr>
                    <?php } ?>
                     </tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function del(name){
        return confirm("Bạn có muốn xóa: "+name+ "?");
    }
</script>   