rm public/cache -rf
sudo rm themes/base/dist/*.gz -rf
cd themes/sswebpack_engine_only/
npm install
npm run watch --theme-dir=themes/base
