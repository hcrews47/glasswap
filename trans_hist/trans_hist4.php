<?php
include_once 'connection.php';
//include_once ''
// require 'simple_html_dom.php';
//require_once('simple_html_dom.php');

//$url = substr($_SERVER['REQUEST_URI'],-19,19);
//$url = "localhost:8080" . $url;
//$html = file_get_html($url);

//$dom = new DOMDocument;
// $dom->loadHTMLFile($url);
// $finder = new DomXPath($dom);
$conn    = Connect();
//if(isset($_POST['action'])){
  $User = "hcrews47";
  $Email = "jhc6we@virginia.edu";
  // $item_node = $finder->query("//*[contains(@class, prod_name)]");
  // $Item = $item_node->item(1)->textContent;
  // $cost_node = $finder->query("//*[contains(@class, cost)]");
  // $Cost_s = $cost_node->item(1)->textContent;
  // $Cost = (int)$Cost_s;
  // foreach($cost_node as $node){
  //   echo $node->textContent;
  // }
  $Item = 'You think Fast';
  $Cost = 17.25;

  // $Item = $html->find('span[class=prod_name]',0)->innertext;
  // $Cost = $html->find('strong[class=cost]', 0)->innertext;
  $query   = "INSERT INTO transaction_history (user,email,item,cost) VALUES('$User','$Email','$Item','$Cost')";
  $result = mysqli_query($conn,$query);
  //echo "$Item, $Cost";
//}
?>
