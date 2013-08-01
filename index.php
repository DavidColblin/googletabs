<html>
<head>
	 <script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="http://www.google.com/jsapi"></script> <!--?key=ABCDEFG-->

<script language="Javascript" type="text/javascript">
//<![CDATA[
  google.load('search', '1.0');
  
  function OnLoad() {

    // create a tabbed mode search control
    var tabbed = new google.search.SearchControl();

    tabbed.addSearcher(new google.search.WebSearch());
    tabbed.addSearcher(new google.search.ImageSearch());
    tabbed.addSearcher(new google.search.BlogSearch());
    tabbed.addSearcher(new google.search.NewsSearch());
    tabbed.addSearcher(new google.search.BookSearch());

    // draw in tabbed layout mode
    var drawOptions = new google.search.DrawOptions();
    drawOptions.setDrawMode(google.search.SearchControl.DRAW_MODE_TABBED);
    tabbed.draw(document.getElementById("search_control_tabbed"), drawOptions);

  }
  google.setOnLoadCallback(OnLoad, true);
//]]>
</script>


</head>
<body>
<div class="search_control" id="search_control_tabbed">Loading</div>

<iframe src="http://www.facebook.com/widgets/like.php?a=lol"         scrolling="no" frameborder="0"         style="border:none; width:450px; height:80px"></iframe>
<iframe src="http://www.facebook.com/plugins/live_stream_box.php?app_id=255955255198&amp;width=400&amp;height=500&amp;via_url&amp;always_post_to_friends=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:500px;" allowTransparency="true"></iframe>
</body>


</html>