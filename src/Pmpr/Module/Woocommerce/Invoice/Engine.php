<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240a6db5658d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateDatabase; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Engine extends Common { protected ?Generator $generator = null; public function siciqscsekqaqess() : ?Generator { if ($this->generator) { goto cgiscsqwwgqqaeqi; } $this->generator = Generator::symcgieuakksimmu(); cgiscsqwwgqqaeqi: return $this->generator; } public function sywqsimcesscwamc() { $yeacayasgueouoqc = null; $wsgaqoyasieoiwuw = $this->eiwcuqigayigimak(Setting::aegqguumccieqwyk); $seauiwyeoycowegg = [self::ugsuecoyuqcamsac => "\x70\157\163\164\x6d\x65\164\x61", self::cgiswgcumueqgcmw => 1, self::cqcimoqckgmaacyw => "\103\x41\x53\124\50\155\x65\164\x61\137\x76\141\x6c\165\x65\x73\x20\x41\123\x20\x53\111\x47\116\105\x44\51", self::iowgsqgiaamyuswi => [self::osocaqqumyuooqyo => self::sqsaisksswaayayo]]; if (!$wsgaqoyasieoiwuw) { goto syiqkaasoueowwui; } $yooaaeuioeawcqms = date("\x59\55\x30\61\x2d\x30\x31"); $seusouwwgeqagsce = date("\131\55\x31\62\55\x33\61"); $seauiwyeoycowegg[self::iowgsqgiaamyuswi]["\x70\157\x73\164\137\x69\x64"] = [self::ugsuecoyuqcamsac => "\160\157\x73\164\155\145\164\x61", self::soquiwyuimckgiow => "\x70\x6f\163\x74\x5f\151\144", self::iowgsqgiaamyuswi => [self::osocaqqumyuooqyo => self::cekyaeaeeigmwysa, [self::ciyoccqkiamemcmm => $yooaaeuioeawcqms, self::meisqwykgaymauka => self::iwmgegikocuwggua, self::eugyciakiowwcuwm => "\76\75"], [self::ciyoccqkiamemcmm => $seusouwwgeqagsce, self::meisqwykgaymauka => self::iwmgegikocuwggua, self::eugyciakiowwcuwm => "\x3c\75"]]]; syiqkaasoueowwui: $eioamqeaccimmisg = ManipulateDatabase::gmogewiwceqokqmy($seauiwyeoycowegg); if (!$eioamqeaccimmisg) { goto giaacoqqqsekcayy; } $yeacayasgueouoqc = ManipulateArray::get($eioamqeaccimmisg, self::iwmgegikocuwggua); giaacoqqqsekcayy: if (!$yeacayasgueouoqc) { goto wmywuusgukmmaams; } $mmwoqcwiwemokkue = $yeacayasgueouoqc + 1; goto gkyawqqcmigqgaiq; wmywuusgukmmaams: $occuycyyyycsosao = ManipulateDatabase::qaumqeeagueuqkcg([self::ugsuecoyuqcamsac => "\x70\x6f\163\x74\x6d\x65\x74\x61", self::soquiwyuimckgiow => "\143\157\165\156\164\50\52\51", self::iowgsqgiaamyuswi => [self::osocaqqumyuooqyo => self::sqsaisksswaayayo]]); $mmwoqcwiwemokkue = 1; $mesieoomaagsgyqe = $this->eiwcuqigayigimak(Setting::uumqsyagoeuaaimw, 0); if (!$mesieoomaagsgyqe) { goto cmegwsegsosyqcai; } if (!(!$wsgaqoyasieoiwuw || $occuycyyyycsosao == 0)) { goto ewymsmkkiksgwysk; } $mmwoqcwiwemokkue = $mesieoomaagsgyqe; ewymsmkkiksgwysk: cmegwsegsosyqcai: gkyawqqcmigqgaiq: $acwmgkosiwekkosk = $this->eiwcuqigayigimak(Setting::ysoqycicuciiyuaw, 0); if (!(!$wsgaqoyasieoiwuw && $acwmgkosiwekkosk > $mmwoqcwiwemokkue)) { goto ooeausyowguqicuo; } $mmwoqcwiwemokkue = $acwmgkosiwekkosk; ooeausyowguqicuo: return $mmwoqcwiwemokkue; } public function ywgkowokogikyoem($umwqusowiqmyseom) : string { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); $egaioscwooawuigc = ManipulatePost::igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm); $qqueccegigsqmmmg = $this->iaicueasqoiusuoo([self::awkcoioakcaougmq => $umwqusowiqmyseom]); $yuwymayicwwqiske = esc_html($this->eiwcuqigayigimak(Setting::mqcukmwiaqukgywi)); $yuwymayicwwqiske = $this->imuqeaaqmwwkgqui($yuwymayicwwqiske, $qqueccegigsqmmmg); $scqcgogsiaiksiiq = esc_html($this->eiwcuqigayigimak(Setting::wywskiqiowiagemy)); $scqcgogsiaiksiiq = $this->imuqeaaqmwwkgqui($scqcgogsiaiksiiq, $qqueccegigsqmmmg); if (!($wukmmiqowweyucaa = $this->eiwcuqigayigimak(Setting::osgqakokgccsywgw))) { goto egyyiccaeeiooaua; } $egaioscwooawuigc = str_pad($egaioscwooawuigc, strlen($wukmmiqowweyucaa), "\60", STR_PAD_LEFT); egyyiccaeeiooaua: return $yuwymayicwwqiske . $egaioscwooawuigc . $scqcgogsiaiksiiq; } public function mwmuaeuyequywmsq($umwqusowiqmyseom) { $qummwmsmceweyoqo = [self::ykqogmimmamwckwe => $this->eoagosyscaaqycai($umwqusowiqmyseom), self::sqsaisksswaayayo => $this->oskkikcewyayqmme($umwqusowiqmyseom), self::cekyaeaeeigmwysa => current_time("\155\x79\x73\161\154"), self::mgisuqmqaesqscso => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::wmamggmmccsqcqwa), self::wkuaqkmwcegcgwim => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::qiookqywwgemeamk), self::sokaqgmykimmecwq => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::kwmkawqoiesweswy), self::owoskccgqgyycqoe => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::wsccocqiicegwska), self::cueaooscqucmcseu => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::aockomuqgkgqyaki), self::occkmmmsugiucmsi => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::kosymqioioyguigs), self::yisqmeewaaykaeqg => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::ekyyyewmowkgcgay), self::asmcgcuuyowickgq => $this->eacciqkqyiyiawiy($umwqusowiqmyseom, Setting::qaowyaoaqwacmgeo), self::uicuqucwwkscyyyy => $this->ywgkowokogikyoem($umwqusowiqmyseom)]; $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); ManipulatePost::ksmqawcowkmegigw(self::uqkoiiemwwwicsyu, $qummwmsmceweyoqo, $gkkgcoiwayaccqgm); foreach ($qummwmsmceweyoqo as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { ManipulatePost::ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $gkkgcoiwayaccqgm); cewmoqyysgsmuiya: } scisgsyemmsekgos: } public function eoagosyscaaqycai($umwqusowiqmyseom) : ?string { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); $umwqusowiqmyseom = ManipulateWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom); $ogegikscwkaowsqa = ManipulatePost::igawqaomowicuayw(self::ykqogmimmamwckwe, $gkkgcoiwayaccqgm); if ($ogegikscwkaowsqa) { goto ugqaaewwmkocwwgy; } $oqycwugsseyiisou = $this->eiwcuqigayigimak(Setting::ekeaeyoouiiymayo); if ($oqycwugsseyiisou == self::amcogigwsaqssuai) { goto igooksugieceoege; } $ogegikscwkaowsqa = $umwqusowiqmyseom->get_date_created(); goto omqiayeucoioqoao; igooksugieceoege: $ogegikscwkaowsqa = current_time("\155\x79\163\x71\154"); omqiayeucoioqoao: ugqaaewwmkocwwgy: return $this->cqswciouesmewqke($ogegikscwkaowsqa); } public function oskkikcewyayqmme($umwqusowiqmyseom) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); $egaioscwooawuigc = ManipulatePost::igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm); if ($egaioscwooawuigc) { goto ueigkucgaucgeimc; } if ($this->eiwcuqigayigimak(Setting::gooouyogomkqyiwa)) { goto wgewmqieuamsoayy; } $egaioscwooawuigc = $this->sywqsimcesscwamc(); goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: $egaioscwooawuigc = $gkkgcoiwayaccqgm; kqgcyoscsusgoaqi: DecoratorOption::update(self::cgsyasqoqekikcue, date("\131")); $egaioscwooawuigc = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\144\x66\137\x69\x6e\x76\x6f\x69\x63\x65\163\137\163\145\164\x5f\151\x6e\x76\x6f\151\x63\x65\x5f\156\x75\x6d\142\x65\162"), $egaioscwooawuigc, $gkkgcoiwayaccqgm); ManipulatePost::ksmqawcowkmegigw(self::sqsaisksswaayayo, $egaioscwooawuigc, $gkkgcoiwayaccqgm); Setting::symcgieuakksimmu()->eiaacegkigqiwawg(Setting::ysoqycicuciiyuaw, $egaioscwooawuigc); ueigkucgaucgeimc: return $egaioscwooawuigc; } }
