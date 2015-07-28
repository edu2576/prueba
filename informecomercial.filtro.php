<?php

    /*session_start();
    
    require ('../xajax/xajax_core/xajax.inc.php');
    include_once '../lenguajes/'.$_SESSION["archivoidioma"];
    $xajax = new xajax();
    $xajax->configure('javascript URI', '../xajax/');

    require_once('../clases/informes.class.php');
    
    $tipoInforme = (isset($_GET["tipoInforme"]) ? $_GET["tipoInforme"] : 'Basico');*/
    
    function crearCampo($contenidoDiv)
    {
	// Ahora generamos la conexion a la base de datos que desean utilizar
	// Ahora generamos la conexion a la base de datos que desean utilizar
	$respuesta = new xajaxResponse(); 
	$respuesta->setResponseType("XML");


	$estructura = $contenidoDiv;
	$estructura .= '<table width="100%"><tr>';
	
	$estructura .= '<td><input type="hidden" name="condicionGeneral" id="condicionGeneral" /></td>';
	$estructura .= '<td><input type="hidden" name="filtro" id="filtro" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionTercero" id="condicionTercero" /></td>';
	$estructura .= '<td><input type="hidden" name="totalTercero" id="totalTercero" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionTransportador" id="condicionTransportador" /></td>';
	$estructura .= '<td><input type="hidden" name="totalTransportador" id="totalTransportador" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionVendedor" id="condicionVendedor" /></td>';
	$estructura .= '<td><input type="hidden" name="totalVendedor" id="totalVendedor" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionPeriodo" id="condicionPeriodo" /></td>';
	$estructura .= '<td><input type="hidden" name="totalPeriodo" id="totalPeriodo" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionEstado" id="condicionEstado" /></td>';
	$estructura .= '<td><input type="hidden" name="totalEstado" id="totalEstado" value ="2"/></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionDocumento" id="condicionDocumento" /></td>';
	$estructura .= '<td><input type="hidden" name="totalDocumento" id="totalDocumento" /></td>';

    $estructura .= '<td><input type="hidden" name="condicionGrupoDocumento" id="condicionGrupoDocumento" /></td>';
    $estructura .= '<td><input type="hidden" name="totalGrupoDocumento" id="totalGrupoDocumento" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionDocumentoConcepto" id="condicionDocumentoConcepto" /></td>';
	$estructura .= '<td><input type="hidden" name="totalDocumentoConcepto" id="totalDocumentoConcepto" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionMoneda" id="condicionMoneda" /></td>';
	$estructura .= '<td><input type="hidden" name="totalMoneda" id="totalMoneda" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionBodega" id="condicionBodega" /></td>';
	$estructura .= '<td><input type="hidden" name="totalBodega" id="totalBodega" /></td>';
        
	$estructura .= '<td><input type="hidden" name="condicionBodegaDestino" id="condicionBodegaDestino" /></td>';
	$estructura .= '<td><input type="hidden" name="totalBodegaDestino" id="totalBodegaDestino" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionTipoProducto" id="condicionTipoProducto" /></td>';
	$estructura .= '<td><input type="hidden" name="totalTipoProducto" id="totalTipoProducto" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionTipoNegocio" id="condicionTipoNegocio" /></td>';
	$estructura .= '<td><input type="hidden" name="totalTipoNegocio" id="totalTipoNegocio" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionTemporada" id="condicionTemporada" /></td>';
	$estructura .= '<td><input type="hidden" name="totalTemporada" id="totalTemporada" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionMarca" id="condicionMarca" /></td>';
	$estructura .= '<td><input type="hidden" name="totalMarca" id="totalMarca" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionColor" id="condicionColor" /></td>';
	$estructura .= '<td><input type="hidden" name="totalColor" id="totalColor" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionTalla" id="condicionTalla" /></td>';
	$estructura .= '<td><input type="hidden" name="totalTalla" id="totalTalla" /></td>';

	$estructura .= '<td><input type="hidden" name="condicionnumeroMovimiento" id="condicionnumeroMovimiento" /></td>';
	$estructura .= '<td><input type="hidden" name="totalnumeroMovimiento" id="totalnumeroMovimiento" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionfechaElaboracionMovimiento" id="condicionfechaElaboracionMovimiento" /></td>';
	$estructura .= '<td><input type="hidden" name="totalfechaElaboracionMovimiento" id="totalfechaElaboracionMovimiento" /></td>';
	
	$estructura .= '<td><input type="hidden" name="condicionreferenciaProducto" id="condicionreferenciaProducto" /></td>';
	$estructura .= '<td><input type="hidden" name="totalreferenciaProducto" id="totalreferenciaProducto" /></td>';

    $estructura .= '<td><input type="hidden" name="condicionCentroCosto" id="condicionCentroCosto" /></td>';
    $estructura .= '<td><input type="hidden" name="totalCentroCosto" id="totalCentroCosto" /></td>';
	
        $estructura .= '<td><input type="hidden" name="condiciondocumentoTercero" id="condiciondocumentoTercero" /></td>';
	$estructura .= '<td><input type="hidden" name="totaldocumentoTercero" id="totaldocumentoTercero" /></td>';
        
        $estructura .= '<td><input type="hidden" name="condicionvalorBaseMovimiento" id="condicionvalorBaseMovimiento" /></td>';
	$estructura .= '<td><input type="hidden" name="totalvalorBaseMovimiento" id="totalvalorBaseMovimiento" /></td>';
        
        $estructura .= '<td><input type="hidden" name="condicionvalorTotalMovimiento" id="condicionvalorTotalMovimiento" /></td>';
	$estructura .= '<td><input type="hidden" name="totalvalorTotalMovimiento" id="totalvalorTotalMovimiento" /></td>';
        
        $estructura .= '<td><input type="hidden" name="condicionConectividad" id="condicionConectividad" /></td>';
	$estructura .= '<td><input type="hidden" name="totalConectividad" id="totalConectividad" /></td>';
        
        $estructura .= '<td><input type="hidden" name="condicionEstadoConservacion" id="condicionEstadoConservacion" /></td>';
	$estructura .= '<td><input type="hidden" name="totalEstadoConservacion" id="totalEstadoConservacion" /></td>';
        
        $estructura .= '<td><input type="hidden" name="condicionCiudad" id="condicionCiudad" /></td>';
	$estructura .= '<td><input type="hidden" name="totalCiudad" id="totalCiudad" /></td>';
        
	$estructura .= '</tr>';
	$estructura .= '<tr>';
	$estructura .= '<td width:100%><div id="estructuraQuery" style="position:absolute; width:100%; height:100%; top:22; left:0; overflow:auto;"></div></td>';
	$estructura .= '</tr>';
	$estructura .= '</table>';
	
	$respuesta->assign("query","innerHTML",$estructura);
	//echo $estructura;
        
//        $respuesta->call("armarCondicion('Estado')");

	return $respuesta;
    }
    



    $xajax->register(XAJAX_FUNCTION, 'crearCampo');
    $xajax->register(XAJAX_FUNCTION, 'llenarPeriodo');
    $xajax->register(XAJAX_FUNCTION, 'llenarMoneda');
    $xajax->register(XAJAX_FUNCTION, 'llenarBodega');
    $xajax->register(XAJAX_FUNCTION, 'llenarBodegaDestino');
    $xajax->register(XAJAX_FUNCTION, 'llenarTipoProducto');
    $xajax->register(XAJAX_FUNCTION, 'llenarTipoNegocio');
    $xajax->register(XAJAX_FUNCTION, 'llenarTemporada');
    $xajax->register(XAJAX_FUNCTION, 'llenarMarca');
    $xajax->register(XAJAX_FUNCTION, 'llenarColor');
    $xajax->register(XAJAX_FUNCTION, 'llenarTalla');    
    $xajax->register(XAJAX_FUNCTION, 'llenarTercero');
    $xajax->register(XAJAX_FUNCTION, 'llenarDocumento');
    $xajax->register(XAJAX_FUNCTION, 'llenarGrupoDocumento');
    $xajax->register(XAJAX_FUNCTION, 'llenarDocumentoConcepto');
    $xajax->register(XAJAX_FUNCTION, 'llenarTransportador');
    $xajax->register(XAJAX_FUNCTION, 'llenarVendedor');
    $xajax->register(XAJAX_FUNCTION, 'llenarEstadoConservacion');
    $xajax->register(XAJAX_FUNCTION, 'llenarCiudad');
    $xajax->register(XAJAX_FUNCTION, 'llenarConectividad');
    $xajax->register(XAJAX_FUNCTION, 'llenarCentroCosto');


    $xajax->processRequest();

