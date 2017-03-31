@extends('layout.layout-master')
@section('title','Contact')

@section('subheader')
    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_short.jpg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <div id="sub_content">
                <h1>Liên hệ</h1>
                <p>Thông tin liên hệ của hệ thống các nhà hàng chúng tôi.</p>
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End SubHeader ============================================ -->
@endsection

@section('breadcrumb')
    @include('_parts.front.breadcrumb')
@endsection

@section('content')
    <!-- Content ================================================== -->
    <div class="container margin_60_35">
        <div class="row" id="contacts">
            <div class="col-md-6 col-sm-6">
                <div class="box_style_2">
                    <h2 class="inner">Dịch vụ chăm sóc khách hàng</h2>
                    <p class="add_bottom_30">Adipisci conclusionemque ea duo, quo id fuisset prodesset, vis ea agam quas. <strong>Lorem iisque periculis</strong> id vis, no eum utinam interesset. Quis voluptaria id per, an nibh atqui vix. Mei falli simul nusquam te.</p>
                    <p><a href="tel://004542344599" class="phone"><i class="icon-phone-circled"></i>  +45 423 445 70</a></p>
                    <p class="nopadding"><a href="http://www.ansonika.com/cdn-cgi/l/email-protection#dfbcaaacabb0b2baadbcbeadba9faeaab6bcb4b9b0b0bbf1bcb0b2"><i class="icon-mail-3"></i> <span class="__cf_email__" data-cfemail="395a4c4a4d56545c4b5a584b5c79484c505a525f56565d175a5654">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="box_style_2">
                    <h2 class="inner">Hỗ trợ cho các nhà hàng</h2>
                    <p class="add_bottom_30">Quo ex rebum petentium, cum alia illud molestiae in, pro ea paulo gubergren. Ne case constituto pro, ex vis delenit complectitur, per ad <strong>everti timeam</strong> conclusionemque. Quis voluptaria id per, an nibh atqui vix.</p>
                    <p><a href="tel://004542344599" class="phone"><i class="icon-phone-circled"></i>  +45 423 445 99</a></p>
                    <p class="nopadding"><a href="http://www.ansonika.com/cdn-cgi/l/email-protection#0764727473686a6275646675624776726e646c616868632964686a"><i class="icon-mail-3"></i> <span class="__cf_email__" data-cfemail="77040207071805033706021e141c111818135914181a">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    <!-- End Content =============================================== -->
@endsection

@section('specificscripts')
    <script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>
@endsection