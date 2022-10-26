<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet" integrity="sha384">
</head>
<body>


     <!-- form header -->
    <div class="form-header">
         <h1>Create Account</h1>
    </div>
    
 <form class="signup-form" action="user_data.php" method="POST">
    <!-- form body -->
    <div class="form-body">
         <!-- Firstname and Lastname -->
        <div class="horizontal-group">
        <div class="form-group left">
            <label for="firstname" class="label-title">First name *</label>
            <input type="text" name="firstname" class="form-input" placeholder="enter your first name" required="required" />
        </div>
        <div class="form-group right">
            <label for="lastname" class="label-title">Last name</label>
            <input type="text" name="lastname" class="form-input" placeholder="enter your last name" />
        </div>
        </div>
        <!-- Email -->
         <div class="form-group">
             <label for="email" class="label-title">Email*</label>
             <input type="email" name="email" class="form-input" placeholder="enter your email" required="required">
         </div>
         <div class="form-group">
             <label for="number" class="label-title">Phone No*</label>
             <input type="text" name="number" class="form-input" placeholder="enter your phone no" required="required">
         </div>
         <div class="form-group">
             <label for="dob" class="label-title">Data of Birth*</label>
             <input type="text" name="dob" class="form-input" placeholder="enter your DOB (29/07/2000)" required="required">
         </div>
         <div class="form-group">
             <label for="sex" class="label-title">Gender*</label>
             <input type="text" name="sex" class="form-input" placeholder="enter your sex" required="required">
         </div>
         <div class="form-group">
             <label for="state" class="label-title">State*</label>
             <input type="text" name="state" class="form-input" placeholder="enter your state" required="required">
         </div>
         <div class="form-group">
             <label for="country" class="label-title">Country*</label>
             <input type="text" name="country" class="form-input" placeholder="enter your country" required="required">
         </div>
    </div>

    <!-- form footer -->
    <div class="form-footer">
        <span>* required</span>
         <button type="submit" name="submit" class="btn">Create</button>

    </div>
</form>    
</body>
</html>