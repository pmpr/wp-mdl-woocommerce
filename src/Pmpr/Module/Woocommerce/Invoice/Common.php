<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d6e42094b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice; use DateTime; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateDatabase; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Woocommerce\Container; use Pmpr\Module\Woocommerce\Invoice\Email\Customer; abstract class Common extends Container { const ogsyeiyceciuikeu = "\x76\x69\145\167"; const ygsicwwgewqkauyo = "\x64\x6f\x77\x6e\154\x6f\141\x64"; const woacsaigwaqsmqaa = "\160\x64\146\137\151\x64"; const geeoyiwewgeekiuk = "\160\144\146\137\156\x6f\156\x63\145"; const ykyaeuqoucqeqoqy = "\160\x64\146\137\x6d\x65\164\150\x6f\144"; const uqkoiiemwwwicsyu = "\x5f\151\x6e\x76\x6f\x69\x63\145\x5f\155\145\164\x61"; const mgisuqmqaesqscso = "\x5f\x70\x64\x66\137\x74\x69\164\154\x65"; const ykqogmimmamwckwe = "\x5f\151\x6e\x76\157\151\143\145\137\144\141\164\145"; const wkuaqkmwcegcgwim = "\137\x70\144\x66\137\164\141\170\137\156\165\x6d\x62\145\x72"; const sokaqgmykimmecwq = "\x5f\160\x64\146\x5f\x76\x61\x74\x5f\156\165\x6d\x62\x65\x72"; const sqsaisksswaayayo = "\137\151\156\166\x6f\151\x63\x65\137\x6e\165\x6d\x62\145\162"; const cekyaeaeeigmwysa = "\x5f\x69\x6e\x76\x6f\151\143\x65\137\x63\x72\x65\x61\x74\145\x64"; const owoskccgqgyycqoe = "\x5f\x70\144\146\137\143\x6f\x6d\160\x61\156\171\137\x69\156\146\x6f"; const cueaooscqucmcseu = "\x5f\160\144\146\137\x63\157\x6d\160\x61\156\171\x5f\x6e\x61\x6d\x65"; const occkmmmsugiucmsi = "\137\x70\144\146\x5f\x63\x6f\x6d\x70\x61\x6e\171\137\156\165\x6d\x62\x65\x72"; const yisqmeewaaykaeqg = "\x5f\x70\x64\146\137\162\x65\147\x69\163\164\145\x72\145\x64\137\156\x61\x6d\145"; const asmcgcuuyowickgq = "\x5f\x70\144\146\137\162\145\147\151\x73\x74\x65\162\x65\144\137\x6f\x66\x66\151\143\145"; const uicuqucwwkscyyyy = "\x5f\x69\156\166\157\x69\143\x65\x5f\156\165\x6d\x62\145\162\x5f\x64\x69\x73\160\x6c\x61\171"; const cgsyasqoqekikcue = "\167\157\157\143\157\x6d\x6d\x65\x72\x63\x65\x5f\160\x64\146\137\151\x6e\x76\157\x69\x63\145\x5f\x63\165\x72\162\x65\156\x74\137\171\x65\x61\x72"; const ccgqyueqwamcquoc = "\x77\157\x6f\x63\157\x6d\x6d\x65\162\143\145\x5f\160\144\x66\137\x69\156\166\x6f\x69\x63\145\137\143\x75\162\x72\145\x6e\x74\137\x69\156\x76\x6f\x69\143\x65"; const auyccywgowgaakuq = "\x77\157\x6f\x63\x6f\x6d\155\x65\x72\143\145\x5f\x70\x64\x66\x5f\x69\156\x76\157\151\x63\x65\137\144\145\154\x65\164\145\x5f\146\151\154\x65\x73"; const kkeuwykwiayqoeko = "\167\x6f\157\143\x6f\155\x6d\145\162\143\x65\137\x70\144\x66\137\151\156\166\x6f\151\x63\145\x5f\x75\160\x64\141\x74\145\137\160\141\x73\x74\137\157\162\144\x65\x72\163"; protected ?Engine $engine = null; public function uykissogmuaaocsg() : ?Engine { if ($this->engine) { goto qmeoaqmsuseueqiy; } $this->engine = Engine::symcgieuakksimmu(); qmeoaqmsuseueqiy: return $this->engine; } public function oomocmisomecccym() { $skuyigkowomeowiq = ini_get("\165\160\154\157\141\x64\137\164\x6d\x70\x5f\x64\x69\x72") ?: sys_get_temp_dir(); $mkomwsiykqigmqca = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\144\x66\137\x69\x6e\x76\x6f\151\x63\145\137\160\144\146\x5f\165\160\154\x6f\x61\x64\137\x70\141\164\x68"), ManipulateArray::get(wp_upload_dir(), "\x62\141\163\145\x64\151\x72")); $miawkwqioaeasiig = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\144\146\137\151\156\x76\x6f\x69\143\145\x5f\160\x64\x66\137\165\160\154\x6f\141\144\x5f\x64\151\162"), "\167\x6f\x6f\x63\x6f\x6d\155\145\162\143\145\55\x70\x64\146\x2d\151\156\166\x6f\151\x63\145"); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $mmicssmagyqiooei = untrailingslashit($mkomwsiykqigmqca) . "\x2f{$miawkwqioaeasiig}"; if ($iiaumsgauuyeqksw->exists($mmicssmagyqiooei)) { goto ygkcacsyyckescqs; } $iiaumsgauuyeqksw->oquguuiseiwkawkw($mmicssmagyqiooei, $miawkwqioaeasiig); ygkcacsyyckescqs: if (!$iiaumsgauuyeqksw->exists($mmicssmagyqiooei)) { goto cgewcsueoyaeikgm; } $skuyigkowomeowiq = $mmicssmagyqiooei; $yuyowiyumyysomoy = strpos($mmicssmagyqiooei, "\x3a\x5c"); if (!$yuyowiyumyysomoy) { goto cuoqqgaygogsmmic; } $skuyigkowomeowiq = str_replace("\57", "\x5c", $mmicssmagyqiooei); cuoqqgaygogsmmic: cgewcsueoyaeikgm: return $skuyigkowomeowiq; } public function ykogmkwyscmsmuki($umwqusowiqmyseom) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); if (!($this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x64\146\x5f\x69\x6e\x76\157\151\x63\145\x5f\143\x72\145\141\164\145\x5f\x70\x64\x66"), true) === true)) { goto sukskmcwsoysiuqu; } $this->uykissogmuaaocsg()->oskkikcewyayqmme($gkkgcoiwayaccqgm); $this->uykissogmuaaocsg()->eoagosyscaaqycai($gkkgcoiwayaccqgm); $this->uykissogmuaaocsg()->mwmuaeuyequywmsq($gkkgcoiwayaccqgm); $this->cecaguuoecmccuse("\167\x6f\x6f\143\157\x6d\x6d\145\x72\x63\145\x5f\x65\155\x61\151\x6c\x5f\x61\x74\x74\x61\x63\150\x6d\145\156\164\x73", [$this, "\161\x79\155\155\165\x75\153\x75\x63\x6f\x61\x6f\153\x67\x73\157"], 10, 3); sukskmcwsoysiuqu: } public function omyagiccyuacsmyq() : array { return [self::mgisuqmqaesqscso => __("\111\x6e\x76\157\x69\x63\x65\40\x54\151\164\x6c\145", PR__MDL__WOOCOMMERCE), self::uqkoiiemwwwicsyu => __("\111\156\x76\x6f\x69\x63\x65\40\115\x65\164\141\x64\x61\x74\x61", PR__MDL__WOOCOMMERCE), self::sqsaisksswaayayo => __("\x49\156\x76\157\x69\143\x65\40\116\165\x6d\142\x65\x72", PR__MDL__WOOCOMMERCE), self::uicuqucwwkscyyyy => __("\111\156\166\157\x69\143\145\40\116\x75\x6d\142\x65\162\40\x44\x69\x73\x70\x6c\x61\171", PR__MDL__WOOCOMMERCE), self::cekyaeaeeigmwysa => __("\111\x6e\x76\x6f\151\x63\145\x20\x43\x72\145\141\x74\x65\144\x20\104\141\x74\x65", PR__MDL__WOOCOMMERCE), self::ykqogmimmamwckwe => __("\111\x6e\166\157\151\143\145\x20\104\x61\x74\145", PR__MDL__WOOCOMMERCE), self::wkuaqkmwcegcgwim => __("\111\x6e\166\x6f\151\x63\x65\40\x54\x61\170\40\x4e\165\155\142\145\x72", PR__MDL__WOOCOMMERCE), self::sokaqgmykimmecwq => __("\111\156\166\x6f\151\x63\145\40\x56\141\164\x20\x4e\x75\155\x62\145\162", PR__MDL__WOOCOMMERCE), self::cueaooscqucmcseu => __("\111\156\x76\x6f\151\143\145\x20\103\157\x6d\x70\141\x6e\171\40\116\x61\x6d\x65", PR__MDL__WOOCOMMERCE), self::owoskccgqgyycqoe => __("\111\156\166\x6f\x69\143\145\40\x43\x6f\x6d\160\141\156\x79\40\x49\156\146\x6f", PR__MDL__WOOCOMMERCE), self::occkmmmsugiucmsi => __("\x49\156\x76\157\151\143\x65\x20\x43\x6f\155\160\x61\156\x79\40\x4e\165\155\x62\x65\x72", PR__MDL__WOOCOMMERCE), self::yisqmeewaaykaeqg => __("\x49\156\x76\157\x69\x63\145\x20\x52\145\147\151\x73\164\145\162\x65\x64\x20\x4e\x61\x6d\145", PR__MDL__WOOCOMMERCE), self::asmcgcuuyowickgq => __("\111\x6e\x76\x6f\151\x63\145\40\x52\x65\147\x69\163\164\145\162\x65\144\x20\x4f\x66\x66\151\x63\145", PR__MDL__WOOCOMMERCE)]; } public function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false) { return Setting::symcgieuakksimmu()->eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee); } public function eacciqkqyiyiawiy($umwqusowiqmyseom, $aiowsaccomcoikus) { $ksaameoqigiaoigg = $this->eiwcuqigayigimak($aiowsaccomcoikus); return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\144\x66\x5f\x69\156\166\x6f\x69\143\145\x5f\x73\145\164\137{$aiowsaccomcoikus}"), $ksaameoqigiaoigg, $umwqusowiqmyseom); } protected function igawqaomowicuayw($uusmaiomayssaecw, $post = null) { return ManipulatePost::igawqaomowicuayw($uusmaiomayssaecw, $post); } public function oquyoauwcskgeeis($umwqusowiqmyseom, $uusmaiomayssaecw = null) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); if ($uusmaiomayssaecw) { goto igymseewwyiocoug; } $sogksuscggsicmac = $this->igawqaomowicuayw(self::uqkoiiemwwwicsyu, $gkkgcoiwayaccqgm); goto mqccmesakuemceqi; igymseewwyiocoug: $sogksuscggsicmac = $this->igawqaomowicuayw($uusmaiomayssaecw, $gkkgcoiwayaccqgm); mqccmesakuemceqi: return $sogksuscggsicmac; } public function aioemwomyweyeoug($umwqusowiqmyseom) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); return $this->igawqaomowicuayw(self::uicuqucwwkscyyyy, $gkkgcoiwayaccqgm); } public function cowkagmcecukgoya($umwqusowiqmyseom) : string { $eusockqasqqmoess = ''; if (!$umwqusowiqmyseom) { goto eyiamcekkgkiawqy; } $eusockqasqqmoess = esc_html($this->aioemwomyweyeoug($umwqusowiqmyseom)); eyiamcekkgkiawqy: return $eusockqasqqmoess; } public function wceqweesyywiouuy($gkkgcoiwayaccqgm = null) : ?string { $oiegiwogmwmawkeo = $this->eiwcuqigayigimak(Setting::yauwwgumiqaqgeco, Setting::kiecoskamwokisyg); $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\144\x66\x5f\x69\156\x76\x6f\151\x63\145\137\160\x61\x70\145\162\137\x73\x69\x7a\x65"), $oiegiwogmwmawkeo, $gkkgcoiwayaccqgm); if (is_string($oiegiwogmwmawkeo)) { goto twkmiuomimomscew; } $oiegiwogmwmawkeo = Setting::kiecoskamwokisyg; twkmiuomimomscew: return $oiegiwogmwmawkeo; } public function wqgmukisueesakym($gkkgcoiwayaccqgm = null) : ?string { $gykycuqccwyaeook = $this->eiwcuqigayigimak(Setting::aykcssegkcassmua, Setting::gioiusoscccekmik); $gykycuqccwyaeook = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x64\x66\137\151\156\166\157\x69\143\x65\137\x70\x61\160\x65\162\137\x6f\162\151\x65\x6e\164\x61\164\151\157\156"), $gykycuqccwyaeook, $gkkgcoiwayaccqgm); if (is_string($gykycuqccwyaeook)) { goto kooskuwkuayiuose; } $gykycuqccwyaeook = Setting::gioiusoscccekmik; kooskuwkuayiuose: return $gykycuqccwyaeook; } public function wmqseywcumycsyyu($umwqusowiqmyseom, $iggccakyiqoywyks = self::amcogigwsaqssuai, $mmeskwecseguqmai = false, $ccamueccusigaaio = "\x69\x6e\x76\x6f\x69\143\145") { $sogksuscggsicmac = null; $umwqusowiqmyseom = ManipulateWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom); if (!$umwqusowiqmyseom) { goto gygawoqywkukmqee; } $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); if ($ccamueccusigaaio == "\x69\x6e\166\x6f\151\143\145" && ($ogegikscwkaowsqa = ManipulatePost::igawqaomowicuayw(self::ykqogmimmamwckwe, $gkkgcoiwayaccqgm))) { goto oouoqimaaqcmccay; } if ($ccamueccusigaaio == self::awkcoioakcaougmq && ($wmgiiumwscoyqkqa = $umwqusowiqmyseom->get_date_created())) { goto yssscwioiyygssec; } if ($iggccakyiqoywyks == self::amcogigwsaqssuai && $umwqusowiqmyseom->get_status() == self::amcogigwsaqssuai) { goto qwcegcuowwgiccos; } $ocogsiouoiuuguym = $umwqusowiqmyseom->get_date_created(); goto qcessicwuikwqsis; qwcegcuowwgiccos: $ocogsiouoiuuguym = $this->sayeeewgsiaaskww($gkkgcoiwayaccqgm); qcessicwuikwqsis: goto ieumumsgyguceusy; yssscwioiyygssec: $ocogsiouoiuuguym = $wmgiiumwscoyqkqa; ieumumsgyguceusy: if (!($mmeskwecseguqmai && !$ocogsiouoiuuguym)) { goto coywmiyqgsweuiic; } $ocogsiouoiuuguym = $umwqusowiqmyseom->get_date_created(); coywmiyqgsweuiic: if ($ocogsiouoiuuguym) { goto siqagquguiemuoku; } $sogksuscggsicmac = ''; goto ycakugokkqkuqyiu; siqagquguiemuoku: $sogksuscggsicmac = $this->cqswciouesmewqke($ocogsiouoiuuguym); ycakugokkqkuqyiu: goto sycygoiaiqqageym; oouoqimaaqcmccay: $sogksuscggsicmac = $ogegikscwkaowsqa; sycygoiaiqqageym: gygawoqywkukmqee: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\144\146\137\x64\x69\163\x70\x6c\141\x79\137\x69\156\166\157\x69\x63\x65\x5f\x64\141\x74\145"), $sogksuscggsicmac, $umwqusowiqmyseom, $iggccakyiqoywyks, $mmeskwecseguqmai, $ccamueccusigaaio); } public function sayeeewgsiaaskww($umwqusowiqmyseom) : ?string { $ocogsiouoiuuguym = ManipulateWoocommerce::sayeeewgsiaaskww($umwqusowiqmyseom); if ($ocogsiouoiuuguym) { goto umgaesggesswoaqe; } if ($qyiggqswsicqwuyi = $this->oquyoauwcskgeeis($umwqusowiqmyseom)) { goto kciouyuaqkyqomam; } $egaioscwooawuigc = $this->aioemwomyweyeoug($umwqusowiqmyseom); $eioamqeaccimmisg = ManipulateDatabase::gmogewiwceqokqmy([self::cgiswgcumueqgcmw => 1, self::ugsuecoyuqcamsac => "\x63\157\155\x6d\145\156\164\163", self::iowgsqgiaamyuswi => ["\x63\x6f\x6d\155\x65\x6e\164\x5f\x70\157\x73\164\137\151\144" => ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom), "\143\157\x6d\155\145\x6e\164\137\x63\157\x6e\x74\x65\x6e\164" => [self::ciyoccqkiamemcmm => "\x25\x20{$egaioscwooawuigc}\x20\x25", self::eugyciakiowwcuwm => self::augocsiaqqukkuui], "\143\157\155\x6d\x65\x6e\x74\x5f\x74\171\160\x65" => [self::ciyoccqkiamemcmm => "\157\x72\x64\145\162\137\x6e\x6f\164\x65"]]]); $ocogsiouoiuuguym = ManipulateArray::get($eioamqeaccimmisg, "\x63\x6f\155\x6d\x65\156\x74\x5f\x64\x61\164\x65"); goto wwkgkaecgiwggcck; kciouyuaqkyqomam: $ocogsiouoiuuguym = ManipulateArray::get($qyiggqswsicqwuyi, self::cekyaeaeeigmwysa); wwkgkaecgiwggcck: umgaesggesswoaqe: return $ocogsiouoiuuguym; } public function cqswciouesmewqke($ocogsiouoiuuguym = null) : ?string { $qquguecmwwmwomew = $this->eiwcuqigayigimak(Setting::omaocaaweuesmwwu, Setting::gocgkgumeiwkkkog); $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq(); $wucumyeqeqigucwy = DateTime::createFromFormat($saqmwwmqiwmkiwaa, $ocogsiouoiuuguym); if (!$wucumyeqeqigucwy) { goto qsygcycwieukkgwc; } $ocogsiouoiuuguym = $wucumyeqeqigucwy->format($qquguecmwwmwomew); qsygcycwieukkgwc: if (!($cqgoimumaewouews = strtotime($ocogsiouoiuuguym))) { goto kiwqkcaekqqyuegq; } $ocogsiouoiuuguym = date_i18n($saqmwwmqiwmkiwaa, $cqgoimumaewouews); kiwqkcaekqqyuegq: return $ocogsiouoiuuguym; } public function qymmuukucoaokgso($aiooqyausygaasqm = null, $aokagokqyuysuksm = null, $umwqusowiqmyseom = null) : array { if (!($aokagokqyuysuksm && $umwqusowiqmyseom && $this->ygksyiageqgkwwei() && $this->kyuqiuyumwgmieis())) { goto cmqucgoewuyieoyk; } $wgqagommioaakgak = $this->eiwcuqigayigimak(Setting::qoyosuyaiwgyqmoo, []); $wgqagommioaakgak[] = "\160\144\x66\x5f\x63\165\x73\x74\x6f\x6d\145\162\x5f\x69\156\x76\157\x69\x63\x65"; $wgqagommioaakgak[] = "\143\165\x73\x74\x6f\155\x65\162\x5f\143\x6f\x6d\160\154\x65\164\x65\x64\137\157\162\x64\145\x72"; $wgqagommioaakgak[] = "\x63\165\163\164\x6f\155\x65\x72\x5f\x63\157\x6d\160\154\145\x74\x65\144\137\162\x65\156\145\x77\141\x6c\137\x6f\162\144\145\162"; $wgqagommioaakgak = array_unique($wgqagommioaakgak); $wgqagommioaakgak = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x64\x66\x5f\151\x6e\x76\157\x69\143\145\137\145\x6d\x61\x69\154\x5f\151\x64\x73"), $wgqagommioaakgak, $umwqusowiqmyseom); if (!($wgqagommioaakgak && in_array($aokagokqyuysuksm, $wgqagommioaakgak))) { goto gimmuoqwckiseaik; } $qouueimogiessisw = [Setting::mgkwuiskoeewkksa, Setting::ygskawocmcykeoea]; if (!in_array($this->eiwcuqigayigimak(Setting::cacuakuykqiumuic), $qouueimogiessisw)) { goto iqcogmsguwoikame; } $iymiiogckyomckqk = $this->uykissogmuaaocsg()->siciqscsekqaqess()->imasugowgqyekses($umwqusowiqmyseom); $iymiiogckyomckqk = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\144\146\137\x69\156\166\x6f\x69\x63\145\x5f\x6d\x6f\144\x69\146\x79\137\141\x74\164\141\143\150\155\x65\x6e\x74"), $iymiiogckyomckqk, $aokagokqyuysuksm, $umwqusowiqmyseom); if (!$iymiiogckyomckqk) { goto quwcqmyokicssyew; } $aiooqyausygaasqm[] = $iymiiogckyomckqk; quwcqmyokicssyew: iqcogmsguwoikame: gimmuoqwckiseaik: cmqucgoewuyieoyk: return array_unique($aiooqyausygaasqm); } public function imuqeaaqmwwkgqui($sociqikgoyemqaac, $qqueccegigsqmmmg = [], $ywmkwiwkosakssii = []) { if ($qqueccegigsqmmmg) { goto yqykqysmiquwoasu; } $qqueccegigsqmmmg = $this->iaicueasqoiusuoo($ywmkwiwkosakssii); yqykqysmiquwoasu: return str_replace(array_keys($qqueccegigsqmmmg), $qqueccegigsqmmmg, $sociqikgoyemqaac); } public function iaicueasqoiusuoo($ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::kumuoysauoagaiiy => null, self::awkcoioakcaougmq => null, self::ackcaikowcokggsc => []]); $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::ackcaikowcokggsc, []); $qqueccegigsqmmmg = []; $kegkegukuqqiakko = ["\110" => "\107", "\x48\x48" => "\110", "\x44" => "\152", "\104\104" => "\x64", "\115" => "\156", "\x4e" => "\151", "\x53" => "\163", "\x4d\x4d" => "\x6d", "\131\131" => "\x79", "\x79\x79" => "\171", "\x59\x59\131\x59" => "\131", "\x79\x65\141\x72" => "\131", "\131\x45\101\122" => "\x59", "\x6d\x6f\x6e" => "\115", "\155\x6f\x6e\164\x68" => "\x46"]; $ocogsiouoiuuguym = ManipulateArray::get($ywmkwiwkosakssii, self::kumuoysauoagaiiy); foreach ($kegkegukuqqiakko as $uusmaiomayssaecw => $saqmwwmqiwmkiwaa) { if (!($ooiewiwkegguusum && !in_array(strtolower($uusmaiomayssaecw), $ooiewiwkegguusum))) { goto omugkkesagcyagmk; } goto mosqsmqimqgqoase; omugkkesagcyagmk: if ($ocogsiouoiuuguym) { goto ygcsmkuycoagwyou; } $eqgoocgaqwqcimie = date_i18n($saqmwwmqiwmkiwaa); goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $eqgoocgaqwqcimie = date($saqmwwmqiwmkiwaa, strtotime($ocogsiouoiuuguym)); kqksuugcgsyeoayy: $qqueccegigsqmmmg["\173\173{$uusmaiomayssaecw}\x7d\175"] = $eqgoocgaqwqcimie; mosqsmqimqgqoase: } ayyweymyuuiauamo: if (!($umwqusowiqmyseom = ManipulateArray::get($ywmkwiwkosakssii, self::awkcoioakcaougmq))) { goto miyqyeiwquwsacsm; } $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); $ogegikscwkaowsqa = $this->wmqseywcumycsyyu($umwqusowiqmyseom, self::amcogigwsaqssuai, true); $egaioscwooawuigc = $this->cowkagmcecukgoya($umwqusowiqmyseom); if ($egaioscwooawuigc) { goto iggyqogweyosuikc; } $egaioscwooawuigc = $gkkgcoiwayaccqgm; iggyqogweyosuikc: $osseiiwmsakcyeqi = $this->eiwcuqigayigimak(Setting::aockomuqgkgqyaki, get_bloginfo("\x6e\x61\x6d\145")); $qgowgcsuycquswmo = ["\143\157\155\x70\141\x6e\171" => $osseiiwmsakcyeqi, "\x43\117\115\120\x41\116\x59" => $osseiiwmsakcyeqi, "\151\156\x76\x6f\151\143\x65\137\144\x61\x74\145" => $ogegikscwkaowsqa, "\111\x4e\126\117\111\103\105\x5f\104\x41\124\x45" => $ogegikscwkaowsqa, "\151\156\x76\x6f\151\143\145\x5f\x6e\165\x6d\142\x65\162" => $egaioscwooawuigc, "\111\116\126\x4f\x49\x43\x45\x5f\116\x55\x4d\x42\x45\x52" => $egaioscwooawuigc]; foreach ($qgowgcsuycquswmo as $uusmaiomayssaecw => $mmomgiqeqykoeukg) { if (!($ooiewiwkegguusum && !in_array(strtolower($uusmaiomayssaecw), $ooiewiwkegguusum))) { goto qkcyqocqqwmqgqww; } goto ssoucoucsgccekwe; qkcyqocqqwmqgqww: $qqueccegigsqmmmg["\173\173{$uusmaiomayssaecw}\175\x7d"] = $mmomgiqeqykoeukg; ssoucoucsgccekwe: } qqewoyookaskiuek: miyqyeiwquwsacsm: return $qqueccegigsqmmmg; } public function awwskyoimucwkeoa() : array { $sscaicokimsuuiyw = $this->eiwcuqigayigimak(Setting::cysoyggakakyywwg, self::amcogigwsaqssuai); $oqseeekuqisekiwy = []; switch ($sscaicokimsuuiyw) { case self::eaaqiksmkkksomaa: $oqseeekuqisekiwy = [self::qgmyyeewkieecqck, self::amcogigwsaqssuai, self::sgoswgskyiiwkyuo, self::eaaqiksmkkksomaa]; goto eegqyykygiccaoeo; case self::sgoswgskyiiwkyuo: $oqseeekuqisekiwy = [self::qgmyyeewkieecqck, self::amcogigwsaqssuai, self::sgoswgskyiiwkyuo]; goto eegqyykygiccaoeo; case self::qgmyyeewkieecqck: $oqseeekuqisekiwy = [self::qgmyyeewkieecqck, self::amcogigwsaqssuai]; goto eegqyykygiccaoeo; case self::amcogigwsaqssuai: $oqseeekuqisekiwy = [self::amcogigwsaqssuai]; goto eegqyykygiccaoeo; } ywqgcegomwaiuquc: eegqyykygiccaoeo: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x64\146\137\151\x6e\166\x6f\x69\x63\x65\x5f\157\x72\x64\x65\x72\137\x73\164\141\x74\165\163\145\163"), $oqseeekuqisekiwy, $sscaicokimsuuiyw); } public function yukswyoieqekakke($gkkgcoiwayaccqgm = null) : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\144\146\x5f\151\156\166\x6f\x69\143\x65\137\x68\x74\x6d\154\x35\x5f\x70\141\162\163\145\x72\137\145\x6e\141\x62\x6c\145"), true, $gkkgcoiwayaccqgm); } public function ygksyiageqgkwwei() : bool { return extension_loaded("\x6d\142\x73\164\x72\x69\x6e\x67"); } public function kyuqiuyumwgmieis() : bool { return extension_loaded("\151\x63\x6f\156\166"); } public function gaisoeyogkaguouo($umwqusowiqmyseom) { $woocommerce = ManipulateWoocommerce::kkewuuisyiscmgyc(); if (!$woocommerce) { goto acaqummmoyiemqss; } $ockoeumsksqeoiyo = $woocommerce->mailer(); if (!$ockoeumsksqeoiyo) { goto soqqemyioggmoakg; } $awwassyawiguwyua = $ockoeumsksqeoiyo->emails; $owaiikyuwwwmswgc = ManipulateArray::get($awwassyawiguwyua, $this->mmkekmsmgoyksqcy()); if (!$owaiikyuwwwmswgc instanceof Customer) { goto wmmggowmigekyoso; } $owaiikyuwwwmswgc->kgimeakisikksgce($umwqusowiqmyseom); wmmggowmigekyoso: soqqemyioggmoakg: acaqummmoyiemqss: } public function mmkekmsmgoyksqcy() : string { return DecoratorSanitize::key(Customer::class); } public function esokicggweaimaeo() : bool { $mkucggyaiaukqoce = DecoratorUser::immcwcemcmyosyoo(); return $mkucggyaiaukqoce && in_array("\x61\144\155\151\x6e\x69\163\164\x72\x61\164\157\x72", $mkucggyaiaukqoce->roles); } }
