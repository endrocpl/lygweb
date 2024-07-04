<?php
//https://joshuaotwell.com/codeigniter-4-query-builder-where-function-and-parameter-structure-with-mysql/
namespace App\Models;

use CodeIgniter\Model;
use LDAP\Result;

class Datax extends Model
{

    function getQueryPertama()
    {

        $sql =  "SELECT a.TrnDate,a.StyleCode,COUNT(sizename)totalSize,SUM(a.QtyOutput)totalOutput
                FROM lygsewingoutput a GROUP BY a.TrnDate,a.StyleCode";
        return $this->db->query($sql);
    }
    function checkTipe($code)
    {
        $tipe = '';

        $db = $this->db->query("SELECT CAST(SizeName as INTEGER) SizeName FROM lygstylesize WHERE styleCOde='$code' limit 1")->getRowArray();
        $tipe = ($db['SizeName'] == 0 ? 'abjad' : 'angka');

        return $tipe;
    }
    function getQueryKedua($date, $code, $tipe)
    {
        if ($tipe == "abjad") {
            $sql =  "SELECT operatorName,
                        SUM(IF(SizeName='XS',QtyOutput,0)) as XS,
                        SUM(IF(SizeName='S',QtyOutput,0)) as S,
                        SUM(IF(SizeName='M',QtyOutput,0)) as M ,
                        SUM(IF(SizeName='L',QtyOutput,0)) as L,
                        SUM(IF(SizeName='XL',QtyOutput,0)) as XL,
                        SUM(IF(SizeName='XXL',QtyOutput,0)) as XXL,
                        SUM(IF(SizeName='XS',QtyOutput,0)) + SUM(IF(SizeName='S',QtyOutput,0)) + SUM(IF(SizeName='M',QtyOutput,0)) +
                        SUM(IF(SizeName='L',QtyOutput,0)) + SUM(IF(SizeName='XL',QtyOutput,0)) + SUM(IF(SizeName='XXL',QtyOutput,0)) as qty,
                     (SELECT CONCAT(DestinationCode,'(',DestinationName,')') FROM lygdestination
                         WHERE DestinationCode =DestinationCode LIMIT 1
                      ) Destination
                FROM lygsewingoutput WHERE trndate ='$date' AND styleCOde='$code'
                GROUP BY operatorName";
        } else {
            $sql =  "SELECT operatorName,
                        SUM(IF(SizeName='92',QtyOutput,0)) as 'n92',
                        SUM(IF(SizeName='98',QtyOutput,0)) as 'n98',
                        SUM(IF(SizeName='104',QtyOutput,0)) as 'n104',
                        SUM(IF(SizeName='110',QtyOutput,0)) as 'n110',
                        SUM(IF(SizeName='116',QtyOutput,0)) as 'n116',
                        SUM(IF(SizeName='122',QtyOutput,0)) as 'n122', 
						SUM(IF(SizeName='128',QtyOutput,0)) as 'n128', 
						SUM(IF(SizeName='134',QtyOutput,0)) as 'n134', 
						SUM(IF(SizeName='140',QtyOutput,0)) as 'n140', 
						SUM(IF(SizeName='146',QtyOutput,0)) as 'n146', 
						SUM(IF(SizeName='152',QtyOutput,0)) as 'n152', 
                        SUM(IF(SizeName='92',QtyOutput,0))+ SUM(IF(SizeName='98',QtyOutput,0))+SUM(IF(SizeName='104',QtyOutput,0))+ 
                        SUM(IF(SizeName='110',QtyOutput,0)) +SUM(IF(SizeName='116',QtyOutput,0))+SUM(IF(SizeName='122',QtyOutput,0))+
                        SUM(IF(SizeName='128',QtyOutput,0))+SUM(IF(SizeName='134',QtyOutput,0))+SUM(IF(SizeName='140',QtyOutput,0))+
                        SUM(IF(SizeName='146',QtyOutput,0))+	SUM(IF(SizeName='152',QtyOutput,0)) as qty,
                     (SELECT CONCAT(DestinationCode,'(',DestinationName,')') FROM lygdestination
                         WHERE DestinationCode =DestinationCode LIMIT 1
                      ) Destination
                FROM lygsewingoutput WHERE trndate ='$date' AND styleCOde='$code'
                GROUP BY operatorName";
        }
        return $this->db->query($sql);
    }
}
