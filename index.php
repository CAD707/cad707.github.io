<?php
   $imagesDir = 'cards/';
   $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
   $randomImage = $images[array_rand($images)];
   echo "<img src='$randomImage'>";
?>
<script src="https://aframe.io/releases/0.6.0/aframe.min.js"></script>

<script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
<body style='margin : 0px; overflow: hidden;'>
	<a-scene embedded arjs>
		<!-- create your content here. just a box for now -->
		<a-image position='0 0.5 0' material='opacity: 0.5;'src=<?php '$randomImage'?>></a-image>
		
		<!-- define a camera which will move according to the marker position -->
		<a-marker-camera preset='hiro'></a-marker-camera>
	</a-scene>
</body>
