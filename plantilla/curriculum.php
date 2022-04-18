
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php echo $datos_basicos["title"];?></title>
    <meta name="description" content="Apacionado por la tecnología, Ethical Hacker | Web Developer | Cyber Security Expert | DevOps Enginner | Software Arquitect | SysAdmin | Cloud Enginner | Desarrollador web Full-Stack (Front-End & Back-end) | Programador PHP & Javascript | React Framework y mas.. ">
    <meta name="keywords" content="desarrollador web, diseñador, desarrollador front-end, hacker, devops, sysadmin, cybersecurity, programing ">
    <meta name="author" content="Ulises Reyes">
    <link rel="icon" type="image/png" href="img/perfil-min.png"/>

    <!---para no almacenar en el navegador--->
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <!--------------------------------
        meta-tags Open Graph 
        ------------------------------->
    <meta property="og:title" content="Ulises Reyes | Web Developer"><!-- Ruleta de regalos de Navidad de Telcel -->
    <!-- og:type tipo de contenido estás compartiendo. -->
    <meta property="og:type" content="website">
    <!-- og:description : incluir descripción atractiva que te dará más clics. Tienes hasta 156 caracteres para esta tag. Ejemplo: ¿Quieres saber como aparecer en la primera página de resultados de Google al hacer una búsqueda referente a tu mercado? Estas 10 herramientas te ayudarán -->
    
    <meta property="og:description" content="Apacionado por la tecnología, Ethical Hacker | Web Developer | Cyber Security Expert | DevOps Enginner | Software Arquitect | SysAdmin | Cloud Enginner | Desarrollador web Full-Stack (Front-End & Back-end) | Programador PHP & Javascript | React Framework y mas.. ">

    <!-- og:image: Imagen mayor a 5o x 50 px, preferentemente más grande de 200 x 200 px. La imagen no puede ser más de 5 MB. -->
    <meta property="og:image" itemprop="image" content="https://ulises-reyes.herokuapp.com/img/perfil-min.png">
    
    <!--og:url Poner el URL de la página que estás compartiendo. -->
    <meta property="og:url" content="https://ulises-reyes.herokuapp.com">
        <!-- le dice a Facebook el nombre de tu sitio web 
    Og:site_name -->
    <!-- conecta tu página de Facebook a tu sitio web. -->
    <!--  <meta property="fb:admins"content="marketingdecontenidos"/> -->


    <!-----------------------------------------
        Twitter Card data 
    ----------------------------------------->
    <!-- twitter:card  describe el tipo de contenido que estás compartiendo. photo (para imágenes), player (para videos), summary (para todo lo demás) y summary with large image -->
    <meta name="twitter:card" content="website">
    <!-- twitter:title: azlo atractivo para que los usuarios le den clic. mantener entre 70 caracteres. Marketing de Contenidos: como puede impulsar tu empresa -->
    <meta name="twitter:title" content="Ulises Reyes | Web Developer">
    <!-- twitter:description: Oración atractiva invita a la gente a hacer clic. La descripción está limitada a 200 caracteres. Ejemplo Conoce la nueva estrategia de Marketing que puede hacer crecer tu empresa con menor inversión que con el marketing tradicional -->
    
    <meta name="twitter:description" content="Apacionado por la tecnología, Ethical Hacker | Web Developer | Cyber Security Expert | DevOps Enginner | Software Arquitect | SysAdmin | Cloud Enginner | Desarrollador web Full-Stack (Front-End & Back-end) | Programador PHP & Javascript | React Framework y mas.. "> 
    
    <meta name="twitter:image" content="https://ulises-reyes.herokuapp.com/img/perfil-min.png">
    
    <!--twitter:url: Poner el URL de la página que estás compartiendo. -->
    <meta name="twitter:url" content="https://ulises-reyes.herokuapp.com">

    <!-- <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:data1" content="$3">
    <meta name="twitter:label1" content="Price">
    <meta name="twitter:data2" content="Black">
    <meta name="twitter:label2" content="Color"> -->

    <link rel="stylesheet" type="text/css" href="css/curriculum.css" />
    <link rel="stylesheet" type="text/css" href="css/preload.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
  </head>
  <body>

<section id="containerloader">
    <section>
        <div class="loader">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
        <div class="divloading">
            <h6>Loading...</h6>
        </div>
    </section>
