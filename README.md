# ポートフォリオサイト（WordPress自作テーマ）
<img width="1280" height="678" alt="Image" src="https://github.com/user-attachments/assets/d2168bf3-3d32-463a-afe4-5dd99d6752dd" />

WordPressの自作テーマのコードを管理するリポジトリです。

## 💡 プロジェクト概要
- サイトURL: https://www.kodai-yoshida.dev/
- 目的: 自身のポートフォリオおよび技術スタックの提示

## 🛠 技術スタック / 開発環境
- WordPress (Local WP)
- PHP / HTML5 / CSS3 (Sass) / JavaScript
- Git / GitHub

## 🔌 使用したプラグイン
- Advanced Custom Fields
- Custom Post Type UI
- Contact Form 7
- LiteSpeed Cache
- WP Multibyte Patch
- WP-SCSS

## 🏗 ディレクトリ構成とGit管理の工夫
Rails開発（学習）で培ったCircleCIの知識を応用し、本プロジェクトではGitHub Actionsによる本番サーバーへのデプロイを完全自動化しています。

- 運用の効率化とリポジトリの軽量化のため、公式プラグイン（`plugins/`）や画像（`uploads/`）は `.gitignore` で除外。
- 自身が実装した `themes/` フォルダのみをバージョン管理しています。


## 地鶏割烹IRORI（飲食店のホームページを想定したサイト）
<img width="1280" height="678" alt="Image" src="https://github.com/user-attachments/assets/bd613727-0568-4770-9d98-10132b5cdf03" />

## 💡 プロジェクト概要
- サイトURL: https://zidorikappou-irori.kodai-yoshida.dev/
- コーディング課題参照ページURL: https://codage.studio-lapin.jp/
- 目的: 店舗の「WEB予約機能」の実装と、専門知識のないクライアントでも「メニュー」や「お知らせ」を簡単に更新・管理できる運用性の高いサイト構築を目的としています。

## 🛠 技術スタック / 開発環境
- WordPress (Local WP)
- PHP / HTML5 / CSS3 (Sass) / JavaScript
- Git / GitHub

## 🔌 使用したプラグイン
- Advanced Custom Fields
- Custom Post Type UI
- LiteSpeed Cache
- WP Multibyte Patch
- WP-SCSS
- Booking Package

## 管理画面の運用においての工夫
メニュー（お品書き）の更新において、Webの知識がないクライアントでも直感的に操作できるよう、Advanced Custom Fields（ACF）を活用した設計を行いました。

- 課題と設計の意図：
当初は「メインメニュー」と「おすすめメニュー」で投稿タイプを分けることを検討しました。しかし、管理画面上で更新箇所がバラバラになると運用の負荷（迷い・ミス）が高くなると判断しました。

- 解決策：
同一の投稿タイプに統合し、選択肢の「メイン」「おすすめ」の切り替えに応じて、ACFの条件分岐機能で必要な入力項目のみが動的に表示される設計にしました。

【実際の管理画面の操作イメージ】

<img width="360" height="240" alt="Image" src="https://github.com/user-attachments/assets/0786b4ce-d718-499e-bbc7-bbbdb25f9e6d" />
<br>
▲ メインを選択すると、入力必須項目が追加表示されます
<br>
▼ このように反映されます
<img width="1077" height="454" alt="Image" src="https://github.com/user-attachments/assets/ae0464c4-a11e-4cda-86f9-3ec79afad504" />

<img width="360" height="240" alt="Image" src="https://github.com/user-attachments/assets/ec1022d2-6669-4349-ba2a-06560b40577a" />
<br>
▲ おすすめを選択すると、追加入力する項目は表示されません
<br>
▼ このように反映されます
<img width="908" height="270" alt="Image" src="https://github.com/user-attachments/assets/62e970f2-457e-4c0b-9f70-c04cd0fedc92" />


## そらデンタルクリニック（歯科医院を想定したサイト）
<img width="1280" height="678" alt="Image" src="https://github.com/user-attachments/assets/900c354e-ab97-40fa-8a4c-fe7d31e5c4b5" />

## 💡 プロジェクト概要
- サイトURL: https://sora-dental-clinic.kodai-yoshida.dev/
- コーディング課題参照ページURL: https://codage.studio-lapin.jp/
- 目的: クライアントがお知らせを更新したり、サイト訪問者がWEB予約をするためのサイト

## 🛠 技術スタック / 開発環境
- WordPress (Local WP)
- PHP / HTML5 / CSS3 (Sass) / JavaScript
- Git / GitHub

## 🔌 使用したプラグイン
- Advanced Custom Fields
- Custom Post Type UI
- LiteSpeed Cache
- WP Multibyte Patch
- WP-SCSS
- Booking Package

## 仕様の変更・独自機能の追加（実務を想定したアプローチ）
本作品はコーディング課題の静的デザインをベースに制作していますが、「実際の歯科医院の運用と、患者様の利便性」を考慮し、元の仕様にはなかった以下の機能を独自に設計・追加実装いたしました。

- お知らせのアーカイブページの追加
追加の理由：
 元の課題デザインではトップページのお知らせ表示のみでした。しかし実務においては、「昨年の年末年始の休診スケジュール」などを患者様が後から確認するニーズが高いと考え、独自にアーカイブページおよび月別絞り込み機能を実装しました。

- プラグインを活用した「WEB予約システム」の新規導入
追加の理由：
 歯科医院サイトのゴールは「新患・再診の獲得（Web予約）」です。単なる情報発信サイトで終わらせず、実案件を想定した成果に繋げるため、カレンダーから直感的に日時を選んで予約完了まで完結できるシステムを独自に統合しました。


## travel note（旅ブログを想定した記事サイト）
<img width="1279" height="678" alt="Image" src="https://github.com/user-attachments/assets/3a8487ad-d33d-4d18-b993-c061e7d07e44" />

## 💡 プロジェクト概要
- サイトURL: https://travel-note.kodai-yoshida.dev/
- コーディング課題参照ページURL: https://codage.studio-lapin.jp/
- 目的: クライアントが旅ブログ記事を載せるためのサイト

## 🛠 技術スタック / 開発環境
- WordPress (Local WP)
- PHP / HTML5 / CSS3 (Sass) / JavaScript
- Git / GitHub

## 🔌 使用したプラグイン
- Advanced Custom Fields
- Custom Post Type UI
- LiteSpeed Cache
- WP Multibyte Patch
- WP-SCSS

## 管理画面の運用においての工夫
記事作成時の表示イメージとの差異を減らすため、管理画面のエディタにサイト本体と同じフォントやカラー設定を適用し、編集体験の向上を図りました。