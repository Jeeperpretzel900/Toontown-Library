<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS" />
<title>トゥーンタウン・オンライン</title>
<script language="javascript">AC_FL_RunContent = 0;</script>
<script src="/common/AC_RunActiveContent.js" language="javascript"></script>
<script language="javascript" src="common/gnavi.js"></script>
<script language="JavaScript">
<!--
if ((navigator.appVersion.indexOf("Mac") != -1)) {
document.write("<LINK REL=stylesheet HREF=\"common/stylemac.css\" TYPE=\"text/css\">"); }
else {
document.write("<LINK REL=stylesheet HREF=\"common/stylewin.css\" TYPE=\"text/css\">"); }

function ChkALL () {
	var your_name_val = document.mailForm1.your_name.value;
	var your_mail_val = document.mailForm1.your_mail.value;
	var user_id_val = document.mailForm1.user_id.value;
	var your_tel_val  = document.mailForm1.your_tel.value;
	var q5_val  = document.mailForm1.q5.value;

	if( !your_mail_val ){
		alert("メールアドレスを入力してください。");
		return false;

	}else if( chkMail(your_mail_val) == 1 ){
		alert("メールアドレスが不正です。");
		return false;

	}else if( !user_id_val ){
		alert("メンバー名を入力してください。");
		return false;

	}else if( !your_name_val ){
		alert("氏名（漢字）を入力してください。");
		return false;

	}else if( your_tel_val && checkNum(your_tel_val) ){
		alert("連絡先電話番号は半角数字、ハイフンなしで入力してください。");
		return false;

	}else if( !q5_val ){
		alert("お問い合わせ内容を入力してください。");
		return false;
	}
  return true;
}

//半角→全角へ置換
function chekHankaku(checkString){
	han = "ｱｲｳｴｵｶｷｸｹｺｻｼｽｾｿﾀﾁﾂﾃﾄﾅﾆﾇﾈﾉﾊﾋﾌﾍﾎﾏﾐﾑﾒﾓﾔﾕﾖﾗﾘﾙﾚﾛﾜｦﾝｧｨｩｪｫｬｭｮｯｰﾞﾟ\"\\'";
	zen = "アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲンァィゥェォャュョッー゛゜”￥’";
	goString = ""
	for(i=0;i<checkString.length;i++){
		c = checkString.charAt(i);
		n = han.indexOf(c,0);
		if (n >= 0) c = zen.charAt(n);
		goString += c;
	}
	
	return goString;
}

//数値チェック
function checkNum(checkword) {
	flag = isNaN(checkword);
	if(flag == true){
		return true;
	}
 	return false;
}

//アドレスチェック
function chkMail(inAddr){
	indata = inAddr.match(/^\S+@\S+\.\S+$/);
	if(inAddr){
		if(!indata){
			return 1;
		}
	}
}
//-->
</script>

<style type="text/css">
<!--
	input, textarea, select{
	font-size:12px;
	}
	
	.fs10{
	font-size:11px;
    }
//-->
</style>
</head>
<body bgcolor="#ffffff" link="#000000" vlink="#000000" alink="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="initRollovers();">
<div id="wrapper">
<!-- nav bar start-->
<table height="66" width="860" border="0" cellspacing="0" cellpadding="0">
<tr><td><script language="JavaScript" type="text/javascript" src="http://navbar.disneyinternational.com/jp/synbar860.js"></script></td></tr>
</table>
<!--nav bar end -->
<!-- globalnavi pulldownmenu start-->
<script language="javascript" type="text/javascript" src="/common/gnavi3.js"></script>
<!-- globalnavi pulldownmenu end-->
<!-- globalnavi start -->
<table height="50" width="860" border="0" cellspacing="0" cellpadding="0">
<tr><td><script language="javascript" type="text/javascript" src="/common/gnavi2.js"></script></td></tr>
</table>
<!-- globalnavi end -->
<!-- maincontent start-->
<table width="860" border="0" cellpadding="0" cellspacing="0">
<tr>
<td align="center" bgcolor="#0C97D4" valign="top">
<table width="860" height="207" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="3"><img src="imgs/query.gif" width="395" height="207" alt="お問い合わせフォーム"></td>
		<td><img src="common/imgs/paper_head_02.gif" width="465" height="69" alt=""></td>
	</tr>
	<tr>
		<td><img src="common/imgs/paper_head_03.gif" width="465" height="69" alt=""></td>
	</tr>
	<tr>
		<td><img src="common/imgs/paper_head_04.gif" width="465" height="69" alt=""></td>
	</tr>
