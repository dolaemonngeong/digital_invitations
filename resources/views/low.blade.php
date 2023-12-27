<!DOCTYPE HTML>
<!--
	Highlights by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html> 

<head>
	<title>Joana's Sweet Seventeen Dinner</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="\../css/low.css" />
	<script src="https://kit.fontawesome.com/20d53b59d8.js" crossorigin="anonymous"></script>
</head>

<body class="is-preload">

	<!-- Header -->
	<section id="header">
		<header class="major">
			<p class="customFont">Joana Sherren Hindarto</p>
			<p>Sweet Seventeen Dinner</a></p>
		
		</header>
		<div onclick="toggleAudio()" id="music-button" style="z-index: +40; background: none; cursor:pointer; position:fixed; top:3vh; right:3vw;">
            <img src="images/Mute Icon.png" width="40" height="40" alt="" />
        </div>

		<div onclick="toggleAudio()" id="music-button"  class="container">
			<ul class="actions special">
				<li>
					<a href="#one" class="button primary scrolly">Open</a>
				</li>
			</ul>
		</div>
	</section>

	<!-- One -->
	<section id="one" class="main special">
		<div class="container">
			<!-- <span class="image fit primary"><img src="images/bg.jpg" alt="" /></span> -->
			<div class="content">
				<!-- <header class="major">
					<h2>Who I am</h2>
				</header> -->
				<div>
					<i class="fa-solid fa-calendar"></i>
					<p class="customFont2">Saturday, December 2nd 2023</p>
				</div>
				<div>
					<i class="fa-solid fa-clock"></i>
					<p class="customFont2">06:00 PM</p>
				</div>
				<div>
					<i class="fa-solid fa-location-dot"></i>
					<p class="customFont2">Cempaka Ballroom Westin</p>
				</div>

			</div>
			<a href="#two" class="goto-next scrolly">Next</a>
		</div>
	</section>
	<!-- Three -->
	<section id="three" class="main special">
		<div class="container">
			<!-- <span class="image fit primary"><img src="images/bg.jpg" alt="" /></span> -->
			<div class="content">
				<div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;">
					<div id="g-mapdisplay" style="height:100%; width:100%;max-width:100%;"><iframe
							style="height:100%;width:100%;border:0;" frameborder="0"
							src="https://www.google.com/maps/embed/v1/place?q=The+Westin+Surabaya,+Jl.+Raya+Lontar,+Puncak+Indah,+Surabaya,+East+Java,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
					</div><a class="google-map-code-enabler" href="https://www.bootstrapskins.com/themes"
						id="authorize-maps-data">premium bootstrap themes</a>
					<style>
						#g-mapdisplay img {
							max-height: none;
							max-width: none !important;
							background: none !important;
						}
					</style>
				</div>
				<!-- <iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.3072263539725!2d113.69831941461759!3d-8.171771484161706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6943ad665a21f%3A0x8813d4343bd3da92!2sGereja%20Katolik%20Santo%20Yusup!5e0!3m2!1sen!2sid!4v1666455067728!5m2!1sen!2sid"
					width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade" id="location"></iframe> -->

				<!-- <header class="major">
							<h2>One more thing</h2>
						</header>
						<p>Aliquam ante ac id. Adipiscing interdum lorem praesent fusce pellentesque arcu feugiat. Consequat sed ultricies rutrum. Sed adipiscing eu amet interdum lorem blandit vis ac commodo aliquet integer vulputate phasellus lorem ipsum dolor lorem magna consequat sed etiam adipiscing interdum.</p> -->
			</div>
			<a href="#footer" class="goto-next scrolly">Next</a>
		</div>
	</section>
	<!-- Two -->
	<section id="two" class="main special">
		<div class="container">
			<!-- <span class="image fit primary"><img src="images/bg.jpg" alt="" /></span> -->
			<div class="content">
				<header class="major">
					<h2>RSVP</h2>
				</header>
				<p>Please RSVP before 12th December</p>
				<ul class="actions special">
					<li>
						<a href="#myModal" class="button primary scrolly" id="openModalBtn">Open</a>
					</li>
				</ul>
			</div>
			<a href="#three" class="goto-next scrolly">Next</a>
		</div>
	</section>
	<div id="myModal" class="modal">
		<div class="modal-content">
		  <span class="close" id="closeModalBtn">&times;</span>
		  <form id="rsvpForm" action="\../php/main.php" method="post">
			<label for="name">Your Name:</label>
			<input type="text" id="Nama" name="Nama" required>
			<label for="response">Will you be attending?</label>
			<select id="Kedatangan" name="Kedatangan" required>
			  <option value="yes">Yes, I'd like to come</option>
			  <option value="no">Sorry, I can't</option>
			</select>
	  
			<button type="submit">Submit RSVP</button>
		  </form>
		</div>
	  </div>
	
	  <script src="script.js"></script>
	<!-- Four -->
	<!--
			<section id="four" class="main">
				<div class="container">
					<div class="content">
						<header class="major">
							<h2>Elements</h2>
						</header>
						<section>
							<h4>Text</h4>
							<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
							This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
							This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
							<hr />
							<header>
								<h4>Heading with a Subtitle</h4>
								<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
							</header>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							<header>
								<h5>Heading with a Subtitle</h5>
								<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
							</header>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							<hr />
							<h2>Heading Level 2</h2>
							<h3>Heading Level 3</h3>
							<h4>Heading Level 4</h4>
							<h5>Heading Level 5</h5>
							<h6>Heading Level 6</h6>
							<hr />
							<h5>Blockquote</h5>
							<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
							<h5>Preformatted</h5>
							<pre><code>i = 0;

