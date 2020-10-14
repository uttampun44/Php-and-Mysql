<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="index.js"></script>
	<title>EduHuB</title>
</head>
<body>
	<div class="overlay">
	
	</div>
   <nav>
	   <label><a href="#">EduHuB</a></label>
	  <ul>
		  <li><i class="fa fa-home"><a href="#home">HOME</a></i></li>
		  <li><i class="fa fa-address-book"><a href="#about">ABOUT</a></i></li>
		  <li><i class="fa fa-book"><a href="#course">COURSE</a></i></li>
		  <li><i class="fa fa-hotel"><a href="#contact">FACILITY</a></i></li>
	  </ul>
	   </nav>
	   
	   <!--Main page-->
     <div class="main">
		 <h1 id="improve">Improve your skills.</h1>
		 <br>
		 <h2 id="sharp">Sharpen you Knowledge.</h2>
	 </div>
	 <div class="para">
		 <p>We have more than 1000 courses.</p>
		 <br>
		 <button>Enroll Now</button>
	 </div>

    <!-- What we offer page-->
		<div class="courses">
            <div class="offer">
				<h1><u>What we offer</u></h1>
			</div>
   <div class="follow" data-aos="fade-right"  data-aos-delay="150" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false">
	   <div>  
	<a href="#"><i class="fa fa-facebook-square"></i></a>
	  <a href="#"><i class="fa fa-youtube-square" id="youtube"></i></a>
	  <a href="#"><i class="fa fa-instagram" id="instagram"></i></a>
	  <a href="#"><i class="fa fa-twitter-square" id="twitter"></i></a>
   </div>

   <div class="follows" data-aos="fade-left"  data-aos-delay="150" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false">
	   <div>
		<a href="#"><i class="fa fa-facebook-square"></i></a>
		<a href="#"><i class="fa fa-youtube-square" id="youtube"></i></a>
		<a href="#"><i class="fa fa-instagram" id="instagram"></i></a>
		<a href="#"><i class="fa fa-twitter-square" id="twitter"></i></a>
	   </div>
   </div>
	</div>
			<!--Top Courses Image-->
			<div class="img1">
				<img src="books.jpg">
				<p>Top Courses</p>
			</div>

			<!--Library Image details-->
			<div class="img2">
				<img src="Library.jpg">
				<p>Well Managed Library</p>
			</div>

			<!--Teachers Image Details-->
			<div class="img3">
				<img src="teachers.jpg">
				<p>Well Experienced Teachers</p>
			</div>

			<!--computer class image-->
			<div class="img4">
				<img src="computer.jpg">
				<p>Smart Computer Class</p>
			</div>
  
			  <!--classroom-->
			  <div class="img5">
				 <img src="classroom.jpg">
				 <p>Friendly Environment classroom</p>
			  </div>

			  <!--Achievements photos-->
			  <div class="img6">
			   <img src="achievements.jpg">
			   <p>Achievements story of our students</p>
			  </div>
		</div>
		
		  <!--Successful story portion-->
		  <div class="notable-alumini">
			<div class="anna">
				<img src="Anna.jpg">
				</div>

				<div class="success">
					<h1>Success Story</h1>
					<h2>Anna Sui</h2>
					<i class="fa fa-graduation-cap"> Bachelor in Computer Science</i>
					<i class="fa fa-map-marker">Shanghai, China</i>
					<p>Earning my psychology degree entailed real dedication, long hours, and love.<br>
					Above all, love. I loved putting in the work, so it never felt like a chore. <br>
					And my family loved what I was doing and supported me throughout.</p>
				</div>
		  </div>
		<!--enquiry portion-->
		<div class="enquiry">
			<div class="form-head">
				<h1>For Enquiry leave the querry given form</h1>
			</div>
			<hr>

			<!--Form part-->
            <div class="forms">
				<div class="container">
					<form method="POST" action="dbconnection.php">
						<div class="form-control">
                          <input type="text" placeholder="Enter your Full Name" id="fullname" name="name" autocomplete="off">
						</div>
						<br>
						<div class="form-control">
							<input type="text" placeholder="Enter your Email" id="email" name="email" autocomplete="off">
						</div>
						<div class="form-control" id="comment">
							<input type="text" id="comment" placeholder="Enter your question here" name="comments" autocomplete="off">
						</div>
						<div class="btn" onclick="sweetAlert()">
							<button id="btn" type="submit">Submit</button>
						</div>
					</form>
			   </div>
		</div>
		</div>
		<!-- Last content-->
			<div class="last-content">
				<hr>

				<!--Top Courses-->
				<div class="course-content">
					<h1>Top Courses</h1>
				<a href="#">Machine Learning</a>
				<a href="#">Python</a>
				<a href="#">Full Stack Development</a>
				<a href="#">Java</a>
				<a href="#">Web Development</a>
				<a href="#">Digital Marketing</a>
				<a href="#">C++</a>
				<a href="#">Graphic Designing</a>
				<a href="#">Languages</a>
				<a href="#">Database Administration</a>
				<a href="#">React Js</a>
				<a href="#">Cloud Computing</a>
				<a href="#">English Languages</a>
			</div>
			 
			<!--Online certificate-->
			<div class="online-certificate">
			  <h1>Online Certificate</h1>
			  <a href="#">Google IT Support</a>
				<a href="#">IDM Data Science</a>
				<a href="#">IDM Applied AI</a>
				<a href="#">Master Track Certification</a>
				<a href="#">Big Data Certificate</a>
				<a href="#">Social Worker Certificate</a>
				<a href="#">Professional Certificate</a>
				<a href="#">IBM Cyber Security</a>
				<a href="#">Sustainabaility and Development</a>
				<a href="#">Sales</a>
				<a href="#">Instruction Desing Certificate</a>
				<a href="#">IBM Cyber Security</a>
				<a href="#">Project Management</a>
			</div>

			<!--Online degrees-->
			<div class="online-degree">
				<h1> Degree Programme</h1>
				<a href="#">Computer Science Degrees</a>
				<a href="#">Business Degrees</a>
				<a href="#">Public Health Degrees</a>
				<a href="#">Data Science Degree</a>
				<a href="#">Bachelor Degrees</a>
				<a href="#">Master Degrees</a>
				<a href="#">MBA</a>
				<a href="#">MS Electrical Engineering</a>
				<a href="#">Master in Public Health</a>
				<a href="#">Global MBA</a>
				<a href="#">Bachelor Completion Degree</a>
			</div>

			<!--Online specialization-->
			<div class="online-specialization">
				<h1>Top Specialization</h1>
				<a href="#">Python For Everyobody</a>
				<a href="#">Deep Learning</a>
				<a href="#">AI for Medicine</a>
				<a href="#">Excell Skills for Business</a>
				<a href="#">Sales Training</a>
				<a href="#">Finance for Everyobody</a>
				<a href="#">Business Foundation</a>
				<a href="#">MS Electrical Engineering</a>
				<a href="#">Career Brand Management</a>
				<a href="#">CalArts Graphic Design</a>
				<a href="#">Data Science</a>
				<a href="#">Infections Disease Modeling</a>
				<a href="#">Penn Positive Psychology</a>
				<a href="#">Software Testing</a>
			</div>

			 <!--Edu hub-->
			<div class="eduhub">
				<h1>EduHuB</h1>
                <a href="#">About</a>
				<a href="#">Leadership</a>
				<a href="#">Careers</a>
				<a href="#">Catalog</a>
				<a href="#">For Campus</a>
				<a href="#">For Enterprise</a>
				<a href="#">For Government</a>
				<a href="#">Corona Response</a>
			</div>

			<!--community-->
			<div class="community">
				<h1>Community</h1>
                <a href="#">Learners</a>
				<a href="#">Partners</a>
				<a href="#">Developers</a>
				<a href="#">Beta Tester</a>
				<a href="#">Translator</a>
				<a href="#">Blog</a>
				<a href="#">Tech Blog</a>
			</div>

			<!--apple and playstore icon-->
			<div class="icon">
			 <a href="#"><img src="apple.png"></a>
			 <a href="#"><img src="playstore.png"></a>
			</div>
			
			<div class="copyrights">
				<p>© 2020 EduHuB Inc. All rights reserved.</p>
			</div>
			</div>
			<script>
				AOS.init();
				function search() {
					
				}
			</script>
</body>
</html>