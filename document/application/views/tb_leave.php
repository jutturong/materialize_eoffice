<div class="chip">
    <img src="images/yuna.jpg" alt="Contact Person">
   <?=$name?> <?=$lastname?>
  </div>



<table  class="bordered" >
        <thead>
          <tr>
              <th>ประเภทการลา</th>
              <th>ลามาแล้ว (วันทำการ)</th>
              <th>วันลาคงเหลือ (วันทำการ)</th>
              <!-- <th>รวมเป็น (วันทำการ)</th> -->
          </tr>
        </thead>

        <tbody>
          
            
          <tr>
            <td>ลาพักผ่อนประจำปี</td>
            <td><?=@$count_leave_thistime_row?></td>
            <td><?=@$total_leave_thistime_row?></td>
          </tr>
          <tr>
            <td>ลาป่วย</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          
          <tr>
            <td>กิจส่วนตัว</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
          
           <tr>
            <td>คลอดบุตร</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
          
        </tbody>
      </table>

