<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/result.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h3 class="ms-5">Bộ NN & PTNT</h3>
    <h1><b>TRƯỜNG ĐẠI HỌC THỦY LỢI</b></h1>

    <div class="container">
        <h2 class="d-flex justify-content-center"> Danh sách Tổng hợp kết quả thi của thí sinh </h2>
        <table class="table table-bordered border mt-5">
            <thead>
              <tr>
                <th scope="col">Số thứ tự</th>
                <th scope="col">Số báo danh</th>
                <th scope="col">Mã bài thi</th>
                <th scope="col">Ngày thi</th>
                <th scope="col">Giờ nộp bài</th>
                <th scope="col">Điểm thi</th>
                <th scope="col">Tệp kết quả</th>
                <th scope="col">Kí tên</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $dir = 'E:\xampp\htdocs\MinhQuan\project14\result';
                $files = array_slice(scandir($dir),3);
                for($i =0; $i< count($files);++$i){
                    echo "<tr>";
                echo "    <th>".$i."</th>";
                echo "    <td>".explode("_", $files[$i])[3]."</td>";
                echo "    <td>".explode("_", $files[$i])[2]."</td>";
                echo "    <td>".explode("_", $files[$i])[4]."</td>";
                echo "    <td>".explode("_", $files[$i])[5]."</td>";
                echo "    <td>".explode(".", explode("_", $files[$i])[6])[0]."</td>";
                echo "    <td>";
                echo "    <a href=view.php?file=result/$files[$i]>resut/$files[$i]</a>";
                echo "    </td>";
                echo "    <td></td>";
                echo "</tr>";
                }
                ?>
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>