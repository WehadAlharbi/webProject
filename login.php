<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> التسجيل </title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Mada:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>
  <nav  id="navbar" class="bg-dark "  >
        <div class="logo">
          <a href="#home"><img src="logoo.png" alt=" Logo"></a>
        </div> 
  
        <ul dir="rtl">
          <li><a href="home.php">الرئيسية</a></li>
          <li><a href="#">من نحن </a></li>
          <li><a href="project1.html">التغذيه</a></li>
          <li><a href="#">الرياضه</a></li>
          <li><a href="#">احسب سعراتك</a></li>
         <li><a href="contact.html">التواصل معنا</a></li>
   <li><a href="#">التسجيل</a></li>
        </ul>
    </nav>
    
    <div id="content">
    12 - 4 - 1442  <br>
  يوم بداية الحلم وميلاد الحكاية، فيه طموحنا يكبر وبكم يفخر
  هو يوم وضعنا فيه مزاجكم غايتنا وخدمته هدفنا..<br>
  وبهذه المناسبة سجل دخولك لتدخل بالسحب على ايفون 12
</div>
      <div class="login-box">
      <div class="row1">
        <div class="col-md-6-left">
          <h2 dir=rtl>سجل من هنا </h2>
		  <br>
          <form   name="f1"action="validation.php"  onsubmit="return validation()"method="post">
            <div class="form-group" dir=rtl>
              <label> اسم المستخدم</label>
              <input type="text" name="user" class="form-control" >
            </div>
			<br>
            <div class="form-group" dir=rtl>
              <label> كلمة السر</label>
              <input type="password" name="password" class="form-control" >
            </div>
			<br>
            <button type="submit" class="btn"> تسجيل </button>
          </form>
          </div>
          <div class="col-md-6-right">
            <h2 dir=rtl> تسجيل الدخول</h2>
			<br>
            <form  action="register.php" method="post">
              <div class="form-group" dir=rtl>
                <label> اسم المستخدم</label>
                <input type="text" name="user" class="form-control" required>
              </div>
			  <br>
              <div class="form-group" dir=rtl>
                <label> كلمة السر</label>
                <input type="password" name="password" class="form-control" required>
              </div>
			  <br>
              <button type="submit" class="btn"> دخول </button>
            </form>
            </div>
           </div>
      </div>
  <script src="script.js">
    </script>
</body>
</html>
