<?php 

require 'AnimalModel.php';

$age = "12";
$category = "house animal";
$name = "Funia";

$cat = new Animal($age, $category, $name);

$serializedCat = serialize($cat);

$unserializedCat = unserialize($serializedCat);

echo "<h2>Serialized animal bbject:</h2>";
echo "<pre>" . htmlspecialchars($serializedCat) . "</pre>"; 

echo "<h2>Animal properties taken from unserialized object:</h2>";
echo "<ul>";
echo "<li><strong>Age:</strong> " . htmlspecialchars($unserializedCat->getAge()) . "</li>";
echo "<li><strong>Category:</strong> " . htmlspecialchars($unserializedCat->getCategory()) . "</li>";
echo "<li><strong>Name:</strong> " . htmlspecialchars($unserializedCat->getName()) . "</li>";
echo "</ul>";
