var mouseX = 0,
	mouseY = 0,
	windowHalfX = window.innerWidth / 2,
	windowHalfY = window.innerHeight / 2,
	SEPARATION = 200,
	AMOUNTX = 10,
	AMOUNTY = 10,
	camera,
	scene,
	renderer;

$(document).ready(function() {
	init();
	animate();
});
	
	function init() {
		var container, separation = 50,
		particles, particle;

		container = document.createElement('div');
		container.setAttribute("id","bg-container");
		document.body.appendChild(container);

		camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 10000 );
		camera.position.z = 600;
		camera.position.y = 500;

		scene = new THREE.Scene();

		renderer = new THREE.CanvasRenderer();
		renderer.setSize( window.innerWidth, window.innerHeight );
		container.appendChild( renderer.domElement );
		
		// particles

				var PI2 = Math.PI * 2;
				var material = new THREE.ParticleCanvasMaterial( {

					color: 0xffffff,
					program: function ( context ) {

						context.beginPath();
						context.arc( 0, 0, 1, 0, PI2, true );
						context.fill();

					}

				} );

				var geometry = new THREE.Geometry();

				for ( var i = 0; i < 125; i ++ ) {

					particle = new THREE.Particle( material );
					particle.position.x = Math.random() * 2 - 1;
					particle.position.y = Math.random() * 2 - 1;
					particle.position.z = Math.random() * 2 - 1;
					particle.position.normalize();
					particle.position.multiplyScalar( Math.random() * 10 + 1000 );
					particle.scale.x = particle.scale.y = 5;
					scene.add( particle );

					geometry.vertices.push( particle.position );

				}

				// lines

				var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0xffffff, opacity: 0.9 } ) );
				scene.add( line );
		
		document.addEventListener( 'mousemove', onDocumentMouseMove, false );
		
		window.addEventListener( 'resize', onWindowResize, false );
	}
	
	function onWindowResize() {
		windowHalfX = window.innerWidth / 2;
		windowHalfY = window.innerHeight / 2;

		camera.aspect = window.innerWidth / window.innerHeight;
		camera.updateProjectionMatrix();

		renderer.setSize( window.innerWidth, window.innerHeight );
	}
	
	function onDocumentMouseMove(event) {
		mouseX = event.clientX - windowHalfX;
		mouseY = event.clientY - windowHalfY;
	}
	
	function animate() {
		requestAnimationFrame( animate );

		render();
	}

	function render() {
		camera.position.x += ( mouseX - camera.position.x ) * .05;
		camera.position.y += ( - mouseY - camera.position.y ) * .05;
		camera.useQuaternion = true;
		camera.lookAt(scene.position);

		renderer.render( scene, camera );
	}