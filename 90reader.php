<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

  <title>90reader</title>
  <!--
  <script src="js/react-with-addons.js"></script>
  <script src="js/react-dom.js"></script>
  -->
  <script src="js/jquery.min.js"></script>
  <script src="js/underscore-min.js"></script>


  <script>
    
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45359665-6', 'auto');
  ga('send', 'pageview');

  </script>
  <style type="text/css">
   body{
    color: green;
    background-color: black;
   }
    #control {
    position: fixed;
    bottom: 0px;
    width: 100%;
    margin-bottom: 10px;
    }
    #screen{
      font-size: 30px;
      width: 100%;
      height: 800px;
      /*margin-top: 25%;*/
    /*  color: blue; */
      
    /* font-family: "Comic Sans MS", cursive, sans-serif; */

    }
     #up-screen{
      margin-left: 50%;
      position: fixed;
      top: 30px;
      transform: translateX(-50%);
     }
     #down-screen{
      margin-left: 50%;
      position: fixed;
      bottom: 60px;
       transform: translateX(-50%);

     }
     #left-screen{
      position: fixed;
      top: 50%;
      left: 0px; 

      /*float: right; */
     /*font-size: 26px;*/

     }
     #right-screen{
      position: fixed;
      top: 50%;
      right: 0px; 
      /* float: left; */
      /*font-size: 26px;*/

     }
      #center-screen{
      position: fixed;
      top: 50%;
      margin-left: 50%;
      transform: translateX(-50%);
      /*right: 0px; */
      /* float: left; */
      /*font-size: 26px;*/

     }
     #left-up-screen{
      position: fixed;
      top: 10%;
      left: 0px; 
     }
     #right-up-screen{
      position: fixed;
      top: 10%;
      right: 0px; 
     }

     #left-down-screen{
      position: fixed;
      left: 0px; 
      bottom: 60px;
     }
     #right-down-screen{
      position: fixed;
      right: 0px; 
      bottom: 60px;
     }
     #right-down-screen2{
      position: fixed;
      right: 0px; 
      bottom: 0px;
     }
  </style>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="screen" onclick="if(posicion-12>=0){ posicion-=12;  }else{ posicion=0; }">
  <div id="left-up-screen"></div>
  <div id="right-up-screen"></div>
  <div id="up-screen"></div>
  <div id="left-screen"></div>
  <div id="center-screen">¡90reader!</div>
  <div id="right-screen"></div>
  <div id="down-screen"></div>
  <div id="left-down-screen"></div>
  <div id="right-down-screen"></div>
</div>
<div id="right-down-screen2"><input type="button" value="hide" onclick="hide();" id="hide-btn"></div>

<div id="control">
  <input  type="button" value="start" onclick="play();" id="play-btn">
  <input  type="button" value="stop" onclick="stopFlash();">
  <input type="button" value="clearTxt" onclick="$('#input1').val(''); stopFlash();">

  <select id="velocityFlash" style="width: 75px;" onchange="calcularTiempo();">   
    <option value="50">50wpm</option>
    <option value="75">75wpm</option>
    <option value="100">100wpm</option>
    <option value="125">125wpm</option> 
    <option value="150">150wpm</option>
    <option value="175">175wpm</option>
    <option value="200">200wpm</option>
    <option value="225">225wpm</option>
    <option value="250">250wpm</option>
    <option value="275">275wpm</option>
    <option value="300" selected>300wpm</option>
    <option value="325">325wpm</option>
    <option value="350">350wpm</option>
    <option value="375">375wpm</option>
    <option value="400">400wpm</option>
    <option value="425">425wpm</option>
    <option value="450">450wpm</option>
    <option value="475">475wpm</option>
    <option value="500">500wpm</option>
    <option value="525">525wpm</option>
    <option value="550">550wpm</option>
    <option value="575">575wpm</option>
    <option value="600">600wpm</option>
    <option value="625">625wpm</option>
    <option value="650">650wpm</option>
    <option value="675">675wpm</option>
    <option value="700">725wpm</option>
    <option value="725">700wpm</option>
    <option value="750">750wpm</option>
    <option value="775">775wpm</option>
    <option value="800">800wpm</option>
    <option value="825">825wpm</option>
    <option value="850">850wpm</option>
    <option value="875">875wpm</option>
    <option value="900">900wpm</option>
    <option value="925">925wpm</option>
    <option value="950">950wpm</option>
    <option value="975">975wpm</option>
    <option value="1000">1000wpm</option>
    <option value="1100">1100wpm</option>
    <option value="1200">1200wpm</option>
  </select>
  
  <select id="wordsByFlash" onchange="wordsByFlash=n('wordsByFlash');" style="/*display: none;*/">   
    <!--<option value="1">1w</option>
    <option value="2">2w</option>
    <option value="3">3w</option>
    <option value="4"  >4w</option>
    <option value="5">5w</option>-->
    <option value="6" selected>6w</option>
    <option value="7">7w</option>
    <option value="8">8w</option>
  </select>
  <select id="readingMode" onchange="bLugar=1; circleFase=0; readingMode=n('readingMode');" style="/*display:none;*/">   
    <option value="1" >left-right</option>
    <option value="2">up-down</option>
    <option value="3">circle</option>
    <option value="4">circle inv</option>
    <option value="5">random Circle</option>
    <option value="6" selected>center</option>
    <option value="7">Square</option>
    <option value="8">Cross</option>
    <option value="9">Random Square</option>
    <!--<option value="6">center</option>-->
  </select>
  <textarea rows="1" cols="25" style="margin-top: 5px;" id="input1">Para Sherlock Holmes ella es siempre la mujer. Rara vez he oído que la mencione por otro nombre. A sus ojos, ella eclipsa al resto del sexo débil. No es que haya sentido por Irene Adler una emoción que pueda compararse al amor. Todas las emociones, y ésa particularmente, son opuestas a su mente fría, precisa, pero admirablemente equilibrada. Es, puedo asegurarlo, la máquina de observación y razonamiento más perfecta que el mundo ha visto; pero como amante, como enamorado, Sherlock Holmes había estado en una posición completamente falsa. Jamás hablaba de las pasiones, aun de las más suaves, sin un dejo de burla y desprecio. Eran cosas admirables para el observador... excelentes para recorrer el velo de los motivos y acciones de los hombres. Pero para el razonador preparado, admitir tales intromisiones en su propio temperamento, cuidadosamente ajustado, era introducir un factor que distraería y descompensaría todos los delicados resultados mentales. Una basura en un instrumento sensitivo o una grieta en un lente finísimo, no habría sido más perjudicial que una emoción intensa en una naturaleza como la suya. Y, sin embargo, para él no hubo más que una mujer, y esa mujer fue la difunta Irene Adler, de dudosa y turbia memoria.
