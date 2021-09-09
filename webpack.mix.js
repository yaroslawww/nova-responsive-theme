const mix = require('laravel-mix');
const fs = require('fs');

// Disable mix-manifest.json
Mix.manifest.refresh = (_) => void 0;

mix.setPublicPath('dist');
// mix.disableNotifications();
mix.disableSuccessNotifications();

mix.js('resources/js/theme.js', 'dist/js');

mix.sass('resources/scss/hamburger.scss', 'css')
  .sass('resources/scss/responsive.scss', 'css')
  .sass('resources/scss/theme.scss', 'css')
  .options({
    processCssUrls: false,
  });

if (mix.inProduction()) {
  const fs = require('fs');
  const configFile = './config/nova-responsive-theme.php';
  let result = fs.readFileSync(configFile, 'utf8');
  result = result.replace(/(['"]version['"]\s*=>\s*['"])([^'"]*)(['"])/g, `$1${process.env.npm_package_version}$3`);

  fs.writeFileSync(configFile, result, 'utf8');
}
