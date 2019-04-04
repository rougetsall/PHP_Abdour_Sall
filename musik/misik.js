var audio = document.getElementById('audio');
      console.log("rouget");

      var m;
      var s;
       var ml; 
      console.log(audio.currentTime);
audio.addEventListener("play", function() { 

		document.body.style.backgroundColor="blue";
    document.getElementById("text").innerHTML="DJADJA";
		setInterval(function(){ 

      console.log(audio.currentTime);
     var t=audio.currentTime;
     m =  Math.floor(t /60) ;
      s = Math.floor(t % 60);
      
    
        var chaine = m+":"+s;
         

           if (m==0 && s>=6 && s<=7) {
             document.getElementById("text").innerHTML="Aya Nakamura oh yeah";
          }
          else if (m==0 && s>=19 && s<=11) {
             document.getElementById("text").innerHTML="Hello papi mais qué pasa?";
          }
          else if (m==0 && s>=12 && s<=13) {
            document.getElementById("text").innerHTML="J'entends des bails atroces sur moi ";
          }
          else if (m==0 && s>=15 && s<=16) {
             document.getElementById("text").innerHTML="À c'qui paraît, j'te cours après?";
          }
 
          else if (m==0 && s>=16 && s<=18) {
            document.getElementById("text").innerHTML="Mais ça va pas, mais t'es taré ouais";
          }
          //[00:20.62] 

        else if (m==0 && s>=19 && s<=21) {
             document.getElementById("text").innerHTML="Mais comment ça le monde est tipeu?";
          }
          else if (m==0 && s>=22 && s<=24) {
            document.getElementById("text").innerHTML="Tu croyais quoi, qu'on se verrait plus jamais? ";
          }
          else if (m==0 && s>=24 && s<=26) {
             document.getElementById("text").innerHTML="J'pourrais t'afficher mais c'est pas mon délire";
          }
 
          else if (m==0 && s>=26 && s<=29) {
            document.getElementById("text").innerHTML="D'après les rumeurs, tu m'as eu dans ton lit";
          }
          else if (m==0 && s>=29 && s<=30) {
            document.getElementById("text").innerHTML="Oh Djadja ";
          }//
          
          else if (m==0 && s>=32 && s<=34) {
             document.getElementById("text").innerHTML="Y a pas moyen Djadja";
          }
          else if (m==0 && s>=34 && s<=36) {
            document.getElementById("text").innerHTML="J'suis pas ta catin Djadja, genre en Catchana baby tu dead ça ";
          }
          else if (m==0 && s>=39 && s<=41) {
             document.getElementById("text").innerHTML="Oh Djadja ";
          }
 
          else if (m==0 && s>=42 && s<=43) {
            document.getElementById("text").innerHTML="Y a pas moyen Djadja ";
          }
          else if (m==0 && s>=44 && s<=46) {
            document.getElementById("text").innerHTML="J'suis pas ta catin Djadja, genre en Catchana baby tu dead ça";
          }//
       
           else if (m==0 && s>=49 && s<=46) {
             document.getElementById("text").innerHTML="Tu penses à moi, je pense à faire de l'argent ";
          }
          else if (m==0 && s>=52 && s<=54) {
            document.getElementById("text").innerHTML="J'suis pas ta daronne, j'te ferai pas la morale ";
          }
          else if (m==0 && s>=54 && s<=56) {
             document.getElementById("text").innerHTML="Tu parles sur moi, y a R, crache encore, y a R ";
          }
 
          else if (m==0 && s>=58 && s<=59) {
            document.getElementById("text").innerHTML="Tu voulais m'avoir, tu savais pas comment faire";
          }
          else if (m==1 && s>=1 && s<=3) {
            document.getElementById("text").innerHTML="Tu jouais un rôle, tu finiras aux enfers ";
          }
          

           else if (m==1 && s>=4 && s<=5) {
             document.getElementById("text").innerHTML="T'façon Nakamura, je l'ai couchée";
          }
          else if (m==1 && s>=6 && s<=8) {
            document.getElementById("text").innerHTML="Le jour où on se croise, faut pas tchouffer ";
          }
          else if (m==1 && s>=9 && s<=11) {
             document.getElementById("text").innerHTML="Tu jouais le grand frère pour me salir";
          }
 
          else if (m==1 && s>=11 && s<=13) {
            document.getElementById("text").innerHTML="Tu cherches des problèmes sans faire exprès ";
          }
          else if (m==1 && s>=14 && s<=16) {
            document.getElementById("text").innerHTML="Putain mais tu déconnes ";
          }//
                  else if (m==0 && s>=42 && s<=43) {
            document.getElementById("text").innerHTML="Y a pas moyen Djadja ";
          }
          else if (m==0 && s>=44 && s<=46) {
            document.getElementById("text").innerHTML="J'suis pas ta catin Djadja, genre en Catchana baby tu dead ça";
          }//
     
           else if (m==1 && s>=16 && s<=18) {
             document.getElementById("text").innerHTML="C'est pas comme ça qu'on fait les choses";
          }
          else if (m==1 && s>=18 && s<=20) {
            document.getElementById("text").innerHTML="Putain mais tu déconnes ";
          }
          else if (m==1 && s>=21 && s<=23) {
             document.getElementById("text").innerHTML="C'est pas comme ça qu'on fait les choses";
          }
 
          else if (m==1 && s>=24 && s<=26) {
            document.getElementById("text").innerHTML="Putain mais tu déconnes";
          }
          else if (m==1 && s>=26 && s<=28) {
            document.getElementById("text").innerHTML="C'est pas comme ça qu'on fait les choses";
          }
          

           else if (m==1 && s>=28 && s<=30) {
             document.getElementById("text").innerHTML="Oh Djadja ";
          }
          else if (m==1 && s>=30 && s<=32) {
            document.getElementById("text").innerHTML="Y a pas moyen Djadja  ";
          }
          else if (m==1 && s>=33 && s<=35) {
             document.getElementById("text").innerHTML="J'suis pas ta catin Djadja, genre en Catchana baby tu dead ça";
          }
 
          else if (m==1 && s>=38 && s<=40) {
            document.getElementById("text").innerHTML="Oh Djadja";
          }
          else if (m==1 && s>=40 && s<=42) {
            document.getElementById("text").innerHTML="Y a pas moyen Djadja  ";
          }
           else if (m==1 && s>=43 && s<=45) {
            document.getElementById("text").innerHTML="J'suis pas ta catin Djadja, genre en Catchana baby tu dead ça  ";
          }
          //
          
 
             else if (m==1 && s>=48 && s<=50) {
             document.getElementById("text").innerHTML="Oh Djadja ";
          }
          else if (m==1 && s>=50 && s<=52) {
            document.getElementById("text").innerHTML="Y a pas moyen Djadja  ";
          }
          else if (m==1 && s>=53 && s<=55) {
             document.getElementById("text").innerHTML="J'suis pas ta catin Djadja, genre en Catchana baby tu dead ça";
          }
 
          else if (m==1 && s>=57 && s<=58) {
            document.getElementById("text").innerHTML="Oh Djadja";
          }
          else if (m==2 && s>=0 && s<=2) {
            document.getElementById("text").innerHTML="Y a pas moyen Djadja  ";
          }
           else if (m==2 && s>=2 && s<=4) {
            document.getElementById("text").innerHTML="J'suis pas ta catin Djadja, genre en Catchana baby tu dead ça  ";
          }

        
          else if (m==2 && s>=7 && s<=9) {
             document.getElementById("text").innerHTML="Oh Djadja, j'suis pas ta catin Djadja, non ";
          }
          else if (m==2 && s>=12 && s<=15) {
            document.getElementById("text").innerHTML="Y a pas moyen Djadja, yeah en Catchana baby tu dead ça, yeah ";
          }
          else if (m==2 && s>=18 && s<=20) {
             document.getElementById("text").innerHTML="Oh Djadja, j'suis pas ta catin Djadja, non ";
          }
 
          else if (m==2 && s>=23 && s<=26) {
            document.getElementById("text").innerHTML="Y a pas moyen Djadja, ouais en Catchana baby tu dead ça, d'après toi";
          }
          else if (m==2 && s>=27 && s<=29) {
            document.getElementById("text").innerHTML="En Catchana baby tu dead ça, en Catchana baby";
          }
           else if (m==2 && s>=32 && s<=34) {
            document.getElementById("text").innerHTML="En Catchana baby tu dead ça, en catchana baby ";
          }
          else if (m==2 && s>=37 && s<=39) {
            document.getElementById("text").innerHTML="Oh Djadja ";
          }
          else if (m==2 && s>=39 && s<=41) {
            document.getElementById("text").innerHTML="Oh Djadja ";
          }
          else if (m==2 && s>=42 && s<=43) {
            document.getElementById("text").innerHTML="Oh Djadja ";
          }
          

          //
          else{
            document.getElementById("text").innerHTML="";

          }
         }, 1000);  
     
});
 
audio.addEventListener("pause", function() { 
document.getElementById("text").innerHTML="";
		document.body.style.backgroundColor="red";

});