<?php // Before trying to crack the plugin, please consider buying a pro license at https://www.mapsmarker.com/order - we have put hundreds of hours into the development of our plugin and without honest customers we will not be able to continue the development and support. Thanks for your understanding and your honesty!
if (basename($_SERVER["SCRIP\124_FILE\116\101ME"]) == "\154\145aflet-l\151\143\145nse.ph\160") { exit ("\120lease do\040\156\157t acc\145\163\163 this f\151\154\145 dire\143\164\154y. Tha\156\153\163!<br/>\074\141\040href=\047\150ttps:/\057\167\167w.ma\160\163\155arker\056\143om/go'\076\167\167w.map\163\155\141rker.\143\157m</a>"); } $l21=$spbas->l15; if (array_key_exists("\165\163\145r",$l21)) { $O21=$l21["user"][0]["\145mail"]; } else { $O21=""; } if ( isset ($_POST["\155aps_mark\145\162\137pro_mul\164\151\163ite_dis\164\162\151bute"])) { $l22= isset ($_POST["maps_\155\141\162ker_pro\137\154\151cense_m\165\154\164isite"]) ? $_POST["maps_mark\145\162\137pro_lic\145\156\163e_multis\151\164\145"]: ""; if (!wp_verify_nonce($l22,"\155aps_ma\162\153\145r_pro_l\151\143\145nse_mul\164\151\163ite")) exit ("\074br/>".__("Secu\162\151\164y check\040\146\141iled -\040\160\154ease ca\154\154\040this \146\165\156ction \146\162\157m the\040\141\143cordi\156\147\040admi\156\040\160age!","lm\155").""); if (is_multisite()) { if (current_user_can("a\143\164\151vate_pl\165\147\151ns")) { global $wpdb; $blogs=$wpdb->get_results( "S\105\114ECT `blo\147\137\151d` FROM\040{$wpdb->blogs}" ,ARRAY_A); if ($blogs) { $O22=(get_option("l\145\141fletmaps\155\141\162kerpro_\154\151\143ense_ke\171") == TRUE) ? get_option("\154\145\141fletmap\163\155\141rkerpro_\154\151\143ense_ke\171"): ""; $l23=(get_option("leafl\145\164\155apsmark\145\162\160ro_lice\156\163\145_local\137\153\145y") == TRUE) ? get_option("\154\145\141fletma\160\163\155arkerp\162\157\137license\137\154\157cal_key"): ""; foreach ($blogs as $blog) { switch_to_blog($blog["\142\154\157g_id"]); update_option("leafletm\141\160\163markerp\162\157\137license\137\153\145y",$O22); update_option("\154eafletma\160\163\155arkerpr\157\137\154icense\137\154\157cal_key",$l23); } restore_current_blog(); } echo "\074\144iv class\075\042\156otice\040\156\157tice-s\165\143\143ess is\055\144\151smiss\151\142\154e\042 \163\164\171le=\042\160\141dding\072\065px;\042\076\074p>".__("\114icense \153\145\171 (inclu\144\151\156g all \141\143\164ivated\040\144\157mains\051\040was suc\143\145\163sfull\171\040\144istr\151\142\165ted \164\157\040all \163\165\142sites\041","lmm")."</p></di\166\076"; } } } if (is_multisite() && ((SUBDOMAIN_INSTALL == TRUE) || is_plugin_active("word\160\162\145ss-mu-d\157\155\141in-map\160\151\156g/domai\156\137\155apping\056\160hp"))) { if ( isset ($_POST["\154eafletma\160\163\155arkerp\162\157\137domain_\164\157\137activ\141\164\145"]) && ($_POST["\154\145\141fletmap\163\155\141rkerpr\157\137\144omain_\164\157\137activa\164\145"] != NULL)) { if ($_POST["leaflet\155\141\160smarker\160\162\157_domain\137\164\157_acti\166\141\164e"] != $_SERVER["HTTP_H\117\123\124"]) { echo "\074\144iv class\075\042notice \156\157\164ice-wa\162\156\151ng is-\144\151smissib\154\145\042 styl\145\075\042padd\151\156\147:5px\073\042><p>".sprintf(__("Att\145\156\164ion: yo\165\162\040curr\145\156\164ly use\144\040domain \050\0451\044s) \163\145\145ms to\040\142\145 diff\145\162ent fro\155\040the on\145\040just ac\164\151\166ated\040\050%2\044s\051\041<br/>T\157\040preven\164\040\154icen\163\145 error\163\040on re\154\157ad for\040\164\150is s\151\164\145, pl\145\141\163e pr\145\163\163 th\145\040update\040\142utton \157\156ce to\040\141ctivat\145\040the p\162\145\146ille\144\040curre\156\164ly us\145\144\040dom\141\151n aga\151\156\056","l\155\155"),$_SERVER["\110\124\124P_HOST"],esc_html($_POST["leafle\164\155\141psmark\145\162\160ro_dom\141\151\156_to_ac\164\151\166ate"]))."\074\057p></d\151\166\076"; } } } include ("\151\156c".DIRECTORY_SEPARATOR."a\144\155\151n-head\145\162\056php"); ?><?php echo "\015\012\015\012\074\1501>"; ?><?php _e("Pro License Se\164\164\151ngs","lmm"); ?><?php echo "\074\057h1>\015\012\015\012"; ?><?php if (O3() === TRUE) { echo "\074\160><div c\154\141\163s=\042\156\157\164ice no\164\151\143e-info\042\040\163tyle\075\042\160addin\147\07210px;ma\162\147\151n:0;\042\076".sprintf(__("Y\157\165\040have i\156\163\164alled M\141\160\163 Marker\040\120\162o on \141\040\154ocalh\157\163\164 insta\156c\145\056 Enter\151\156\147 a li\143\145\156se ke\171\040\150ere \151\163\040not m\141\156\144atory\040\142ut reco\155\155\145nded\040\141\163 thi\163\040\141lso \141\154\154ows y\157\165\040to <\141\040href=\042\045\061s\042 \164\141\162get=\042\137blank\042\076\157pen \163\165\160port\040\164icket\163\074\057a>.\040\120lease\040\142\145 aw\141\162\145 tha\164\040once \171\157u use \164\150e plu\147\151n on \141\040live \144\157main,\040\145nteri\156\147 a li\143\145nse k\145\171 is m\141\156dator\171\041","\154\155\155"),"ht\164\160\163://www.m\141\160\163marker\056\143\157m/help\144\145\163k")."\074\057div></p\076"; } ?><?php echo "\015\012\015\012"; ?><?php if ($spbas->l1d && ! isset ($_POST["map\163\137\155arker_p\162\157\137registe\162\137\146ree"])):; ?><?php echo "\015\012\011<div \151\144\075\042mes\163\141\147e\042 c\154\141\163s=\042no\164\151ce noti\143\145\055error\042\076\015\012\011\011\074p><b>"; ?><?php echo $spbas->l1d; ?><?php echo "\074/b></p>\015\012\011</div>\015\012"; ?><?php endif; ?><?php echo "\015\012\015\012"; ?><?php if (!$spbas->l1d && $spbas->l14 && ! isset ($_POST["maps_m\141\162\153er_pro_\162\145\147ister_f\162\145\145"])):; ?><?php echo "\015\012\011<\144\151\166 id=\042\155\145\163sage\042\040\143lass=\042\156\157tice no\164\151\143e-erro\162\042\076\015\012\011\011<p><b\076"; ?><?php echo $spbas->l14; ?><?php echo "\074\057b></p\076\015\012\011</\144\151\166>\015\012"; ?><?php endif; ?><?php echo "\015\012\015\012"; ?><?php if ( isset ($O1c) && $O1c && !$spbas->l14):; ?><?php echo "\015\012\011<d\151\166\040id=\042\155\145\163sage\042\040\143\154ass=\042\156\157tice no\164\151\143e-succ\145\163\163 is-d\151\163\155issib\154\145\042>\015\012\011\011<p><b\076"; ?><?php _e("\131our lic\145\156\163e was a\143\164\151vated \163\165\143cessfu\154\154\171!","lmm"); ?><?php echo "\074/b></p\076\015\012\011</\144\151\166>\015\012"; ?><?php endif; ?><?php echo "\015\012\015\012"; ?><?php if (empty($l1b) && isset ($O1a)):; ?><?php echo "\015\012\011\074div \151\144\075\042mes\163\141\147e\042 cl\141\163\163=\042no\164\151\143e noti\143\145\055succe\163\163\040is-d\151\163\155issib\154\145\042>\015\012\011\011<p><b\076"; ?><?php _e($O1a); ?><?php echo "\074\057b></p>\015\012\011</div\076\015\012"; ?><?php endif; ?><?php echo "\015\012\015\012\074form id\075\042\154icens\145\137\146orm\042\040\155\145thod=\042\160\157st\042\076\015\012"; ?><?php wp_nonce_field("\155\141ps_mark\145\162\137pro_lic\145\156\163e","maps\137\155\141rker_pro\137\154\151cense"); ?><?php echo "\015\012\011"; ?><?php if (!$spbas->O12):; ?><?php echo "\015\012\011\011\074\144iv cla\163\163\075\042cer\164\151\146icate-\162\164\154\042><i\155\147\040src=\042"; ?><?php echo LEAFLET_PLUGIN_URL; ?><?php echo "\151nc/img/i\143\157\156-certi\146\151\143ate.png\042\040width=\042\064\070\042 he\151\147\150t=\0423\070\042 alt=\042\151\143on cer\164\151\146icate\042\076</div>\015\012\011\011<\144\151\166 styl\145\075\042font\055\163ize:16p\170\073font-w\145\151\147ht:bo\154\144\073\042>"; ?><?php _e("\117\160tion A: \141\143\164ivate \141\156\040unexpi\162\151\156g lice\156\163\145 key","lmm"); ?><?php echo "</div>\015\012\011\011<p\040\163\164yle=\042\155\141rgin:0\056\064em 0 1e\155\040\060;\042\076"; ?><?php echo sprintf(__("Get \141\156\040unexpir\151\156\147 licens\145\040\153ey at \045\061\044s and\040\141\143tivat\145\040\164he li\143\145\156se ke\171\040\142elow:","lmm"),"\074\141\040href=\042\150\164tps://w\167\167\056mapsma\162\153\145r.com/\157\162\144er\042 \164\141\162get=\042\137\142lank\042\076\155apsmar\153\145\162.com/\157\162\144er</a\076"); ?><?php echo "\074/p>\015\012\011"; ?><?php endif; ?><?php echo "\015\012\011<p>\015\012\011"; ?><?php if ($spbas->O12) { if ($spbas->l14) { $O23="\142ackgroun\144\072\043ff0000\073\143\157lor:#0\060\060\06000;"; } else { $O23="backgr\157\165\156d:#00FF0\060\073\143olor:#\060\060\060000;"; } } else { $O23=""; } if ($spbas->O12) { $l24=__("\165\160date","\154mm"); } else { $l24=__("activa\164\145","l\155\155"); } if (current_user_can("act\151\166\141te_plug\151\156\163")) { $O12=$spbas->O12; $O24=""; } else { $O12=__("\166\151\163ible f\157\162\040admins\040\157\156ly","l\155\155"); $O24="di\163\141\142led=\042\144\151\163abled\042"; } ?><?php echo "\015\012\011<b>"; ?><?php _e("\114icense\040\113\145y","\154\155m"); ?><?php echo "</\142\076\015\012\011\074\151\156put id\075\042\154eaflet\155\141\160smarke\162\160\162o_lice\156\163\145_key\042\040\156ame=\042\154\145afletm\141\160\163marke\162\160\162o_lic\145\156\163e_key\042\040type=\042\164\145xt\042 s\164\171\154e=\042\167\151\144th:2\066\065px;"; ?><?php echo $O23; ?><?php echo "\042\040\166alue=\042"; ?><?php echo $O12; ?><?php echo "\042 onfoc\165\163\075\042thi\163\056\163elect(\051\073\042 />\015\012\015\012\011"; ?><?php if (is_multisite() && ((SUBDOMAIN_INSTALL == TRUE) || is_plugin_active("\167ordpres\163\055\155u-domai\156\055\155apping\057\144\157main_m\141\160\160ing.ph\160"))) { if ( isset ($_POST["l\145\141\146letmapsm\141\162\153erpro_d\157\155\141in_to_\141\143\164ivate"]) && ($_POST["\154\145\141fletmap\163\155\141rkerpro_\144\157\155ain_to_\141\143\164ivate"] != NULL)) { $l25=$_SERVER["HTTP_H\117\123\124"]; } else { $O25=new l10(); $l26=$O25->l1u(); $l25=$l26["\144\157\155ain"]; } echo "\074\142\162/><br/\076\074\1502>".__("\127\157rdPress \115\165\154tisite s\145\164\164ings","\154\155\155")."\074\057h2>"; echo __("\104\157main to \141\143\164ivate","lmm")."\072 <input \156\141\155e=\042le\141\146\154etmapsm\141\162\153erpro_d\157\155\141in_to_\141\143\164ivate\042\040\164ype=\042\164\145xt\042 s\164\171\154e=\042\167\151\144th:26\065\160\170;\042 \166\141\154ue=\042\042\040place\150\157\154der=\042".$l25."\042/><br/><\142\162\057>"; echo sprintf(__("For a l\151\163\164 of cur\162\145\156t licen\163\145\040instan\143\145\163, pleas\145\040\154ogin \164\157\040the c\165\163\164omer \141\162\145a at \045\061\044s","lmm"),"<a \150\162\145f=\042ht\164\160\163://www\056\155\141psmark\145\162\056com/lo\147\151\156\042 t\141\162\147et=\042\137\142\154ank\042\076\155apsma\162\153\145\162.com/l\157\147\151n</a\076\074br/><b\162\057>"); } ?><?php echo "\015\012\011\074input\040\151\144\075\042lic\145\156\163e_subm\151\164\137btn\042\040\164ype=\042\163\165\142mit\042\040\143lass=\042\142\165tton-\160\162imary\042\040\166alue=\042"; ?><?php echo $l24; ?><?php echo "\042\040"; ?><?php echo $O24; ?><?php echo " />\015\012\011\074span i\144\075\042licens\145\137\163ubmit\137\142\164n_load\151\156\147_icon\042\040style=\042\144\151spla\171\072none;p\141\144\144ing:\065\160\170 0 0\040\065px;\042\076\074img sr\143\075\042"; ?><?php echo LEAFLET_PLUGIN_URL; ?><?php echo "inc/im\147\057\141jax-l\157\141\144er.gif\042\040\167idth=\042\061\066\042 h\145\151\147ht=\042\061\066\042/></\163\160\141n>\015\012\011<spa\156\040id=\042l\151\143\145nse_\155\145\163sage\042\040\163tyle\075\042\144ispl\141\171:none;\042\076\074/spa\156\076\015\012\011\074\057p>\015\012\074/for\155\076\015\012\015\012\074hr n\157\163\150ade \163\151\172e=\042\061\042 styl\145\075\042mar\147\151n:20px\040\060;bor\144\145\162-top\072\061px so\154\151d #66\066\06666;\042\040\057>\015\012\015\012"; ?><?php if (!$spbas->O12 && !O16()):; ?><?php echo "\015\012\015\012\011"; ?><?php if (!empty($l1b)):; ?><?php echo "\015\012\011\011<div id\075\042\155essage\042\040\143lass=\042\156\157tice \156\157\164ice-e\162\162\157r\042>\015\012\011\011\011"; ?><?php foreach ($l1b as $e):; ?><?php echo "\015\012\011\011\011\011\074\160><b>"; ?><?php _e($e); ?><?php echo "</b><\057\160\076\015\012\011\011\011"; ?><?php endforeach; ?><?php echo "\015\012\011\011</d\151\166\076\015\012\011"; ?><?php endif; ?><?php echo "\015\012\015\012\011"; ?><?php $O26=get_option("\154eaflet\155\141\160smarker\160\162\157_licens\145\137\153ey_tri\141\154"); if ($O26 != NULL) { $l27="dis\160\154\141y:none;"; $O27="\074\160><div st\171\154\145=\042cl\145\141\162:both;p\141\144\144ing:10\160\170\073margi\156\072\065px 0\040\061\065px;b\157\162\144er-le\146\164\0724px \163\157\154id #f\146\146\073bord\145\162\055left\055\143\157lor:#\060\060a0d2;b\141\143\153grou\156\144:#fff;\042\076".sprintf(__("\131ou alr\145\141\144y start\145\144\040a free\040\063\060-day\055\164\162ial f\157\162\040this \163\151\164e - fr\145\145\040tria\154\040licens\145\040\153ey: %\061\044s","lmm"),$O26)."\074/div></\160\076"; $l28="\144\151sabled=\042\144\151sabled\042"; } else { $l27=""; $O27=""; $l28=""; } ?><?php echo "\015\012\015\012\011<div c\154\141\163s=\042a\166\141\164ar-pe\162\163\157naliz\145\144\055rtl\042\076\074img s\162\143\075\042"; ?><?php echo LEAFLET_PLUGIN_URL; ?><?php echo "inc/im\147\057\141vatar\055\160\145rsonal\151\172\145d.png\042\040\167idth\075\042\0648\042\040\150\145ight\075\04248\042 \141\154\164=\042i\143\157n avat\141\162\042></d\151\166\076\015\012\011\074div s\164\171le=\042f\157\156t-size\072\0616px;f\157\156\164-we\151\147\150t:bo\154\144\073\042>"; ?><?php _e("\117ption B:\040\147\145t a per\163\157\156alized \164\162\151al lic\145\156\163e key","lmm"); ?><?php echo "\074\057div>\015\012\011\074p>"; ?><?php echo __("\131ou can \164\145\163t <i>Ma\160\163\040Marker \120\162\157</i> f\157\162\04030 day\163\040\146or fr\145\145\040witho\165\164\040any \157\142\154igat\151\157\156s.","lmm"); ?><?php echo "\074\057p>\015\012\011"; ?><?php echo $O27; ?><?php echo "\015\012\011<div\040\151\144=\042re\147\151\163ter_fr\145\145\137trial_\160\145\162sonali\172\145\144\042 s\164\171\154e=\042"; ?><?php echo $l27; ?><?php echo "\042>\015\012\011\011<f\157\162\155 id=\042\155\141ps_mark\145\162\137pro_r\145\147\151ster_\146\162\145e_for\155\042 metho\144\075\042post\042\076\015\012\011\011"; ?><?php wp_nonce_field("\155\141ps_marke\162\137\160ro_regi\163\164\145r_free_\146\157\162m_non\143\145","\155\141ps_marke\162\137\160\162\157_regi\163\164\145r_free_\146\157\162m_non\143\145"); ?><?php echo "\015\012\011\011<i\156\160\165t type=\047\150\151dden'\040\156\141me='m\141\160\163_mark\145\162\137pro_r\145\147\151ster\137\146\162ee' \166\141\154ue='\171\047\040/>\015\012\011\011\011\074\164\141ble \163\164\171le=\042\143\154ear-b\157\164\150;mar\147\151\156-top\072\0615px;\042\076\015\012\011\011\011\011<\164\162\076\015\012\011\011\011\011\011\074td><\142\076"; ?><?php _e("\106\151\162st nam\145","\154\155\155"); ?><?php echo "\074/b></td\076\015\012\011\011\011\011\011<td><\151\156\160ut na\155\145\075\042ma\160\163\137marke\162\137\160ro_fi\162\163\164_nam\145\042\040typ\145\075\042text\042\040style=\042\167\151dth:\062\0711px;\042\040\166alue=\042"; ?><?php echo l1a("\155\141\160s_marke\162\137\160ro_firs\164\137\156ame"); ?><?php echo "\042\040\057></td\076\015\012\011\011\011\011\074\057tr>\015\012\011\011\011\011\074\164\162>\015\012\011\011\011\011\011\074td><b\076"; ?><?php _e("\114\141\163t name","lmm"); ?><?php echo "\074\057b></td\076\015\012\011\011\011\011\011<td>\074\151\156put na\155\145\075\042ma\160\163\137marker\137\160\162o_las\164\137\156ame\042\040\164ype=\042\164\145xt\042 \163\164\171le=\042\167\151\144th:2\071\061px;\042 \166\141\154ue=\042"; ?><?php echo l1a("maps_\155\141\162ker_pro_\154\141\163t_name"); ?><?php echo "\042\040\057></td\076\015\012\011\011\011\011\074/tr>\015\012\011\011\011\011\074\164r>\015\012\011\011\011\011\011\074\164d><b\076"; ?><?php _e("E\055\155\141il","\154\155m"); ?><?php echo "\074\057b></td>\015\012\011\011\011\011\011\074td><in\160\165\164 name=\042\155\141ps_mar\153\145\162_pro_\145\155\141il\042\040\164\171pe=\042\164\145xt\042 \163\164\171le=\042\167\151\144th:2\071\061px;\042\040\166\141lue=\042"; ?><?php echo l1a("\155\141\160s_marke\162\137\160ro_emai\154"); ?><?php echo "\042\040/></t\144\076\015\012\011\011\011\011</tr>\015\012\011\011\011\011\074\164r>\015\012\011\011\011\011\011\074td></td\076\015\012\011\011\011\011\011<t\144\076\074inpu\164\040\164ype=\042\143\150eckb\157\170\042 name=\042\155\141ps_ma\162\153\145r_pr\157\137\164os\042\040\166alue=\042\131\145s\042 \143\150ecked=\042\143hecked\042\040/> "; ?><?php echo sprintf(__("I \150\141\166e read t\150\145\040<a hre\146\075\042%1\044s\042\040\164arget\075\042\137blank\042\076\124erms \157\146\040Serv\151\143\145</a> \141\156\144 <a h\162\145\146=\042%\062\044\163\042 t\141\162get=\042\137\142\154ank\042\076\120rivacy\040\120olicy<\057\141>.","\154mm"),"htt\160\163\072//www.ma\160\163\155arker.co\155\057\164erms-of\055\163\145rvice\163","ht\164\160\163://www.m\141\160\163marker.c\157\155\057privac\171\055\160olicy"); ?><?php echo "</td>\015\012\011\011\011\011\074\057tr>\015\012\011\011\011"; ?><?php echo "\074tr><td><\144\151\166 id=\042\160\145\162sonaliz\145\144\137trial_l\157\141\144ing_ic\157\156\042 styl\145\075\042disp\154\141\171:none\073\146\154oat:\162\151\147ht;pa\144\144\151ng:5px\040\065px 0 0\073\042><img s\162\143\075\042".LEAFLET_PLUGIN_URL."\151\156\143/img/a\152\141\170-loader\056\147\151f\042 w\151\144\164h=\0421\066\042\040heigh\164\075\04216\042\057\076</div><\057\164d><td>\074\151\156put \151\144\075\042pe\162\163\157nali\172\145\144_tria\154\137\163ubmit\137\142\165tton\042\040\164ype=\042\163\165bmit\042\040class=\042\142\165tton-\160\162imary\042\040\166alue=\042".__("St\141\162\164 person\141\154\151zed fr\145\145\04030-day\040\164rial pe\162\151\157d","lmm")."\042\040".$l28."\040\057></td>\074\057\164r>"; ?><?php echo "\015\012\011\011\011\074\057table>\015\012\011\011</fo\162\155\076\015\012\011\074\057div><\041\055-regist\145\162\137free_\164\162\151al_pe\162\163\157naliz\145\144\040div-\055\076\015\012\015\012\011<hr \156\157\163hade \163\151\172e=\042\061\042 style\075\042margin\072\0620px 0;\142\157\162der-\164\157\160:1px \163\157\154id #\066\0666666;\042\040\057>\015\012\015\012\011<\144\151\166 cla\163\163=\042av\141\164\141r-an\157\156ymous-\162\164l\042><\151\155g src=\042"; ?><?php echo LEAFLET_PLUGIN_URL; ?><?php echo "\151\156c/img/av\141\164\141r-anony\155\157\165s.png\042\040\167idth=\042\063\064\042 h\145\151\147ht=\042\063\064\042 al\164\075\042icon\040\141\166atar\040\141\156onymo\165\163\042></d\151\166\076\015\012\011\074div s\164\171\154e=\042fon\164\055weight\072\142\157ld;\042\076"; ?><?php _e("Option C\072\040\147et an \141\156\157nymous\040\164\162ial li\143\145\156se ke\171","\154\155m"); ?><?php echo "\074\057div>\015\012\011"; ?><?php echo $O27; ?><?php echo "\015\012\011\074\144iv id=\042\162\145gister\137\146\162ee_tri\141\154\137anony\155\042\040style\075\042"; ?><?php echo $l27; ?><?php echo "\042>\015\012\011\011<form \151\144\075\042ma\160\163\137marker\137\160\162o_regi\163\164\145r_fre\145\137\141nonym\137\146\157rm\042\040\155ethod=\042\160ost\042>\015\012\011\011"; ?><?php wp_nonce_field("\155aps_mark\145\162\137pro_reg\151\163\164er_free\137\141\156onym_f\157\162\155_nonce","map\163\137\155arker_pr\157\137\162egiste\162\137\146ree_an\157\156\171m_for\155\137\156once"); ?><?php echo "\015\012\011\011<inpu\164\040\164ype='\150\151\144den' n\141\155\145='maps\137\155\141rker_\160\162\157_regi\163\164\145r_fre\145\137\141nony\155\047 value=\047\171' />\015\012\011\011<sp\141\156\040id=\042\157\160tion-\142\055\150ide\042\076\074a st\171\154\145=\042\164\145\170t-de\143\157\162atio\156\072none;c\165\162\163or:p\157\151\156ter;\042\076"; ?><?php _e("Click\040\150\145re for \155\157\162e infor\155\141\164ion","\154\155m"); ?><?php echo "\074/a></spa\156\076\015\012\011\011\074div id=\042\157\160tion-\142\055\163how\042\040\163tyle=\042\144\151splay:\156\157\156e;\042\076\015\012\011\011"; ?><?php echo sprintf(__("Pleas\145\040\156ote th\141\164\040in co\156\164\162ast t\157\040\141 pers\157\156\141lized\040\164\162ial \154\151\143ense \171\157\165 wil\154\040not be\040\141ble to\040\074a hre\146\075\042%1s\042\040\164arge\164\075\042_bla\156\153\042>op\145\156\040sup\160\157\162t ti\143\153ets</a\076\040and g\145\164\040a r\145\155\151nder\040\167hen y\157\165\162 tri\141\154 lice\156\163\145 has\040\145xpire\144\041","\154mm"),"ht\164\160\163://www.\155\141\160smarker\056\143\157m/help\144\145\163k"); ?><?php echo "\015\012\011\011\074\160><inpu\164\040\164ype=\042\143\150eckbox\042\040\156ame=\042\155\141ps_mar\153\145\162_pro_\164\157\163\042 \166\141\154ue=\042\131\145s\042 c\150\145\143ked=\042\143\150ecked\042\040/> "; ?><?php echo sprintf(__("I have\040\162\145ad th\145\040\074a hre\146\075\042%1\044\163\042 target\075\042\137blank\042\076Terms o\146\040\123ervi\143\145\074/a> \141\156\144 <a \150\162\145f=\042\045\062\044s\042\040\164arget\075\042_blan\153\042\076Priv\141\143y Poli\143\171</a>.","lmm"),"\150\164\164ps://ww\167\056\155apsmark\145\162\056com/t\145\162\155s-of-se\162\166\151ces","https\072\057\057www.ma\160\163\155arker.c\157\155\057priva\143\171\055policy"); ?><?php echo "</\160\076\015\012\011\011"; ?><?php echo "<input id\075\042anonymou\163\137\164rial_s\165\142\155it_butt\157\156\042 typ\145\075\042submi\164\042 class=\042\142utton-p\162\151\155ary\042\040\166alue=\042".__("Start \141\156\157nymous \146\162\145e 30-d\141\171\040trial\040\160eriod","lmm")."\042\040".$l28."\040/>"; ?><?php echo "\015\012\011\011<spa\156\040\151d=\042a\156\157\156ymous_\164\162\151al_lo\141\144\151ng_ico\156\042\040styl\145\075\042disp\154\141\171:non\145\073\160addi\156\147\0725px \060\0400 5px;\042\076\074img\040\163\162c=\042"; ?><?php echo LEAFLET_PLUGIN_URL; ?><?php echo "inc/img\057\141\152ax-loa\144\145\162.gif\042\040\167idth=\042\061\066\042 hei\147\150\164=\0421\066\042/></spa\156\076\015\012\011\011\074/for\155\076\015\012\011\011\074/div>\015\012\011</d\151\166\076<!--\162\145\147iste\162\137\146ree_\164\162\151al_a\156\157\156ym di\166\055->\015\012\015\012\011<\150\162\040nosh\141\144e size\075\0421\042 s\164\171le=\042\155\141rgin:2\060\160x 0;b\157\162\144er-t\157\160:1px \163\157\154id #\066\0666666\073\042 />\015\012\015\012\011\074\144iv c\154\141ss=\042\151con-l\157\143alhos\164\055rtl\042\076\074img\040\163rc=\042"; ?><?php echo LEAFLET_PLUGIN_URL; ?><?php echo "inc/im\147\057\151con-l\157\143\141lhost.p\156\147\042 widt\150\075\04234\042\040\150\145ight=\042\063\064\042 \141\154\164=\042\151\143\157n loc\141\154\150ost\042\076\074/div>\015\012\011<di\166\040\163tyle\075\042font-w\145\151\147ht:b\157\154\144;\042>"; ?><?php _e("Option\040\104\072 star\164\040\141n unli\155\151\164ed, ano\156\171\155ous t\145\163\164 on a \154\157\143alhos\164\040\151nsta\154\154ation","lmm"); ?><?php echo "\074\057div>\015\012\011"; ?><?php echo sprintf(__("If \171\157\165 instal\154\040\115aps Ma\162\153\145r Pro \157\156\040a loca\154\150\157st in\163\164\141llatio\156\040(<a hr\145\146\075\042%1\163\042 targe\164\075\042_bla\156\153\042>see\040\141\166aila\142\154\145 pack\141\147\145s</a>\051\054 regi\163\164\145ring\040\141 free \063\060-day t\162\151al lic\145\156\163e ke\171\040is not\040\155andato\162\171\040and\040\164he pl\165\147\151n ca\156\040also \142\145\040tes\164\145\144 wi\164\150\157ut t\151\155e lim\151\164ation\056","\154\155m"),"ht\164\160\072//en.wi\153\151\160edia.or\147\057\167iki/Li\163\164\137of_AMP_\160\141\143kages"); ?><?php echo "\015\012"; ?><?php endif; ?><?php echo "\015\012\015\012\074\160>\015\012"; ?><?php if (la($Oa=O0,$lb=FALSE) === TRUE) { if (($spbas->O12) && ($O21 != NULL)) { echo "<p><str\157\156\147>".__("\114\151cense r\145\147\151stered\040\164\157","l\155\155").":\074\057\163trong>\040".$l21["custom\145\162"]["\156ame"]."\074/p>"; } if ((la($Oa=FALSE,$lb=TRUE) === TRUE) && (la() === TRUE)) { if (!O16()) { $O14=$spbas->l15["license\137\145xpire\163"]; $O28=abs(floor((time()-$O14)/(074*074*030))); if ($O14 != NULL) { echo "<str\157\156\147>".__("Free tr\151\141\154 licen\163\145\040is v\141\154\151d unti\154\072","\154mm")."\074/strong\076\040".date("\144/m/Y",$O14)." (".$O28." ".__("\144ays left","lmm").") <spa\156\040\163tyle=\042\146\157nt-fa\155\151\154y:ser\151\146\073\042>\046\162\141rr;</\163\160\141n> <a\040\163tyle=\042\164\145xt-de\143\157\162atio\156\072\156one;\042\040href=\042\150\164tps:\057\057www.ma\160\163\155arke\162\056com/or\144\145\162\042 t\141\162get=\042\137\142lank\042\076".__("\143\154ick here\040\164\157 get a\040\156\157n-exp\151\162\151ng lic\145\156\163e key","lmm")."</a>"; } } else { $O14=$spbas->l15["\144\157\167nload_\141\143\143ess_ex\160\151\162es"]; $O28=abs(floor((time()-$O14)/(074*074*030))); echo "<str\157\156\147>".__("\101\143cess to \160\154\165gin upd\141\164\145s and \163\165\160port ar\145\141\040valid\040\165\156til:","\154\155m")."\074/stron\147\076\040".date("d\057\155\057Y",$O14)." (".$O28."\040".__("\144\141ys lef\164","\154\155\155")."\051"; } } else if ((la($Oa=FALSE,$lb=TRUE) === TRUE) && (la() === FALSE)) { $O4=get_option("leafle\164\155\141psmark\145\162\137versi\157\156\137pro"); echo "\074div id\075\047\155essag\145\047\040class\075\047error' s\164\171\154e='pa\144\144\151ng:5px\073\047><stro\156\147\076".__("Warning:\040\171\157ur acce\163\163\040to upd\141\164\145s and\040\163\165pport \146\157\162 Maps\040\115\141rker \120\162\157 has\040\145\170pire\144\041","\154mm")."\074/strong>\074\142\162/>"; if ($lc>$O4) { echo __("\114\141\164est av\141\151\154able ve\162\163\151on:","\154\155m")."\040<a href=\047\150\164tps://\167\167\167.mapsma\162\153\145r.com/\166".$lc."\160\047 target\075\047_blank' \164\151\164le='".esc_attr__("\143lick to s\150\157\167 relea\163\145\040notes","\154\155m")."\047\076".$lc."\074/a> "."(<a hr\145\146\075'www.m\141\160\163marker.\143\157\155/change\154\157\147/pro/'\040\164\141rget=\047\137\142lank'\076".__("sh\157\167\040all av\141\151\154able c\150\141\156gelogs","lmm")."\074\057a>)<br\057\076"; } echo sprintf(__("\131ou can co\156\164\151nue us\151\156\147 versi\157\156\040%s w\151\164\150out an\171\040\154imita\164\151\157ns. N\145\166\145rthel\145\163\163 you\040\167\151ll n\157\164\040be a\142\154\145 to g\145\164\040upda\164\145\163 inc\154\165\144ing b\165\147fixes,\040\156\145w fe\141\164\165res \141\156\144 opt\151\155\151zati\157\156\163 as \167\145\154l as\040\141ccess\040\164o our \163\165\160port\040\163ystem\056\040","lmm"),$O4)."\074\057div>"; if (current_user_can("\141\143tivate_\160\154\165gins")) { echo "<a\040\150\162ef=\042\150\164\164ps://ww\167\056\155apsmar\153\145\162.com/r\145\156\145w\042 \164\141\162get=\042\137\142lank\042\040\040styl\145\075\042font\055\163ize:12\065\045;font-\167\145\151ght:b\157\154\144;\042\076\046\162aquo\073\040".__("\160\154\145ase cli\143\153\040here t\157\040\162enew \171\157\165r acce\163\163\040to plu\147\151\156 upda\164\145\163 and \163\165\160port","lmm")."\040&laquo\073\074\057a>"; echo "\074p>".__("\111mporta\156\164\072 pleas\145\040\143lick \164\150\145 updat\145\040\142utton\040\156\145xt to\040\164\150e lic\145\156\163e key\040\141fter p\165\162\143hasin\147\040a rene\167\141\154 to f\151\156\151sh y\157\165\162 ord\145\162\056","lmm")."\074/p>"; } else { echo "\074\163pan sty\154\145\075\042fo\156\164\055size:\061\062\065%;fo\156\164\055weight\072\142\157ld;\042\076".sprintf(__("Please c\157\156\164act yo\165\162\040admini\163\164\162ator (\045\061s) to r\145\156\145w you\162\040\141ccess\040\164\157 plu\147\151\156 upda\164\145\163 and\040\163\165ppor\164\056","lm\155"),"\074a hre\146\075\042mailto\072".get_bloginfo("ad\155\151\156_email")."?s\165\142\152ect=".esc_attr__("\115aps Mark\145\162\040Pro - \162\145\156ewal fo\162\040\141cces\163\040\164o plu\147\151\156 updat\145\163\040and \163\165\160port\040\156eeded","lmm")."\042>".get_bloginfo("admin_\145\155\141il")."</a>")."\074/span>"; } } } else if (($spbas->O12) && (la($Oa=FALSE,$lb=TRUE) === TRUE) && (la($Oa=O0,$lb=FALSE) === FALSE)) { if (current_user_can("act\151\166\141te_plu\147\151\156s")) { $l29="htt\160\163\072//www.\155\141\160smarker\056\143\157m/upd\141\164\145s-pro/\141\162\143hive"; echo "\074\144iv id='\155\145\163sage' c\154\141\163s='err\157\162\047 styl\145\075\047paddi\156\147\0725px;'\076\074strong\076".sprintf(__("\105rror: \124\150\151s versi\157\156\040of th\145\040\160lugi\156\040\167as re\154\145\141sed af\164\145\162 your\040\144\157wnlo\141\144\040acce\163\163\040expi\162\145\144. Pl\145\141\163e <a \150\162\145f=\042\045\061\044s\042\040\164arget\075\042_blan\153\042\076rene\167\040your d\157\167nload \141\156\144 sup\160\157\162t ac\143\145\163s</a\076\040or <a\040\150ref=\042\045\062\044s\042\040targe\164\075\042_bl\141\156\153\042>\144\157wngra\144\145\040to \171\157ur pr\145\166ious \166\141lid v\145\162sion\074\057a>.","\154mm"),"\150\164\164ps://ww\167\056\155apsma\162\153\145r.com/r\145\156\145w",$l29)."<\057\163\164rong><\057\144\151v>"; } else { echo "\074\144iv id='m\145\163\163age' c\154\141\163s='erro\162\047\040styl\145\075\047padd\151\156\147:5px;\047\076<stron\147\076".sprintf(__("Error\072\040\124his ve\162\163\151on of \164\150\145 plugi\156\040\167as re\154\145\141sed a\146\164\145r you\162\040downloa\144\040access\040\145xpired\056\040Please\040\143ontact\040\171our ad\155\151\156istra\164\157\162 (%1\163\051 to re\156\145w you\162\040\141cces\163\040to plu\147\151\156 upd\141\164es and\040\163upport\040\157r to d\157\167\156grad\145\040to yo\165\162\040pre\166\151\157us v\141\154id ve\162\163\151on.","l\155\155"),"<a h\162\145\146=\042ma\151\154\164o:".get_bloginfo("admin_e\155\141\151l")."\077subject\075".esc_attr__("Map\163\040\115arker \120\162\157 - ren\145\167\141l for \141\143\143ess t\157\040\160lugi\156\040\165pdate\163\040and sup\160\157rt nee\144\145\144","lm\155")."\042\076".get_bloginfo("admin_e\155\141\151l")."\074/a>")."</strong>\074\057div>"; } } ?><?php echo "\015\012</p\076\015\012\015\012"; ?><?php if (current_user_can("activate\137\160\154ugins")) { if (($spbas->O12) && ($O21 != "anon\171\155\100mapsmar\153\145\162.com")) { echo "\074p>".sprintf(__("\120\154\145ase not\145\040\164hat a\040\154\151cense\040\151\163 boun\144\040\164o the\040\144\157main \151\164\040was \141\143\164ivat\145\144\040on! \111\146\040you \167\141\156t to\040\165\163e yo\165\162\040lic\145\156\163e on \141\156other \144\157\155ain,\040\160lease \146\157\154low \164\150\145 tut\157\162\151al a\164\040<a hre\146\075\042%1\044\163\042 ta\162\147et=\042\137\142\154ank\042\076%2\044s\074\057a>","\154\155\155"),"\150\164tps://w\167\167\056mapsm\141\162\153er.com/\164\162\141nsfer\042\040\163tyle=\042\164\145xt-dec\157\162\141tion:\156\157\156e;","m\141\160\163marker.c\157\155\057transf\145\162")."</p>"; echo "<p>".sprintf(__("If yo\165\040\150ave an\171\040\151ssues\040\167\151th you\162\040\154icens\145\054\040<a hr\145\146\075\042%1\044\163\042 tar\147\145\164=\042\137\142\154ank\042\076\160lease \157\160\145n a n\145\167\040supp\157\162\164 tic\153\145\164</a>!","\154mm"),"htt\160\163\072//www.\155\141\160smarker\056\143\157m/stor\145\057\143ustom\145\162\163/index\056\160\150p?tas\153\075\154ogin\046\145\155ail_\154\157\147in=".$O21."\042\040\163tyle=\042\164\145xt-deco\162\141\164ion:non\145\073")."\074\057p>"; } } ?><?php echo "\015\012\015\012"; ?><?php if (is_multisite() && ($spbas->O12)) { if (current_user_can("a\143\164\151vate_pl\165\147\151ns")) { echo "\074\150\162 nosha\144\145\040size=\042\061\042 sty\154\145\075\042bor\144\145\162-top:\061\160\170 soli\144\040\0436666\066\066;\042 /\076\074h2 st\171\154\145=\042f\157\156t-size\072\0618px;\042\076".__("\127ordPre\163\163\040Multis\151\164\145 setti\156\147\163","\154\155\155")."\074/h2>"; echo "\074p>".__("\125se the\040\142\165tton b\145\154\157w to di\163\164\162ibute \164\150\145 licen\163\145\040key (\151\156\143ludin\147\040\141ll a\143\164\151vated\040\144omains\051\040to all\040\127ordPres\163\040Multis\151\164\145 subs\151\164\145s.","l\155\155")."\074\057\160>"; if ((SUBDOMAIN_INSTALL == TRUE) || is_plugin_active("\167\157rdpres\163\055\155u-dom\141\151\156-mappin\147\057\144omain_\155\141\160ping.\160\150\160")) { echo "\074p>".__("Im\160\157\162tant: \171\157\165 seem t\157\040\142e usi\156\147\040diff\145\162\145nt do\155\141\151ns fo\162\040\171our s\165\142\163ites\056\040Please\040\141\143tiva\164\145\040the \154\151\143ense \153\145\171 for\040\164\150ose \144\157\155ains \146\151rst by\040\165\163ing \164\150\145 \042\104\157\155ain \164\157\040acti\166\141\164e\042\040\146eature\040\141bove b\145\146ore di\163\164\162ibut\151\156g the \154\151cense\040\153ey to\040\171our s\165\142\163ite\163\041 This\040\167ill e\156\163ure \164\150at al\154\040thes\145\040domai\156\163 are \162\145gist\145\162ed on\040\171our \143\165stome\162\040prof\151\154e on\040\155apsm\141\162ker.\143\157m - w\150\151ch w\151\154l re\163\165lt i\156\040a va\154\151d li\143\145nse \166\141lida\164\151on o\156\040sub\163\151tes \141\146ter\040\144ist\162\151buti\156\147 the\040\154ice\156\163e k\145\171.","\154\155m")."\074\057p>"; } echo "<form\040\151\144=\042m\165\154\164isite_p\162\157\160age_li\143\145\156se_for\155\042\040meth\157\144\075\042po\163\164\042>"; wp_nonce_field("\155aps_ma\162\153\145r_pro_\154\151\143ense_mu\154\164\151site","\155aps_mar\153\145\162_pro_li\143\145\156se_mult\151\163\151te"); echo "<input\040\164\171pe=\042\143\150\145ckbox\042\040\156\141me=\042\155\141\160s_mar\153\145\162_pro_m\165\154\164isite\137\144\151strib\165\164\145\042 i\144\075\042maps\137\155\141rker\137\160\162o_mul\164\151\163ite_\144\151\163tribu\164\145\042 /> \074\154\141bel \146\157\162=\042m\141\160\163_mar\153\145\162_pro\137\155\165ltisi\164\145\137dist\162\151\142ute\042\076".__("Yes I \167\141\156t to dis\164\162\151bute th\145\040\154icens\145\040\153ey to \141\154\154 subsi\164\145\163","lmm")."\074/label>"; echo "\040<input id\075\042\155ultisi\164\145\137propage\137\154\151cense_b\165\164\164on\042 \164\171\160e=\042s\165\142\155it\042 \143\154\141ss=\042\142\165tton-p\162\151\155ary\042\040\144isable\144\075\042disa\142\154\145d\042 \166\141\154ue=\042".__("\163tart","\154\155m")."\042\040/>"; echo "<spa\156\040\151d=\042mu\154\164\151site_pr\157\160\141ge_lice\156\163\145_loadi\156\147\137icon\042\040\163tyle=\042\144\151splay:\156\157\156e;pad\144\151\156g:5px\040\060 0 5px\073\042><img \163\162\143=\042".LEAFLET_PLUGIN_URL."inc/\151\155\147/ajax-lo\141\144\145r.gif\042\040\167idth=\042\061\066\042 h\145\151\147ht=\042\061\066\042/></\163\160\141n>"; } } ?><?php echo "\015\012\074\163cript \164\171\160e=\042t\145\170\164/javas\143\162\151pt\042>\015\012\057/info\072\040show a\156\157\156ymous\040\162\145gist\145\162\040butto\156\015\012(fun\143\164\151on(\044\051\040\173\015\012\011\044('#\157\160\164ion-b\055\150ide').\143\154\151ck(fu\156\143\164ion(\145\051\040\173\015\012\011\011\044\050\047#opti\157\156\055b-h\151\144\145').h\151\144\145();\015\012\011\011\044\050\047#opt\151\157n-b-sh\157\167').sh\157\167\050);\015\012\011});\015\012\011\044(\047\043lice\156\163e_sub\155\151t_btn\047\051.cli\143\153(func\164\151on(e)\173\015\012\011\011\166ar l\151\143ense_\153\145y = \044\050'#le\141\146letma\160\163mark\145\162pro_l\151\143ense\137\153ey').\166\141l();\015\012\011\011\151\146(li\143\145nse_\153\145y.le\156\147th !\075\075 0)\173\015\012\011\011\011e.\160\162even\164\104efau\154\164();\015\012\011\011\011if(l\151\143ense\137\153ey.\151\156dexO\146\050'Ma\160\163Mar\153\145r') \075\075= \060\051\173\015\012\011\011\011\011\044\050'#li\143\145nse\137\155es\163\141ge'\051\056ht\155\154(''\051\073\015\012\011\011\011\011\044\050\047#l\151\143ens\145\137mes\163\141ge\047\051.h\151\144e()\073\015\012\011\011\011\011\044('\043\154ic\145\156se_\163\165bm\151\164_b\164\156').\160\162op\050\047di\163\141bl\145\144', \164\162ue\051\073\015\012\011\011\011\011\044\050'#l\151\143en\163\145_s\165\142mi\164\137bt\156\137lo\141\144in\147\137ic\157\156')\056\163ho\167\050);\015\012\011\011\011\011\044('\043\154ic\145\156s\145\137fo\162\155')\056\163u\142\155it\050\051;\015\012\011\011\011}\145\154se\173\015\012\011\011\011\011\044\050'#l\151\143e\156\163e_\155\145s\163\141ge\047\051.\163\150o\167\050)\073\015\012\011\011\011\011\044\050'#l\151cen\163\145_m\145ssa\147\145'\051\056h\164\155l(\047"; ?><?php echo sprintf(__("\105rror: you\040\145\156tered \141\156\040inval\151\144\040licens\145\040\153ey! Th\145\040\154icens\145\040\153ey mu\163\164\040star\164\040\167ith %\163","\154\155m"),"<s\160\141\156 style=\042\146\157nt-wei\147\150\164:bold;\042\076\115apsMark\145\162\074/span\076"); ?><?php echo "\047\051;\015\012\011\011\011}\015\012\011\011\175\015\012\011\175\051;\015\012\011\044('#pe\162\163\157nalize\144\137\164rial_\163\165\142mit_\142\165\164ton')\056\143\154ick(f\165\156\143tion\050\145\051\173\015\012\011\011e.\160\162\145vent\104\145\146ault\050\051;\015\012\011\011\044('#\160\145\162sona\154\151\172ed_t\162\151\141l_su\142\155\151t_bu\164\164\157n').\160\162\157p('d\151\163abled'\054\040true)\073\015\012\011\011\044('#pe\162\163\157nal\151\172\145d_t\162\151\141l_l\157\141\144ing\137\151con')\056\163how()\073\015\012\011\011\044('#\155\141\160s_m\141\162ker_p\162\157_regi\163\164er_fr\145\145_for\155\047).su\142\155it();\015\012\011}\051\073\015\012\011\044('#\141\156onym\157\165s_tr\151\141l_su\142\155it_b\165\164ton'\051\056cli\143\153(fun\143\164ion(\145\051\173\015\012\011\011\145\056pre\166\145ntDe\146\141ult\050\051;\015\012\011\011\044\050'#an\157\156ymo\165\163_tri\141\154_su\142\155it_b\165\164ton\047\051.pr\157\160('d\151\163abl\145\144', \164\162ue)\073\015\012\011\011\044(\047\043an\157\156ymo\165\163_tr\151\141l_l\157\141din\147\137ico\156\047).\163\150ow(\051\073\015\012\011\011\044\050'#\155\141ps_\155\141rk\145\162_pr\157\137re\147\151ste\162\137fr\145\145_an\157\156ym\137\146orm\047\051.s\165\142mi\164\050);\015\012\011\175\051;\015\012\011\044\050'#\155\141ps\137\155ar\153\145r_\160\162o_\155\165lti\163\151te\137\144is\164\162ib\165\164e'\051.cl\151\143k(f\165ncti\157\156(e\051\173\015\012\011\011\044('\043\155ul\164\151si\164\145_\160\162op\141\147e_\154\151ce\156\163e_\142\165t\164\157n'\051\056p\162\157p(\047dis\141\142le\144\047,\040\146a\154\163e)\073\015\012\011})\073\015\012\011\044(\047#mu\154\164i\163\151te\137pro\160\141ge\137lic\145\156se\137\142u\164\164on\047).c\154\151c\153\050f\165\156c\164\151on\050e)\173\015\012\011\011e\056pre\166ent\104\145f\141\165l\164\050)\073\015\012\011\011\044('#\155\165l\164\151s\151\164e\137\160r\157\160a\147\145_\154\151c\145\156s\145\137b\165\164t\157\156'\051.pr\157p('\144isa\142led\047, t\162ue)\073\015\012\011\011\044(\047#m\165lti\163ite\137pr\157pag\145_l\151\143e\156se\137loa\144in\147_ic\157n'\051.sh\157w(\051;\015\012\011\011\044\050'#\155ul\164isi\164e_\160rop\141ge\137lic\145ns\145_f\157\162m\047).\163ub\155it(\051;\015\012\011\175)\073\015\012})\050jQ\165er\171)\015\012<\057sc\162ip\164>\015\012"; ?><?php include ("inc".DIRECTORY_SEPARATOR."admin\055\146\157oter.\160\150\160"); ?><?php echo "\015\012"; ?>