</table>
<table width="860" cellpadding="0" cellspacing="0" border="0" background="common/imgs/paper_bg.gif">
	<tr>
		<td align="center">
			<table width="754" cellpadding="0" cellspacing="0" border="0" background="common/imgs/paper_bg2.gif">
				<tr>
					<td align="center"><table cellpadding="0" cellspacing="0" border="0" width="688">
							<tr>
								<td class="font1">
<table cellpadding="0" cellspacing="0" border="0" width="688">
							<tr>
								<td class="font1" align="center">
									<table cellpadding="0" cellspacing="0" border="0" width="669">
										<tr>
											<td colspan="7"><img src="common/imgs_first/form_head.gif" width="669" height="31" alt=""></td>
										</tr>
										<tr>
											<td width="20" bgcolor="#FF9000"><img src="common/imgs/spacer.gif" width="20" height="1"></td>
											<td width="3" bgcolor="#FFA800"><img src="common/imgs/spacer.gif" width="3" height="1"></td>
											<td width="20" bgcolor="#FFFFCC"><img src="common/imgs/spacer.gif" width="20" height="1"></td>

											<td width="583"><!-- form SRT -->
											  <table cellpadding="0" cellspacing="0" border="0" width="583">
													<!-- Q01 -->
													<tr>
														<td colspan="3" align="center"><div><img src="imgs/spacer.gif" width="1" height="15" border="0"></div>
														<!--　コンテンツ内容  -->
														<table width="524" border="0" cellspacing="0" cellpadding="0">
	
														<tr><td>
														<!------------------------------------------------------------->
														
														<p align="left"><b><font color="#000000">・メールでのお問い合わせ</font></b></p>
														
														<table width=100% border=0 cellpadding=4 cellspacing=1><tr><td align="left"><font color="#000000">
														下記のフォームより必須項目をご記入の上、送信してください。
														<br>
														<font size=1>※メールでのお問い合わせは、返答までにお時間がかかる場合がございますので、あらかじめご了承ください。</font></font><br><br>
														</td></tr></table>
														
														<form action="" method="POST" name="mailForm1" onSubmit="return ChkALL()">
														<table border="0" cellspacing="10" cellpadding="0" width="524">
														  <tr valign="top"> 
															<td align="right" width="134"> <font color="#000000" size="-1" class="fs12"><b>メールアドレス<br>（必須）</b><br>
														      </font> </td>
														    <td width="390" align="left"> <font size="-1"> 
														      <input type="text" name="your_mail" size="40" value="">
														      <br>
														      </font></td>
														  </tr>
														  <tr valign="top"> 
														    <td align="right"> <font color="#000000" size="-1" class="fs12"><b>メンバー名<br>（必須）</b><br>
														      </font> </td>
														    <td align="left"> <font size="-1"> 
														      <input type="text" name="user_id" size="40" value="">
														      <br>
														      <font color="#000000" class="fs10">※未登録の方は「未登録」、メンバー名を忘れた方は「忘れた」と入力してください。</font><br>
														      </font></td>
														  </tr>
														  <tr valign="top"> 
														    <td align="right"> <font color="#000000" size="-1" class="fs12"><b>氏名（漢字）<br>（必須）</b><br>
														      </font> </td>
														    <td align="left"> <font size="-1"> 
														      <input type="text" name="your_name" size="40" value="" onChange="this.value=chekHankaku(this.value)">
														      <br>
														      </font></td>
														  </tr>
														  <tr valign="top"> 
														    <td align="right"> <font color="#000000" size="-1" class="fs12"><b>連絡先電話番号</b><br>
														      </font> </td>
														    <td align="left"> <font size="-1"> 
														      <input type="text" name="your_tel" size="40" maxlength="12" value="">
														      <br>
														      </font></td>
														  </tr>
														  <tr valign="top"> 
														    <td align="right"> <font color="#000000" size="-1" class="fs12"><b>お問い合わせ<br>区分</b><br>
														      </font> </td>
														    <td align="left"> <font size="-1"> 
														      <select name="categ">
														        <option value="">えらんでください</option>
														        <option value="1.サービス内容に関するお問合せ">サービス内容に関するお問合せ</option>
														        <option value="2.会員登録、ＰＣ設定など技術的なことに関するお問合せ">会員登録、ＰＣ設定など技術的なことに関するお問合せ</option>
														        <option value="3.課金に関するお問合せ">課金に関するお問合せ</option>
														        <option value="4.パスワード忘れ">パスワード忘れ</option>
														        <option value="5.ご意見ご要望など">ご意見ご要望など</option>
														      </select>
														      <br>
														      </font></td>
														  </tr>
														  <tr valign="top"> 
														    <td align="right"> <font color="#000000" size="-1" class="fs12"><b>通信環境</b><br>
														      </font> </td>
														    <td align="left"> <font size="-1"> 
														      <input type="text" name="q1" size="20" value="" onChange="this.value=chekHankaku(this.value)">
														      <br>
														      <font color="#000000" class="fs10">例：ADSL、光ファイバー、等</font><br>
														      </font></td>
														  </tr>
														  <tr valign="top"> 
														    <td align="right"> <font color="#000000" size="-1" class="fs12"><b>パソコンスペック<br>ＯＳ</b><br>
														      </font> </td>
														    <td align="left"> <font size="-1"> 
														      <input type="text" name="q2" size="20" value="" onChange="this.value=chekHankaku(this.value)">
														      <br>
														      <font color="#000000" class="fs10">例：Win XP、Vista、など</font><br>
														      <font color="#000000" class="fs10">※お問合せ区分で『会員登録、ＰＣ設定など技術的なことに関する問合せ』を選択された方は必ず入力してください。</font></font> 
														    </td>
														  </tr>
														  <tr valign="top"> 
														    <td align="right"> <font color="#000000" size="-1" class="fs12"><b>パソコンスペック<br>メモリー(可能ならグラフィックメモリ情報も)</b><br>
														      </font> </td>
														    <td align="left"> <font size="-1"> 
														      <input type="text" name="q3" size="20" value="" onChange="this.value=chekHankaku(this.value)">
														      <br>
														      <font color="#000000" class="fs10">例：２５６ＭＢ、等</font><br>
														      <font color="#000000" class="fs10">※お問合せ区分で『会員登録、ＰＣ設定など技術的なことに関する問合せ』を選択された方は必ず入力してください。</font></font> 
														    </td>
														  </tr>
														  <tr valign="top"> 
														    <td align="right"> <font color="#000000" size="-1" class="fs12"><b>ブラウザ<br>バージョン</b><br>
														      </font> </td>
														    <td align="left"> <font size="-1"> 
														      <input type="text" name="q4" size="20" value="" onChange="this.value=chekHankaku(this.value)">
														      <br>
														      <font color="#000000" class="fs10">例：インターネットエクスプローラ6.0等</font><br>
														      <font color="#000000" class="fs10">※お問合せ区分で『会員登録、ＰＣ設定など技術的なことに関する問合せ』を選択された方は必ず入力してください。</font></font> 
														    </td>
														  </tr>
														  <tr valign="top"> 
														    <td align="right"> <font color="#000000" size="-1" class="fs12"><b>お問い合わせ<br>内容（必須）</b><br>
														      </font> </td>
														    <td align="left"> <font size="-1"> 
														      <textarea name="q5" cols="40" rows="5" onChange="this.value=chekHankaku(this.value)"></textarea>
														      <br>
														      </font></td>
														  </tr>
														</table>
														<p align="center">
														  <a href="javascript:history.back()"><img src="imgs/back.gif" border=0 width=145 height=45 alt="戻る"></a>
														  &nbsp;&nbsp;&nbsp;&nbsp;
														  <input type="image" name="SubmitConfirm" value="SubmitConfirm" src="imgs/next.gif" border=0 width="145" height="45" alt="次へ">
														</p>
														
														</form>
					
														<!------------------------------------------------------------->
														</td></tr>
															
														</table>
														<!--　コンテンツ内容  -->
														</td>
													</tr>
											</table>
											</td>
											<td width="20" bgcolor="#FFFFCC"><img src="common/imgs/spacer.gif" width="20" height="1"></td>
											<td width="3" bgcolor="#FFA800"><img src="common/imgs/spacer.gif" width="3" height="1"></td>

											<td width="20" bgcolor="#FF9000"><img src="common/imgs/spacer.gif" width="20" height="1"></td>
										</tr>
										<tr>
											<td colspan="7"><img src="common/imgs_first/form_foot.gif" width="669" height="31" alt=""></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
								</td>
							</tr>
						</table></td>
				</tr>
			</table>
			<table width="754" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td><img src="common/imgs/paper_foot.gif" width="754" height="49" alt="" style="margin-bottom:15px;"></td>
				</tr>
			</table></td>
	</tr>
