<?php

$side1 = 14.8;
$side2 = 20.3;
$side3 = 25.3;
$angle1 = 36;
$angle2 = 53;
$angle3 = 91;

function triangleSides($a,$b,$c)
{
	return "side1 = " . $a . "<br/>" . "side2 = " . $b . "<br/>" . "side3 = " . $c . "<br/>";
}

function triangleAngles($a,$b,$c)
{
	return "angle1 = " . $a . "<br/>" . "angle2 = " . $b . "<br/>" . "angle3 = " . $c . "<br/>";
}

function trianglePerimeter($a, $b, $c)
{
	return "Perimeter = " . ($a + $b + $c) . "<br/>";
}

function triangleArea($a, $b, $c)
{
	$areaStart = (($a + $b + $c)/2);
	return "Area = " . (sqrt($areaStart * ($areaStart - $a) * ($areaStart - $b) * ($areaStart - $c))) . "<br/>";
	
}

function triangleSine($angle)
{
	return sin($angle);
}

function triangleCosine($angle)
{
	return cos($angle);
}

function triangleTangent($angle)
{
	return tan($angle);
}


echo triangleSides($side1, $side2, $side3);
echo triangleAngles($angle1, $angle2, $angle3);
echo trianglePerimeter($side1,$side2,$side3);
echo triangleArea($side1,$side2,$side3);
echo "Sine of angle 1 = " . triangleSine($angle1) . "<br/>";
echo "Cosine of angle 1 = " . triangleCosine($angle1) . "<br/>";
echo "Tangent of angle 1 = " . triangleTangent($angle1) . "<br/>";
echo "Sine of angle 2 = " . triangleSine($angle2) . "<br/>";
echo "Cosine of angle 2 = " . triangleCosine($angle2) . "<br/>";
echo "Tangent of angle 2 = " . triangleTangent($angle2) . "<br/>";
echo "Sine of angle 3 = " . triangleSine($angle3) . "<br/>";
echo "Cosine of angle 3 = " . triangleCosine($angle3) . "<br/>";
echo "Tangent of angle 3 = " . triangleTangent($angle3) . "<br/>";

?>