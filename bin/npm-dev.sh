cd ..
rm public/cache -rf
sudo rm themes/base/dist/*.gz -rf
cd themes/sswebpack_engine_only/
npm run dev --theme-dir=themes/base
