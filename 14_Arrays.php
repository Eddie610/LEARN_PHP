<?php
echo "<b>INTEXED ARRAY</b>";
echo "<br>";
$Students=array("Edward","John","Peter","Pual");
echo $Students[0], "is inovetive";echo "<br>";
//Another way of writing an indexed array
/* $data=['name','age','gender'];
$details[$data[0]]="Luwambo";
echo $details[0]; */
echo "<b>ASSOSIATIVE ARRAY</b>";
echo "<br>";
$STUDENT['name']='Edward';
$STUDENT['age']='27';
$STUDENT['gender']='Male';

echo 'NAME:',$STUDENT['name'];
echo "<br>";
echo 'AGE:',$STUDENT['age'];
echo "<br>";
echo 'GENDER:',$STUDENT['gender'];
echo "<br>";
echo "<b>MULTIDIMENTIONAL ARRAY</b>";
echo "<br>";
$Car_bond=array(array('car_name', 'In_stock'),
             array('volvo',10),
             array('subaru',20),
             array('audi',30)  ) ;
echo $Car_bond[0][0],':',$Car_bond[0][1],'.<br>';
echo $Car_bond[1][0],':',$Car_bond[1][1],'.<br>';
echo $Car_bond[2][0],':',$Car_bond[2][1],'.<br>';
echo $Car_bond[3][0],':',$Car_bond[3][1],'.<br>';