Había visto poco a Holmes últimamente. Mi matrimonio nos había alejado. Mi propia felicidad y los intereses domésticos que surgén alrededor del hombre que se encuentra por primera vez convertido en amo y señor de su casa, eran suficientes para absorber toda mi atención; mientras que Holmes, que odiaba cualquier forma de sociedad con toda su alma de bohemio, permaneció en nuestras habitaciones de Baker Street, sumergido entre sus viejos libros y alternando, de semana en semana, entre la cocaína con la ambición, la somnolencia de la droga con la feroz energía de su propia naturaleza inquieta. Continuaba, como siempre, profundamente interesado en el estudio del crimen y ocupando sus inmensas facultades y sus extraordinarios poderes de observación en seguir las pistas y aclarar los misterios que habían sido abandonados por la policía oficial, como casos desesperados. De vez en cuando escuchaba algún vago relato de sus hazañas: su intervención en el caso del asesinato Trepoff, en Odessa; su solución en la singular tragedia de los hermanos Atkinson, en Trincomalee, y, finalmente, en la misión que había realizado, con tanto éxito, para la familia reinante de Holanda. Sin embargo, más allá de estas muestras de actividad, que me concretaba a compartir con todos los lectores de la prensa diaria, sabía muy poco de mi antiguo amigo y compañero.
Una noche -fue el 20 de marzo de 1888- volvía de visitar a un paciente (había vuelto al ejercicio de mi profesión como médico civil), cuando mi recorrido de regreso a casa me obligó a pasar por Baker Street. Al pasar por aquella puerta tan familiar para mí, que siempre estará asociada en mi mente a la época de mi noviazgo y a los oscuros incidentes del Estudio en escarlata, me sentí invadido por un intenso deseo de ver a Holmes y de saber cómo estaba empleando, ahora, sus extraordinarias facultades. Sus habitaciones estaban brillantemente iluminadas. Al levantar la mirada hacia ellas, noté su figura alta y esbelta pasar dos veces, convertida en negra silueta, cerca de la cortina. Estaba recorriendo la habitación rápida, ansiosamente, con la cabeza sumida en el pecho y las manos unidas a la espalda. Para mí, que conocía a fondo cada uno de sus hábitos y de sus estados de ánimo, su actitud y su comportamiento eran reveladores. Estaba trabajando de nuevo. Se había sacudido de sus ensueños toxicómanos y estaba sobre la pista candente de algún nuevo caso. Toqué la campanilla y fui conducido a la sala que por tanto tiempo compartí con Sherlock.
No fue muy efusivo. Rara vez lo era; pero creo que se alegró de verme. Casi sin decir palabra, aunque con los ojos brillándole bondadosamente, me indicó un sillón, me arrojó su cajetilla de cigarrillos y señaló hacia una botella de whisky y un sifón que había encima de una cómoda. Entonces se puso de pie frente al fuego y me miró con el detenimiento tan peculiar de él.  
</textarea>
<!-- <input type="button" value="colors on/off" onclick="bColors=!bColors;"> -->
<!--<input  type="button" value="cw" onclick="bCW=!bCW;">-->
<!-- <input type="button" value="rc" onclick="if(bColors==0){ bColors=1; } bRc=!bRc; clearTimeout(killIntervalRc);"> -->
<select onchange="cambiarColores(this.value);" id="colors-select" style="/*width: 65px;*/">
  <option value="1">Dual color</option>
  <option value="2">Green color</option>
  <option value="3">Blue color</option>
  <option value="4">Gray color</option>
  <!--
  <option value="5">Color Alphabet</option>
  <option value="6">Random colors</option>-->
