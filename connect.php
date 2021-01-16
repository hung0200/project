<?php
                // 4 buoc:
                // B1. Ket noi Database Server
                $conn = mysqli_connect('localhost','root','','cv');
                if(!$conn){
                    die('Khong the ket noi. Kiem tra lai cac tham so');
                    exit();
                }

            ?>