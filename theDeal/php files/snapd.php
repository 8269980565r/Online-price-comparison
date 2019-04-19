<html>
    <head>
        
    
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="../css%20files/products.css">    
    </head>
    
    <body>
        

            
<?php
    $url1="https://www.snapdeal.com/search?keyword=";
        $name = $_REQUEST['q'];
        $name1=str_replace(" ","%20",$name);
        $url1 = $url1.$name1;
        

        
include 'crawl.php';
$curl = new Curl();

include 'conn.php';      

            
            
#-----------------------------------------------Amazon---------------------------------
$web_page_data = $curl->get($url1);
$item_list = explode('class="col-xs-6',$web_page_data);

#$item_list3 = explode('<div class="_3auQ3N _2GcJzG">',$item_list2[1]);

$count=0;
$item_titlei='';
        echo "<div class='row' id='ro3'><class=col-sm-12><img src='../images/snapd.png' style='width:170px;height:40px;margin:12px;'></div>";
        
         if(sizeof($item_list)<2){
            echo "<img src='notf.png' style='width:250px;height:90px:margin-top:60px;'>";
        }
        
        else{
           

for($i=1;$i<4;$i++){
    
    
    
    echo "<div class='col-sm-12' id='cols12'>";

    $url_link1=explode('href="',$item_list[$i]) or die("an error is occured");
    $url_link2=explode('"',$url_link1[1]);
    
    $image_link1=explode('srcset="',$item_list[$i]);
    if(sizeof($image_link1)<2){
        echo "<img src='notf.png' style='width:250px;height:90px:margin:60px;'>";
        break;
    }
    else{
    $image_link2=explode('"',$image_link1[1]);

    
    $title1 = explode('title="',$item_list[$i]);
    $item_title = explode('"',$title1[1]);
    if(sizeof($item_title)>=2){

        $item_titlei=$item_title[0];
    }
    
    $price1 = explode('data-price="',$item_list[$i]);
    $price = explode('</span>',$price1[1]);
    $price2 = explode('Rs.',$price[0]);
    
    
    $item_like  = $url_link2[0];
    $item_image_link=$image_link2[0];
    
    if (strpos($item_like, 'https://www.snapdeal.com/') !== false) {
    $item_like=$item_like;
}
    else{
        $item_like="https://www.snapdeal.com/".$item_like;
    }
    
    echo "<div class='row'>";
    echo "<div class='col-sm-5' style='margin-top:15px;position:relative;'>";
    echo "<a href='$item_like' target='_blank'><img src='$item_image_link' class='slidel' alt='snapdeal.com' id='imgas'></a>";
    echo "</div>";
    echo "<div class='col-sm-7' style='margin-top:10px;position:relative;'>";
    echo "<b>".$item_titlei."</b><br>";
    echo "</div>";
    echo "</div>";
    echo "<div class='row' id='trow'>";
    echo "<a href='$item_like' target='_blank'><div id='price' class='slider'><b id='ttext'><i class='fa fa-rupee'></i> ".$price2[1]."</b></div></a></div>";
    echo "</div>";
    }
    
    /*-----------------------------------inserting into database------------------*/
        

                $sql = "insert into titles (title,imglink) values ('$item_titlei','$item_image_link')";
         $conn->query($sql);
      
    
}
        }
        
echo "</div>";         


?>

    </body>
</html>