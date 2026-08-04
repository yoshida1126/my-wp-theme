# ポートフォリオサイト（WordPress自作テーマ）

WordPressの自作テーマのコードを管理するリポジトリです。

## 💡 プロジェクト概要
- サイトURL: https://www.kodai-yoshida.dev/
- 目的: 自身のポートフォリオおよび技術スタックの提示

## 🛠 技術スタック / 開発環境
- WordPress (Local WP)
- PHP / HTML5 / CSS3 (Sass) / JavaScript
- Git / GitHub

## 🏗 ディレクトリ構成とGit管理の工夫
Rails開発（学習）で培ったCircleCIの知識を応用し、本プロジェクトではGitHub Actionsによる本番サーバーへのデプロイを完全自動化しています。

- 運用の効率化とリポジトリの軽量化のため、公式プラグイン（`plugins/`）や画像（`uploads/`）は `.gitignore` で除外。
- 自身が実装した `themes/` フォルダのみをバージョン管理しています。
