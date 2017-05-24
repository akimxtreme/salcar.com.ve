<?php include_once("functions.php"); ?>
<?php head(); ?>
<?php menu(); ?>
<section id="inner-headline">
	<div class="container">
		<div class="row" style="margin-bottom:0px;">
			<div class="col-lg-12">
				<h1>Distribuidores</h1>				
			</div>
		</div>
	</div>
</section>
            
<section id="content">

	<div class="container" style="margin-top: 50px; padding-bottom:50px;text-align:justify;">
	    <div class="row">
					<div class="col-lg-12">						
						<ul class="nav nav-tabs">
							<li class="active"><a href="#t0" data-toggle="tab"><i class="icon-briefcase"></i> Cadenas</a></li>
							<li><a href="#t1" data-toggle="tab">Área Metropolitana</a></li>
							<li><a href="#t2" data-toggle="tab">Aragua</a></li>
							<li><a href="#t3" data-toggle="tab">Carabobo</a></li>
							<li><a href="#t4" data-toggle="tab">Miranda</a></li>
							<li><a href="#t5" data-toggle="tab">Lara</a></li>
							<li><a href="#t6" data-toggle="tab">Oriente</a></li>
							<li><a href="#t7" data-toggle="tab">Táchira</a></li>
							<li><a href="#t8" data-toggle="tab">Vargas</a></li>
							<li><a href="#t9" data-toggle="tab">Zulia</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="t0">
								<table class="table table-bordered table-striped table-hover">
                                    <tr class="active">
                                        <th class="text-center">Imagen</th>
                                        <th class="text-center">Distribuidor</th>
                                        <th class="text-center">Dirección</th>	
                                    </tr>
                                    
                                    <?php
                                    // mall($nombre,$imagen,$direccion);
                                    mall('CENTRAL MADEIRENSE, C.A.','img/marcas/centralMadeirense.jpg','http://www.centralmadeirense.com.ve/');
                                    mall('PLANSUAREZ, C.A. - LA TRINIDAD','img/marcas/planSuarez.jpg','http://www.plansuarez.com.ve/web/');
                                    mall('MAKRO','img/marcas/makro.jpg','http://www.makro.com.ve');
                                    mall('IVOO','img/marcas/ivoo.jpg','http://ivoo.com/');                             mall('JJPEREZ ALEMAN','img/marcas/jj-perez-aleman.jpg','http://jjpa.com.ve/');
                                    mall('AUTOMERCADO SAN DIEGO','img/marcas/sanDiego.jpg','CC Don Salvador Avda Fermin Toro. San Juan de Los Moros');
                                    mall('AUTOMERCADO SAN DIEGO','img/marcas/sanDiego.jpg','La Isabélica CC Concentro Valencia. Edo Carabobo');
                                    mall('AUTOMERCADO SAN DIEGO','img/marcas/sanDiego.jpg','Avda La Paz Sector La Bélize CC Pto Cabello');
                                    mall('AUTOMERCADO SAN DIEGO','img/marcas/sanDiego.jpg','CC Cagua Local Nro 15 Carretera Nacional de Cagua');                                            
                                    ?>
                                </table>
							</div>
							<!-- Area Metropolitana -->
							<div class="tab-pane" id="t1">
								<table class="table table-bordered table-striped table-hover">
                                    <tr class="active">
                                        <th class="text-center">Distribuidor</th>
                                        <th class="text-center">Dirección</th>		
                                        <th class="text-center">Teléfonos</th>
                                        <th class="text-center">Ciudad</th>
                                    </tr>           

                                    <?php            
                                    distribuidor('COMERCIAL SALCAR DE ANTIMANO, C.A.','ENTRE CALLES CARMEN Y ROSARIO, FRENTE A LA PLAZA ANTIMANO LOCAL No. 2.','443-23-30-472-25-51','CARACAS');
                                    distribuidor('REPRESENTACIONES VE, S.A.','AV. FRANCISCO DE MIRANDA EDIF. CATANIA P.B. LOCAL "A" AL LADO DEL CORREO CHACAO.','0212/263-85-07','CARACAS');
                                    distribuidor('COMERCIAL AMANECER 2005, C.A.','CALLE COLOMBIA ENTRE PANAMERICANA Y LOS FLORES Nº 18 LOCAL A . CATIA','872-05-56','CARACAS');
                                    distribuidor('JAQUELINE RIVAS','GUATIRE URB. LAS ROSAS CONJUNTO RESIDENCIAL ROSA BLANCA CALLE 6 N. 96','344.30.38 casa','CARACAS');
                                    distribuidor('INVERSIONES LILIANA 2180.C.A','AV.BARALT PIÑANGO A LLAGUNO DEBAJO DE EL PUENTE LLAGUNO','0212/8630998','');
                                    distribuidor('COMERCIAL NURIA, S.R.L.','AV. PPAL. DEL CEMENTERIO, ENTRE ESQ. LAS PALMAS Y VEREDA A.','0212-631.68.23 / 0414-323.35.37','CARACAS');
                                    distribuidor('FRIGORIFICO Y BODEGON HERMANOS VIEIRA, C.A.','AV. PPAL. DE LA CARRETERA QUE CONDUCE AL JUNQUITO, KM. 12, SECTOR LUIS HURTADO, EDF. CARISE, PB. LOCAL Nº. 1 Y 2.','0212-422.28.48','CARACAS');
                                    distribuidor('GRUPO NATA J , C.A.','CALLE COLOMBIA ENTRE CRISTO Y LOS MAGALLANES, P.B. Nº. 6, URB. NUEVA CARACAS, CATIA','0212-872.69.48 0414/019.47.48','CARACAS');
                                    distribuidor('QUINCALLA 107 ELISEO SANCHEZ','AV. UNIVERSIDAD PERICO A MONROY. CARACAS','0212-572.49.65','CARACAS');
                                    distribuidor('INVERSIONES EL CHISPAZO DEL VALLE, C.A.','Av. INTERCOMUNAL DEL VALLE C. C. EL VALLE, NIVEL 7 LOCAL 11. EL VALLE','0212-690.94.75','CARACAS');
                                    distribuidor('DISTRIBUIDORA MAXIHOGAR, C.A.','AV. BARALT, ESQ. MUÑOZ A PIÑANGO, EDF. LIBERTADOR, LOCALES D,E Y F','0212-863.04.86 0486/ 8624632 0424/203.58','CARACAS');
                                    distribuidor('DISTRIBUIDORA EL TIGRITO 2000, C.A.','CALLE REAL CON CALLE LA ESTACION, ANTIMANO','0212-472.87.70','CARACAS');
                                    distribuidor('DISTRIBUIDORA APOLO 111, C.A.','2DA. AV. DE LOS FLORES, ENTRE BOULEVARD DE CATIA Y CALLE COLOMBIA. NUEVA CARACAS LOCAL COMERCIAL 3 P.B. 12 CARACAS','0212-870.81.52','CARACAS');
                                    distribuidor('WILLIAM ALEXANDER ZAMBRANO VELASCO','AV. 3era TRANSVERSAL I 50 EDIF. CUNAGUARO PISO 5 APTO 5-D URB. MONTALBAN CARICUAO, URB. HACIENDA LOS BAEZ, EDF. ELEAZAR, CALLE LA LINEA, PISO 2, APTO. 3-C','0212-614.29.64 0424-1536199 nelkary','CARACAS');
                                    distribuidor('COMERCIALIZADORA SAN MAR, C.A.','SAN MARTIN, MERCADO MUNICIPAL, LA ARAÑA, LOCAL Nº. 8 AL LADO DE VENTA DE PAJAROS','0212-462.86.46','CARACAS');
                                    distribuidor('COMERCIAL ONE668, C. A.','Av. BARAL ESQUINA CUARTEL VIEJO A BALCONCITO. EDIF. TORRE LILIANA, P.B. LOCAL No. 5.','0412-9968647','CARACAS');
                                    distribuidor('ELECTRODOMESTICOS Y BAZAR BORIS, C.A','BLOQUE 7, LOCAL 40, EL SILENCIO','0212-482.13.31','CARACAS');
                                    distribuidor('ELECTRONICA YULIO. C.A.','AV. PRINCIPAL DEL CEMENTERIO, CARACAS','0212-632.10.59/815.06.84','CARACAS');
                                    distribuidor('COMERCIAL TODO HOGAR 3000, C.A.','CALLE COLOMBIA, EDF. PAULA, LOCAL 47, ENTRE PANAMERICA Y EL CRISTO, CARACAS','0212-870.12.92','CARACAS');
                                    distribuidor('DISTRIBUIDORA LA BILBAINA, C.A.','AV SUR 4 ESQ. MUNICIPAL A REDUCTO A MUNICIPAL EDF CADI PISO PB LOCAL A, URB SANTA TERESA EL SILENCIO','0212-484.78.11 484.301.76','CARACAS');
                                    distribuidor('JAIRO ELECTRONICS SIGLO XXI, C. A.','CALLE COLOMBIA, ENTRE PANAMERICANA Y CRISTO. CATIA','212-871.2004','CARACAS');
                                    distribuidor('AUDIO VIDEO GLORIETA C.A.','Esquina Reducto a Glorieta Edif. San Benito Piso PB Local 2, Sector Santa Teresa','0212-484.19.73','CARACAS');
                                    distribuidor('AUDIO VIDEO HIPPER','C.A. Esq. Mercaderes Edif. Mercaderes Piso Pb, Local 4,5,6 Urb. El Silencio','0212-484.45.38 481.66.04','CARACAS');                                    
                                    distribuidor('FERRETERIA QUINCALLA LA RUTA DEL SOL, S. R. L.','Av. BARALT, ESQ. QUINTA CRESPO, EDIF. MACARIZACUA, P. B. LOCAL No. 3. QUINTA CRESPO.','212-484.2793','CARACAS');                                       
                                    distribuidor('DISTRIBUIDORA RAFQA, C A.','CALLE ARGENTINA ENTRE 2da. Y 3ra. AVENIDA, EDIF. ALBA. CATIA','212-872.1195','CARACAS');                                       
                                    distribuidor('QUINCALLA MI CARLOTA','CALLE ENGRACIA ENTRE CALLE PEREZ BONALDE Y CALLE COLOMBIA, LOCAL 1, FRENTE A REST. BUENOS AIRES. CATIA.','212-493.9070/ 416-713.0002','CARACAS');                                       
                                    distribuidor('COMERCIAL FERRETEANDO, C. A.','Av. GARCI GARCI GONZALEZ DA SILVA, EDIF. FERRETEANDO, P.B.','0212/471/15/30','CARACAS');                                     
                                    distribuidor('BUENA VISTA HOGAR, C. A.','Av. FRANCISCO DE MIRANDA, SECTOR BUENA VISTA CASA No. 107','212-887.3674','CARACAS');                                       
                                    distribuidor('INVERSIONES NOUR, C.A.','AV. UNIVERSIDAD, EDF. RIO PAJUEY, P.B. LOCAL Nº. 2, URB. LA CANDELARIA, FRENTE AVON','0212-578.49.99','CARACAS');                                     
                                    distribuidor('UNIVERSIDAD PERFUMERIA 2008, C.A.','AV. INIVERSIDAD, ESQ. DE PERICO A MONROY, EDF. RIO PAJUEY. P.B, LOCAL Nº. 1, LA CANDELARIA','0212-572.26.25, 0414-250.25.00','CARACAS');                                    
                                    distribuidor('BAZAR EL TILAR, C.A.','ESQUINA PELIGRO A ALCABALA EDIF. CONCEPCION PB. URB. LA CANDELARIA AL LADO DE CLINICAS VENEZUELA','0212-5726697','CARACAS');                                       
                                    distribuidor('REGALOS MIKASA 80, C. A.','Av. UNIVERSIDAD ESQUINA MONROY A MISERICORDIA No. 147. LA CANDELARIA','212-576.5918','CARACAS');                                    
                                    distribuidor('INVERSIONES HAMRIT 07, C.A','CALLE COLOMBIA ENTRE PANAMERICA, 2da. AV. EDF. VILLA SOL, LOCAL 1,','0212-872.27.53/ 870.4078','CARACAS');                                       
                                    distribuidor('PAMOL ELECTRONICS, C. A.','Av. UNIVERSIDAD, SOCIEDAD A TRAPOSOS, PASAJE ZING LOCAL L/29/30, AL ALDO DE LA ESCALERA MECANICA.','212-541.3868','CARACAS');                                    
                                    distribuidor('CORPORACION SOUTEL, C. A.','CAMEJO A COLON, PASAJE ZING. EL SILENCIO','212-545.6637','CARACAS');                                      
                                    distribuidor('INVERSIONES SIRIO EL VENEZOLANO 2021, C.A.','CALLE 40 CC MONTALBAN NIVEL PE LOCAL 1 URB. MONTALBAN ll','0212/ 471-15-11 Y 0424/1708810','CARACAS');                                
                                    distribuidor('TACHER´S ELECTRONICA, C.A.','ESQ. LAS MADRICES EDIF. LAS MADRICES, PISO 1, LOCAL 1 URB. CATEDRAL','0212-563.77.55','CARACAS');                                       
                                    distribuidor('GOLDEN PARK, C. A.','Av. MEXICO CON CALLE SUR 19 EDIF. DORAL MEXICO, LOCAL 9. PARQUE CARABOBO','212-572.1242','CARACAS');                           
                                    distribuidor('MUEBLERIA G & C SIGLO XXI, C. A.','CARRETERA LAS ADJUNTAS CASA No. 9 URB. LAS NIEVES.','212-814.8850/ 431.8468 fax','CARACAS');                                      
                                    distribuidor('REPRESENTACIONES CASPER, C. A.','CALLE REAL DE ANTIMANO ENTRE BOULEVARD Y ESTACION, EDIF. TELESTA, P.B. No. 17.','212-472.2096/ 7017','CARACAS');                                       
                                    distribuidor('VISODI PAPELERIA Y COMPUTACION','AV. PRINCIPAL CC LOS MOLINOS NIVEL 2 LOCAL 59 URB SAN MARTIN','0212-4510514/ 451.4817/ 4615051','CARACAS');                                     
                                    distribuidor('VISODI EL CHALET DEL CARTUCHO. C. A.','Av. SAN MARTIN, C.C. LOS MOLINOS NIVEL PB. LOCAL L-24 URB. EL PARAISO','0212-452.01-04 0212- 451.48-17 ','CARACAS');                                       
                                    distribuidor('CORPORACION ELECTRONICA LA BOYERA, C. A.','Av. PRINCIPAL C.C. LA BOYERA PRIMER PISO. URB. LA BOYERA.','0212-963.0412','CARACAS');                                    
                                    distribuidor('DISTRIBUIDORA Y PERFUMERIA DULCINEA, C. A.','Av. BELLAS ARTES QTA. MARY. LOS CHAGUARAMOS.','0212-662.7211','CARACAS');                                       
                                    distribuidor('QUINCALLA KLEYLA-NEJ, C. A.','CALLE ENGRACIA EDIF. MERCADO LIBRE DE CATIA P.B. LOC. 1-09 AL FINAL DEL BOULEVARD.','0212-490.8614 0416-617.3203','CARACAS');                                       
                                    distribuidor('YESCOBI JOSE MORALES BLANCO','CALLE CUMANA, SECTOR CASA BLANCA, CASA No. 4. GRAMOVEN. CATIA.','0212-515.9915, 0412-730.4154','CARACAS');                                       
                                    distribuidor('INVERSIONES AMIGAL, C. A.','Av. VICTORIA C.C. MULTIPLAZA VICTORIA NIVEL FERIA LOCAL F-1. LAS ACACIAS.','0212-668.0649/ 0414-172.4313','CARACAS');                                       
                                    distribuidor('INVERSIONES TOKOTOKO JC, C. A.','Av. PRINCIPAL DE LA URBINA EDIF. DERNA IV, P.B. LOC. 3. LA URBINA.','0212-242.5760 0416-826-99-10','CARACAS');                                       
                                    distribuidor('APONTE DE SEIJAS VIDALIA','Av. BARALT EDIF. MERCADO DE QUINTA CRESPO P.B., LOC. ZRII-35-36. QUINTA CRESPO.','0212-481.8122, 0414-1957601','CARACAS');                                    
                                    distribuidor('COMERCIAL BIG HOGAR CF, C. A.','Av. PRINCIPAL C/CALLE LEON EDIF. LEON, LOC. No. 3 . EL CEMENTERIO.','0212-668.0478, 0412-554.4111','CARACAS');                                       
                                    distribuidor('BKAN DE VENEZUELA AS, C. A.','CALLE 40 C.C. MONTALBAN NIVEL P.B., LOCAL 10, SECTOR A, MONTALBAN II.','0414-115.9155, 0426-519.1695','CARACAS');
                                      
                                    distribuidor('INVERSIONES GAME M.G, C.A.','CALLE COLOMBIA ENTRE 1ra. Y 2da., AVE. EDIF. 33, P.B. LOCAL A. CATIA. (FRENTE A BANESCO EXPRESS). ','0212-870.3006, 0412-212.5081','CARACAS');                                      
                                    distribuidor('COMERCIAL DAMALIA, C. A.','AV. PRINCIPAL C.C. LEBRUN P.B. LOCAL 4 Y 5. PETARE','0212-2568901','CARACAS');
                                    distribuidor('ELECTRO YULIO, C. A.','AV. PPAL. DEL CEMENTERIO, CALLE STA. ANA, EDIF. VICTORIA, P.B. LOC. H11. EL CEMENTERIO','0212-632.10.59/815.06.84','CARACAS');                                       
                                    distribuidor('INVERSIONES PLASMA ELECTRONICS 2021, C. A.','CALLE REAL MAGALLANES DE CATIA, ENTRE CALLE COLOMBIA Y BOULEVARD, LOCAL Nº. 1, CATIA.','0212-872.5410','CARACAS');                                    
                                    distribuidor('VARIEDADES MISTICO 3000, C.A.','Av. FRANCISCO DE MIRANDA, 1ra. Av. No. 73, URB. BUENA VISTA. PETARE.','0212-239.4457','CARACAS');
                                    distribuidor('ALVASET DE VENEZUELA, C. A.','Av. LAS INDUSTRIAS EDIF. GRUMONCA PISO 2 LOC. 2-B ZONA INDUSTRIAL DE PALO VERDE.','0212-251.67.75, 0414-249.89.13','CARACAS');                                       
                                    distribuidor('BAZAR JIANFENG C.A.','CALLE COLOMBIA ENTRE CALLE PANAMERICANA Y EL CRISTO CASA NRO 61 URB. NUEVA CARACAS CATIA','0212-870.0056, 0412-290.9011','CARACAS');                                       
                                    distribuidor('AGUILA ELECTRIC, C. A.','Av. BARALT EDIF. 56 PISO P.B. LOCAL P.B. SECTOR EL SILENCIO.','0212-481.6250','CARACAS');                                       
                                    distribuidor('CASH SONIDO, C. A.','Av. BARALT, MIRANDA A MADERERO No. 814 SECTOR EL SILENCIO.','0212-481.8854','CARACAS');     distribuidor('MUEBLERIA Y COLCHONERIA PEPIN, C.A.','CALLE FINAL DE LA CALLE SUCRE CON CALLE GUAICAIPURO CASA NRO 213 URB. CHACAO','0212-266.4392','CARACAS');                                       
                                    distribuidor('GENERAL IMPORT DE VENEZUELA, C. A.','ESQ. DR. PAUL A MARRON EDIF. CORONADO PISO PB LOCAL S/N URB. EL SILENCIO.','0212344/0788','CARACAS');                                      
                                    distribuidor('STABIA S.R.L.','AV. LAS CIENCIAS QTA NAZARENO URB LOS CHAGAUARAMOS MUN LIBERTADOR PQUIA SAN PEDRO','0212-661.3758','CARACAS');                                     
                                    distribuidor('LA TIENDA DE ORO','BV.FP MERCADO LIBRE DE CATIA LOCAL N0 1-6 PAROQUIA SUCRE','0212/-8712526 0414-2502500','CARACAS');                                       
                                    distribuidor('FERRETERIA EL REY DE CATIA 3.000 C.A.','CALLE COLOMBIA ENTE CALLE CASTELLANA Y 5TA AVENIDAD LOCAL NRO S/N URB. PEREZ BONALDE','0212-8735239','CARACAS');                                       
                                    distribuidor('AUDIO VIDEO MARTELL C.A.','AV. FRANCISCO DE MIRANDA EDIF. PUNTA BRAVA PISO PB LOCAL 2 URB. CHACAO','0212-267-3383 265-6311 266-8053','CARACAS');                                       
                                    distribuidor('SUAREZ DE GARCES MARIA TERESA CALLA','AV. FRANCISCO DE MIRANDA EDIF. LOS LLANOS PISO PB LOCAL G URB CHACAO AL LADO DE CANTV DESPUES DE LA EST. METRO CHACAITO BCO EXTERIOR','0212-202-2211 202-2245 264-1916','CARACAS');                     distribuidor('COMERCIAL MADEREDO 88 C.A.','ESQ. ENTRE LAS ESQUINAS DE GLORIETA Y MADERERO N. 44 PISO PLANTA BAJA LOCAL COMERCIAL N 2 URB. SA LIBERTADOR','0212-482-51-19','CARACAS');                                     
                                    distribuidor('BAZAR DINAFRA C.A.','AV. 2DA AVENIDA CON 3ERA TRANSVERSAL EDIF. RES. MARIA PISO P.B. LOC. 1 URB. LOS PALOS GRANDES ','0212-284.1759, 283.41442','CARACAS');                                      
                                    distribuidor('COMERCIAL LINUX 2009, C.A.','CALLE ARGENTINA ENTRE AV 2DA Y 3CERA CASA NRO 49-B SECTOR CATIA','0212-873-28-32 Y 0424-121-87-30','CARACAS');                                       
                                    distribuidor('BUENA VISTA ELECTRONIC 2013, C.A.','AV. FRANCISCO DE MIRANDA LOCAL NRO 107 URB. BUENA VISTA PETARE','0212-234-36-85','CARACAS');                                       
                                    distribuidor('COSAS DE CASA 214, C.A.','AV. PPAL CC PASEO LAS MERCEDES NIVEL 1 LOCAL 136 URB LAS MERCEDES BARUTA','0212/9911808','CARACAS');                                     
                                    distribuidor('DISTRIBUIDORA ELECTRO HOGAR D.E.H., C.A','AV. SUR 13 ENTRE MIGUELACHO A TRACABORDO EDIF. RESD. CANDELARIA PLAZA PISO PB LOCAL 6 URB LA CANDELARIA','0212/576.86.37 Y 0426/438.92.08','CARACAS');                                       
                                    distribuidor('DISTRIBUIDORA ELECTROPOLIS, C.A.','CALLE PROLONGACION AV ABRAHAM LINCOLN AV LOS JABILLOS EDIF. 149 PISO PB LOCAL B. URB. SABANA GRANDE.','0212-763.1273','CARACAS');                                      
                                    distribuidor('ELECTRO CENTER 2019, C.A.','ESQ. PUERTO ESCONDIDO A ANGELITO EDIF. GRANADOS PISO PB LOCAL B URB. EL SILENCIO','0212/481-94-11/ 481-98-90 Y 0412-997-19-85','CARACAS');                                      
                                    distribuidor('BAZAR EL PUENTE C.A.','AV. BARALT EDIF LLAGUNO ll PISO PO.B. LOCAL 1 ZONA PIÑANGO A LLAGUNO','0212/8644402','CARACAS');                                   
                                    distribuidor('FERRE MIX, C.A.','AV. FRANCISCO DE MDA ENTRE CALLE STA ANA Y CALLE CAPITOLIO CC LIDER NIVEL AUTOMERCADO LOCAL A-18 URB. LA CALIFORNIA CARCAS PETARE','0212/236-04-98 0212-236-06-26','CARACAS');                                      
                                    distribuidor('INVERSIONES ARTIHOGAR 2015, C.A.','CALLE COLOMBIA, ENTRE PANAMERICA Y EL CRISTO LOCAL NRO 51 URB. NUEVA CARACAS CATIA','0212/870-25-29 0414/289-78-9','CARACAS');                                      
                                    distribuidor('CORPORACION DINAFRA LOS SAMANES, C.A.','AV 1 EDF CENTRO PROFESIONAL LOS SAMANES, PB LOCAL 6 URB LOS SAMANES , CARACAS (EL CAFETAL) MIRANDA','0212/941.96.32','CARACAS');                                      
                                    distribuidor('FULL CASA, C.A.','AV. JUAN BAUTISTA ARISMENDI UNIDAD COMERCIAL LA FLORIDA. P.B. LOCAL N0 8 LA FLORIDA','0212.73182.52 731.77.23','CARACAS');                                    
                                    distribuidor('DISTRIBUIDORA CREDIMPORT C.A.','CALLE COLOMBIA ENTRE CALLES EL CRISTO Y MAGALLANES LOCAL NRO 6 SECTOR CATIA','0212/873-99-21','CARACAS');                                       
                                    distribuidor('KING 989 ELECTRONIC, C.A.','CALLE BARALT LOCAL NRO 1617 ZONA ESQ. PIÑANGO A LLAGUNO CARACAS DISTRITO CAPITAL','0212/863.18.99 Y 0424/283.30.01','CARACAS');                                       
                                    distribuidor('TIM ELECTRONICA, C.A.','AV. SUR HOYO A CIPRESES EDIF. BERRET PISO PB LOCAL 1 URB. SANTA TERESA CARACAS DISTRITO CAPITAL','0212/543-37.46 Y 0424/219-67.34','CARACAS');                                       
                                    distribuidor('CORPORACION PLASTICOS DEL HOGAR 2020 C.A.','AV. BARALT ESQUINA MUÑOZ A PIÑANGO EDIF AURA PISO PB LOCAL G SECTOR EL SILENCIO CARACAS DISTRITO CAPITAL','0212 /863.04.86 0424/203.58.81','CARACAS');                                     
                                    distribuidor('COMERCIAL CENTRO-CENTRO, C. A.','Av BARALT EDIF. CARONI PISO PB LOCAL 1502 URB. EL SILENCIO.','0212-860.04.73 862.22.49','CARACAS');                                       
                                    distribuidor('AUDIO MATCH, C.A.','ESQ. DE FERRENQUIN A CRUZ EDIF JARDININFAN PISO PB LOCL 3 LA CANDELARIA','0212/576.02.85 y 0212/578.33.39','CARACAS');                                       
                                    distribuidor('REPRESENTACION ITALIA A SU HOGAR 2015, C.A.','AV. VICTORIA EDIF. ARA PACIS PISO P.B. LOCAL COMERCIAL LETRA B URB. LAS ACACIAS','0212/632.98.42 Y 0412/578.43.08','CARACAS');                                      
                                    distribuidor('COMERCIALIZADORA WORLD -PC, C.A.','AV. UNIVERSIDAD ESQUINAS SOCIEDAD A TRAPOSOS EDF PASAJE ZINGG PISO PLANTA BAJA LOCAL 32 URB EL SILENCIO','0212/545/9702 0424/241/3964','CARACAS');                                       
                                    distribuidor('BAZAR LAS TRES ESTRELLAS, C.A.','AV. BARALT EDIF STOSAN PISO PB APT 01 URB. ALTAGRACIA','0212/861.27.03 0412/217.062.8','CARACAS');                                       
                                    distribuidor('INVERSIONES F.R. DIMOGA, C.A.','AV. PARQUE HUMBOLT EDIF SANTA URSULA PISO 9 APTO 92 URB. PARQUE HUMBOLT CARACAS MIRANDA','0424/127/51/89','CARACAS');                                       
                                    distribuidor('AMANRIT 2730, C.A.','AV. BARALT LOCAL MERCADO QUINTA CRESPO NRO ZPL214 URBANIZACION QUINTA CRESPO','0212/481.51.30','CARACAS');                                      
                                    distribuidor('INVERSIONES ALL PC, C.A.','Av. PAEZ CENTRO PLAZA PAEZ, LOCAL 5, P.B. EL PARAISO.','0212-482.9582','CARACAS');     distribuidor('INVERSIONES FAD-MOD IGA, C.A.','CALLE CANDILITO A URAPAL CC CASA BERA NIVEL MEZZANINA LOCAL M-051 URB LA CANDELARIA ','0212/572 59.10','CARACAS');
                                    distribuidor('INVERSIONES LOS DOS KANGUROS','CALLE LAS TRINITARIAS EDIF RESIDENCIAS SANTA ELENA PISO 3 APTO 31 URB LA CAMPIÑA','0212/730.41.19','CARACAS');
                                    distribuidor('BAZAR Y PERFUMERIA HOSSANA,C.A.','ESQ. AVILANES A MIRDOR EDIURB LA CANDELARIA CARACASF RES MIRADOR PISO PB LOCAL','0212/577/37/06','CARACAS');                                       
                                    distribuidor('ELECTRO BAZAR J.M.N. C.A.','AV. SUR 8 EDIF PUERTO ESCONDIDO PISO PB LOCAL. URB. SAN JUAN CARACAS','0212/481.68.43 0414/257.29.37','CARACAS');                                      
                                    distribuidor('ARTEFACTOS EL BAMBINO C.A.','AV. LECUNA EDIF PARQUE CENTRAL EDIF EL TEJAR PISO LECUNA LOCAL 17 URB. SAN AGUSTIN','0212/576.34.46','CARACAS');                                       
                                    distribuidor('CRAZY BUFFALO C.A.','AV. UNIVERSIDAD ESTE 4 ESQUINA MISERICORDIA A MONROY EDIF ANDRES BELLO PISO PB LOCAL A URB. LA CANDELARIA','0212/578.28.62','CARACAS');                                       
                                    distribuidor('COMERCIAL DOLARIS, C.A.','AV. OESTE 12, ESQ. MADERERO A GLORIETA EIF GLORIA PISO PB LOCAL 01 URB SANTA TERESA','0212/484.65.03 0412/376.05.52','CARACAS');                                      
                                    distribuidor('INVERSIONES AYA 2014, C.A.','AV. PRINCIPAL DE RUIZ PINEDA CC CARICUAO PLAZA NIVEL 1 LOCAL .SECTOR UD-7','0212/438/06/08 0424/24112/87','CARACAS');                                      
                                    distribuidor('RAYYS TRADING C.A.','AV. LECUNA ESQUINA DE ANGELITOS A PUERTO ESCONDIDO CASA NRO ,85 URB. EL SILENCIO','0212/484.97.85','CARACAS');                                       
                                    distribuidor('COMERCIAL ELKA C.A.','AV.7 AV. ENT. ClL ARGENTINA Y ATLANTICO LOCAL NRO 18 UR NVA CARACAS CATIA','0212/870.13.42 870.31.01 0426/511.30.24','CARACAS');                                       
                                    distribuidor('LA CORPORACION DA C.A','AV.PARIS EDIF BEVILA PISO 3 LOCAL 31 SECTOR LA CALIFORNIA NORTE CARACAS ( PETARE )','0212/271/6250','CARACAS');                                       
                                    distribuidor('COMERCIAL R.M.W. 2.020. C.A.','CALLE COLOMBIA LOCAL P/B NRO 19-01 ZONA CATIA CARACAS','0212/870.96.36 0212/870.36.96','CARACAS');
                                      
                                    distribuidor('SERVICIOS DARLEX C.A.','CALLE LA ESTRELLA MIRADOR Y PLAZA DALLA COSTA QTA SIN NUMERO URB. LA CAMPIÑA','0212/ 730/8465 0212/730/5835','CARACAS');                                       
                                    distribuidor('COMERCIAL TODERO DEL HOGAR C.A.','AV. FRANCISCO DE MIRANDA CON 1ERA AV SECTOR BUENA VISTA EDIF. QUINTA 73 LOCAL 1 URB. BUENA VISTA PETARE','0212/235/27/7','CARACAS');                                       
                                    distribuidor('INVERSIONES OMAGRA C.A.','AV. URBANEJA CALLE CINCO Y SEIS QUINTA OMAGRA URB. LA PAZ EL PARAISO','0212-472-45-61 0414-257-34-61','CARACAS');                                      
                                    distribuidor('DISTRIBUIDORA PLAZA DIGITAL 2007, C.A.','CALLE ROSARIO A CARMEN EDIF. SANTA ANA ,piso s/n LOCAL 2 ANTIMANO','0212/472/9727','CARACAS');                                      
                                    distribuidor('COMERCIAL Y.I.M. C.A.','AV. BARALT EDIF, GINKAR PISO P.B. LOCAL C URB. CENTRO DISTRITO CAPITAL','0212-860-94-24','CARACAS');                                    
                                    distribuidor('COMERCIAL SALCAR DEL VALLE, C. A','AVENIDA INTERCOMUNAL, ENTRE CALLES 4 Y 5 LOCAL No. 23, LOS JARDINES DEL VALLE.','0212-682.6306','CARACAS');                                    
                                    distribuidor('BAZAR DEL PUEBLO, C. A.','AV. SAN MARTIN, MERCADO MUNICIPAL DE SAN MARTIN, COMERCIAL ARAÑA, LOCAL Nº. 10.','0212-462.7835','CARACAS');                                       
                                    distribuidor('COMERCIAL FEYAMIN, C.A.','CALLE PAEZ, CENTRO COMERCIAL MARIÑO, LOCAL Nª 12 MINAS DE BARUTA.','0212-943.2301','CARACAS');                                       
                                    distribuidor('MUEBLERIA RIVI, C. A.','CALLE COLOMBIA ENTRE CRISTO Y MAGALLANES, RES. FERREI No. 11 (15-20), CATIA.','0212-873.5602','CARACAS');                                       
                                    distribuidor('COMERCIAL FOREVER E-N, C.A.','CALLE COLOMBIA ENTRE 4TA . Y 5QTA. AVENIDA Nª 16-28 CATIA.','0212/ 873/90 55','CARACAS');                                    
                                    distribuidor('MUEBLEMANIA J. A., C. A.','CALLE COLOMBIA, ENTRE 4ta. Y 5ta. LOCAL 115, CATIA.','0212-870.2933 / 870.4339','CARACAS');                                     
                                    distribuidor('BAZAR LATINO, C.A.','EDIFICIO SUDAMERIS, LOCAL Nª2 , PLAZA ESPAÑA A SOCORRO','562-68-32','CARACAS');             distribuidor('INVERSIONES FLORIDA HALL 2005, C.A.','CALLE SAN JOSE Nº 21 BOULEVARD LA VEGA','0212/443/13/44 0212/443/9348','CARACAS');
                                    distribuidor('COMERCIAL LUCELIN ELIA, C.A.',' AV. FRANCISCO DE MIRANDA, CALLE AYACUCHO, EDF. DOUMET, REDOMA DE PETARE DETRAS DE CASA MIRANDA. PETARE','0212-271/63/04/241/24/80 -0212-238/45/31','CARACAS');                                    
                                    distribuidor('INVERSIONES MADVEN, C.A.','AV. GUZMAN BLANCO CC COCHE NIVEL PB LOCAL 9 Y 10 URB. COCHE','0212-681.63.11/662.20.50','CARACAS');                                    
                                    distribuidor('FERRETERIA Y BAZAR LAGUNA AZUL, C.A.','CALLE PEREZ DE LEON, ZONA COLONIAL DE PETARE, FRENTE AL COLEGIO AROCHA.','0212-272.86.86','CARACAS');                                       
                                    distribuidor('QUINCALLA CITY ASIA, C.A.','CALLE COLOMBIA, ESQ. PANAMERICA Y CRISTO, FRENTE PIÑATERIA LA MEJOR, CATIA','0212-870.00.56','CARACAS');                                       
                                    distribuidor('ELECTRO COMERCIAL JOSEPH, C.A','CALLE COLOMBIA ENTRE PANAMERICANA Y LOS FLORES DE CATIA, LOCAL C, FRENTE AL HOTEL COLOMBIA.','0212-872.06.19','CARACAS');                                     
                                    distribuidor('COMERCIAL CHECHE GANGAS, C.A.','CALLE LA PAZ, ZONA COLONIAL DE PETARE, Nº. 7.','0414-141.97.73','CARACAS');       distribuidor('ELECTROMAX JUNKAL, C.A.','KILOMETRO 17, EDF. POR DO SOL, P.B, LOCAL 1 Y 2, EL JUNQUITO.','0212-412.17.03-0212.412.26.32','CARACAS');                                       
                                    distribuidor('HI-FI ELECTRONICS, C.A.','ESQUINA FERRENQUIN A CRUZ DE CANDELARIA, FRENTE A PAJAROLANDIA','0212-572.25.86','CARACAS');                                       
                                    distribuidor('CAJA DE AHORRO DEL CICPC Km3 de las Mayas','Carretera Via La Mariposa Edf. Economato PTJ','0212-681.0231/ 9193 EXT 104','CARACAS');                                       
                                    distribuidor('MASTER AUDIO LA CANDELARIA G.T., C.A.','CRUZ DE CANDELARIA A MIGUELACHO CENTRO RESIDENCIAL LA CANDELARIA LOCAL 2','0212-5750613 y0412/33893','CARACAS');                                       
                                    distribuidor('AUTO MERCADO RUICAR, C.A.','KM. 21 DE LA CARRETERA EL JUNQUITO, FRENTE PANADERIA PANMIL','0212 /4122398','CARACAS');                                       
                                    distribuidor('CORPORACION AZAR 2030, C.A','AV. NUEVA GRANADA CON AV. ROOSEVELT, EDF. TENERIFE, P.B, LOCAL 2, LOS ROSALES','0212-632.31.39','CARACAS');                                      
                                    distribuidor('COMERCIAL HOGAR BELLO, C.A.','AV. SAN MARTIN, ESQ. CAPUCHINOS A JESUS, Nº. 222-1, FRENTE PLAZA CAPUCHINO','0212-481.19.25','CARACAS');                                      
                                    distribuidor('J.J.R. ELECTRONICA C.A.','AV. SAN MARTIN CENTRO FENIX LOCAL 4 P/B CAPUCHINO','0212/461-06-71 ','CARACAS');       distribuidor('ELECTRONICA HIROSHIMA S.R.L','AV OESTE 6 ESQUINA COLON A CAMEJO LOCAL NRO 15 URB PARROQUIA SANTA TERESA','0212-576.02.85','CARACAS');                                    
                                    distribuidor('DISTRIBUIDORA ECODATA , C.A.','CALLE BOLIVAR ENTRE PRIMERA Y SEGUNDA AVENIDA LOCAL NRO 15 SECTOR CATIA','0212/871-18-47 0414/291.97.71','CARACAS');
                                    distribuidor('ELECTRONICA Y BAZAR M.J 2009, C.A.','CALLE COLOMBIA, CATIA','0212-871.82.55 0414/331/7195 442/6015','CARACAS');   distribuidor('INVERSIONES EL DESAFIO 2021, C.A.','CALLE COLOMBIA ENTRE PANAMERICA Y 2DA AVENIDA LOCAL NRO 29 SECTOR CATIA','0212/873-25-87','CARACAS');                                     
                                    distribuidor('COMERCIAL EL DESAFIO C.A.','CALLE COLOMBIA ENTRE PANAMERICA Y 2DA AVENIDA LOCAL NRO 29 URB. CATIA','0212/873-25-87','CARACAS');                                      
                                    distribuidor('CUSIMALL, C..A.','CALLE PUENTE REPUBLICA A PUENTE ANAUCO EDIF. DORAL CARACAS PISO PB Y MZ LOCAL 11 URB. LA CANDELARIA','0212/576.76.85 Y 0212/577.69.25','CARACAS');                                    
                                    //distribuidor('','','','CARACAS');
                                    
                                    ?>

                                </table>
							</div>
							<!-- Aragua -->
							<div class="tab-pane" id="t2">
								<table class="table table-bordered table-striped table-hover">
                                    <tr class="active">
                                        <th class="text-center">Distribuidor</th>
                                        <th class="text-center">Dirección</th>		
                                        <th class="text-center">Teléfonos</th>
                                        <th class="text-center">Ciudad</th>
                                    </tr> 
                                    <?php
                                    distribuidor('SONIA ELECTRONIC, C. A.','CALLE SUCRE CON CAJIGAL, C.C. LA PIRAMIDE No. A-14, LOC. P.B. SECTOR CENTRO. CAGUA.','0244-447.5197','CAGUA');
                                    distribuidor('AUTO MERCADO SAN DIEGO, C.A.','CALLE PRIMERA TRANSVERSAL LOCAL PARCELA NRO 18 ZONA INDUSTRIAL LAS VEGAS CAGUA ESTADO ARAGUA','0244/400.55.23 0412/444.22.44','CAGUA');
                                    distribuidor('DISTRIBUIDORA LA LINEA BLANCA, C.A.','CALLE VENEZUELA LOCAL GALPON No. 03 ZONA INDUSTRIAL SOCO. LA VICTORIA. ESTADO ARAGUA.','0244-323.2734','LA VICTORIA');
                                    distribuidor('SAN CENTRAL, C.A.','AV. SANTOS MICHELENA, EDF. UNIBEL, LOCAL H, MARACAY','0243-245.83.34','MARACAY');
                                    distribuidor('ALFA 2000 C.A.','CALLE PAEZ CRUCE CON CALLE LOPEZ AVELEDO No 27 LOCAL # 3 MARACAY -EDO. ARAGUA','0243-2471931 0414-451.3050','MARACAY');
                                    distribuidor('CORPORACION OMEGA 3.000, C. A.','AV PROLONGACION FUERZAS AEREAS CRUCE CON CALLE LAZO MARTI LOCAL NRO 63 SECTOR JOSE GREGORIO HERNANDEZ MARACAY ARAGUA','0414-589.1577','MARACAY');
                                    distribuidor('SONELY´S C.A','AV. SANTOS MICHELENA EDIF. SAN ELIAS PISO PB LOCAL 1.2.3 SECTOR CASCO CENTRAL MARACAY ARAGUA','0243/245/4798 0414/343/4480','MARACAY');
                                    distribuidor('COMERCIAL SOLKAR, C.A.','CALLE BOYACA OESTE LOCAL NRO 60 SECTOR EL CENTRO MARACAY ARAGUA','0243-245-74-88 0414-345-74-88','MARACAY');
                                    distribuidor('BAZAR GUAICAMACUTO, C.A.','CARRETERA VIEJA DE BARUTA, AV. MINAS DE BARUTA, EDIFICIO CENTRO L3','0212-943.24.65 y 0412/628/00/00','TEJERIAS');
                                    distribuidor('M&M CENTER ELECTRONIC, C. A.','CALLE CARABAÑO, C.C. CARONI, NIVEL 1, LOCAL Nº 6, VILLA DE CURA , ESTADO ARAGUA','0244-386.7723','VILLA DE CURA');
                                    ?>
                                </table>
							</div>
							<!-- Carabobo -->
							<div class="tab-pane" id="t3">
								<table class="table table-bordered table-striped table-hover">
                                    <tr class="active">
                                        <th class="text-center">Distribuidor</th>
                                        <th class="text-center">Dirección</th>		
                                        <th class="text-center">Teléfonos</th>
                                        <th class="text-center">Ciudad</th>
                                    </tr> 
                                    <?php                                  
                                    //distribuidor('','','','');                                    
                                    distribuidor('EL BOMBAZO DEL SAN','Av. DIAZ MORENO CRUCE CON CALLE COMERCIO Y GIRARDOT, LOCAL 97-41, VALENCIA, ESTADO CARABOBO','0241-857. 4980','VALENCIA');                                         
                                    distribuidor('CASA ALBERTO, C. A.','Av. DIAZ MORENO No. 97-66, AL LADO DEL BANCO DEL CARIBE, SECTOR CENTRO.','0241-858.1538 / 858 / 8166 858/0569','VALENCIA');                                     
                                    distribuidor('EL NUMERO UNO, C.A.','CALLE COMERCIO Nº. 101-30, ENTRE DIAZ MORENO Y MONTES DE OCA','0241-8584678 Y 0414/440/5464 ','VALENCIA');
                                    distribuidor('EL PUNTAZO DEL SAN, C.A.','AV. DIAZ MORENO C/C GIRARDOT LOCAL NRO 97-7 SECTOR CENTRO','0241/857/3291 0241/857/7953','VALENCIA');                                        
                                    distribuidor('KENMART S.A','CALLE COMERCIO AV. CONSTITUCION Y DIAZ MORENO LOCAL NRO 100-47 CENTERO','0241/857/0939','VALENCIA');                                       
                                    distribuidor('AM 0105, C.A.','AV.69 CC MM"S NIVEL PB LOCAL 9 URB INDUSTRIAL CASTILLITO','0241/871.75.04','VALENCIA');           distribuidor('AMAL PRODUCTOS , C.A.','AV. 69 EDIF INDUSTRIAL MM"S PISO PB LOCAL 8 Y 9 URB. IND CASTILLITO','0241/871/7504','VALENCIA');                                       
                                    distribuidor('TODOSUEÑOS C.A.','AV. BOLIVAR C/C CALLE 122 CASA NRO 120-140 SECTOR SAN JOSE','0241/821/3817 0424/461/1074','VALENCIA');                                    
                                    distribuidor('MULTIMODULARES DE VALENCIA C.A.','CALLE 95 A AV. LARA CC GRAN BAZAR VALENCIA NIVEL PB LOCAL 10 SECTOR LA CANDELARIA','0241-858-18-49 0241-416-07-77','VALENCIA');                                   
                                    distribuidor('HMRM INVERSIONES ,C.A','CALLE JOSE FELIX RIVAS CASA NRO 108-40 URB. LA VIÑA','0424/ 409.12.43','VALENCIA');       ?>
                                </table>
							</div>
							<!-- Miranda -->
							<div class="tab-pane" id="t4">
								<table class="table table-bordered table-striped table-hover">
                                    <tr class="active">
                                        <th class="text-center">Distribuidor</th>
                                        <th class="text-center">Dirección</th>		
                                        <th class="text-center">Teléfonos</th>
                                        <th class="text-center">Ciudad</th>
                                    </tr>
                                    <?php                                  
                                    //distribuidor('','','','');                                        
                                    distribuidor('GABRIELA FERNANDA MARRERO RONDON','CALLE JOSE GREGORIO HERNANDEZ CASA No. 1URB LUIS HURTADO SAN JOSE','0424-157.3024, 0412-992.4845','EL JUNQUITO');                                    
                                    distribuidor('GRUPO AREMADE, C.A.','AV. TRAPICHITO CC TRAPICHITO NIVEL 1 LOCAL 47 SECTOR TRAPICHITO.','0424-207 79-96','GUARENAS');                                    
                                    distribuidor('QUINCALLERIA LA VICTORIA 618, C.A.','CALLE RIACAURTE CON ANDRES BELLO EDIF TALLIN PISO PB LOCAL PB URB CASCO CENTRAL','0212-365.1182','GUARENAS');                                    
                                    distribuidor('COMERCIAL MALAK 5555, C.A.','CALLE COMERCIO LOCAL NR 44/B URBANIZACION GUARENAS','0212/465-43-04','GUARENAS');   distribuidor('B & d GAMES ELECTRONICS, C.A.','CR PARCELA 19 PARTE BAJA EDIF. 3 PISO 3 OF 3F URB CIUDAD CASARAPA','0212/369.76.44 Y 0412/815.90.31','GUARENAS');                                    
                                    distribuidor('COMERCIAL EL AMIGO TONY TONY','AV. BERMUDEZ A 50 MTS. DEL BANCO MI CASA','0212-3442177, 0414-366.4732','GUATIRE');                                    
                                    distribuidor('PHONE CENTER 3001, C.A','AV. ITERCOMUNAL GUARENAS GUATIRE CC VISTA PLACE NIVEL MIRADOR , LOCAL M-39,SECTOR VEGA ABAJO','0212-381.01.08 /0414-327-38-80','GUATIRE');                                    
                                    distribuidor('JOSE ANTONIO BAHNA AKEL','RES. BELEN BLANCO PISO 5 APTO. 5-A.','0212-492.5289 Y 0414-180.2143','GUATIRE');                                    
                                    distribuidor('REPRESENTACIONES PLAYCENTER 2010, C.A.','CR. PRINCIPAL CC TRAPICHITO NIVEL PB. LOCAL 32 URB TRAPICHITO','0212-3650770','GUATIRE');                                    
                                    distribuidor('INVERSIONES C M 998, C.A.','CALLE LAS AVES EDIF. RESIDENCIAS FLAMINGO SUITE PISO 1 APTO A-1 URB. HIGUEROTE MUNICIPIO BRION','0416/7100094','HIGUEROTE');                                    
                                    distribuidor('ALMACEN LOS DOS AMIGOS 2002, C.A','CALLE COMERCIO CAUCAGUA','0234 - 662-13-34 0412/392.50.85','HIGUEROTE');                                    
                                    distribuidor('INVERSIONES AMARYI, C.A.','CALLE MIQUILEN EDIF. MARIA LUISA # 3 LOS TEQUES (FRENTE RIVALSID)','0212-364.89.03','LOS TEQUES');                                    
                                    distribuidor('INVERSIONES MULTIBELLO, C. A.','CALLE MIQUILEN, LOCAL No. 16, SECTOR EL LLANO.','','LOS TEQUES');     distribuidor('INVERSIONES EL TURCO , C. A.','CALLE PRINCIPAL EDIF HOSPITAL VICTORINO SANTAELLA PISO 1 LOCAL 40 URB LOS TEQUES','0212-321.7386, 0412-332.9529','LOS TEQUES');
                                    distribuidor('ALBERT RABAT','Av. LA HOYADA RES. LOS COQUITOS PISO 8 APTO 8-C ','0424-194.6897','LOS TEQUES');       distribuidor('COMERCIAL CENTRO TEQUENSE, C. A.','CALLE MIQUILEN SUR No. 44 CON NEGRO PRIMERO EDF. CENTRO PROF MICALENCE P.B.','0212-364.4921','LOS TEQUES');                                    
                                    distribuidor('INVERSIONES ELECTROCOMP, C.A.','CTRA PANAMERICANA KM 21 CC LA CASCADA NIVEL 1 LOCAL N1-29 SECTOR CORRALITO','0212-383.1444 0414-224.2489','CARRIZAL');                                    
                                    distribuidor('INVERSORA CUPPER, C.A.','AV. BERMUDEZ GALPON N 55 NRO 1 SECTOR EL LLANO EL CABOTAJE','0212-321-9166','LOS TEQUES');
                                    distribuidor('INVERSIONES FAI SAN C.A.','CALLE RIBAS EDIF PIO XII PIO PB LOCAL D SECTOR CENTRO','0414-332.95.29','LOS TEQUES');
                                    distribuidor('COMERCIAL ELECTRONIC HL, S.N.C','CALLE RIBAS CON GUAICAIPURO, 4 ESQUINA','0212-364.89.35','LOS TEQUES');
                                    distribuidor('COMERCIAL LUCKY TEQUES 19, C.A.','CALLE MIQUILEN ENTRE CARABOBO Y ROQUE PINTO, Nº. 13, SECTOR EL LLANO','0212-321.70.21','LOS TEQUES');
                                    distribuidor('ELECTRONICA CORIANI, C.A.','CALLE SUCRE CON MIRANDA, Nº. 54, OCUMARE DEL TUY','0239-225.01.58','LOS VALLES DEL TUY');
                                    distribuidor('DISTRIBUIDORA NEW TUY 2011, C.A.','CALLE AYACUCHO CON NEGRO PRIMERO, EDF. JOLIMAR, P/B, LOCAL 3, SANTA TERESA DEL TUY','0239-365.39.51','MIRANDA');
                                    distribuidor('DISTRIBUIDORA CONFIANZA BAL. C.A.','AV ISAIAS LATIGO CHAVEZ EDIF. LUCIA PISO 1 LOCAL 1 URB. ESTADO LEAL CARACAS (CHACAO)','0212/ 264/4061 01212/ 263/7276','CHACAO');
                                    distribuidor('CORPORACION LUJO & ECONOMIA , C.A.','AV. AYACUCHO CASA NRO 106 SECTOR CENTRO SANTA TERESA DEL TUY','0239/231.32.96','SANTA TERESA');
                                    distribuidor('ELECTRODOMESTICOS SANTA BARBARA, C. A.','CALLE AYACUCHO No. 79-A, SANTA TERESA DEL TUY','0239-231.4281','SANTA TERESA DEL TUY');
                                    distribuidor('DISTRIBUIDORA ELECTROKATY, C.A.','AV ALI PRIMERA C.C. PASEO EL TUY NIVEL 01 LOCAL P1-109 Y P1-126. SANTA TERESA DEL TUY.','0239-232.4387','SANTA TERESA DEL TUY');
                                    distribuidor('COMERCIAL DOÑA SOFIA, C. A.','CALLE AYACUCHO No. 118, CASCO CENTRAL. SANTA TERESA DEL TUY.','0239-231.01/71','SANTA TERESA DEL TUY.');                                    
                                    distribuidor('COMERCIAL ANTONIO ELECTRONICA 2011, C.A.','CALLE AYACUCHO EDIF SAN ELIAS PISO PLANTA BAJA LOCAL 01 SECTOR CENTRO SANTA TERESA DEL TUY','0239-231.0762 Y 0239-891.8221','OCUMARE DEL TUY');                             distribuidor('SUPERMERCADO ORNELAS, C.A.','AV. LOS SALIAS EDIF OFICENTRO EL PICACHO PISO PB LOCAL 10 Y 11 SECTOR EL PICACHO','0212/371.31.91 0212/371.11.97 ','SAN ANTONIO DE LOS ALTOS');                                    
                                    ?> 
                                </table>
							</div>
							<!-- Lara -->
							<div class="tab-pane" id="t5">
								<table class="table table-bordered table-striped table-hover">
                                    <tr class="active">
                                        <th class="text-center">Distribuidor</th>
                                        <th class="text-center">Dirección</th>		
                                        <th class="text-center">Teléfonos</th>
                                        <th class="text-center">Ciudad</th>
                                    </tr> 
                                    <?php                                  
                                    //distribuidor('','','','CARACAS');                                    
                                    distribuidor('MERCANTIL DIVINA PASTORA, C. A.','CARRERA 22 CON ESQUINA CALLE 40 No. 4. SECTOR CENTRO. BARQUISIMETO. EDO. LARA.','0251-445.1350/ 446.6335','BARQUISIMETO');                                      
                                    distribuidor('TUSAN LARA, C. A.','Av. VARGAS ENTRE CARRERAS 27 Y 28 LOCAL 27-61. CENTRO.','0251-232.6664','BARQUISIMETO');     distribuidor('COMERCIAL ENERGIA, C.A.','CR 21 ENTRE CALLES 31 Y 32 LOCAL NO S/N SECTOR CENTRO.','','BARQUISIMETO');
                                    distribuidor('DISANDU, C.A.','CALLE 13 ENTRE CARRERAS 18 Y 19 EDIF. RODUARD PISO SOTANO LOCAL S-1 ZONA ESTE.','0251-252.2055','BARQUISIMETO');
                                    distribuidor('CORPORACION ESPERANZA DE ELECTRODOMESTICOS VENEZUELA, C. A.','CARRERA 21 ENTRE CALLES 20 Y 21 C.C. ALTAGRACIA, NIVEL P.B. LOCAL 5','0251-2320664 - 231.8845 /251.8849','BARQUISIMETO');
                                    ?>
                                </table>
							</div>
							<!-- Oriente -->
							<div class="tab-pane" id="t6">
								<table class="table table-bordered table-striped table-hover">
                                    <tr class="active">
                                        <th class="text-center">Distribuidor</th>
                                        <th class="text-center">Dirección</th>		
                                        <th class="text-center">Teléfonos</th>
                                        <th class="text-center">Ciudad</th>
                                    </tr> 
                                    <?php                                  
                                    //distribuidor('','','','');
                                    distribuidor('INVERSIONES CASA BLANCA','Av. MIRANDA No. 3-71, CASCO CENTRAL ANACO. EDO. ANZOATEGUI.','282-424.4366 ','ANACO ORIENTE');                                      
                                    distribuidor('MULTI-TIENDA LOS 7 HERMANOS, C. A.',' Av. MIRANDA No. 3-71, SECTOR LAS PARCELAS I. ANACO','282-424.6117/ 414-984.3207','ANACO ORIENTE');                                    
                                    distribuidor('ANACO ELECTRONIC, C.A.','AV. MIRANDA LOCAL NRO 1-14 SECTOR CENTRO ANACO','0282/424.42.23 04247/864.71.29','ANACO ORIENTE');
                                    distribuidor('MEGAMUEBLES ANACO C.A.','AV. MIRANDA LOCAL NRO 1-6 SECTOR CENTRO ANACO ANZOATEGUI','0282/424.42.23','ANACO ORIENTE');
                                    distribuidor('MISTER COLCHON ELECTRONIC, S.A.','CALLE CONCORDIA LOCAL NRO 42 SECTOR CENTRO PUERTO LA CRUZ.','0281-267.4327','BARCELONA ORIENTE');
                                    distribuidor('MULTI ROYAL C A','AV. JORGE RODRIGUEZ LOCAL NRO S/N SECTOR LAS GARZAS CERCA DE EPA. LECHERIAS.','0281-263.6086, 263.7171, 263.6993','BARCELONA ORIENTE');
                                    distribuidor('MULTIROYAL ELECTRONIC C.A.','CALLE JUNCAL CASA NRO 31 EDIF. NEMNON SECTOR CENTRO PUERTO LA CRAUZ EDO- ANZOATEGUI','0281-268-5948 268-7145','BARCELONA ORIENTE');
                                    distribuidor('TODO HOGAR LA CANDELARIA C.A.','CALLE ESPERANZA EDIF.KRENFLE PISO P.B LOCAL 75 SECTOR CENTRO PTO LA CRUZ','0281/268-5826 0424/8610404','BARCELONA ORIENTE');
                                    distribuidor('EL BRILLO DE LA EXCELENCIA','PASEO HERES C/C PICHINCHA EDIFICIO CUYUNI LOCAL 1 DIAGONAL A REFRIGERACION CORONA . CIUDAD BOLIVAR','0285/ 6324792',' CIUDAD BOLIVAR ORIENTE');
                                    distribuidor('ALMACEN LA LIBERAL, S.R.L','AV. SUCRE Nº17 EDIF: PORRIÑO LOCAL - B- PB SECTOR PLAZA , EDO. BOLIVAR',' 0285-632-18-84','CIUDAD BOLIVAR ORIENTE');
                                    distribuidor('CITY CENTER II C,A','CALLE PASEO ORINOCO EDIF, SISCO Nº 59 PISO PB LOCAL 03 SECTOR PASEO ORINOCO CIUDAD BOLIVAR','0285-632-17-92','CIUDAD BOLIVAR ORIENTE');
                                    distribuidor('ELECTRONICA KASSER HANNA, F.P.','Av. MENCA DE LEONI, EDIF, CITY CENTER, PISO 1 APTO. 2. URB. LA SABANITA, CIUDAD BOLIVAR','285-651.3727','CIUDAD BOLIVAR ORIENTE');
                                    distribuidor('LIBERAL TRADE, C. A.','Av. REPUBLICA C.C. SANTO CHARBEL P.B. SECTOR TERMINAL DE PASAJEROS. CIUDAD BOLIVAR.','285-654.1355 414-893.9386','CIUDAD BOLIVAR ORIENTE');
                                    distribuidor('INVERSIONES LA GRAN LIBERAL, C. A.','AV. GUAYANA, DETRAS DEL MODULO ASISTENCIAL, CASA No. 12, SECTOR MERCADO PERIFERICO. CIUDAD BOLIVAR','285-632.3574/ 414-853.9644','CIUDAD BOLIVAR ORIENTE');
                                    distribuidor('INVERSIONES LA VICTORIA, C. A.','Av. PASEO ORINOCO, CASA No. 8, CASCO HISTORICO. CIUDAD BOLIVAR.','285-632.6851/ 0424-911.4168','CIUDAD BOLIVAR ORIENTE');
                                    distribuidor('ARTI-HOGAR, COMPAÑIA ANONIMA','AV. GUAYANA LOCAL NRO 62 SECTOR PERIFERICO CIUDAD BOLIVAR','0285-632.9600, 0416-685.7598','CIUDAD BOLIVAR ORIENTE');
                                    distribuidor('DISTRIBUIDORA EL PODEROSO , C.A.','CALLE VENEZUELA LOCAL NRO 59-A SECTOR CASCO HISTORICO PQUIA CATEDRAL MCPIO HERES CD. BOLIVAR','0285/6324561','CIUDAD BOLIVAR ORIENTE');
                                    distribuidor('COMERCIAL GEORGIN F.P ','CALLE VENEZUELA, NRO. 68, SECTOR PASEO ORINOCO, CIUDAD BOLIVAR','0285 632.45.84 0416-885.61.73','CIUDAD BOLIVAR ORIENTE');
                                    distribuidor('ARTE MUEBLES LA SELECTA, C.A.','CALLE URICA Nº. 26 SECTOR LA ALAMEDA, CASCO CENTRAL CIUDAD BOLIVAR','0285-6326764','CIUDAD BOLIVAR ORIENTE');
                                    distribuidor('MUEBLERIA Y CARPINTERIA EL TERMINAL, C.A','CALLE INDEPENDENCIA EDI. ROSS PISO P/B LOCAL 02 SECTOR AVENIDA SIEGERT. PARROQUIA CATEDRAL, MUNICIPIO HERES CIUDAD BOLIVAR','0285-6322817-0424.9158197','CIUDAD BOLIVAR ORIENTE');                                       
                                    distribuidor('MERCANTILIANG, C.A.','AV. BOLIVAR SECTOR 122 LOCAL NRO S/N SECTOR PASEOO ORINOCO CASCO HISTORICO PARROQUIA CATEDRAL MUNICIPIO PASEO BOLIVAR','0285-634/1181 0412-1868057','CIUDAD BOLIVAR ORIENTE');
                                    distribuidor('CELAN COMPUTER GUAYANA, C.A.','CALLE CAURA CON CUCHIVERO CC CIUDAD ALTA VISTA II NIVEL PISO 1 LOCAL LPP-258 SECTOR ALTA VISTA CIUDAD GUAYANA BOLIVAR','','CIUDAD GUAYANA ORIENTE');
                                       
                                    distribuidor('ANDINA BOUTIQUE, C.A','Av. FERNANDEZ PADILLA CASA NRO 5 SECTOR CENTRO CLARINES EDO. ANZOATEQUI','0281-418.9152, 418.1191 Y 0414-820.2590','CLARINES ORIENTE');
                                    distribuidor('SUCRE ELECTRONIC , C.A.','AV. BERMUDEZ EDIF. SIRIA PISO P/B LOCAL 01 SECTOR CENTRO CUMANA','0293/4337133','CUMANA ORIENTE');
                                    distribuidor('LOS 777 C.A.','AV. FRANCISCO DE MIRANDA C/C 1ERA CALLE NORTE LOCAL #11 SECTOR PUEBLO NUEVO NORTE EL TIGRE. EDO. ANZOATEGUI.','0283-235.2006, 0414-842.2440','EL TIGRE ORIENTE');
                                    distribuidor('GRUPO SOL Y SOMBRA C.A.','CALLE BOL.IVAR EDIF. SOL Y SOMBRA PISO PB. LOCAL 34 SECTOR CASCO VIEJO EL TIGRE','0283-242.04.98 Y 0414 842.07.13','EL TIGRE ORIENTE');
                                    distribuidor('COMERCIAL CARACAS C.A.','CALLE BOLIVAR LOCAL 9 SECTOR CASCO VIEJO EL TIGRE ANZOATEGUI','0283-235.6434','EL TIGRE ORIENTE');
                                    distribuidor('INV. MULTI TIENDA EL TIGRE C.A.','AV. FRANCISCO DE MIRANDA EDIF. MULTITIENDA EL TIGRE PISO PB LOCAL 387 SECTOR PUEBLO NUEVO NORTE',' 0283-241/1822','EL TIGRE ORIENTE');
                                    distribuidor('RAYMOS , C.A.','AV. FRANCISCO DE MIRANDA EDIF. RAYMOS PISO P/B LOCAL 01 SECTOR PUEBLO NUEVO NORTE EL TIGRE','0283-241/1822','EL TIGRE ORIENTE');
                                    distribuidor('COMERCIAL EL TIGRE 21, C.A.','CALLE MIRANDA CASA NROO 48-A SECTOR CASCO VIEJO EL TIGRE ANZOATEGUI','0283-2311094 Y 0414/8414044','EL TIGRE ORIENTE');
                                    distribuidor('COMERCIAL CARACAS ZONA SUR C.A.','AV. FRANCISCO DE MIRANDA LOCAL NRO 41 SECTOR PUEBLO NUEVO NORTE EL TIGRE AZOATEGUI','0283/231/6001 Y 0412/0862413','EL TIGRE ORIENTE');
                                    distribuidor('DISTRIBUIDORA LGM C.A.','CTRA EL TIGRE SALIDA VIA BARCELONA LOCAL PARCELA NRO 2 SECTOR LA BOTELLA EL TIGRE ANZOATEGUI.','0283-235-04-68','EL TIGRE ORIENTE');
                                    distribuidor('COMERCIAL CARACAS-ZN,C.A.','AV. FRANCISCO DE MIRANDA LOCAL NRO 41 SECTOR PUEBLO NUEVO EL TIGRE ANZOATEGUI','0283/231-60.01 Y 0412/086.24.13','EL TIGRE ORIENTE');
                                    distribuidor('ARTEFACTOS LA LINDA, C.A.','CALLE ANZOATEGUI LOCAL NRO 6-4 SECTOR EL TIGRITO','0414/8268238 0283-255-53-05','EL TIGRITO ORIENTE');
                                    distribuidor('CARVALDI, C.A','AV. PROLONGACION AVENIDA PASEO COLON CC PLAZA MAYOR NIVEL 1 LOCAL N1-53 ','0281/28-10-78 0414/806-72-26','LECHERIAS ORIENTE');
                                    distribuidor('EL POTENTE DE MONAGAS','AVENIDA BOLIVAR EDIF. JANET LOCALES 3 Y 4, FRENTE AL BANCO DE VENEZUELA. MATURIN ESTADO MONAGAS.','0291-642.5802 - 0291/6423847','MATURIN ORIENTE');
                                    distribuidor('DISTRIBUIDORA KUFATY C.A.','CALLE AZCUE EDIF KUFATY PISO PB LOCAL PB SECTOR CENTRO MATURIN','0291-642.90.01','MATURIN ORIENTE');
                                    distribuidor('RUMBA ELECTRONICA, C.A.','CALLE SUCRE CON CALLE PIAR LOCAL NRO 13-A SECTOR CENTRO MATURIN MONAGAS','0291/642/9270','MATURIN ORIENTE');
                                    distribuidor('CENTRO HOGAR 3 ELEFANTES, C.A.','AV. ORINOCO CRUCE CON CALLE 23 EDIF TARTUS PISO 1 LOCAL PB SECTOR JUNIN MATURIN MONAGAS','0291/645.03.19','MATURIN ORIENTE');
                                    distribuidor('MULTI- HOGAR SAN ELIAS, C.A.','CALLE CEDEÑO LOCAL NRO 83 SECTOR MERCADO VIEJO MATURIN MONAGAS','0291/643.97.49 0414/034.88.35','MATURIN ORIENTE');
                                    distribuidor('LUIGI CENTER, C.A','CALLE AZCUE LOCAL NRO 42 SECTOR CENTRO MATURIN MONAGAS','0291/642.94.82','MATURIN ORIENTE');
                                    distribuidor('SURTIDORA EL PODEROSO, C.A.','AV. BOLIVAR CON JUNCAL EDIF PICHEL PISO PB LOCAL 04 SECTOR MATURIN MONAGAS ','0291/643.96.22 0291/642.30.33','MATURIN ORIENTE');
                                    distribuidor('MUEBLERIA EL GRAN WAHBI IBRAHIM Y FLIA. C.A.','AV. BOLIVAR EDIF IANA PISO PB LOCAL B SECTOR CENTRO MATURIN MONAGAS','0291/642.73.86 0424/970.12.15','MATURIN ORIENTE');
                                    distribuidor('CASA CENTRO PRIMERA, C.A','CR V8-A CON AV. JUNCAL EDIF PLAZA PISO P.B LOCAL 4 Y 5 SECTOR CENTRO MATURIN MONAGAS','0291/642..52.71 0412/841.33.21','MATURIN ORIENTE');
                                    distribuidor('FERRETODO HOGAR ABBOUD, C.A.','CALLE BERMUDEZ- ANTIGUA CARRERA 6 CASA NRO 113 SETORO CENTERO MATURIN MONAGAS','0291/642/8688 0291/641/1299','MATURIN ORIENTE');
                                    distribuidor('CELAN COMPUTER II, C.A.','AV. RAUL LEONI, VIA EL SUR CC SIGO NIVEL P.B. LOCAL 34 C SECTOR EL ROSILLO MATURIN MONAGAS','0291/772.47.95','MATURIN ORIENTE');
                                    distribuidor('CELAN ELECTRONICS C.A.','AV. BOLIVAR CC MULTICENTRO COMERCIAL ATLAS NIVEL P.B LOCAL 2.4.18 Y 20 SECTOR CENTRO','','MATURIN ORIENTE');
                                    distribuidor('ARA COMPUTER INC, C.A.','AV. PRINCIPAL DE LA CRUZ CC VILLAS ALTA CRUZ NIVEL PB LOCAL 12 Y 13 SECTOR LA CRUZ DE LA PALOMA MATURIN','0291/772.83.10','MATURIN ORIENTE');
                                    distribuidor('INNOVAHOGAR JKC 3000, C.A.','CR. 7 EDIF. LAZARO PISO PB LOCAL 16 SECTOR CENTRO MATURIN MONAGAS','0424/931/0208 0291/642/90/01','ORIENTE');
                                    distribuidor('GINA IMPORT, C.A.','CALLEL BOLIVAR EDIF. LOS 3 HERMANOS PISO PB APT 3 SECTOR CENTRO MATURIN MONAGAS','0291/642/3745 0414/892/9932','MATURIN ORIENTE');
                                    distribuidor('ARTICOLCHON J.K. C.A.','CALLE PRINCIPAL LOCAL NRO 2 SECTOR LAS COCUIZAS MATURIN MONAGAS','0291/642.78.32 0414/382.99.92','MATURIN ORIENTE');
                                    distribuidor('SURTITODO LOS PRIMOS , C.A.','CR 04 ANTIGUA CEDEÑO LOCAL NRO S/N SECTOR MERCADO VIEJO MATURIN MONAGAS','0414/382.99.92','MATURIN ORIENTE');
                                    distribuidor('LANTRONIKS HOUSE C.A.','AV. BOLIVAR CON BICENTENARIO CC MALL CENTER NIVEL PB LOCAL 6 SECTOR CENTRO MATURIN MONAGAS','0291/642.00.34 0424/823.16.32','MATURIN ORIENTE');
                                    distribuidor('UNISONY C.A.','AV. 5 DE JULIO CASA NRO 118 SECTOR CENTRO PUERTO LA CRUZ ANZOATEGUI','0281/265.50.13','PTO LA CRUZ ORIENTE');
                                    distribuidor('CENTRO COMERCIAL PLAZA CITY, C. A.','Av. 5 DE JULIO CON CALLE RICAURTE, LO. No. 140. PUERTO LA CRUZ.','0281-265.5549','PUERTO LA CRUZ ORIENTE');
                                    distribuidor('HOME PLACE PUERTO, C. A.','CALLE LIBERTAD EDIF. DON LUIS BRUNINGS, P.B. FRENTE A DORSAY SECTOR CENTRO. PUERTO LA CRUZ.','0281-265.3061','PUERTO LA CRUZ ORIENTE');
                                    distribuidor('COMERCIAL HOGAR MANIA ORIENTE, C. A.','AV. 5 DE JULIO No. 33, EDIF. DON EDUARDO PISO PB LOCAL P.B., PTO LA CRUZ','0281-265.7038','PUERTO LA CRUZ ORIENTE');
                                    distribuidor('CORPORACION DIVERSA, C.A.','CALLE SUCRE LOCAL NRO 31 SECTOR CASCO CENTRAL PUERTO LA CRUZ ANZOATEGUI','0281/268/8885 0414/381/6459','PUERTO LA CRUZ ORIENTE');
                                    distribuidor('DISTRIBUIDORA ALL STAR C. A.','CALLE ANZOATEGUI CC SAN ONOFRE NIVEL PLANTA BAJA LOCAL 1 SECTOR CASCO CENTRAL FRENTE A LA PLAZA BOLIVAR PUERTO PIRITU EDO. ANZOATEGUI','0281-441.4064, 0414-705.9821','PUERTO PIRITU ORIENTE');
                                    distribuidor('MUEBLERIA ADAM C.A.','CALLE PAEZ, CARERA 06 LOCAL NRO 66-A URB EL CENTRO DE SAN FELIX CIUDAD GUAYANA BOLIVAR','0286-974/0662 Y 0424-907/0104','SAN FELIX ORIENTE');
                                    distribuidor('INVERSIONES LA REBELION, S.A.','CALLE ZOILO VIDAL S/N SECTOR CENTRO SAN FELIX, EDO. BOLIVAR','0286-9742540','SAN FELIX ORIENTE');
                                    distribuidor('ELECTRONICA EL FUTURO ,C.A.','CALLE PAEZ LOCAL NRO 213 SECTOR CENTO SAN FELIX CIUDAD GUAYANA BOLIVAR','0286-9713357','SAN FELIX ORIENTE');                                    
                                    ?>
                                </table>
							</div>
							<!-- Táchira -->
							<div class="tab-pane" id="t7">
								<table class="table table-bordered table-striped table-hover">
                                    <tr class="active">
                                        <th class="text-center">Distribuidor</th>
                                        <th class="text-center">Dirección</th>		
                                        <th class="text-center">Teléfonos</th>
                                        <th class="text-center">Ciudad</th>
                                    </tr>
                                    <?php                                  
                                    //distribuidor('','','','CARACAS');                                    
                                    distribuidor('AUTOMERCADO COSMOS FRONTERA C.A.','CTRA NACIONAL SAN CRISTOBAL - CAPACHO LOCAL GALPON NRO S/N SECTOR ZORCA PROVIDENCIA','-','SAN CRISTOBAL');
                                    ?> 
                                </table>
							</div>
							<!-- Vargas -->
							<div class="tab-pane" id="t8">
								<table class="table table-bordered table-striped table-hover">
                                    <tr class="active">
                                        <th class="text-center">Distribuidor</th>
                                        <th class="text-center">Dirección</th>		
                                        <th class="text-center">Teléfonos</th>
                                        <th class="text-center">Ciudad</th>
                                    </tr> 
                                    <?php                                  
                                    //distribuidor('','','','');
                                    distribuidor('COMERCIAL TODO HOGAR 2050 C.A.','CALLE REAL DE CARAYACA ENTRE ENTRADA TARMA Y CALLE EL TOTUMO S/N SECTOR CARAYACA','0212-336-16-52 Y 0212- 336-19-55','CARAYACA');                                    
                                    distribuidor('COMERCIAL SHALABI, C.A.','CALLE REAL, Nº. 93, CARAYACA','0212-336.13.42 0212/ 336/1605','CARAYACA');
                                    distribuidor('COMERCIAL MEGA CARIBE, C. A.','CALLE PPAL DEL CARIBEN EDIF. EL BODEGON, P.B. LOC. EL BODEGON DE LINO. URB. CARIBE.','0412-597.8144','LA GUAIRA');                                    
                                    distribuidor('COSMETICOS PATTY C.A.','CALLE JEFATURA A CRISTO EDIF. NJAIM PISO PB LOCAL PB SECTOR CASCO CENTRAL MAIQUETIA','0212-332.7898 / 3314612','LA GUAIRA');                                    
                                    distribuidor('DISTRIBUIDORA HABITAT C.A.','CALLE SILENCIO A JEFATURA NRO 74 SECTOR MAIQUETIA','0212/ 331.23.45 Y 331.23.33','LA GUAIRA');
                                    distribuidor('DISTRIBUIDORA EL 93, C.A.','CALLE 3 CASA 276/277 URB. CATIA LA MAR','0212-3518268/6436','LA GUAIRA');
                                    distribuidor('AUTOMERCADO PARIATA 70 C.A.','AVENIDA EL CEMENTERIO A 50 METROS DE LA CRUZ DE PARIATA.','0212-3314932','LA GUAIRA');
                                    distribuidor('TIENDA DEL MICROHONDA 2005, C.A.','CALLE REAL DE PARIATA C.C. PARIATA L/10 Y 5 CARLOS SOUBLETE. FRENTE A SILENCIADOR APOLLO 12. PARIATA MAIQUETIA','0212-3318975','LA GUAIRA');
                                    distribuidor('COMERCIAL BARCELONA, C.A.','CALLE LIBERTADOR ENTRE CALLE MARE Y JEFATURA , CASA PB Nº1 URB. DE MAIQUETIA','0212-3322130','LA GUAIRA');
                                    distribuidor('INVERSIONES MOISES 2010, C.A.','Av. LA COSTANERA BOULEVARD BEATRIZ OTA IRIMAR, LETRA "E" URB PALMAR OESTE','0212/3555502/ 0412/812-2253 0412-2804009','LA GUAIRA');                                    
                                    distribuidor('COSMETICOS PATTY C.A.','CRISTO A JEFATURA. EDIF NJAIM P.B. FRENTE AL MERCADO MUNICIPAL CASCO CENTRAL MAIQUETIA','0212-899.63.45','LA GUAIRA');
                                    distribuidor('C.A.M.A.V.','CALLE VIADUCTO A DESVIO EDIF. SAN JOSE PISO 1, OFIC. CAJA DE AHORRO.','0212-331.9038, 0414-416.5980','MAIQUETIA');
                                    distribuidor('MUEBLES DOÑA BARBARA, C. A.','SILENCIO A JEFATURA, EDIF. DOÑA BARBARA','0212-332.1625','MAIQUETIA');
                                    distribuidor('MUEBLES SOL DE VARGAS, C. A.','CALLE JEFATURA A PLAZA CONSUL, EDIF. DIA MAR, P.B.. LOC. 1.','0212-331.4588, 0424-197.3211','MAIQUETIA');
                                    distribuidor('GRAN BAZAR EL LITORAL','IGLESIA A SILENCIO NRO 92 MAIQUETIA','0212-3325343','MAIQUETIA');
                                    distribuidor('MUEBLES EL SAN DE VARGAS, C. A.','CALLE CENTRO DE MAIQUETIA SILENCIO A JEFATURA E/CALLEJON ROYAL LOCAL PB No.','0212-331.1481','MAIQUETIA');
                                    distribuidor('FERRETERIA EL REY DE MAIQUETIA 3000, C.A.','CALLE REAL SAN SEBASTIAN ENTRE ESQUINA LA IGLESIA LOCAL NRO 277 SECTOR NAVARRETE','0141/9362108 0414/903/2627','MAIQUETIA');
                                    
                                    ?>
                                </table>
							</div>
							<!-- Zulia -->
							<div class="tab-pane" id="t9">
								<table class="table table-bordered table-striped table-hover">
                                    <tr class="active">
                                        <th class="text-center">Distribuidor</th>
                                        <th class="text-center">Dirección</th>		
                                        <th class="text-center">Teléfonos</th>
                                        <th class="text-center">Ciudad</th>
                                    </tr> 
                                    <?php                                  
                                    //distribuidor('','','','');
                                    distribuidor('LA CASA DEL SANERO C. A.','AV. LIBERTADOR CC LA REDOMA NIVEL PB LOCAL 12 SECTOR CASC0 CENTRAL','0261-721.0069','MARACAIBO');                                    
                                    distribuidor('ALMACEN ANTONIA, C. A.','Av 12 C.C. LA REDOMA NIV 1 LOC 16B CASCO CENTRAL MARACAIBO.','0261-721.1047 ','MARACAIBO');                                    
                                    distribuidor('MULTITIENDAS MATECURVAS, C. A.','Av. 91, CASA No. 79A-08, SECTOR BARRIO RAUL LEONI.','','MARACAIBO');
                                    distribuidor('IMPACTO, C. A.','Av. 90 CASA No. 91-18, SECTOR CURVA DE MOLINA, FRENTE A VIVERES CANDIDO.','0261-756.6349, 70.32','MARACAIBO');
                                    distribuidor('SEGURIDAD INDUSTRIAL FERRETERIA Y UNIFORMES EN GENERAL, S. A.','CALLE 69 A, ENTRE Av 19 Y 20 CASA No. 19-21 SECTOR BARALT.','0414/6451/1743 Y 0414/063/8221','MARACAIBO');
                                    distribuidor('MUNDO SAN LAS PLAYITAS, C. A.','Av. 14 C.C. MARACAIBO P.B. LOCAL 16, CASCO CENTRAL.','','MARACAIBO');
                                    distribuidor('LA ESQUINA DEL PUEBLO, C.A.','AV. LIBERTADOR 12, CENTRO COMERCIAL LA REDOMA P.B. LOCAL 14-G','0414-3633094','MARACAIBO');
                                    distribuidor('SAN LAS REINAS, C. A.','Av. LIBERTADOR C.C. UNICENTRO LAS PULGAS NIVEL 1 LOC. 37. CENTRO.','0261-721.19.04, 788.5297','MARACAIBO');                                    
                                    distribuidor('BURGOL MUEBLES , C.A.','AV. 28 LA LIMPIA EDIF. BURGOL PISO P.B LOCAL 7-07 SECTOR LA LIMPIA','0261-759.5318','MARACAIBO');                                    
                                    distribuidor('EL POTENTE DEL SIGLO 21, C.A','AV 12 CC LA REDOMA NIVEL PB LOCAL 2C SECTOR CASCO CENTRAL','0261- 721.2930','MARACAIBO');
                                    distribuidor('DISTRIBUIDORA LA ESTRELLA TODO HOGAR C.A.','AV. LIBERTADOR LOCAL CC PLAZA CENTRAL LOCAL NRO 26 SECTOR CASCO CENTRAL','0261/ 722.22-03','MARACAIBO');                                    
                                    distribuidor('INVERSIONES LIZ MARACAIBO C.A.','CALLE 79 LA LIMPIA LOCAL E.MIX UNIVERSAL NRO 72-206 BARRIO VENEZUELA','','MARACAIBO');                                    
                                    distribuidor('MUNDO DE COLECCION, C.A.','AV. 89C CON CALLE 65C CASA NRO 30-30 URB. SANTA FE III','','MARACAIBO');
                                    distribuidor('LA MARAVILLA DEL SAN','AV. 100 LIBERTADOR C.C. UNICENTRO LAS PULGAS NIVEL PB LOCAL 56 SECTOR LAS PULGAS','0261/722-86-25','MARACAIBO');                                    
                                    ?>
                                </table>
							</div>
						</div>
					</div>			
				</div>
		
	</div>
</section>
<?php footer(); ?>