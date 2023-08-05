<?php

include  './part/header.php';

error_reporting(0);


echo 

  
  $firstNameError= '';
  $PhonError= '';
  $WorkingError= '';
  $SalaryError= '';
  $InstallmentError= '';
  $IddError= '';



  if (strlen($firstName) <=2) {
    $firstNameError= 'من فضلك الإسم يجب أن يكون أكثر من حرفين ';
  
   
   }if (strlen($Phon) <>10) {
    $PhonError= 'رقم الجوال لا يقل ولا يزيد عن 10 أرقام';
  
    
    }if (strlen($Working) <3) {
      $WorkingError= 'إسم جهة العمل لا تقل عن 3 حروف';
   
    
    
    }if (strlen($Salary) <3) {
      $SalaryError= 'مبلغ الراتب  لا يقل عن 4 أرقام';
   
    
     
     }if (strlen($Idd) <>10) {
      $IddError= 'رقم الهوية لا يقل ولا يزيد عن 10  أرقام';
   
    
     }
   
    if (empty( $firstNameError)) {
         $post($myEmail, $Subject , $firstName ,$Phon, $Working,$Salary,$Installment,$Support,$Idd, $headers );
}


      

?>






  <!--contactstart-->
  <section>
<div class="container "> 
    <div class="px-4 py-5 my-5 text-center bg-light">
      <h1 class="display-5 fw-bold ">إتصل بنا</h1>
        <div class="col-lg-6 mx-auto">
          <pre></pre>
         <h7 class="lead mb-4"> للتواصل معنا والإستفسار أكثر الرجاء طلب الاتصال بك وسيقوم أحد ممثلينا بالتواصل معك </h7>
    </div>
  </div>
  

 

  <form action="send.php" method="POST">
  <div class="mb-3 ">
  <span class="form-group">*</span>
    <label for="exampleInputEmail1" class="form-label">الإسم</label>
    <input  type="char" name="firstName" class="form-control" value="<?php echo $firstName ?>" id="firstName" aria-describedby="emailHelp">
    
    <div id="emailHelp" class="form-text error"> <?php
   if (isset($firstNameError)) {
    echo $firstNameError;
   }

   ?> </div>
  </div>
  
  <div class="mb-3">
  <span class="form-group">*</span>
    <label for="exampleInputEmail1" class="form-label">رقم الجوال </label>
    <input type="text" name="Phon" class="form-control"  value="<?php echo $Phon ?>" id="Phon" aria-describedby="emailHelp" require>

    <div id="emailHelp" class="form-text error"> <?php
   if (isset($PhonError)) {
    echo $PhonError;
   }

   ?> </div>
  </div>
  

   
  <div class="mb-3">
  <span class="form-group">*</span>
    <label for="exampleInputEmail1" class="form-label">جهة العمل</label>
    <input type="text" name="Working" class="form-control"  value="<?php echo $Working ?>" id="Working" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"> <?php
   if (isset($WorkingError)) {
    echo $WorkingError;
   }

   ?> </div>
  </div>
  
  <div class="mb-3">
  <span class="form-group">*</span>
    <label for="exampleInputEmail1" class="form-label">الراتب الشهري</label>
    <input type="text" name="Salary" class="form-control"  value="<?php echo $Salary ?>" id="Salary" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"> <?php
   if (isset($SalaryError)) {
    echo $SalaryError;
   }

   ?> </div>
  </div>
  
  <div class="mb-3">
  <span class="form-group">*</span>
    <label for="exampleInputEmail1" class="form-label">الإلتزامات الشهرية</label>
    <input type="text" name="Installment" class="form-control"  value="<?php echo $Installment ?>" id="Installment" aria-describedby="emailHelp">
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الدعم العقاري إن وجد</label>
    <input type="text" name="Support" class="form-control"  value="<?php echo $Support ?>" id="Support" aria-describedby="emailHelp">
    
  <div class="mb-3">
  <span class="form-group">*</span>
    <label for="exampleInputEmail1" class="form-label">رقم الهوية</label>
    <input type="number" name="Idd" class="form-control" value="<?php echo $Idd ?>" id="Idd" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"> <?php
   if (isset($IddError)) {
    echo $IddError;
   }

   ?> </div>
  </div>
  
  <pre></pre>
  <button  type="submit" name="send" class="butn" value="submit">إرسال</button>

  </div>
</form>









</div>
 </section>
<section>
 <!--footer start -->
 <footer>
    <div class="footer"></div>
    <section>
      <div class="social">
        <a href="https://wa.me/+966572768920" class="fa fa-whatsapp"></a>
        <a href="https://www.instagram.com/accounts/login/?hl=ar" class="fa fa-instagram"></a>
        <a href="https://twitter.com/i/flow/login" class="fa fa-twitter"></a>
        <a href="https://www.google.com/" class="fa fa-google"></a>
        <a href="https://www.linkedin.com/login" class="fa fa-linkedin"></a>




      </div>


      <p style="font-size: 12px;">Copyright 2023 By <span> hololfinnance</span> . All Rights Reserved<br>
        <a style="font-size: 12px;" href="mailto:info@hololfinnance.com">info@hololfinnance.com</a>
      </p>
      <p style="font-size: 11px;">الرياض الدائري الغربي  ص ب  14931</p>
      <p style="font-size: 12px;">0572768920</p>
     
    </section>