<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="Campement"/>
		<meta name="keywords" content="campement, appartment, flic en flac"/>
		<meta name="author" content="Jewootah Urvashee"/>
		<title>Summer Paradise! | Welcome </title>
		<link rel="shortcut icon" type="image/png" href="icons/beach.png"/>
		<link rel="stylesheet" href="css/style.css"/>
		<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'/>
		<link href='https://fonts.googleapis.com/css?family=Poppins' rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
		<link rel="stylesheet" href="./css/font-awesome.min.css"/>
		<script src="jquery-3.3.1.js"> </script>
		
	</head>
	
	<header>
		<artical id="banner">
			<h1> <a href="index.xml"> Summer Paradise </a> </h1>
		</artical>
	</header>
	
	<body>		
	
		<section id="camp">
			<xsl:for-each select="homepage/clickbait">
				<a>
					<xsl:attribute name="href">
						<xsl:value-of select="link/text()" />
					</xsl:attribute>
					<img>
						<xsl:attribute name="src">
							<xsl:value-of select="thumbnail/text()" />
						</xsl:attribute>
					</img>
				</a>
			</xsl:for-each>
		</section>
		
		<footer> <a href="contact.html"> Contact us for booking </a></footer>
	
	</body>
</html>
</xsl:template>
</xsl:stylesheet>