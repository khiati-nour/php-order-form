
<?php
class products{

var $name;
var $img;
var $price;

function __construct($name, $img, $price) {
$this->name = $name;
$this->img = $img;
$this->price = $price;
}
function get_name() {
return $this->name;
}
function get_img() {
return $this->img;
}
function get_price() {
return number_format($this->price,2);
}}

?>






