<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PitagoController extends Controller
{
    protected $date = 13;
    protected $month = 9;
    protected $year = 1985;
    protected $name = "nguyễn mạnh sơn";
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('pitago');
    }

    public function van_hanh($date){
        if($date != 11 && $date != 13 && $date != 22){
            $van_hanh = $this->date($date);
            if($van_hanh >= 10 && $van_hanh != 11 && $van_hanh != 13 && $van_hanh != 22 && $van_hanh != 33){
                $van_hanh = $this->date($van_hanh);
            }
        }
        if($date == 11 || $date == 13 || $date == 22 ||$date == 33){
            $van_hanh = $date.'/'.$this->date($date);
            $van_hanh = $date.'/'.$this->date($date);
        }
        return $van_hanh;
    }

    public function thai_do($date,$month){
        $thai_do = $this->date($date) + $this->month($month);
        if($thai_do >= 10 && $thai_do != 11 && $thai_do != 13 && $thai_do  != 22 && $thai_do != 33){
            $thai_do = $this->date($thai_do);
            if($thai_do >= 10){
                $thai_do = $this->date($thai_do);
            }
        }
        if($thai_do == 11 || $thai_do == 13 ||$thai_do == 22 || $thai_do == 33){
            $thai_do = $thai_do.'/'.$this->date($thai_do);
        }

        if($date == 11 || $date == 13 || $date == 22){
            $thai_do = $date + $this->date($month);
            if($thai_do >= 10 && $thai_do != 11 && $thai_do != 13 && $thai_do != 22 && $thai_do != 33 && $thai_do != 44 && $thai_do != 55){
                $thai_do = $this->date($thai_do);
            }
            if($thai_do == 11 || $thai_do == 13 || $thai_do == 22 || $thai_do == 33 || $thai_do == 44 || $thai_do == 55){
                $thai_do = $thai_do.'/'.$this->date($thai_do);
            }
        }
        if(($date == 11 && $month == 11) || ($date == 13 && $month == 11) || ($date == 22 && $month == 11)){
            $thai_do = $date + $month;
            if($thai_do == 11 || $thai_do == 22 || $thai_do == 33 || $thai_do == 44){
                $thai_do = $thai_do.'/'. $this->date($thai_do);
            }
        }

        $date_thai_do = $this->date($date);
        if($date_thai_do == 11 || $date_thai_do == 13 || $date_thai_do == 22 || $date_thai_do == 33){
            $thai_do = $date_thai_do + $this->date($month);
            if($thai_do == 11 || $thai_do == 13 || $thai_do == 22 || $thai_do == 33){
                $thai_do = $thai_do.'/'.$this->date($thai_do);
            }
        }

        $thai_do_6 = $this->date($date + $this->date($month));
        if($thai_do_6 == 11 || $thai_do_6 == 13 || $thai_do_6 == 22 || $thai_do_6 == 33){
            $thai_do = $thai_do_6.'/'.$this->date($thai_do_6);
        }
        return $thai_do;
    }


    public function duong_doi_kieu_1($date,$month,$year){
        $life = (int)$date + (int)$month + $this->year($year);
        if($life >= 10){
            $life_1 = $life.'/'.$this->date($life);
            $num_year = $this->date($life);
            if($this->date($life) >= 10){
                $duong_doi_kieu_1 = $life_1.'/'.$this->date($num_year);
            }else{
                $duong_doi_kieu_1 = $life.'/'.$this->date($life);
            }
        }else{
            $duong_doi_kieu_1 = $life;
        }
        return $duong_doi_kieu_1;
    }

    public function duong_doi_kieu_2($date,$month,$year){
        $duong_doi_kieu_2 = $this->date($date) + $this->month($month) + $this->year($year);
        $duong_doi = $duong_doi_kieu_2;
        if($duong_doi_kieu_2 == 11 || $duong_doi_kieu_2 == 13 || $duong_doi_kieu_2 == 22 || $duong_doi_kieu_2 == 33 || $duong_doi_kieu_2 == 55){
            $duong_doi_kieu_2 = $duong_doi_kieu_2.'/'.$this->date($duong_doi_kieu_2);
        }else{
            if($duong_doi_kieu_2 >= 10 ){
                $duong_doi_kieu_2 = $duong_doi_kieu_2.'/'.$this->date($duong_doi_kieu_2);
                $duong_doi_kieu_2_1 = $this->date($duong_doi_kieu_2);
                if($duong_doi_kieu_2_1 >= 10){
                    $duong_doi_kieu_2 = $duong_doi.'/'.$duong_doi_kieu_2_1.'/'.$this->date($duong_doi_kieu_2_1);
                }
            }
        }

        return $duong_doi_kieu_2;
    }

    public function ten($name){
        $name = $this->name($this->vn_to_str($name));
        $ten = $this->masterName($name);
        if($ten >= 10 && $ten != 11 && $ten != 13 || $ten != 22 || $ten != 33 || $ten != 44 || $ten != 55){
            $name = $this->date($ten);
            if($name == 11 || $name == 13 || $name == 22 ||$name == 33 || $name == 44){
                $name = $name.'/'.$this->date($name);
            }
            if($name >= 10 ){
                $name= $this->date($name);
            }
        }
        if($ten == 11 || $ten == 13 || $ten == 22 || $ten == 33 || $ten == 44 || $ten == 55){
            $name = $ten.'/'.$this->date($ten);
        }

        return $name;
    }

    public function linh_hon($name){
       $linh_hon = $this->soul($this->vn_to_str($name));

        if($linh_hon == 11 || $linh_hon == 22 || $linh_hon == 33 || $linh_hon == 44 || $linh_hon == 55 || $linh_hon == 13){
            $linh_hon = $linh_hon.'/'.$this->date($linh_hon);
        }else{
            $linh_hon = $this->date($linh_hon);
            if($linh_hon == 11 || $linh_hon == 13 || $linh_hon == 22 || $linh_hon == 44){
                $linh_hon = $linh_hon.'/'. $this->date($linh_hon);
            }else{
                $linh_hon = $this->date($linh_hon);
            }
        }
        return $linh_hon;
    }

    public function nhan_cach($name){
        $nhan_cach = $this->personality($this->vn_to_str($name));
        if($nhan_cach == 11 || $nhan_cach == 13 || $nhan_cach == 22 || $nhan_cach == 33 || $nhan_cach == 44 ){
            $nhan_cach = $nhan_cach.'/'.$this->date($nhan_cach);
        }else{
            $nhan_cach = $this->masterName($nhan_cach);
            if($nhan_cach >= 10 && $nhan_cach != 11 && $nhan_cach != 13 && $nhan_cach != 22 && $nhan_cach != 33){
                $nhan_cach = $this->date($nhan_cach);
            }
            if($nhan_cach == 11 || $nhan_cach == 13 || $nhan_cach == 22 || $nhan_cach == 33 || $nhan_cach == 44){
                $nhan_cach = $nhan_cach.'/'.$this->date($nhan_cach);
            }
        }

        return $nhan_cach;
    }

    public function m_1($tuoi_m_1,$year){
        $m_1 = $tuoi_m_1 + (int)$year;
        return $m_1;
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function post(Request $request){
        $data = [
            'date' => $request->get('date'),
            'month' => $request->get('month'),
            'year' => $request->get('year'),
            'name' => $request->get('name'),
            'van_hanh' => $this->van_hanh($this->date),
            'thai_do' => $this->thai_do($this->date,$this->month),
            'duong_doi_kieu_1' => $this->duong_doi_kieu_1($this->date,$this->month,$this->year),
            'duong_doi_kieu_2' => $this->duong_doi_kieu_2($this->date,$this->month,$this->year),
            'ten' => $this->ten($this->name),
            'linh_hon' => $this->linh_hon($this->name),
            'nhan_cach' => $this->nhan_cach($this->name),
            'tuoi_m_1' => $this->year($this->year),
            'chu_ky_thang' => $this->date($this->month($this->month)),
            'chu_ky_ngay' => $this->date($this->date($this->date)),
            'chu_ky_nam' => $this->date($this->year($this->year)),
            'm_1' => $this->year($this->year) + $this->year,
            'M_1' => $this->date($this->year($this->year($this->year) + $this->year) + $this->date($this->date($this->date)) + $this->date($this->month($this->month)))
        ];

        $M_3 = $data['chu_ky_ngay'] + $data['chu_ky_nam'];
         if($M_3 == 11 || $M_3 == 13 || $M_3 == 22 || $M_3 == 33){
            $data['M_3'] =  $M_3.'/'.$this->date($M_3);
        }else{
            $data['M_3'] = $this->date($M_3);
        }

        $data['M_4'] = $M_3 + $data['chu_ky_thang'] + $data['chu_ky_ngay'];
         if($data['M_4'] == 11 || $data['M_4'] == 13 || $data['M_4'] == 22 || $data['M_4'] == 33){
             $data['M_4'] =  $data['M_4'].'/'.$this->date( $data['M_4']);
         }else{
             $data['M_4'] = $this->date( $data['M_4']);
         }
        $data['tuoi_m_2'] = 36 - $this->date($this->date);
        $data['m_2'] = $data['m_1'] + $data['tuoi_m_2'] - $data['tuoi_m_1'];
         $data['M_5'] = $this->date($data['chu_ky_ngay']+ $data['chu_ky_nam']);

         dd($data);

       return view('view')->with('data', $data);

    }

    /**
     * @param $r
     * @return int
     */
    public function date($r){
        $date = ((int)substr($r,0,1) + (int)substr($r,1,1));
        return $date;
    }


    /**
     * @param $m
     * @return int
     */
    public function month($m){
        $month = (int)substr($m,0,1) + (int)substr($m,1,1);
        return $month;
    }

    /**
     * @param $y
     * @return int
     */
    public function year($y){
        $year = (int)substr($y,0,1) + (int)substr($y,1,1) + (int)substr($y,2,1) + (int)substr($y,3,1);
        return $year;
    }

    /**
     * @param $r
     * @param $month
     * @return int
     */
    public function master($r, $month){
        $date = (int)$r + (int)$month;
        return $date;
    }

    public function name(array $n){
        $name = [
            'A' => 1,
            'B' => 2,
            'C' => 3,
            'D' => 4,
            'E' => 5,
            'F' => 6,
            'G' => 7,
            'H' => 8,
            'I' => 9,
            'J' => 10,
            'K' => 11,
            'L' => 12,
            'M' => 13,
            'N' => 14,
            'O' => 15,
            'P' => 16,
            'Q' => 17,
            'R' => 18,
            'S' => 19,
            'T' => 20,
            'U' => 21,
            'V' => 22,
            'W' => 23,
            'X' => 24,
            'Y' => 25,
            'Z' => 26
        ];
        $ten = 0;
        foreach ($name as $key=>$item){
            foreach ($n as $value){
                if($key == $value){
                   $ten += $item;
                }
            }
        }
        return $ten;
    }

    /**
     * @param $str
     * @return mixed|null|string|string[]
     */
    public function vn_to_str ($str){

        $unicode = array(

            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

            'd'=>'đ',

            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

            'i'=>'í|ì|ỉ|ĩ|ị',

            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',

            'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

            'D'=>'Đ',

            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',

            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',

        );

        foreach($unicode as $nonUnicode=>$uni){

            $str = preg_replace("/($uni)/i", $nonUnicode, $str);

        }
        $str = strtoupper(str_replace(' ','',$str));
        $str = str_split($str);
        return $str;

    }

    /**
     * @param $n
     * @return int
     */
    public function masterName($n){
       $name = ((int)substr($n,0,1)) + ((int)substr($n,1,1)) + ((int)substr($n,2,1));
       return $name;
    }

    public function soul(array $n){
        $soul = [
            'A' => 1,
            'E' => 5,
            'I' => 9,
            'O' => 15,
            'U' => 21
        ];
        $linh_hon = 0;
        foreach ($soul as $key=>$item){
            foreach ($n as $value){
                if($key == $value){
                    $linh_hon += $item;
                }
            }
        }

       return $linh_hon;

    }

    public function personality(array $n){
        $personality = [
            'B' => 2,
            'C' => 3,
            'D' => 4,
            'F' => 6,
            'G' => 7,
            'H' => 8,
            'J' => 10,
            'K' => 11,
            'L' => 12,
            'M' => 13,
            'N' => 14,
            'P' => 16,
            'Q' => 17,
            'R' => 18,
            'S' => 19,
            'T' => 20,
            'V' => 22,
            'W' => 23,
            'X' => 24,
            'Y' => 25,
            'Z' => 26
        ];
        $nhan_cach = 0;
        foreach ($personality as $key=>$item){
            foreach ($n as $value){
                if($key == $value){
                    $nhan_cach += $item;
                }
            }
        }

        return $nhan_cach;
    }

}
