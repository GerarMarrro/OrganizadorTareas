<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetPed extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'PEDCOMPRACAB';
    protected $pirmaryKey = 'NUMSERIE';
    /**
     * @var array
     */
    protected $fillable = ['NUMSERIE','NUMPEDIDO','N','CODPROVEEDOR','SERIEALBARAN','NUMEROALBARAN','NALBARAN'
    ,'FECHAPEDIDO','FECHAENTREGA','ENVIOPOR','TOTBRUTO','DTOPP','TOTDTOPP','DTOCOMERCIAL','TOTDTOCOMERCIAL'
    ,'TOTIMPUESTOS','TOTNETO','CODMONEDA','FACTORMONEDA','PORTESPAG','SUPEDIDO','IVAINCLUIDO','TODORECIBIDO'
    ,'TIPODOC','IDESTADO','FECHAMODIFICADO','HORA','TRANSPORTE','NBULTOS','TOTALCARGOSDTOS','NORECIBIDO'
    ,'CODEMPLEADO','CONTACTO','FROMPEDVENTACENTRAL','FECHACREACION','NUMIMPRESIONES'];

    public $timestamps = false;

    public function scopeProveedor($query, $idprov){
        if($idprov != ""){
            return $query -> where('CODPROVEEDOR', '=', "$idprov");
        }
    }
    public function scopeFechainicio($query, $fechaini){
        if($fechaini != ""){
            return $query -> where('FECHAPEDIDO', '=', "$fechaini");
        }
    }
    public function scopeFechafinal($query, $fechafin){
        if($fechafin != ""){
            return $query -> where('FECHAENTREGA', '=', "$fechafin");
        }
    }

}
