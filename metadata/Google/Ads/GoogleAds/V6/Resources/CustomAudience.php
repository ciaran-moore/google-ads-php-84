<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/custom_audience.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Resources;

class CustomAudience
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac0030a3a676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f637573746f6d5f61756469656e63655f7374617475732e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76362e656e756d73226a0a18437573746f6d41756469656e6365537461747573456e756d224e0a14437573746f6d41756469656e6365537461747573120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a07454e41424c45441002120b0a0752454d4f564544100342ee010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d734219437573746f6d41756469656e636553746174757350726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56362e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56365c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a456e756d73620670726f746f330aeb030a3f676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f637573746f6d5f61756469656e63655f6d656d6265725f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76362e656e756d73228b010a1c437573746f6d41756469656e63654d656d62657254797065456e756d226b0a18437573746f6d41756469656e63654d656d62657254797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a074b4559574f5244100212070a0355524c100312120a0e504c4143455f43415445474f5259100412070a03415050100542f2010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d73421d437573746f6d41756469656e63654d656d6265725479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56362e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56365c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a456e756d73620670726f746f330ad8030a38676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f637573746f6d5f61756469656e63655f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732285010a16437573746f6d41756469656e636554797065456e756d226b0a12437573746f6d41756469656e636554797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112080a044155544f1002120c0a08494e544552455354100312130a0f50555243484153455f494e54454e541004120a0a06534541524348100542ec010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d734217437573746f6d41756469656e63655479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56362e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56365c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a456e756d73620670726f746f330a8f0a0a37676f6f676c652f6164732f676f6f676c656164732f76362f7265736f75726365732f637573746f6d5f61756469656e63652e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365731a3a676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f637573746f6d5f61756469656e63655f7374617475732e70726f746f1a38676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f637573746f6d5f61756469656e63655f747970652e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22fd030a0e437573746f6d41756469656e636512460a0d7265736f757263655f6e616d65180120012809422fe04105fa41290a27676f6f676c656164732e676f6f676c65617069732e636f6d2f437573746f6d41756469656e6365120f0a0269641802200128034203e0410312610a0673746174757318032001280e324c2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e437573746f6d41756469656e6365537461747573456e756d2e437573746f6d41756469656e63655374617475734203e04103120c0a046e616d6518042001280912560a047479706518052001280e32482e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e437573746f6d41756469656e636554797065456e756d2e437573746f6d41756469656e63655479706512130a0b6465736372697074696f6e18062001280912480a076d656d6265727318072003280b32372e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365732e437573746f6d41756469656e63654d656d6265723a6aea41670a27676f6f676c656164732e676f6f676c65617069732e636f6d2f437573746f6d41756469656e6365123c637573746f6d6572732f7b637573746f6d65725f69647d2f637573746f6d41756469656e6365732f7b637573746f6d5f61756469656e63655f69647d22d5010a14437573746f6d41756469656e63654d656d62657212690a0b6d656d6265725f7479706518012001280e32542e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e437573746f6d41756469656e63654d656d62657254797065456e756d2e437573746f6d41756469656e63654d656d6265725479706512110a076b6579776f72641802200128094800120d0a0375726c180320012809480012180a0e706c6163655f63617465676f72791804200128034800120d0a03617070180520012809480042070a0576616c75654280020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365734213437573746f6d41756469656e636550726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56362e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56365c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a5265736f7572636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}
