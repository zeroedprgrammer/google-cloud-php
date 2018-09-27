<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/texttospeech/v1/cloud_tts.proto

namespace Google\Cloud\TextToSpeech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The top-level message sent by the client for the `ListVoices` method.
 *
 * Generated from protobuf message <code>google.cloud.texttospeech.v1.ListVoicesRequest</code>
 */
class ListVoicesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional (but recommended)
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag. If
     * specified, the ListVoices call will only return voices that can be used to
     * synthesize this language_code. E.g. when specifying "en-NZ", you will get
     * supported "en-*" voices; when specifying "no", you will get supported
     * "no-*" (Norwegian) and "nb-*" (Norwegian Bokmal) voices; specifying "zh"
     * will also get supported "cmn-*" voices; specifying "zh-hk" will also get
     * supported "yue-*" voices.
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     */
    private $language_code = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Texttospeech\V1\CloudTts::initOnce();
        parent::__construct();
    }

    /**
     * Optional (but recommended)
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag. If
     * specified, the ListVoices call will only return voices that can be used to
     * synthesize this language_code. E.g. when specifying "en-NZ", you will get
     * supported "en-*" voices; when specifying "no", you will get supported
     * "no-*" (Norwegian) and "nb-*" (Norwegian Bokmal) voices; specifying "zh"
     * will also get supported "cmn-*" voices; specifying "zh-hk" will also get
     * supported "yue-*" voices.
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional (but recommended)
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag. If
     * specified, the ListVoices call will only return voices that can be used to
     * synthesize this language_code. E.g. when specifying "en-NZ", you will get
     * supported "en-*" voices; when specifying "no", you will get supported
     * "no-*" (Norwegian) and "nb-*" (Norwegian Bokmal) voices; specifying "zh"
     * will also get supported "cmn-*" voices; specifying "zh-hk" will also get
     * supported "yue-*" voices.
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}
