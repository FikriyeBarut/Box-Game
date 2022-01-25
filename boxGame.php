<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
body {
 background-color:#D1C4E9;
}

#baslik{
    font-size:30px;
    font-family:"Times New Roman";
    color:#8E24AA;
}

#nesne,#btn2{
		width: 100px;
		height: 100px;
		position:absolute;
		background:#7E57C2;
	}

</style>
</script>
</head>

<body>
<div align="center">

<h1 id="baslik">BUTON YAKALAMA OYUNU</h1>
<p id="mesaj"></p>
<p id="kutu1"></p>

<button id="basla" onclick="basla();">Timer/Başlat</button>
<br><br><br><br>
<button id="nesne">100 istiyorum</button> <br><br><br><br><br><br><br>
<button id="btn2">50 istiyorum</button>


</div>

<script>
		
	    var sayac=120;
	    var bayrak=0;
       
       function basla() {
           $('#basla').attr('disabled',true);
           degisken=setInterval(say, 1000);
       }
       
       
       function say() {
         bayrak=1;
        document.getElementById("kutu1").innerHTML=sayac;
        sayac--;
           if(sayac==0){
           document.getElementById("mesaj").innerHTML='Süre Bitti.';
            clearInterval(degisken);
            document.getElementById("kutu1").innerHTML=0;
         }

       }
		
		var nesne=document.getElementById("nesne");
 
		nesne.onmouseover=function(e)
		{
			if(bayrak==1){
			    var xpos=parseInt(Math.random()*1000);
			    var ypos=parseInt(Math.random()*800);
			
			    nesne.style.left=xpos +"px";
			    nesne.style.top =ypos+"px";
			}
			if(sayac==0){
			    nesne.style.left="100px";
			    nesne.style.top ="100px";
			}
			
		}
	</script>
</body>
</html>