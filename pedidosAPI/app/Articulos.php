<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $CODARTICULO
 * @property string $DESCRIPCION
 * @property string $DESCRIPADIC
 * @property int $TIPOIMPUESTO
 * @property int $DPTO
 * @property int $SECCION
 * @property int $FAMILIA
 * @property int $SUBFAMILIA
 * @property int $LINEA
 * @property string $TEMPORADA
 * @property int $GENERARETIQ
 * @property file $FOTO
 * @property int $MARCA
 * @property string $CODTALLA
 * @property string $NORMA
 * @property string $TACON
 * @property string $COMPOSICION
 * @property int $ARTICULOVIRTUAL
 * @property int $TIENETC
 * @property double $UNID1C
 * @property double $UNID2C
 * @property double $UNID3C
 * @property double $UNID4C
 * @property double $UNID1V
 * @property double $UNID2V
 * @property double $UNID3V
 * @property double $UNID4V
 * @property int $ESKIT
 * @property int $USARNUMSERIE
 * @property int $GENNUMSERIE
 * @property int $TIPO
 * @property string $FECHAMODIFICADO
 * @property string $REFPROVEEDOR
 * @property string $CONTRAPARTIDAVENTA
 * @property string $CONTRAPARTIDACOMPRA
 * @property string $UNIDADMEDIDA
 * @property double $UDSELABORACION
 * @property double $MEDIDAREFERENCIA
 * @property int $PORPESO
 * @property string $USASTOCKS
 * @property int $IMPUESTOCOMPRA
 * @property int $DESCATALOGADO
 * @property double $UDSTRASPASO
 * @property string $TIPOARTICULO
 * @property string $GARANTIACOMPRA
 * @property string $GARANTIAVENTA
 * @property int $COLORFONDO
 * @property int $COLORTEXTO
 * @property string $TIPOSAT
 * @property string $FACTPORHORA
 * @property int $CONSUMADIC
 * @property double $MARGEN
 * @property int $CARGO1
 * @property int $CARGO2
 * @property int $NUMCONSUMICIONES
 * @property int $CODCENTRAL
 * @property string $CONTRAPARTIDACOSTEVENTAS
 * @property int $CODDISENY
 * @property int $CODIGOADUANA
 * @property string $MEDIDA2
 * @property int $VISIBLEWEB
 * @property int $DIASCADUCIDAD
 * @property int $PORCRETENCION
 * @property string  $CONTRAPARTIDACONSUMO
 * @property string $CONTRAPARTIDAVENTADMN
 * @property string $CONTRAPARTIDACOMPRADMN
 * @property string $CONTRAPARTIDACOSTEVENTASDMN
 * @property int $DESCARGADO
 * @property double $PRECIOMINIMO
 * @property double $PRECIOMAXIMO
 * @property int $PRECIOLIBRE
 * @property int $HIOPOS_IMPRIMIRCOCINA
 * @property int $HIOPOS_EBT
 * @property int $HIOPOS_TAKEAWAY
 * @property string $AVISOVENTA
 * @property string $FOTOSHA
 * @property int $FORZARUDSENTERASVENTA
 * @property int $DURACION
 * @property int $IDTALONARIO
 * @property int $HIOPOS_IMPRIMIRCOCINA2
 * @property int $HIOPOS_IMPRIMIRCOCINA3
 * @property int $HIOPOS_ISMODIFICADOR
 * @property int $NODTOAPLICABLE
 * @property string $CONTRAPARTIDADEVOLCOMPRA
 * @property string $CONTRAPARTIDADEVOLVENTA
 * @property string $CONTRAPARTIDADEVOLCOSTEVENTA
 * @property string $CONTRAPARTIDADEVOLCOSTEVENTA
 * @property string $CONTRAPARTIDADEVOLCOMPRADMN
 * @property string $CONTRAPARTIDADEVOLVENTADMN
 * @property string $CONTRAPARTIDADEVOLCOSTEVENTASDM
 * @property int $REGIMRET_IVA
 * @property int $REGIMRET_BASEIMPONIBLE
 * @property string $SOLICITARCOMENTARIO
 * @property string $DIRCONTAB
 * @property string $SUBEMPRESA
 * @property string $CONTRAPARTIDAVENTAEXONERADA
 * @property string $CONTRAPARTIDADEVOLVENTAEXONERADA
 * @property string $CONTRAPARTIDAFALTANTESINVENTARIO
 * @property string $CONTRAPARTIDASOBRANTESINVENTARIO
 * @property string $CONTRAPARTIDAORDENESFAB
 * @property string $FIJARPV_CADADIA
 * @property string $FIJARPV_ALCAMBIARPRECIO
 * @property int $FORMADEPESO
 * @property string $CONTRAPARTIDACONSUMOS
 * @property string $VERSION
 */


