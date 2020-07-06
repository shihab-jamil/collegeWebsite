<?php
    class BanglaDate {
        public $day;
        public $month;
        public $year;
        public $bn_months = array("","জানুয়ারী", "ফেব্রুয়ারী ", "মার্চ ", "এপ্রিল ", "মে ", "জুন ", "জুলাই ", "আগস্ট", "সেপ্টেম্বর ", "অক্টোবর ", "নভেম্বর ", "ডিসেম্বর ");
        public $bn_dates = array("০","১","২","৩","৪","৫","৬","৭","৮","৯","১০","১১","১২","১৩","১৪","১৫","১৬","১৭","১৮","১৯","২০","২১","২২","২৩","২৪","২৫","২৬","২৭","২৮","২৯","৩০","৩১",);

        function __construct($day , $month , $year){
            $this->day = $day;
            $this->month = $month;
            $this->year = $year;
        }

        function convertDay(){
            return $this->bn_dates[$this->day];
        }

        function convertMonth(){
            return $this->bn_months[$this->month];
        }

        function convertYear(){
            return $this->bn_dates[$this->year[0]].$this->bn_dates[$this->year[1]].$this->bn_dates[$this->year[2]].$this->bn_dates[$this->year[3]];
        }
    }

    function convertDateToBangla(){
        $bn = new BanglaDate(date("j") , date("n") , date("Y"));
        return $bn->convertDay().' '.$bn->convertMonth().', '.$bn->convertYear();
    }
?>