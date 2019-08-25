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
    		Mixtape.com|Settings
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
			    <td style="color: #7C3F8D"><h2>Change Account Settings</h2></td>
			  </tr>
			  <tr height="80%">
			    <td>
                    <table>
                        <tr>
                            <td>
                                <h2>Name</h2>
                            </td>
                            <td>
                                <h3><?php $name = all_values_of_a_user($_SESSION["userName"]); echo $name["name"]; ?></h3>
                            </td>
                            <td>
                                <button>Edit</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h2>User ID</h2>
                            </td>
                            <td>
                                <h3><?php $name = all_values_of_a_user($_SESSION["userName"]); echo $name["user_id"]; ?></h3>
                            </td>
                            <td>
                                <button>Edit</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h2>Email</h2>
                            </td>
                            <td>
                                <h3><?php $name = all_values_of_a_user($_SESSION["userName"]); echo $name["email"]; ?></h3>
                            </td>
                            <td>
                                <button>Edit</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h2>Gender</h2>
                            </td>
                            <td>
                                <h3><?php $name = all_values_of_a_user($_SESSION["userName"]); echo $name["gender"]; ?></h3>
                            </td>
                            <td>
                                <button>Edit</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h2>Date Of Birth</h2>
                            </td>
                            <td>
                                <h3><?php $name = all_values_of_a_user($_SESSION["userName"]); echo $name["dob"]; ?></h3>
                            </td>
                            <td>
                                <button>Edit</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h2>Type</h2>
                            </td>
                            <td>
                                <h3><?php $name = all_values_of_a_user($_SESSION["userName"]); echo $name["type"]; ?></h3>
                            </td>
                            <td>
                                <button>Edit</button>
                            </td>
                        </tr>
                    </table>
                </td>
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