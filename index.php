<?php
    require_once 'connect/kn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinh Vien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <?php
    //  kiểm tra page_layout có tồn tại hay ko
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case 'list':
                    require_once 'sinhvien/list.php';
                    break;
                case 'create':
                    require_once 'sinhvien/create.php';
                    break;
                case 'edit':
                    require_once 'sinhvien/edit.php';
                    break;
                case 'delete':
                    require_once 'sinhvien/delete.php';
                    break;
                default: 
                    require_once 'sinhvien/list.php';
                    break;
            }
        }
    ?>
</body>
</html>