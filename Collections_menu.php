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
    		Mixtape.com|Collections
    	</title>
        <link rel="stylesheet" type="text/css" href="Mixtape.css">
    </head> 
    <body align="center" style="background-color:#9A61AB;">
    <div id="main" align=center>
<div id="Titlelogo" align="center"><a href="Home.html"><img src="asset/Pictures/Mixtapelogo.png" alt="Home" height=100% width=100%></a></div>		<div id="navibar" align="center">
			<?php include 'Navibar.html' ?>
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
			  <tr align="center">
			    <th rowspan="2" width=60%><audio controls preload="metadata" style=" width:100%;">
			<source src="" type="audio/mpeg">
			Your browser does not support the audio element.
		</audio></th>
			    <td style="color: white;"><h2>Song Title</h2></td>
			  </tr>
			  <tr align="center">
			    <td style="color: white;">Artist</td>
			  </tr>
			</table>
		</div>
        <div id="mainscreen_pl" align="center">
        	<table width=100% height=100%>
			  <tr>
			    <td style="color: #7C3F8D"><h2>Collections</h2></td>
			  </tr>
			  <tr>
			    <td><iframe src="Playlist_list.html" style="border:none;height:100%;width:100%;"></iframe></td>
			  </tr>
			</table>
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