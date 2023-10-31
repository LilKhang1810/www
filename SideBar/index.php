<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id ="Container">
        <div id="banner"></div>
        <div id="menu"></div>
        <div id="lmenu"><?php include "lmenu.php"?></div>
        <div id="content"><?php include "content.php"?></div>
        <br style="clear:both">
        <div id="footer"></div>
    </div>
    <style>
        body{margin: 0px;}
        #container{
            width: 1000px; 
            margin: 0px auto;
        }
        #banner{
            height: 150px;
            background-color:aquamarine;
            
        }
        #menu{ 
            height: 30px;
            background-color: red;

        }
        #lmenu{
        
            width: 200px;
            background-color:blanchedalmond;
            float: left;
        }
        #content{
        
            width: 800px;
            background-color:burlywood;
            float: left;
        }
        #footer{
            height: 200px;
            background-color:darksalmon ;
        }
    </style>
    
</body>
</html>