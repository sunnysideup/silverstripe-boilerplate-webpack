cd ..
cd themes/sswebpack_engine_only/ && npm run build --theme_dir=themes/base && cd - && git add . -A && git commit . -m "WIP" && git push
cd themes/base &&  git add . -A && git commit . -m "WIP" && git push && cd -
