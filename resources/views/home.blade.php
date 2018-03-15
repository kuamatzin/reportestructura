<!DOCTYPE HTML>
<!--
	Fractal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Fractal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="/css/ie9.css" /><![endif]-->
	</head>
	<body id="top">

		<!-- Header -->

		<!-- One -->
			<div class="menu" style="background-color: #fbfbfb;">
				<a href="/meetings">
					<button class="button special">Administrador</button>
				</a>
			</div>
			<section id="one" class="wrapper style2 special">
			
				<header class="major">
					<h2>La Información esta dividida en<br />
					15 municipios </h2>
			
					<select name="" id="mes" class="form-control" required="required">
						<option value="1">Enero</option>
						<option value="2">Febrero</option>
						<option value="3">Marzo</option>
						<option value="4">Abril</option>
						<option value="5">Mayo</option>
						<option value="6">Junio</option>
						<option value="7">Julio</option>
						<option value="8">Agosto</option>
						<option value="9">Septiembre</option>
						<option value="10">Octubre</option>
						<option value="11">Noviembre</option>
						<option value="12">Diciembre</option>
					</select>

				</header>
				<ul class="icons major">
					<li><span class="icon fa-camera-retro"><span class="label">Shoot</span></span></li>
					<li><span class="icon fa-refresh"><span class="label">Process</span></span></li>
					<li><span class="icon fa-cloud"><span class="label">Upload</span></span></li>
				</ul>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper">
				<div class="inner alt">
					<section class="spotlight">
						<div class="image"><img src="images/pic01.jpg" alt="" /></div>
						<div class="content">
							<a href="/stats/0/{{$month}}">
								<h3>Huauchinango</h3>
							</a>
							<h4>Ricardo Urzua Rivera</h4>
							<h4>Tel: 5554058005</h4>
							<p>Fecha: {{$month_text}}</h3>
							<p>No- de Reuniones: {{$stats->huauchinango($month)->count()}}<p>
							No- de Personas:  {{$stats->huauchinango($month)->sum('assistans')}}
							</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic02.jpg" alt="" /></div>
						<div class="content">
							<a href="/stats/1/{{$month}}">
							<h3>Zacatlán</h3>
						</a>
							<h4>Enrique Rivera Reyes</h4>
							<h4>Tel: 2222142445</h4>
							<p>Fecha: {{$month_text}}</h3>
							<p>No- de Reuniones: {{$stats->zacatlan($month)->count()}}<p>
							No- de Personas:  {{$stats->zacatlan($month)->sum('assistans')}}
						</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic03.jpg" alt="" /></div>
						<div class="content">
							<a href="/stats/2/{{$month}}">
							<h3>Teziutlán</h3>
						</a>
							<h4>Karla Victoria Martínez Gallegos</h4>
							<h4>Tel: 2311131439</h4>
							<p>Fecha: {{$month_text}}</h3>
							<p>No- de Reuniones: {{$stats->teziutlan($month)->count()}}<p>
							No- de Personas:  {{$stats->teziutlan($month)->sum('assistans')}}
							</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic04.jpg" alt="" /></div>
						<div class="content">
							<a href="/stats/3/{{$month}}">
							<h3>Ajalpan</h3>
						</a>
							<h4>Nestor Camarillo Medina</h4>
							<h4>Tel: 2227107014</h4>
							<p>Fecha: {{$month_text}}</h3>
							<p>No- de Reuniones: {{$stats->ajalpan($month)->count()}}<p>
							No- de Personas:  {{$stats->ajalpan($month)->sum('assistans')}}
							</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic05.jpg" alt="" /></div>
						<div class="content">
							<a href="/stats/4/{{$month}}">
							<h3>San Martín Texmelucan</h3>
						</a>
							<h4>Janet Graciela González</h4>
							<h4>Tel: 2221920611</h4>
							<p>Fecha: {{$month_text}}</h3>
							<p>No- de Reuniones: {{$stats->sanmartin($month)->count()}}<p>
							No- de Personas:  {{$stats->sanmartin($month)->sum('assistans')}}
							</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic06.jpg" alt="" /></div>
						<div class="content">
							<a href="/stats/5/{{$month}}">
							<h3>Puebla 6</h3>
						</a>
							<h4>Soraya Cordova Moran</h4>
							<h4>Tel: 2225195120</h4>
							<p>Fecha: {{$month_text}}</h3>
							<p>No- de Reuniones: {{$stats->puebla_seis($month)->count()}}<p>
							No- de Personas:  {{$stats->puebla_seis($month)->sum('assistans')}}
							</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic07.jpg" alt="" /></div>
						<div class="content">
							<a href="/stats/6/{{$month}}">
							<h3>Tepeaca</h3>
						</a>
							<h4>Humberto Aguilar Viveros</h4>
							<h4>Tel: 2225057900</h4>
							<p>Fecha: {{$month_text}}</h3>
							<p>No- de Reuniones: {{$stats->tepeaca($month)->count()}}<p>
							No- de Personas:  {{$stats->tepeaca($month)->sum('assistans')}}
							</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic08.jpg" alt="" /></div>
						<div class="content">
							<a href="/stats/7/{{$month}}">
							<h3>Chalchicomula de Sesma</h3
							</a>>
							<h4>Juan Navarro Rodriguez</h4>
							<h4>Tel: 2454504361</h4>
							<p>Fecha: {{$month_text}}</h3>
							<p>No- de Reuniones: {{$stats->chalchicomula($month)->count()}}<p>
							No- de Personas:  {{$stats->chalchicomula($month)->sum('assistans')}}
							</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic09.jpg" alt="" /></div>
						<div class="content">
							<a href="/stats/8/{{$month}}">
							<h3>Puebla 9</h3>
						</a>
							<h4>Lidia Felisa López Aguirre</h4>
							<h4>Tel: 2222121831</h4>
							<p>Fecha: {{$month_text}}</h3>
							<p>No- de Reuniones: {{$stats->puebla_nueve($month)->count()}}<p>
							No- de Personas:  {{$stats->puebla_nueve($month)->sum('assistans')}}
							</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic10.jpg" alt="" /></div>
						<div class="content">
							<a href="/stats/9/{{$month}}">
							<h3>Cholula</h3>
						</a>
							<h4>Vanessa Barahona</h4>
							<h4>Tel: 2221602468</h4>
							<p>Fecha: {{$month_text}}</h3>
							<p>No- de Reuniones: {{$stats->cholula($month)->count()}}<p>
							No- de Personas:  {{$stats->cholula($month)->sum('assistans')}}
							</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic11.jpg" alt="" /></div>
						<div class="content">
							<a href="/stats/10/{{$month}}">
							<h3>Puebla 11</h3>
						</a>
							<h4>Ramón Fernández Solana</h4>
							<h4>Tel: 2222999337</h4>
							<p>Fecha: {{$month_text}}</h3>
							<p>No- de Reuniones: {{$stats->puebla_once($month)->count()}}<p>
							No- de Personas:  {{$stats->puebla_once($month)->sum('assistans')}}
							</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic12.jpg" alt="" /></div>
						<div class="content">
							<a href="/stats/11/{{$month}}">
							<h3>Puebla 12</h3>
						</a>
							<h4>Karina Romero Alcalá</h4>
							<h4>Tel: 2223409117</h4>
							<p>Fecha: {{$month_text}}</h3>
							<p>No- de Reuniones: {{$stats->puebla_doce($month)->count()}}<p>
							No- de Personas:  {{$stats->puebla_doce($month)->sum('assistans')}}
							</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic13.jpg" alt="" /></div>
						<div class="content">
							<a href="/stats/12/{{$month}}">
							<h3>Atlixco</h3>
						</a>
							<h4>Juan Manuel Vega Rayet</h4>
							<h4>Tel: 2434350087</h4>
							<p>Fecha: {{$month_text}}</h3>
							<p>No- de Reuniones: {{$stats->atlixco($month)->count()}}<p>
							No- de Personas:  {{$stats->atlixco($month)->sum('assistans')}}
							</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic14.jpg" alt="" /></div>
						<div class="content">
							<a href="/stats/13/{{$month}}">
							<h3>Acatlán</h3>
						</a>
							<h4>Maritza Marín Marcelo</h4>
							<h4>Tel: 2223232143</h4>
							<p>Fecha: {{$month_text}}</h3>
							<p>No- de Reuniones: {{$stats->acatlan($month)->count()}}<p>
							No- de Personas:  {{$stats->acatlan($month)->sum('assistans')}}
						</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic15.jpg" alt="" /></div>
						<div class="content">
							<a href="/stats/14/{{$month}}">
							<h3>Tehuacán</h3>
						</a>
							<h4>Lisandro Campos Cordova</h4>
							<h4>Tel: 2241030269</h4>
							<p>Fecha: {{$month_text}}</h3>
							<p>No- de Reuniones: {{$stats->tehuacan($month)->count()}}<p>
							No- de Personas:  {{$stats->tehuacan($month)->sum('assistans')}}
						</div>
					</section>
					<section class="special">
						<ul class="icons labeled">
							<li><span class="icon fa-level-up"><span class="label">No- de Reuniones: {{$stats->total_meetings($month)->count()}}</span></span></li>
							<li><span class="icon fa-bar-chart"><span class="label">No- de Personas: {{$stats->total_meetings($month)->sum('assistans')}}</span></span></li>
							<li><span class="icon fa-calendar"><span class="label">{{$month_text}}</span></span></li>
							</li>
						</ul>
					</section>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2 special">
				<header class="major">
					<h2></h2>
					<p></p>
				</header>
				<ul class="actions">
					<li><a href="#" class="button special icon fa-download">PDF REPORTE</a></li>
					<li><a href="#" class="button">ENVIA REPORTE</a></li>
				</ul>
			</section>

		<!-- Four -->
		<!--
			<section id="four" class="wrapper">
				<div class="inner">

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
							<div class="6u 12u$(medium)">
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
							<div class="6u$ 12u$(medium)">
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
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
								</ul>
							</div>
						</div>
						<h5>Actions</h5>
						<div class="row">
							<div class="6u 12u$(medium)">
								<ul class="actions">
									<li><a href="#" class="button special">Default</a></li>
									<li><a href="#" class="button">Default</a></li>
								</ul>
								<ul class="actions small">
									<li><a href="#" class="button special small">Small</a></li>
									<li><a href="#" class="button small">Small</a></li>
								</ul>
								<ul class="actions vertical">
									<li><a href="#" class="button special">Default</a></li>
									<li><a href="#" class="button">Default</a></li>
								</ul>
								<ul class="actions vertical small">
									<li><a href="#" class="button special small">Small</a></li>
									<li><a href="#" class="button small">Small</a></li>
								</ul>
							</div>
							<div class="6u 12u$(medium)">
								<ul class="actions vertical">
									<li><a href="#" class="button special fit">Default</a></li>
									<li><a href="#" class="button fit">Default</a></li>
								</ul>
								<ul class="actions vertical small">
									<li><a href="#" class="button special small fit">Small</a></li>
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
							<li><a href="#" class="button special">Special</a></li>
							<li><a href="#" class="button">Default</a></li>
						</ul>
						<ul class="actions">
							<li><a href="#" class="button big">Big</a></li>
							<li><a href="#" class="button">Default</a></li>
							<li><a href="#" class="button small">Small</a></li>
						</ul>
						<ul class="actions fit">
							<li><a href="#" class="button fit">Fit</a></li>
							<li><a href="#" class="button special fit">Fit</a></li>
							<li><a href="#" class="button fit">Fit</a></li>
						</ul>
						<ul class="actions fit small">
							<li><a href="#" class="button special fit small">Fit + Small</a></li>
							<li><a href="#" class="button fit small">Fit + Small</a></li>
							<li><a href="#" class="button special fit small">Fit + Small</a></li>
						</ul>
						<ul class="actions">
							<li><a href="#" class="button special icon fa-download">Icon</a></li>
							<li><a href="#" class="button icon fa-download">Icon</a></li>
						</ul>
						<ul class="actions">
							<li><span class="button special disabled">Disabled</span></li>
							<li><span class="button disabled">Disabled</span></li>
						</ul>
					</section>

					<section>
						<h4>Form</h4>
						<form method="post" action="#">
							<div class="row uniform">
								<div class="6u 12u$(xsmall)">
									<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
								</div>
								<div class="12u$">
									<div class="select-wrapper">
										<select name="demo-category" id="demo-category">
											<option value="">- Category -</option>
											<option value="1">Manufacturing</option>
											<option value="1">Shipping</option>
											<option value="1">Administration</option>
											<option value="1">Human Resources</option>
										</select>
									</div>
								</div>
								<div class="4u 12u$(small)">
									<input type="radio" id="demo-priority-low" name="demo-priority" checked>
									<label for="demo-priority-low">Low</label>
								</div>
								<div class="4u 12u$(small)">
									<input type="radio" id="demo-priority-normal" name="demo-priority">
									<label for="demo-priority-normal">Normal</label>
								</div>
								<div class="4u$ 12u$(small)">
									<input type="radio" id="demo-priority-high" name="demo-priority">
									<label for="demo-priority-high">High</label>
								</div>
								<div class="6u 12u$(small)">
									<input type="checkbox" id="demo-copy" name="demo-copy">
									<label for="demo-copy">Email me a copy</label>
								</div>
								<div class="6u$ 12u$(small)">
									<input type="checkbox" id="demo-human" name="demo-human" checked>
									<label for="demo-human">Not a robot</label>
								</div>
								<div class="12u$">
									<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
								</div>
								<div class="12u$">
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
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
							<div class="row uniform">
								<div class="12u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
							</div>
						</div>
						<h5>Left &amp; Right</h5>
						<p><span class="image left"><img src="images/pic05.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
						<p><span class="image right"><img src="images/pic05.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
					</section>

				</div>
			</section>
		-->

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-"><span class="label"></span></a></li>
					<li><a href="#" class="icon fa-"><span class="label"></span></a></li>
					<li><a href="#" class="icon fa-"><span class="label"></span></a></li>
				</ul>
				<p class="copyright">&copy; Untitled. Credits: <a href="http://html5up.net">CURSIVA</a></p>
			</footer>

		<!-- Scripts -->
			<script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/skel.min.js"></script>
			<script src="/js/util.js"></script>
			<!--[if lte IE 8]><script src="/js/ie/respond.min.js"></script><![endif]-->
			<script src="/js/main.js"></script>
			<script>
			$('#mes').val({{$month}})
			$('#mes').change(function(value){
				var mes = $('#mes').val()
				window.location = '/home?month=' + mes
			})
			</script>
	</body>
</html>
