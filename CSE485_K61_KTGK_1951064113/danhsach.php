
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesdanhsach.css">   
</head>
<body>
     <div class="header">
        <p class="title-login1">
        <h2 class="text-center">
             Hiển thị Danh sách/Thêm/Sửa/Xóa
        </h2>
        </p>
     </div>
    
    
    <div class="content ">
         <div>
               <button type="button btn1" class="btn btn-primary btn-lg">THÊM</button>
               <button type="button btn2" class="btn btn-secondary btn-lg">SỬA</button>
               <button type="button btn3" class="btn btn-primary btn-lg">XOÁ</button>
         </div>
         <h3 align = "center">Danh sách</h3>
         <table border="1" align="center" cellspacing ="0" cellpadding = "0" width = "850">
               <tr>
                    <th>Mã dự án </th>
                    <th>tên dự án </th>
                    <th>năm thực chiến </th>
                    <th>lĩnh vực  </th>
                    <th>nhiệm vụ </th>
                    <th>cợ quan thực hiện</th>
               </tr>
          <?php
               $conn = mysqli_connect("localhost","root","","1951064113_kttv_bdkh ");
               $sql = "select * from duan";
               $result = mysqli_query($conn,$sql);
               while($row = mysqli_fetch_assoc($result))
               {
                    $maduan = $row["maduan"];
                    $tenduan = $row["tenduan"];
                    $namthucchien = $row["namthucchien"];
                    $linhvuc = $row["nhiemvu"];
                    $coquanthuchien = $row["coquanthuchien"]
               
          ?>    
          <tr>
               <td><?php echo $maduan?></td>;
               <td><?php echo $tenduan?></td>;
               <td><?php echo $namthucchien?></td>;
               <td><?php echo $linhvuc?></td>;
               <td><?php echo $coquanthuchien?></td>;
          </tr>         
          <?php
          }
          ?>
          <?php 
             mysqli_close($conn); ?>
          <tr>
               <td colspan="6" align="center"><button type="button" onclick="myFunction()">them moi</button></td>
          </tr>
         </table>
         <script>
              function myFunction(){
                   location.replace("themdulieu.php");
              }
          </script>
         
    </div>
    
    







 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>