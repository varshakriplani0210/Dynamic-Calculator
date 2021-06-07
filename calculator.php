<html>

<head>
    <title>Calculator</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: #393e46;
        }
        
        .main-div {
            background-color: #eeeeee;
            width: 600px;
            height: 400px;
            position: absolute;
            top: 20%;
            left: 30%;
            border-radius: 5px;
        }
        
        .nam {
            color: #00adb5;
            /* margin-left: 25%; */
            padding: 40px 25%;
        }
        
        .form {
            padding: 20px 10%;
            margin: 0px;
        }
        
        .square content {
            margin: 20px;
            padding: 30px;
        }
        
        .one {
            margin: 0px 30px 40px;
            padding: 10px;
        }
        
        .two {
            padding: 10px;
        }
        
        .drop {
            padding: 5px 0px 5px 40%;
        }
        
        .dropping {
            padding: 10px;
            background-color: #393e46;
            color: #eeeeee;
            border-radius: 5px;
        }
        
        .sub {
            padding: 20px 0px 5px 40%;
        }
        
        .su {
            padding: 10px;
            background-color: #eeeeee;
            color: #393e46;
            border-radius: 5px;
        }
        
        .app-form-data-collect {
            background-color: #393e46;
            color: #eeeeee;
            height: 30px;
            font-weight: bolder;
            font-size: 20px;
            
        }
        p{
            text-align:center;
        }
    </style>


</head>

<body>
    <div class="main-div">
        <h1 class="nam"> PHP CALCULATOR</h1>
        <div class="form">
            <div class="square content">
                <form method="POST">
                    <input type="text" placeholder="Enter 1st number" name="first" class="one">
                    <input type="text" placeholder="Enter 2nd number" name="second" class="two">
            </div>
            <div class="drop">
                <select name="operation" class="dropping">
               <option value="add">ADD</option>
               <option value="sub">SUB</option>
               <option value="mul">MUL</option>
               <option value="div">DIV</option>
            </select>
            </div>
            <div class="sub">
                <input type="submit" value="Submit" name="submit" class="su">
            </div>
        </div>
        </form>



        <div class="app-form-data-collect">
            <p>
                <?php
                  if(isset($_POST['submit']))
                  {
                      $num1=$_POST['first'];
                      $num2=$_POST['second'];
                      $op=$_POST['operation'];
                      
                      switch($op)
                      {
                          case "add" : 
                           $sum=$num1+$num2;
                          echo "The addition of {$num1} and {$num2} is {$sum}";
                          break;
                          case "sub" : 
                           $sum=$num1-$num2;
                          echo "The Substraction of {$num1} and {$num2} is {$sum}";
                          break;
                          case "mul" : 
                           $sum=$num1*$num2;
                          echo "The Multiplication of {$num1} and {$num2} is {$sum}";
                          break;
                          case "div" : 
                           $sum=$num1/$num2;
                          echo "The Division of {$num1} and {$num2} is {$sum}";
                          break;
                      }
                       
                  }




             ?>
            </p>
        </div>
    </div>

</body>

</html>