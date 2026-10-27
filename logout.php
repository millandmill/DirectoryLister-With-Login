<?php

    /* Redirects here after login */
    //$redirect_after_login = 'index.php';

    // set the expiration date to one hour ago
    // ตั้งค่าให้ cookie หมดเวลาไปแล้ว เมื่อ 1 ชั่วโมงกว่า เหมือนเป็นการล้าง cookie
    //setcookie("password", "", time() - 3600);
    //header('Location: ' . $redirect_after_login);

?>
<p id="showtext"></p>


<script>
    function delete_cookie(name) {
      document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }
    delete_cookie('password');
    //alert(document.cookie);
    document.getElementById("showtext").innerHTML = "Logout เรียบร้อย<br/><a href='index.php'>กลับไปหน้าก่อนหน้า</a>";

    function countDown(end) {
      var startTime = new Date();
      var endTime = new Date(end * 1000);
      var interval = setInterval(function() {
        var now = new Date();
        var seconds = (endTime - now) / 1000;
        if (seconds < 0) {
          clearInterval(interval);
          window.location.href = "index.php";
        } else {
          document.getElementById("countdown").innerHTML = seconds;
        }
      }, 1000);
    }



    countDown(30); // 30 วินาที
</script>
