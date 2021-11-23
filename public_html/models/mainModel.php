<?php
/*
    if($peticionAjax){
        require_once "../config/SERVER.php";
    }else{
        require_once "./config/SERVER.php";    
    }*/
    require_once "config/SERVER.php";
    class mainModel{
        /**********************       Metodo conexion base de datos     ********************** */
        protected static function conectar(){
            $conexion = new PDO(SGBD,USER,PASS);
            $conexion -> exec("SET CHARACTER SET utf8");
            return $conexion;
        }
        /**********************      Metodo ejecutar consultas simples     *********************** */
        protected static function ejercutar_consulta_simple($consult){
            $sql = self::conectar() -> prepare($consult);
            $sql -> execute();
            return $sql;
        }
        /**********************       Seguridad    *********************** */
		public function encryption($string){
			$output=FALSE;
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_encrypt($string, METHOD, $key, 0, $iv);
			$output=base64_encode($output);
			return $output;
		}
		protected static function decryption($string){
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
			return $output;
		}
        /**********************    Generar codigos aleatorios    *********************** */
        protected static function generar_codigo_aleatorio($char,$long,$number){
            for($i=1; $i <=$long ;$i++){
                $aleatorio = rand(0,9);
                $char .= $aleatorio;
            }
            return $char . "-" . $number;

        }
         /**********************   Metodo limpiar strings    *********************** */
         protected static function limpiar_string($string){
            $string = trim($string);
            $string = stripslashes($string);
            $string = str_ireplace("<script>","",$string);
            $string = str_ireplace("</script>","",$string);
            $string = str_ireplace("<script src","",$string);
            $string = str_ireplace("<script type =","",$string);
            $string = str_ireplace("SELECT * FROM","",$string);
            $string = str_ireplace("DELETE FROM","",$string);
            $string = str_ireplace("INSERT INTO","",$string);
            $string = str_ireplace("DROP TABLE","",$string);
            $string = str_ireplace("DROP DATABASE","",$string);
            $string = str_ireplace("TRUNCATE TABLE","",$string);
            $string = str_ireplace("SHOW TABLES","",$string);
            $string = str_ireplace("SHOW DATABASES","",$string);
            $string = str_ireplace("<? php","",$string);
            $string = str_ireplace("?>","",$string);
            $string = str_ireplace("--","",$string);
            $string = str_ireplace(">","",$string);
            $string = str_ireplace("<","",$string);
            $string = str_ireplace("[","",$string);
            $string = str_ireplace("]","",$string);
            $string = str_ireplace("^","",$string);
            $string = str_ireplace("==","",$string);
            $string = str_ireplace(";","",$string);
            $string = str_ireplace("::","",$string);
            
            $string = stripslashes($string);
            $string = trim($string);
            return $string;
         }
          /**********************   Metodo verificar datos    *********************** */
          protected static function verificar_datos($filter,$string){
            if(preg_match("/^" .$filter . "/",$string)){
                return false;
            }else{
                return true;
            }
          }
           /**********************   Metodo verificar fechas    *********************** */
          protected static function verificar_fecha($date){
            $valores = explode('-',$date);
            if(count($valores) == 3 && checkdate($valores[1],$valores[2],$valores[0])){   ////// formato de fecha mont-day-year
                return false;
            }else{
                return true;
            } 
          }
           /**********************   Metodo paginador de tablas    *********************** */
          protected static function paginador_tablas($page,$Npages,$url,$Nbutoms){
            $table = '<nav class="pagination">';
            if($page == 1){
                ;
            }else{
                $table .= ' <a class="next page-numbers" href="' . $url . ($page -1) .'/">Anterior</a>' ;
            }

            $ci = 0;
            for ($i = $page ; $i<= $Npages ;$i++){
                if($ci >= $Nbutoms){
                    break;
                }
                if($page == $i){
                    $table .= '<span class="page-numbers current">' . $page . '</span>';
                }else{
                    $table .=  '<a class="page-numbers" href="' .$url . $i . '/">' . $i . '</a>';
                }
                $ci++;
            }

            if($page == $Npages){
                $table .= '<span class="page-numbers current">' . $Npages . '</span>';
            }else{
                $table .= ' <span class="page-numbers current">' . $page . '</span> 
                <a class="next page-numbers" href="' . $url . ($page +1) .'/">Siguiente »</a>' ;
            }

          }
    }
?>