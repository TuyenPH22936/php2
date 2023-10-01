<?php
//tạo 1 class GiangVien gồm các thuộc tính :maGV,tenGV,luongCB,soGioday
// tạo phương thức khởi tạo có tham số truyền vào cho class trên
// xây dựng phương thức tinhLuong có trả về = luongCB * soGioday
// xây dựng phương thức tinhThamNien có trả về
// = namHienTai - namBatDau
// xây dựng hàm hiển thị thông tin gồm các thông tin
//maGV,tenGV,namBatDau,
//Tongluon,thamnien
class GiangVien
{
    public $maGV;
    public $tenGV;
    public $namBatDau;
    public $luongCB;
    public $soGioday;
    public $namHienTai;

    public function __construct($maGV, $tenGV, $namBatDau, $luongCB, $soGioday)
    {
        $this->maGV = $maGV;
        $this->tenGV = $tenGV;
        $this->namBatDau = $namBatDau;
        $this->luongCB = $luongCB;
        $this->soGioday = $soGioday;
    }
    public function tinhLuong()
    {
        return $this->soGioday * $this->luongCB;
    }
    public function tinhThamNien()
    {
        return date('Y') - $this->namBatDau;
    }
    public function hienThi()
    {
        echo "maGV : " . $this->maGV . "<br>";
        echo "tenGV : " . $this->tenGV . "<br>";
        echo "namBatDau : " . $this->namBatDau . " <br>";
        echo "luongCB : " . $this->luongCB . " VND <br>";
        echo "soGioday : " . $this->soGioday . " gio <br>";
        echo "tinhLuong : " . $this->tinhLuong() . " VND <br>";
        echo "ThamNien : " . $this->tinhThamNien() . " nam";
    }
}
$gv = new GiangVien('PH1', 'Pham Van Tuyen', 2021, 20000, 50);
$gv->hienThi();
