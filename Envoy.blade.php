@setup
$server = "165.227.150.93";
$userAndServer = 'forge@'. $server;
$repository = "fullstackeurope/fullstackeurope.com";
$baseDir = "/home/forge/fullstackeurope.com";
$releasesDir = "{$baseDir}/releases";
$persistentDir = "{$baseDir}/persistent";
$currentDir = "{$baseDir}/current";
$newReleaseName = date('Ymd-His');
$newReleaseDir = "{$releasesDir}/{$newReleaseName}";
$user = get_current_user();

function logMessage($message) {
return "echo '\033[32m" .$message. "\033[0m';\n";
}
@endsetup

@servers(['local' => '127.0.0.1', 'remote' => $userAndServer])

@macro('deploy')
startDeployment
cloneRepository
runComposer
runNPM
generateAssets
updateSymlinks
optimizeInstallation
backupDatabase
migrateDatabase
blessNewRelease
cleanOldReleases
finishDeploy
@endmacro

@macro('deploy-code')
deployOnlyCode
@endmacro

@task('startDeployment', ['on' => 'local'])
{{ logMessage("🏃  Starting deployment…") }}
git checkout laravel
git pull origin laravel
@endtask

@task('cloneRepository', ['on' => 'remote'])
{{ logMessage("🌀  Cloning repository…") }}
[ -d {{ $releasesDir }} ] || mkdir {{ $releasesDir }};
[ -d {{ $persistentDir }} ] || mkdir {{ $persistentDir }};
[ -d {{ $persistentDir }}/uploads ] || mkdir {{ $persistentDir }}/uploads;
[ -d {{ $persistentDir }}/storage ] || mkdir {{ $persistentDir }}/storage;
cd {{ $releasesDir }};

# Create the release dir
mkdir {{ $newReleaseDir }};

# Clone the repo
git clone --depth 1 git@github.com:{{ $repository }}.git {{ $newReleaseName }}

# Configure sparse checkout
cd {{ $newReleaseDir }}
git checkout laravel
git config core.sparsecheckout true
echo "*" > .git/info/sparse-checkout
echo "!storage" >> .git/info/sparse-checkout
echo "!public/build" >> .git/info/sparse-checkout
git read-tree -mu HEAD

# Mark release
cd {{ $newReleaseDir }}
echo "{{ $newReleaseName }}" > public/release-name.txt
@endtask

@task('runComposer', ['on' => 'remote'])
cd {{ $newReleaseDir }};
{{ logMessage("🚚  Running Composer…") }}
ln -nfs {{ $baseDir }}/auth.json auth.json;
composer install --prefer-dist --no-scripts --no-dev -q -o;
php artisan nova:publish
@endtask

@task('runNPM', ['on' => 'remote'])
{{ logMessage("📦  Running NPM…") }}
cd {{ $newReleaseDir }};
npm ci
@endtask

@task('generateAssets', ['on' => 'remote'])
{{ logMessage("🌅  Generating assets…") }}
cd {{ $newReleaseDir }};
npm run production -- --progress false
@endtask

@task('updateSymlinks', ['on' => 'remote'])
{{ logMessage("🔗  Updating symlinks to persistent data…") }}
# Remove the storage directory and replace with persistent data
rm -rf {{ $newReleaseDir }}/storage;
cd {{ $newReleaseDir }};
ln -nfs {{ $baseDir }}/persistent/storage storage;

# Remove the public/uploads directory and replace with persistent data
rm -rf {{ $newReleaseDir }}/public/uploads;
cd {{ $newReleaseDir }};
ln -nfs {{ $baseDir }}/persistent/uploads public/uploads;

# Import the environment config
cd {{ $newReleaseDir }};
ln -nfs {{ $baseDir }}/.env .env;

# Symlink the persistent fonts to the public directory
cd {{ $baseDir }}/persistent/fonts
git pull origin laravel
ln -nfs {{ $baseDir }}/persistent/fonts {{ $newReleaseDir }}/public/fonts;

@endtask

@task('optimizeInstallation', ['on' => 'remote'])
{{ logMessage("✨  Optimizing installation…") }}
cd {{ $newReleaseDir }};
php artisan clear-compiled;
@endtask

@task('backupDatabase', ['on' => 'remote'])
{{ logMessage("📀  Backing up database…") }}
cd {{ $newReleaseDir }}
php artisan backup:run
@endtask

@task('migrateDatabase', ['on' => 'remote'])
{{ logMessage("🙈  Migrating database…") }}
cd {{ $newReleaseDir }};
php artisan migrate --force;
@endtask

@task('blessNewRelease', ['on' => 'remote'])
{{ logMessage("🙏  Blessing new release…") }}
ln -nfs {{ $newReleaseDir }} {{ $currentDir }};
cd {{ $newReleaseDir }}
{{--php artisan horizon:terminate--}}
php artisan config:clear
php artisan view:clear
php artisan cache:clear
php artisan config:cache
{{--php artisan responsecache:clear--}}

sudo service php7.4-fpm restart
sudo supervisorctl restart all
@endtask

@task('cleanOldReleases', ['on' => 'remote'])
{{ logMessage("🚾  Cleaning up old releases…") }}
# Delete all but the 5 most recent.
cd {{ $releasesDir }}
ls -dt {{ $releasesDir }}/* | tail -n +6 | xargs -d "\n" sudo chown -R forge .;
ls -dt {{ $releasesDir }}/* | tail -n +6 | xargs -d "\n" rm -rf;
@endtask

@task('finishDeploy', ['on' => 'local'])
{{ logMessage("🚀  Application deployed!") }}
@endtask

@task('deployOnlyCode',['on' => 'remote'])
{{ logMessage("💻  Deploying code changes…") }}
cd {{ $currentDir }}
git pull origin laravel
php artisan config:clear
php artisan view:clear
php artisan cache:clear
php artisan config:cache
{{--php artisan responsecache:clear--}}
sudo supervisorctl restart all
sudo service php7.4-fpm restart
@endtask
