	<html>
<title> Pururut </title>
	<head>
		<h1><b><center>Maverick Jave C. Bolo</center></b></h1>
	<center><img src = "wsaLOI__.jpg" style="width:400px;height:400px"></center>
		
	<style>
		table, th, td{
			border: 1px solid white;
			color: seagreen;
			font-size: 25;
			width: 50%;
		}

		body{
			background-image: url(<?=base_url()?>webimgs/Anonymous.jpg);
			color: black;
		}

		#q1, #q2, #q3, #q4, #q5{
			color: #ff0000;
		}
		
		h1 {
			color: steelblue
			text-align: center;
			font-size: 40;
		}
		
		#Visitors{
			background-color: black
		}

		.error {color: #FF0000;}
	</style>
	</head>

		<body>
		<center>
			<table id="PI">
			<tr>
				
				<td id="PI">Hobbies: </td>
				<td id="PI">Reading books and listening to music (+eating)</td>
			</tr>
			<tr>
				<td id="PI">Interests: </td>
				<td id="PI">I like reading about conspiracy theories and unsolved murder cases. </td>
			</tr>
			
			<tr>
				<td id="PI">Birthdate:</td>
				<td id="PI">February 15, 1999</td>
			</tr>
			
			</table>

			<button type="button" onclick="document.getElementById('table').style.fontSize='35px'">
			Enlarge
			</button>

			<p>
			<br>Favorite websites:
			<br><a href= "https://www.youtube.com"><img border="0" alt="Youtube" src="<?php echo base_url('Images/youtube.jpg');?>" width=100 height=100></a>
			<a href= "https://www.facebook.com"><img border="0" alt="Facebook" src="<?php echo base_url('Images/facebook.jpg');?>" width=100 height=100></a>
			<a href= "https://www.twitter.com"><img border="0" alt="Twitter" src="<?php echo base_url('Images/twitter.jpg');?>" width=100 height=100></a>
			</p>

			<p>
			<br>Favorite games:
			<br><a href= "https://lol.garena.ph/"><img border="0" alt="League of Legends" src="<?php echo base_url('Images/lol.jpg');?>" width=100 height=100></a>
			<a href= "http://store.steampowered.com/app/316010/"><img border="0" alt="Magic:The Gathering" src="<?php echo base_url('Images/MTG.jpg');?>" 

width=100 height=100></a>
			<a href= "https://minecraft.net/en/"><img border="0" alt="Minecraft" src="<?php echo base_url('Images/minecraft.jpg');?>" width=100 height=100></a>
			</p>

			<h2> Trivia! </h2>

			<p>
				1. My most common gaming username:
			</p>

			<p id="q1">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q1').innerHTML = 'NZAAXD or VoidDoubleA'">Click to see answer</button>

			<p>
				2. My favorite subject:
			</p>

			<p id="q2">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q2').innerHTML = 'Anything that has Math'">Click to see answer</button>

			<p>
				3. How long have I been playing Magic?
			</p>

			<p id="q3">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q3').innerHTML = 'Started on September 2016'">Click to see answer</button>

			<p>
				4. What else do you do in your free time?
			</p>

			<p id="q4">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q4').innerHTML = 'Play on my PS3, or play basketball with friends.'">Click to see answer</button>

			<p>
				5. Where do you go to buy magic cards?
			</p>

			<p id="q5">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q5').innerHTML = 'Hobby shops in taft or SM Megamall, or in Neutral grounds.'">Click to see answer</button>

			</center>

<div id = "Visitors">
<h2><?php echo $title; ?></h2>

<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Nickname</strong></td>
		<td><strong>Email</strong></td>
        <td><strong>Home_Address</strong></td>
		<td><strong>Gender</strong></td>
        <td><strong>Cp_Num</strong></td>
        <td><strong>Comment</strong></td>
		<td><strong>Action</strong></td>
    </tr>
<?php foreach ($userinfo as $news_item): ?>
        <tr>
            <td><?php echo $news_item['Name']; ?></td>
			<td><?php echo $news_item['Nickname']; ?></td>
			<td><?php echo $news_item['Email']; ?></td>
			<td><?php echo $news_item['Home_Address']; ?></td>
			<td><?php echo $news_item['Gender']; ?></td>
			<td><?php echo $news_item['Cp_Num']; ?></td>
			<td><?php echo $news_item['Comment']; ?></td>
            <td>
                <a href="<?php echo site_url('news/'.$news_item['User_ID']); ?>">View</a> | 
                <a href="<?php echo site_url('news/edit/'.$news_item['User_ID']); ?>">Edit</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item['User_ID']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
</div>
