<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/campaign_experiment_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Services;

class CampaignExperimentService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\CampaignExperiment::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acd1b0a42676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f63616d706169676e5f6578706572696d656e745f7365" .
            "72766963652e70726f746f1220676f6f676c652e6164732e676f6f676c65" .
            "6164732e76312e73657276696365731a1c676f6f676c652f6170692f616e" .
            "6e6f746174696f6e732e70726f746f1a23676f6f676c652f6c6f6e677275" .
            "6e6e696e672f6f7065726174696f6e732e70726f746f1a1b676f6f676c65" .
            "2f70726f746f6275662f656d7074792e70726f746f1a20676f6f676c652f" .
            "70726f746f6275662f6669656c645f6d61736b2e70726f746f1a1e676f6f" .
            "676c652f70726f746f6275662f77726170706572732e70726f746f1a1767" .
            "6f6f676c652f7270632f7374617475732e70726f746f22350a1c47657443" .
            "616d706169676e4578706572696d656e745265717565737412150a0d7265" .
            "736f757263655f6e616d6518012001280922ba010a204d75746174654361" .
            "6d706169676e4578706572696d656e74735265717565737412130a0b6375" .
            "73746f6d65725f696418012001280912510a0a6f7065726174696f6e7318" .
            "022003280b323d2e676f6f676c652e6164732e676f6f676c656164732e76" .
            "312e73657276696365732e43616d706169676e4578706572696d656e744f" .
            "7065726174696f6e12170a0f7061727469616c5f6661696c757265180320" .
            "01280812150a0d76616c69646174655f6f6e6c7918042001280822b6010a" .
            "1b43616d706169676e4578706572696d656e744f7065726174696f6e122f" .
            "0a0b7570646174655f6d61736b18032001280b321a2e676f6f676c652e70" .
            "726f746f6275662e4669656c644d61736b12470a06757064617465180120" .
            "01280b32352e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "7265736f75726365732e43616d706169676e4578706572696d656e744800" .
            "12100a0672656d6f76651802200128094800420b0a096f7065726174696f" .
            "6e22a9010a214d757461746543616d706169676e4578706572696d656e74" .
            "73526573706f6e736512310a157061727469616c5f6661696c7572655f65" .
            "72726f7218032001280b32122e676f6f676c652e7270632e537461747573" .
            "12510a07726573756c747318022003280b32402e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e73657276696365732e4d757461746543" .
            "616d706169676e4578706572696d656e74526573756c7422370a1e4d7574" .
            "61746543616d706169676e4578706572696d656e74526573756c7412150a" .
            "0d7265736f757263655f6e616d6518012001280922a1010a1f4372656174" .
            "6543616d706169676e4578706572696d656e745265717565737412130a0b" .
            "637573746f6d65725f696418012001280912520a1363616d706169676e5f" .
            "6578706572696d656e7418022001280b32352e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e7265736f75726365732e43616d70616967" .
            "6e4578706572696d656e7412150a0d76616c69646174655f6f6e6c791803" .
            "20012808223f0a2043726561746543616d706169676e4578706572696d65" .
            "6e744d65746164617461121b0a1363616d706169676e5f6578706572696d" .
            "656e7418012001280922590a21477261647561746543616d706169676e45" .
            "78706572696d656e7452657175657374121b0a1363616d706169676e5f65" .
            "78706572696d656e7418012001280912170a0f63616d706169676e5f6275" .
            "6467657418022001280922400a22477261647561746543616d706169676e" .
            "4578706572696d656e74526573706f6e7365121a0a126772616475617465" .
            "645f63616d706169676e180120012809223f0a2050726f6d6f746543616d" .
            "706169676e4578706572696d656e7452657175657374121b0a1363616d70" .
            "6169676e5f6578706572696d656e74180120012809223b0a1c456e644361" .
            "6d706169676e4578706572696d656e7452657175657374121b0a1363616d" .
            "706169676e5f6578706572696d656e7418012001280922680a284c697374" .
            "43616d706169676e4578706572696d656e744173796e634572726f727352" .
            "65717565737412150a0d7265736f757263655f6e616d6518012001280912" .
            "120a0a706167655f746f6b656e18022001280912110a09706167655f7369" .
            "7a6518032001280522680a294c69737443616d706169676e457870657269" .
            "6d656e744173796e634572726f7273526573706f6e736512220a06657272" .
            "6f727318012003280b32122e676f6f676c652e7270632e53746174757312" .
            "170a0f6e6578745f706167655f746f6b656e18022001280932b30c0a1943" .
            "616d706169676e4578706572696d656e745365727669636512cd010a1547" .
            "657443616d706169676e4578706572696d656e74123e2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76312e73657276696365732e47657443" .
            "616d706169676e4578706572696d656e74526571756573741a352e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e7265736f7572636573" .
            "2e43616d706169676e4578706572696d656e74223d82d3e493023712352f" .
            "76312f7b7265736f757263655f6e616d653d637573746f6d6572732f2a2f" .
            "63616d706169676e4578706572696d656e74732f2a7d12c1010a18437265" .
            "61746543616d706169676e4578706572696d656e7412412e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e73657276696365732e437265" .
            "61746543616d706169676e4578706572696d656e74526571756573741a1d" .
            "2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e22" .
            "4382d3e493023d22382f76312f637573746f6d6572732f7b637573746f6d" .
            "65725f69643d2a7d2f63616d706169676e4578706572696d656e74733a63" .
            "72656174653a012a12e9010a194d757461746543616d706169676e457870" .
            "6572696d656e747312422e676f6f676c652e6164732e676f6f676c656164" .
            "732e76312e73657276696365732e4d757461746543616d706169676e4578" .
            "706572696d656e7473526571756573741a432e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e73657276696365732e4d75746174654361" .
            "6d706169676e4578706572696d656e7473526573706f6e7365224382d3e4" .
            "93023d22382f76312f637573746f6d6572732f7b637573746f6d65725f69" .
            "643d2a7d2f63616d706169676e4578706572696d656e74733a6d75746174" .
            "653a012a12f8010a1a477261647561746543616d706169676e4578706572" .
            "696d656e7412432e676f6f676c652e6164732e676f6f676c656164732e76" .
            "312e73657276696365732e477261647561746543616d706169676e457870" .
            "6572696d656e74526571756573741a442e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e73657276696365732e47726164756174654361" .
            "6d706169676e4578706572696d656e74526573706f6e7365224f82d3e493" .
            "024922442f76312f7b63616d706169676e5f6578706572696d656e743d63" .
            "7573746f6d6572732f2a2f63616d706169676e4578706572696d656e7473" .
            "2f2a7d3a67726164756174653a012a12ce010a1950726f6d6f746543616d" .
            "706169676e4578706572696d656e7412422e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76312e73657276696365732e50726f6d6f74654361" .
            "6d706169676e4578706572696d656e74526571756573741a1d2e676f6f67" .
            "6c652e6c6f6e6772756e6e696e672e4f7065726174696f6e224e82d3e493" .
            "024822432f76312f7b63616d706169676e5f6578706572696d656e743d63" .
            "7573746f6d6572732f2a2f63616d706169676e4578706572696d656e7473" .
            "2f2a7d3a70726f6d6f74653a012a12bb010a15456e6443616d706169676e" .
            "4578706572696d656e74123e2e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76312e73657276696365732e456e6443616d706169676e457870" .
            "6572696d656e74526571756573741a162e676f6f676c652e70726f746f62" .
            "75662e456d707479224a82d3e4930244223f2f76312f7b63616d70616967" .
            "6e5f6578706572696d656e743d637573746f6d6572732f2a2f63616d7061" .
            "69676e4578706572696d656e74732f2a7d3a656e643a012a128b020a214c" .
            "69737443616d706169676e4578706572696d656e744173796e634572726f" .
            "7273124a2e676f6f676c652e6164732e676f6f676c656164732e76312e73" .
            "657276696365732e4c69737443616d706169676e4578706572696d656e74" .
            "4173796e634572726f7273526571756573741a4b2e676f6f676c652e6164" .
            "732e676f6f676c656164732e76312e73657276696365732e4c6973744361" .
            "6d706169676e4578706572696d656e744173796e634572726f7273526573" .
            "706f6e7365224d82d3e493024712452f76312f7b7265736f757263655f6e" .
            "616d653d637573746f6d6572732f2a2f63616d706169676e457870657269" .
            "6d656e74732f2a7d3a6c6973744173796e634572726f72734285020a2463" .
            "6f6d2e676f6f676c652e6164732e676f6f676c656164732e76312e736572" .
            "7669636573421e43616d706169676e4578706572696d656e745365727669" .
            "636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67" .
            "656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c6561" .
            "64732f76312f73657276696365733b7365727669636573a20203474141aa" .
            "0220476f6f676c652e4164732e476f6f676c654164732e56312e53657276" .
            "69636573ca0220476f6f676c655c4164735c476f6f676c654164735c5631" .
            "5c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c" .
            "654164733a3a56313a3a5365727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
