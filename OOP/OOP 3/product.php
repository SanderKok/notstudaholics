<?php
#abstract class with values that matter to the child classes
abstract class Product {
    #creates variables
    private $name;
    private $purchaseprice;
    private $category;
    private $btw;
    private $description = [];
    private $profit;

    #sets the values
    public function setProduct($name, $purchaseprice, $category, $btw, $profit) {
        $this->name = $name;
        $this->purchaseprice = $purchaseprice;
        $this->category = $category;
        $this->btw = $btw;
        $this->profit = $profit;
    }

    #creates an array of all the items creates in the child classes
    public function addDescription() {
        $this->description[] = $this->desc;
    }

    #print all the product info
    public function getProduct() {
        print "<h1>".$this->category.": ".$this->name."</h1>";
        foreach ($this->description as $song) {
            print "    ".$song."<br>";
        }
        return "<h2>Price: $".($this->purchaseprice + ($this->purchaseprice / 100 * $this->btw) + $this->profit)."</h2>";
    }
}
?>