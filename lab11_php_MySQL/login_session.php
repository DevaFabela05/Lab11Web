<?php
2.
3. session_start();
4.
5. if (!isset($_SESSION['isLogin']))
6. header('location: login.php');
7.
8. ?>