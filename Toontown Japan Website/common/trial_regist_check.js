function ChkALL() {

	var email_address_val  = document.register.e.value;
	var email_address2_val = document.register.ec.value;
	var password_val       = document.register.p.value;
	var password2_val      = document.register.pc.value;
	var birthday_year_val      = document.register.b1.value;
	var birthday_month_option  = document.forms.register.b2.options;
	var birthday_month_val     = birthday_month_option[birthday_month_option.selectedIndex].value;
	var birthday_day_option    = document.forms.register.b3.options;
	var birthday_day_month_val = birthday_day_option[birthday_day_option.selectedIndex].value;

	if( !email_address_val ){
		alert("Eメールアドレスを入力してください。");
		return false;
		
	}else if( chkMail(email_address_val) == 1 ){
		alert("Eメールアドレスが不正です。");
		return false;
		
	}else if( chkMobile(email_address_val) == 1 ){
		alert("携帯電話のメールアドレスは指定できません。");
		return false;
		
	}else if( checkUniqueScr(email_address_val) ){
		alert("Eメールアドレスに特殊文字は入力できません。");
		return false;

	}else if( !email_address2_val ){
		alert("Eメールアドレス（確認用）を入力してください。");
		return false;

	}else if( chkMail(email_address2_val) == 1 ){
		alert("Eメールアドレスが不正です。");
		return false;
		
	}else if( checkUniqueScr(email_address2_val) ){
		alert("Eメールアドレスに特殊文字は入力できません。");
		return false;
		
	}else if( email_address_val != email_address2_val ){
		alert("Eメールアドレスが一致しません。再度入力してください。");
		return false;

	}else if( !password_val ){
		alert("パスワードを入力してください。");
		return false;
	
	}else if( password_val.length<6 ){
		alert("パスワードは6文字以上で入力してください。");
		return false;
		
	}else if( checkUniqueScr(password_val) ){
		alert("パスワードに特殊文字は入力できません。");
		return false;

	}else if( !password2_val ){
		alert("パスワード（確認用）を入力してください。");
		return false;
		
	}else if( checkUniqueScr(password2_val) ){
		alert("パスワードに特殊文字は入力できません。");
		return false;
		
	}else if( password_val != password2_val ){
		alert("パスワードが一致しません。再度入力してください。");
		return false;
		
	}else if( !birthday_year_val ){
		alert("生年月日（年）を選択してください。");
		return false;
		
	}else if( !birthday_month_val ){
		alert("生年月日（月）を選択してください。");
		return false;

	}else if( !birthday_day_month_val ){
		alert("生年月日（日）を選択してください。");
		return false;
	
	}else if( !checkFuture( birthday_year_val, birthday_month_val, birthday_day_month_val ) ){
		alert("生年月日が未来を指しています。");
		return false;

	}else if( !checkValidDate( birthday_year_val, birthday_month_val, birthday_day_month_val ) ){
		alert("生年月日が正しい日付ではありません。");
		return false;

	}
	
	return true;
}

//日付の正当性チェック
function checkValidDate( y, m, d ) {
	if ( ( m == 4 || m ==  6 || m == 9 || m == 11 ) && d > 30 ) { return false; }
	if (   m == 2 && d >  29 ) { return false; }
	if (   m == 2 && d == 29 && !( ( y % 400 ) == 0 || ( y % 4 ) == 0 && ( y % 100 ) != 0 ) ) { return false; }
	return true;
}

//未来の日付チェック
function checkFuture( y, m, d ) {
	var today = new Date();
	if ( ( y - 1900 ) >  today.getYear() ||
	     ( y - 1900 ) == today.getYear() && ( m >  today.getMonth() + 1 ) ||
	     ( y - 1900 ) == today.getYear() && ( m == today.getMonth() + 1 ) && d > today.getDate() ) {
		return false;
	}
	return true;
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

//モバイルチェック
function chkMobile(Addr){
        data = new Array();
        data = Addr.split("@");
        mobile1 = "docomo\.ne";
        mobile2 = "jp\-";
        mobile3 = "\.ne";
        mobile4 = "ezweb\.ne";
        mobile5 = "phone\.ne";
     if(Addr){
        if((data[1].match(mobile1)) || ((data[1].match(mobile2)) && (data[1].match(mobile3))) || (data[1].match(mobile4)) || (data[1].match(mobile5))){
           return 1;
        }
     }
}

//特殊文字チェック
function checkUniqueScr(checkword) {
	result = checkword.match(/[\<\>\""\''\\\&\;]+/);
	if (result != null) {
		return 1;
	}
}


function openInquiry(url){
  subWin = window.open(url,"newWindow","toolbar=no,location=no,scrollbars=yes,status=no,menubar=no,resizable=yes,width=630,height=600");
}
