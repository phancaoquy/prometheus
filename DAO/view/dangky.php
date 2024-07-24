<?php
$html_svlist = show_sv();
?>
<div class="containerfull">
   <div class="bgbanner">ĐĂNG KÝ THÀNH VIÊN</div>
</div>

<section class="containerfull sheight">
   <div class="container">

      <div class="boxright">
         <h1>ĐĂNG KÝ</h1><br>
         <div class="containerfull mr30">
            <form action="index.php?pg=adduser" method="post">
               <div class="row">
                  <div class="col-25">
                     <label for="username">Họ và tên</label>
                  </div>
                  <div class="col-75">
                     <input type="text" id="" name="name" placeholder="Nhập tên đi">
                  </div>
               </div>
               <div class="row">
                  <div class="col-25">
                     <label for="password">Ngày sinh</label>
                  </div>
                  <div class="col-75">
                     <input type="date" id="" name="birthday" placeholder="Nhập ngày sinh">
                  </div>
               </div>
               <div class="row">
                  <div class="col-25">
                     <label for="repassword">Điểm</label>
                  </div>
                  <div class="col-75">
                     <input type="text" id="" name="mark" placeholder="Điểm">
                  </div>
               </div>



               <br>
               <div class="container-but">
                  <input type="submit" class="button green" name="add" value="Thêm">


               </div>
            </form>
            <?php if (isset($alert)): ?>
               <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
                  <?php echo $alert ?>
               </div>
            <?php endif ?>

         </div>
      </div>
         <table>
         <th>Id</th>
               <th>Tên</th>
               <th>Ngày sinh</th>
               <th>Điểm</th>
               <th>Học lực</th>
         <?php
             foreach ($html_svlist as $sv) {
               extract($sv);
                  $ap = "";
                  if($mark <= 5 && $mark > 0) {
                      $ap = "Trung Bình";
                  } else if ($mark <= 8) {
                      $ap = "Khá";
                  } else {
                      $ap = "Giỏi";
                  }
            
               echo ' <tr>
               <td data-label="Id">'.$id.'</td>
               <td data-label="Username">'.$name.'</td>
               <td data-label="Name">'.$birthday.'</td>
               <td data-label="Password">'.$mark.'</td>
               <td data-label="Password">'.$ap.'</td>
               
               <td class="actions-cell">
                 <div class="buttons right nowrap">
                   <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                     <span class="icon"><i class="mdi mdi-eye"></i></span>
                   </button>
                   <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                     <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                   </button>
                 </div>
               </td>
             </tr>';
           }
         ?>
         </table>
</section>