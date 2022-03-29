<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" type="text/css">
    <title>Vismay Patel</title>
    <!-- <link rel="icon" type="image/x-icon" href="/src/images/ICC LOGO.svg"> -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Vismay Patel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Certifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My 501(C)3 Nonprofit</a>
                    </li>
                </ul>
                <span class="navbar-text"></span>
            </div>
        </div>
    </nav>

    <div id = "background1">
		<br><br><br>
        <div class = "title">
            <h2>Vismay Patel</h2>
			<br>
            <h4>Java Developer</h4>
			<h4>Game and Website Creator</h4>
            <br><br><br><br><br>
        </div>
        
        <div class = "links">
            <a href = "https://www.linkedin.com/in/vismaypatelcs/">
            <!-- Linkedin -->
                <img src = "src/images/linkedin.png">
            </a>
            <!-- GitHub -->
			<a href = "https://github.com/Vismaypikachu">
				<img src = "src/images/github.png">
			</a>
            <!-- Cirkledin -->
			<a href = "https://www.cirkledin.com/student-profile/profile.php?&p=MXeQdfncWOlFZitLlZOWg0WAsuaFWXXol">
				<img src = "">
			</a>
            <!-- Email -->
			<a href = "mailto:vismaypikachu@gmail.com">
				<img src = "src/images/gmail.png">
			</a>
            <!-- YouTube -->
			<a href = "https://youtube.com/Vismaypikachu">
				<img src = "src/images/YouTube-icon.png">
			</a>
            <!-- Discord -->
			<a href = "https://discord.gg/DrEhfxU986">
				<img src = "src/images/discord.png">
			</a>
        </div>
			<br><br><br>
			
        <div class = "certifications">
			<div class="certification" style="width: 20.5rem;">
				<img src="src/images/Java.png" class="card-img-top">
				<div class="card-body">
					<p class="card-text">Introduction to Programming Using Java Certification from Microsoft</p>
				</div>
				<br>
				<div class="card-footer">
					<small class="text-muted">Achieved March 15th, 2022</small>
				</div>
			</div>
			
			<div class="certification" style="width: 20.5rem;">
				<img src="src/images/OS.png" class="card-img-top">
				<div class="card-body">
					<p class="card-text">Windows Operating System Fundamentals Certification from Microsoft</p>
				</div>
				<div class="card-footer">
					<small class="text-muted">Achieved March 15th, 2022</small>
				</div>
			</div>
			
			<div class="certification" style="width: 20.5rem;">
				<img src="src/images/SoftwareDev.png" class="card-img-top">
				<div class="card-body">
					<p class="card-text">Software Development Fundamentals Certification from Microsoft</p>
				</div>
				<div class="card-footer">
					<small class="text-muted">Achieved March 15th, 2022</small>
				</div>
			</div>
			
			<div class="certification" style="width: 20.5rem;">
				<img src="src/images/HTML.png" class="card-img-top">
				<div class="card-body">
					<p class="card-text">Introduction to Programming Using HTML and CSS Certification from Microsoft</p>
				</div>
				<div class="card-footer">
					<small class="text-muted">Achieved March 22nd, 2022</small>
				</div>
			</div>
			
			
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.halo.min.js"></script>
    <script>
        VANTA.HALO({
        el: "#background1",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        baseColor: 0xea1360,
        backgroundColor: 0x805abb,
        amplitudeFactor: 1.30,
		size: 1.0,
		yOffset: 0.1
        })
    </script>
</body>
</html>