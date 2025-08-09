<?php
if (isset($_POST['accept_all'])) {
    setcookie('cookies_consent', 'accepted', time() + 365*24*60*60);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
if (isset($_POST['reject_all'])) {
    setcookie('cookies_consent', 'rejected', time() + 365*24*60*60);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
$consentGiven = isset($_COOKIE['cookies_consent']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Cookie Consent Bar</title>
<style>
  #cookieConsentBar {
    position: fixed;
    bottom: 0;
    left: 0; right: 0;
    background: #fff;
    border-top: 1px solid #ddd;
    box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
    padding: 30px 30px;
    display: <?php echo $consentGiven ? 'none' : 'flex'; ?>;
    align-items: center;
    justify-content: space-between;
    font-family: Arial, sans-serif;
    font-size: 14px;
    z-index: 10000;
    flex-wrap: wrap;
  }
  #cookieConsentBar h2 {
    margin: 0;
    font-size: 18px;
    font-weight: bold;
    color: #0066cc;
  }
  #cookieConsentBar small {
    display: block;
    font-size: 13px;
    color: #555;
    margin-bottom: 8px;
  }
  #cookieConsentBar p {
    margin: 0;
    flex: 1;
    color: #333;
  }
  #cookieConsentBar a {
    color: #0066cc;
    text-decoration: underline;
    margin-left: 5px;
  }
  #cookieConsentBar form {
    margin: 0 5px;
  }
  #cookieConsentBar button {
    padding: 8px 16px;
    margin-left: 10px;
    border: none;
    cursor: pointer;
    border-radius: 3px;
    font-weight: 600;
  }
  #customiseBtn {
    color: #049c88ff;
  }
  
  #rejectBtn {
    background: #049c88ff;
    color: white;
  }
  #acceptBtn {
    background: #049c88ff;
    color: white;
  }
  #cookieConsentBar button:hover {
    opacity: 0.9;
  }
</style>
</head>
<body>

<?php if (!$consentGiven): ?>
  <div id="cookieConsentBar">
    <div style="flex:1;">
      <h2>Welcome to Agro Scope</h2>
      <small>We value your privacy</small>
      <p>
        We use cookies to enhance your browsing experience, serve personalised ads or content, and analyse our traffic. By clicking "Accept All", you consent to our use of cookies.
        <a href="#" target="_blank">Cookie Policy</a>
      </p>
    </div>
    <div style="display:flex; align-items:center;">
      <form method="post" style="display:inline;">
        <button type="submit" id="customiseBtn" name="customise">Customise</button>
      </form>
      <form method="post" style="display:inline;">
        <button type="submit" id="rejectBtn" name="reject_all">Reject All</button>
      </form>
      <form method="post" style="display:inline;">
        <button type="submit" id="acceptBtn" name="accept_all">Accept All</button>
      </form>
    </div>
  </div>
<?php endif; ?>

