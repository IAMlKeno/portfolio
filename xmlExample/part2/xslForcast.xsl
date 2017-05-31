<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
        <xsl:template match="/">
        <html>
            <head>
                <title>XML Example - XSLT</title>
                <link rel="stylesheet" href="stylesheets/xmlStyle.css"/>
                <link rel="stylesheet" href="stylesheets/menuStyle.css"/>
            </head>
            <body>
                <div class="navBar">
                    <ul>
                        <li>
                            <a href="index.php">
                                Forecast PHP
                            </a>
                        </li>
                        <li>
                            <a href="forecast.xml">
                                Forecast XSLT
                            </a>
                        </li>
                        <li>
                            <a href="part1/audioReceiverXML">
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
                <div id="container">
                <xsl:for-each select="forecast/location">
                    <span class="location">Forecast for <xsl:value-of select="city"/>, <xsl:value-of select="province"/>, <xsl:value-of select="country"/></span>
                    <br />
                    <span class="dateIssued"><i>issued at <xsl:value-of select="issued"/></i></span>
                    <br />
                    <span class="heading">Five day forecast</span>
                    <br />
                    <span class="degrees">Degrees in <xsl:value-of select="degrees"/></span>
                    <!-- HEADING-->
                    <!-- TABLE WITH THE FORECAST -->
                </xsl:for-each>

                <table class="forecast">
                    <tbody>
                        <tr>
                        <xsl:for-each select="forecast/daily/day">
                            <td>
                                <xsl:value-of select="date"/>
                                <br />
                                <div class="conditionImage">
                                    <xsl:element name="img">
                                        <xsl:attribute name="class">
                                            <xsl:text>forecastImg</xsl:text>
                                        </xsl:attribute>
                                        <xsl:attribute name="src">
                                            <xsl:text>images/</xsl:text>
                                            <xsl:value-of select="condition"/>
                                            <xsl:text>.jpg</xsl:text>
                                        </xsl:attribute>
                                    </xsl:element>
                                </div>
                                High: <xsl:value-of select="high"/><xsl:text disable-output-escaping="yes"><![CDATA[&deg;]]></xsl:text>
                                <br />
                                Low: <xsl:value-of select="low"/><xsl:text disable-output-escaping="yes"><![CDATA[&deg;]]></xsl:text>
                                <br />
                                <hr />
                                <xsl:value-of select="description"/>
                            </td>
                        </xsl:for-each>
                        </tr>
                    </tbody>
                </table>
                </div>
            </body>
        </html>
        </xsl:template>
</xsl:stylesheet>