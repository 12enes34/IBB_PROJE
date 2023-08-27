<!DOCTYPE HTML>
<!--
	Directive by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<style>
	/* ... Diğer stil kuralları ... */
	.containere {
		display: flex;
		flex-direction: row;
		height: 100vh;
		max-width: 1000px;
		margin: 0 auto;
	}

	.columne {
		flex: 1;
		display: flex;
		flex-direction: column;
	}

	.sub-dive {
		flex: 1;
		border: 1px solid black;
		margin: 5px;
		text-align: center;
		padding: 10px;
		transition: transform 0.3s, background-color 0.3s;
	}

	.sub-dive2 {
		flex: 1;
		border: 1px solid black;
		margin: 5px;
		text-align: center;
		padding: 10px;
		transition: transform 0.3s, background-color 0.3s;
	}

	.sub-dive:hover {
		background-color: lightgray;
		transform: scale(1.1);
	}

	.sub-dive img {
		max-width: 100%;
		/* Resmin genişliği sınırlanacak */
		height: auto;
		/* Orantılı olarak yüksekliği ayarlanacak */
	}


	.sub-dive {
		flex: 1;
		border: 1px solid black;
		margin: 5px;
		text-align: center;
		padding: 10px;
		transition: transform 0.3s, background-color 0.3s;
		
	}

	.sub-dive:hover {
		background-color: lightgray;
		transform: scale(1.1);
	}

	.sub-dive img {
		max-width: 100%;
		/* Resmin genişliği sınırlanacak */
		height: auto;
		/* Orantılı olarak yüksekliği ayarlanacak */
	}
</style>

