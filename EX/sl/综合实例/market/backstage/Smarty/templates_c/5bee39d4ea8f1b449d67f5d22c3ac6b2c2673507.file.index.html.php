<?php /* Smarty version Smarty-3.1.16, created on 2014-03-05 14:45:04
         compiled from "F:\Web\apache\htdocs\market\Smarty\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2547853173870c1d719-21245952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bee39d4ea8f1b449d67f5d22c3ac6b2c2673507' => 
    array (
      0 => 'F:\\Web\\apache\\htdocs\\market\\Smarty\\templates\\index.html',
      1 => 1392549200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2547853173870c1d719-21245952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53173870cb17d4_68374489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53173870cb17d4_68374489')) {function content_53173870cb17d4_68374489($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <title>明日科技网上商城</title>
    <link href="css/css.css" rel="stylesheet" type="text/css" />
    <LINK href="css/mobanwang.css" type=text/css rel=stylesheet>
    <link type="text/css" href="css/lrtk.css" rel="stylesheet" />
    <SCRIPT src="js/jquery-1.4.2.min.js" type=text/javascript></SCRIPT>
    <SCRIPT src="js/mobanwang.js" type=text/javascript></SCRIPT>
    <SCRIPT src="js/jquery.js" type=text/javascript></SCRIPT>
</head>
<body>
<div class="top">
    <div class="l"><a href="index.php"></a></div>
    <div class="r">
        <div class="m1" onmouseout="b1()" onmouseover="a1()"><a href="about_us.html"></a>
            <ul style="display:none;" id="dhx" class="aa">
                <li><a href="about_us.html">关于我们</a></li>
                <li><a href="contact_us.html">联系我们</a></li>
            </ul>
        </div>
        <div class="m2"><a href="product_list.php" id="a2"></a>
            <ul style="display:none;" id="dhx1" class="aa">
                <li><a href="product_list.php">产品展示</a></li>
            </ul>
        </div>
        <div class="m3" onmouseout="b3()" onmouseover="a3()"><a href="news.php"></a>
            <ul style="display:none;" id="dhx2" class="aa">
                <li><a href="news.php">业内新闻</a></li>
            </ul>
        </div>

        <div class="m4"><a href="JOIN_INVESTMENT.html"></a></div>
        <script>
            function a1(){
                document.getElementById("dhx").style.display="";
            }
            function b1(){
                document.getElementById("dhx").style.display="none";
            }
            function a2(){
                document.getElementById("dhx1").style.display="";
            }
            function b2(){
                document.getElementById("dhx1").style.display="none";
            }
            function a3(){
                document.getElementById("dhx2").style.display="";
            }
            function b3(){
                document.getElementById("dhx2").style.display="none";
            }


            function chksearch(form){
                if(form.keyword.value==''){
                    alert('please input keyword！');
                    form.keyword.focus();
                    return false;
                }
            }
        </script>
    </div>
</div>

<div class="main">
    <DIV id=imgPlay>
        <UL class=imgs id=actor>
            <LI><A href="" target=_blank><IMG title=healthou--recovery food src="images/06.gif"></A></LI>
            <LI><A href="" target=_blank><IMG title=healthou--recovery food src="images/04.jpg"></A></LI>
            <LI><A href="" target=_blank><IMG title=healthou--recovery food src="images/011.png"></A></LI>
            <LI><A href="" target=_blank><IMG title=healthou--recovery food src="images/111.gif"></A></LI>
        </UL>
        <DIV class=num>
            <P class=c></P>
            <P class=mc></P>
            <P class=rc></P></DIV>
        <DIV class=num id=numInner ></DIV>
        <div class="prev">PREV</div>
        <div class="next">NEXT</div>
    </DIV>
</div>
<div class="hr_25"></div>
<div class="main1">
    <div class="l"><a href=""></a></div>
    <div class="l1">
        <form action="product_list.php" method="post" onsubmit="return chksearch(this)">

            <div class="p2"> <div class="p2_1"><input name="keyword" type="text" value="请输入产品名称关键字"  onfocus="if(this.value=='请输入产品名称关键字'){this.value=''}" onblur="if(this.value==''){this.value='请输入产品名称关键字'}" style=" color:#bdc0c5;"></div><div class="p2_2">
                <input type="image" name="submit" src="images/zoom1.jpg" style="display: block; float: left; height: 36px; width: 36px;"/></div>
            </div>

        </form>
    </div>
    <div class="r">
        <div class="t"></div>
        <div class="bo">
            <div class="img-scroll"> <span class="prev"><b></b></span> <span class="next"><b></b></span>
                <div class="img-list">
                    <ul>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['products']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
                        <li><a href="product_view.php?id=<?php echo $_smarty_tpl->tpl_vars['products']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['entity_id'];?>
"><img src="productImages/<?php echo $_smarty_tpl->tpl_vars['products']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['smallcover'];?>
" width="85" height="130" />
                        <?php endfor; endif; ?>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                function DY_scroll(wraper,prev,next,img,speed,or)
                {
                    var wraper = $(wraper);
                    var prev = $(prev);
                    var next = $(next);
                    var img = $(img).find('ul');
                    var w = img.find('li').outerWidth(true);
                    var s = speed;
                    next.click(function()
                    {
                        img.animate({'margin-left':-w},function()
                        {
                            img.find('li').eq(0).appendTo(img);
                            img.css({'margin-left':0});
                        });
                    });
                    prev.click(function()
                    {
                        img.find('li:last').prependTo(img);
                        img.css({'margin-left':-w});
                        img.animate({'margin-left':0});
                    });
                    if (or == true)
                    {
                        ad = setInterval(function() { next.click();},s*1000);
                        wraper.hover(function(){clearInterval(ad);},function(){ad = setInterval(function() { next.click();},s*1000);});

                    }
                }
                DY_scroll('.img-scroll','.prev','.next','.img-list',3,true);
            </script>
        </div>
    </div></div>
<div class="hr_10"></div>
<div class="food">
    <a href="index.php"><div class="l"></div></a>
    <div class="l1"><BR/><a href="www.mingribook.com/contact.php">联系我们</a> | <a href="www.mingrisoft.com">公司网站</a> | <a href="www.mingribook.com/map.php">企业地图</a><BR/>
        电话:0431-84978981<BR/>
        <a href="www.mingribook.com">长春市高新区锦河街155号电子信息楼三层301室</a><br/>? Copyright 吉林省明日科技有限公司.</div>
    <div class="r"><p>明日科技出品的编程词典系列产品是面向各级程序开发人员的编程资源库，它是吉林省明日科技有限公司从十多年编程教育过程中提炼出海量的精品源码、项目模块、典型范例和技巧、精彩视频教程，是集学习和开发于一体的专业编程资源库。</p></div>
</div>
</body>
</html><?php }} ?>
