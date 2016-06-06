<?php

function hook_disqus_render_linklist($data)
{
    if(!isset($GLOBALS['plugins']['DISQUS_SHORTNAME'])){
        return $data;
    }
    
    $disqusShortname = $GLOBALS['plugins']['DISQUS_SHORTNAME'];

    if(count($data['links']) === 1 && !isset($_GET['page']) && !empty($disqusShortname)){
        foreach ($data['links'] as $key => $link) {

            if(isset($_GET[$link['shorturl']])){
                // We are on the permalink page.
                $data['plugin_end_zone'][] = '
<div id="disqus_thread" style="padding:10px;"></div>
<script>
var disqus_config = function () {
this.page.url = "' . $link['url'] . '";
this.page.identifier = "' . $link['shorturl'] . '";
};
(function() {
var d = document, s = d.createElement("script");
s.src = "//' . $disqusShortname . '.disqus.com/embed.js";
s.setAttribute("data-timestamp", +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                ';
            }
        }
    }

    return $data;
}