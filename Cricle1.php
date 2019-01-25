<?php

class Cricle
{
    public $banKinh;
    public $mau;

    public function __construct($banKinh, $mau)
    {
        $this->banKinh = $banKinh;
        $this->mau = $mau;
    }

    public function getBanKinh()
    {
        return $this->banKinh;
    }

    public function getMau()
    {
        return $this->mau;
    }

    public function setBanKinh($banKinh)
    {
        $this->banKinh = $banKinh;
    }

    public function setMau($mau)
    {
        $this->mau = $mau;
    }

    public function tinhDienTich(){
        return pi() * pow($this->banKinh, 2);
    }

    public function tinhChuVi(){
        return pi() * $this->banKinh * 2;
    }

    public function __toString()
    {
     return 'Ban kinh: ' . $this->getBanKinh() . '.<br/> Mau: ' . $this->getMau() . '.<br/>';   // TODO: Implement __toString() method.
    }
}
?>