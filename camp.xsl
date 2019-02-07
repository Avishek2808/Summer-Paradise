<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">
<html>
    <head>
      <title>Summer Paradise| Appartment</title>
      <link rel="icon" href="images/title.png" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
      <meta name="viewport" content="initial-scale=1" /> 
      <meta charset="utf-8" />
      <link rel="stylesheet" href="css/style.css"/>
    </head>
	
	<header>
		<artical id="banner">
			<h1> <a href="index.xml"> Summer Paradise </a> </h1>
		</artical>
	</header>
	<body>
		<section id="details">
		
		<div id="mslides">
				<div class='mySlides' style='display:inline-block; vertical-align:top;'>
					<img>
					<xsl:attribute name="src">
						<xsl:value-of select="summerp/campment/slides/image/text()" />
					</xsl:attribute>
					</img>
				</div>	
		</div>
		
		<div id="written">
			<table>
			
			<xsl:for-each select="summerp/campment">
				<tr><td>Residence:</td> <td> 
                  <xsl:value-of select="residence/text()"/>
                </td> </tr>
				<tr><td>Address:</td> <td> 
                  <xsl:value-of select="address/text()"/> </td></tr>
				<tr><td>Appartment no:</td> <td><xsl:value-of select="appartmentNo/text()"/> </td></tr>
				<tr><td>Rooms:</td> <td>
                  <xsl:value-of select="room/text()"/> </td></tr>
				<tr><td>Kitchen:</td> <td> 
                  <xsl:value-of select="kitchen/text()"/> </td></tr>
				<tr><td>Bathrooms:</td> <td>
                  <xsl:value-of select="bathroom/text()"/> </td></tr>
				<tr><td>Living room: </td> <td>
                  <xsl:value-of select="livingRoom/text()"/> </td></tr>
				<tr><td>Swimming pool:</td> <td> 
                  <xsl:value-of select="pool/text()"/> </td></tr>
				<tr><td>Other facilities:</td> <td> 
                  <xsl:value-of select="facilities/text()"/> </td></tr>
				<tr><td>Distance from the beach:</td> <td> 
                  <xsl:value-of select="beach/text()"/> </td></tr>
				
				</xsl:for-each>
			</table>
			
			<div id="rent">
				<button class="btnrent" type='button' onclick="window.location.href='form.html'">Book Now!</button>
			</div>
		</div>
	</section>
	</body>
</html>
</xsl:template>
</xsl:stylesheet>