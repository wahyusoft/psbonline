 <?php  

   function filter_string($string){
        $CI = & get_instance();   
        return $CI->security->sanitize_filename($string);
   }

    function convert_format($date){    //bln-tgl-thn    
        $list = explode('/', $date);         
        $year   = @$list[2];  $month= @$list[0];  $day= @$list[1];
        $the_date = $year.'-'.$month.'-'.$day;                           
        return  $the_date;
    }

    function format_convert($date){
        $list = explode('/', $date);                 
        $year   = @$list[0];  $month= @$list[1];  $day= @$list[2];
        $the_date = $year.'-'.$month.'-'.$day;                           
        return  $the_date;
    }

    function tglIndo($date){
        $list = explode('-', $date);                 
        $year   = @$list[0];  $month= @$list[1];  $day= @$list[2];
        $the_date = $day.'-'.$month.'-'.$year;                           
        return  $the_date;
    }

    function RandomString($length) {
        $keys = array_merge(range('A', 'Z'), range(0,9));
        $key ='';
        for($i=0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
        return $key;
    }
  

  ?>  
   