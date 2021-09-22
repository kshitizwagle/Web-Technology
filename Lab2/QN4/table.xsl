<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <style>
                th{
                    margin: 0;
                    border: 1px solid black;
                    border-collapse: collapse;
                }
                </style>
            </head>
            <body>
                <h2>Books</h2>
                <table style="">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Year</th>
                        <th>Price</th>
                    </tr>
                    <xsl:for-each select="bookstore/book">
                        <tr>
                            <td>
                                <xsl:value-of select="title"></xsl:value-of>
                            </td>
                            <td>
                                <xsl:value-of select="author"></xsl:value-of>
                            </td>
                            <td>
                                <xsl:value-of select="year"></xsl:value-of>
                            </td>
                            <td>
                                <xsl:value-of select="price"></xsl:value-of>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>