<!-- //------------------// -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agro Scope</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="style1.css">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css">
    <title>Agro Scope</title>
    <div class="background">
    <header>
        <div class="logo">
           
            <a href="#home" class="logo"><img src="Agro icon.png" alt="" style="height: 70px;width: 125px;"></a>
        </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="#contact us">Contact Us  </a></li>
                <input type="text" placeholder="Search..">
                <li><a href="#world"><i class="fas fa-globe"></i></a></li>
            </ul>
        </nav>
    </header>   
     <!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h2> <img src="Agro icon.png" alt="" style="height: 100px;width: 200px;"></h2>
        <p style="font-size: 60px;">Growing Smarter <br> Farming Better</p>
    </div>
    <div class="contact-box">
        <div class="contact-item">
			<p>
				<a class="Footer_link__LDpN9" href="https://maps.app.goo.gl/Dzg1E9PLrBNUX1TL8"style="text-decoration: none;"style="contact-link: color: white;">
				<svg width="21" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31 30" fill="none">
					<path d="M16 2C13.0837 2.00344 10.2878 3.16347 8.22564 5.22563C6.16348 7.28778 5.00345 10.0837 5.00001 13C4.99652 15.3832 5.77499 17.7018 7.21601 19.6C7.21601 19.6 7.51601 19.995 7.56501 20.052L16 30L24.439 20.047C24.483 19.994 24.784 19.6 24.784 19.6L24.785 19.597C26.2253 17.6996 27.0034 15.3821 27 13C26.9966 10.0837 25.8365 7.28778 23.7744 5.22563C21.7122 3.16347 18.9163 2.00344 16 2ZM16 17C15.2089 17 14.4355 16.7654 13.7777 16.3259C13.1199 15.8864 12.6072 15.2616 12.3045 14.5307C12.0017 13.7998 11.9225 12.9956 12.0769 12.2196C12.2312 11.4437 12.6122 10.731 13.1716 10.1716C13.731 9.61216 14.4437 9.2312 15.2197 9.07686C15.9956 8.92252 16.7998 9.00173 17.5307 9.30448C18.2616 9.60723 18.8864 10.1199 19.3259 10.7777C19.7654 11.4355 20 12.2089 20 13C19.9987 14.0605 19.5768 15.0771 18.827 15.827C18.0771 16.5768 17.0605 16.9987 16 17Z" fill="white"></path>
					</svg>
					<span class="Footer_text__WbIBr">Mirpur,Sector 6</span>
				</a>
			</p>
        </div>
		<div class="Footer_row__3viIl">
        <div class="contact-item">
			<a class="Footer_link__LDpN9" href="mailto:support@gmail.com"style="text-decoration: none;">
				<svg width="21" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 20" fill="none">
					<path d="M16.8348 3.33301H3.48752C2.5699 3.33301 1.82746 4.08301 1.82746 4.99967L1.81912 14.9997C1.81912 15.9163 2.5699 16.6663 3.48752 16.6663H16.8348C17.7524 16.6663 18.5032 15.9163 18.5032 14.9997V4.99967C18.5032 4.08301 17.7524 3.33301 16.8348 3.33301ZM16.5011 6.87467L10.6033 10.558C10.3363 10.7247 9.98596 10.7247 9.71902 10.558L3.82121 6.87467C3.73756 6.82777 3.66431 6.76439 3.60589 6.68839C3.54747 6.61238 3.5051 6.52532 3.48133 6.43248C3.45757 6.33964 3.45291 6.24295 3.46763 6.14826C3.48236 6.05357 3.51617 5.96285 3.56701 5.88159C3.61785 5.80033 3.68467 5.73022 3.76342 5.6755C3.84217 5.62079 3.93121 5.5826 4.02516 5.56326C4.11912 5.54391 4.21602 5.54381 4.31001 5.56296C4.404 5.58212 4.49313 5.62012 4.57199 5.67467L10.1611 9.16634L15.7503 5.67467C15.8292 5.62012 15.9183 5.58212 16.0123 5.56296C16.1063 5.54381 16.2032 5.54391 16.2971 5.56326C16.3911 5.5826 16.4801 5.62079 16.5589 5.6755C16.6376 5.73022 16.7044 5.80033 16.7553 5.88159C16.8061 5.96285 16.8399 6.05357 16.8546 6.14826C16.8694 6.24295 16.8647 6.33964 16.841 6.43248C16.8172 6.52532 16.7748 6.61238 16.7164 6.68839C16.658 6.76439 16.5847 6.82777 16.5011 6.87467Z" fill="white"></path>
					</svg>
					<span class="Footer_text__WbIBr">support@gmail.com</span>
					</a>
					</div>
             
		</div>
		<div class="Footer_row__3viIl">
        <div class="contact-item">
			<a class="Footer_link__LDpN9" href="tel:01726766053"style="text-decoration: none;">
				<svg width="21" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 20" fill="none">
					<path d="M16.6443 17.5C16.8946 17.5 17.1031 17.4167 17.2699 17.25C17.4368 17.0833 17.5202 16.875 17.5202 16.625V13.25C17.5202 13.0556 17.4576 12.8853 17.3325 12.7392C17.2074 12.5931 17.0475 12.4994 16.8528 12.4583L13.9748 11.875C13.7802 11.8472 13.5819 11.8647 13.3801 11.9275C13.1782 11.9903 13.015 12.0839 12.8904 12.2083L10.93 14.1667C9.87335 13.5278 8.90706 12.7708 8.03115 11.8958C7.15524 11.0208 6.42531 10.0833 5.84137 9.08333L7.84346 7.04167C7.96859 6.91667 8.04867 6.77417 8.08371 6.61417C8.11874 6.45417 8.12208 6.27722 8.09372 6.08333L7.55149 3.16667C7.52368 2.97222 7.43331 2.8125 7.28037 2.6875C7.12743 2.5625 6.95364 2.5 6.75899 2.5H3.38047C3.13021 2.5 2.92166 2.58333 2.75482 2.75C2.58798 2.91667 2.50456 3.125 2.50456 3.375C2.50456 5.16667 2.90442 6.91333 3.70415 8.615C4.50387 10.3167 5.56052 11.8236 6.87411 13.1358C8.1877 14.4481 9.69622 15.5036 11.3997 16.3025C13.1031 17.1014 14.8513 17.5006 16.6443 17.5Z" fill="white"></path>
				</svg>
				<span class="Footer_text__WbIBr">01726766053</span>
				</a>
				</div>
             
            
        </div>
    </div>
</section>
<br></br>
<br></br>
<br></br>
<br></br>



<!-- sign up section -->
<section class="Jahid">
    <div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<form action="sign-up" method="post">
					<div class="form sign-up">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" placeholder="Username" id="signup-username">
						</div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="email" placeholder="Email" id="signup-email">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Password" id="signup-password">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Confirm password" id="signup-confirm">
						</div>
						<button onclick="signUp()">Sign up</button>
						<p>
							<span>
								Already have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign in here
							</b>
						</p>
					</div>
					</form>
				</div>
			
			</div>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<form action="sign-in" method="post">
					<div class="form sign-in">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="email" placeholder="Username" id="email">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Password" id="password">
						</div>
						<button type="submit" onclick="auth(event)">Sign in</button>


	
						<p>
							<b>
								Forgot password?
							</b>
						</p>
						<p>
							<span>
								Don't have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign up here
							</b>
						</p>


						
					</div>
					</form>


				</div>
				<div class="form-wrapper">
		
				</div>
			</div>
			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Welcome
					</h2>
	
				</div>
				<div class="img sign-in">
		
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="img sign-up">
				
				</div>
				<div class="text sign-up">
					<h2>
						Join with us
					</h2>
	
				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>
    <script src="script.js"></script>
</section>

<div >
	


 
</body>
</html>
</body>
</html>
