<html>
    <head>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            html{
                background-color:black
            }
            body{
               
                background:linear-gradient(0deg,#2B3856,black); 
            }
            
            #c1{
               
                position:relative;
                top:1%;
                width:100%;
                background-color:transparent;
                

            }
            
            #r1{
                background-color:transparent;
            }
            .row{
                position:relative;
               
            }
            .col-md-5,.col-md-7{
                position:relative;
                text-align:center;
                
            }
            
            .col-md-7{
                position:relative;
                margin-top:15px; 
            }
            
            .col-md-5{
                font-family:verdana;
                font-size:70px; 
                font-weight:bolder;
            }
            
            #r3{
                margin-top:15px; 
                background-color:transparent;
            }
            #text{
                position: relative;
                font-family:Geneva;
                font-size:24px;
                font-weight:bolder; 
                text-align:left;
                color:#f2f2f2;
            }
            
            .search-container {
                  top:24%;
                  position:relative;
                  text-align: center;
                }

            input[type=text] {
                  position:relative;
                  padding: 6px;
                  margin-top:8px;
                  font-size: 17px;
                  width:88.5%; 
                  height:40px;
                  border-top-left-radius:3px;
                  border-bottom-left-radius:3px;
                  
                }

            *:focus {
                    outline: none;
                }

            
                .search-container button {
                    float:right;
                  margin-top: 8px;
                  background: #00688B;
                  font-size:17px;
                  cursor: pointer;
                    height:40px;
                    border:none;
                  width:11%; 
                  color:white;
                    border-top-right-radius:3px;
                  border-bottom-right-radius:3px;
                    overflow:hidden;
                }

                .search-container button:hover {
                  background: #00588B;
                }
            
            .glyphicon{
                display:none;
            }
            #sub{
                display:block;
            }
            
            #cont2{
                position:relative;
                text-align: center;
                top:1%;
                display:block;
                
                
              
                
            }
            
            #loading
                {
                   background:url(../images/loading.gif) no-repeat center center;
                   height: 140px;
                   width:100%;
                   position: fixed;
                   z-index: 1000;
                    left:5%;
                   top:50%;
                   margin: -25px 0 0 -25px;
                }
            
            a:hover{
                text-decoration:none;
            }
            #chan{
                color:#00688B;
            }
            
            #lsear{
                position:absolute;
                z-index:1;
                color:black;
                background-color:white;
               
            }
            
            #col1{
                font-size:25px;
                width:100%; 
            }
            #col2{
                      display:none;
            }
            #c12{
                height:100px;
                background:linear-gradient(0deg,#2B3856,black); 
            }
            
            #scon{
                left:16%;
                width:70%;
                
                
            }
              #all{
                cursor:pointer;
                color:black;
            }
           
            @media only screen and (max-width: 600px) {
                #c1{
                    width:100%;
                    
                }
                
                
                
                #text{
                   text-align:center;
                    font-size:18px;
                }
                
                .col-md-5{
                    font-size:40px;
                }
                input[type=text] {
                    float:left;
                    width:85%;
            }
                .search-container button {
                    float:right;
                    width:15%;
                    font-size:14px; 
                    
                }
                .glyphicon{
                display:block;
            }
                #sub{
                    display:none;
                }
                .search-container{
                    width:100%;
                }
                #r3{
                margin-top:0px; 
            }
                #loading{
                     left:7%; 
                }
                #scon{
                  left:0%;
                  width:100%
                }
            }
                
        </style>
    </head>
    <body>
        <div class="container-fluid" id="c1">
            <div class="row" id="r1">
            <div class="col-md-5" id="col1">
                <a href="tdeal.php">
                    <span id="chan">the</span><span style="color:green">de</span><span>al</span></a>
                </div>
                <div class="col-md-7" id="col2">
                    <p id="text">Find the cheapest price from all the websites and buy it online</p>
                </div>
            </div>
            <div class="row" id="r3">
                <div class="col-md-12" style="position:relative;align:center;"  id="c12">
                <div class="search-container" id="scon">
      <input type="text" placeholder="Search.." id="in1" required autocomplete="off" onkeypress="runScript(event)" onkeyup="showResult(this.value)">
                    
        <button type="button" onclick="main()" ><div id="sub">Submit</div><div class="glyphicon glyphicon-search"></div></button>
                    <div id="lsear"></div>
                    </div></div>
                
                </div>
        </div>
        
        
        <div class="container-fluid" id="cont2">
            <div class="row">
                <div class="col-lg-4" id="md31"><b></b></div>
                <div class="col-lg-4" id="md33"><b></b></div>
                <div class="col-lg-4" id="md32"><b></b></div>
                </div>
            <div class="row">
                 <div class="col-lg-4" id="md34"><b></b></div>
                
                
                
                
            </div>
        </div>
        <div id='loading'></div>
        <script src="../js files/all.js"></script>
        <script>
            var em1 = document.getElementById("in1");
            
            window.onload = function(){
            var url_string = window.location.href
            var url = new URL(url_string);
            var c = url.searchParams.get("val");
            console.log(c);
            em1.value=c;
            main();
            }
            
            
            window.addEventListener('click', function(e){   
  if (document.getElementById('in1').contains(e.target)){
    lives.style.visibility="visible";
  } else{
    lives.style.visibility="hidden";
  }
});
            
            
            
       var lives = document.getElementById('lsear');     
            
             function showResult(str) {
  if (str.length==0) { 
    document.getElementById("lsear").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    xmlhttpsug=new XMLHttpRequest();
  } else { 
    xmlhttpsug=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttpsug.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("lsear").innerHTML=this.responseText;
    }
  }
  xmlhttpsug.open("GET","lsearch.php?q="+str,true);
  xmlhttpsug.send();
}
            
            
            
        
        var con = document.getElementById("c1");
        var col2 = document.getElementById("col2");
        var col1 = document.getElementById("col1");
        var nav = document.getElementById("nav");
        var c12 = document.getElementById("c12");
        var scont = document.getElementById("scon");
        var row3 = document.getElementById("r3");   
        var contai = document.getElementById("cont2");
        var subm = document.getElementById("sub");
        var load = document.getElementById("loading");
        var ama = document.getElementById("md31");
        var flip = document.getElementById("md32");
        var snapd = document.getElementById("md33");
        var payt = document.getElementById("md34");
        var ebay = document.getElementById("md35");    
            
  em1.oninput=function(){
            lives.style.visibility="visible";
}
  
  
            
            function runScript(e) {
    //See notes about 'which' and 'key'
    if (e.keyCode == 13) {
        main()
    }
}
  
  
 
  
        </script>
    </body>
</html>