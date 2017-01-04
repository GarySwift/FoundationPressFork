<?php 
function wrap_email($email_string) {
	$header_color='#01468b';
	$email_head = email_template_head($header_color);
	$email_foot = email_template_foot($header_color);
	return $email_head.$email_string.$email_foot;
}
function email_template_head($header_color) {
	$email_head='<div marginwidth="0" marginheight="0"><div class="adM">'
	.'</div><div style="background-color:#e3e3e3;width:100%;margin:0;padding:70px 0 70px 0"><div class="adM">'
	.'</div><table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">'
	.'<tbody><tr>'
	.'<td align="center" valign="top">'
	.'<table border="0" cellpadding="0" cellspacing="0" width="680px" style="border-radius:6px!important;background-color:#fafafa;border-radius:6px!important">'
	.'<tbody><tr>'
	.'<td align="center" valign="top">'
	.'<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color:'.$header_color.';color:#f1f1f1;border-top-left-radius:6px!important;border-top-right-radius:6px!important;border-bottom:0;font-family:Arial;font-weight:bold;line-height:100%;vertical-align:middle">'
	.'<tbody><tr>'
	.'<td>'
	.'<h1 style="color:#f1f1f1;margin:0;padding:28px 24px;display:block;font-family:Arial;font-size:30px;font-weight:bold;text-align:center;line-height:150%">'
	.'<a style="color:#f1f1f1;text-decoration:none" href="'.get_bloginfo('url').'" title="'.get_bloginfo('name').'" target="_blank">'.get_bloginfo('name').'</a>'
	.'</h1>'
	.'</td>'
	.'</tr>'
	.'</tbody></table>'
	.'</td>'
	.'</tr>'
	.'<tr>'
	.'<td align="center" valign="top">'
	.'<table border="0" cellpadding="0" cellspacing="0" width="100%">'
	.'<tbody><tr>'
	.'<td valign="top" style="background-color:#fafafa">'
	.'<table border="0" cellpadding="20" cellspacing="0" width="100%">'
	.'<tbody><tr>'
	.'<td valign="top">'
	.'<div style="color:#888;font-family:Arial;font-size:14px;line-height:150%;text-align:left">';	
	return $email_head;
}
function email_template_foot($header_color) {
	$year = date('Y');
	$email_foot='</div>'
	.'</td>'
	.'</tr>'
	.'</tbody></table>'
	.'</td>'
	.'</tr>'
	.'</tbody></table>'
	.'</td>'
	.'</tr>'
	.'<tr>'
	.'<td align="center" valign="top">'
	.'<table border="0" cellpadding="10" cellspacing="0" width="100%" style="border-top:1px solid #e2e2e2;background:#eee;border-radius:0px 0px 6px 6px">'
	.'<tbody><tr>'
	.'<td valign="top">'
	.'<table border="0" cellpadding="10" cellspacing="0" width="100%">'
	.'<tbody><tr>'
	.'<td colspan="2" valign="middle" style="border:0;color:#777;font-family:Arial;font-size:12px;line-height:125%;text-align:center">&copy;'.$year.' '.get_bloginfo('name').' - '.get_bloginfo('description').'</td>'
	.'</tr>'
	.'</tbody></table>'
	.'</td>'
	.'</tr>'
	.'</tbody></table>'
	.'</td>'
	.'</tr>'
	.'</tbody></table>'
	.'</td>'
	.'</tr>'
	.'</tbody></table><div class="yj6qo"></div><div class="adL">'
	.'</div></div><div class="adL">     </div></div>';
	return $email_foot;
}