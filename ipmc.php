
<!DOCTYPE html>
<html>

<head>
	<title>Getting Clients IP</title>
	<style>
	p, h1 {
		color: green;
	}
	</style>

	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	
	<script>
	
	/* Add "https://api.ipify.org?format=json" statement
			this will communicate with the ipify servers in
			order to retrieve the IP address $.getJSON will
			load JSON-encoded data from the server using a
			GET HTTP request */
				
	$.getJSON("https://api.ipify.org?format=json", function(data) {
		
		// Setting text of element P with id gfg
		$("#gfg").html(data.ip);
	})
	</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	
</script>
<script>
	$.getJSON("https://api.ipify.org?format=json", function(data){
		$("#ip").html(data.ip);
	})
   function hd(){
    var td1;
    td1=document.getElementById("gfg").innerHTML;
    document.getElementById("gf").value=td1;
   }
    
</script>
</head>

<body>
	<center>
    <form action="ipmc.php" method="POST">
		<h1>GeeksforGeeks</h1>
		<h3>Public IP Address of user is:</h3>
		<p id="gfg"></p>
        <input type="text" name="it" id="gf" readonly>

	</center>
    <input type="submit" name="subm" onclick="hd()"> 
	<input type="text" id="log" name="log" style="width:100%;">
	<input type="text" id="td1" name="log" style="width:100%;">
    </form>
    
        <script>
            (function () {
    'use strict';
    
    var module = {
        options: [],
        header: [navigator.platform, navigator.userAgent, navigator.appVersion, navigator.vendor, window.opera],
        dataos: [
            { name: 'Windows Phone', value: 'Windows Phone', version: 'OS' },
            { name: 'Windows', value: 'Win', version: 'NT' },
            { name: 'iPhone', value: 'iPhone', version: 'OS' },
            { name: 'iPad', value: 'iPad', version: 'OS' },
            { name: 'Kindle', value: 'Silk', version: 'Silk' },
            { name: 'Android', value: 'Android', version: 'Android' },
            { name: 'PlayBook', value: 'PlayBook', version: 'OS' },
            { name: 'BlackBerry', value: 'BlackBerry', version: '/' },
            { name: 'Macintosh', value: 'Mac', version: 'OS X' },
            { name: 'Linux', value: 'Linux', version: 'rv' },
            { name: 'Palm', value: 'Palm', version: 'PalmOS' }
        ],
        databrowser: [
            { name: 'Chrome', value: 'Chrome', version: 'Chrome' },
            { name: 'Firefox', value: 'Firefox', version: 'Firefox' },
            { name: 'Safari', value: 'Safari', version: 'Version' },
            { name: 'Internet Explorer', value: 'MSIE', version: 'MSIE' },
            { name: 'Opera', value: 'Opera', version: 'Opera' },
            { name: 'BlackBerry', value: 'CLDC', version: 'CLDC' },
            { name: 'Mozilla', value: 'Mozilla', version: 'Mozilla' }
        ],
        init: function () {
            var agent = this.header.join(' '),
                os = this.matchItem(agent, this.dataos),
                browser = this.matchItem(agent, this.databrowser);
            
            return { os: os, browser: browser };
        },
        matchItem: function (string, data) {
            var i = 0,
                j = 0,
                html = '',
                regex,
                regexv,
                match,
                matches,
                version;
            
            for (i = 0; i < data.length; i += 1) {
                regex = new RegExp(data[i].value, 'i');
                match = regex.test(string);
                if (match) {
                    regexv = new RegExp(data[i].version + '[- /:;]([\\d._]+)', 'i');
                    matches = string.match(regexv);
                    version = '';
                    if (matches) { if (matches[1]) { matches = matches[1]; } }
                    if (matches) {
                        matches = matches.split(/[._]+/);
                        for (j = 0; j < matches.length; j += 1) {
                            if (j === 0) {
                                version += matches[j] + '.';
                            } else {
                                version += matches[j];
                            }
                        }
                    } else {
                        version = '0';
                    }
                    return {
                        name: data[i].name,
                        version: parseFloat(version)
                    };
                }
            }
            return { name: 'unknown', version: 0 };
        }
    };
    
    var e = module.init(),
        debug = '';
    
    
    debug += '' + navigator.appVersion ;
 
    
    document.getElementById('log').value = debug;
	let sentence = debug;
	let array = sentence.split(" "); 
	console.log(array[5]); // ["The","big","question"]
	document.getElementById('td1').value = array[4];
}());
        </script>
</body>
<?php
/*
$log1=$_POST['log'];

$log2=substr($log1,5,33);
$log3=split("\.", $log2);
echo($log3[4]);
*/
?>
</html>
