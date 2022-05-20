<?php
interface IComic
{
    function getCharacterName();
    function setCharacterName($name);
}
class Marvel implements IComic
{
    private $characterName;
    public function getCharacterName()
    {
        return $this->characterName;
    }
    public function setCharacterName($characterName)
    {
        $this->characterName = $characterName;
    }
}
class DC implements IComic
{
    private $characterName;
    public function getCharacterName()
    {
        return $this->characterName;
    }
    public function setCharacterName($characterName)
    {
        $this->characterName = $characterName;
    }
}

$marvel = new Marvel();
$marvel->setCharacterName('Iron Man');
echo $marvel->getCharacterName();

$dc = new DC();
$dc->setCharacterName('Batman');
echo $dc->getCharacterName();
