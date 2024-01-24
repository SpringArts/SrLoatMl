<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $data = [
            [
                "id" => 1,
                "kanji" => "甘い",
                "hiragana" => "あまい",
                "romaji" => "amai",
                "english" => "sweet",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 2,
                "kanji" => "甘やかす",
                "hiragana" => "あまやかす",
                "romaji" => "amayakasu",
                "english" => "to spoil",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 3,
                "kanji" => "甘口",
                "hiragana" => "あまくち",
                "romaji" => "amakuchi",
                "english" => "sweet taste",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 4,
                "kanji" => "お湯",
                "hiragana" => "おゆ",
                "romaji" => "oyu",
                "english" => "hot water",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 5,
                "kanji" => "湯気",
                "hiragana" => "ゆげ",
                "romaji" => "yuge",
                "english" => "steam",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 6,
                "kanji" => "沸く",
                "hiragana" => "わく",
                "romaji" => "waku",
                "english" => "to boil",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 7,
                "kanji" => "沸かす",
                "hiragana" => "わかす",
                "romaji" => "wakasu",
                "english" => "to boil",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 8,
                "kanji" => "金庫",
                "hiragana" => "きんこ",
                "romaji" => "kinko",
                "english" => "safe, vault",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 9,
                "kanji" => "車庫",
                "hiragana" => "しゃこ",
                "romaji" => "shako",
                "english" => "garage",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 10,
                "kanji" => "冷蔵庫",
                "hiragana" => "れいぞうこ",
                "romaji" => "reizouko",
                "english" => "refrigerator",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 11,
                "kanji" => "果物",
                "hiragana" => "くだもの",
                "romaji" => "kudamono",
                "english" => "fruit",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 12,
                "kanji" => "結果",
                "hiragana" => "けっか",
                "romaji" => "kekka",
                "english" => "result",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 13,
                "romaji" => "kouka",
                "kanji" => "効果",
                "hiragana" => "こうか",
                "english" => "effect",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 14,
                "romaji" => "kawa",
                "kanji" => "皮",
                "hiragana" => "かわ",
                "english" => "skin, peel",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 15,
                "romaji" => "kegawa",
                "kanji" => "毛皮",
                "hiragana" => "けがわ",
                "english" => "fur, skin",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 16,
                "romaji" => "hinniku",
                "kanji" => "皮肉",
                "hiragana" => "ひんにく",
                "english" => "irony",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 17,
                "romaji" => "kooru",
                "kanji" => "凍る",
                "hiragana" => "こおる",
                "english" => "to freeze",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 18,
                "romaji" => "kogoeru",
                "kanji" => "凍える",
                "hiragana" => "こごえる",
                "english" => "to freeze",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 19,
                "romaji" => "reitousyokuhin",
                "kanji" => "冷凍食品",
                "hiragana" => "れいとうしょくひん",
                "english" => "frozen food",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 20,
                "romaji" => "koori",
                "kanji" => "氷",
                "hiragana" => "こおり",
                "english" => "ice",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 21,
                "romaji" => "kanpaisuru",
                "kanji" => "乾杯する",
                "hiragana" => "かんぱいする",
                "english" => "to toast",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 22,
                "romaji" => "seigensuru",
                "kanji" => "制限する",
                "hiragana" => "せいげんする",
                "english" => "to restrict",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 23,
                "romaji" => "seido",
                "kanji" => "制度",
                "hiragana" => "せいど",
                "english" => "system",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 24,
                "romaji" => "seifuku",
                "kanji" => "制服",
                "hiragana" => "せいふく",
                "english" => "uniform",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 25,
                "romaji" => "seihin",
                "kanji" => "製品",
                "hiragana" => "せいひん",
                "english" => "product",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 26,
                "romaji" => "seizou",
                "kanji" => "製造",
                "hiragana" => "せいぞう",
                "english" => "manufacture",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 27,
                "romaji" => "nihonsei",
                "kanji" => "日本製",
                "hiragana" => "にほんせい",
                "english" => "made in japan",

                "language_chapter_id" => 4,
            ],
            [
                "id" => 28,
                "romaji" => "kisetsu",
                "kanji" => "季節",
                "hiragana" => "きせつ",
                "english" => "season",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 29,
                "romaji" => "shiki",
                "kanji" => "四季",
                "hiragana" => "しき",
                "english" => "four seasons",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 30,
                "romaji" => "uki",
                "kanji" => "雨季",
                "hiragana" => "うき",
                "english" => "rainy season",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 31,
                "romaji" => "setsuyakusuru",
                "kanji" => "節約する",
                "hiragana" => "せつやくする",
                "english" => "to economize",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 32,
                "romaji" => "setsudensuru",
                "kanji" => "節電する",
                "hiragana" => "せつでんする",
                "english" => "to save electricity",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 33,
                "romaji" => "chousetsusuru",
                "kanji" => "調節する",
                "hiragana" => "ちょうせつする",
                "english" => "to adjust",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 34,
                "romaji" => "suzushii",
                "kanji" => "涼しい",
                "hiragana" => "すずしい",
                "english" => "cool",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 35,
                "romaji" => "shimeru",
                "kanji" => "湿る",
                "hiragana" => "しめる",
                "english" => "to be wet",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 36,
                "romaji" => "shitsudo",
                "kanji" => "湿度",
                "hiragana" => "しつど",
                "english" => "humidity",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 37,
                "romaji" => "shitsuke",
                "kanji" => "湿気",
                "hiragana" => "しつけ",
                "english" => "moisture",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 38,
                "romaji" => "utsuru",
                "kanji" => "移る",
                "hiragana" => "うつる",
                "english" => "to move, to transfer",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 39,
                "romaji" => "utsusu",
                "kanji" => "移す",
                "hiragana" => "うつす",
                "english" => "to move",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 40,
                "romaji" => "idousuru",
                "kanji" => "移動する",
                "hiragana" => "いどうする",
                "english" => "to move",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 41,
                "romaji" => "itensuru",
                "kanji" => "移転する",
                "hiragana" => "いてんする",
                "english" => "to move, to relocate",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 42,
                "romaji" => "nuno",
                "kanji" => "布",
                "hiragana" => "ぬの",
                "english" => "cloth",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 43,
                "romaji" => "futon",
                "kanji" => "布団",
                "hiragana" => "ふとん",
                "english" => "futon",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 44,
                "romaji" => "moufu",
                "kanji" => "毛布",
                "hiragana" => "もうふ",
                "english" => "blanket",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 45,
                "romaji" => "saifu",
                "kanji" => "財布",
                "hiragana" => "さいふ",
                "english" => "wallet",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 46,
                "romaji" => "kuchibeni",
                "kanji" => "口紅",
                "hiragana" => "くちべに",
                "english" => "lipstick",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 47,
                "romaji" => "koucha",
                "kanji" => "紅茶",
                "hiragana" => "こうちゃ",
                "english" => "black tea",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 48,
                "romaji" => "kotoba",
                "kanji" => "言葉",
                "hiragana" => "ことば",
                "english" => "word",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 49,
                "romaji" => "kouyou",
                "kanji" => "紅葉",
                "hiragana" => "こうよう",
                "english" => "autumn leaves",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 50,
                "romaji" => "mizukara",
                "kanji" => "自ら",
                "hiragana" => "みずから",
                "english" => "oneself",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 51,
                "romaji" => "jishin",
                "kanji" => "自身",
                "hiragana" => "じしん",
                "english" => "self",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 52,
                "romaji" => "jishin",
                "kanji" => "自信",
                "hiragana" => "じしん",
                "english" => "confidence",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 53,
                "romaji" => "kakuji",
                "kanji" => "各自",
                "hiragana" => "かくじ",
                "english" => "each person",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 54,
                "romaji" => "shizen",
                "kanji" => "自然",
                "hiragana" => "しぜん",
                "english" => "nature",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 55,
                "romaji" => "hada",
                "kanji" => "肌",
                "hiragana" => "はだ",
                "english" => "skin",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 56,
                "romaji" => "sawaru",
                "kanji" => "触る",
                "hiragana" => "さわる",
                "english" => "to touch",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 57,
                "romaji" => "fureru",
                "kanji" => "触れる",
                "hiragana" => "ふれる",
                "english" => "to contact",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 58,
                "romaji" => "hadazawawari",
                "kanji" => "肌触り",
                "hiragana" => "はだざわり",
                "english" => "feel of the skin",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 59,
                "romaji" => "arai",
                "kanji" => "荒い",
                "hiragana" => "あらい",
                "english" => "rough",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 60,
                "romaji" => "areru",
                "kanji" => "荒れる",
                "hiragana" => "あれる",
                "english" => "to be stormy",

                "language_chapter_id" => 1,
            ],
            [
                "id" => 61,
                "romaji" => "irui",
                "kanji" => "衣類",
                "hiragana" => "いるい",
                "english" => "clothes",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 62,
                "romaji" => "ifuku",
                "kanji" => "衣服",
                "hiragana" => "いふく",
                "english" => "garments",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 63,
                "romaji" => "isyokujyuu",
                "kanji" => "衣食住",
                "hiragana" => "いしょくじゅう",
                "english" => "housing, food and clothing",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 64,
                "romaji" => "yukata",
                "kanji" => "浴衣",
                "hiragana" => "ゆかた",
                "english" => "summer kimono",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 65,
                "romaji" => "sentakusuru",
                "kanji" => "洗濯する",
                "hiragana" => "せんたくする",
                "english" => "to wash",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 66,
                "romaji" => "sentakuki",
                "kanji" => "洗濯機",
                "hiragana" => "せんたくき",
                "english" => "washing machine",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 67,
                "romaji" => "kawaku",
                "kanji" => "乾く",
                "hiragana" => "かわく",
                "english" => "to get dry",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 68,
                "romaji" => "kawakasu",
                "kanji" => "乾かす",
                "hiragana" => "かわかす",
                "english" => "to dry",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 69,
                "romaji" => "kandenchi",
                "kanji" => "乾電池",
                "hiragana" => "かんでんち",
                "english" => "dry cell battery",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 70,
                "romaji" => "kansousuru",
                "kanji" => "乾燥する",
                "hiragana" => "かんそうする",
                "english" => "to dry",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 71,
                "romaji" => "kansouki",
                "kanji" => "乾燥機",
                "hiragana" => "かんそうき",
                "english" => "dryer",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 72,
                "romaji" => "hosu",
                "kanji" => "干す",
                "hiragana" => "ほす",
                "english" => "to dry",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 73,
                "romaji" => "hari",
                "kanji" => "針",
                "hiragana" => "はり",
                "english" => "needle",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 74,
                "romaji" => "shinro",
                "kanji" => "針路",
                "hiragana" => "しんろ",
                "english" => "course",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 75,
                "romaji" => "houshin",
                "kanji" => "方針",
                "hiragana" => "ほうしん",
                "english" => "objective, plan",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 76,
                "romaji" => "ito",
                "kanji" => "糸",
                "hiragana" => "いと",
                "english" => "thread",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 77,
                "romaji" => "keito",
                "kanji" => "毛糸",
                "hiragana" => "けいと",
                "english" => "knitting wool",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 78,
                "romaji" => "boushi",
                "kanji" => "帽子",
                "hiragana" => "ぼうし",
                "english" => "hat",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 79,
                "romaji" => "kawa",
                "kanji" => "革",
                "hiragana" => "かわ",
                "english" => "leather",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 80,
                "romaji" => "kawagutsu",
                "kanji" => "革靴",
                "hiragana" => "かわぐつ",
                "english" => "leather shoes",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 81,
                "romaji" => "kutsu",
                "kanji" => "靴",
                "hiragana" => "くつ",
                "english" => "shoes",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 82,
                "romaji" => "nagagutsu",
                "kanji" => "長靴",
                "hiragana" => "ながぐつ",
                "english" => "boots",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 83,
                "romaji" => "migaku",
                "kanji" => "磨く",
                "hiragana" => "みがく",
                "english" => "to brush",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 84,
                "romaji" => "hamigaki",
                "kanji" => "歯磨き",
                "hiragana" => "はみがき",
                "english" => "toothbrushing",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 85,
                "romaji" => "men",
                "kanji" => "綿",
                "hiragana" => "めん",
                "english" => "cotton",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 86,
                "romaji" => "wata",
                "kanji" => "綿",
                "hiragana" => "わた",
                "english" => "cotton",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 87,
                "romaji" => "momen",
                "kanji" => "木綿",
                "hiragana" => "もめん",
                "english" => "cotton",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 88,
                "romaji" => "hitsuji",
                "kanji" => "羊",
                "hiragana" => "ひつじ",
                "english" => "sheep",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 89,
                "romaji" => "youmou",
                "kanji" => "羊毛",
                "hiragana" => "ようもう",
                "english" => "wool",

                "language_chapter_id" => 2,
            ],
            [
                "id" => 90,
                "romaji" => "ima",
                "kanji" => "居間",
                "hiragana" => "いま",
                "english" => "living room",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 91,
                "romaji" => "inemuri",
                "kanji" => "居眠り",
                "hiragana" => "いねむり",
                "english" => "dozing, napping",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 92,
                "romaji" => "izakaya",
                "kanji" => "居酒屋",
                "hiragana" => "いざかや",
                "english" => "Japanese style bar",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 93,
                "romaji" => "jyuukyo",
                "kanji" => "住居",
                "hiragana" => "じゅうきょ",
                "english" => "dwelling, house",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 94,
                "romaji" => "nyuukyosuru",
                "kanji" => "入居する",
                "hiragana" => "にゅうきょする",
                "english" => "to move in",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 95,
                "romaji" => "kougai",
                "kanji" => "郊外",
                "hiragana" => "こうがい",
                "english" => "suburbs",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 96,
                "romaji" => "kinkou",
                "kanji" => "近郊",
                "hiragana" => "きんこう",
                "english" => "suburbs",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 97,
                "romaji" => "niwa",
                "kanji" => "庭",
                "hiragana" => "にわ",
                "english" => "garden",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 98,
                "romaji" => "katei",
                "kanji" => "家庭",
                "hiragana" => "かてい",
                "english" => "home, family",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 99,
                "romaji" => "koutei",
                "kanji" => "校庭",
                "hiragana" => "こうてい",
                "english" => "schoolyard",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 100,
                "romaji" => "chiku",
                "kanji" => "築",
                "hiragana" => "ちく",
                "english" => "to build",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 101,
                "romaji" => "kenchiku",
                "kanji" => "建築",
                "hiragana" => "けんちく",
                "english" => "construction, architecture",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 102,
                "romaji" => "kenchikuka",
                "kanji" => "建築家",
                "hiragana" => "けんちくか",
                "english" => "architect",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 103,
                "romaji" => "shinchiku",
                "kanji" => "新築",
                "hiragana" => "しんちく",
                "english" => "new building",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 104,
                "romaji" => "kabe",
                "kanji" => "壁",
                "hiragana" => "かべ",
                "english" => "wall",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 105,
                "romaji" => "tokoya",
                "kanji" => "床屋",
                "hiragana" => "とこや",
                "english" => "barber",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 106,
                "romaji" => "yuka",
                "kanji" => "床",
                "hiragana" => "ゆか",
                "english" => "floor",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 107,
                "romaji" => "kisyousuru",
                "kanji" => "起床する",
                "hiragana" => "きしょうする",
                "english" => "to get up",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 108,
                "romaji" => "nebousuru",
                "kanji" => "寝坊する",
                "hiragana" => "ねぼうする",
                "english" => "to oversleep",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 109,
                "romaji" => "shinshitsu",
                "kanji" => "寝室",
                "hiragana" => "しんしつ",
                "english" => "bedroom",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 110,
                "romaji" => "to",
                "kanji" => "戸",
                "hiragana" => "と",
                "english" => "door",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 111,
                "romaji" => "tatamu",
                "kanji" => "畳む",
                "hiragana" => "たたむ",
                "english" => "to fold",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 112,
                "romaji" => "tatami",
                "kanji" => "畳",
                "hiragana" => "たたみ",
                "english" => "tatami mat",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 113,
                "romaji" => "hashira",
                "kanji" => "柱",
                "hiragana" => "はしら",
                "english" => "pillar",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 114,
                "romaji" => "dencyuu",
                "kanji" => "電柱",
                "hiragana" => "でんちゅう",
                "english" => "telephone pole",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 115,
                "romaji" => "washitsu",
                "kanji" => "和室",
                "hiragana" => "わしつ",
                "english" => "Japanese style room",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 116,
                "romaji" => "wasyoku",
                "kanji" => "和食",
                "hiragana" => "わしょく",
                "english" => "Japanese style meal",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 117,
                "romaji" => "heiwa",
                "kanji" => "平和",
                "hiragana" => "へいわ",
                "english" => "peace",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 118,
                "romaji" => "cyouwasuru",
                "kanji" => "調和する",
                "hiragana" => "ちょうわする",
                "english" => "to be in harmony",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 119,
                "romaji" => "semai",
                "kanji" => "狭い",
                "hiragana" => "せまい",
                "english" => "narrow",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 120,
                "romaji" => "zairyou",
                "kanji" => "材料",
                "hiragana" => "ざいりょう",
                "english" => "ingredients",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 121,
                "romaji" => "mokuzai",
                "kanji" => "木材",
                "hiragana" => "もくざい",
                "english" => "lumber, timber",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 122,
                "romaji" => "sozai",
                "kanji" => "素材",
                "hiragana" => "そざい",
                "english" => "raw materials",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 123,
                "romaji" => "eiyou",
                "kanji" => "栄養",
                "hiragana" => "えいよう",
                "english" => "nutrition",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 124,
                "romaji" => "youbun",
                "kanji" => "養分",
                "hiragana" => "ようぶん",
                "english" => "nutrients",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 125,
                "romaji" => "kyuuuousuru",
                "kanji" => "休養する",
                "hiragana" => "きゅうおうする",
                "english" => "to rest",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 126,
                "romaji" => "kouyou",
                "kanji" => "教養",
                "hiragana" => "きょうよう",
                "english" => "culture, education",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 127,
                "romaji" => "kaori",
                "kanji" => "香り",
                "hiragana" => "かおり",
                "english" => "smell",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 128,
                "romaji" => "kousui",
                "kanji" => "香水",
                "hiragana" => "こうすい",
                "english" => "perfume",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 129,
                "romaji" => "koushinryou",
                "kanji" => "香辛料",
                "hiragana" => "こうしんりょう",
                "english" => "spices",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 130,
                "romaji" => "karai",
                "kanji" => "辛い",
                "hiragana" => "からい",
                "english" => "hot, spicy",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 131,
                "romaji" => "tsurai",
                "kanji" => "辛い",
                "hiragana" => "つらい",
                "english" => "painful, bitter",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 132,
                "romaji" => "karakuchi",
                "kanji" => "辛口",
                "hiragana" => "からくち",
                "english" => "dry (taste)",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 133,
                "romaji" => "shiokarai",
                "kanji" => "塩辛い",
                "hiragana" => "しおからい",
                "english" => "salty",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 134,
                "romaji" => "aona",
                "kanji" => "青菜",
                "hiragana" => "あおな",
                "english" => "green vegetables",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 135,
                "romaji" => "yasai",
                "kanji" => "野菜",
                "hiragana" => "やさい",
                "english" => "vegetables",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 136,
                "romaji" => "shio",
                "kanji" => "塩",
                "hiragana" => "しお",
                "english" => "salt",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 137,
                "romaji" => "enbun",
                "kanji" => "塩分",
                "hiragana" => "えんぶん",
                "english" => "salt content",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 138,
                "romaji" => "syokuen",
                "kanji" => "食塩",
                "hiragana" => "しょくえん",
                "english" => "table salt",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 139,
                "romaji" => "bentou",
                "kanji" => "弁当",
                "hiragana" => "べんとう",
                "english" => "box lunch",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 140,
                "romaji" => "tsumaru",
                "kanji" => "詰まる",
                "hiragana" => "つまる",
                "english" => "to be packed",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 141,
                "romaji" => "tsumeru",
                "kanji" => "詰める",
                "hiragana" => "つめる",
                "english" => "to pack",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 142,
                "romaji" => "kandzume",
                "kanji" => "缶詰",
                "hiragana" => "かんづめ",
                "english" => "canned food",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 143,
                "romaji" => "hakodzume",
                "kanji" => "箱詰め",
                "hiragana" => "はこづめ",
                "english" => "packing in a box",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 144,
                "romaji" => "tamago",
                "kanji" => "卵",
                "hiragana" => "たまご",
                "english" => "egg",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 145,
                "romaji" => "ranou",
                "kanji" => "卵黄",
                "hiragana" => "らんおう",
                "english" => "egg yolk",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 146,
                "romaji" => "komugi",
                "kanji" => "小麦",
                "hiragana" => "こむぎ",
                "english" => "wheat",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 147,
                "romaji" => "komugiko",
                "kanji" => "小麦粉",
                "hiragana" => "こむぎこ",
                "english" => "wheat flour",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 148,
                "romaji" => "kona",
                "kanji" => "粉",
                "hiragana" => "こな",
                "english" => "flour",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 149,
                "romaji" => "tsubu",
                "kanji" => "粒",
                "hiragana" => "つぶ",
                "english" => "grain",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 150,
                "romaji" => "suitou",
                "kanji" => "水筒",
                "hiragana" => "すいとう",
                "english" => "canteen, flask",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 151,
                "romaji" => "futon",
                "kanji" => "布団",
                "hiragana" => "ふとん",
                "english" => "futon",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 152,
                "romaji" => "douitsu",
                "kanji" => "同一",
                "hiragana" => "どういつ",
                "english" => "identity, sameness",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 153,
                "romaji" => "douryou",
                "kanji" => "同僚",
                "hiragana" => "どうりょう",
                "english" => "colleague",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 154,
                "romaji" => "douyou",
                "kanji" => "同様",
                "hiragana" => "どうよう",
                "english" => "same, identical",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 155,
                "romaji" => "kyoudou",
                "kanji" => "共同",
                "hiragana" => "きょうどう",
                "english" => "cooperation, collaboration",

                "language_chapter_id" => 5,
            ],
            [
                "id" => 156,
                "romaji" => "rokujyou",
                "kanji" => "6畳",
                "hiragana" => "ろくじょう",
                "english" => "6 tatami mats",

                "language_chapter_id" => 3,
            ],
            [
                "id" => 157,
                "romaji" => "geijyutsu",
                "kanji" => "芸術",
                "hiragana" => "げいじゅつ",
                "english" => "the art",
                "language_chapter_id" => 6
            ],
            [
                "id" => 158,
                "romaji" => "gijyutsu",
                "kanji" => "技術",
                "hiragana" => "ぎじゅつ",
                "english" => "techique, technology",
                "language_chapter_id" => 6
            ],
            [
                "id" => 159,
                "romaji" => "mezurashi",
                "kanji" => "珍しい",
                "hiragana" => "めずらしい",
                "english" => "unusual",
                "language_chapter_id" => 6
            ],
            [
                "id" => 160,
                "romaji" => "kigu",
                "kanji" => "器具",
                "hiragana" => "きぐ",
                "english" => "implement",
                "language_chapter_id" => 6
            ],
            [
                "id" => 161,
                "romaji" => "gakki",
                "kanji" => "楽器",
                "hiragana" => "がっき",
                "english" => "instrument",
                "language_chapter_id" => 6
            ],
            [
                "id" => 162,
                "romaji" => "shokki",
                "kanji" => "食器",
                "hiragana" => "しょっき",
                "english" => "tableware",
                "language_chapter_id" => 6
            ],
            [
                "id" => 163,
                "romaji" => "youki",
                "kanji" => "容器",
                "hiragana" => "ようき",
                "english" => "receptacle",
                "language_chapter_id" => 6
            ],
            [
                "id" => 164,
                "romaji" => "engisuru",
                "kanji" => "演技する",
                "hiragana" => "えんぎする",
                "english" => "to dramatize",
                "language_chapter_id" => 6
            ],
            [
                "id" => 165,
                "romaji" => "ensousuru",
                "kanji" => "演奏する",
                "hiragana" => "えんそうする",
                "english" => "to perform, to play",
                "language_chapter_id" => 6
            ],
            [
                "id" => 166,
                "romaji" => "engeki",
                "kanji" => "演劇",
                "hiragana" => "えんげき",
                "english" => "dramatic performance",
                "language_chapter_id" => 6
            ],
            [
                "id" => 167,
                "romaji" => "gekijyou",
                "kanji" => "劇場",
                "hiragana" => "げきじょう",
                "english" => "theatre",
                "language_chapter_id" => 6
            ],
            [
                "id" => 168,
                "romaji" => "geki",
                "kanji" => "劇",
                "hiragana" => "げき",
                "english" => "drama",
                "language_chapter_id" => 6
            ],
            [
                "id" => 169,
                "romaji" => "odoru",
                "kanji" => "踊る",
                "hiragana" => "おどる",
                "english" => "dance",
                "language_chapter_id" => 6
            ],
            [
                "id" => 170,
                "romaji" => "mimau",
                "kanji" => "見舞う",
                "hiragana" => "みまう",
                "english" => "to visit",
                "language_chapter_id" => 6
            ],
            [
                "id" => 171,
                "romaji" => "omimai",
                "kanji" => "お見舞い",
                "hiragana" => "おみまい",
                "english" => "to visit inquiring about someone's health",
                "language_chapter_id" => 6
            ],
            [
                "id" => 172,
                "romaji" => "butai",
                "kanji" => "舞台",
                "hiragana" => "ぶたい",
                "english" => "stage performance",
                "language_chapter_id" => 6
            ],
            [
                "id" => 173,
                "romaji" => "touitsu",
                "kanji" => "統一",
                "hiragana" => "とういつ",
                "english" => "unity",
                "language_chapter_id" => 6
            ],
            [
                "id" => 174,
                "romaji" => "toukei",
                "kanji" => "統計",
                "hiragana" => "とうけい",
                "english" => "statistics",
                "language_chapter_id" => 6
            ],
            [
                "id" => 175,
                "romaji" => "dentou",
                "kanji" => "伝統",
                "hiragana" => "でんとう",
                "english" => "tradition",
                "language_chapter_id" => 6
            ],
            [
                "id" => 176,
                "romaji" => "dentotekina",
                "kanji" => "伝統的な",
                "hiragana" => "でんとうてきな",
                "english" => "traditionally",
                "language_chapter_id" => 6
            ],
            [
                "id" => 177,
                "romaji" => "daitouryou",
                "kanji" => "大都利用",
                "hiragana" => "だいとうりょう",
                "english" => "president",
                "language_chapter_id" => 6
            ],
            [
                "id" => 178,
                "romaji" => "rekishi",
                "kanji" => "歴史",
                "hiragana" => "れきし",
                "english" => "history",
                "language_chapter_id" => 6
            ],
            [
                "id" => 179,
                "romaji" => "nihonshi",
                "kanji" => "日本史",
                "hiragana" => "にほんし",
                "english" => "Japanese's history",
                "language_chapter_id" => 6
            ],
            [
                "id" => 180,
                "romaji" => "nobiru",
                "kanji" => "伸びる",
                "hiragana" => "のびる",
                "english" => "to stretch",
                "language_chapter_id" => 6
            ],
            [
                "id" => 181,
                "romaji" => "nobasu",
                "kanji" => "延ばす",
                "hiragana" => "のばす",
                "english" => "to elongate",
                "language_chapter_id" => 6
            ],
            [
                "id" => 182,
                "romaji" => "enkisuru",
                "kanji" => "延期する",
                "hiragana" => "えんきする",
                "english" => "to defer",
                "language_chapter_id" => 6
            ],
            [
                "id" => 183,
                "romaji" => "enchousuru",
                "kanji" => "延長する",
                "hiragana" => "えんちょうする",
                "english" => "to prolong",
                "language_chapter_id" => 6
            ],
            [
                "id" => 184,
                "romaji" => "issho",
                "kanji" => "一緒",
                "hiragana" => "いっしょ",
                "english" => "together",
                "language_chapter_id" => 6
            ],
            [
                "id" => 185,
                "romaji" => "nendo",
                "kanji" => "年度",
                "hiragana" => "ねんど",
                "english" => "fiscal year, financial year",
                "language_chapter_id" => 6
            ],
            [
                "id" => 186,
                "romaji" => "kakudo",
                "kanji" => "角度",
                "hiragana" => "かくど",
                "english" => "angle",
                "language_chapter_id" => 6
            ],
            [
                "id" => 187,
                "romaji" => "teido",
                "kanji" => "程度",
                "hiragana" => "ていど",
                "english" => "extent",
                "language_chapter_id" => 6
            ],
            [
                "id" => 188,
                "romaji" => "shitakusuru",
                "kanji" => "支度する",
                "hiragana" => "したくする",
                "english" => "to prepare",
                "language_chapter_id" => 6
            ],
            [
                "id" => 189,
                "romaji" => "tenjisuru",
                "kanji" => "展示する",
                "hiragana" => "てんじする",
                "english" => "to display",
                "language_chapter_id" => 7
            ],
            [
                "id" => 190,
                "romaji" => "tenkai",
                "kanji" => "展開",
                "hiragana" => "てんかい",
                "english" => "to develop",
                "language_chapter_id" => 7
            ],
            [
                "id" => 191,
                "romaji" => "hatten",
                "kanji" => "発展",
                "hiragana" => "はってん",
                "english" => "to advance",
                "language_chapter_id" => 7
            ],
            [
                "id" => 192,
                "romaji" => "shimesu",
                "kanji" => "示す",
                "hiragana" => "しめす",
                "english" => "to show",
                "language_chapter_id" => 7
            ],
            [
                "id" => 193,
                "romaji" => "shijisuru",
                "kanji" => "指示すると",
                "hiragana" => "しじする",
                "english" => "to indicate",
                "language_chapter_id" => 7
            ],
            [
                "id" => 194,
                "romaji" => "hyoujisuru",
                "kanji" => "表示する",
                "hiragana" => "ひょじする",
                "english" => "to display",
                "language_chapter_id" => 7
            ],
            [
                "id" => 195,
                "romaji" => "mawari",
                "kanji" => "周り",
                "hiragana" => "まわり",
                "english" => "vicinity",
                "language_chapter_id" => 7
            ],
            [
                "id" => 196,
                "romaji" => "shuuhen",
                "kanji" => "周辺",
                "hiragana" => "しゅうへん",
                "english" => "surroundings",
                "language_chapter_id" => 7
            ],
            [
                "id" => 197,
                "romaji" => "shuui",
                "kanji" => "周囲",
                "hiragana" => "しゅうい",
                "english" => "circumference",
                "language_chapter_id" => 7
            ],
            [
                "id" => 198,
                "romaji" => "majiru",
                "kanji" => "混じる",
                "hiragana" => "まじる",
                "english" => "to be mixed",
                "language_chapter_id" => 7
            ],
            [
                "id" => 199,
                "romaji" => "mazaru",
                "kanji" => "混ざる",
                "hiragana" => "まざる",
                "english" => "to be mixed",
                "language_chapter_id" => 7
            ],
            [
                "id" => 200,
                "romaji" => "mazeru",
                "kanji" => "混ぜる",
                "hiragana" => "まぜる",
                "english" => "to mix",
                "language_chapter_id" => 7
            ],
            [
                "id" => 201,
                "romaji" => "konzatsusuru",
                "kanji" => "混雑する",
                "hiragana" => "こんざつする",
                "english" => "to be crowded",
                "language_chapter_id" => 7
            ],
            [
                "id" => 202,
                "romaji" => "kongousuru",
                "kanji" => "混合する",
                "hiragana" => "こんごうする",
                "english" => "to blend",
                "language_chapter_id" => 7
            ],
            [
                "id" => 203,
                "romaji" => "motomeru",
                "kanji" => "求める",
                "hiragana" => "もとめる",
                "english" => "to seek",
                "language_chapter_id" => 7
            ],
            [
                "id" => 204,
                "romaji" => "youkyuusuru",
                "kanji" => "要求する",
                "hiragana" => "ようきゅうする",
                "english" => "to request",
                "language_chapter_id" => 7
            ],
            [
                "id" => 205,
                "romaji" => "saini",
                "kanji" => "際に",
                "hiragana" => "さいに",
                "english" => "upon",
                "language_chapter_id" => 7
            ],
            [
                "id" => 206,
                "romaji" => "kokusaiteki",
                "kanji" => "国際的な",
                "hiragana" => "こくさいてきな",
                "english" => "international",
                "language_chapter_id" => 7
            ],
            [
                "id" => 207,
                "romaji" => "kousaisuru",
                "kanji" => "交際する",
                "hiragana" => "こうさいする",
                "english" => "associate with",
                "language_chapter_id" => 7
            ],
            [
                "id" => 208,
                "romaji" => "ranbou",
                "kanji" => "乱暴な",
                "hiragana" => "らんぼうな",
                "english" => "violet",
                "language_chapter_id" => 7
            ],
            [
                "id" => 209,
                "romaji" => "jyun",
                "kanji" => "順",
                "hiragana" => "じゅん",
                "english" => "order",
                "language_chapter_id" => 7
            ],
            [
                "id" => 210,
                "romaji" => "jyunban",
                "kanji" => "順番",
                "hiragana" => "じゅんばん",
                "english" => "order",
                "language_chapter_id" => 7
            ],
            [
                "id" => 211,
                "romaji" => "ranbousuru",
                "kanji" => "乱暴する",
                "hiragana" => "らんぼうする",
                "english" => "to be violet",
                "language_chapter_id" => 7
            ],
            [
                "id" => 212,
                "romaji" => "konransuru",
                "kanji" => "混乱する",
                "hiragana" => "こんらんする",
                "english" => "to be confused",
                "language_chapter_id" => 7
            ],
            [
                "id" => 213,
                "romaji" => "jyunjyo",
                "kanji" => "順序",
                "hiragana" => "じゅんじょう",
                "english" => "sequence",
                "language_chapter_id" => 7
            ],
            [
                "id" => 214,
                "romaji" => "jyunchou",
                "kanji" => "順調",
                "hiragana" => "じゅんちょう",
                "english" => "favorable",
                "language_chapter_id" => 7
            ],
            [
                "id" => 215,
                "romaji" => "saiketsuna",
                "kanji" => "清潔な",
                "hiragana" => "せいけつな",
                "english" => "hygenic",
                "language_chapter_id" => 7
            ],
            [
                "id" => 216,
                "romaji" => "seishosuru",
                "kanji" => "清書する",
                "hiragana" => "せいしょする",
                "english" => "to make clean copy",
                "language_chapter_id" => 7
            ],
            [
                "id" => 217,
                "romaji" => "sumi",
                "kanji" => "隅",
                "hiragana" => "すみ",
                "english" => "cornor",
                "language_chapter_id" => 7
            ],
            [
                "id" => 218,
                "romaji" => "sumizumi",
                "kanji" => "隅々",
                "hiragana" => "すみずみ",
                "english" => "ins nd out",
                "language_chapter_id" => 7
            ],
            [
                "id" => 219,
                "romaji" => "kouzoubiru",
                "kanji" => "高層ビル",
                "hiragana" => "こうそうビル",
                "english" => "skyscraper",
                "language_chapter_id" => 7
            ],
            [
                "id" => 220,
                "romaji" => "okuru",
                "kanji" => "贈る",
                "hiragana" => "おくる",
                "english" => "to confer",
                "language_chapter_id" => 7
            ],
            [
                "id" => 221,
                "romaji" => "okurimono",
                "kanji" => "贈り物",
                "hiragana" => "おくりもの",
                "english" => "gift",
                "language_chapter_id" => 7
            ],
            [
                "id" => 222,
                "romaji" => "odori",
                "kanji" => "踊り",
                "hiragana" => "おどり",
                "english" => "to dance",
                "language_chapter_id" => 6
            ],
        ];
        DB::table('japanese_words')->insert($data);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
