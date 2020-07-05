<?php

error_reporting(E_ALL && ~E_NOTICE);

$weight=$_POST['weight'];
$height=$_POST['height'];


if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$plan=$_POST['plan'];
	$weight=$_POST['weight'];
	$height=$_POST['height'];


	//bmipart
  $mul=$height*$height;
  $bmi=$weight/$mul;
  
  echo "<br>";
}

	if($bmi<='18.5' && $_POST['plan'] == 'Vegetarian')
	{
		$masala= "We would suggest all of your meals should include some sort of carbohydrates and fatty acids, and small meals in a span of atleast 1 to 2 hours. In special cases if the diet doesn't help totally you can contact our Nutritionists for a more thorough and specialized guidance. As afterall bodily functions work differently for different people";
	}

  elseif ($bmi>18.5 && $bmi<=24.9 && $_POST['plan'] == 'Vegetarian')
	{
  $masala= "Its important for you to maintain yourself by following a proper and regulated diet and planned workout. Please stay consistent and committed to it.";
  }

	elseif ($bmi>25 && $_POST['plan'] == 'Vegetarian')
	{
		$masala= "Better Metabolism can significantly help in weight loss for you. We suggest you replace your frequent beverage or a drink like Green tea or if not into beverages a mix of lime juice in mildly hot water might help too.Also supplementary workout with a preworkout juice (suggested remedial preworkout : a mix of Beetroot juice, crushed mint, lemon with ginger and additives for taste) would keep you oxygenated during the session for better sustainance overall. For an even more serious approach you should have soup based dinners preferably no dinners at all as long as you feel enough active.";
	}

	if($bmi<='18.5' && $_POST['plan'] == 'Non Vegetarian')
	{
		$masala= "We would suggest all of your meals should include some sort of carbohydrates and fatty acids (suggestions: egg yolk), and small meals in a span of atleast 1 to 2 hours. In special cases if the diet doesn't help totally you can contact our Nutritionists for a more thorough and specialized guidance. As afterall bodily functions work differently for different people";
	}

	elseif ($bmi>18.5 && $bmi<=24.9 && $_POST['plan'] == 'Non Vegetarian')
	{
	$masala= "Better Metabolism can significantly help in weight loss for you. We suggest you replace your frequent beverage or a drink like Green tea or if not into beverages a mix of lime juice in mildly hot water might help too.Also supplementary workout with a preworkout juice (suggested remedial preworkout : a mix of Beetroot juice, crushed mint, lemon with ginger and additives for taste) would keep you oxygenated during the session for better sustainance overall. For an even more serious approach you should have soup based dinners preferably no dinners at all as long as you feel enough active.";
	}

	elseif ($bmi>25 && $_POST['plan'] == 'Non Vegetarian')
	{
		$masala= "Better Metabolism can significantly help in weight loss for you. We suggest you replace your frequent beverage or a drink like Green tea or if not into beverages a mix of lime juice in mildly hot water might help too.Also supplementary workout with a preworkout juice (suggested remedial preworkout : a mix of Beetroot juice, crushed mint, lemon with ginger and additives for taste) would keep you oxygenated during the session for better sustainance overall. For an even more serious approach you should have soup based dinners preferably no dinners at all as long as you feel enough active.";
	}

	if($bmi<='18.5' && $_POST['plan'] == 'Vegan')
	{
		$masala= "We would suggest all of your meals should include some sort of carbohydrates and fatty acids, and small meals in a span of atleast 1 to 2 hours. In special cases if the diet doesn't help totally you can contact our Nutritionists for a more thorough and specialized guidance. As afterall bodily functions work differently for different people";
	}

	elseif ($bmi>18.5 && $bmi<=24.9 && $_POST['plan'] == 'Vegan')
	{
	$masala= "Better Metabolism can significantly help in weight loss for you. We suggest you replace your frequent beverage or a drink like Green tea or if not into beverages a mix of lime juice in mildly hot water might help too.Also supplementary workout with a preworkout juice (suggested remedial preworkout : a mix of Beetroot juice, crushed mint, lemon with ginger and additives for taste) would keep you oxygenated during the session for better sustainance overall. For an even more serious approach you should have soup based dinners preferably no dinners at all as long as you feel enough active.";
	}

	elseif ($bmi>25 && $_POST['plan'] == 'Vegan')
	{
		$masala= "Better Metabolism can significantly help in weight loss for you. We suggest you replace your frequent beverage or a drink like Green tea or if not into beverages a mix of lime juice in mildly hot water might help too.Also supplementary workout with a preworkout juice (suggested remedial preworkout : a mix of Beetroot juice, crushed mint, lemon with ginger and additives for taste) would keep you oxygenated during the session for better sustainance overall. For an even more serious approach you should have soup based dinners preferably no dinners at all as long as you feel enough active.";
	}
	echo "<br>";