</table>

</td>
</tr>
</table>

<!-- maincontent end-->
<!-- footer start -->
<table width="860" height="30" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle" nowrap bgcolor="#68E70C" class="font0"><a href="http://www.disney.co.jp/legal.html">サイトの使用条件 </a>| <a href="http://www.disney.co.jp/privacy.html">プライバシーポリシー</a> | <a href="/tou.html">会員規約</a> | <a href="https://bbcommon.disney.co.jp/info/security.html">セキュリティについて</a> | <a href="/houserule.html">ハウスルール</a>      | <a href="/cmdeal.html">特定商取引法に基づく表示</a> | <a href="/query.php">お問い合わせ</a>　　&copy; Disney. All rights reserved.</td>
  </tr>
</table>
<!-- footer end -->


</div>
</body>

<!-- BEGIN WDIG Web Analytics 1.0 -->
<script type="text/javascript" src="//analytics.disneyinternational.com/analytics/wdigWebAnalytics.js"></script>
<script type="text/javascript">
cto=new CTO();

cto.siteSection = "toontown";
cto.pageName = "query_new_entry.tmpl.php";
cto.property = "tnt";

cto.track();
</script>
<!-- END WDIG Web Analytics 1.0 -->

<script type="text/javascript">
    // Support for legacy Hitbox Functions hard-coded into old Flash Files
    // These functions will now record to both Hitbox and Omniture
    function _hbflash(p,m,x,d,s,c,f,g){cto.hbflash(p,m,x,d,s,c,f,g);}
    function _hbPageView(p,m){cto.hbflash(p,m,"n","n","n","n","n","n");}
    function _hbExitLink(n){cto.hbflash(_pn,_mlc,n,"n","n","n","n","n");}
    function _hbDownload(n){cto.hbflash(_pn,_mlc,"n",n,"n","n","n","n");}
    function _hbVisitorSeg(n,p,m){cto.hbflash(p,m,"n","n",n,"n","n","n");}
    function _hbCampaign(n,p,m){cto.hbflash(p,m,"n","n","n",n,"n","n");}
    function _hbFunnel(n,p,m){cto.hbflash(p,m,"n","n","n","n",n,"n");}
    function _hbGoalPage(n,p,m){cto.hbflash(p,m,"n","n","n","n","n",n);}
</script>
</html>