<head>
	<title>Directive by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

	<!-- Header -->
	<div id="header" style="text-align: center;">
		<div
			style="width: 256px; height: 256px;display: inline-block;background-image: url(images/noun-istanbul-3587.png);">
		</div>
		<h1>ROTAMIZ İSTANBUL</h1>
		<p>İstanbul’u yakından tanımak isteyen
			<br />
			her noktasına hakim olmayı hedefleyenler için hazırlanmıştır.
		</p>
	</div>

	<!-- Main -->
	<div id="main">

		<header class="major container medium">
			<h2>İstanbul’un tarihi saraylarını,


				kulelerini binbir türlü harikalarını

				ve bunların yanında yeme içme ihtiyaçlarınızı karşılayabileceğiniz tesislerini keşfetmenize yardımcı
				olmayı amaçlıyoruz.</h2>
			<!--
					<p>Tellus erat mauris ipsum fermentum<br />
					etiam vivamus nunc nibh morbi.</p>
					-->
		</header>

		<div class="containere">
			<div class="columne">
				<div class="sub-dive" style="background-color: rgb(62, 102, 85);">
					<div style="display: flex; align-items: center; justify-content: center;padding: 80px;">
						<img src="images/landscape.png" alt="">
					</div>
				</div>
				<div class="sub-dive2"> <br><br><br>İmparatorluklara ev sahipliği yapmış bu güzel şehrin tüm tarihi
					eserlerini keşfedebilirsiniz.
				</div>
				<div class="sub-dive" style="background-color: rgb(140, 52, 120);">
					<div style="display: flex; align-items: center; justify-content: center;padding: 80px;">
						<img src="images/restaurant.png" alt="">
					</div>
				</div>
			</div>
			<div class="columne">
				<div class="sub-dive2"><br><br><br>Parklar, korular, kent ve hatıra ormanları dahil olmak üzere doğayla
					iç içe olabileceğiniz yeşillik alanları bulabilirsiniz
				</div>
				<div class="sub-dive" style="background-color: rgb(157, 109, 105);">
					<div style="display: flex; align-items: center; justify-content: center;padding: 80px;">
						<img src="images/museum (2).png" alt="">
					</div>
				</div>
				<div class="sub-dive2"><br><br><br> Uygun fiyatlarla karşılaşacağınız İBB’nin sosyal tesislerine
					ulaşabilirsiniz.
				</div>
			</div>
		</div>




		<!--
				<div class="box container">
					<header>
						<h2>A lot of generic stuff</h2>
					</header>
					<section>
						<header>
							<h3>Paragraph</h3>
							<p>This is the subtitle for this particular heading</p>
						</header>
						<p>Phasellus nisl nisl, varius id <sup>porttitor sed pellentesque</sup> ac orci. Pellentesque
						habitant <strong>strong</strong> tristique <b>bold</b> et netus <i>italic</i> malesuada <em>emphasized</em> ac turpis egestas. Morbi
						leo suscipit ut. Praesent <sub>id turpis vitae</sub> turpis pretium ultricies. Vestibulum sit
						amet risus elit.</p>
					</section>
					<section>
						<header>
							<h3>Blockquote</h3>
						</header>
						<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget.
						tempus euismod. Vestibulum ante ipsum primis in faucibus.</blockquote>
					</section>
					<section>
						<header>
							<h3>Divider</h3>
						</header>
						<p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
						ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
						facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
						tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
						posuere cubilia.</p>
						<hr />
						<p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
						ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
						facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
						tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
						posuere cubilia.</p>
					</section>
					<section>
						<header>
							<h3>Unordered List</h3>
						</header>
						<ul class="default">
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						</ul>
					</section>
					<section>
						<header>
							<h3>Ordered List</h3>
						</header>
						<ol class="default">
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						</ol>
					</section>
					<section>
						<header>
							<h3>Table</h3>
						</header>
						<div class="table-wrapper">
							<table class="default">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Description</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>45815</td>
										<td>Something</td>
										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>24524</td>
										<td>Nothing</td>
										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>45815</td>
										<td>Something</td>
										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>24524</td>
										<td>Nothing</td>
										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
										<td>19.99</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="3"></td>
										<td>100.00</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</section>
					<section>
						<header>
							<h3>Form</h3>
						</header>
						<form method="post" action="#">
							<div class="row">
								<div class="col-6 col-12-mobilep">
									<label for="name">Name</label>
									<input class="text" type="text" name="name" id="name" value="" placeholder="John Doe" />
								</div>
								<div class="col-6 col-12-mobilep">
									<label for="email">Email</label>
									<input class="text" type="text" name="email" id="email" value="" placeholder="johndoe@domain.tld" />
								</div>
								<div class="col-12">
									<label for="subject">Subject</label>
									<input class="text" type="text" name="subject" id="subject" value="" placeholder="Enter your subject" />
								</div>
								<div class="col-12">
									<label for="subject">Message</label>
									<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
								</div>
								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" value="Send" /></li>
										<li><input type="reset" value="Reset" class="alt" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
				</div>
				-->

		<footer class="major container medium">
			<h3>ŞİMDİ PLAN SIRASI SİZDE
			</h3>
			<p>Gezme rotanızı oluşturabilmenizi ve İstanbul’un her köşesini keşfedebilmenizi sağlayacak bir sonraki
				adıma geçmek için butona tıklayın.</p>
			<ul class="actions special">

				<li><a href="index2.php" class="button">Rotanı oluştur</a></li>
			</ul>
		</footer>

	</div>

	<!-- Footer -->
	<div id="footer">
		<div class="container medium">

			<header class="major last">
				<h2>Bize Ulaşın</h2>
			</header>

		

			<div id="disqus_thread"></div>
			<script>
				/**           
				*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
				/*
				var disqus_config = function () {
				this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
				this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				*/
				(function () { // DON'T EDIT BELOW THIS LINE
					var d = document, s = d.createElement('script');
					s.src = 'https://http-127-0-0-1-5501-index-html-4.disqus.com/embed.js';
					s.setAttribute('data-timestamp', +new Date());
					(d.head || d.body).appendChild(s);
				})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered
					by Disqus.</a></noscript>

			<ul class="icons">
				<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
				<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
			</ul>

			<ul class="copyright">
				
			</ul>
			<p class="copyright">Bu web sitesi İstanbul Büyükşehir Belediyesi Akıllı Şehir Müdürlüğü stajyerleri <a href="https://www.linkedin.com/in/enes-%C3%BCnver-01994a224/">Enes Ünver</a> ,  <a href="https://www.linkedin.com/in/hatice-%C3%A7a%C4%9Flar-167a3a245/">Hatice Çağlar</a>, <a href="https://www.linkedin.com/in/%C3%B6zlem-ko%C3%A7-914146222/">Özlem Koç</a>  ve <a href="https://www.linkedin.com/in/%C5%9Fimal-ekiz-9211b5220/">Şimal Ekiz</a> tarafından tasarlanmıştır. </p>
		</div>
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>