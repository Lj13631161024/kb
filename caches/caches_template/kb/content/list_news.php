<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_index"); ?>
<!-- 新闻banner -->
<style type="text/css">
    #news a{
        color: #e6212a;
        background: #fff;
    }
    .news_index {
        width: 100%;
        height: 520px;
        /*height: 100%;*/
        background: url(http://qdmosshuanan01.oss-cn-shenzhen.aliyuncs.com/mallH5/kmT57jpbR72TR4PMJt4yymBfwrjWswEC.jpg) center no-repeat;
        background-size: 100% 100%;
    }
</style>
<div class="container-fluid news_index"></div>
<!-- 文章列表 -->
<style type="text/css">
    .news_title ul li {
        float: left;
        width: 16px;
        height: 16px;
        margin: auto;
        border-radius: 50%;
        background: #5f9500;
        display: inherit;
        margin-left: 20px;
        padding: 0
    }
    .news_title ul .yd_1 {
        width: 8px;
        height: 8px;
        margin-top: 4px;
    }
    .news_title ul .yd_2 {
        width: 12px;
        height: 12px;
        margin-top: 2px;
    }
    .news_title {
        text-align: center;
        line-height: 35px
    }
    .news_active{
        font-family: \\5FAE\8F6F\96C5\9ED1;
        font-size: 37px;
        letter-spacing: 5px;
        color: #81b801;
        margin-left: -0.3%;
    }
    @media (min-width: 1200px){
        .col-lg-2 {
            width: 16.931111%
        }
    }
    .BRAND{
        font-family: GillSansMT;
        font-size: 14px;
        letter-spacing: 2px;
        color: #b6b6b6;
    }
</style>
<div class="clear-60"></div>
<div class="container-fluid">
   <div class="container">
       <div class="row news_title">
           <div class="col-lg-1"></div>
           <div class="col-lg-2 BRAND">BRAND VIDEO</div>
           <div class="col-lg-2">
               <div class="">
                   <ul><li class="yd_1"></li><li class="yd_2"></li><li></li></ul>
               </div>
           </div>
            <div class="col-lg-2 news_active">公司动态</div>
            <div class="col-lg-2">
               <div class="">
                   <ul><li></li></li><li class="yd_2"></li><li class="yd_1"></ul>
               </div>
           </div>
            <div class="col-lg-2 BRAND">BRAND VIDEO</div>
            <div class="col-lg-2"></div>
       </div>
   </div>
</div>
<div class="clear-30"></div>
<!-- 文章列表 -->
<style type="text/css">
    .list_row{
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        cursor: pointer;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        background-size: 100%;
        width: /*1200px*/;
        margin: auto;
        -webkit-box-shadow: 0 0 25px -4px #999;
        box-shadow: 0 0 25px -4px #999;
    }
    .list_row .col-lg-4 {
        width: 440px;
        height: 280px;
        display: inline-block;      
    }
    .list_row .col-lg-4 img{
        width: 100%;
        height: 100%;
        display: inline-block;    
        margin-left: -15px;  
    }
    .list_row .col-lg-8 {
        /*padding: 20px;*/
        display: inline-block;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        /*margin-left: 25px;*/
        overflow: hidden;
    }
    .list_row .col-lg-8 ul li{
        display: inherit;
         margin-top: 10px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;  
        font-weight: 500 
    }
    .list_row a{
        text-decoration: none;
        color: #333;        
    }
    .list_row .col-lg-8 ul li h2{
        font-size: 18px;
        font-weight: 600
    }
    .list_row .col-lg-8 ul li p{
        /*margin-top: -5px;*/
        font-size: 14px;
        color: #999;
        margin-bottom: -4px
    }
    .list_row .col-lg-8 ul li h4{
        font-size: 16px;
        color: #333;
        height: 100px;
        line-height: 22px;
    }
</style>
<div class="container list">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=92d8d3392e6ee5854dbc4ea1c85d8f03&action=lists&catid=11+&num=1&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'11 ','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'11 ','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
    <div class="row list_row">
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>" target="_self"><div class="col-lg-4"><img src="<?php echo $r['thumb'];?>"></div></a>
        <div class="col-lg-8">
            <a href="<?php echo $r['url'];?>" target="_self">
                <ul>
                    <li><h2><?php echo $r['title'];?></h2></li>
                    <li><p><?php echo date('Y-m-d H:i:s',$r[updatetime]);?></p></li>
                    <li><h4><?php echo str_cut($r[description],556,'...');?></h4></li>
                </ul>
            </a>          
        </div>
        <?php $n++;}unset($n); ?>
    </div>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<!-- 新闻列表 -->
<style type="text/css">
    .news_list .row {
        border: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        cursor: pointer;
        font-size: 24px;
        height:200px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding-top: 15px;
        border-bottom: 1px solid #dedede; 
        margin-bottom: 0px;
    }
    .news_list .col-lg-3 img{
        margin-right: 40px;
        display: block;
        height: 146px;
        width: 230px;
        border: 1px solid #dedede;
    }
    .news_list .col-lg-9  h2{
        margin-top: 20px;
        font-size: 18px;
        color: #333;
        width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }
    .news_list .col-lg-9 p{
        font-size: 14px;
        color: #999;
        height: 30px;
        line-height: 30px;
        margin-top: 10px;
    }
    .news_list .col-lg-9  h4{
       margin-top: 10px;
        font-size: 16px;
        color: #333;
        line-height: 26px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
    .news_list  .col-lg-9 a {
        text-decoration: none;
    }
</style>
<div class="clear-60"></div>
<div class="container news_list">
   <!--  pc:get sql="select * from kb_news where  order by listorder DESC,id DESC" start="0" num="4"  -->
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bcd30d017002f5a2bc5eb9d8dca10cf7&action=lists&catid=11+&order=id+DESC&start=1&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'11 ','order'=>'id DESC','limit'=>'1,4',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <div class="row">
        <div class="col-lg-3"><a href="<?php echo $r['url'];?>" target="_self"><img src="<?php echo $r['thumb'];?>"></a></div>
        <div class="col-lg-9">
            <a href="" target="_self">
                <ul class="list-group">
                    <li class=""><h2><?php echo $r['title'];?></h2></li>
                    <li class=""><p><?php echo date('Y-m-d H:i:s',$r[updatetime]);?></p></li>
                    <li class=""><h4><?php echo str_cut($r[description],556,'...');?></h4></li>
                </ul>
            </a>
            
        </div>

    </div>
             <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<div class="clear-30"></div>
<?php include template("content","footer_index"); ?>