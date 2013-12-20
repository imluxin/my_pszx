<?php
class lx 
{
	/*protected function dbconnection()
	{
		$dbconnection = mysql_connect ("localhost", "root", null) or die ('I cannot connect to the database because: ' . mysql_error());
		mysql_select_db ("studiosmercurya", $dbconnection) or die("Couldn't open database: ".mysql_error());
	}*/
	
	public static function get_substr($str, $length)
	{
		return substr($str, '0', $length).'...';
	}
	
	/**
	 * for flash
	 * @return string
	 */
	
	public static function getZhuozi()
	{
		return '/flash/asset/zhuozi.png';
	}
	public static function getShe()
	{
		return '/flash/asset/she.gif';
	}
	public static function getFOswf()
	{
		return "/flash/FO.swf";
	}
	
	
	public static function get_sort_choices($nb = '15')
	{
		$sort = array('');
		for ($i=1;$i<=$nb;$i++){
			$sort[$i] = $i;
		}
		return array_combine($sort, $sort);
	}
	
	public static function slugify($text)
	{  
        return Doctrine_Inflector::urlize($text);
	}
	
	public static function runCommand($cmd)
	{
		if (PHP_OS == 'WINNT'){
			$WshShell = new COM("WScript.Shell");
			try {
			    $oExec = $WshShell->Run($cmd, 0, false);
			}
			catch (com_exception $e){
			    sfContext::getInstance()->getLogger()->info('WScript.Shell exception:'.$e->getMessage());
			}
		}else {
			$output = shell_exec($cmd.' &> /dev/null &');
		}
	}
  
	public static function getSizeFile($file)
	{
		if (substr($file,0,4)=='http') {
			$x = array_change_key_case(get_headers($file, 1),CASE_LOWER);
			if ( strcasecmp($x[0], 'HTTP/1.1 200 OK') != 0 ) { $x = $x['content-length'][1]; }
			else { $x = $x['content-length']; }
		}
		else { $x = @filesize($file); }
		
		return $x;
	}  
	
	public static function getPercentage($total, $analized)
	{	
		if ($total != '0') return 100 - round($analized/($total/100), 0).'%';
		else return null;
	}
	
	public static function countdown($end_timestamp)
	{
		$date = $end_timestamp-time();
		$day = $date/60/60/24;
		$days = (int)$day;
		$hour = $date/60/60 - $days*24;
		$hours = (int)$hour;
		$minute = $date/60 - $days*24*60 - $hours*60;
		$minutes = (int)$minute;
		$second = $date - $days*24*60*60 - $hours*60*60 - $minutes*60;
		$seconds = (int)$second;
		$result = array($days,$hours,$minutes,$seconds);
		return $result;
	}
	
	public static function getCurrencySymbol($currency_code)
	{
		$currency = array('EUR' => '€',
						  'USD' => '$',
						  'GBP'	=> '£'
						 );
		
		if ($currency_code) return $currency[$currency_code];
		return null;
	}
	
	public static function getImportTimeType()
	{
		$array = array('' => '',
	  			      'hour' => 'hour',
	  				  'day' => 'day',
	  				  'week' => 'week',
	  				  'month' => 'month',
	  				  'year' => 'year',
	  				 );
	 	return $array; 	
	}
    
    public static function strtolower_utf8($string)
    {
    	return mb_strtolower($string, 'UTF-8');
    }
	
    public static function getPicture($picture)
    {
    	$match = preg_match('^(http|https)://^', $picture);
		$domain = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'] : "http://".$_SERVER['SERVER_NAME'];
    	if ($match){
    		return $picture;
    	}else {
    		return $domain.$picture;
    	}
    }
    
    public static function getUrl($url)
    {
    	$match = preg_match('^(http|https)://^', $url);
    	if ($match){
    		return $url;
    	}else {
    		return 'http://'.$url;
    	}
    }
    
    public static function regexImageUrl($url)
    {
    	$match = preg_match('^((http|https)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(?:\/\S*)?(?:[a-zA-Z0-9_])+\.(?:jpg|jpeg|gif|png|bmp))^', $url);
    	return $match;
    }
    
    public static function getCounties()
    {
	  	$c = new sfCultureInfo(sfContext::getInstance()->getUser()->getCulture());
	    $countries = $c->getCountries();
	    $countries = array_merge(array(''=>''), $countries);
	   	return $countries;
    }
    
    public static function getDocMineTypes()
    {
    	return array(
    				'application/pdf',
    				'application/pdf; charset=binary',
    				'application/x-pdf',
    				'application/msword',
                    'application/vnd.ms-excel',
    			);
    }
    
	public static function getTimePicker()
	{
		$array = array('' => '');
		for ($i = 1; $i < 24; $i++) {
			if ($i < 10) $i = '0'.$i;
			$array[$i.':00'] = $i.':00';
			$array[$i.':15'] = $i.':15';
			$array[$i.':30'] = $i.':30';
			$array[$i.':45'] = $i.':45';
		}
		return $array;
	}
	
   public static function getCountries()
   {
   		$c = new sfCultureInfo(sfContext::getInstance()->getUser()->getCulture());
        $countries = $c->getCountries();
        return $countries;
   }
   
   public static function round2($num)
   {
   		return round($num, 2);
   }
}