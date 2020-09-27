<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $CODPROVEEDOR
 * @property string $CODCONTABLE
 * @property string $NOMPROVEEDOR
 * @property string $NOMCOMERCIAL
 * @property string $CIF
 * @property string $NIF20
 * @property string $ALIAS
 * @property string $DIRECCION1
 * @property string $CODPOSTAL
 * @property string $POBLACION
 * @property string $PROVINCIA
 * @property string $PAIS
 * @property string $PERSONACONTACTO
 * @property string $TELEFONO1
 * @property string $TELEFONO2
 * @property string $FAX
 * @property string $FAXPEDIDOS
 * @property string $TELEX
 * @property string $E_MAIL
 * @property string $CODCLISUYO
 * @property string $NUMCUENTA
 * @property string $CODBANCO
 * @property string $NUMSUCURSAL
 * @property string $DIGCONTROLBANCO
 * @property string $CODPOSTALBANCO
 * @property string $NOMBREBANCO
 * @property string $DIRECCIONBANCO
 * @property string $POBLACIONBANCO
 * @property string $CODSWIFT
 * @property string $ENVIOPOR
 * @property string $ENVIODIRECION
 * @property string $ENVIOCODPOSTAL
 * @property string $ENVIOPOBLACION
 * @property string $ENVIOPROVINCIA
 * @property string $ENVIOPAIS
 * @property int $CANTPORTESPAG
 * @property string $TIPOPORTES
 * @property int $NUMDIASENTREGA
 * @property string $OBSERVACIONES
 * @property string $CODTALLA
 * @property int $COMPRARSINIMPUESTOS
 * @property int $COMPRARIVAINCLUIDO
 * @property string $APTOCORREOS
 * @property int $DTOCOMERCIAL
 * @property int $TIPO
 * @property string $REGIMFACT
 * @property int $CODMONEDA
 * @property int $DIAPAGO1
 * @property int $DIAPAGO2
 * @property string $FECHAMODIFICADO
 * @property string $DIRECCION2
 * @property int $TRANSPORTE
 * @property int $CODIDIOMA
 * @property int $TIPODOC
 * @property string $SERIEFACINDIRECTA
 * @property string $SERIEFACINDIRECTA
 * @property int $B2B_ORIGEN
 * @property int $B2B_IDMAPPING
 * @property int $CODCENTRAL
 * @property int $CODVISIBLE
 * @property int $VENCIMSEGUN
 * @property string $CODPAIS
 * @property string $ENVIOCODPAIS
 * @property int $B2B_ORIGENPEDIDO
 * @property int $B2B_IDMAPPINGPEDIDO
 * @property int $CODCENTRALPEDIDO
 * @property int $NUMDIASCANCELACION
 * @property double $PEDIDOMINIMO
 * @property int $FACTURARCONIMPUESTO
 * @property string $CODCONTABLECOMPRA
 * @property int $DESCATALOGADO
 * @property string $CODIGOIBAN
 * @property string $CODCONTABLEDMN
 * @property int $PEDIDOSVENCIMSEGUN
 * @property string $MOBIL
 * @property int $ESPROVDELGRUPO
 * @property string $REGIMRET
 * @property string $TIPORET
 * @property int $RET_TIPORETENCIONIVA
 * @property double $RET_PORCEXCLUSION
 * @property string $RET_FECHAINIEXCLUSION
 * @property string $RET_FECHAFINEXCLUSION
 * @property int $IVANODEDUCIBLE
 * @property int $RECC
 * @property string $BLOQUEADO
 * @property string $ORDENADEUDO
 * @property int $TIPODOCIDENT
 * @property int $CODEMPRESACONTABLE
 * @property string $PERSONAJURIDICA
 * @property string $VERSION
 * 
 */

class Proveedor extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'PROVEEDORES';

    protected $primaryKey = 'CODPROVEEDOR';
    /**
     * @var array
     */
    protected $fillable = ['CODPROVEEDOR','CODCONTABLE','NOMPROVEEDOR','NOMCOMERCIAL','CIF'
    ,'NIF20','ALIAS','DIRECCION1','CODPOSTAL','POBLACION','PROVINCIA','PAIS','PERSONACONTACTO'
    ,'TELEFONO1','TELEFONO2','FAX','FAXPEDIDOS','TELEX','E_MAIL','CODCLISUYO','NUMCUENTA','CODBANCO','NUMSUCURSAL'
    ,'DIGCONTROLBANCO','CODPOSTALBANCO','NOMBREBANCO','DIRECCIONBANCO','POBLACIONBANCO','CODSWIFT'
    ,'ENVIOPOR','ENVIODIRECION','ENVIOCODPOSTAL','ENVIOPOBLACION','ENVIOPROVINCIA','ENVIOPAIS','CANTPORTESPAG','TIPOPORTES'
    ,'NUMDIASENTREGA','OBSERVACIONES','CODTALLA','COMPRARSINIMPUESTOS','COMPRARIVAINCLUIDO','APTOCORREOS','DTOCOMERCIAL','TIPO'
    ,'REGIMFACT','CODMONEDA','DIAPAGO1','DIAPAGO2','FECHAMODIFICADO','DIRECCION2','TRANSPORTE','CODIDIOMA'
    ,'TIPODOC','SERIEALBINDIRECTA','SERIEFACINDIRECTA','B2B_ORIGEN','B2B_IDMAPPING','CODCENTRAL','CODVISIBLE','VENCIMSEGUN'
    ,'CODPAIS','ENVIOCODPAIS','B2B_ORIGENPEDIDO','B2B_IDMAPPINGPEDIDO','CODCENTRALPEDIDO','NUMDIASCANCELACION','PEDIDOMINIMO'
    ,'FACTURARCONIMPUESTO','CODCONTABLECOMPRA','DESCATALOGADO','CODIGOIBAN','CODCONTABLEDMN','PEDIDOSVENCIMSEGUN','MOBIL'
    ,'ESPROVDELGRUPO','REGIMRET','TIPORET','RET_TIPORETENCIONIVA','RET_PORCEXCLUSION','RET_FECHAINIEXCLUSION','RET_FECHAFINEXCLUSION'
    ,'IVANODEDUCIBLE','RECC','BLOQUEADO','ORDENADEUDO','TIPODOCIDENT','CODEMPRESACONTABLE','PERSONAJURIDICA','VERSION'];

    public $timestamps = false;

    public static function Procedimiento(){
        $db = DB::select('CALL AllProveedores');
        return $db;
    }
}
