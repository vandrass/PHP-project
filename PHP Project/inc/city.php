<!--CLASS CITY -->
<?php

class City
{
    protected $city_code;
    protected $city_name;
                                    //GETTERS SETTERS 
public function getCityId()
    {
    return $this->city_code;
    }
public function setCityId($id)
{
    $this->city_code = $id;
}
public function getCityName()
{
    return $this->city_name;
}
public function setCityName($name)
{
    $this->city_name = $name;
}
                                    //Destractor -> free obj 
public function __destruct(){
    $this->city_code="";
    $this->city_name="";    
    
}
}
?>