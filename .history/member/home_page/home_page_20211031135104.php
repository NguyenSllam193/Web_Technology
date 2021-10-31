<html>
<head>
	<link rel="stylesheet" href="css/home_page.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
		integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<nav>
		<div class="nav-right">
			<div class="search-box">
				<a href="#"><img src="images/search.png"></a>
				<input type="text" placeholder="Search everything ..">
			</div>
		</div>
		<div class="nav-left">
			<!-- <img src="images/logo.png" class="logo"> -->
			<ul>
				<li>
					<img src="images/notification.png">
				</li>
				<li>
					<img src="images/inbox.png">
				</li>
				<li>
					<img src="images/video.png">
				</li>
			</ul>
		</div>


		<div class="settings-menu">
			<div id="dark-btn">
				<span></span>
			</div>
			<div class="settings-menu-inner">
				<div class="user-profile">
					<img src="images/profile-pic.png">
					<div>
						<p>John Nicholson</p>
						<a href="#">See Your Profile</a>
					</div>
				</div>
				<hr>
				<div class="user-profile">
					<img src="images/feedback.png">
					<div>
						<p>Give Feedback</p>
						<a href="#">Help us to improve the new design</a>
					</div>
				</div>
				<hr>

				<div class="settings-links">
					<img src="images/setting.png" class="settings-icon">
					<a href="#">Settings & Privacy</a>
					<img src="images/arrow.png" width="10px">
				</div>
				<div class="settings-links">
					<img src="images/help.png" class="settings-icon">
					<a href="#">Help & Support</a>
					<img src="images/arrow.png" width="10px">
				</div>
				<div class="settings-links">
					<img src="images/display.png" class="settings-icon">
					<a href="#">Display & Accessibility</a>
					<img src="images/arrow.png" width="10px">
				</div>
				<div class="settings-links">
					<img src="images/logout.png" class="settings-icon">
					<a href="#">Logout</a>
					<img src="images/arrow.png" width="10px">
				</div>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="main-content">
			<div class="write-post-container">
				<div class="post-input-container">
					<textarea rows="2" placeholder="   What's on your mind?"></textarea>
					<div class="add-post-links">
						<a href="#">
							<img src="images/live-video.png">
							Live Video
						</a>
						<a href="#">
							<img src="images/photo.png">
							Photo/Video
						</a>
						<a href="#">
							<img src="images/feeling.png">
							Feeling/Activity
						</a>
					</div>
				</div>
			</div>
			<div class="post-container">
				<div class="post-row">
					<div class="user-profile">
						<img src="images/profile-pic.png">
						<div>
							<p>Name User</p>
							<span>June 21 2021, 13:40</span>
						</div>
					</div>
					<a href="#">
						<i class="fa fa-ellipsis-v"></i>
					</a>
				</div>

				<p class="post-text">Subscribe <span>@LetsTryThis</span> YouTube Channel to watch more videos on website
					development and UI Designs.
				</p>
				<img src="images/feed-image-1.png" class="post-img">
				<div class="post-row">
					<div class="activity-icons">
						<div>
							<i class="fas fa-heart" style="margin-right: 5px; color: red;"></i>
							120
						</div>
						<div>
							<i class="fas fa-comments" style="margin-right: 5px;"></i>
							19
						</div>
						<div>
							<i class="fas fa-share" style="margin-right: 5px;"></i>
							1
						</div>
					</div>
					<div class="post-profile-icon">
						<img src="images/profile-pic.png">
						<i class="fas fa fa-caret-down"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="right-sidebar">

			<div class="info_user">
				<div style="
					display:flex; 
					justify-content:space-between;
					margin-bottom: 20px;">
					<h4>Info User</h4>
					<i class="fas fa-ellipsis-h"></i>
				</div>

				<div>

				</div>
					<img style="
					margin-left: 25%;
					border-radius: 50%;" 
					src="./images/profile-pic.png" alt="">
				</div>

			<div class="sidebar-title">
				<h4>Events</h4>
				<a href="#">See All</a>
			</div>
			<div class="event">
				<div class="left-event">
					<h3>18</h3>
					<span>March</span>
				</div>
				<div class="right-event">
					<h4>Social Media</h4>
					<p>
						<i class="fa fa-map-marker"></i>
						Willson Tech Park
					</p>
					<a href="#">More Info</a>
				</div>
			</div>
			<div class="event">
				<div class="left-event">
					<h3>22</h3>
					<span>June</span>
				</div>
				<div class="right-event">
					<h4>Mobile Marketing</h4>
					<p>
						<i class="fa fa-map-marker"></i>
						Willson Tech Park
					</p>
					<a href="#">More Info</a>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
	</div>

	<script src="js/script.js"></script>
</body>

</html>