<?php

class image {
     public function thumbnail($filename, $newWidth, $imgName)
            {
                list ($width,$height )=getimagesize($filename);
                $newHeight = $height/($width/$newWidth);

                $newImage = imagecreatetruecolor($newWidth, $newHeight );
                $oldImage = imagecreatefromjpeg($filename );
               imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $newWidth, $newHeight, $width,$height);
                //输出jpeg图像
            
                header ('Content-type:image/jpeg');
                 imagejpeg ( $newImage, $imgName, 99 );
      
               imagedestroy ( $filename );  //若不用于显示则不用该方法。
                return $imgName;
}
       
        public function uploadImage($movepath){
            if(is_uploaded_file($_FILES['headpic']['tmp_name']))
            {
                        $flag=0;
                        //把整个信息取出
                        $fileInfo=$_FILES["headpic"];
                        
                        //看看上传文件名
                        $headpic=time().$fileInfo["name"];
                        //文件大小,按照字节
                        $file_size=$fileInfo["size"];
                        //不能上传文件大于 1m
                        if($file_size>10*1024*1024)
                        {
                            $flag=1;
                            ?>
                            <script language='javascript' >
                            alert("文件太大");
                            history.back();
                            </script>
                            <?php
                            exit();
                            ?>
                            <?php 
                            
                        }
                        //文件的类型(不是靠后缀名 )
                        $file_type=$fileInfo["type"];
                        //'image/jpg','image/jpeg', 'image/png', 'image/pjpeg', 'image/gif',
<<<<<<< HEAD
                        if($file_type!="image/jpeg" and $file_type!="image/jpg" and $file_type!="image/pjpeg")
=======
                        if($file_type!="image/jpeg" and $file_type!="image/jpg" and $file_type!="image/png" and $file_type!="image/pjpeg" and $file_type!="image/gif")
>>>>>>> master
                        {
                            $flag=1;
                            ?>
                            <script language='javascript' >
                            alert("文件类型有问题!");
                            history.back();
                            </script>
                            <?php
                            exit();
                            ?>
                            <?php 
                        }
                        
                        //error
                        $file_error=$fileInfo["error"];
                        //取出tmp_name
                        $tem_name=$fileInfo["tmp_name"];
                    
                        //根据你的需要来觉得是否接收该文件
                        //如果该文件符合你的要求 ，你就转存到自定位置
                        if($file_error==0&&$flag==0)
                        {
                            $newname= 'mini'.$headpic;
                       
                         
                            //移动到指定位置
                            $file_full_path=$_SERVER["DOCUMENT_ROOT"]."/images/face/".$newname;
                            $this->thumbnail($tem_name,100,$file_full_path);
                           // if(move_uploaded_file($tem_name,$file_full_path)){
                           //  echo "OK";

                           // }else{
                           //      echo "error";
                           //      exit();
                           // }
                           //  print_r($res);
                           // exit(); 
                            $headpic=$newname;
                        }else{
                            ?>
                            <script language='javascript' >
                            alert("上传失败!");
                            history.back();
                            </script>
                            <?php
                            exit();
                            ?>
                            <?php
        }

    }else{
        $headpic="default.jpg";
    }
     return $headpic;

        }

    
}
?>