class Articulos extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ARTICULOS';

    protected $primaryKey = 'CODARTICULO';
    /**
     * @var array
     */
    protected $fillable = ['CODARTICULO','DESCRIPCION','DESCRIPADIC','TIPOIMPUESTO','DPTO','SECCION'
        ,'FAMILIA','SUBFAMILIA','LINEA','TEMPORADA','GENERARETIQ','FOTO','MARCA','CODTALLA','NORMA'
        ,'TACON','COMPOSICION','ARTICULOVIRTUAL','TIENETC','UNID1C','UNID2C','UNID3C','UNID4C','UNID1V'
        ,'UNID2V','UNID3V','UNID4V','ESKIT','USARNUMSERIE','GENNUMSERIE','TIPO','FECHAMODIFICADO','REFPROVEEDOR','CONTRAPARTIDAVENTA'
        ,'CONTRAPARTIDACOMPRA','UNIDADMEDIDA','UDSELABORACION','MEDIDAREFERENCIA','PORPESO','USASTOCKS','IMPUESTOCOMPRA','DESCATALOGADO','UDSTRASPASO'
        ,'TIPOARTICULO','GARANTIACOMPRA','GARANTIAVENTA','COLORFONDO','COLORTEXTO','TIPOSAT','FACTPORHORA','CONSUMADIC','MARGEN','CARGO1','CARGO2','NUMCONSUMICIONES'
        ,'CODCENTRAL','CONTRAPARTIDACOSTEVENTAS','CODDISENY','CODIGOADUANA','MEDIDA2','VISIBLEWEB','DIASCADUCIDAD','PORCRETENCION','CONTRAPARTIDACONSUMO','CONTRAPARTIDAVENTADMN'
        ,'CONTRAPARTIDACOMPRADMN','CONTRAPARTIDACOSTEVENTASDMN','DESCARGADO','PRECIOMINIMO','PRECIOMAXIMO'
        ,'PRECIOLIBRE','HIOPOS_IMPRIMIRCOCINA','HIOPOS_EBT','HIOPOS_TAKEAWAY','AVISOVENTA','FOTOSHA','FORZARUDSENTERASVENTA'
        ,'DURACION','IDTALONARIO','HIOPOS_IMPRIMIRCOCINA2','HIOPOS_IMPRIMIRCOCINA3','HIOPOS_ISMODIFICADOR'
        ,'NODTOAPLICABLE','CONTRAPARTIDADEVOLCOMPRA','CONTRAPARTIDADEVOLVENTA','CONTRAPARTIDADEVOLCOSTEVENTA'
        ,'CONTRAPARTIDADEVOLCOMPRADMN','CONTRAPARTIDADEVOLVENTADMN','CONTRAPARTIDADEVOLCOSTEVENTASDM','REGIMRET_IVA','REGIMRET_BASEIMPONIBLE'
        ,'SOLICITARCOMENTARIO','DIRCONTAB','SUBEMPRESA','CONTRAPARTIDAVENTAEXONERADA','CONTRAPARTIDADEVOLVENTAEXONERADA','CONTRAPARTIDAFALTANTESINVENTARIO'
        ,'CONTRAPARTIDASOBRANTESINVENTARIO','CONTRAPARTIDAORDENESFAB','FIJARPV_CADADIA','FIJARPV_ALCAMBIARPRECIO','FORMADEPESO'
        ,'CONTRAPARTIDACONSUMOS','VERSION'
    ];

    public $timestamps = false;

    public function scopeProveedor($query, $idprov){
        if($idprov != ""){
            return $query -> where('FORMADEPESO', '=', "$idprov");
        }
    }
}
