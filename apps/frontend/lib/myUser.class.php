<?php

class myUser extends sfBasicSecurityUser
{

    const ATTRIBUTE_NAMESPACE = 'localhost/user/myUser/attributes';

    public function setName($name)
    {
        $this->setAttribute('name', $name, self::ATTRIBUTE_NAMESPACE);
    }

    public function getName()
    {
        return $this->getAttribute('name', null, self::ATTRIBUTE_NAMESPACE);
    }

    public function setId($id)
    {
        $this->setAttribute('id', $id, self::ATTRIBUTE_NAMESPACE);
    }

    public function getId()
    {
        return $this->getAttribute('id', null, self::ATTRIBUTE_NAMESPACE);
    }

    public function setImage($image)
    {
        $this->setAttribute('image', $image, self::ATTRIBUTE_NAMESPACE);
    }

    public function getImage()
    {
        return $this->getAttribute('image', null, self::ATTRIBUTE_NAMESPACE);
    }

    public function getImageBase64()
    {
        return base64_encode($this->getImage());
    }

}