</section>
    
    
<header class="header animate__animated animate__fadeIn">
  <div id="divleft"> 
      <div class="nombre_logo"><h2>Cv Ulises Reyes</h2></div>
  </div>

  <div id="divright">
      <button class="nav-toggle" aria-label="Abrir menú">
                      <i class="fa fa-bars" aria-hidden="true"></i>
      </button>
      <section id="section-sociales">
                  <ul class="iconos-social">
                              <li><a class="facebook" href=""><i class="fa fa-facebook"></i></a></li>
                              <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a></li>
                              <li><a class="instagram" href=""><i class="fab fa-instagram"></i></a></li>
                              <li><a class="linkedin" href=""><i class="fa fa-linkedin"></i></a></li>
                  </ul>
      </section>
  </div>

  <div id="divcenter">
          <ul class="nav-menu" >
            <?php
                    if($pagina === "cv-sistemas"){
                          $menu_active=["sistemas" => "a-active","developer" => "","hacking" => "",];
                    }elseif($pagina === "cv-developer"){
                          $menu_active=["sistemas" => "","developer" => "a-active","hacking" => "",];
                    }elseif($pagina === "cv-hacking"){
                          $menu_active=["sistemas" => "","developer" => "","hacking" => "a-active",];
                    }else{
                          $menu_active=["sistemas" => "a-active","developer" => "","hacking" => "",];
                    }

                    echo ' 
                      <li class="nav-menu-item"><a href="cv-sistemas" class="nav-menu-link nav-link '.$menu_active["sistemas"].'">CV Sistemas</i></a></li>
                      <li class="nav-menu-item"><a href="cv-developer" class="nav-menu-link nav-link '.$menu_active["developer"].'">CV Developer</i></a></li>
                      <li class="nav-menu-item"><a href="cv-hacking" class="nav-menu-link nav-link '.$menu_active["hacking"].'">CV Seguridad</i></a></li>
                    ';

                    /* switch($pagina){
                        case "cv";
                            echo ' 
                            <li class="nav-menu-item"><a  class="nav-menu-link nav-link a-active">CV Sistemas</i></a></li>
                            <li class="nav-menu-item"><a href="cvd" class="nav-menu-link nav-link">CV Developer</i></a></li>
                            <li class="nav-menu-item"><a href="cvh" class="nav-menu-link nav-link">CV Seguridad</i></a></li>
                            ';
                        break;
                        case "cvs";
                            echo ' 
                            <li class="nav-menu-item"><a  class="nav-menu-link nav-link a-active">CV Sistemas</i></a></li>
                            <li class="nav-menu-item"><a href="cvd" class="nav-menu-link nav-link">CV Developer</i></a></li>
                            <li class="nav-menu-item"><a href="cvh" class="nav-menu-link nav-link">CV Seguridad</i></a></li>
                            ';
                        break;
                        case "cvd";
                            echo ' 
                            <li class="nav-menu-item"><a href="cvs" class="nav-menu-link nav-link">CV Sistemas</i></a></li>
                            <li class="nav-menu-item"><a  class="nav-menu-link nav-link a-active">CV Developer</i></a></li>
                            <li class="nav-menu-item"><a href="cvh" class="nav-menu-link nav-link">CV Seguridad</i></a></li>
                            ';
                        break;
                        case "cvh";
                            echo ' 
                            <li class="nav-menu-item"><a href="cvs" class="nav-menu-link nav-link">CV Sistemas</i></a></li>
                            <li class="nav-menu-item"><a href="cvd" class="nav-menu-link nav-link">CV Developer</i></a></li>
                            <li class="nav-menu-item"><a  class="nav-menu-link nav-link a-active">CV Seguridad</i></a></li>
                            ';
                        break;
                        default;
                            echo ' 
                            <li class="nav-menu-item"><a class="nav-menu-link nav-link a-active">CV Sistemas</i></a></li>
                            <li class="nav-menu-item"><a href="cvd" class="nav-menu-link nav-link">CV Developer</i></a></li>
                            <li class="nav-menu-item"><a href="cvh" class="nav-menu-link nav-link">CV Seguridad</i></a></li>
                            ';
                    } */
                ?>
                
          </ul>
  </div> 
