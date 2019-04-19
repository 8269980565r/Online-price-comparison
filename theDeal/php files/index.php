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
            
           
                @-webkit-keyframes Gradient {
                    0% {
                        background-position: 0% 50%
                    }
                    50% {
                        background-position: 75% 50%
                    }
                    100% {
                        background-position: 0% 50%
                    }
                }

                @-moz-keyframes Gradient {
                    0% {
                        background-position: 0% 50%
                    }
                    50% {
                        background-position: 100% 50%
                    }
                    100% {
                        background-position: 0% 50%
                    }
                }

                @keyframes Gradient {
                    0% {
                        background-position: 0% 50%
                    }
                    50% {
                        background-position: 100% 50%
                    }
                    100% {
                        background-position: 0% 50%
                    }
                }
            
            .col-sm-6{
                height:100%;
                position: relative;
                
                
            }
            
            
            #imge1,#imge2{
                position:relative;
                text-align: center;
                top:35%;
                border-radius:30px;  
                width:130px;
                height:125px;
                left:40%;
                
                
            }
            #img1,#img2{
                position:relative;
                border-radius:30px; 
                width:100%;
                height:100%;
                

            }
            
            #imge1{
                background: linear-gradient(180deg,#1E90FF,#87CEEB);
            }
            
            #imge2{
                background: linear-gradient(180deg,#e02e01,#f93402,#fa5c34,#fa704d,#fcad99);
            }
            
            #img1:hover,#img2:hover{
                cursor:pointer;
                -webkit-box-shadow: 0 0 5px lightgray;
                box-shadow: 0 0 5px lightgray;
            }
            
            body{
                 background-attachment: fixed;
                    background-color:#00688B; 
                    color: #fff;
                    background: linear-gradient(-45deg, #23A6D5,purple,orange);
                    background-size: 400% 400%;
                    -webkit-animation: Gradient 20s ease infinite;
                    -moz-animation: Gradient 20s ease infinite;
                    animation: Gradient 15s ease infinite;
                height:90%;
                position:relative;
                -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3);
                box-shadow:0 1px 4px rgba(0, 0, 0, 0.3);
                
               
            }
            
            body:after{
                
                
                content:"";
                position:absolute;
                z-index:-1;
                top:100%;
                bottom:0;
                width:100%;
                height:30px;
                
                background:-webkit-radial-gradient(50% -3%, ellipse cover, rgba(00, 00, 00, 0.5), rgba(97, 97, 97, 0.0) 40%);
                background:radial-gradient(ellipse at 50% -3%, rgba(00, 00, 00, 0.5), rgba(97, 97, 97, 0.0) 40%);
                
                
}

            
            
            #txt{ 
                font-family:sans-serif;
                font-size:20px;
                color:lightgray;
                font-weight:normal;
                text-shadow: 0 2px 2px black;
            }
            
            @media only screen and (max-width: 600px) {
                #txt{
                    font-size:20px;
                    color:white;
                }

            #imge1,#imge2{
                width:110px;
                height:105px;
                left:34%;
                transition-duration:2s; 
            }
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div id="imge1">
                        <img src="../images/cart.png" id="img1" class="img-responsive" onclick="shopping()"><br>
                        <p id="txt">Shopping</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="imge2">
                        <img src="../images/bus.png" id="img1" class="img-responsive" onclick="busTicket()"><br>
                        <p id="txt">Bus Ticket</p>
                </div>
            </div>
            </div></div>
        <script>
        function shopping(){
            window.location.href="tdeal.php";
        }
        function busTicket(){
            window.location.href="../working/";
        }
        </script>
        
</body>
</html>