const npsUtils = require('nps-utils');

const editions = ['2019', '2021', '2022', '2023'];

const scripts = {};

editions.forEach((edition) => {
    scripts['setup:' + edition] = `cd resources/${edition} && npm ci`;
    scripts['dev:' + edition] = `cd resources/${edition} && npm run development`;
    scripts['development:' + edition] = `cd resources/${edition} && npm run development`;
    scripts['watch:' + edition] = `cd resources/${edition} && npm run watch`;
    scripts['hot:' + edition] = `cd resources/${edition} && npm run hot`;
    scripts['prod:' + edition] = `cd resources/${edition} && npm run production`;
    scripts['production:' + edition] = `cd resources/${edition} && npm run production`;
});

scripts['setup'] = npsUtils.concurrent.nps('setup:2022', 'setup:2023');
scripts['dev'] = npsUtils.concurrent.nps('dev:2022', 'dev:2023');
scripts['development'] = npsUtils.concurrent.nps('dev:2022', 'dev:2023');
scripts['watch'] = npsUtils.concurrent.nps('watch:2022', 'watch:2023');
scripts['hot'] = npsUtils.concurrent.nps('hot:2022', 'hot:2023');
scripts['prod'] = npsUtils.concurrent.nps('prod:2022', 'prod:2023');
scripts['production'] = npsUtils.concurrent.nps('prod:2022', 'prod:2023');

module.exports = {
    scripts: scripts,
};
