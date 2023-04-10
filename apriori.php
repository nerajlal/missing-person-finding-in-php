<!DOCTYPE HTML>
<html>
<head> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
	<title>Apriori Alghoritm</title>
</head>
<body>
<?php   
include 'classes/class.apriori.php';
include 'settings/settings.php';

$Apriori = new Apriori();

$Apriori->setMaxScan(20);       //Scan 2, 3, ...
$Apriori->setMinSup(2);         //Minimum support 1, 2, 3, ...
$Apriori->setMinConf(75);       //Minimum confidence - Percent 1, 2, ..., 100
$Apriori->setDelimiter(',');    //Delimiter 
 
$dd="select * from case_sheet";

$ex=mysql_query($dd);
$dataset1   = array();
while ($rr=mysql_fetch_array($ex)) {
	# code...
	$dataset1[]=$rr;


}

$dd1="select id from case_sheet";
$ex1=mysql_query($dd1);
$dataset2   = array();
while ($rr1=mysql_fetch_array($ex1)) {
	# code...
	$dataset2[]=$rr1;


}

$dd2="select id from missing_person";
$ex2=mysql_query($dd2);
$dataset3   = array();
while ($rr2=mysql_fetch_array($ex2)) {
	# code...
	$dataset3[]=$rr2;


}
//print_r($dataset3);exit;
//Use Array:

$dataset[] = $dataset1; 
$dataset[] = $dataset2;   
$dataset[] = $dataset3; 
/*$dataset[] = array('A', 'B', 'D', 'C'); 
$dataset[] = array('A', 'B', 'E', 'C'); 
$dataset[] = array('A', 'E', 'C');*/ 
//print_r($dataset);exit;
$Apriori->process($dataset);

//$Apriori->process('dataset.txt');

//Frequent Itemsets
//echo '<h1>Frequent Itemsets</h1>';
//$Apriori->printFreqItemsets();

//echo '<h3>Frequent Itemsets Array</h3>';
//print_r($Apriori->getFreqItemsets()); 

//Association Rules
//echo '<h1>Association Rules</h1>';
//$Apriori->printAssociationRules();

//echo '<h3>Association Rules Array</h3>';
//print_r($Apriori->getAssociationRules()); 

//Save to file
$Apriori->saveFreqItemsets('freqItemsets.txt');
$Apriori->saveAssociationRules('associationRules.txt');
?>  
</body>
</html>