</header>

    <section id="section_body">
     <!--  <div class="container animate__animated animate__fadeInUp" id="content"> -->
      <div class="container" id="content">
        <!--Aside section-->
        <aside class="left_side">
          <div class="profile_text">
            <div class="profile_img">
              <img
                src="img/perfil-min.png"
                alt="Ulises Reyes"
              />
            </div>
            <h2><?php echo $datos_basicos["nombre"];?><br /><span><?php echo $datos["oficio"];?></span></h2>
          </div>
          <div class="contact_info">
            <h3 class="title">Información de Contacto</h3>
            <ul>
              <?php
                foreach($datos_basicos["contacto"] as $contacto => $dato){
                echo '
                  <li>
                    <span class="icon"><i class="'.$dato["icon"].'" aria-hidden="true"></i></span>
                    <span class="text">'.$dato["text"].'</span>
                  </li>
                ';
                }
             ?>
             <!--  <li>
                <span class="icon"
                  ><i class="fa fa-phone" aria-hidden="true"></i>
                </span>
                <span class="text">+57 3242 235 623</span>
              </li> -->
            </ul>
          </div>
          <div class="contact_info education">
            <h3 class="title">FORMACIÓN</h3>
            <ul>
              <?php
                    foreach($datos_basicos["educacion"] as $educacion){
                        echo '
                        <li>
                          <h5>'.$educacion["periodo"].'</h5>
                          <h4>'.$educacion["formacion"].'</h4>
                          <h4>'.$educacion["institucion"].'</h4>
                        </li>
                        ';
                    }
              ?>
              <!-- <li>
                <h5>2018 - 2021</h5>
                <h4>
                    Ingenieria en Sistemas Computacionales
                </h4>
                <h4>Universidad de America del Norte</h4>
              </li> -->
            </ul>
          </div>

          <div class="contact_info">
          <!--   <h3 class="title">Cursos y Certificados</h3> -->
            <h3 class="title">Cursos</h3>
            <?php
                   foreach($datos_basicos["certificados"] as $certificado){
                        echo '
                            <div class="description certificados">
                              <h5>'.$certificado["diploma"].'</h5>
                              <p>'.$certificado["institucion"].'</p>
                              <span>'.$certificado["periodo"].'</span>
                            </div>
                        ';
                   }
            ?>
          <!--   <div class="description certificates">
              <h4>
                DESARROLLO DE APLICACIONES PARA DISPOSITIVOS MOVILES ANDROID
              </h4>
              <p>Servicio Nacional de Aprendizaje – SENA</p>
              <span>10/2016 – 12/2016</span>
            </div> -->
          </div>

          <div class="contact_info language">
            <h3 class="title">Habilidades Personales</h3>
            <ul>
              <?php
                    foreach($datos["habilidades_personales"] as $habilidad => $porsentaje){
                          echo '
                            <li>
                              <span class="text">'.$habilidad.'</span>
                              <span class="percent">
                                <div style="width:'.$porsentaje.'"></div>
                              </span>
                            </li>
                          ';
                    }
              ?>
             <!--  <li>
                <span class="text">Capacidad de concentración </span>
                <span class="percent">
                  <div style="width: 80%"></div>
                </span>
              </li> -->
            </ul>
          </div>
          <div class="contact_info language">
            <h3 class="title">Idiomas</h3>
            <ul>
            <?php
                    foreach($datos_basicos["idiomas"] as $idioma => $porsentaje){
                          echo '
                            <li>
                              <span class="text">'.$idioma.'</span>
                              <span class="percent">
                                <div style="width:'.$porsentaje.'"></div>
                              </span>
                            </li>
                          ';
                    }
              ?>
              <!-- <li>
                <span class="text">Español</span>
                <span class="percent">
                  <div style="width:70%"></div>
                </span>
              </li> -->
            </ul>
          </div>
        </aside>
        <!-- Right section -->
        <main class="right_side">
          <!-- <section class="about">
            <h2 class="title">Perfil</h2>
            <p>
              <?php //echo $datos["perfil"];?>
            </p>
          </section> -->
          <section class="about">
            <h2 class="title">Objetivo</h2>
            <p>
              <?php echo $datos["objetivo"];?>
            </p>
          </section>
          <section class="about">
            <h2 class="title">Experiencia</h2>
            <?php
                  foreach( $datos["experiencias"] as $experiencia){
                     /*  echo '
                        <div class="box">
                            <div class="year_company">
                              <h5>'.$experiencia["periodo"].'</h5>
                              <h5>'.$experiencia["empresa"].'</h5>
                            </div>
                            <div class="description">
                              <h4>'.$experiencia["puesto"].'</h4>
                              <p>
                              '.$experiencia["descripcion"].'
                              </p>
                            </div>
                        </div>
                      '; */
            
                    echo '
                        <div class="box">
                            <div class="year_company">
                              <h5>'.$experiencia["periodo"].'</h5>
                              <h5>'.$experiencia["empresa"].'</h5>
                            </div>
                            <div class="description">
                            <h4>'.$experiencia["puesto"].'</h4>
                    ';

                    foreach($experiencia["funciones"] as $funcion){
                      //return $key;
                        echo '<p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>'.$funcion.'</p>';
                    }
                        echo '</div></div>
                    '; 
                  }
            ?>
            <!-- <div class="box">
              <div class="year_company">
                <h5>06/2017 - 10/2017</h5>
                <h5>MiRegion</h5>
              </div>
              <div class="description">
                <h4>Mobile Developer</h4>
                <p>
                  Responsable del desarrollo de aplicaciones móviles an android
                  para el medio de noticias MiRegion.
                </p>
              </div>
            </div> -->
          </section>

          <!-- <div class="about">
            <h2 class="title">Cursos y Certificados</h2>
            <?php
                   /* foreach($datos["certificados"] as $certificado){
                        echo '
                            <div class="description certificates">
                              <h4>'.$certificado["diploma"].'</h4>
                              <p>'.$certificado["institucion"].'</p>
                              <span>'.$certificado["periodo"].'</span>
                            </div>
                        ';
                   } */

                   /*  <div class="description certificates">
                      <h4>
                        DESARROLLO DE APLICACIONES PARA DISPOSITIVOS MOVILES ANDROID
                      </h4>
                      <p>Servicio Nacional de Aprendizaje – SENA</p>
                      <span>10/2016 – 12/2016</span>
                    </div>  */
            ?>
           
          </div> -->
      

          <div class="about">
            <h2 class="title">Competencias</h2>
            <?php
                    foreach($datos["habilidades_tecnicas"] as $habilidad => $porsentaje){
                      echo '
                       <div class="box">
                         <h4>'.$habilidad.'</h4>
                         <div class="percent">
                           <div style="width:'.$porsentaje.'"></div>
                         </div>
                       </div>
                     '; 
                    }
                   /* foreach($datos["competencias"]["developer"] as $competencia => $porsentaje){
                           echo '
                            <div class="box">
                              <h4>'.$competencia.'</h4>
                              <div class="percent">
                                <div style="width:'.$porsentaje.'"></div>
                              </div>
                            </div>
                          '; 
                    } */
                   /* foreach($datos["competencias"]["hacking"] as $competencia => $porsentaje){
                           echo '
                            <div class="box">
                              <h4>'.$competencia.'</h4>
                              <div class="percent">
                                <div style="width:'.$porsentaje.'"></div>
                              </div>
                            </div>
                          '; 
                    } */
            ?>
           <!--  <div class="box">
              <h4>HTML</h4>
              <div class="percent">
                <div style="width: 30%"></div>
              </div>
            </div> -->
      
          </div>
          <div class="about interest">
            <h2 class="title">Intereses</h2>
            <ul>
            <?php
      
                    foreach($datos_basicos["intereses"] as $interes => $dato){
                      echo '
                          <li><i class="'.$dato["icon"].'" aria-hidden="true"></i>'.$dato["hobby"].'</li>
                        ';
                    }
             ?>
              <!-- <li><i class="fa fa-motorcycle" aria-hidden="true"></i> Viajar</li> -->
            </ul>
        </main>
      </div>
    </section>


    <button id="btn_descargar"><i class="fa fa-download" aria-hidden="true"></i></button>

  

        <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.7/dist/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jspdf-html2canvas@latest/dist/jspdf-html2canvas.min.js"></script>
    <!-- <script src="html2canvas.js"></script>
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script> -->
    <script src="js/descargar_curriculum.js"></script>
                    
    <script type="text/javascript">
                    //BOTM MENU
                    $(document).ready(function(){


                        $('.nav-toggle').click(function(){
                            if( $("#abrirmenu").hasClass('abrirmenuactivo') ){
                                //$('#result').append("<li>"+this.id+"</li>");
                                $("#abrirmenu").removeClass('abrirmenuactivo');
                            }else{
                                $("#abrirmenu").addClass('abrirmenuactivo');
                                //$(this).addClass('abrirmenuactivo');
                            }   
                        });

                        const navToggle = document.querySelector(".nav-toggle");
                        const navMenu = document.querySelector(".nav-menu");

                        navToggle.addEventListener("click", () => {
                        navMenu.classList.toggle("nav-menu_visible");

                        if (navMenu.classList.contains("nav-menu_visible")) {
                            navToggle.setAttribute("aria-label", "Cerrar menú");
                        } else {
                            navToggle.setAttribute("aria-label", "Abrir menú");
                        }
                        });
                        //$('#abrirmenu').click(function(){
                            //if( $(this).hasClass('abrirmenuactivo') ){
                                //$('#result').append("<li>"+this.id+"</li>");
                                //$("#abrirmenu a").removeClass('abrirmenuactivo');
                            // }else{
                                // $("#abrirmenu a").addClass('abrirmenuactivo');
                                //$(this).addClass('abrirmenuactivo');
                            // }   
                            //alert("has hecho click en el boton");
                        // });
                        
                    });
    </script>
            
    <script>
      window.onload = function(){
          var contenedor = document.getElementById('containerloader');
          contenedor.style.visibility='hidden';
          contenedor.style.opacity='0';
      }  

    </script>
  </body>
</html>