while (!deck.isInOrder()) {
  print 'Iteration ' + i;
  deck.shuffle();
  i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
						</section>

						<section>
							<h4>Lists</h4>
							<div class="row">
								<div class="col-6 col-12-medium">
									<h5>Unordered</h5>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>
									<h5>Alternate</h5>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>
								</div>
								<div class="col-6 col-12-medium">
									<h5>Ordered</h5>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h5>Icons</h5>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
									</ul>
								</div>
							</div>
							<h5>Actions</h5>
							<ul class="actions">
								<li><a href="#" class="button primary">Default</a></li>
								<li><a href="#" class="button">Default</a></li>
							</ul>
							<ul class="actions small">
								<li><a href="#" class="button primary small">Small</a></li>
								<li><a href="#" class="button small">Small</a></li>
							</ul>
							<div class="row">
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</div>
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary small">Small</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
								</div>
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary fit">Default</a></li>
										<li><a href="#" class="button fit">Default</a></li>
									</ul>
								</div>
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary small fit">Small</a></li>
										<li><a href="#" class="button small fit">Small</a></li>
									</ul>
								</div>
							</div>
						</section>

						<section>
							<h4>Table</h4>
							<h5>Default</h5>
							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Item One</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Two</td>
											<td>Vis ac commodo adipiscing arcu aliquet.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Three</td>
											<td> Morbi faucibus arcu accumsan lorem.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Four</td>
											<td>Vitae integer tempus condimentum.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Five</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2"></td>
											<td>100.00</td>
										</tr>
									</tfoot>
								</table>
							</div>

							<h5>Alternate</h5>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Item One</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Two</td>
											<td>Vis ac commodo adipiscing arcu aliquet.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Three</td>
											<td> Morbi faucibus arcu accumsan lorem.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Four</td>
											<td>Vitae integer tempus condimentum.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Five</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2"></td>
											<td>100.00</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</section>

						<section>
							<h4>Buttons</h4>
							<ul class="actions">
								<li><a href="#" class="button primary">Primary</a></li>
								<li><a href="#" class="button">Default</a></li>
							</ul>
							<ul class="actions">
								<li><a href="#" class="button">Default</a></li>
								<li><a href="#" class="button small">Small</a></li>
							</ul>
							<ul class="actions fit">
								<li><a href="#" class="button primary fit">Fit</a></li>
								<li><a href="#" class="button fit">Fit</a></li>
							</ul>
							<ul class="actions fit small">
								<li><a href="#" class="button primary fit small">Fit + Small</a></li>
								<li><a href="#" class="button fit small">Fit + Small</a></li>
							</ul>
							<ul class="actions">
								<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
								<li><a href="#" class="button icon solid fa-download">Icon</a></li>
							</ul>
							<ul class="actions">
								<li><span class="button primary disabled">Disabled</span></li>
								<li><span class="button disabled">Disabled</span></li>
							</ul>
						</section>

						<section>
							<h4>Form</h4>
							<form method="post" action="#">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
									</div>
									<div class="col-12">
										<select name="demo-category" id="demo-category">
											<option value="">- Category -</option>
											<option value="1">Manufacturing</option>
											<option value="1">Shipping</option>
											<option value="1">Administration</option>
											<option value="1">Human Resources</option>
										</select>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="demo-priority-low" name="demo-priority" checked>
										<label for="demo-priority-low">Low</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="demo-priority-normal" name="demo-priority">
										<label for="demo-priority-normal">Normal</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="demo-priority-high" name="demo-priority">
										<label for="demo-priority-high">High</label>
									</div>
									<div class="col-6 col-12-small">
										<input type="checkbox" id="demo-copy" name="demo-copy">
										<label for="demo-copy">Email me a copy</label>
									</div>
									<div class="col-6 col-12-small">
										<input type="checkbox" id="demo-human" name="demo-human" checked>
										<label for="demo-human">Not a robot</label>
									</div>
									<div class="col-12">
										<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>

						<section>
							<h4>Image</h4>
							<h5>Fit</h5>
							<div class="box alt">
								<div class="row gtr-uniform gtr-50">
									<div class="col-12"><span class="image fit"><img src="images/bg.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
								</div>
							</div>
							<h5>Left &amp; Right</h5>
							<p><span class="image left"><img src="images/pic05.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
							<p><span class="image right"><img src="images/pic05.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
						</section>

					</div>
					<a href="#footer" class="goto-next scrolly">Next</a>
				</div>
			</section>
		-->

	<!-- Footer -->
	<section id="footer">
		<div class="container">
			<header class="major">
				<h2>Best Wishes</h2>
			</header>
			<form method="post" action="\../php/wish.php" name="wishesForm" id="wishesForm">
				<div class="row gtr-uniform">
					<div class="col-12"><input type="text" name="name" id="name" placeholder="Name" />
					</div>
					<!-- <div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" />
					</div> -->
					<div class="col-12"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea>
					</div>
					<div class="col-12">
						<ul class="actions special">
							<li><input type="submit" value="Send" class="primary" onclick="clearAndReload()"/></li>
						</ul>
					</div>
				</div>
			</form>
		</div>
		<script>
    function clearAndReload() {
        
        // Merefresh halaman
        location.reload();
    }
</script>
		<!-- ICON MEDSOS IVITEE -->
		<footer>
			<ul class="icons">
				<li><a href="https://instagram.com/ivitee.id?igshid=YzAwZjE1ZTI0Zg==" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon brands alt fa-whatsapp"><span class="label">Whatsapp</span></a></li>
			</ul>
			<ul class="copyright">
				<!-- <li>Made By:</li>
				<br> -->
				<img src="\../images/logo.png" width="100" height="100">
				<!-- <li>&copy; Untitled</li> -->
				<!-- <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				<li>Demo Images: <a href="http://unsplash.com">Unsplash</a></li> -->
			</ul>
		</footer>
	</section>

	<!-- Scripts -->
	<script src="\../js/jquery.min.js"></script>
	<script src="\../js/jquery.scrollex.min.js"></script>
	<script src="\../js/jquery.scrolly.min.js"></script>
	<script src="\../js/browser.min.js"></script>
	<script src="\../js/breakpoints.min.js"></script>
	<script src="\../js/util.js"></script>
	<script src="\../js/main.js"></script>
	<script src="\../php/main.php"></script>
	<script src="\../php/wish.php"></script>

</body>

</html>