?>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
         <?php $xajax->printJavascript("../xajax/");?>
        <title>Informes Comerciales</title>
    </head>                
        <link rel="stylesheet" type="text/css" media="all" href="../clases/jscalendar-1.0/calendar-blue.css" title="win2k-cold-1" />
        <script type="text/javascript" src="../clases/jscalendar-1.0/calendar.js"></script>
        <script type="text/javascript" src="../clases/jscalendar-1.0/lang/calendar-es.js"></script>
        <script type="text/javascript" src="../clases/jscalendar-1.0/calendar-setup.js"></script>
        
        <script src="../clases/tiny/tinymce.min.js"></script>
        
        <link rel="stylesheet" href="../css/uniform.agent.css" type="text/css" media="screen"/>
        <link href="../estilos.css" rel="stylesheet" type="text/css" />
        
        <!--<script src="../js/jquery.min.js" type="text/javascript" charset="utf-8"></script>-->
        <script src="../clases/jQueryValidation/js/jquery-1.8.2.min.js" type="text/javascript"></script>

        <script src="../js/jquery.uniform.js" type="text/javascript" charset="utf-8"></script>
        <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'/>
        
        <script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
        <link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
        
        
        <link rel="stylesheet" href="../clases/jQueryValidation/css/validationEngine.jquery.css" type="text/css"/>
        <link rel="stylesheet" href="../clases/jQueryValidation/css/template.css" type="text/css"/>
        <script src="../clases/jQueryValidation/js/languages/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8"></script>
        <script src="../clases/jQueryValidation/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
        
        <script type="text/javascript" src="../js/validaciones.js"></script>
        
        <script type="text/javascript" charset="utf-8">           
            $(function(){
            $("input, textarea, select, button").uniform();
            });
            
            condictercero = " (tipoTercero like '%01%' or tipoTercero like '%02%') ";
            condictrans = " (tipoTercero like '%04%') ";
            condicvend = " (tipoTercero like '%03%') ";
            condicdocum = " (moduloDocumento = 'COM') ";
            condicproducto = " (afectaInventarioTipoProducto = 1 ) ";
            
            function getElementPosition()             
            {
                var offsetTrail = this;
                var offsetLeft = 0;
                var offsetTop = 0;
                while (offsetTrail) {
                    offsetLeft += offsetTrail.offsetLeft;
                    offsetTop += offsetTrail.offsetTop;
                    offsetTrail = offsetTrail.offsetParent;
                }
                return {left:offsetLeft, top:offsetTop};
            }
            
            
            function llenarConsultaLista(tabla,campo)
            {
                
                var pos = getElementPosition.call(campo);
                
//                alert(pos.top + 10)

                document.getElementById("consultaLista"+tabla).style.top = (pos.top + 10) + "px";
                document.getElementById("consultaLista"+tabla).style.left = (pos.left - 20) + "px";


                $('#consultaLista'+tabla).show();
                contenido = '<table width="100%">'+
                    '<tr>'+
                    '<td align="right">'+
                    '<img src="../images/cancel.png" onclick="$(\'#consultaLista'+tabla+'\').hide();"'+
                    '</td>'+
                    '</tr>'+
                    '<tr>'+
                    '<td>'+
                    '<div id="filtro'+tabla+'">'+
                    '<div id="filtro'+tabla+'Det">'+
                    '</div>'+
                    '</div>'+
                    '</td>'+
                    '</tr>'+
                    '</table>';

                $('#consultaLista'+tabla+'Datos').html(contenido);
            }
            
            function armarCondicion()
            {            
                    document.getElementById("condicionGeneral").value = '';
                    document.getElementById("filtro").value = '';

                    var estructura = '';
                    estructura += '<table width="100%" cellpadding="5" cellspacing="0">';
//                    estructura += '<tr ><td colspan="3" >Condiciones de Filtro</td></tr>';
                    estructura = llenarCondicion('<?php echo (defined('PERIODO') ? PERIODO : 'Periodo');?>', 'Periodo', estructura);
                    estructura = llenarCondicion('<?php echo (defined('MONEDA') ? MONEDA : 'Moneda');?>', 'Moneda', estructura);
                    estructura = llenarCondicion('<?php echo (defined('BODEGA') ? BODEGA : 'Bodega');?>', 'Bodega', estructura);
                    estructura = llenarCondicion('<?php echo (defined('BODEGA_DESTINO') ? BODEGA_DESTINO : 'BodegaDestino');?>', 'BodegaDestino', estructura);
                    estructura = llenarCondicion('<?php echo (defined('TIPO_NEGOCIO') ? TIPO_NEGOCIO : 'Tipo Negocio');?>', 'TipoNegocio', estructura);
                    estructura = llenarCondicion('<?php echo (defined('TIPO_PRODUCTO') ? TIPO_PRODUCTO : 'Tipo Producto');?>', 'TipoProducto', estructura);
                    estructura = llenarCondicion('<?php echo (defined('TEMPORADA') ? TEMPORADA : 'Temporada');?>', 'Temporada', estructura);
                    estructura = llenarCondicion('<?php echo (defined('MARCA') ? MARCA : 'Marca');?>', 'Marca', estructura);
                    estructura = llenarCondicion('<?php echo (defined('COLOR') ? COLOR : 'Color');?>', 'Color', estructura);
                    estructura = llenarCondicion('<?php echo (defined('TALLA') ? TALLA : 'Talla');?>', 'Talla', estructura);                 
                    estructura = llenarCondicion('<?php echo (defined('TERCERO') ? TERCERO : 'Tercero');?>', 'Tercero', estructura);
                    estructura = llenarCondicion('C. de Costo', 'CentroCosto', estructura);
                    estructura = llenarCondicion('<?php echo (defined('ESTADO') ? ESTADO : 'Estado');?>', 'Estado', estructura);
                    
                    estructura = llenarCondicion('<?php echo (defined('GRUPO_DOCUMENTO') ? GRUPO_DOCUMENTO : 'Grupo Documento');?>', 'GrupoDocumento', estructura);
                    estructura = llenarCondicion('<?php echo (defined('DOCUMENTO') ? DOCUMENTO : 'Documento');?>', 'Documento', estructura);
                    estructura = llenarCondicion('<?php echo (defined('DOCUMENTO_CONCEPTO') ? DOCUMENTO_CONCEPTO : 'DocumentoConcepto');?>', 'DocumentoConcepto', estructura);
                    estructura = llenarCondicion('<?php echo (defined('TRANSPORTADOR') ? TRANSPORTADOR : 'Transportador');?>', 'Transportador', estructura);
                    estructura = llenarCondicion('<?php echo (defined('VENDEDOR') ? VENDEDOR : 'Vendedor');?>', 'Vendedor', estructura);
                    estructura = llenarCondicion('<?php echo (defined('ESTADO_CONSERVACION') ? ESTADO_CONSERVACION : 'Estado Conservacion');?>', 'EstadoConservacion', estructura);
                    estructura = llenarCondicion('<?php echo (defined('CIUDAD') ? CIUDAD : 'Ciudad');?>', 'Ciudad', estructura);


                    // llenamos las condiciones de rangos
                    estructura = llenarrango('<?php echo (defined('DOCUMENTO_NUMERO') ? DOCUMENTO_NUMERO : 'Documento No.');?>', 'numeroMovimiento', estructura);
                    estructura = llenarrango('<?php echo (defined('FECHA_ELABORACION') ? FECHA_ELABORACION : 'Fecha Elaboracion');?>', 'fechaElaboracionMovimiento', estructura);
                    estructura = llenarrango('<?php echo (defined('REFERENCIA') ? REFERENCIA : 'Referencia');?>', 'referenciaProducto', estructura);
                    estructura = llenarrango('<?php echo (defined('NIT_CC') ? NIT_CC : 'Nit/CC');?>.', 'documentoTercero', estructura);
                    estructura = llenarrango('<?php echo (defined('BASE_IMPUESTO') ? BASE_IMPUESTO : 'Base Imp');?>.', 'valorBaseMovimiento', estructura);
                    estructura = llenarrango('<?php echo (defined('VALOR_TOTAL') ? VALOR_TOTAL : 'Vr Total');?>', 'valorTotalMovimiento', estructura);

                    estructura += '</table>';


                    document.getElementById("estructuraQuery").innerHTML = estructura;	
            }

            function llenarrango(titulo, campo, estructura)
            {

                var Valor = '';

                if(document.getElementById(campo+"Inicial").value != '' && document.getElementById(campo+"Final").value != '')
                {
                        Valor = document.getElementById(campo+"Inicial").value+' - '+document.getElementById(campo+"Final").value;
                        document.getElementById("condicion"+campo).value = "("+campo+" >= '" + document.getElementById(campo+"Inicial").value + "' and " +
                                                                            campo+" <= '" + document.getElementById(campo+"Final").value + "')";
                }
                if (Valor != '')
                {
                        estructura += '<tr>';
                        estructura += '<td ><label class="label">'+titulo+'</label></td>';
                        estructura += '<td ><label  style="font:Verdana, Geneva, sans-serif; font-size:9px;">'+Valor+'</label></td>'
                        estructura += '<td><a href="javascript:eliminarRango(\''+campo+'\')"><img src="../images/bl_borrar.png" border="0" /></a></td>';
                        estructura += '</tr>';

                }
                else
                {
                        document.getElementById("condicion"+campo).value = '';
                }


                // concatenamos en la condicion general todas las condiciones de cada filtro
                document.getElementById('condicionGeneral').value += ((document.getElementById('condicionGeneral').value != '' && document.getElementById("condicion"+campo).value) != '' 
                                                                                                                                ? ' and ' : '') + document.getElementById("condicion"+campo).value;

                return estructura;

            }


            /*Funcion para eliminar las campos seleccionadas en el query*/
            function eliminarQuery(tabla)
            {
                    var totalCampo = document.getElementById('total'+tabla).value;

                    for(registro = 0; registro < totalCampo; registro++)		
                    {
                            document.getElementById(tabla+"C"+ registro).checked = false;
                    }

                    armarCondicion(tabla);
            }

            /*Funcion para eliminar las campos seleccionadas en el rango*/
            function eliminarRango(campo)
            {

                    document.getElementById(campo+'Inicial').value = '';
                    document.getElementById(campo+'Final').value = '';

                    armarCondicion();
             }
             
            function llenarCondicion(titulo, tabla, estructura)
             {

//             alert('entra')
                var Campo = '';
                var totalCampo = document.getElementById('total'+tabla).value;
                

                if(tabla != 'Estado')
                {
                    if('<?php echo $tipoInforme?>' == 'Basico')
                    {
                        document.getElementById("condicion"+tabla).value = 'id'+tabla +' IN (';
                    }
                    else
                    {
                        if(tabla == 'Tercero')
                        {
                            document.getElementById("condicion"+tabla).value = 'codigoAlterno1Tercero IN (';
                        }
                        else
                        {
                            if(tabla == 'Bodega')
                            {    
                                document.getElementById("condicion"+tabla).value = 'codigoAlternoBodegaOrigen IN (';
                            }
                            else
                            {
                                document.getElementById("condicion"+tabla).value = 'codigoAlterno'+tabla +' IN (';
                            }
                        }
                    }
                }
                else
                {
                        document.getElementById("condicion"+tabla).value = 'estadoMovimiento IN (';
                }


                for(registro = 0; registro < totalCampo; registro++)
                {

                        if(!document.getElementById(tabla+"C"+ registro))
                        {
                            //alert(tabla+"C"+ registro);
                        }
                        else
                        {
                            if(document.getElementById(tabla+"C"+ registro).checked)
                            {
                                    Campo = Campo + document.getElementById(tabla+'N'+registro).value + '\', \'';



                                    document.getElementById("condicion"+tabla).value = document.getElementById("condicion"+tabla).value + 
                                                                                                                                    "'" +document.getElementById(tabla+'C'+registro).value + '\', ' ;

                                   if(tabla != 'Estado')
                                   {
                                       document.getElementById(tabla+registro).style.backgroundColor = "#8096A8";
                                   }
                                   
                                    

                            }
                            else
                            {
                                    document.getElementById(tabla+registro).style.backgroundColor = "";
                            }
                        }
                }

                document.getElementById("condicion"+tabla).value = document.getElementById("condicion"+tabla).value.substring(0, document.getElementById("condicion"+tabla).value.length - 3) + '\')';

                if (Campo != '')
                {
                        Campo = (Campo.substring(0, Campo.length -1));
                        estructura += '<tr>';
                        estructura += '<td ><label class="label">'+titulo+'</label></td>';
                        estructura += '<td ><label  style="font:Verdana, Geneva, sans-serif; font-size:9px;">'+Campo+'</label></td>'
                        estructura += '<td><a href="javascript:eliminarQuery(\''+tabla+'\')"><img src="../images/bl_borrar.png" border="0" /></a></td>';
                        estructura += '</tr>';

                        document.getElementById("filtro").value += titulo+' : '+Campo + ' * ';

                }
                else
                {
                        document.getElementById("condicion"+tabla).value = '';
                }


                // concatenamos en la condicion general todas las condiciones de cada filtro
                document.getElementById('condicionGeneral').value += ((document.getElementById('condicionGeneral').value != '' && document.getElementById("condicion"+tabla).value) != '' 
                                                                                                                                ? ' and ' : '') + document.getElementById("condicion"+tabla).value;


                return estructura;

             }
             
            function llenarTop10Cantidad()
             {
                        condicion = document.getElementById("condicionGeneral").value;
                        conectividad = document.getElementById("condicionConectividad").value;

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "marcacantDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/marcacomercialtop10cantidad.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombreMarca IS NOT NULL&conectividad="+conectividad} );


                        swfobject.embedSWF(
                          "open-flash-chart.swf", "categoriacantDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                         {"data-file":"../informes/graficos/categoriacomercialtop10cantidad.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombreCategoria IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "tercerocantDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/tercerocomercialtop10cantidad.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombre1Tercero IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "vendedorcantDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/vendedorcomercialtop10cantidad.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombre1Vendedor IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "tipoprodcantDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/tipoproductocomercialtop10cantidad.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombreTipoProducto IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "tiponegcantDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/tiponegociocomercialtop10cantidad.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombreTipoNegocio IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "colorcantDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/colorcomercialtop10cantidad.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombre1Color IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "tallacantDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                         {"data-file":"../informes/graficos/tallacomercialtop10cantidad.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombre1Talla IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "productocantDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/productocomercialtop10cantidad.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombreCortoProducto IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "temporadacantDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/temporadacomercialtop10cantidad.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombreTemporada IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "periodocantDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/periodocomercialtop10cantidad.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombrePeriodo IS NOT NULL&conectividad="+conectividad} );

                }


            function llenarTop10Valor()
                {
                        condicion = document.getElementById("condicionGeneral").value;
                        conectividad = document.getElementById("condicionConectividad").value;

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "marcavalDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/marcacomercialtop10valor.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombreMarca IS NOT NULL&conectividad="+conectividad} );


                        swfobject.embedSWF(
                          "open-flash-chart.swf", "categoriavalDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                         {"data-file":"../informes/graficos/categoriacomercialtop10valor.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombreCategoria IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "tercerovalDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/tercerocomercialtop10valor.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombre1Tercero IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "vendedorvalDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/vendedorcomercialtop10valor.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombre1Vendedor IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "tipoprodvalDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/tipoproductocomercialtop10valor.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombreTipoProducto IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "tiponegvalDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/tiponegociocomercialtop10valor.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombreTipoNegocio IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "colorvalDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/colorcomercialtop10valor.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombre1Color IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "tallavalDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                         {"data-file":"../informes/graficos/tallacomercialtop10valor.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombre1Talla IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "productovalDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/productocomercialtop10valor.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombreCortoProducto IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "temporadavalDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/temporadacomercialtop10valor.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombreTemporada IS NOT NULL&conectividad="+conectividad} );

                        swfobject.embedSWF(
                          "open-flash-chart.swf", "periodovalDet",
                          "100%", "90%", "9.0.0", "expressInstall.swf",
                          {"data-file":"../informes/graficos/periodocomercialtop10valor.graph.php?condic="+condicion+ (condicion != '' ? " and  " : "") +"nombrePeriodo IS NOT NULL&conectividad="+conectividad} );

                }
                
            function ejecutarInforme()
                {
                    
                   var condicion =document.getElementById('condicionGeneral').value;
                   var filtro = document.getElementById('filtro').value;
                   var conectividad = document.getElementById('condicionConectividad').value;
                   var tipoinforme = document.getElementById('tipoInforme').value;
         
                   consulta = window.open('../informes/informecomercial.info.php?condicion='+condicion+'&tipoInforme='+tipoinforme+'&filtro='+filtro+'&conectividad='+conectividad+'',"Formato","width=5000,height=5000,scrollbars=yes, status=0, toolbar=0, location=0, menubar=0, directories=0")
                   consulta.focus();
                    
                }
            
            
        </script>        
    <body>
        <form id = "documentocomercialfiltro" name="documentocomercialfiltro" method="POST" >
            <div class="suggestionsBox" id="consultaListaTercero" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaTerceroDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaTransportador" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaTransportadorDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaVendedor" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaVendedorDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaDocumento" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaDocumentoDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaGrupoDocumento" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaGrupoDocumentoDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaDocumentoConcepto" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaDocumentoConceptoDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaPeriodo" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaPeriodoDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaMoneda" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaMonedaDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaBodega" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaBodegaDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaBodegaDestino" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaBodegaDestinoDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaTipoProducto" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaTipoProductoDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaTipoNegocio" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaTipoNegocioDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaTemporada" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaTemporadaDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaMarca" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaMarcaDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaColor" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaColorDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaTalla" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaTallaDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaEstadoConservacion" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaEstadoConservacionDatos">
                        &nbsp;
                </div>
            </div> 
            <div class="suggestionsBox" id="consultaListaCiudad" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaCiudadDatos">
                        &nbsp;
                </div>
            </div>
            <div class="suggestionsBox" id="consultaListaCentroCosto" style="display: none; top:100px; left:100px;  float:left;">
                <img src="../images/upArrow.png" style="position:absolute; left: 20px;" alt="upArrow" />
                <div  class="suggestionList" id="consultaListaCentroCostoDatos">
                    &nbsp;
                </div>
            </div>             
            <div class="contenedorpantallas" style="width:727px">
              <div class="pestana"><?PHP echo (defined('INFORMES_COMERCIALES') ? INFORMES_COMERCIALES : 'Informes Comerciales'); ?></div>
                <div class="contenidopantalla">                    
                    <table width="90%">
                        <tr>
                            <td>
                                <label><?PHP echo (defined('INFORME_POR') ? INFORME_POR : 'Informe Por'); ?>:</label>
                            </td>
                            <td>
                                <select id="tipoInforme" name="tipoInforme" >
