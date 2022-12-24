<?php
      $conn = new mysqli('localhost','root','','banhang',3307) or die('Không kết nối được với cơ sở dữ liệu');
      mysqli_query($conn, 'SET NAMES UTF8');
?>