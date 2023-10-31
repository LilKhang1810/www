<?php
    include "data.php";
    if(isset($_GET['page'])){
        if($_GET['page']=="home"){
            foreach($data as $key=>$value){
                echo "<a href ='?who=<?php echo $key; ?>&page=detail'>
                        <div class = 'box'>
                            <img src=".$value[1].">
                            <h3>".$value[0]."</h3>
                        </div>
                    </a>";
            }
        }
        else if($_GET['page']=="detail"){
            if(isset($_GET['who']) && array_key_exists($_GET['who'],$data)){
                $humman = $data[$_GET['who']];
                echo "
                        <div class = 'box'>
                            <h2>".$humman[0]."</h2>
                            <img src =".$humman[1].">
                            <p>".$humman[2]."</p>
                        </div>
                    ";
                header("Location: ./detail.php");
            }
            else
                header("Location: ./detail.php");
            
        }
    }else 
        header("Location: ./?page=home");
?>