<!--                                    <option value="1">Top 10 Cantidad</option>
                                    <option value="2">Top 10 Valor</option>-->
                                    <option value="3"><?PHP echo (defined('DOCUMENTO') ? DOCUMENTO : 'Documento'); ?></option>
                                    <option value="14"><?PHP echo (defined('TIPO_NEGOCIO') ? TIPO_NEGOCIO : 'Tipo de Negocio'); ?></option>
                                    <option value="15"><?PHP echo (defined('VENDEDOR') ? VENDEDOR : 'Vendedor'); ?> - <?PHP echo (defined('TIPO_NEGOCIO') ? TIPO_NEGOCIO : 'Tipo de Negocio'); ?></option>
                                    <option value="16"><?PHP echo (defined('PRODUCTOS') ? PRODUCTOS : 'Producto'); ?> - <?PHP echo (defined('TIPO_NEGOCIO') ? TIPO_NEGOCIO : 'Tipo de Negocio'); ?></option>
                                    <option value="18"><?PHP echo (defined('PRODUCTOS') ? PRODUCTOS : 'Producto'); ?> - <?PHP echo (defined('TIPO_NEGOCIO') ? TIPO_NEGOCIO : 'Tipo de Negocio'); ?> - <?PHP echo (defined('DOCUMENTO') ? DOCUMENTO : 'Documento'); ?></option>
                                    <option value="4"><?PHP echo (defined('TERCERO') ? TERCERO : 'Tercero'); ?> - <?PHP echo (defined('DOCUMENTO') ? DOCUMENTO : 'Documento'); ?></option>
                                    <option value="5"><?PHP echo (defined('EMBARQUE') ? EMBARQUE : 'Embarque'); ?> - <?PHP echo (defined('DOCUMENTO') ? DOCUMENTO : 'Documento'); ?></option>
                                    <option value="6"><?PHP echo (defined('PRODUCTOS') ? PRODUCTOS : 'Producto'); ?></option>
                                    <option value="7"><?PHP echo (defined('BODEGA') ? BODEGA : 'Bodega'); ?> - <?PHP echo (defined('PRODUCTOS') ? PRODUCTOS : 'Producto'); ?></option>
                                    <option value="8"><?PHP echo (defined('TERCERO') ? TERCERO : 'Tercero'); ?> - <?PHP echo (defined('PRODUCTOS') ? PRODUCTOS : 'Producto'); ?></option>
                                    <option value="9"><?PHP echo (defined('TERCERO') ? TERCERO : 'Tercero'); ?> - <?PHP echo (defined('PRODUCTOS') ? PRODUCTOS : 'Producto'); ?> - <?PHP echo (defined('DOCUMENTO') ? DOCUMENTO : 'Documento'); ?></option>
                                    <option value="10"><?PHP echo (defined('VENDEDOR') ? VENDEDOR : 'Vendedor'); ?> - <?PHP echo (defined('PRODUCTOS') ? PRODUCTOS : 'Producto'); ?></option>
                                    <option value="11"><?PHP echo (defined('PRODUCTOS') ? PRODUCTOS : 'Producto'); ?> - <?PHP echo (defined('DOCUMENTO') ? DOCUMENTO : 'Documento'); ?></option>                                                                                                 
                                    <option value="17"><?PHP echo (defined('PRODUCTOS') ? PRODUCTOS : 'Producto'); ?> - <?PHP echo (defined('DOCUMENTO') ? DOCUMENTO : 'Documento'); ?> B&aacute;sico</option>                                                                                                 
                                    <option value="12"><?PHP echo (defined('SERIALES') ? SERIALES : 'Seriales'); ?></option>                                                                                                 
                                    <option value="13"><?PHP echo (defined('LOTES') ? LOTES : 'Lotes'); ?></option>                                                                                                 
                                    <option value="19">Cliente / Proveedor - Vendedor - Ciudad</option>
                                    <!--<option value="20"><?PHP // echo (defined('REFERENCIA_BASE') ? REFERENCIA_BASE : 'Referencia Base'); ?></option>-->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table width="700px">
                                    <tr>
                                        <td class="tbl-header" style="text-align: center;" colspan="5" >
                                            <label><?PHP echo (defined('RANGOS') ? RANGOS : 'Rangos'); ?></label> 
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            
                            <td>
                               <label><?PHP echo (defined('CAMPO') ? CAMPO : 'Campo'); ?></label>
                            </td>
                            <td>
                               <label><?PHP echo (defined('DESDE') ? DESDE : 'Desde'); ?></label>
                            </td>
                            <td>
                               <label><?PHP echo (defined('HASTA') ? HASTA : 'Hasta'); ?></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?PHP echo (defined('DOCUMENTO') ? DOCUMENTO : 'Documento'); ?></label>
                            </td>
                            <td>
                                <input type="text" id="numeroMovimientoInicial" name="numeroMovimientoInicial" value="" style="width:100px;" onblur="armarCondicion('numeroMovimiento')"/>                                 
                            </td>
                            <td>
                                <input type="text" id="numeroMovimientoFinal" name="numeroMovimientoFinal" value="" style="width:100px;" onblur="armarCondicion('numeroMovimiento')"/>                                 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?PHP echo (defined('FECHA_ELABORACION') ? FECHA_ELABORACION : 'Fecha Elaboraci&oacute;n'); ?></label>
                            </td>
                            <td>
                                <input type="text" id="fechaElaboracionMovimientoInicial" name="fechaElaboracionMovimientoInicial" value="" style="width:100px;" readonly onchange="armarCondicion('fechaElaboracionMovimiento')"/>                                 
                            </td>
                            <td>
                                <input type="text" id="fechaElaboracionMovimientoFinal" name="fechaElaboracionMovimientoFinal" value="" style="width:100px;" readonly onchange="armarCondicion('fechaElaboracionMovimiento')"/>                                 
                            </td>
                        </tr>
                        <tr>                                                    
                            <td>
                                <label><?PHP echo (defined('REFERENCIA') ? REFERENCIA : 'Referencia'); ?></label>
                            </td>
                            <td>
                                <input type="text" id="referenciaProductoInicial" name="referenciaProductoInicial" value="" style="width:100px;" onblur="armarCondicion('referenciaProducto')"/>                                 
                            </td>
                            <td>
                                <input type="text" id="referenciaProductoFinal" name="referenciaProductoFinal" value="" style="width:100px;" onblur="armarCondicion('referenciaProducto')"/>                                 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?PHP echo (defined('NIT_CC') ? NIT_CC : 'Nit CC'); ?>.</label>
                            </td>
                            <td>
                                <input type="text" id="documentoTerceroInicial" name="documentoTerceroInicial" value="" style="width:100px;"onblur="armarCondicion('documentoTercero')"/>                                 
                            </td>
                            <td>
                                <input type="text" id="documentoTerceroFinal" name="documentoTerceroFinal" value="" style="width:100px;" onblur="armarCondicion('documentoTercero')"/>                                 
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <label><?PHP echo (defined('BASE_IMPUESTO') ? BASE_IMPUESTO : 'Base imp'); ?>.</label>
                            </td>
                                                        <td>
                                <input type="text" id="valorBaseMovimientoInicial" name="valorBaseMovimientoInicial" value="" style="width:100px;" onblur="armarCondicion('valorBaseMovimiento')"/>                                 
                            </td>
                            <td>
                                <input type="text" id="valorBaseMovimientoFinal" name="valorBaseMovimientoFinal" value="" style="width:100px;" onblur="armarCondicion('valorBaseMovimiento')"/>                                 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?PHP echo (defined('VALOR_TOTAL') ? VALOR_TOTAL : 'Vr Total'); ?></label>
                            </td>
                            <td>
                                <input type="text" id="valorTotalMovimientoInicial" name="valorTotalMovimientoInicial" value="" style="width:100px;" onblur="armarCondicion('valorTotalMovimiento')"/>                                 
                            </td>
                            <td>
                                <input type="text" id="valorTotalMovimientoFinal" name="valorTotalMovimientoFinal" value="" style="width:100px;" onblur="armarCondicion('valorTotalMovimiento')"/>                                 
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table width="700px">
                                    <tr>
                                        <td class="tbl-header" style="text-align: center;" colspan="5" >
                                            <label><?PHP echo (defined('ESTADOS') ? ESTADOS : 'Estados'); ?></label> 
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td  class="celda_filtro" width="50%" id="Estado0">
                                <label class="label" style="font-size:9px"><?PHP echo (defined('ACTIVO') ? ACTIVO : 'ACTIVO'); ?>
                                <input name="estado[]" type="checkbox" style="visibility:hidden" onclick="armarCondicion('Estado')" id="EstadoC0" value="ACTIVO"  /></label>
                                <input name="S[]" id="EstadoN0" type="hidden" value="ACTIVO"/>
                            </td>
                            <td  class="celda_filtro" width="50%" id="Estado1">
                                <label class="label" style="font-size:9px"><?PHP echo (defined('ANULADO') ? ANULADO : 'ANULADO'); ?>
                                <input name="estado[]" type="checkbox" style="visibility:hidden" onclick="armarCondicion('Estado')" id="EstadoC1" value="ANULADO"/></label>
                                <input name="S[]" id="EstadoN1" type="hidden" value="ANULADO"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table width="700px">
                                    <tr>
                                        <td class="tbl-header" style="text-align: center;" colspan="5" >
                                            <label><?PHP echo (defined('FILTROS_DOCUMENTO') ? FILTROS_DOCUMENTO : 'Filtros Del Documento'); ?></label> 
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?PHP echo (defined('PERIODO') ? PERIODO : 'Periodo'); ?> </label>
                            </td>
                            <td>
                                <input type="text" id="buscarPeriodo" name="buscarPeriodo" value="" autocomplete="off" onfocus="llenarConsultaLista('Periodo',document.getElementById('buscarPeriodo'));" onclick="xajax_llenarPeriodo(document.getElementById('filtroPeriodo').innerHTML, document.getElementById('buscarPeriodo').value.replace('*','%').replace('*','%'),'',1, (document.getElementById('condicionConectividad') ? document.getElementById('condicionConectividad').value : ''), 'idPeriodo,codigoAlternoPeriodo, nombrePeriodo, fechaInicialPeriodo', 'codigoAlternoPeriodo', '<?php echo $tipoInforme; ?>');"/> 
                            </td>
                            
                            <td>
                                <label><?PHP echo (defined('TERCERO') ? TERCERO : 'Tercero'); ?>Tercero </label>
                            </td>
                            <td>
                                <input type="text" id="buscarTercero" name="buscarTercero" value="" autocomplete="off" onfocus="llenarConsultaLista('Tercero',document.getElementById('buscarTercero'));" onclick='xajax_llenarTercero(document.getElementById("filtroTercero").innerHTML,document.getElementById("buscarTercero").value.replace("*","%").replace("*","%"),condictercero,"",1,document.getElementById("condicionConectividad").value, "idTercero, codigoAlterno1Tercero, nombre1Tercero, nombre2Tercero, documentoTercero", "codigoAlterno1Tercero","<?php echo $tipoInforme?>");'/> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?PHP echo (defined('TRANSPORTADOR') ? TRANSPORTADOR : 'Transportador'); ?> </label>
                            </td>
                            <td>
                                <input type="text" id="buscarTrans" name="buscarTrans" value="" autocomplete="off" onfocus="llenarConsultaLista('Transportador',document.getElementById('buscarTrans'));" onclick='xajax_llenarTransportador(document.getElementById("filtroTransportador").innerHTML,document.getElementById("buscarTrans").value.replace("*","%").replace("*","%"),condictrans,"",1,document.getElementById("condicionConectividad").value, "idTercero, codigoAlterno1Tercero, nombre1Tercero, nombre2Tercero, documentoTercero", "codigoAlterno1Tercero","<?php echo $tipoInforme?>");'/> 
                            </td>
                            <td>
                                <label><?PHP echo (defined('VENDEDOR') ? VENDEDOR : 'Vendedor'); ?> </label>
                            </td>
                            <td>
                                <input type="text" id="buscarVendedor" name="buscarVendedor" value="" autocomplete="off" onfocus="llenarConsultaLista('Vendedor',document.getElementById('buscarVendedor'));" onclick='xajax_llenarVendedor(document.getElementById("filtroVendedor").innerHTML,document.getElementById("buscarVendedor").value.replace("*","%").replace("*","%"),condicvend,"",1,document.getElementById("condicionConectividad").value, "idTercero, codigoAlterno1Tercero, nombre1Tercero, nombre2Tercero, documentoTercero", "codigoAlterno1Tercero","<?php echo $tipoInforme?>");'/> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <?PHP echo (defined('GRUPO_DOCUMENTO') ? GRUPO_DOCUMENTO : 'Grupo Documento'); ?>
                                </label>
                            </td>
                            <td>
                                <input  type="text" name="buscarGrupoDocumento" id="buscarGrupoDocumento" value="" autocomplete="off"  autocomplete="off" onfocus="llenarConsultaLista('GrupoDocumento',document.getElementById('buscarGrupoDocumento'));" onclick="xajax_llenarGrupoDocumento(document.getElementById('filtroGrupoDocumento').innerHTML, document.getElementById('buscarGrupoDocumento').value.replace('*','%').replace('*','%'), '','',1)" />
                            </td>
                            <td>
                                <label><?PHP echo (defined('DOCUMENTO') ? DOCUMENTO : 'Documento'); ?> </label>
                            </td>
                            <td>
                                <input type="text" id="buscarDocumento" name="buscarDocumento" value="" autocomplete="off" onfocus="llenarConsultaLista('Documento',document.getElementById('buscarDocumento'));" onclick="xajax_llenarDocumento(document.getElementById('filtroDocumento').innerHTML,document.getElementById('buscarDocumento').value.replace('*','%').replace('*','%'), condicdocum,'',1,document.getElementById('condicionConectividad').value, 'idDocumento, codigoAlternoDocumento, nombreDocumento', 'codigoAlternoDocumento','<?php echo $tipoInforme?>');"/> 
                            </td>
                                                        
                        </tr>
                        <tr>
                            
                            <td>
                                <label><?PHP echo (defined('CONCEPTO') ? CONCEPTO : 'Concepto'); ?> </label>
                            </td>
                            <td>
                                <input type="text" id="buscarDocumentoConcepto" name="buscarDocumentoConcepto" value="" autocomplete="off" onfocus="llenarConsultaLista('DocumentoConcepto',document.getElementById('buscarDocumentoConcepto'));" onclick="xajax_llenarDocumentoConcepto(document.getElementById('filtroDocumentoConcepto').innerHTML, document.getElementById('buscarDocumentoConcepto').value.replace('*','%').replace('*','%'),'','',1,document.getElementById('condicionConectividad').value, 'idDocumentoConcepto, codigoAlternoDocumentoConcepto, nombreDocumentoConcepto', 'codigoAlternoDocumentoConcepto','<?php echo $tipoInforme?>');"/> 
                            </td>
                            <td>
                                <label><?PHP echo (defined('MONEDA') ? MONEDA : 'Moneda'); ?> </label>
                            </td>
                            <td>
                                <input type="text" id="buscarMoneda" name="buscarMoneda" value="" autocomplete="off" onfocus="llenarConsultaLista('Moneda',document.getElementById('buscarMoneda'));" onclick='xajax_llenarMoneda(document.getElementById("filtroMoneda").innerHTML,document.getElementById("buscarMoneda").value.replace("*","%").replace("*","%"),"", 1,document.getElementById("condicionConectividad").value, "idMoneda, codigoAlternoMoneda, nombreLargoMoneda", "codigoAlternoMoneda","<?php echo $tipoInforme?>");'/> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?PHP echo (defined('BODEGA_ORIGEN') ? BODEGA_ORIGEN : 'Bodega Origen'); ?></label>
                            </td>
                            <td>
                                <input type="text" id="buscarBodega" name="buscarBodega" value="" autocomplete="off" onfocus="llenarConsultaLista('Bodega',document.getElementById('buscarBodega'));" onclick='xajax_llenarBodega(document.getElementById("filtroBodega").innerHTML,document.getElementById("buscarBodega").value.replace("*","%").replace("*","%"), "", 1,document.getElementById("condicionConectividad").value, "idBodega, codigoAlternoBodega, nombreBodega", "codigoAlternoBodega","<?php echo $tipoInforme?>");'/> 
                            </td>
                            <td>
                                <label><?PHP echo (defined('BODEGA_DESTINO') ? BODEGA_DESTINO : 'Bodega Destino'); ?> </label>
                            </td>
                            <td>
                                <input type="text" id="buscarBodegaDestino" name="buscarBodegaDestino" value="" autocomplete="off" onfocus="llenarConsultaLista('BodegaDestino',document.getElementById('buscarBodegaDestino'));" onclick='xajax_llenarBodegaDestino(document.getElementById("filtroBodegaDestino").innerHTML,document.getElementById("buscarBodegaDestino").value.replace("*","%").replace("*","%"), "", 1,document.getElementById("condicionConectividad").value, "idBodegaDestino, codigoAlternoBodegaDestino, nombreBodegaDestino", "codigoAlternoBodega","<?php echo $tipoInforme?>");'/> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?PHP echo (defined('TIPO_PRODUCTO') ? TIPO_PRODUCTO : 'Tipo Producto'); ?> </label>
                            </td>
                            <td>
                                <input type="text" id="buscarTipoProducto" name="buscarTipoProducto" value="" autocomplete="off" onfocus="llenarConsultaLista('TipoProducto',document.getElementById('buscarTipoProducto'));" onclick=' xajax_llenarTipoProducto(document.getElementById("filtroTipoProducto").innerHTML,document.getElementById("buscarTipoProducto").value.replace("*","%").replace("*","%"), "", 1,document.getElementById("condicionConectividad").value, "idTipoProducto, codigoAlternoTipoProducto, nombreTipoProducto", "codigoAlternoTipoProducto","<?php echo $tipoInforme?>");'/> 
                            </td>
                            <td>
                                <label><?PHP echo (defined('TIPO_NEGOCIO') ? TIPO_NEGOCIO : 'Tipo Negocio'); ?> </label>
                            </td>
                            <td>
                                <input type="text" id="buscarTipoNegocio" name="buscarTipoNegocio" value="" autocomplete="off" onfocus="llenarConsultaLista('TipoNegocio',document.getElementById('buscarTipoNegocio'));" onclick= 'xajax_llenarTipoNegocio(document.getElementById("filtroTipoNegocio").innerHTML,document.getElementById("buscarTipoNegocio").value.replace("*","%").replace("*","%"), "", 1,document.getElementById("condicionConectividad").value, "idTipoNegocio, codigoAlternoTipoNegocio, nombreTipoNegocio", "codigoAlternoTipoNegocio","<?php echo $tipoInforme?>");'/> 
                            </td>
                        </tr>
                        <tr>       
                            <td>
                                <label><?PHP echo (defined('MARCA') ? MARCA : 'Marca'); ?> </label>
                            </td>
                            <td>
                                <input type="text" id="buscarMarca" name="buscarMarca" value="" autocomplete="off" onfocus="llenarConsultaLista('Marca',document.getElementById('buscarMarca'));" onclick='xajax_llenarMarca(document.getElementById("filtroMarca").innerHTML,document.getElementById("buscarMarca").value.replace("*","%").replace("*","%"), "", 1,document.getElementById("condicionConectividad").value, "idMarca, codigoAlternoMarca, nombreMarca", "codigoAlternoMarca","<?php echo $tipoInforme?>");'/> 
                            </td>
                            <td>
                                <label><?PHP echo (defined('TEMPORADA') ? TEMPORADA : 'Temporada'); ?> </label>
                            </td>
                            <td>
                                <input type="text" id="buscarTemporada" name="buscarTemporada" value="" autocomplete="off" onfocus="llenarConsultaLista('Temporada',document.getElementById('buscarTemporada'));" onclick='xajax_llenarTemporada(document.getElementById("filtroTemporada").innerHTML,document.getElementById("buscarTemporada").value.replace("*","%").replace("*","%"), "", 1,document.getElementById("condicionConectividad").value, "idTemporada, codigoAlternoTemporada, nombreTemporada", "codigoAlternoTemporada","<?php echo $tipoInforme?>");'/> 
                            </td>
                        </tr>
                        <tr>                            
                            <td>
                                <label><?PHP echo (defined('COLOR') ? COLOR : 'Color'); ?> </label>
                            </td>
                            <td>
                                <input type="text" id="buscarColor" name="buscarColor" value="" autocomplete="off" onfocus="llenarConsultaLista('Color',document.getElementById('buscarColor'));" onclick='xajax_llenarColor(document.getElementById("filtroColor").innerHTML,document.getElementById("buscarColor").value.replace("*","%").replace("*","%"),"",1, document.getElementById("condicionConectividad").value, "idColor, codigoAlternoColor, nombre1Color", "codigoAlternoColor","<?php echo $tipoInforme?>");'/> 
                            </td>
                            <td>
                                <label><?PHP echo (defined('TALLA') ? TALLA : 'Talla'); ?> </label>
                            </td>
                            <td>
                                <input type="text" id="buscarTalla" name="buscarTalla" value="" autocomplete="off" onfocus="llenarConsultaLista('Talla',document.getElementById('buscarTalla'));" onclick='xajax_llenarTalla(document.getElementById("filtroTalla").innerHTML,document.getElementById("buscarTalla").value.replace("*","%").replace("*","%"), "",1,document.getElementById("condicionConectividad").value, "idTalla, codigoAlternoTalla, nombre1Talla", "codigoAlternoTalla","<?php echo $tipoInforme?>");'/> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?PHP echo (defined('ESTADO_CONSERVACION') ? ESTADO_CONSERVACION : 'Estado Conservaci&oacute;n'); ?> </label>
                            </td>     
                            <td>
                                <input type="text" id="buscarEstadoConservacion" name="buscarEstadoConservacion" value="" autocomplete="off" onfocus="" onclick='llenarConsultaLista("EstadoConservacion",document.getElementById("buscarEstadoConservacion"));xajax_llenarEstadoConservacion(document.getElementById("filtroEstadoConservacion").innerHTML,document.getElementById("buscarEstadoConservacion").value.replace("*","%").replace("*","%"), "","",1,document.getElementById("condicionConectividad").value, "codigoAlternoEstadoConservacion, nombreEstadoConservacion", "codigoAlternoEstadoConservacion","<?php echo $tipoInforme?>");'/> 
                            </td>
                            <td>
                                <label><?PHP echo (defined('CIUDAD') ? CIUDAD : 'Ciudad'); ?> </label>
                            </td>     
                            <td>
                                <input type="text" id="buscarCiudad" name="buscarCiudad" value="" autocomplete="off" onfocus="" onclick='llenarConsultaLista("Ciudad",document.getElementById("buscarCiudad"));xajax_llenarCiudad(document.getElementById("filtroCiudad").innerHTML,document.getElementById("buscarCiudad").value.replace("*","%").replace("*","%"),"",1,document.getElementById("condicionConectividad").value, "idCiudad, codigoAlternoCiudad, nombreCiudad", "idCiudad","<?php echo $tipoInforme?>");'/> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Centro de Costo
                                </label>
                            </td>
                            <td>
                                <input  type="text" name="buscarCentroCosto" id="buscarCentroCosto" value="" autocomplete="on" onfocus="llenarConsultaLista('CentroCosto',document.getElementById('buscarCentroCosto'));" onclick="xajax_llenarCentroCosto(document.getElementById('filtroCentroCosto').innerHTML, document.getElementById('buscarCentroCosto').value.replace('*','%').replace('*','%'), '','', 1)"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        
                        <?php
                        require_once'../clases/db.class.php'; 
                        require_once'../clases/conf.class.php';
                        $conf = Conf::getInstance();

                        $sql = "select TABLE_NAME, TABLE_ROWS from INFORMATION_SCHEMA.TABLES 
                                where TABLE_NAME = 'Conectividad' and TABLE_SCHEMA= '".$conf->getDB()."' " ;

                        //echo $sql;
                        /*Ejecutamos la query*/ 
                        $bd = Db::getInstance();
                        $query = $bd->ConsultarVista($sql);

                        if($query[0]['TABLE_ROWS'] > 0)
                        { ?>
                        <tr>
                            <td>
                                <label>Bases de Datos</label>
                            </td>
                            <td>
                                <input type="text" id="buscarConectividad" name="buscarConectividad" value="" style="width: 250px;" autocomplete="off" onfocus="llenarConsultaLista('Conectividad',document.getElementById('buscarConectividad'));" onclick="xajax_llenarConectividad(document.getElementById('filtroConectividad').innerHTML, document.getElementById('buscarConectividad').value.replace('*','%').replace('*','%'), '',1)">
                            </td>
                        </tr>
                        <?php }
                        ?>                                                                        
                        </table>
                        <table>
                        <tr>
                            <td colspan="3">
                                    <?php

                                        require_once('../clases/sayadiv.class.php');
                                        $SayaDiv = new SayaDiv();

                                        $SayaDiv->SayaDiv('query', '0px','0px','350px','680px','#F0F0F0', ''.(defined('CONDICIONES_FILTRO') ? CONDICIONES_FILTRO : 'Condiciones de Filtro').'', 'relative', 'G');

                                        $SayaDiv->CrearDiv();

                                    ?>

                                    <script>xajax_crearCampo(document.getElementById('query').innerHTML)</script>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="button" id="generar" name="generar" value="<?php echo (defined('GENERAR_INFORME') ? GENERAR_INFORME : 'Generar Informe');?>" onclick="ejecutarInforme();"/>
                            </td>                            
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </body>
</html>
<script>
    
setTimeout(function(){document.documentocomercialfiltro.EstadoC0.click();},1000);

Calendar.setup({
inputField : "fechaElaboracionMovimientoInicial", // id del campo de texto
ifFormat : "%Y-%m-%d", // formato de la fecha que se escriba en el campo de texto
button : "fechaElaboracionMovimientoInicial" // el id del botón que lanzará el calendario
});

Calendar.setup({
inputField : "fechaElaboracionMovimientoFinal", // id del campo de texto
ifFormat : "%Y-%m-%d", // formato de la fecha que se escriba en el campo de texto
button : "fechaElaboracionMovimientoFinal" // el id del botón que lanzará el calendario
});
        
</script>