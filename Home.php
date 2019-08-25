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
    		Mixtape.com|Home
    	</title>
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
			<form action="search_val.php" method="POST">
        		<tr>
        			<td width="30%" align="right">
        				<input type="image" src="asset/Pictures/search.png" name="searchb">
        			</td>
        			<td width="70%">
        				<input placeholder="Search Playlists.."name="searchf"type="text" height="100%" width="100%">
        			</td>
        		</tr>
			</form>
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
        			<td>
        				<h3>
	        				RECOMMENDED
	        			</h3>
        			</td>
        		</tr>
        		<tr>
        			<td>
        				<iframe src="Recommended.html" style="border:none;height:100%;width:100%;"></iframe>
        			</td>
        		</tr>
        	</table>	
        </div>
        <div id="mainscreen" align="center">
        	<table width=100% height=100%>
			  <tr>
			    <td style="color: #7C3F8D"><h2>Playlist Title</h2></td>
			  </tr>
			  <tr>
			  	<td>
			  		Rate:*****   Comment^
			  	</td>
			  </tr>
			  <tr >
			    <td width=100% height="100%">
			    <ul id="Playlist">
              <li class="current-song" align="center">
              	<img src="asset/Pictures/nil4.jpg" alt="Favourite" height=60% width=80%>
              	<br>
                <a class="song1" id="song1"></a>
              </li>
              <li align="center">
              	<img src="asset/Pictures/nil2.jpg" alt="Favourite" height=60% width=80%>
                <br>
                <a class="song2" id="song2"></a>
              </li>
              <li align="center">
              	<img src="asset/Pictures/nil4.jpg" alt="Favourite" height=60% width=80%>
              	<br>
                <a class="song3" id="song3"></a>
              </li>
            </ul>
			    </td>
			  </tr>
			</table>
			<script src="https://code.jquery.com/jquery-2.2.0.js"></script>		
			<script>
				audioPlayer();
				function audioPlayer(){
            var currentSong = 0;
            $("a.song1").attr("href", "uploads/Alef-Luna.mp3");
            $("a.song2").attr("href", "uploads/The 1975 - Somebody Else.mp3");
            $("a.song3").attr("href", "uploads/Years & Years - Take Shelter.mp3");
            $("#song1").text("a.song1");
            $("#song2").text("a.song2");
            $("#song3").text("a.song3");
            $("#audioPlayer")[0].src = $("#Playlist li a")[0];
            $("#audioPlayer")[0].play();
            $("#Playlist li a").click(function(e){
               e.preventDefault(); 
               $("#audioPlayer")[0].src = this;
               $("#audioPlayer")[0].play();
               $("#Playlist li").removeClass("current-song");
                currentSong = $(this).parent().index();
                $(this).parent().addClass("current-song");
            });
            
            $("#audioPlayer")[0].addEventListener("ended", function(){
               currentSong++;
                if(currentSong == $("#Playlist li a").length)
                    currentSong = 0;
                $("#Playlist li").removeClass("current-song");
                $("#Playlist li:eq("+currentSong+")").addClass("current-song");
                $("#audioPlayer")[0].src = $("#Playlist li a")[currentSong].href;
                $("#audioPlayer")[0].play();
            });
        }
        
			</script>
    	</div>
    </div>
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