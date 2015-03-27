<?php
ini_set('display_errors',0);
if( isset( $_REQUEST['submit'] ))
{
$operator=$_REQUEST['operator'];
if($operator=="+")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res= $add1+$add2;
}
if($operator=="-")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res= $add1-$add2;
}
if($operator=="*")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res =$add1*$add2;
}
if($operator=="/")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res= $add1/$add2;
}
if($_REQUEST['fvalue']==NULL && $_REQUEST['lvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter values.\");</script>";
}
else if($_REQUEST['fvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter First value.\");</script>";
}
else if($_REQUEST['lvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter second value.\");</script>";
}
}
?>
<!doctype html>
<html>
<head>
    <title>Calculator</title>
 
</head>
<h1>My first calculator</h1>
<body>
<form>
<table style="border:groove white">
            <tr>
                <td style="background-color:pink; color:black; font-family:'Arial'">Enter First Number</td>
                <td colspan="1">
               
                    <input name="fvalue" type="text" style="color:black"/></td>
            <tr>
                <td style="color:black; font-family:'Arial'">Select Operator</td>
                <td>
                    <select name="operator" style="width: 63px">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select></td>
               </tr>
            <tr>
                <td style="background-color:pink; color:black; font-family:'Arial'">Enter First Number</td>
                <td class="auto-style5">
                    <input name="lvalue" type="text"  style="color:black"/></td>
               
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit" style="color:white;background-color:rosybrown" /></td>
               
            </tr>
            <tr>
                <td style="background-color:white;color:black; font-family:'Arial'">Result = </td>
                <td style="color:darkblue"><?php echo $res;?></td>
               
            </tr>
       </table>
 </form>
	</body>