<?php
$target="Uploads/";
$file_path= $target.$_FILES['Upload']['name'];

if(move_uploaded_file ($_FILES['Upload']['tmp_name'],$file_path ) ){
    
    echo "Files uploaded successfully";
    echo "<img width=100px src=" .$file_path. " >";
}
else{
    echo "Files not uploaded";
}
/* echo "<pre>";
print_r($_FILES);
echo "</pre>"; */