<?php

/*
 * This file is part of yuetau/swear-filter.
 *
 * Copyright (c) 2020 YuetAu.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace YuetAu\SwearFilter;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;
return [
    (new Extend\Formatter)
        ->configure(function (Configurator $configurator) {
          $configurator->Censor->add("小你老母", "Hi, Auntie");
          $configurator->Censor->add("吊你老母", "Hi, Auntie");
          $configurator->Censor->add("小你老味", "廣西燒味");
          $configurator->Censor->add("你老味", "今天");
          $configurator->Censor->add("含能", "今天");
          $configurator->Censor->add("臭西", "今天");
          $configurator->Censor->add("凸你", "今天");
          $configurator->Censor->add("傻西", "今天");
          $configurator->Censor->add("臭化西", "今天");
          $configurator->Censor->add("九兩菜", "Vegetable");
          $configurator->Censor->add("fucking", "支持");
          $configurator->Censor->add("fxxk", "Great");
          $configurator->Censor->add("fuxk", "支持");
          $configurator->Censor->add("fuck", "great");
          $configurator->Censor->add("fcxk", "支持");
          $configurator->Censor->add("撚屌鳩", "支持");
          $configurator->Censor->add("On9", "傻的嗎");
          $configurator->Censor->add("戇尻尻", "傻的嗎");
          $configurator->Censor->add("戇尻", "傻的嗎");
          $configurator->Censor->add("戇-尻", "傻的嗎");
          $configurator->Censor->add("on9", "傻的嗎");
          $configurator->Censor->add("on.9", "傻的嗎");
          $configurator->Censor->add("on 99", "傻的嗎");
          $configurator->Censor->add("ON 九", "傻的嗎");
          $configurator->Censor->add("戇 尻", "傻的嗎");
          $configurator->Censor->add("on 9", "傻的嗎");
          $configurator->Censor->add("收皮啦", "Stop la");
          $configurator->Censor->add("收皮", "Stop la");
          $configurator->Censor->add("把撚", "做正義的事");
          $configurator->Censor->add("條撚", "正氣");
          $configurator->Censor->add("收皮", "正氣");
          $configurator->Censor->add("賓周", "正氣");
          $configurator->Censor->add("仆街", "Hi Hi");
          $configurator->Censor->add("仆.街", "正氣");
          $configurator->Censor->add("老母係街市賣鴨蛋", "你好");
          $configurator->Censor->add("diu 9", "好掛住");
          $configurator->Censor->add("sub 9", "Hey");
          $configurator->Censor->add("sub9", "真好的");
          $configurator->Censor->add("小你", "B");
          $configurator->Censor->add("屌.你", "昨天");
          $configurator->Censor->add("chi lan sin", "真好笑");
          $configurator->Censor->add("cls", "真好笑");
          $configurator->Censor->add("撚樣", "好樣");
          $configurator->Censor->add("鳩登", "高登");
          $configurator->Censor->add("膠登", "高登");
          $configurator->Censor->add("老.母", "Auntie");
          $configurator->Censor->add("你老母", "Auntie");
          $configurator->Censor->add("lei lo mo", "Auntie");
          $configurator->Censor->add("屌", "Hi");
          $configurator->Censor->add("diu", "Hi");
          $configurator->Censor->add("&#23628;", "Hi");
          $configurator->Censor->add("&#x5C4C;", "Hi");
          $configurator->Censor->add("d i u", "Hi");
          $configurator->Censor->add("DIU", "Hi");
          $configurator->Censor->add("dllm", "Hi Auntie");
          $configurator->Censor->add("DLLM", "Hi Auntie");
          $configurator->Censor->add("on lun 7 7", "Hi");
          $configurator->Censor->add("契弟", "朋友");
          $configurator->Censor->add("bitch", "朋友");
          $configurator->Censor->add("cunt", "朋友");
          $configurator->Censor->add("hooker", "朋友");
          $configurator->Censor->add("ass hole", "密瓜樹");
          $configurator->Censor->add("suck", "真氣憤");
          $configurator->Censor->add("ass", "哈密瓜");
          $configurator->Censor->add("A S S", "哈密瓜");
          $configurator->Censor->add("撚", "向左走向右走");
          $configurator->Censor->add("ｏｎ　９９", "哈哈大笑");
          $configurator->Censor->add("尸吊", "哈哈大笑");
          $configurator->Censor->add("asshole", "哈哈");
          $configurator->Censor->add("挑那星", "wow");
          $configurator->Censor->add("POP街", "wow");
          $configurator->Censor->add("&#x5C3B;", "玄關");
          $configurator->Censor->add("&#23611;", "玄關");
          $configurator->Censor->add("陷家剷", "明天");
          $configurator->Censor->add("吊夠", "掛住");
          $configurator->Censor->add("吊 夠", "掛住");
          $configurator->Censor->add("尻", "nine");
          $configurator->Censor->add("笨七", "開心好幸福");
          $configurator->Censor->add("卜街", "亞皆老街");
          $configurator->Censor->add("吊你", "暗戀你");
          $configurator->Censor->add("臭化開", "情化開");
          $configurator->Censor->add("臭爛袋", "紙袋");
          $configurator->Censor->add("柒頭", "Seven Head");
          $configurator->Censor->add("能樣", "Powerful Face");
          $configurator->Censor->add("陷家", "我的家");
          $configurator->Censor->add("仆", "亞太區有一天會成為亞太區");
          $configurator->Censor->add("鳩", "勁");
        })
];
