<html>

<head>

    <title> Email Security :: For <?php
	if(isset($_GET['emailaddress'])){
	echo $_GET['emailaddress'];
	
	}else{ 
	echo 'Apps Manager';
	}?> </title>

    <link rel="icon" href="./files/favicon.ico" type="image/gif">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


    <style>
        .dropbtn {
    background-color: #0B2161;
    min-width: 320px;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    -moz-border-radius: 2px; -webkit-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
    -webkit-box-shadow: 0px 0px 8px 3px #000000; box-shadow: 0px 0px 8px 3px #000000;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #6E6E6E;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #BDBDBD;
    min-width: 320px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}

tr {
    display: table-row;
    vertical-align: inherit;
    border-color: inherit;
}
table {
    white-space: normal;
    line-height: normal;
    font-weight: normal;
    font-size: medium;
    font-style: normal;
    color: -internal-quirk-inherit;
    text-align: start;
    font-variant: normal;
}
table {
    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: grey;
}
d[Attributes Style] {
    height: 45%;
    background-color: rgb(8, 75, 138);
}
t
td, th {
    display: table-cell;
    vertical-align: inherit;
}

table {
    white-space: normal;
    line-height: normal;
    font-weight: normal;
    font-size: medium;
    font-style: normal;
    color: -internal-quirk-inherit;
    text-align: start;
    font-variant: normal;
}

table {
    display: table;
    border-collapse: separate;
    border-spacing: 0px;
    border-color: grey;
}
</style>


    <script type="text/javascript">
        function display_c() {
            var refresh = 1000; // Refresh rate in milli seconds
            mytime = setTimeout('display_ct()', refresh)
        }

        function display_ct() {
            var x = new Date()
            document.getElementById('ct').innerHTML = x;
            display_c();
        }
    </script>


</head>


<body marginwidth="0" marginheight="0" topmargin="0" bottommargin="0" rightmargin="0" leftmargin="0" onload="display_ct();">

    <table width="100%" height="100%" align="center" cellspacing="0">

        <tbody>
            <tr>
                <td height="10%" bgcolor="#000">

                    <table>
                        <tbody>
                            <tr>

                                <td width="50"></td>

                                <td>

                                    <b>
                                        <font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="2" color="#FFF">
                                            <span id="ct">Fri Apr 12 2019 18:45:04 GMT+0300 (East Africa Time)</span>
                                        </font>
                                    </b>

                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>

            <tr>
                <td height="85%" bgcolor="#E6E6E6">


                    <table align="center">
                        <tbody>
                            <tr>
                                <td style="width:380px;">


                                    <font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="+3" color="#08298A">



                                        WebApp Manager


                                    </font>


                                </td>
                            </tr>
                        </tbody>
                    </table>




                    <br>





                    <table align="center">
                        <tbody>
                            <tr>

                                <td>


                                    <table>
                                        <tbody>
                                            <tr>
                                                <td style="width:380px; height:300px; font-family: Verdana; font-size: 13px; font-weight: light; color:#000000; 
		background-color: #FAFAFA; border: solid 1px #F2F2F2; padding: 8px; 
		-moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		-webkit-box-shadow: 0px 0px 17px 10px #000000; box-shadow: 0px 0px 17px 10px #000000;">

                                                    
                                                    <form method="post" action="submit_message.php">
                                                    <table align="center">

                                                        <tbody>
                                                            <tr>
                                                                <td>


                                                                    

                                                                </td>
                                                            </tr>





                                                            <tr>
                                                                <td height="">

                                                                    <font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="2" color="#000">

                                                                        <font size="+1" color="#08298A">Enter "HTML Content" message </font>


                                                                    </font>

                                                                </td>
                                                            </tr>




                                                            <tr>
                                                                <td height="5"></td>
                                                            </tr>


                                                            <tr>
                                                                <td height="5"></td>
                                                            </tr>



                                                            <tr>
                                                                <td>
                                                                

                                                                <textarea rows="25" cols="80" name="htmlmessage" style="font-family: Verdana; font-size: 13px; font-weight: light; color:#000000; 
				background-color: #E6E6E6; border: solid 1px #333; padding: 8px; 
				-moz-border-radius: 2px; -webkit-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
				-webkit-box-shadow: 0px 0px 8px 3px #000000; box-shadow: 0px 0px 8px 3px #000000;" ></textarea>
                

                                                                </td>
                                                            </tr>




                                                            <tr>
                                                                <td height="5"></td>
                                                            </tr>

                                                            <tr>
                                                                <td height="5"></td>
                                                            </tr>





                                                            <tr>
                                                                <td>

                                                                    <input type="submit" name="previewbutton" value="Preview Message >>>" style="width:150px; height:40px;
				background-color: #08298A; border: solid 3px #08298A; font-family: Verdana; 
				font-size: 13px; font-weight: light; color: #ffffff; 
				-moz-border-radius: 2px; -webkit-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
				-webkit-box-shadow: 0px 0px 8px 3px #000000; box-shadow: 0px 0px 8px 3px #000000;">


                                                                </td>

                                                                <td>

                                                                    <input type="submit" name="submitbutton" value="Send Now >>>" style="width:150px; height:40px;
				background-color: #08298A; border: solid 3px #08298A; font-family: Verdana; 
				font-size: 13px; font-weight: light; color: #ffffff; 
				-moz-border-radius: 2px; -webkit-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
				-webkit-box-shadow: 0px 0px 8px 3px #000000; box-shadow: 0px 0px 8px 3px #000000;">


                                                                </td>
                                                            </tr>






                                                        </tbody>
                                                    </table>
                                                    </form>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>


                                </td>

                            </tr>
                        </tbody>
                    </table>



                    <br><br>


                </td>
            </tr>

            <tr>
                <td height="5%" bgcolor="#08298A">

                    <div align="center">
                        <font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="2" color="#FFF">


                            -- | Email Settings | For: | --


                        </font>
                    </div>

                </td>
            </tr>

        </tbody>
    </table>



</body>

</html>