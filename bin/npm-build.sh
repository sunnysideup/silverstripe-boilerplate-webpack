cd ..
cd themes/sswebpack_engine_only/
npm install
npm run build --theme_dir=themes/base
cd -
sudo rm public/cache -rf
sudo rm themes/base/dist/*.gz -rf
sudo rm themes/base/dist/*.map -rf
gzip themes/base/dist/app.css themes/base/dist/app.css.gz
gzip themes/base/dist/app.js themes/base/dist/app.js.gz
gzip themes/base/dist/vendors~app.js themes/base/dist/vendors~app.js.gz

find . -name "*.orig" -exec rm "{}" \;


git add . -A
git commit . -m "MINOR: build"
git push
cd -
