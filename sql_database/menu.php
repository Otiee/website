<?php
$link= new mysqli("localhost","root", "", "nhahang");
$sql="select * from menu";
$result=$link->query($sql);

?>

<table>
      <tr>
            <th> Ten mon an </th>
            <th> Đơn giá </th>
            <th> Tình trạng </th>

      </tr>
      <?php
    while ($row=$result->fetch_assoc())
    {
    ?>
      <tr>
            <td>
                  <?php
                echo $row["TenMonAn"];
            ?>
            </td>
            <td>
                  <?php
                echo $row["Gia"];
            ?>
            </td>
            <td>
                  <?php
                echo $row["TrangThai"];
            ?>
            </td>
      
      </tr>
      <?php
    }
?>


</table>