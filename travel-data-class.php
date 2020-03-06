<?php

include('travel-photo-class.php');

$continents = array("Asia","Africa","Europe","North America","South America", "Oceania");

$countries = array();
$countries["US"] = "United States";
$countries["DE"] = "Germany";
$countries["GH"] = "Ghana";
$countries["CA"] = "Canada";
$countries["GB"] = "United Kingdom";


$images = array();
$images [] = new TravelPhoto("images/cntower1.jpg", "CN Tower","Concrete communications and observation tower. Built on the former Railway Lands, it was completed in 1976. Its name 'CN' originally referred to Canadian National, the railway company that built the tower.", 0,0);
$images [] = new TravelPhoto("images/eiffel1.jpg", "Eiffel Tower","Constructed from 1887 to 1889 as the entrance to the 1889 Worlds Fair. The tower is 324 metres (1,063 ft) tall, about the same height as an 81-storey building, and the tallest structure in Paris. Its base is square, measuring 125 metres (410 ft) on each side.", 0,0);
$images [] = new TravelPhoto("images/sphinx1.jpg", "Great Sphinx of Giza","A limestone statue of a reclining sphinx, a mythical creature with the body of a lion and the head of a human. The face of the Sphinx is generally believed to represent the pharaoh Khafre.", 0,0);
$images [] = new TravelPhoto("images/pisa1.jpg", "Leaning Tower of Pisa","The campanile, or freestanding bell tower, of the cathedral of the Italian city of Pisa, known worldwide for its nearly four-degree lean, the result of an unstable foundation.", 0,0);
$images [] = new TravelPhoto("images/tajMahal1.JPG", "Taj Mahal","An ivory-white marble mausoleum on the south bank of the Yamuna river in the Indian city of Agra. It was commissioned in 1632 by the Mughal emperor Shah Jahan (reigned from 1628 to 1658) to house the tomb of his favourite wife, Mumtaz Mahal.", 0,0);

  
?>