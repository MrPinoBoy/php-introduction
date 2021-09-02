<?php
declare(strict_types=1); //disable the use of any types of variable in specificaly declared variable types properties

class Recipe
{
    private $title;// public, private or protected defines the accessibility (visibility) of the properties and methods outside its class (public (everywhere), protected(only in this class and class inherited) or private(only this specific class))

    private $ingredients = array();
    private $measurements = array(
        "liter",
        "g",
        "kg",
        "cup",
        "soup spoon",
        "coffee spoon",
        "once"
    );
    private $instructions = array();
    private $yield;
    private $tags = array();
    private $source = "The crazy cooker";

    public function setTitle($title) {
        $this->title = ucwords($title);
    }

    public function getTitle(){
        return $this->title;
    }

    public function addIngredient($item, $amount = null, $measure = null){ //parameters = "wtv" sets a default value "wtv" if parameter isn't specified
        if ( $amount != null && !is_float($amount) && !is_int($amount)) {
            exit("The amount must be a float: " . gettype($amount) . " $amount given.");
        }
        if ( $measure != null && !in_array(strtolower($measure), $this->measurements)) {
            exit("Please enter a valid measurement: " . implode(",", $this->measurements));
        }
        $this->ingredients[]= array(
            "item" => ucwords($item),
            "amount" => $amount,
            "measure" => $measure
        );
    }

    public function getIngredients() {
        return $this->ingredients;
    }

    public function addInstruction($string) { //good habit to use add instead of set because here we add an item to an array
        $this->instructions[] = $string;
    }

    public function getInstruction() {
        return $this->instructions;
    }

    public function addTag($tag) {
        $this->tags[] = strtolower($tag);
    }

    public function getTag() {
        return $this->tags;
    }

    public function setYield($yield)  {
        $this->yield = $yield;
    }

    public function getYield() {
        return $this->yield;
    }

    public function setSource($source) {
        $this->source = $source;
    }

    public function getSource() {
        return $this->source;
    }

    public function __construct($title) {// when we "construct" a new Recipe ($var = new Recipe()) we can add the title in the parenthesis and it will automatically do the method on construction of the object
        $this->setTitle($title);
    }

    public function __toString() { //when the class is called as a string (echo $recipe1), it will do that
        $output = "You are calling a " . __CLASS__ . " object with the title \"";//name of class
        $output .= $this->getTitle() . "\".";
        $output .= "It is stored in " . basename(__FILE__) . " at " . __DIR__ . ".";//full path name with name of file, except with basename, only name of file - full path name without name of file
        $output .= " This display from line " . __LINE__ . " in method " . __METHOD__ . "<br>";//Current line number in the file - name of the method
        $output .= " The following methods are available for recipes in this cookbook: <br>";
        $output .= implode("<br>", get_class_methods(__CLASS__));
        return $output;
    }
}
//everytime we want to grab something from a class, we use public only before the specific grabbing method
?>