<title>BDIHub / Associate</title>
<style type="text/css">
	#form-container .list{
		height: 35px;
	}
.modal-header{
		padding: 10px;
	}
	.modal-footer{
			padding-top: 5px;
		padding-bottom: 5px;
	}
	.modal-body1{
		padding: 10px;
		padding-top: 10px;
		padding-bottom: 0px;
	}

	
</style>


<body>
<div class="main_container">

		  <div class="row middle-xs start-md start-lg imageHighlight blue">
		  		<div class="col-md-6 col-sm-3 end-md"><img src="<?php echo base_url();?>application/images/side.png" alt="Next-Generation Experience" title="Next-Generation Experience"></div>
				<div class="col-md-5 col-sm-9">
					  <div class="box textBlock">
					  	<h2 class="titleSub01">The Associate Program</h2>
					  	</div>
				 </div>
			</div>
			
		<div class="contentBlock">
		
			
			<div id="programModule">
<!--		<div class="wrapper">-->
			<div class="spacer40"></div>
			<div class="clearfix">
					  <div id="programTabs">
					  <div class="tabNavigation">
					  <div class="wrapper">
					  <ul>
						<li><a href="#program01" course_id="<?php echo $result[0]['course_id'];?>"><?php echo $result[0]['course_name'];?></a></li>
						<li><a href="#program02" course_id="<?php echo $result[1]['course_id'];?>"><?php echo $result[1]['course_name'];?></a></li>
					  </ul>
					  </div>
					  </div>
					  <div id="program01">
					  <div class="wrapper">
						
						<div class="row start-md between-md">
							<div class="col-md-12">
							<h2>Associate - Big Data (BDIABD)</h2>
								
						<h3>Descripción del Curso</h3>
						<p>Curso introductorio a Big Data, ofrecido por BDIHub, esencial para aquellas personas que quieren ingresar en el emocionante mundo del Big Data. Este curso es una introducción al ecosistema de Hadoop, familiariza al estudiante con la recolección, almacenamiento, y procesamiento de datos estructurados en el ecosistema de Hadoop. Este curso habilita al estudiante para trabajar cómodamente con datos estructurados en procesos en batch y análisis interactivo. Este curso enseña técnicas prácticas para procesar datos usando Apache Hive, crear funciones definidas por los usuarios (UDF’s), crear scripts basados en Hive, utilizar motores compatibles con Hadoop como SparkSQL y Apache Phoenix. En BDIABD, como en todos los demás cursos ofrecidos por BDIH se discuten una gran variedad de casos de uso y casos de estudio.</p>
						<div class="priceBlock">
								<div class="textBlock">Horas: <span class="color">100 </span></div>
								<div class="textBlock">Precio de lanzamiento:<span class="color">
								COP 4 millones </span></div>

									<a type="button" class="btnWhite" id="btn3" onclick="enrollmodel();"   style="background-color:#0c3c60;color:white">
<?php echo $this->lang->line('register_now'); ?></a> 




						</div>
							</div>
							
								<div id="workProcess">
								
									<div class="row reverse">
									<div class="col-xs-12 col-md-3">
									
									</div>
									
									
									</div>
								</div>
							</div>					
							<div class="fullBgContainer">
								<div class="spacer20"></div>
								<div class="wrapper800">
									<h3 class="titleH3">Estructura curricular – ¿Qué temas cubre el curso?</h3>
									<ul class="timeLine">
										<li>Introducción a Big Data</li>
										<li>Ecosistema, distribuciones y opciones de despliegue de Apache Hadoop</li>
										<li>Consulta de datos en Big Data </li> 
										<li>Consultas SQL y análisis de datos </li> 
										<li>Procesamiento de datos en Hadoop - Map Reduce Framework - YARN, Conceptos básicos Sparks </li>
										<li>Transferencia de datos entre bases de datos relacionales y Hadoop - Apache Scoop </li> 
										<li>Consultas tipo SQL sobre Hadoop - Introducción a Hive </li> 
										<li>SQL en Hadoop, SparkSQL, y Phoenix </li> 
										<li>Proyecto práctico</li> 										 
									</ul>
								</div>			
							</div>						
					  </div>
					  <div class="spacer20"></div>
					  <div class="fullBgBlue">
						<div class="wrapper1000">
						<div class="row center-md">
							<div class="col-md-12 fullTextCenterBox">
								<h3>Resultados</h3>
							<p>Con  esta  certificación  los  estudiantes  tienen  la  capacidad  de  comenzar  su  carrera  como ingenieros de datos Jr con SQL en Hadoop experticia. Aquellos estudiantes que han tomado exclusivamente el curso BDIABD entre el conjunto de cursos que provee BDIH, pueden agregar en sus hojas de vida conocimientos fundamentales en Big Data. Tendrán la capacidad de ser miembros activos en los equipos de Big Data en sus compañías 