//bmipart   ends


$sample=array('Warm water','Soaked dry Fruits','Rava based items ','Poha','Egg Benedict','Chicken Breast','Bhurji','Ommlette','Tofu Salad','Quinoa Salad','Fruits','Salad','Veg Sabzi','Non Veg Sabzi','Multigrain Roti','Butter milk.if possible','Fruits','Glass of Milk','Sprouts','no Dinner','same as lunch');
$veg=array('Egg Benedict','Chicken Breast','Bhurji','Ommlette','tofu salad','quinoa salad','Non Veg Sabzi','no Dinner');
$nonveg=array('Rava Item ','Poha','tofu salad','quinoa salad','veg sabzi','no Dinner');
$vegan=array('Rava Item ','Poha','Egg Benedict','Chicken Breast','Bhurji','Ommlette','Non Veg Sabzi','Butter milk.if possible','Glass of Milk');

$sampsize=sizeof($sample);
$vege=sizeof($veg);
$nonvega=sizeof($nonveg);
$vega=sizeof($vega);

if ($_POST['plan'] == 'Vegetarian')
{
	for( $i=0;$i<$sampsize;$i++)

	{
     for ( $j=0; $j < $vege; $j++) {
      if ($sample[$i]==$veg[$j])
     {
        for($b=$i;$b<$sampsize+1;$b++)
      {
        $sample[$b]=$sample[$b+1];
      }
    }
  }
}
}
elseif($_POST['plan'] == 'Non Vegetarian')
{
	for( $i=0;$i<$sampsize;$i++)

	{
     for ( $j=0; $j < $nonvega; $j++) {
      if ($sample[$i]==$nonveg[$j])
     {
        for($b=$i;$b<$sampsize+1;$b++)
      {
        $sample[$b]=$sample[$b+1];
      }
    }
  }
}

}
elseif($_POST['plan'] == 'Vegan')
{
	for( $i=0;$i<$sampsize;$i++)

	{
     for ( $j=0; $j < $vega; $j++) {
      if ($sample[$i]==$vegan[$j])
     {
        for($b=$i;$b<$sampsize+1;$b++)
      {
        $sample[$b]=$sample[$b+1];
      }
    }
  }
}

}
$k="";
foreach($sample as $g)
{
	$k = $k . $g."<br>";
}


$subject = "docplus - Follow this Diet";

$message = "


<html>
<head>
<title>DOCPLUS-vDIET </title>
</head>
<body>

<h3>Hey $name! Here's a personalised diet designed just for you: </h3><br>

<h4>$k</h4>

<p>$masala</p>

<b>  </b>

<p>Thanks & Regards,<br>Team Web_Devs</p>


</body>
</html>

";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$myfromemail = "docplus@sharingofminds18.biz";
$headers .= "From: ".$myfromemail;



		@mail($email,$subject,$message,$headers);



?>
<script>alert("mail sent successfully ");</script>
<script>window.location.href="../index.php";</script>