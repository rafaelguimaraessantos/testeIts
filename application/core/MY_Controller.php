<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{  
    /**
     * @see Responsavel por deixar uma data no requerido pelo banco de dados
     * @author Rafael G. Sntos
     */
    public static function dataHoraBR($data)
    {
        $theDate = '';
        if (strlen($data) > 5) {
            $theDate = date('d/m/Y H:i', strtotime($data));
        }
        return $theDate;
    }
    /**
     * @see Responsavel por deixar uma data no requerido pelo banco de dados
     * @author Rafael G. Santos
    */
    public static function dateFormaBD($data) {

        $arr = explode('/', $data);
        if (count($arr)>2) {
            $data = $arr[2].'-'.$arr[1].'-'.$arr[0];
        }
        return $data;
    }
    /**
     * @see Responsavel por deixar uma data no requerido pelo banco de dados
     * @author Rafael G. Sntos
     */
    public static function dataBR($data)
    {
        $theDate = '';
        if (strlen($data) > 5) {
            $theDate = date('d/m/Y', strtotime($data));
        }
        return $theDate;
    }
    /**
     * @see Formata data hora para ser inserido no banco
     * @author Rafael G. Santos
     */
    public static function dataHoraBD($data)
    {
        $theDate = '';
        if (strlen($data) > 5) {
            $theDate = date('Y-m-d H:i:s', strtotime($data));
        }
        return $theDate;
    }
    public static function dateFormaBR($data) {

        $arr = explode('-', $data);
        if (count($arr)>2) {
            $data = $arr[2].'/'.$arr[1].'/'.$arr[0];
        }
        return $data;
    }
}