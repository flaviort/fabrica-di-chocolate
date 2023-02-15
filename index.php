<!DOCTYPE html>
<html lang="pt-BR">

	<?php include('includes/head.php'); ?>

	<body class="home">
		<div class="body-overflow">

			<header>
				<?php include('includes/fs-menu.php'); ?>
			</header>

			<main id="main-content">

				<div class="top-bg">

					<?php include('includes/top-menu.php'); ?>

					<section id="banner">
						<div class="container container-big">
							<div class="row">
								<div class="col-12">

									<p class="text-small copyright wow fadeIn">
										Todos os direitos reservados. 2004 - <?php echo date("Y"); ?>
									</p>

									<div class="top-banner-slider swiper-container wow fadeIn">
										<div class="swiper-wrapper">

											<div class="swiper-slide">
												<div class="box">

													<img src="assets/img/banner-01.jpg" alt="Fábrica di Chocolate" class="faded">

													<div class="text">

														<h2 class="text-bigger">
															<strong>Estamos a todo vapor!</strong>
														</h2>

														<p class="text-big">
															Espalhando felicidade desde 2004
														</p>

													</div>

												</div>
											</div>

											<div class="swiper-slide">
												<div class="box">
													<img src="assets/img/banner-02.jpg" alt="Fábrica di Chocolate">
												</div>
											</div>

											<div class="swiper-slide">
												<div class="box">
													<img src="assets/img/banner-03.jpg" alt="Fábrica di Chocolate">
												</div>
											</div>

											<div class="swiper-slide">
												<div class="box">
													<img src="assets/img/banner-04.jpg" alt="Fábrica di Chocolate">
												</div>
											</div>

										</div>
									</div>

									<div class="top-banner-nav wow fadeIn"></div>

								</div>
							</div>
						</div>
					</section>

					<section id="numbers">
						<div class="container">
							<div class="row">

								<div class="col-sm-6 col-lg-3 wow fadeInUp">
									<div class="box">

										<div class="line top">
											<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
										</div>

										<div class="wrapper">

											<p class="text-bigger">
												+<span data-value="70">70</span>
											</p>

											<p class="text-medium">
												Mais de 70 quiosques espalhadas por todo Brasil
											</p>

										</div>

										<div class="line bottom">
											<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
										</div>

									</div>
								</div>

								<div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".1s">
									<div class="box">

										<div class="line top">
											<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
										</div>

										<div class="wrapper">

											<p class="text-bigger">
												+<span data-value="35">35</span>
											</p>

											<p class="text-medium">
												Mais de 35 toneladas de fondue por mês
											</p>

										</div>

										<div class="line bottom">
											<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
										</div>

									</div>
								</div>

								<div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".2s">
									<div class="box">

										<div class="line top">
											<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
										</div>

										<div class="wrapper">

											<p class="text-bigger">
												+<span data-value="18">18</span>
											</p>

											<p class="text-medium">
												Mais de 18 anos de experiência no mercado
											</p>

										</div>

										<div class="line bottom">
											<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
										</div>

									</div>
								</div>

								<div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".3s">
									<div class="box">

										<div class="line top">
											<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
										</div>

										<div class="wrapper">

											<p class="text-bigger">
												+<span data-value="150">150</span>
											</p>

											<p class="text-medium">
												Mais de 150 cascatas de chocolate espalhadas pelo Brasil
											</p>

										</div>

										<div class="line bottom">
											<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
										</div>

									</div>
								</div>

							</div>
						</div>
					</section>

				</div>

				<section id="about">

					<div class="chocolate">
						<?php echo file_get_contents("assets/svg/chocolate.svg"); ?>
					</div>

					<div class="content">
						<div class="container">
							<div class="row">

								<div class="col-12 top">

									<h2 class="lozenge-title text-bigger wow fadeInUp">

										<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

										<span>
											Um pouquinho sobre nós
										</span>

										<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

									</h2>

								</div>

								<div class="col-xl-6 left">

									<p class="text-medium desc wow fadeIn">
										A Fábrica Di Chocolate é uma marca brasileira, criada em Joinville, conhecida por ser o polo industrial atuante em relações nacionais e internacionais, no sul do país. A Fábrica Di Chocolate foi criada a partir do conceito “fondue express”. A empresa desenvolve produtos à base de chocolates e frutas selecionadas a preços acessíveis a todas as classes sociais e com a conveniência do serviço “fast-food”.<br /><br />

										Em 2003 iniciou-se os estudos para desenvolvimento de produtos à base de frutas com chocolates nobres para em 2004  ser criada a empresa Fábrica Di Chocolate em Joinville - Santa Catarina. Já em 2006 foi aprovado pela ABF (Associação Brasileira de Franchising), a inicialização de comercialização de unidades Franqueadas inaugurando assim a primeira unidade franqueada em Curitiba, no Paraná. De 2007 a 2010 inicia-se a expansão internacional com a inauguração de unidades na Espanha, Japão, Canadá República Dominicana e Venezuela.
									</p>

									<div class="bottom wow fadeIn">

										<?php echo file_get_contents("assets/svg/marca-brasileira.svg"); ?>

										<p>
											<b>Desde 2004</b>
										</p>

									</div>

								</div>

								<div class="col-xl-6 right">

									<p class="text-bigger wow fadeInUp">
										<strong>
											A fábrica não <br />
											para. 18 anos <br />
											a todo vapor!
										</strong>
									</p>

									<div class="cf"></div>

									<div class="circle wow fadeInUp">
										<?php echo file_get_contents("assets/svg/chocolate-belga.svg"); ?>
									</div>

									<div class="cf"></div>

									<div class="line wow fadeIn"></div>

									<img src="assets/img/products.png" alt="produtos" class="products wow fadeInUp">
									
								</div>

							</div>
						</div>
					</div>
				</section>

				<section id="cards">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<h2 class="lozenge-title text-bigger wow fadeInUp">

									<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

									<span>
										Um doce por um sorriso
									</span>

									<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

								</h2>

								<div class="cards-slider swiper-container text-medium wow fadeIn">
									<div class="swiper-wrapper">

										<div class="swiper-slide">
											<div class="box">

												<div class="icon">
													<?php echo file_get_contents("assets/svg/fondue.svg"); ?>
												</div>

												<div class="line">
													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
												</div>

												<p>
													<strong>Fondue</strong>
												</p>

											</div>
										</div>

										<div class="swiper-slide">
											<div class="box">

												<div class="icon">
													<?php echo file_get_contents("assets/svg/acai.svg"); ?>
												</div>

												<div class="line">
													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
												</div>

												<p>
													<strong>Açaí</strong>
												</p>

											</div>
										</div>

										<div class="swiper-slide">
											<div class="box">

												<div class="icon">
													<?php echo file_get_contents("assets/svg/gelato.svg"); ?>
												</div>

												<div class="line">
													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
												</div>

												<p>
													<strong>Gelato</strong>
												</p>

											</div>
										</div>

										<div class="swiper-slide">
											<div class="box">

												<div class="icon">
													<?php echo file_get_contents("assets/svg/salada-di-frutas.svg"); ?>
												</div>

												<div class="line">
													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
												</div>

												<p>
													<strong>Salada di frutas</strong>
												</p>

											</div>
										</div>

										<div class="swiper-slide">
											<div class="box">

												<div class="icon">
													<?php echo file_get_contents("assets/svg/espeto-di-chocolate.svg"); ?>
												</div>

												<div class="line">
													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
												</div>

												<p>
													<strong>Espeto di chocolate</strong>
												</p>

											</div>
										</div>

										<div class="swiper-slide">
											<div class="box">

												<div class="icon">
													<?php echo file_get_contents("assets/svg/chocolate-quente.svg"); ?>
												</div>

												<div class="line">
													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
												</div>

												<p>
													<strong>Chocolate quente</strong>
												</p>

											</div>
										</div>

										<div class="swiper-slide">
											<div class="box">

												<div class="icon">
													<?php echo file_get_contents("assets/svg/di-shake.svg"); ?>
												</div>

												<div class="line">
													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
												</div>

												<p>
													<strong>Di shake</strong>
												</p>

											</div>
										</div>

									</div>
								</div>

							</div>
						</div>
					</div>
				</section>

				<section id="testimonials">

					<div class="bg wow fadeIn"></div>

					<div class="container">
						<div class="row">
							<div class="col-12">

								<h2 class="lozenge-title text-bigger wow fadeInUp">

									<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

									<span>
										O que estão falando de nós
									</span>

									<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

								</h2>

								<div class="testimonials-slider swiper-container wow fadeIn">
									<div class="swiper-wrapper">

										<div class="swiper-slide">
											<div class="box">
												<div class="wrapper">

													<p class="text-big">
														<b>Marjorie</b> <br />
														Cliente / PR
													</p>

													<a href="#testimonial-marjorie" data-fancybox="testimonials" class="desc text-medium">
														
														<p class="text">
															<span class="hover-multiple-lines">
																A Fábrica di Chocolate do Shopping Estação, de fato mora no meu coração. Toda vez que eu preciso trazer doçura, alegria e bons momentos no meu dia, eu passo lá na Fábrica pra comer um delicioso açaí com frutas e chocolate, ou um fondue... qualquer pedida lá você sempre recebe amor e qualidade, pois o atendimento daquela equipe é nota mil, sempre muito prestativos e zelando por nos oferecer o melhor. Lá também guardo momentos especiais ao lado das pessoas que amo e faço questão de levar lá pra comer o melhor que tem em opções de sobremesa com sabores incríveis.<br /><br />

																A Fábrica di Chocolate do Shopping Estação é um dos meus cantinhos favoritos da minha linda cidade de Curitiba. Lá eu sinto paz, alegria, bato papo num ambiente de harmonia. Eles entregam muito mais que potinhos de chocolate com frutas, eles entregam respeito, amor e dedicação para seus  clientes. Eu sou cliente VIP e não troco por nada. Eu amo sem limites hahaha.
															</span>
														</p>

														<p class="more">
															Leia mais...
														</p>

													</a>

													<div class="line">
														<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
													</div>

												</div>
											</div>
										</div>

										<div class="swiper-slide">
											<div class="box">
												<div class="wrapper">

													<p class="text-big">
														<b>Maria Dourado</b> <br />
														Cliente / GO
													</p>

													<a href="#testimonial-maria-dourada" data-fancybox="testimonials" class="desc text-medium">
														
														<p class="text">
															<span class="hover-multiple-lines">
																Porque o chocolate é maravilhoso, e o sistema de self service é prático, coloco somente o que eu gosto… Amo Chocolate e ainda mais esse que é simplesmente maravilhoso.
															</span>
														</p>

														<p class="more">
															Leia mais...
														</p>

													</a>

													<div class="line">
														<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
													</div>

												</div>
											</div>
										</div>

										<div class="swiper-slide">
											<div class="box">
												<div class="wrapper">

													<p class="text-big">
														<b>Rodrigo & Daniela</b> <br />
														Franqueados / PR
													</p>

													<a href="#testimonial-rodrigo-e-daniela" data-fancybox="testimonials" class="desc text-medium">
														
														<p class="text">
															<span class="hover-multiple-lines">
																Entramos na Rede Fábrica di Chocolate, pois acreditamos no negócio e vimos um grande potencial. O tempo nos provou que estávamos certos e que o fondue não era apenas uma moda, mas um produto que veio para ficar. Como todo empreendedor, a fé, a coragem e a resiliência nos mantém há 14 anos ativos no mercado.
															</span>
														</p>

														<p class="more">
															Leia mais...
														</p>

													</a>

													<div class="line">
														<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
													</div>

												</div>
											</div>
										</div>

										<div class="swiper-slide">
											<div class="box">
												<div class="wrapper">

													<p class="text-big">
														<b>André</b> <br />
														Franqueado / SP
													</p>

													<a href="#testimonial-andre" data-fancybox="testimonials" class="desc text-medium">
														
														<p class="text">
															<span class="hover-multiple-lines">
																Para mim, a coisa mais importante é fazer algo alinhado aos meus valores e que faça diferença na vida das pessoas e foi isso que Fabrica trouxe, a realização dos meus sonhos. Sou bastante satisfeito em fazer parte da família Fábrica Di Chocolate.
															</span>
														</p>

														<p class="more">
															Leia mais...
														</p>

													</a>

													<div class="line">
														<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
													</div>

												</div>
											</div>
										</div>

										<div class="swiper-slide">
											<div class="box">
												<div class="wrapper">

													<p class="text-big">
														<b>Monaliza Sá e Edson Alencar</b> <br />
														Franqueados / CE
													</p>

													<a href="#testimonial-monaliza-e-edson" data-fancybox="testimonials" class="desc text-medium">
														
														<p class="text">
															<span class="hover-multiple-lines">
																Um sonho se fez verdade quando entramos para fazer parte da história de sucesso da Rede Fábrica di Chocolate, dentro de nós trazemos a certeza de oferecer um produto de qualidade e com a magia que só o chocolate tem. Um modelo de negócio inovador que faz com que os desafios de um negócio, sejam sempre superados por ter o apoio e a proximidade de quem entende e ama o que faz.
															</span>
														</p>

														<p class="more">
															Leia mais...
														</p>

													</a>

													<div class="line">
														<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
													</div>

												</div>
											</div>
										</div>

										<div class="swiper-slide">
											<div class="box">
												<div class="wrapper">

													<p class="text-big">
														<b>Hiêda Benatti</b> <br />
														Franqueada / MG
													</p>

													<a href="#testimonial-hieda-benatti" data-fancybox="testimonials" class="desc text-medium">
														
														<p class="text">
															<span class="hover-multiple-lines">
																A vida é feita de ciclos...<br /><br />

																Como Psicóloga, por muitos anos tentei contribuir para o bem-estar das pessoas. Há um ano, tenho tido a oportunidade de cumprir esse propósito de uma maneira diferente, tornando-me uma empreendedora nessa deliciosa Franquia.<br /><br />

																A Fábrica Di Chocolate produz por excelência doçura, a fim de contribuir para uma vida mais leve, cheia de energia, diversão e saúde. Ela tem a proposta de possibilitar boas memórias gustativas, eternizando momentos incríveis através de saborosos paladares, personalizados pelos próprios Clientes!<br /><br />

																Oferecendo uma sobremesa top que reúne principalmente frutas frescas, chocolate padrão belga e muito amor, a Fábrica Di Chocolate aquece os corações de todos os públicos (de crianças à idosos), em todas as estações do ano, acessando a felicidade.<br /><br />

																O melhor Fondue do mundo para os melhores Clientes do mundo!
															</span>
														</p>

														<p class="more">
															Leia mais...
														</p>

													</a>

													<div class="line">
														<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
													</div>

												</div>
											</div>
										</div>

										<div class="swiper-slide">
											<div class="box">
												<div class="wrapper">

													<p class="text-big">
														<b>Bárbara R. da Silva Santos</b> <br />
														Cliente / SC
													</p>

													<a href="#testimonial-barbara" data-fancybox="testimonials" class="desc text-medium">
														
														<p class="text">
															<span class="hover-multiple-lines">
																Porque  é o melhor fondue que eu já provei!
															</span>
														</p>

														<p class="more">
															Leia mais...
														</p>

													</a>

													<div class="line">
														<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
													</div>

												</div>
											</div>
										</div>

										<div class="swiper-slide">
											<div class="box">
												<div class="wrapper">

													<p class="text-big">
														<b>Larissa A. Costa Pereira</b> <br />
														Cliente / SC
													</p>

													<a href="#testimonial-larissa" data-fancybox="testimonials" class="desc text-medium">
														
														<p class="text">
															<span class="hover-multiple-lines">
																Simplesmente porque é maravilhoso!
															</span>
														</p>

														<p class="more">
															Leia mais...
														</p>

													</a>

													<div class="line">
														<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
													</div>

												</div>
											</div>
										</div>

									</div>

								</div>

								<?php include('includes/testimonials.php'); ?>

							</div>
						</div>
					</div>
				</section>

				<section id="awards">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<h2 class="lozenge-title text-bigger wow fadeInUp">

									<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

									<span>
										Nossas conquistas
									</span>

									<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

								</h2>

								<div class="timeline">
									<div class="row">

										<div class="col-sm-6 col-lg-4 col-xl-3">

											<div class="box wow fadeIn">
												<div class="wrap">

													<p class="text-bigger year">
														2004
													</p>

													<p class="text-medium desc">
														Foi criada a empresa Fábrica di Chocolate em Joinville / SC.
													</p>

													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

												</div>
											</div>
										</div>

										<div class="col-sm-6 col-lg-4 col-xl-3">

											<div class="box wow fadeIn">
												<div class="wrap">

													<p class="text-bigger year">
														2005
													</p>

													<p class="text-medium desc">
														Requerimento de registro de marca e patente de equipamentos no INPI.
													</p>

													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

												</div>
											</div>
										</div>

										<div class="col-sm-push-6 col-sm-6 col-lg-push-0 col-lg-4 col-xl-3">

											<div class="box wow fadeIn">
												<div class="wrap">

													<p class="text-bigger year">
														2006
													</p>

													<p class="text-medium desc">
														Associação a ABF e início das unidades franqueadas.
													</p>

													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

												</div>
											</div>
										</div>

										<div class="col-sm-pull-6 col-sm-6 col-lg-pull-0 col-lg-push-8 col-lg-4 col-xl-push-0 col-xl-3">

											<div class="box wow fadeIn">
												<div class="wrap">

													<p class="text-bigger year">
														2010
													</p>

													<p class="text-medium desc">
														Iniciada a contribuição financeira com o corpo de bomobeiros voluntários de Joinville.
													</p>

													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

												</div>
											</div>
										</div>

										<div class="col-sm-6 col-lg-pull-0 col-lg-4 col-xl-push-9 col-xl-3">

											<div class="box wow fadeIn">
												<div class="wrap">

													<p class="text-bigger year">
														2011
													</p>

													<p class="text-medium desc">
														Fundação Dom Cabral reconhece como a franquia com melhor desempenho internacional do segmento.
													</p>

													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

												</div>
											</div>
										</div>

										<div class="col-sm-6 col-lg-pull-8 col-lg-4 col-xl-push-3 col-xl-3">

											<div class="box wow fadeIn">
												<div class="wrap">

													<p class="text-bigger year">
														2012
													</p>

													<p class="text-medium desc">
														Vencedor do prêmio lojista Alshop 2013.
													</p>

													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

												</div>
											</div>
										</div>

										<div class="col-sm-push-6 col-sm-6 col-lg-push-0 col-lg-4 col-xl-pull-3 col-xl-3">

											<div class="box wow fadeIn">
												<div class="wrap">

													<p class="text-bigger year">
														2013
													</p>

													<p class="text-medium desc">
														Eleita pela Exame como uma das melhores franquias para investimento. Associação com a Abrina.
													</p>

													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

												</div>
											</div>
										</div>

										<div class="col-sm-pull-6 col-sm-6 col-lg-pull-0 col-lg-4 col-xl-pull-9 col-xl-3">

											<div class="box wow fadeIn">
												<div class="wrap">

													<p class="text-bigger year">
														2015
													</p>

													<p class="text-medium desc">
														Vencedor do prêmio lojista Alshop 2015.
													</p>

													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

												</div>
											</div>
										</div>

										<div class="col-sm-6 col-lg-4 col-xl-3">

											<div class="box wow fadeIn">
												<div class="wrap">

													<p class="text-bigger year">
														2016
													</p>

													<p class="text-medium desc">
														Prêmio ABF Design 2016.
													</p>

													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

												</div>
											</div>
										</div>

										<div class="col-sm-6 col-lg-push-8 col-lg-4 col-xl-push-0 col-xl-3">

											<div class="box wow fadeIn">
												<div class="wrap">

													<p class="text-bigger year">
														2022
													</p>

													<p class="text-medium desc">
														Selo ABF Excelência em Franchising 2022.
													</p>

													<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

												</div>
											</div>
										</div>

										<div class="col-sm-push-6 col-sm-6 col-lg-push-0 col-lg-4 col-xl-3">

											<div class="box wow fadeIn">
												<div class="wrap last">

													<p class="text-big">
														A história continua...
													</p>

												</div>
											</div>
										</div>

									</div>
								</div>

							</div>
						</div>
					</div>
				</section>

				<section id="headline">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<div class="line wow fadeIn">
									<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
								</div>

								<h3 class="text-bigger wow fadeIn">
									Não sei a fórmula da felicidade, mas deve conter chocolate :)
								</h3>

								<div class="line wow fadeIn">
									<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>
								</div>

							</div>
						</div>
					</div>
				</section>

				<section id="map">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<h2 class="lozenge-title text-bigger wow fadeInUp">

									<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

									<span>
										Nosso chocolate já se espalhou por todo o Brasil
									</span>

									<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

								</h2>

								<div class="map wow fadeIn">
									<?php echo file_get_contents("assets/svg/map.svg"); ?>
								</div>

								<div class="toggle wow fadeInUp">

									<button class="text-medium open red-button">
										Visite nossos quiosques
									</button>

									<button class="text-medium close red-button">
										Fechar
									</button>

								</div>

								<div class="hidden">
									<?php include('includes/stores.php'); ?>
								</div>

							</div>
						</div>
					</div>
				</section>

				<section id="contact">

					<div class="chocolate">
						<?php echo file_get_contents("assets/svg/chocolate.svg"); ?>
					</div>

					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-12">

									<h2 class="lozenge-title text-bigger wow fadeInUp">

										<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

										<span>
											Deixe um oi pra gente!
										</span>

										<?php echo file_get_contents("assets/svg/lozenge.svg"); ?>

									</h2>

									<form action="https://formsubmit.co/adm@fabricadichocolateoficial.com.br" id="contact-form" method="post" class="text-medium">

										<input type="hidden" name="_next" value="https://www.fabricadichocolateoficial.com.br/#contact-success">
										<input type="text" name="_honey" style="display: none">
										<input type="hidden" name="_captcha" value="false">
										<input type="hidden" name="_template" value="box">
										<input type="hidden" name="_subject" value="Formulário de Contato">

										<div class="row">

											<div class="col-md-6">

												<div class="form-line wow fadeInUp">
													<div class="input-wrap">
														
														<select name="Motivo do contato" required class="input select">
															<option value="" selected disabled>* Motivo do contato</option>
															<option value="Quero ser um franqueado">Quero ser um franqueado</option>
															<option value="Elogios / Reclamações">Elogios / Reclamações</option>
															<option value="Outros">Outros</option>
														</select>

														<?php echo file_get_contents("assets/svg/angle-down.svg"); ?>

													</div>
												</div>

												<div class="form-line wow fadeInUp">
													<div class="input-wrap">
														<input type="text" name="Nome" required class="input" placeholder="* Nome" />
													</div>
												</div>

												<div class="form-line wow fadeInUp">
													<div class="input-wrap">
														<input type="tel" name="Whatsapp" required class="input" placeholder="* Whatsapp" />
													</div>
												</div>

												<div class="form-line wow fadeInUp">
													<div class="input-wrap">
														<input type="email" name="Email" required class="input" placeholder="* Email" />
													</div>
												</div>

												<div class="form-line wow fadeInUp">
													<div class="input-wrap">
														<input type="text" name="Cidade" class="input" placeholder="Cidade" />
													</div>
												</div>

											</div>

											<div class="col-md-6 right">
												<div class="form-line wow fadeIn">
													<div class="input-wrap">
														<textarea name="Mensagem" required class="input textarea" placeholder="* Mensagem"></textarea>
													</div>
												</div>
											</div>

											<div class="col-md-6 text-small wow fadeInUp">
												<p class="desc">
													* São informações obrigatórias para preenchimento
												</p>
											</div>

											<div class="col-md-6 last">

												<div class="form-line wow fadeInUp">
													<div class="input-wrap">

														<input type="submit" id="send-contact">

														<label for="send-contact" class="text-medium red-button">
															Enviar mensagem
														</label>

														<div class="cf"></div>

													</div>
												</div>

											</div>

										</div>
									</form>

								</div>
							</div>
						</div>
					</div>
				</section>
				
			</main>

			<footer>
				
				<?php include('includes/footer.php'); ?>
				<?php include('includes/popups.php'); ?>

				<!-- scripts -->
				<script src="assets/js/framework.js"></script>
				<script src="assets/js/home.js" defer></script>

			</footer>

		</div>
	</body>
</html>