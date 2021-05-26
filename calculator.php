<!DOCTYPE html>
<html>
<head>
<title> Calculator Page </title>



<style>

.form{
    margin-top:50px;
    margin-left:50px;
}

h3{
    margin-left:500px;
    margin-top:50px;

}

.submit{
    margin-left:250px;
}

.table, th, td {
  border: 1px solid black;
}
.table{
    margin-left: 50px;
    margin-top: 50px ;
}

</style>
</head>




<body>

<?php
        if (isset($_POST['salary']) && isset($_POST['tax']) && isset($_POST['option'])) {
            $salary = (float) $_POST['salary'];
            $tax = (float) $_POST['tax'];
            $option = $_POST['option'];
            
        } else {
            $salary = 0;
            $tax = 0;
            $ssf=0;
        }
        if($salary<10000){
            if($_POST['option'] === 'monthly'){
                $tax = round(($salary * 0));
                $ssf=0;
            }
            else{
                $tax = round(($salary * 0));
                $tax_yearly = $tax/12;
                $ssf_yearly=0;
            }
        }
        elseif($salary<25000 && $salary>10000){
            if($_POST['option'] === 'monthly'){
            $tax = round(($salary * 11) / 100, 2);
            $ssf = round(($salary * 4 ) /100 ,2);
            }
            else{
                $tax = round(($salary * 11) / 100, 2);
                $tax_yearly = $tax/12;
                $ssf_yearly = round(($salary * 4 ) /100 ,2);
            }
        }
        elseif($salary<50000 && $salary>25000){
            if($_POST['option'] === 'monthly'){
            $tax = round(($salary * 30) / 100, 2);
            $ssf = round(($salary * 4 ) /100 ,2);
            }
            else{
                $tax = round(($salary * 30) / 100, 2);
                $tax_yearly = $tax/12;
                $ssf_yearly = round(($salary * 4 ) /100 ,2);
            }
        }
        else{
            if($_POST['option'] === 'monthly'){
            $tax = round(($salary * 45) / 100, 2);
            $ssf = round(($salary * 4 ) /100 ,2);
            }
            else{
                $tax = round(($salary * 45) / 100, 2);
                $tax_yearly = $tax/12;
                 $ssf_yearly = round(($salary * 4 ) /100 ,2);
            }
        }
        $finalAmount = round($salary - $tax, 2);
    ?>
   

<h3>Income tax calculator</h3>

<div class="form">

<form action="" method="POST">
            <label for="salary">Salary in USD</label>
            <br><br>
            <input type="number" id="salary" name="salary" 
            value="<?=$salary ?>" >
            <br><br>
            
            <label for="tax">Tax percentage</label>
            <br><br>
            <input type="number" id="tax" name="tax" 
            value="<?=$tax ?>" required pattern="[0-9]" step="0.01" min="0" max="100"><br><br>
            <label>Tax free</label>
            <input type="checkbox"><br>
            <br><label>Options :</label><br><br>


                <input type="radio" id="yearly" name="option" value="yearly" required>
                <label for="yearly">yearly</label><br>


                <input type="radio" id="monthly" name="option" value="monthly" required>
                <label for="monthly">monthly</label><br><br>


            <input type="Submit" value="Calculate" id="calculateBtn">
        </form>
  

   



</div>

<table class="table">
<tr>
    <th> </th>
    <th>Monthly</th>
    <th>Yearly</th> 
  </tr>
  <tr>
    <td>Total salary</td>
    <td></td>
    <td><?=$salary ?> </td>
  </tr>
  <tr>
    <td>Tax amount</td>
    <td> <?=$tax?></td>
    <td> <?=$tax_yearly?></td>
  </tr>
  <tr>
    <td>Social security fee</td>
    <td><?=$ssf ?></td>
    <td> <?=$ssf_yearly ?> </td>
  </tr>
  <tr>
    <td>Salary after tax</td>
    <td> </td>
    <td> <?=$finalAmount ?> </td>
  </tr>

</body>
</html>