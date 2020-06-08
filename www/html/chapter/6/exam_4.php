<?php

namespace Meals;
class Ingredient {
protected $name;
protected $cost;
public function __construct($name, $cost) {
$this->name = $name;
$this->cost = $cost;
}
public function getName() {
return $this->name;
}
public function getCost() {
return $this->cost;
}
// このメソッドは費用を新しい値に設定する
public function setCost($cost) {
$this->cost = $cost;
}
}

class PricedEntree extends Entree {
public function __construct($name, $ingredients) {
parent::__construct($name, $ingredients);
foreach ($this->ingredients as $ingredient) {
if (! $ingredient instanceof \Meals\Ingredient) {
throw new Exception('Elements of $ingredients must be
Ingredient objects');
}
}
}
public function getCost() {
$cost = 0;
foreach ($this->ingredients as $ingredient) {
$cost += $ingredient->getCost();
}
return $cost;
}
}