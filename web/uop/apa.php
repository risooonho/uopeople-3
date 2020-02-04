
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

	  <!-- Compiled and minified CSS -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

	  <!-- Compiled and minified JavaScript -->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>




      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<style>
#OutputHref {
 	font-size: x-large;
 }
 </style>

    </head>

    <body>


  <div class="section no-pad-bot" id="index-banner">
    <div class="container">

		<h2># UoPeople</h2>

		<h5>

		Convenient Tools for Students of University of the People
		</h5>
		<br />

		I thought it's convenient if I can shrink all posts in the discussion forums.<br />

		<br />

		So I made this bookmarklet.
		<br />
		<br />


		<h4>
		# How to use <small>updated Feb 2020</small>

		</h4>
		<br />
		<ol>

		<li> Drag this -> 
		<b>
			<a id="codeOut" href="javascript:(function(){(function(){$(&quot;.post-content-container .text_to_html&quot;).each(function(){$(this).hide()});$(&quot;.post-content-container&quot;).each(function(){post='<div class=&quot;post_abbr&quot;>'+$(this).find(&quot;.text_to_html&quot;).text().slice(0,100)+'...';post+='<a onclick=&quot;expand_this_post(this);&quot;>Expand</a></div>';out=$(this).html()+post;$(this).html(out);});$(&quot;.starter ~ div > .indent > article > .forumpost&quot;).each(function(){$(this).css('box-shadow','-20px 0 0 #76AFB5')});$(&quot;.starter ~ div > .indent > article &quot;).each(function(i){$(this).find(&quot;.forumpost&quot;).each(function(j){$(this).prepend(&quot;<span class='breadcrumb' style='float: left;margin-left: -35px;'>&quot;+(i+1)+'-'+(j+1)+'. </span>');});});function expand_this_post(o){$(o).parent().parent().find(&quot;.text_to_html&quot;).each(function(){$(this).show();});$(o).parent().parent().find(&quot;.post_abbr&quot;).each(function(){$(this).hide();});}})();})();">Shrink!</a>
		</b>
		  <- link into the bookmark bar of your browser.

<br />
<br />

		<img src="howto.jpg" width="400">

		<br />
		<br />

		<li>Open any discussion forum in moodle
		<br />
		<br />

		<li>Click the bookmarklet that you dragged into your bookmark bar
		<br />
		<br />

		<li>If all of the posts are shrunk in short boxes, it means working correctly.
		<br /><br />

		<li> Example:<br />
<br />

		<img src="db.jpg">
		<br />

		</ol>

<br><br><br>

<!--

$("#id_messageeditable, #id_content_editoreditable").each(function(){
    var h = $(this).css("height").replace("px","");
    console.log(h);
    $(this).css("height", (parseInt(h) + 200) + "px");
});
$("aside, #fitem_id_attachment_filemanager, #fitem_id_filemanagerinfo").hide();


                   http://ted.mielczarek.org/code/mozilla/bookmarklet.html

-->
	    <h5># Expand textarea in WA, DB and LJ</h5>
<a id="codeOut" href='javascript:(function(){$("#id_messageeditable, #id_content_editoreditable").each(function(){var h=$(this).css("height").replace("px","");console.log(h);$(this).css("height",(parseInt(h)+200)+"px");});$("aside, #fitem_id_attachment_filemanager, #fitem_id_filemanagerinfo").hide();})();'>Expand</a>

<!--

window.open("https://uopeople.herokuapp.com/uop/apa.php?url=" + encodeURIComponent(document.URL));



-->
	    <h5># Get APA citation</h5>
	    <ol>
		    <li> Drag this bookmarklet to your bookmark bar <br>
	    <a id="codeOut" href='javascript:(function(){window.open("https://uopeople.herokuapp.com/uop/apa.php?url="+encodeURIComponent(document.URL) + "%26sel=" + encodeURIComponent(window.getSelection()));})();'>apatab</a>
	            <li> Open your reference page
	            <li> (Select the author name or date of the article or both if exists)
		    <li> Click the registered bookmarklet
	            <li> Copy the auto-generated apa citation and use
	            <li> Fix the author or date if it is wrong
	    </ol>
	    <hr>
	    <H5> Sort elements by name</h5>
	    Use at the top page of each class.<br>
	    <a id="codeOut" href="javascript:(function(){FIND=[&quot;Discussion Forum&quot;,&quot;Learning Journal&quot;,&quot;Written Assignment&quot;,&quot;Self Quiz&quot;,&quot;Graded Quiz&quot;,&quot;Final Exam&quot;];OUT=&quot;&quot;;$.each(FIND,function(key,find){OUT=OUT+get(find);});document.write(OUT);function get(FIND){RES=&quot;<h3>&quot;+FIND+&quot;</h3>&quot;;$(&quot;a&quot;).each(function(){str=$(this).text();if(str.match(FIND)){console.log(str);text=$(this).text();url=$(this).attr(&quot;href&quot;);RES=RES+&quot;<a href='&quot;+url+&quot;'>&quot;+text+&quot;</a><br><br>&quot;;}});return RES;}})();">sort</a>
	    
	    <hr>
	    
	    <h5> Nice View on Javanotes</h5>
	    CSS and hilight java syntax
<a id="codeOut" href="javascript:(function(){var colorScheme='darkula';var link=document.createElement('link');link.setAttribute('rel','stylesheet');link.setAttribute('type','text/css');link.setAttribute('href','//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/styles/'+colorScheme+'.min.css');document.getElementsByTagName('head')[0].appendChild(link);var script=document.createElement('script');script.setAttribute('type','text/javascript');script.setAttribute('src','//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/highlight.min.js');document.getElementsByTagName('head')[0].appendChild(script);script.addEventListener('load',function(){var pres=document.querySelectorAll('pre');for(var i=0;i<pres.length;++i){if(!pres[i].querySelector('code')){window.hljs.highlightBlock(pres[i]);}else{window.hljs.highlightBlock(pres[i].querySelectorAll('code')[0]);}}});})();">javanotes</a>

	    <li> Stylish CSS</li>
<pre>
body, p span.code {
    font-family: Helvetica, Arial !important;
    line-height: 1.5;
}
div.page {
    color: #333;
}
pre {
    font-size: 110%;
    background: #333;
    color: #eee;
    padding: 20px;
    line-height: 1.7;
}
small {
    font-size: 130%;
}
</pre>
	  
	  </div>
  </div>
	    

<!--
			http://ted.mielczarek.org/code/mozilla/bookmarklet.html


<hr>
<a href="./quiz.html">	   Another tool for quiz </a>

-->

	    
    </body>
  </html>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92688318-1', 'auto');
  ga('send', 'pageview');

</script>


<a href="https://github.com/kujiy/uopeople/tree/master/docs"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>