</select>
<select onchange="/*cambiarBreak(this.value);*/" id="break-select" style="/*width: 65px;*/">
  <option value="5" selected>break on 5</option>
  <option value="6">break on 6</option>
  <!--
  <option value="5">Color Alphabet</option>
  <option value="6">Random colors</option>-->
</select>
<select onchange="cambiarTransformation(this.value);" id="transform-select" style="width: 90px; display:none;">
  <option value="1">noTransform</option>
  <option value="2">up-down</option>  
  <option value="3">right to left</option>  
  <!--<option value="4">All previous</option> -->
  <option value="4">Skew</option> 
  <option value="5">Random Skew</option>  
</select>
<? $exp=1; if(isset($_GET["exp"])){ $exp=intval($_GET["exp"]); } ?>
<select id="experiment-select" onchange="myExperiment=n('experiment-select');" style="display:none;">   
    <option value="1" <?=$exp==1?"selected":""?>>noExperiment</option>
    <option value="2" <?=$exp==2?"selected":""?>>longWordsPause</option>
    <option value="3" <?=$exp==3?"selected":""?>>temporaryHideLetters</option>
    <option value="4" <?=$exp==4?"selected":""?>>PeripheralVisionSquare</option>
    <option value="5" <?=$exp==5?"selected":""?>>PeripheralVisionCross</option>
    <option value="6" <?=$exp==6?"selected":""?>>PeripheralVisionLeftRight</option>
    <option value="7" <?=$exp==7?"selected":""?>>PeripheralVisionUpDown</option>
  </select>
<input  type="button" value="?" onclick="alert('90reader\nA new type of free Experimental Speed Reading App\nSource code: https://github.com/vernetit/90reader\nLicence: GNU GPL  3\ncontact: robertchalean@gmail.com');"><div class="fb-share-button" data-href="http://competicionmental.appspot.com/90reader" data-layout="button_count" style="float: right; margin-right: 10px;"></div>
 <span id="stats" style="font-size: 12px;"></span>
</div>


<script type="text/javascript">

bHide=0;

function hide(){
  bHide=!bHide;

  if(bHide){
    $("#hide-btn").val("show");
    $("#control").hide();

  }else{

    $("#hide-btn").val("hide");
    $("#control").show();
  }
}

velocity=300;
txtLength=0;

myExperiment=<?=$exp?>;

