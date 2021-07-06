<?php
echo $file_name = $_FILES['picture']['name'];
echo $file_tm_name = $_FILES['picture']['tmp_name'];

move_uploaded_file($file_tm_name,"uploads/".$file_name);
?>