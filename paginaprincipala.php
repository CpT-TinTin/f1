<html>

<link rel="stylesheet" href="style.css">
<div class="topnav">

  <a href="paginaprincipala.php">Home</a>
  <a href="driverstandings.php">Driver Standings</a>
  <a href="constructorstandings.php">Constructor Standings</a>
  <a href="joc.php">Joculet</a>
  <a href="adaugarepunctaje.php">Adaugare Punctaje</a>
</div>
<div class="row">
  <div class="column left" style="background-color:#aaa;">
        <p>Formula 1 (abreviată F1) este o întrecere de automobilism care se organizează anual sub forma a două campionate mondiale, care au loc în paralel, ambele fiind patronate de Federația Internațională a Automobilului (FIA).</p>

<p>Numele de Formula provine de la faptul că toate echipele înscrise în campionat trebuie să își construiască mașinile (cunoscute și sub numele de monoposturi) după un anumit regulament, o formulă pe care o decide FIA. Cifra 1 provine de la faptul ca întrecerea este catalogată drept cea mai prestigioasă formulă organizată de FIA.
</p>
<p>Cele două campionate sunt Campionatul Mondial al Piloților (engl: World Drivers' Championship) și Campionatul Mondial al Constructorilor (engl. World Constructors' Championship). În actuala ediție a campionatului participă 10 echipe și 20 piloți.
</p>
<p>Formula 1 este un sport cu mare trecere la public. Toate etapele campionatului sunt televizate în mai mult de 200 de țări, numărul celor care privesc anual întrecerea fiind depășit doar de numărul celor care urmăresc meciurile din Campionatul Mondial de Fotbal și Jocurile Olimpice, competiții care se organizează o dată la patru ani.
</p>
<p>In timp ce Europa este baza tradițională a sportului, campionatul funcționează la nivel global, 11 dintre cele 21 de curse din sezonul 2019 având loc în afara Europei. Cu costul anual al conducerii unei echipe intermediare - proiectarea, construirea și întreținerea mașinilor, plata, transportul - fiind de 120 de milioane de dolari USD, luptele sale financiare și politice sunt raportate pe scară largă. Profilul și popularitatea ridicată au creat un mediu major de merchandising, care a dus la investiții mari din partea sponsorilor și bugetelor (în sute de milioane pentru constructori). 
</p>
<p>În Campionatul Mondial de Formula 1 pot participa doar piloții care au primit din partea FIA o superlicență. Pentru a primi superlicența, un pilot trebuie să fi participat în campionatele inferioare Formulei 1 cum ar fi Formula Ford, Formula Renault, Formula 3, Formula 2, GP2 și să fi parcurs un anumit număr de kilometri într-un monopost de Formula 1 în mai multe zile consecutive.
</p>
<p>Campionatul se desfășoară pe baza unui regulament tehnic și a unuia sportiv, ambele întocmite de FIA și care se pot modifica din timp în timp. Chiar dacă aceste regulamente impun limite, există mult spațiu de mișcare din partea echipelor, astfel că anual sunt investite sute de milioane de dolari în cercetare și dezvoltare. Bugetele echipelor nu sunt făcute publice, dar se zvonește că echipele de top au bugete ce sunt în jurul a, sau trec de, 500 de milioane de dolari anual.
</p>

<p>Spre exemplu, motoarele sunt limitate la 1.600 cmc cu o configurație cilindrică V6 (6 cilindri așezați în formă de V la 90 de grade), de asemenea, ele nu pot trece de pragul de 15.000 RPM (rotații pe minut).
</p>
</div>
  <div class="column right" style="background-color:#bbb;">
    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="p1.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="p2.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="p3.jpg" style="width:100%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="p4.jpg" style="width:100%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="p5.jpg" style="width:100%">
  
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000);
}
</script>
  </div>
</div>
</div>
<h1 align="center"> O scurta intruducere despre cum sa incepi sa fi un pilot de formula 1 
<div style="text-align:center"> 
  <button onclick="playPause()">Play/Pause</button> 
  <button onclick="makeBig()">Mare</button>
  <button onclick="makeSmall()">Mic</button>
  <button onclick="makeNormal()">Normal</button>
  <br><br>
  <video id="video1" width="550" height="600">
    <source src="How Do F1 Drivers Explain F1.mp4" type="video/mp4">
  </video>
</div> 
<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 800; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 550; 
} 
</script> 

<br>
<br>

<h2 align="center">Lucuri interesante despre Formula 1 </h2>
<div class="grid-container" >
  <div>Masinile de Formula 1 de la 0 la 160 si inapoi la 0 in 4 secunde </div>
  <div>O masina de Formula 1 costa in medie 8 milioane de dolari</div>
  <div>Discurile de frana pot ajunge si la 1000 de grade celsius </div>  
  <div>O masina are in jur de 80000 de piese asamblate</div>
  <div>Un pilot de Formula 1 pierde in jur de 4kg intr-o cursa</div>
  <div>Masinile de Formula 1 poate sa mearga cu susul in jos</div>  
</div>
</html>