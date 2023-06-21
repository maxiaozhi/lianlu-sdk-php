<?php
require __DIR__ . '/vendor/autoload.php';

use Lianlu\Lianlu\Clients\InterSend;
use Lianlu\Lianlu\Clients\Product;
use Lianlu\Lianlu\Clients\SmsSend;
use Lianlu\Lianlu\Common\Credential;
use Lianlu\Lianlu\Common\LianLuException;
use Lianlu\Lianlu\models\Balance;
use Lianlu\Lianlu\models\Inter;
use Lianlu\Lianlu\models\Sign;
use Lianlu\Lianlu\models\Sms;


$cred = new Credential("", "", "");
// getReport
//$input = new \Lianlu\Lianlu\models\Report();
//$input->SetTaskId("202211092009070002727");
//try {
//    $result = Product::Report($cred, $input);
//
//    print_r($result);
//} catch (LianLuException $e) {
//}

// send internal sms
//$input = new Inter();
//$input->SetPhoneNumberSet(["+447458196165"]);
//$input->SetTemplateId(10185);
//$input->SetTemplateParamSet(["1","2"]);

// send normal sms
//$input = new Sms();
//$input->SetSessionContext("test");
//$input->SetPhoneNumberSet("");
//$input->SetSignName("【联麓信息】");
//$input->SetTag("1111");
//try {
//    $result = SmsSend::NormalSend($cred, $input);
//    print_r($result);
//} catch (LianLuException $e) {
//}

// send personal sms
//$input = new Sms();
//$input->SetSignName("【】");
//$input->SetSessionContextSet("{%1%}222");
//$input->SetContextParamSet([["", ""]]);
//
//try {
//    $result = SmsSend::PersonalSend($cred, $input);
//    print_r($result);
//} catch (LianLuException $e) {
//}

// send template sms
//$input = new Sms();
//$input->SetTemplateId(70004046);
//$input->SetPhoneNumberSet("15601862749");
//$input->SetTemplateParamSet(["121212"]);
//
//try {
//    $result = SmsSend::TemplateSend($cred, $input);
//    print_r($result);
//} catch (LianLuException $e) {
//}
