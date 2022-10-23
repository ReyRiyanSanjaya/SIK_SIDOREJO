<style>
	.page {
		padding: 40px;
		position: relative;
		left: 0;
		top: 40%;

	}

	#splash {
		background: #cc1f2f;
		background-repeat: repeat-y;
		position: fixed;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		animation: splash 3s ease-in;
		animation-fill-mode: forwards;
		-webkit-animation-fill-mode: forwards;
	}

	#loader {
		position: absolute;
		left: 50%;
		top: 0;
		transform: translate(-50%, 0);
	}

	#loader:after {
		content: '';
		position: absolute;
		left: 50%;
		margin-left: -8px;
		bottom: -170px;
		width: 3px;
		background: #fff;
		background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 50%, rgba(255, 255, 255, 0) 100%);
		height: 200px;
	}

	#loader:before {
		content: '';
		position: absolute;
		left: 50%;
		margin-left: 8px;
		bottom: -190px;
		width: 3px;
		background: #000;
		background: linear-gradient(to bottom, rgba(0, 0, 0, .2) 0%, rgba(0, 0, 0, .2) 50%, rgba(0, 0, 0, 0) 100%);
		height: 200px;
	}

	#splash .anim {
		height: 100%;
		position: absolute;
		left: 50%;
		width: 100px;
		transform: translate(-50%, 100%);
		animation: loader 4s linear;
		animation-fill-mode: forwards;
		-webkit-animation-fill-mode: forwards;
	}

	@keyframes loader {
		0% {
			transform: translate(-50%, 110%);
		}

		30% {
			transform: translate(-50%, 50%);
		}

		100% {
			transform: translate(-50%, 0%);
		}
	}

	@keyframes splash {
		0% {
			transform: translate(0%, 0%);
		}

		50% {
			transform: translate(0%, 0%);
		}

		100% {
			transform: translate(0%, -100%);
		}
	}
</style>


<section class="pt-6 pt-md-11 pb-10 pb-md-12">
	<div class="page">
		<div class="container-lg">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">

					<!-- Heading -->
					<h1 class="display-3 text-center mb-4 mt-6 text-primary-light " style="text-align: center !important;">
						SILAHKKAN LENGKAPI DATA ANDA TERLEBIH DAHULU!
					</h1>

					<iframe style="margin-left:30%;" src="https://embed.lottiefiles.com/animation/97680"></iframe>
					<!-- Divider -->
					<hr class="hr-sm bg-primary mt-6 mb-6 mx-auto">
					<!-- Text -->
					<p class="text-center text-muted">
						Mohon dilengkapi data anda terlebih dahulu, agar anda bisa menjadi calon penerima BANSOS
					</p>
					<a href="http://localhost/bansos/auth/login">
						<div class="alert alert-dark text-center mt-6" role="alert">
							Lengkapi data anda
						</div>
					</a>

				</div>
			</div>
		</div>
	</div>
	<div id="splash">
		<div class="anim">
			<div id="loader">
				<svg version="1.1" width="60px" height="70px" viewBox="0 0 60 70">
					<defs>
						<filter id="f1" x="0" y="0">
							<feGaussianBlur in="SourceGraphic" stdDeviation="2" />
						</filter>
					</defs>
					<g id="airplane">
						<path fill="#000" d="M0.677,20.977l4.355,1.631c0.281,0.104,0.579,0.162,0.88,0.16l9.76-0.004L30.46,41.58c0.27,0.34,0.679,0.545,1.112,0.541
          h1.87c0.992,0,1.676-0.992,1.322-1.918l-6.643-17.439l6.914,0.002l6.038,6.037c0.265,0.266,0.624,0.412,0.999,0.418l1.013-0.004
          c1.004-0.002,1.684-1.012,1.312-1.938l-2.911-7.277l2.912-7.278c0.372-0.928-0.313-1.941-1.313-1.938h1.017
          c-0.375,0-0.732,0.15-0.996,0.414l-6.039,6.039h-6.915l6.646-17.443c0.354-0.926-0.33-1.916-1.321-1.914l-1.87-0.004
          c-0.439,0.004-0.843,0.203-1.112,0.543L15.677,17.24l-9.765-0.002c-0.3,0.002-0.597,0.055-0.879,0.16L0.678,19.03
          C-0.225,19.36-0.228,20.637,0.677,20.977z" transform="translate(44,0) rotate(90 0 0)" />
					</g>
					<g id="shadow" transform="scale(.9)">
						<path fill="#000" fill-opacity="0.3" d="M0.677,20.977l4.355,1.631c0.281,0.104,0.579,0.162,0.88,0.16l9.76-0.004L30.46,41.58c0.27,0.34,0.679,0.545,1.112,0.541
          h1.87c0.992,0,1.676-0.992,1.322-1.918l-6.643-17.439l6.914,0.002l6.038,6.037c0.265,0.266,0.624,0.412,0.999,0.418l1.013-0.004
          c1.004-0.002,1.684-1.012,1.312-1.938l-2.911-7.277l2.912-7.278c0.372-0.928-0.313-1.941-1.313-1.938h1.017
          c-0.375,0-0.732,0.15-0.996,0.414l-6.039,6.039h-6.915l6.646-17.443c0.354-0.926-0.33-1.916-1.321-1.914l-1.87-0.004
          c-0.439,0.004-0.843,0.203-1.112,0.543L15.677,17.24l-9.765-0.002c-0.3,0.002-0.597,0.055-0.879,0.16L0.678,19.03
          C-0.225,19.36-0.228,20.637,0.677,20.977z" transform="translate(64,30) rotate(90 0 0)" filter="url(#f1)" />
					</g>
				</svg>
			</div>
		</div>
	</div>
</section>
