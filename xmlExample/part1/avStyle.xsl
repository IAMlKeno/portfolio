<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
        <html>
            <head>
                <title>XML Example - XSLT</title>
				<link rel="stylesheet" href="../stylesheets/xmlStyle.css"/>
				<link rel="stylesheet" href="../stylesheets/menuStyle.css"/>
            </head>
            <body>
				<div id="audioContainer" >
					<div class="navBar">
						<ul>
							<li>
								<a href="../index.php">
									Forecast PHP
								</a>
							</li>
							<li>
								<a href="../forecast.xml">
									Forecast XSLT
								</a>
							</li>
							<li>
								<a href="audioReceiverXML">
									Audio Receiver XSLT
								</a>
							</li>
							<li>
								<a href="../about.php">
									About Project
								</a>
							</li>
						</ul>
					</div>
					<xsl:for-each select="inventory/receiver">
						Brand: <xsl:value-of select="brand"/>
						<br />
						Model: <xsl:value-of select="model"/>
						<hr />
					</xsl:for-each>
				</div>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>