<?php
$k1 = $_POST["kcal_item1"];
$q1 = $_POST["cal1"];
$k2 = $_POST["kcal_item4"];
$q2 = $_POST["cal2"];
$k3 = $_POST["kcal_item2"];
$q3 = $_POST["cal3"];
$k4 = $_POST["kcal_item5"];
$q4 = $_POST["cal4"];
$k5 = $_POST["kcal_item7"];
$q5 = $_POST["cal5"];
$k6 = $_POST["kcal_item14"];
$q6 = $_POST["cal6"];
$k7 = $_POST["kcal_item3"];
$q7 = $_POST["cal7"];
$k8 = $_POST["kcal_item6"];
$q8 = $_POST["cal8"];
$k9 = $_POST["kcal_item8"];
$q9 = $_POST["cal9"];
$k10 = $_POST["kcal_item11"];
$q10 = $_POST["cal10"];
$k11 = $_POST["kcal_item9"];
$q11 = $_POST["cal11"];
if ($k1=='')
{$k1=0;$q1=0;}
if ($k2=='')
{$k2=0;$q2=0;}
if ($k3=='')
{$k3=0;$q3=0;}
if ($k4=='')
{$k4=0;$q4=0;}
if ($k5=='')
{$k5=0;$q5=0;}
if ($k6=='')
{$k6=0;$q6=0;}
if ($k7=='')
{$k7=0;$q7=0;}
if ($k8=='')
{$k8=0;$q8=0;}
if ($k9=='')
{$k9=0;$q9=0;}
if ($k10=='')
{$k10=0;$q10=0;}
if ($k11=='')
{$k11=0;$q11=0;}
$total =($k1*$q1)+($k2*$q2)+($k3*$q3)+($k4*$q4)+($k5*$q5)+($k6*$q6)+($k7*$q7)+($k8*$q8)+($k9*$q9)+($k10*$q10)+($k11*$q11);
?>