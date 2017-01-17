<?php


class Temperature
     {
        public static function f2c($degree)
        {  
			 return ($degree - 32) * 5 / 9;
        }
     
        public static function c2f($degree)
        { 
             return ($degree * 9 / 5) + 32;
        }
        
        public static function f2k($degree)
        { 
             return (($degree - 32) * 5 / 9) + 273;
        }
    
        public static function c2k($degree)
        {
            return $degree + 273;
        }
    
        public static function k2c($degree) 
        {
            return $degree - 273;
        }
    
        public static function k2f($degree) 
        {
            return (($degree - 273) * 9 / 5) + 32;
        }
    
        public static function r2c($degree) 
        {
            return ($degree - 491.67) * 5 / 9;
        }
    
        public static function r2f($degree) 
        {
            return $degree - 459.67;
        }
    
        public static function r2k($degree) 
        {
            return $degree * 5 / 9;
        }
    
        public static function c2r($degree) 
        {
            return ($degree * 9 / 5) + 491.67;
        }
    
        public static function f2r($degree) 
        {
            return $degree = 459.67;
        }
    
        public static function k2r($degree) 
        {
            return $degree * 9 / 5;
        }
    
     }//end Temperature class