</p>
							</div>
							
						</div>
							</div>
					</div>


					  </div>

					  
					  <div id="program02">
					  <div class="wrapper">
						
						<div class="row start-md between-md">
							<div class="col-md-12">
							<h2>Associate – Data Science (BDIADS)</h2>
								<h3><?php echo $this->lang->line('pre_requisites_title'); ?></h3>
						<p><?php echo $this->lang->line('ads_pre_content'); ?></p>

						<h3><?php echo $this->lang->line('purpose_title'); ?></h3>
						<p><?php echo $this->lang->line('ads_purpose_content'); ?></p>
						<div class="priceBlock">
								<div class="textBlock"><?php echo $this->lang->line('hour_title'); ?> 
								<span class="color"><?php echo $this->lang->line('ads_hour'); ?></span></div>

								<div class="textBlock"><?php echo $this->lang->line('price_title'); ?>   
								<span class="color"><?php echo $this->lang->line('ads_price'); ?></span></div>

									<a type="button" class="btnWhite" id="btn3" onclick="enrollmodel();"   style="background-color:#0c3c60;color:white">
<?php echo $this->lang->line('register_now'); ?></a>
								</div>
							</div>
							<div class="col-md-6">
							<div id="workProcess">
								
							<div class="row reverse">
									<div class="col-xs-12 col-md-3">
									
									</div>
								</div>
							</div>
						</div>
								</div>

						
						<div class="spacer40"></div>
						<div class="fullBgContainer">
								<div class="spacer20"></div>
								<div class="wrapper800">
									<h3 class="titleH3">Estructura curricular – ¿Qué temas cubre el curso?</h3>
									<ul class="timeLine">
										<li>Introducción a Data Science. </li>
										<li>Introducción a Machine Learning. </li>
										<li>Representación de datos </li> 
										<li>Conceptos básicos de descripción e inferencia en Data science usando herramientas probabilísticas y estadísticas. </li> 
										<li>Preparación y/o preprocesamiento de datos. Manejo y solución de datos incompletos o problemas relacionados con ruido y errores en los datos. </li>
										<li>Análisis exploratorio de datos. </li> 
										<li>Construcción de modelos - medidas de desempeño – sesgo y varianza en modelos. </li> 
										<li>Aplicación de Machine Learning y casos de estudio: </li> 
										<li>Análisis descriptivo de series tiempo</li> 
										<li>Ingeniería de características – Preparación de los datos para la construcción de modelos </li> 
										<li>Uso de técnicas de aprendizaje supervisado para la clasificación y predicción – Regresiones, Árboles de decisión, Vecinos Cercanos, Clasificadores Bayesianos, y Redes Neuronales </li> 
										<li>Aprendizaje no supervisado – Uso de algoritmo para encontrar subgrupos homogéneos </li>
										<li>Problemas prácticos en el momento de implementar </li> 
										<li>Proyecto de clase usando los conceptos aprendidos</li> 										 
									</ul>
								</div>			
							</div>		
						<div class="spacer40"></div>
					  </div>
					  <div class="spacer20"></div>
					  <div class="fullBgBlue">
						<div class="wrapper1000">
						<div class="row center-md">
							<div class="col-md-12 fullTextCenterBox">
								<h3>Resultados</h3>
							<p>Los  estudiantes  pueden  comenzar  su  carrera  como  Junior  Data  Science  Engineer  con  esta certificación.  Los  estudiantes  que  sólo  tienen  BDIADS  también  pueden  añadir  datos  con seguridad a sus currículos. Los estudiantes pueden agregar la habilidad de Data Engineering y Análisis Exploratorio de Datos a sus perfiles. Pueden caber bien como miembros del equipo en los equipos de la Data Science en compañías y corporaciones.</p>
							</div>
							

						</div>
							</div>
					</div>
					  </div>
					</div>
			</div>
			
<!--		</div>-->
		
		</div>
		</div>
<!-- InstanceEndEditable -->
		
	</div>
<!-- InstanceBeginEditable name="FooterScriptRegion" -->
	
	<!-- InstanceEndEditable -->
</body>
	
<!-- InstanceEnd --></html>
