<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title></title>
  
  
  <link rel="stylesheet" href="jquery.mobile-1.3.1.min.css">

  <link rel="stylesheet" href="jqm.css">
  
  <!-- Extra Codiqa features -->
  <link rel="stylesheet" href="codiqa.ext.css">

<script type="text/javascript" src="jq203.min.js"> </script>
<script type="text/javascript" src="index.js"> </script>

  <!-- jQuery and jQuery Mobile -->
<!--  <script src="jquery-1.9.1.min.js"></script> -->
<script src="jquery.mobile-1.3.2.min.js"></script>

  <!-- Extra Codiqa features -->
  <script src="codiqa.ext.js"></script>

<script type="text/javascript">
$(function() 
{
	$('#searchForm').submit(function () {
	    $.post('http://citifren.com/lm/lm.query.php', $('#searchForm').serialize(), function (data, textStatus) {
		 $('#result').append(data);
	    });

	    return false;
	});

});
</script>

<script>

function clearBox(result)
{
    document.getElementById(result).innerHTML = "";
}


</script>
  

</head>
<body>


<div data-role="page" id="satu" data-theme="ui-responsive-panel">


	<div data-role="header">
	<h1>HAPPY WAY</h1>

    	<a href="#satu" data-icon="home"></a>
    	<a href="#satu" data-icon="arrow-u"></a>


	</div><!-- /header -->


    <div data-role="content" class="jqm-content">

	<div data-role="navbar">
    	<ul>
        	<li><a href="#satu" >Home</a></li>
        	<li><a href="about.html" data-rel="dialog" data-transition="slidedown">About</a></li>
        	<li><a href="help.html" >Help</a></li>
    	</ul>
	</div><!-- /navbar -->

    <div data-role="content">

<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">

    <div data-role="collapsible">
        <h3>Cari Hadis/Alquran</h3>


    <form action="" id="searchForm">

                <label for="id_cari_hadist_atau_alq">
                    Masukkan kata:
                </label>
                <input name="phone" id="id_cari_hadist_atau_alq" placeholder=""
                value="" type="text" data-mini="true">

            <input type="submit" value="Cari" onClick="clearBox('result')">

        </form>

    </div>

    <div data-role="collapsible">
        <h3>Tambah Hadist/Alquran</h3>


        <form action="" id="formAddData">
            <div data-role="fieldcontain">
                <label for="id_isi_hadist">
                    ISI Hadist/Alquran
                </label>
                <textarea name="input_hadist" id="id_isi_hadist" placeholder=""></textarea>
            </div>
            <div data-role="fieldcontain">
                <label for="inti">
                    INTI Hadist/Alquran:
                </label>
                <input name="input_topic" id="inti" placeholder="" value="" type="text">
            </div>
            <div data-role="fieldcontain">
                <fieldset data-role="controlgroup" data-type="vertical">
                    <legend>
                        Choose:
                    </legend>
                    <input id="radio1" name="QR_or_HD" value="HD" type="radio" checked="checked">
                    <label for="radio1">
                        Hadist
                    </label>
                    <input id="radio2" name="QR_or_HD" value="QR" type="radio">
                    <label for="radio2">
                        Alquran
                    </label>
                </fieldset>
            </div>
            <input id="kirim" value="Send" type="submit" onClick="clearBoxPut('resultput')">
        </form>




      <div id="resultput">.</div>

    </div>

    <div data-role="collapsible">
        <h3>Chatting</h3>
    NOT YET AVAILABLE. This is chatting room.
    </div>

    <div data-role="collapsible" data-collapsed-icon="gear" data-expanded-icon="delete" >
        <h3>Voice Call</h3>
        <p>NOT YET AVAILABLE. Please register your phone number and input password. Follow the settings guide: .</p>
    </div>
</div>

<a style="text-decoration:none" href=# onClick="clearBox('result')" >Clear Data</a>
       <div  id="result">.</div>

    </div>


</div>



<div data-role="footer" data-position="fixed" class="ui-bar" data-id="myfoot">
    <a href="http://citifren.com/lm/lm3.php#satu" data-icon="home">Home</a>
    <a href="#dua" data-icon="arrow-u">Up</a>
    <a href="#dua" data-icon="arrow-d">Down</a>
</div>


<script type="text/javascript">
$(function()
{
        $('#formAddData').submit(function () {
            $.post('http://citifren.com/lm/lm.put.php', $('#formAddData').serialize(), function (data, textStatus) {
                 $('#resultput').append(data);
            });

            return false;
        });

});
</script>

<script>

function clearBoxPut(resultput)
{
    document.getElementById(resultput).innerHTML = "";
}


</script>

<div data-role="page" id="dua">

        <div data-role="header">
                <h1>LIFE MANUAL</h1>
        </div><!-- /header -->

<div data-role="navbar">
    <ul>
        <li><a href="#satu"  class="ui-btn-active">Home</a></li>
        <li><a href="#dua">Add</a></li>
        <li><a href="#">Help</a></li>
    </ul>
</div><!-- /navbar -->

    <div data-role="content">

        <form action="" id="formAddData">
            <div data-role="fieldcontain">
                <label for="id_isi_hadist">
                    ISI Hadist/Alquran
                </label>
                <textarea name="input_hadist" id="id_isi_hadist" placeholder=""></textarea>
            </div>
            <div data-role="fieldcontain">
                <label for="inti">
                    INTI Hadist/Alquran:
                </label>
                <input name="input_topic" id="inti" placeholder="" value="" type="text">
            </div>
            <div data-role="fieldcontain">
                <fieldset data-role="controlgroup" data-type="vertical">
                    <legend>
                        Choose:
                    </legend>
                    <input id="radio1" name="QR_or_HD" value="HD" type="radio" checked="checked">
                    <label for="radio1">
                        Hadist
                    </label>
                    <input id="radio2" name="QR_or_HD" value="QR" type="radio">
                    <label for="radio2">
                        Alquran
                    </label>
                </fieldset>
            </div>
            <input id="kirim" value="Send" type="submit" onClick="clearBoxPut('resultput')">
        </form>

        <div  id="resultput">Hasil</div>

    </div>
</div>
</body>
</html>