function random_color(format)
{
    var rint = Math.round(0xffffff * Math.random());
    switch(format)
    {
        case 'hex':
            return ('#0' + rint.toString(16)).replace(/^#0([0-9a-f]{6})$/i, '#$1');
            break;

        case 'rgb':
            return 'rgb(' + (rint >> 16) + ',' + (rint >> 8 & 255) + ',' + (rint & 255) + ')';
            break;

        default:
            return rint;
            break;
    }
}

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

bRc=0;

function n(x){ return parseInt($("#"+x).val()); }

var bPlay=0;
var wordsByFlash=6;
var readingMode=6;
var circleFase=0;
var bCW=0;
bColors=0;
fontSize=30;

function play(){

  bPlay=!bPlay;

  if(bPlay){
    $("#play-btn").val("pause");

    init();

  }else{
    clearTimeout(killInterval);
    clearTimeout(killIntervalRc);
    $("#play-btn").val("start");
  }
}

ww=$(window).width();
wh=$(window).height();

var cadena;
var cantidad;
var posicion=0;
var lugar="left-screen";

bLugar=1;
iniciar = 1;
tiempo = 0;

lugar = "";
mostrar="";

var killIntervalRc;

function calcularTiempo(){
  if(iniciar==0){
    tiempo = ( cantidad - posicion ) * ( 60000/n("velocityFlash") );

    poner = `${posicion+1}/${cantidad} - ${getDuration(tiempo)}`;
    $("#stats").html(poner);

  }
}

function init(x){

  if(iniciar==1){
    var limpia = "";
    resultados = "";
    cantidadPalabras = 0;

    str = $("#input1").val();

    limpia = str.split("\n").join(" ");
    limpia = limpia.split("\t").join(" ");
    limpia = limpia.split("\r").join(" ");
    limpia = limpia.split(",").join(" ");
    limpia = limpia.split(".").join(" ");
    limpia = limpia.split(")").join(" ");
    limpia = limpia.split("(").join(" ");
    limpia = limpia.split(";").join(" ");
    limpia = limpia.split("-").join(" ");

    limpia = limpia.split("   ").join(" ");
    limpia = limpia.split("  ").join(" ");

    str = limpia;

    cadena=str.split(" ");
    cantidad=cadena.length;
    posicion = 0;

    /*
    if(bCW){
      for(i=0;i<cadena.length;i++){
        if(cadena[i].length>6){
          cadena[i]=cadena[i].substr(0, 6);
          console.log(cadena[i]);
        }
      }
    }*/

    //console.log(arrayRandomWord);
    bLugar=1;

    iniciar=0;

    calcularTiempo();

  }


  clearTimeout(killIntervalRc);

  if(myExperiment==4 || myExperiment==5){
    bColors=0;
    wordsByFlash=4;
  } 
  if(myExperiment==6 || myExperiment==7 ){
    bColors=0;
    wordsByFlash=2;
  } 
  
  if(wordsByFlash==1){
    mostrar = cadena[posicion];

  }

  if(wordsByFlash==2){
    mostrar = cadena[posicion] + " " + cadena[posicion+1] ;

  }

  if(wordsByFlash==3){
    mostrar = cadena[posicion] + " " + cadena[posicion+1] + " " + cadena[posicion+2] ;

  }

  if(wordsByFlash==4){
    mostrar = cadena[posicion] + " " + cadena[posicion+1] + " " + cadena[posicion+2] + " " + cadena[posicion+3] ;

  }
  
  if(wordsByFlash==5){
    mostrar = cadena[posicion] + " " + cadena[posicion+1] + " " + cadena[posicion+2] + " " + cadena[posicion+3] + " " + cadena[posicion+4];

  }

  if(wordsByFlash>=6){
    //mostrar = cadena[posicion] + " " + cadena[posicion+1] + " " + cadena[posicion+2] + " " + cadena[posicion+3] + " " + cadena[posicion+4] + " " + cadena[posicion+5];
    breakon=n("break-select");
    mostrar=`<center><table><tr>`;
    //breakon=6;
    if(breakon==5){
      for(i=0;i<breakon;i++){ 
      c="rgb(111, 160, 97)";
      if(cadena[posicion+i].length<=3)
        c="green";
        if(currentColor=="green" || currentColor=="blue" || currentColor=="gray") c=currentColor;
        console.log(currentColor);
        mostrar+=`<td><span style="color: ${c}">${cadena[posicion+i]}</span>&nbsp;</td>` 
      }
      mostrar+=`</tr><tr><td></td><td></td><td></td><td></td><td align="center">`;
      for(;i<wordsByFlash;i++){ 
        c="rgb(111, 160, 97)";
        if(cadena[posicion+i].length<=3)
          c="green";
        if(currentColor=="green" || currentColor=="blue" || currentColor=="gray") c=currentColor;

        mostrar+=`<span style="color: ${c}">${cadena[posicion+i]}<br></span>`; 
      }
      mostrar+=`</td><tr></table></center>`;
    }else{ //breakon

      firstWordOfLastTd=wordsByFlash-3;/*
      if(wordsByFlash==7) firstWordOfLastTd++;
      if(wordsByFlash==7) firstWordOfLastTd++;
      if(currentColor=="green" || currentColor=="blue" || currentColor=="gray") c=currentColor;
      */
      colorHighlight="rgb(111, 160, 97)";
      if(currentColor=="blue") colorHighlight="rgb(98, 214, 234)";
      if(currentColor=="rgb(68, 73, 73)") colorHighlight="rgb(205, 215, 216)";


      for(i=0;i<wordsByFlash-2;i++){

        c=colorHighlight;
        /*
        if(cadena[posicion+i].length<=3)
          c="green";*/

        //if(currentColor=="green" || currentColor=="blue" || currentColor=="rgb(68, 73, 73)") c=colorHighlight;

        if(i!=firstWordOfLastTd) mostrar+=`<td></td>`; else mostrar+=`<td align="left"><span style="color: ${c}">${cadena[posicion+i]}</span></td>`;

      }
      mostrar+=`</tr><tr>`;
      for(i=0;i<wordsByFlash-2;i++){ /*
        c="rgb(111, 160, 97)";
        if(cadena[posicion+i].length<=3)*/
          c="green";
        if(currentColor=="green" || currentColor=="blue" || currentColor=="rgb(68, 73, 73)") c=currentColor;

        if(i==firstWordOfLastTd){
          i++; 
          c=colorHighlight;

        } 

        mostrar+=`<td align="left"><span style="color: ${c}">${cadena[posicion+i]}<br></span></td>`; 
      }
      mostrar+=`</tr><tr>`;
      for(i=2;i<wordsByFlash;i++){ 
        
        /*if(cadena[posicion+i].length<=3)
          c="green";*/
        c=colorHighlight;

        if(i<=wordsByFlash-2)
          mostrar+=`<td></td>`;
        else{

          mostrar+=`<td align="left"><span style="color: ${c}">${cadena[posicion+i]}</span></td>`;
        }
      }
      mostrar+=`</tr><tr>`;

    }
    
  }
  /*
  if(wordsByFlash==7){
    mostrar = cadena[posicion] + " " + cadena[posicion+1] + " " + cadena[posicion+2] + " " + cadena[posicion+3] + " " + cadena[posicion+4] + " " + cadena[posicion+5] + " " + cadena[posicion+6];

  }*/
  //console.log(cadena);

  bLugar=!bLugar;

  $("#left-screen").html("");
  $("#right-screen").html("");
  $("#up-screen").html("");
  $("#down-screen").html("");
  $("#center-screen").html("");

  $("#left-up-screen").html("");
  $("#right-up-screen").html("");
  $("#left-down-screen").html("");
  $("#right-down-screen").html("");

  if(readingMode==1){
  

    if(bLugar){

      lugar="right-screen";
      $("#left-screen").html("");

    }else{
      lugar="left-screen";
      $("#right-screen").html("");

    }

  }

  if(readingMode==2){

    

    if(bLugar){

      lugar="down-screen";
      $("#up-screen").html("");

    }else{
      lugar="up-screen";
      $("#down-screen").html("");

    }

  }

  if(readingMode==3){

    if(circleFase==0){
      lugar="left-screen";
    }

    if(circleFase==1){
      lugar="up-screen";
      
    } 

    if(circleFase==2){

      lugar="right-screen";
    }

    if(circleFase==3){
      lugar="down-screen";
    
    }
    

    circleFase++;
    if(circleFase==4)
      circleFase=0;

  }

  if(readingMode==4){


    if(circleFase==2){
      lugar="left-screen";
    }

    if(circleFase==1){
      lugar="up-screen";
      
    } 

    if(circleFase==0){

      lugar="right-screen";
    }

    if(circleFase==3){
      lugar="down-screen";
    
    }
    

    circleFase++;
    if(circleFase==4)
      circleFase=0;

  }

  if(readingMode==5){

    _circleFase=circleFase;

    for(;;){

      circleFase=_.random(0,3);

      if(circleFase!=_circleFase)
        break;
    }

    if(circleFase==2){
      lugar="left-screen";
    }

    if(circleFase==1){
      lugar="up-screen";
      
    } 

    if(circleFase==0){

      lugar="right-screen";
    }

    if(circleFase==3){
      lugar="down-screen";
    
    }
  

  }

  if(readingMode==6){
    $("#left-screen").html("");
    $("#right-screen").html("");
    $("#up-screen").html("");
    $("#down-screen").html("");
    $("#center-screen").html("");

    lugar="center-screen";

  }

  if(readingMode==7){


    if(circleFase==2){
      lugar="left-down-screen";
    }

    if(circleFase==1){
      lugar="right-up-screen";
      
    } 

    if(circleFase==0){

      lugar="left-up-screen";
    }

    if(circleFase==3){
      lugar="right-down-screen";
    
    }
    

    circleFase++;
    if(circleFase==4)
      circleFase=0;

  }

  if(readingMode==8){


    if(circleFase==2){
      lugar="right-up-screen";
    }

    if(circleFase==1){
      lugar="right-down-screen";
      
    } 

    if(circleFase==0){

      lugar="left-up-screen";
    }

    if(circleFase==3){
      lugar="left-down-screen";
    
    }
    

    circleFase++;
    if(circleFase==4)
      circleFase=0;

  }

  if(readingMode==9){

    _circleFase=circleFase;

    for(;;){

      circleFase=_.random(0,3);

      if(circleFase!=_circleFase)
        break;
    }


    if(circleFase==2){
      lugar="right-up-screen";
    }

    if(circleFase==1){
      lugar="right-down-screen";
      
    } 

    if(circleFase==0){

      lugar="left-up-screen";
    }

    if(circleFase==3){
      lugar="left-down-screen";
    
    }
    
    /*
    circleFase++;
    if(circleFase==4)
      circleFase=0;*/

  }

  //console.log(readingMode);

  fontSize=30;

  if(wordsByFlash>4)
    fontSize=24;

  transform="";

  if(myTransformation==2){
    
    transform="transform:rotateX(180deg);";
    
  }
  if(myTransformation==3){
    transform="transform:rotateY(180deg);";
          
  }
  /*
  if(myTransformation==4){
    transform="transform:rotateX(180deg) ";
    transform+="transform:rotateY(180deg);";
  


  }*/
  if(myTransformation==4){

    if(bLugar){

      //lugar="right-screen";
      //$("#left-screen").html("");
      transform="transform:skewY(30deg);"

    }else{
      //lugar="left-screen";
      //$("#right-screen").html("");
      transform="transform:skewY(-30deg);"

    }
    
    
          
  }

  if(myTransformation==5){
    
    transform="transform:skewY("+_.random(-40,40)+"deg);"
          
  }

  //genero la impresion
  txtLength=0;
  
  if(bColors){

    if(bRc){

      

      killIntervalRc=setInterval(function(){

        poneme="";
        for(i=0;i<mostrar.length;i++){

          if(mostrar[i]==" "){
            poneme += `<span style="color: black;">&nbsp;</span>`;

          }else{
            poneme += `<span style="color: ${random_color('rgb')}; text-shadow: 1px 1px ${random_color('rgb')}; font-size: ${fontSize}px;">${mostrar[i]}</span>`;

          }

          
        }

        $("#"+lugar).html(`<div style="${transform}">`+poneme+"</div>");


      },10);

    }else{
      poneme="";
      for(i=0;i<mostrar.length;i++){

        if(mostrar[i]==" "){
          poneme += `<span style="color: black;">&nbsp;</span>`;

        }else{
          poneme += `<span style="color: ${abc1[mostrar[i]]}; text-shadow: 1px 1px gray;  font-size: ${fontSize}px;">${mostrar[i]}</span>`;

        }

        
      }

      $("#"+lugar).html(`<div style="${transform}">`+poneme+"</div>");


    }

  }else{
    if(myExperiment==4 || myExperiment==5 || myExperiment==6 || myExperiment==7){


      if(myExperiment==4){
        $("#left-up-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion] +`</span></div>`);
        $("#right-up-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+1] +`</span></div>`);
        $("#left-down-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+2] +`</span></div>`);
        $("#right-down-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+3] +`</span></div>`);

      }
      if(myExperiment==5){
        $("#left-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion] +`</span></div>`);
        $("#up-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+1] +`</span></div>`);
        $("#right-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+2] +`</span></div>`);
        $("#down-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+3] +`</span></div>`);

      }
      if(myExperiment==6){
        $("#left-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion] +`</span></div>`);
        $("#right-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+1] +`</span></div>`);
        

      }
      if(myExperiment==7){
        $("#up-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion] +`</span></div>`);
        $("#down-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+1] +`</span></div>`);
      }

      


    }else{//myExperiment

      if(myExperiment==3){
        _p="";
        for(kk=0;kk<mostrar.length;kk++){

          if(kk==0 || mostrar[kk+1]==" " || kk==mostrar.length-1){
            _p+=`<span class="t-m">${mostrar[kk]}</span>`;
          }
          else
          {
            _p+=`<span class="t-e">${mostrar[kk]}</span>`;
          }

        }
        mostrar = _p;
      }

      $("#"+lugar).html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+mostrar+`</span></div>`);

      if(myExperiment==3){
        $(".t-e").css("color","black");
        setTimeout(function(){ $(".t-e").css("color",currentColor); }, 50 );

      }
  
    }//else myExperiment
    txtLength=mostrar.length;
    

    /*

    var Hello = React.createClass({
      displayName: 'Hello',
      render: function() {
        return React.createElement("div", null, "", this.props.name);
      }
    });

    ReactDOM.render(
      React.createElement(Hello, {name: mostrar}),
      document.getElementById(lugar)
    );
    */

  }
  

  posicion+=wordsByFlash;

  if(posicion>cantidad){
    stopFlash();
    return;

  } 

  calcularTiempo();

  velocity=n("velocityFlash");
  if(myExperiment==2){
    if(txtLength>30){
      velocity=250;
      console.log("retardo")
    }
  }


  killInterval=setTimeout(function(){ init() },  ( 60000/ velocity ) * wordsByFlash   );

  calcularTiempo();

  //console.log( ( 60000/n("velocityFlash") ) * wordsByFlash );

  
  
}
  

function stopFlash(){
  

  if(bPlay){
    bPlay=0;
    $("#play-btn").val("start");
    
    
  }
  $("#left-screen").html("");
  $("#right-screen").html("");
  $("#up-screen").html("");
  $("#down-screen").html("");
  $("#center-screen").html("¡90reader!");

  $("#left-up-screen").html("");
  $("#right-up-screen").html("");
  $("#left-down-screen").html("");
  $("#right-down-screen").html("");

  iniciar=1;
  clearTimeout(killInterval);
  clearTimeout(killIntervalRc);
  $("#stats").html("");

}


var getDuration = function(millis){
  var dur = {};
  var units = [
      {label:"millis",    mod:1000},
      {label:"seconds",   mod:60},
      {label:"minutes",   mod:60},
      {label:"hours",     mod:24},
      {label:"days",      mod:31}
  ];
  // calculate the individual unit values...
  units.forEach(function(u){
      millis = (millis - (dur[u.label] = (millis % u.mod))) / u.mod;
  });
  // convert object to a string representation...
  var nonZero = function(u){ return dur[u.label]; };
  dur.toString = function(){
      return units
          .reverse()
          .filter(nonZero)
          .map(function(u){
              return dur[u.label] + " " + (dur[u.label]==1?u.label.slice(0,-1):u.label);
          })
          .join(', ');
  };

  /*
  console.log(dur);
  x = dur.split(",");
  poner = "";
  for(i=0;i<x.length;i++){
    if(x[i].indexOf("millis")!=1){
      continue;
    }
    poner += x[i];

  }*/

  //return dur;
  return dur.hours+":"+dur.minutes+":"+dur.seconds;//+":"+dur.millis;
};



var abc1  =  {

  'a' : 'rgb(0,0,180)','A' : 'rgb(0,0,180)','á' : 'rgb(0,0,180)','Á' : 'rgb(0,0,180)','b' : 'rgb(175,13,102)','B' : 'rgb(175,13,102)','c' : 'rgb(146,248,70)','C' : 'rgb(146,248,70)','d' : 'rgb(255,200,47)','D' : 'rgb(255,200,47)','e' : 'rgb(255,118,0)','E' : 'rgb(255,118,0)','é' : 'rgb(255,118,0)','É' : 'rgb(255,118,0)','f' : 'rgb(255,152,213)','F' : 'rgb(255,152,213)','g' : 'rgb(235,235,222)','G' : 'rgb(235,235,222)','h' : 'rgb(100,100,100)','H' : 'rgb(100,100,100)','i' : 'rgb(255,255,0)','I' : 'rgb(255,255,0)','í' : 'rgb(255,255,0)','Í' : 'rgb(255,255,0)','j' : 'rgb(255,255,150)','J' : 'rgb(255,255,150)','k' : 'rgb(55,19,112) ','K' : 'rgb(55,19,112) ','l' : 'rgb(202,62,94)','L' : 'rgb(202,62,94)','m' : 'rgb(205,145,63)','M' : 'rgb(205,145,63)','n' : 'rgb(12,75,100)','N' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','o' : 'rgb(255,0,0)','O' : 'rgb(255,0,0)','ó' : 'rgb(255,0,0)','Ó' : 'rgb(255,0,0)','p' : 'rgb(175,155,50)','P' : 'rgb(175,155,50)','q' : 'rgb(185,185,185)','Q' : 'rgb(185,185,185)','r' : 'rgb(37,70,25)','R' : 'rgb(37,70,25)','s' : 'rgb(121,33,135)','S' : 'rgb(121,33,135)','t' : 'rgb(83,140,208)','T' : 'rgb(83,140,208)','u' : 'rgb(0,154,37)','U' : 'rgb(0,154,37)','ú' : 'rgb(0,154,37)','Ú' : 'rgb(0,154,37)','v' : 'rgb(178,220,205)','V' : 'rgb(178,220,205)','w' : 'rgb(169,34,0)','W' : 'rgb(169,34,0)','x' : 'rgb(0,0,74)','X' : 'rgb(0,0,74)','y' : 'rgb(175,200,74)','Y' : 'rgb(175,200,74)','z' : 'rgb(63,25,12)','Z' : 'rgb(63,25,12)','0' : 'rgb(0,0,180)','0' : 'rgb(0,0,180)','1' : 'rgb(175,13,102)','1' : 'rgb(175,13,102)','2' : 'rgb(146,248,70)','2' : 'rgb(146,248,70)','3' : 'rgb(255,200,47)','3' : 'rgb(255,200,47)','4' : 'rgb(255,118,0)','4' : 'rgb(255,118,0)','5' : 'rgb(255,152,213)','5' : 'rgb(255,152,213)','6' : 'rgb(235,235,222)','6' : 'rgb(235,235,222)','7' : 'rgb(100,100,100)','7' : 'rgb(100,100,100)','8' : 'rgb(255,255,0)','8' : 'rgb(255,255,0)','9' : 'rgb(255,255,150)','9' : 'rgb(255,255,150)'   
    
};

function quitaAcentos(str){ 
  for (var i=0;i<str.length;i++){ 
  //Sustituye "á é í ó ú" 
    if (str.charAt(i)=="á") str = str.replace(/á/,"a"); 
    if (str.charAt(i)=="é") str = str.replace(/é/,"e"); 
    if (str.charAt(i)=="í") str = str.replace(/í/,"i"); 
    if (str.charAt(i)=="ó") str = str.replace(/ó/,"o"); 
    if (str.charAt(i)=="ú") str = str.replace(/ú/,"u"); 
  } 
  return str; 
} 

//$("#down-screen")

myTransformation=1;

function cambiarTransformation(x){
  myTransformation=parseInt(x);
}



<? if(isset($_GET["en"])){ ?>  

textoEn = `To Sherlock Holmes she is always THE woman. I have seldom heard him mention her under any other name. In his eyes she eclipses and predominates the whole of her sex. It was not that he felt any emotion akin to love for Irene Adler. All emotions, and that one particularly, were abhorrent to his cold, precise but admirably balanced mind. He was, I take it, the most perfect reasoning and observing machine that the world has seen, but as a lover he would have placed himself in a false position. He never spoke of the softer passions, save with a gibe and a sneer. They were admirable things for the observer--excellent for drawing the veil from mens motives and actions. But for the trained reasoner to admit such intrusions into his own delicate and finely adjusted temperament was to introduce a distracting factor which might throw a doubt upon all his mental results. Grit in a sensitive instrument, or a crack in one of his own high-power lenses, would not be more disturbing than a strong emotion in a nature such as his. And yet there was but one woman to him, and that woman was the late Irene Adler, of dubious and questionable memory.
I had seen little of Holmes lately. My marriage had drifted us away from each other. My own complete happiness, and the home-centred interests which rise up around the man who first finds himself master of his own establishment, were sufficient to absorb all my attention, while Holmes, who loathed every form of society with his whole Bohemian soul, remained in our lodgings in Baker Street, buried among his old books, and alternating from week to week between cocaine and ambition, the drowsiness of the drug, and the fierce energy of his own keen nature. He was still, as ever, deeply attracted by the study of crime, and occupied his immense faculties and extraordinary powers of observation in following out those clues, and clearing up those mysteries which had been abandoned as hopeless by the official police. From time to time I heard some vague account of his doings: of his summons to Odessa in the case of the Trepoff murder, of his clearing up of the singular tragedy of the Atkinson brothers at Trincomalee, and finally of the mission which he had accomplished so delicately and successfully for the reigning family of Holland.
Beyond these signs of his activity, however, which I merely shared with all the readers of the daily press, I knew little of my former friend and companion.
One night--it was on the twentieth of March, 1888--I was returning from a journey to a patient (for I had now returned to civil practice), when my way led me through Baker Street. As I passed the
well-remembered door, which must always be associated in my mind with my wooing, and with the dark incidents of the Study in Scarlet, I was seized with a keen desire to see Holmes again, and to
know how he was employing his extraordinary powers.
His rooms were brilliantly lit, and, even as I looked up, I saw his tall, spare figure pass twice in a dark silhouette against the blind. He was pacing the room swiftly, eagerly, with his head sunk
upon his chest and his hands clasped behind him. To me, who knew his every mood and habit, his attitude and manner told their own story. He was at work again. He had risen out of his drug-created
dreams and was hot upon the scent of some new problem. I rang the bell and was shown up to the chamber which had formerly been in part my own.
His manner was not effusive. It seldom was; but he was glad, I think, to see me. With hardly a word spoken, but with a kindly eye, he waved me to an armchair, threw across his case of cigars, and
indicated a spirit case and a gasogene in the corner. Then he stood before the fire and looked me over in his singular introspective fashion.
`;

$("#input1").val(textoEn);


<? } ?>

/*
const e = React.createElement;

React.render(
  e('div', null, 'Hello World'),
  document.getElementById('root')
);

*/

/*
var Hello = React.createClass({
  displayName: 'Hello',
  render: function() {
    return React.createElement("div", null, "Hello ", this.props.name);
  }
});

ReactDOM.render(
  React.createElement(Hello, {name: "World"}),
  document.getElementById('up-screen')
);
*/

currentColor="Dual";

function cambiarColores(x){
  if(x==1){ bColors=0; currentColor="Dual";  }
  if(x==2){ bColors=0; currentColor="green"; }
  if(x==3){ bColors=0; currentColor="blue"; }
  // if(x==4){ bColors=0; currentColor="gray"; }
  if(x==4){ bColors=0; currentColor="rgb(68, 73, 73)"; }

  if(x==5){ bColors=1; bRc=0; }
  if(x==6){ if(bColors==0){ bColors=1; } bRc=1; clearTimeout(killIntervalRc); }

  $("body").css("color",currentColor);
}

<? if (isset($_GET["skew"])){ ?> window.onload = function () { $("#velocityFlash").val("200"); $("#transform-select").val("4"); cambiarTransformation(4); play();  } <? } ?>

<? $vel=300; 
  if(isset($_GET["vel"])){ $vel=intval($_GET["vel"]); ?>


  $("#velocityFlash").val("<?=$vel?>");

  calcularTiempo();



<? } ?>

String.prototype.replaceAt=function(index, character) {
    return this.substr(0, index) + character + this.substr(index+character.length);
}

_div=$("#center-screen").html()+"";

setInterval(function(){
  if(bPlay) return;
  
  poner="";
  for(let i=0;i<_div.length;i++){
    let color="black";
    

    if(_.random(0,1)){
      color="";
      
    }
    
    
    //if(i==1) color=getRandomColor();
    if(i==_div.length-2) color=getRandomColor();
    if(i==3) color=getRandomColor();
    
    //if(i==3) color="";
    if(i==_div.length) color="";

    if(i==1) color="rgb(117,170,219) !important";
    if(i==2) color="rgb(255,255,255) !important";
    if(i==3) color="rgb(117,170,219) !important";
    let bg="black;"
    if(i==2 && _.random(0,1)) bg="rgb(252,191,73)"

  

    poner+=`<span style="color: ${color}; background-color: ${bg}">${_div[i]}</span>`;
  }
  $("#center-screen").html(poner+"<br><center>[lector]</center>");

},450);

//play();

</script>

</body>
</html>