
		<SCRIPT LANGUAGE="JavaScript">
     <!--
      var curImage =  '<?php  echo $_REQUEST['num']; ?>';
	  	//-->
	</SCRIPT>

<div style="max-width: 990px;">

		<img ID="myImage" src="images/<?php  echo $_REQUEST['img']; ?>"/>
		
		<div style="clear:both;">
    <div style="float: center ">
      <div style="padding:20px; width: 370px; float: left ">&nbsp;</div>
      <div onclick="javascript:prev();" style="cursor: pointer; margin-top: 20px; padding:20px; float: left ">&lt;</div>
      <div style="padding:20px; width: 30px; float: left ">&nbsp;</div>
    	<div onclick="javascript:next();" style="cursor: pointer; margin-top: 20px; padding:20px; float: left">&gt;</div>
    </div>
</div>
