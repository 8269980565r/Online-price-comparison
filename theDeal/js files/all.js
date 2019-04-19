function main(){
      
       lives.style.visibility="hidden";
       str = document.getElementById("in1").value;
      if(str.length==0){
    }
        else{ 
            
            
        /*---------------------------------amazon------------------------------*/
            
        ama.innerHTML="";
        load.style.display="block";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("md31").innerHTML =this.responseText;
                load.style.display="none";
            }
        };
        
        xmlhttp.open("GET","/amazon.php?q="+str,true);
        xmlhttp.send();
           
        /*---------------------------------flipkart------------------------------*/    
            
        flip.innerHTML="";
        load.style.display="block";        
        var xmlhttpf = new XMLHttpRequest();
        xmlhttpf.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("md32").innerHTML =this.responseText;
                load.style.display="none";
            }
        };
        
        xmlhttpf.open("GET","../php files/flipkart.php?q="+str,true);
        xmlhttpf.send(); 
            
        /*---------------------------------snapdeal------------------------------*/    
        
        snapd.innerHTML="";
        load.style.display="block";        
        var xmlhttps = new XMLHttpRequest();
        xmlhttps.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("md33").innerHTML =this.responseText;
                load.style.display="none";
            }
        };
        
        xmlhttps.open("GET","../php files/snapd.php?q="+str,true);
        xmlhttps.send();
            
         /*---------------------------------paytm------------------------------*/    
        
        payt.innerHTML="";
        load.style.display="block";        
        var xmlhttpat = new XMLHttpRequest();
        xmlhttpat.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("md34").innerHTML =this.responseText;
                load.style.display="none";
            }
        };
        
            
            
        xmlhttpat.open("GET","../php files/paytm.php?q="+str,true);
        xmlhttpat.send();    
            
            
        /*---------------------------------ebay------------------------------*/    
        
        ebay.innerHTML="";
        load.style.display="block";        
        var xmlhttpeb = new XMLHttpRequest();
        xmlhttpeb.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("md35").innerHTML =this.responseText;
                load.style.display="none";
            }
        };
        
        xmlhttpeb.open("GET","../phph files/ebay.php?q="+str,true);
        xmlhttpeb.send();        
            
       
        }
  }