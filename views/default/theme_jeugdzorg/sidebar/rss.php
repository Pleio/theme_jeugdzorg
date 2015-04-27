<?php

echo elgg_view_module("aside", "Landelijk nieuws", "<div id='divRss'></div>");

?>
<script type="text/javascript">

/* FeedEk jQuery RSS/ATOM Feed Plugin v1.1.2
*  http://jquery-plugins.net/FeedEk/FeedEk.html
*  Author : Engin KIZIL http://www.enginkizil.com
*  http://opensource.org/licenses/mit-license.php
*/


    
    
$(document).ready(function() {
	$.fn.FeedEk = function (opt) {
        var def = $.extend({
           FeedUrl: "http://rss.cnn.com/rss/edition.rss",
           MaxCount: 5,
           ShowDesc: true,
           ShowPubDate: true,
           CharacterLimit: 0,
           TitleLinkTarget: "_blank"
       }, opt);

       var id = $(this).attr("id");
      
       var i;
       $("#" + id).empty();
       $.ajax({
           url: "http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=" + def.MaxCount + "&output=json&q=" + encodeURIComponent(def.FeedUrl) + "&hl=en&callback=?",
           dataType: "json",
           success: function (data) {
               $("#" + id).empty();
               var s = "";
               $.each(data.responseData.feed.entries, function (e, item) {
                   s += '<li><div class="itemTitle"><a href="' + item.link + '" target="' + def.TitleLinkTarget + '" >' + item.title + "</a></div>";
                   if (def.ShowPubDate) {
                       i = new Date(item.publishedDate);
                       s += '<div class="itemDate elgg-subtext">' + i.toLocaleDateString() + "</div>";
                   }
                   if (def.ShowDesc) {
					   var description = item.content.replace(/(<([^>]+)>)/ig,"");
                       
                       if (def.DescCharacterLimit > 0 && description.length > def.DescCharacterLimit) {
                           s += '<div class="itemContent">' + description.substr(0, def.DescCharacterLimit) + "...</div>";
                       }
                       else {
                           s += '<div class="itemContent">' + description + "</div>";
                       }
                   }
               });
             	$("#" + id).append('<ul class="feedEkList">' + s + "</ul>");
           }
       });
   };
   
    $('#divRss').FeedEk({
        FeedUrl : 'http://www.voordejeugd.nl/actueel/nieuwsberichten?format=feed&type=rss',
        MaxCount : 5,
        ShowDesc : true,
        ShowPubDate:true,
        DescCharacterLimit:100,
        TitleLinkTarget:'_blank'
      });
});

</script>