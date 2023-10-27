<div id="order-food">

      <h2>Thực đơn-món ăn</h2>

      <!-- <div id="menu-food">
      
            <img src="http://localhost/nhahang/assets/img/menu-food/Bánh Crepe.jpg" alt="">


            <img src="http://localhost/nhahang/assets/img/menu-food/Gà nấu sốt vang đỏ.jpg" alt="">


            <img src="http://localhost/nhahang/assets/img/menu-food/Gan ngỗng béo áp chảo.jpg" alt="">


            <img src="http://localhost/nhahang/assets/img/menu-food/Món Salade Nicoise.jpg" alt="">


            <img src="http://localhost/nhahang/assets/img/menu-food/Ốc sên nướng (Escargot).jpg" alt="">


            <img src="http://localhost/nhahang/assets/img/menu-food/Soufflé.jpg" alt="">


            <img src="http://localhost/nhahang/assets/img/menu-food/Soupe À I’oignon.jpg" alt="">


            <img src="http://localhost/nhahang/assets/img/menu-food/Steak Tartare.jpg" alt="">


            <img src="http://localhost/nhahang/assets/img/menu-food/Súp hải sản kiểu Pháp.jpg" alt="">



      </div>
       -->
      <!-- <div id="menu-drink">

            <h2>Thực đơn-món ăn</h2>

            <br>
            <br>
            <br>

            <img src="http://localhost/nhahang/assets/img/menu-drink/Coca.jpg" alt="">

            <img src="http://localhost/nhahang/assets/img/menu-drink/Cocktail Bốn mùa.jpg" alt="cocktail">

            <img src="http://localhost/nhahang/assets/img/menu-drink/Mojito.jpg" alt="Mojito">

            <img src="http://localhost/nhahang/assets/img/menu-drink/Pavlova Cocktail.jpg" alt="Pavlova-cocktail">

            <img src="http://localhost/nhahang/assets/img/menu-drink/Pesi.jpg" alt="Pesi">

            <img src="http://localhost/nhahang/assets/img/menu-drink/Rượu Sake.jpg" alt="">

            <img src="http://localhost/nhahang/assets/img/menu-drink/Rượu Vang Primitivo Del Salento Golf Limited.jpg" alt="">

            <img src="http://localhost/nhahang/assets/img/menu-drink/Rượu vang Superius Quod Hispano-Suiza Thượng hạng.jpg" alt="">

            <img src="http://localhost/nhahang/assets/img/menu-drink/Rượu Whiskey Scotland.jpg" alt="">

            <img src="http://localhost/nhahang/assets/img/menu-drink/Tequila.jpg" alt="">
            
      </div> -->

      <?php
      var_dump($data_menu);
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
            <?php echo count($data_menu);
      for ($i= 0; $i < count($data_menu) ;$i++)
      {
      ?>
            <tr>
                  <td>
                        <?php
                  echo $data_menu[$i]["TenMonAn"];
                  ?>
                  </td>
                  <td>
                        <?php
                  echo $data_menu[$i]["Gia"];
                  ?>
                  </td>
                  <td>
                        <?php
                  echo $data_menu[$i]["TrangThai"];
                  ?>
                  </td>
            
            </tr>
            <?php
      }
      ?>


</table>


      <?php
            $link= new mysqli("localhost","root", "", "nhahang");
            $sql="select * from douong";
            $result=$link->query($sql);

      ?>

      <table>
            <tr>
                  <th> Ten do uong </th>
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
                 echo $row["TenDoUong"];
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



</div>