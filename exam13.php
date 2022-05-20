<?php
trait TComic
{
    function getCharacterName()
    {
        return $this->characterName;
    }
    function setCharacterName($name)
    {
        $this->characterName = $name;
    }
}
class Marvel
{
    private $characterName;
    use TComic;
}
class DC
{
    private $characterName;
    use TComic;
}

$marvel = new Marvel();
$marvel->setCharacterName('Iron Man');
echo $marvel->getCharacterName();
