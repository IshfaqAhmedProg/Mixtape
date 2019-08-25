<?php
  session_start() ;
  require ("dbconnection.php");
    $account_name=""; 
   if ($_SESSION["userName"] )
   { //jodi session e kono user name thake 
       $user = all_values_of_a_user ($_SESSION["userName"] ) ;
       $account_name= $user["name"];
   }
   else
   {
       header("location:MainMenu.php");
   }
?>
<html>
    <head>
    	<title>
    		Mixtape.com|Profile
    	</title>
        <style>
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active, .accordion:hover {
            background-color: #ccc; 
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
        .accordion_content{
             background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }
        .active, .accordion_content:hover {
            background-color: #ccc; 
        }
        #list{
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        #list li a{
            color: black;
            text-align: center;
            text-decoration: none;
        }
        #list li.current-song {
            background-color:#634691 ;
            color: white;
        }

        #list li:hover:not(.current-song) {
            background-color: #555;
            color: white;
        }
        </style>
        <link rel="stylesheet" type="text/css" href="Mixtape.css">
    </head> 
    <body align="center" style="background-color:#9A61AB;">
    <div id="main" align=center>
<div id="Titlelogo" align="center"><a href="Home.php"><img src="asset/Pictures/Mixtapelogo.png" alt="Home" height=100% width=100%></a></div>		<div id="navibar" align="center">
			<?php include 'Navibar.html';?>
		</div>
		<div id="profile" align="center">
			<?php include 'Account_nav.php';?>
		</div>
        <div id="search" align="center">
        	<table height="100%" width="100%">
        		<tr>
        			<td width="30%" align="right">
        				<img src="asset/Pictures/search.png" alt="search" height=40% width=40%>
        			</td>
        			<td width="70%">
        				<input type="text" height="100%" width="100%">
        			</td>
        		</tr>
        	</table>
        </div>
        <div id="player" align="center">
        	<table align="center" width="100%" height="100%">
              <tr align="center" >
                <td rowspan="2" width=60%>
                    <audio src="" controls id="audioPlayer" style="width: 100%; display: block;"></audio>
                </td>
                <td style="color: white;" width=40%><h2><?php $name = all_values_of_a_user($_SESSION["userName"]); echo $name["name"]; ?></h2></td>
              </tr>
              <tr align="center">
                <td style="color: white;">Artist</td>
              </tr>
            </table>
		</div>
        <div id="recom" align="center">
        <table height=100%>
        		<tr height="10%">
        			<td align="center">
        				<h2>
	        				PROFILE
	        			</h2>
        			</td>
        		</tr>
        		<tr height="90%">
        			<td>
                        <?php include 'Side_nav.php';  ?>
                        </td>
        		</tr>
        	</table>	
        </div>
        <div id="mainscreen" align="center">
        	<table width=100% height=100%>
			  <tr>
			    <td style="color: #7C3F8D"><h2>Your Playlists</h2></td>
			  </tr>
			  <tr height="80%">
			    <td>
                    <?php
                    $sl=0;
                    foreach(glob('uploads/*', GLOB_ONLYDIR) as $dir) {
                        $dirname = basename($dir);
                        $a=scandir($dir);
                     echo "<button class='accordion'>".$sl.") ".$dirname."</button>
                        <div class='panel' id='panel'><ul class='list'>";
                         for ($i=2; $i<count($a) ; $i++) 
                         {   
                            if($i==2){
                            echo "<li class='current-song'><a class='song".$i."' id='song".$i."' href='uploads/".$dirname."/".$a[$i]."'>".$a[$i]."</a></li><br>";
                            }
                            else{
                             echo "<li><a class='song".$i."' id='song".$i."' href='uploads/".$dirname."/".$a[$i]."'>".$a[$i]."</a></li><br>";   
                            }
                         }
                        echo "</div>";
                        $sl=$sl+1;
                    }
                    ?>
                </td>
			  </tr>
			</table>
    	</div>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }

    audioPlayer();
    function audioPlayer(){
        $("audioPlayer")[0].src=$("#list li a")[0];
        $("audioPlayer")[0].play();
    }
    </script>
         
    </body>
    <footer>
    	 <p>
    	 	Made by: Ahmed, Ishfaq
    	 </p>
		 <p>Contact information: 
		 	<a href="mailto:ishfaqahmed0837@gmail.com">
			 ishfaqahmed0837@gmail.com
			</a>.
		</p>
    </footer>
</html>