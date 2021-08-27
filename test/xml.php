<?php
$xml = <<< EOT
<?xml version="1.0" encoding="UTF-8"?>
<VerifyAddItemResponse xmlns="urn:ebay:apis:eBLBaseComponents"><Timestamp>2021-08-11T07:17:02.969Z</Timestamp><Ack>Failure</Ack><Errors><ShortMessage>Return policy option deprecated.</ShortMessage><LongMessage>The value specified is no longer supported in certain categories or sites.</LongMessage><ErrorCode>21920203</ErrorCode><SeverityCode>Warning</SeverityCode><ErrorParameters ParamID="0"><Value>ReturnsWithinOption</Value></ErrorParameters><ErrorClassification>RequestError</ErrorClassification></Errors><Errors><ShortMessage>Invalid PayPal email address.</ShortMessage><LongMessage>The email address you entered isn&apos;t linked to a PayPal account. If you don&apos;t have a PayPal account, you&apos;ll need to set one up with this address so that buyers can pay you. (You can set up your account after your item sells).</LongMessage><ErrorCode>21919158</ErrorCode><SeverityCode>Warning</SeverityCode><ErrorClassification>RequestError</ErrorClassification></Errors><Errors><ShortMessage>Java script not allowed.</ShortMessage><LongMessage>Your listing cannot contain javascript (&quot;.cookie&quot;, &quot;cookie(&quot;, &quot;replace(&quot;, IFRAME, META, or includes), cookies or base href.</LongMessage><ErrorCode>353</ErrorCode><SeverityCode>Error</SeverityCode><ErrorClassification>RequestError</ErrorClassification></Errors><Version>1217</Version><Build>E1217_UNI_API5_19110890_R1</Build></VerifyAddItemResponse>


EOT;

//$xml = preg_replace('/\sxmlns="(.*?)"/', ' _xmlns="${1}"', $xml);
//$xml = preg_replace('/<(\/)?(\w+):(\w+)/', '<${1}${2}_${3}', $xml);
//$xml = preg_replace('/(\w+):(\w+)="(.*?)"/', '${1}_${2}="${3}"', $xml);
$xml =simplexml_load_string($xml,'SimpleXMLElement',$options=LIBXML_NOCDATA);
$xmljson= json_encode($xml);
$xml=json_decode($xmljson,true);
var_dump($xml);
