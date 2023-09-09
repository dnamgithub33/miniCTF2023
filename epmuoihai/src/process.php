<?php
    if(isset($_POST["submit"]))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == "admin" && $password == "mCTF{4re_U_sur3_th1s_1s_real_flag_?}") {
            echo "<h1>The flag is: miniCTF{EHE_TE_NANDAYO_?}</h1>";
        } else {
            header('Location: index.php');
            exit(); // Đảm bảo kết thúc thực thi sau khi chuyển hướng
        }
    }
?>
