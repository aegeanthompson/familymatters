var confetti = {
	maxCount: 150,		//set max confetti count
	speed: 2,			//set the particle animation speed
	frameInterval: 15,	//the confetti animation frame interval in milliseconds
	alpha: 1.0,			//the alpha opacity of the confetti (between 0 and 1, where 1 is opaque and 0 is invisible)
	gradient: false,	//whether to use gradients for the confetti particles
	start: null,		//call to start confetti animation (with optional timeout in milliseconds, and optional min and max random confetti count)
	stop: null,			//call to stop adding confetti
	toggle: null,		//call to start or stop the confetti animation depending on whether it's already running
	pause: null,		//call to freeze confetti animation
	resume: null,		//call to unfreeze confetti animation
	togglePause: null,	//call to toggle whether the confetti animation is paused
	remove: null,		//call to stop the confetti animation and remove all confetti immediately
	isPaused: null,		//call and returns true or false depending on whether the confetti animation is paused
	isRunning: null		//call and returns true or false depending on whether the animation is running
};

(function() {
	confetti.start = startConfetti;
	confetti.stop = stopConfetti;
	confetti.toggle = toggleConfetti;
	confetti.pause = pauseConfetti;
	confetti.resume = resumeConfetti;
	confetti.togglePause = toggleConfettiPause;
	confetti.isPaused = isConfettiPaused;
	confetti.remove = removeConfetti;
	confetti.isRunning = isConfettiRunning;
	var supportsAnimationFrame = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame;
	var colors = ["rgba(30,144,255,", "rgba(107,142,35,", "rgba(255,215,0,", "rgba(255,192,203,", "rgba(106,90,205,", "rgba(173,216,230,", "rgba(238,130,238,", "rgba(152,251,152,", "rgba(70,130,180,", "rgba(244,164,96,", "rgba(210,105,30,", "rgba(220,20,60,"];
	var streamingConfetti = false;
	var animationTimer = null;
	var pause = false;
	var lastFrameTime = Date.now();
	var particles = [];
	var waveAngle = 0;
	var context = null;

	function resetParticle(particle, width, height) {
		particle.color = colors[(Math.random() * colors.length) | 0] + (confetti.alpha + ")");
		particle.color2 = colors[(Math.random() * colors.length) | 0] + (confetti.alpha + ")");
		particle.x = Math.random() * width;
		particle.y = Math.random() * height - height;
		particle.diameter = Math.random() * 10 + 5;
		particle.tilt = Math.random() * 10 - 10;
		particle.tiltAngleIncrement = Math.random() * 0.07 + 0.05;
		particle.tiltAngle = Math.random() * Math.PI;
		return particle;
	}

	function toggleConfettiPause() {
		if (pause)
			resumeConfetti();
		else
			pauseConfetti();
	}

	function isConfettiPaused() {
		return pause;
	}

	function pauseConfetti() {
		pause = true;
	}

	function resumeConfetti() {
		pause = false;
		runAnimation();
	}

	function runAnimation() {
		if (pause)
			return;
		else if (particles.length === 0) {
			context.clearRect(0, 0, window.innerWidth, window.innerHeight);
			animationTimer = null;
		} else {
			var now = Date.now();
			var delta = now - lastFrameTime;
			if (!supportsAnimationFrame || delta > confetti.frameInterval) {
				context.clearRect(0, 0, window.innerWidth, window.innerHeight);
				updateParticles();
				drawParticles(context);
				lastFrameTime = now - (delta % confetti.frameInterval);
			}
			animationTimer = requestAnimationFrame(runAnimation);
		}
	}

	function startConfetti(timeout, min, max) {
		var width = window.innerWidth;
		var height = window.innerHeight;
		window.requestAnimationFrame = (function() {
			return window.requestAnimationFrame ||
				window.webkitRequestAnimationFrame ||
				window.mozRequestAnimationFrame ||
				window.oRequestAnimationFrame ||
				window.msRequestAnimationFrame ||
				function (callback) {
					return window.setTimeout(callback, confetti.frameInterval);
				};
		})();
		var canvas = document.getElementById("confetti-canvas");
		if (canvas === null) {
			canvas = document.createElement("canvas");
			canvas.setAttribute("id", "confetti-canvas");
			canvas.setAttribute("style", "display:block;z-index:999999;pointer-events:none;position:fixed;top:0");
			document.body.prepend(canvas);
			canvas.width = width;
			canvas.height = height;
			window.addEventListener("resize", function() {
				canvas.width = window.innerWidth;
				canvas.height = window.innerHeight;
			}, true);
			context = canvas.getContext("2d");
		} else if (context === null)
			context = canvas.getContext("2d");
		var count = confetti.maxCount;
		if (min) {
			if (max) {
				if (min == max)
					count = particles.length + max;
				else {
					if (min > max) {
						var temp = min;
						min = max;
						max = temp;
					}
					count = particles.length + ((Math.random() * (max - min) + min) | 0);
				}
			} else
				count = particles.length + min;
		} else if (max)
			count = particles.length + max;
		while (particles.length < count)
			particles.push(resetParticle({}, width, height));
		streamingConfetti = true;
		pause = false;
		runAnimation();
		if (timeout) {
			window.setTimeout(stopConfetti, timeout);
		}
	}

	function stopConfetti() {
		streamingConfetti = false;
	}

	function removeConfetti() {
		stop();
		pause = false;
		particles = [];
	}

	function toggleConfetti() {
		if (streamingConfetti)
			stopConfetti();
		else
			startConfetti();
	}

	function isConfettiRunning() {
		return streamingConfetti;
	}

	function drawParticles(context) {
		var particle;
		var x, y, x2, y2;
		for (var i = 0; i < particles.length; i++) {
			particle = particles[i];
			context.beginPath();
			context.lineWidth = particle.diameter;
			x2 = particle.x + particle.tilt;
			x = x2 + particle.diameter / 2;
			y2 = particle.y + particle.tilt + particle.diameter / 2;
			if (confetti.gradient) {
				var gradient = context.createLinearGradient(x, particle.y, x2, y2);
				gradient.addColorStop("0", particle.color);
				gradient.addColorStop("1.0", particle.color2);
				context.strokeStyle = gradient;
			} else
				context.strokeStyle = particle.color;
			context.moveTo(x, particle.y);
			context.lineTo(x2, y2);
			context.stroke();
		}
	}

	function updateParticles() {
		var width = window.innerWidth;
		var height = window.innerHeight;
		var particle;
		waveAngle += 0.01;
		for (var i = 0; i < particles.length; i++) {
			particle = particles[i];
			if (!streamingConfetti && particle.y < -15)
				particle.y = height + 100;
			else {
				particle.tiltAngle += particle.tiltAngleIncrement;
				particle.x += Math.sin(waveAngle) - 0.5;
				particle.y += (Math.cos(waveAngle) + particle.diameter + confetti.speed) * 0.5;
				particle.tilt = Math.sin(particle.tiltAngle) * 15;
			}
			if (particle.x > width + 20 || particle.x < -20 || particle.y > height) {
				if (streamingConfetti && particles.length <= confetti.maxCount)
					resetParticle(particle, width, height);
				else {
					particles.splice(i, 1);
					i--;
				}
			}
		}
	}
  $( () => {

    const $day1 = $('#day1');
		const $day2 = $('#day2');
		const $day3 = $('#day3');
		const $day4 = $('#day4');
		const $day5 = $('#day5');
		const $day6 = $('#day6');
		const $day7 = $('#day7');
		const $day8 = $('#day8');
		const $day9 = $('#day9');
		const $day10 = $('#day10');
		const $day11 = $('#day11');
		const $day12 = $('#day12');
		const $day13 = $('#day13');
		const $day14 = $('#day14');
		const $day15 = $('#day15');
		const $day16 = $('#day16');
		const $day17 = $('#day17');
		const $day18 = $('#day18');
		const $day19 = $('#day19');
		const $day20 = $('#day20');
		const $day21 = $('#day21');


    const day1Done = () => {
        $day1.addClass( "crossOut");
    }
		const day2Done = () => {
				$day2.addClass( "crossOut");
		}
		const day3Done = () => {
				$day3.addClass( "crossOut");
		}
		const day4Done = () => {
				$day4.addClass( "crossOut");
		}
		const day5Done = () => {
				$day5.addClass( "crossOut");
		}
		const day6Done = () => {
				$day6.addClass( "crossOut");
		}
		const day7Done = () => {
				$day7.addClass( "crossOut");
		}
		const day8Done = () => {
				$day8.addClass( "crossOut");
		}
		const day9Done = () => {
				$day9.addClass( "crossOut");
		}
		const day10Done = () => {
				$day10.addClass( "crossOut");
		}
		const day11Done = () => {
				$day11.addClass( "crossOut");
		}
		const day12Done = () => {
				$day12.addClass( "crossOut");
		}
		const day13Done = () => {
				$day13.addClass( "crossOut");
		}
		const day14Done = () => {
				$day14.addClass( "crossOut");
		}
		const day15Done = () => {
				$day15.addClass( "crossOut");
		}
		const day16Done = () => {
				$day16.addClass( "crossOut");
		}
		const day17Done = () => {
				$day17.addClass( "crossOut");
		}
		const day18Done = () => {
				$day18.addClass( "crossOut");
		}

		const day19Done = () => {
				$day19.addClass( "crossOut");
		}
		const day20Done = () => {
				$day20.addClass( "crossOut");
		}
		const day21Done = () => {
				$day21.addClass( "crossOut");
		}

      $day1.on('click', day1Done);
			$day2.on('click', day2Done);
			$day3.on('click', day3Done);
			$day4.on('click', day4Done);
			$day5.on('click', day5Done);
			$day6.on('click', day6Done);
			$day7.on('click', day7Done);
			$day8.on('click', day8Done);
			$day9.on('click', day9Done);
			$day10.on('click', day10Done);
			$day11.on('click', day11Done);
			$day12.on('click', day12Done);
			$day13.on('click', day13Done);
			$day14.on('click', day14Done);
			$day15.on('click', day15Done);
			$day16.on('click', day16Done);
			$day17.on('click', day17Done);
			$day18.on('click', day18Done);
			$day19.on('click', day19Done);
			$day20.on('click', day20Done);
			$day21.on('click', day21Done);


    const $confetti = $('#confetti');

    const partyTime = () => {
      toggleConfetti();
    }

    $confetti.on('click', partyTime);

  });
})();


// confetti annimation from https://www.cssscript.com/confetti-falling-animation/
