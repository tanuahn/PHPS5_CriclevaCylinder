<?php
include_once 'Cricle1.php';
class Cylinder extends Cricle{
    public $chieuCao;

    public function __construct($banKinh, $mau, $chieuCao)
    {
        parent::__construct($banKinh, $mau);
        $this->chieuCao = $chieuCao;
    }

    public function getChieuCao()
    {
        return $this->chieuCao;
    }

    public function setChieuCao($chieuCao)
    {
        $this->chieuCao = $chieuCao;
    }

    public function tinhDienTich()
    {
        return parent::tinhDienTich() * 2 + parent::tinhChuVi() * $this->chieuCao;
    }

    public function tinhChuVi()
    {
        return parent::tinhDienTich() * $this->chieuCao;
    }

    public function __toString()
    {
        return 'Ban kinh: ' . $this->getBanKinh() . '.<br/> Mau: ' . $this->getMau() . '.<br/> Chieu cao: ' . $this->getChieuCao() .'.<br/> Dien Tich: '.$this->tinhDienTich();  // TODO: Implement __toString() method.
    }
}
?>