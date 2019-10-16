
	<style>
		@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css');
li a{
	color:white;
}
.toggle
{
	position: fixed;
	top: 30px;
	right: 50px;
	width: 20px;
	height: 20px;
	border-radius: 50%;
	cursor: pointer;
	z-index: 5;
}
.toggle:before
{
	content: '+';
	position: absolute;
	top: 0;
	left: 0;
	font-size: 30px;
	width: 200%;
	height: 200%;
	color: #fff;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	background: #000;
	font-weight: bold;
	transition: 0.5s;
}
.toggle.active:before
{
	transform: rotate(405deg);
	background: #ffeb3b;
	color: #000;
}
.overlay
{
	position: fixed;
	top: 80px;
	right: 80px;
	width: 50px;
	height: 50px;
	border-radius: 50%;
	background: rgba(0,0,0,.70);
	transition: transform 0.5s;opacity:0;
}
.overlay.active
{
    transform: scale(100,100);
    z-index:1;
	opacity:1;
}
.menu
{
	width: 100%;
	height: 100%;
	overflow: auto;
	z-index: 1020;
	visibility: hidden;
}
.menu.active
{
	visibility: visible;
	transition-delay: 0.5s;
}
.menu ul
{
    z-index:2;
	position: fixed;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	margin: 0;
	padding: 0;
}

.menu ul li
{
	list-style: none;
}

.menu ul li a
{
	position: relative;
	font-size: 30px;
	text-decoration: none;
	color: #fff !important;
	margin: 20px 0;
	display: block;
	font-weight: bold!important;
	text-shadow: 0 2px 5px rgba(0,0,0,.5);
}

.menu ul li a:before
{
	content: '';
	position: absolute;
	bottom: 5px;
	left: -10px;
	width: 100%;
	height: 20px;
	background: #ffeb3b;
	z-index: -1;
	transform: scaleX(0);
	transform-origin: left;
	transition: transform 0.5s;

}
.menu ul li a:hover:before
{
	transform: scaleX(1);
}
.far{
    font-weight:800;
}
		
	</style>



<div class="container-fluid" style="background:#000000b3;">
	<img src="image.png" width="80px" style="padding:15px 0;">

	<div class="toggle"></div>
	<div class="overlay"></div>
	
</div>
<br>





	<div class="menu">
		<ul>
            <strong>
			<li onclick="home()"><a href=""><i class='fas fa-home' >&nbsp;&nbsp;&nbsp;Home</i></a></li>
			<li onclick="events()"><a href="/Desktop/vivek/Events/index.php"><i class='far fa-calendar-check'>&nbsp;&nbsp;&nbsp;&nbsp;Events</i></a></li>
			<li onclick="sponsors()"><a href="/Desktop/vivek/Sponsors/index.php"><i class='fas fa-money-check-alt'>&nbsp;&nbsp;&nbsp;Sponsors</i></a></li>
			<li onclick="gallery()"><a href="/Desktop/vivek/Gallery/index.php"><i class='fas fa-camera-retro'>&nbsp;&nbsp;&nbsp;&nbsp;Gallery</i></a></li>
			<li onclick="faq()"><a href="/Desktop/vivek/FAQ's/index.php"><i class='far fa-question-circle'>&nbsp;&nbsp;&nbsp;&nbsp;FAQ's</i></a></li>
			<li onclick="team()"><a href="/Desktop/vivek/Team/index.php"><i class='fas fa-users-cog'>&nbsp;&nbsp;&nbsp;Team</i></a></li>
			<li onclick="developers()"><a href="/Desktop/vivek/Developers/index.php"><i class='fas fa-laptop-code'>&nbsp;&nbsp;&nbsp;Developers</i></a></li>
            </strong>
        </ul>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.toggle').click(function(){
				$('.toggle').toggleClass('active')
				$('.overlay').toggleClass('active')
				$('.menu').toggleClass('active')
			})
		})
	</script>
	<script>
	function home(){
		window.location.href = "/Desktop/vivek/Home/index.php";
	}
	function events(){
		window.location.href = "/Desktop/vivek/Events/index.php";
	}
	function sponsers(){
		window.location.href = "/Desktop/vivek/Sponsors/index.php";
	}
	function gallery(){
		window.location.href = "/Desktop/vivek/Gallery/index.php";
	}
	function faq(){
		window.location.href = "/Desktop/vivek/FAQ's/index.php";
	}
	function team(){
		window.location.href = "/Desktop/vivek/Team/index.php";
	}
	function developers(){
		window.location.href = "/Desktop/vivek/Developers/index.php";
	}
	</script>