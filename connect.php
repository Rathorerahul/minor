<?php
$user = 'root';
$password ='';
$db = 'project';
$conn = new mysqli('localhost',$user,$password,$db) or die('unable to connect');
/*echo "hello rahul";*/
function Execute($q){ echo "in execute\n";
    global $conn;
    $result1 = mysqli_query($conn,$q);
    echo "result is ";
    return $result1;
}
function Fetch($q){
    global $conn;
    $ar=[];
    $s=mysqli_query($conn,$q);
    while ($r=$s->fetch_assoc()) {
        array_push($ar,$r);
    }
    return $ar;
}
/*function my_simple_crypt( $string, $action = 'e' ) {
    // you may change these values to your own
    $secret_key = 'my_simple_secret_key';
    $secret_iv = 'my_simple_secret_iv';
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }
    //echo "output is $output<br>";
    return $output;

}*/
function input($data) {
    
    global $conn;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($conn,$data);
    return $data;
  }
  function Insert($ar,$table="userinfo")
    { echo "in insert \n";
        echo $table;
        global $conn;
		$ak=[];
		$av=[];
		foreach ($ar as $k => $v) {
			$v = input($v);
			array_push($ak,$k);
			array_push($av,"'$v'");
		}
        $x = implode(',',$ak);
        $y = implode(',',$av);
        echo $x;
        echo "\n $y";
		if(Execute("INSERT INTO $table(".implode(',',$ak).") values(".implode(',',$av).")")) {
			return true;
		}
		return false;
	}

?>
