       <html>
    <head>
    	<title>
    		Mixtape.com|Home
    	</title>
        <link rel="stylesheet" type="text/css" href="Mixtape.css">
    </head> 
    <body align="center" style="background-color:#9A61AB;">
    <div id="main" align="center">
<div id="Titlelogo" align="center"><a href="Home.html"><img src="asset/Pictures/Mixtapelogo.png" alt="Home" height=100% width=100%></a></div>		
<div id="navibarmm" align="center">
			<nav>
				<ul id="navibar1">
					<li><a href="Collections_menu.html"><h2>Collections</h2></a></li>
					<li><a href="Playlist_menu.html"><h2>Playlists</h2></a></li>
					<li><a href="Trending_menu.html"><h2>Trending</h2></a></li>
				</ul>
			</nav>
		</div>
        <div id="mainscreenmm" >
		<table width=100% height=100% align="center">
			
			  <tr align="center">
			  <td>
				<h2>Add Playlist</h2>
				</td>
			  </tr>
			  <tr>
			  <td>
			  	<table width=100% height=100% >
			  		<form method="post" action="Playlist_complete.php" enctype="multipart/form-data">
				<tr>
				<td align="right"width=50%>
					Playlist Name
				</td>
				<td align="left">
					<input type="text" name="pname" placeholder="Playlist Name">
				</td>
				</tr>
				<tr >
				<td align="right"width=50%>
					Add Songs
				</td>
				<td align="left">
					<input type="file" name="file[]" accept=" .mp3 , audio/* " multiple>
				</td>
				</tr>
				<tr>
					<td>
					</td>
				</tr>
				<tr >
				<td align="right"width=50%>
					Playlist type
				</td>
				<td align="left">
					<input type="checkbox" name="privacy" value="private" checked> Private<br>
   				  <input type="checkbox" name="privacy" value="public" > Public<br>
				</td>
				</tr>
				
				</table>
				</td>
				<tr>
				<td align="center"width=100%>
					<input type="submit" name="submit" width=40px >
					</td>
				</tr>
			  </tr>
			  </form>
    	</table>
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