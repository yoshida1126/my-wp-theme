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
- 運用の効率化とリポジトリの軽量化のため、公式プラグイン（`plugins/`）や画像（`uploads/`）は `.gitignore` で除外。
- 自身が実装した `themes/` フォルダのみをバージョン管理しています。

## 🚀 今後の機能追加
- RailsでのWebアプリケーション開発経験、およびCircleCIでのCI/CD構築経験を活かし、本プロジェクトでもGitHub Actionsを用いた本番サーバーへの「自動デプロイ（CD環境）」の構築を予定しています。