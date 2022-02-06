const npsUtils = require('nps-utils');

const editions = ['2019', '2021', '2022'];

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

scripts['setup'] = npsUtils.concurrent.nps('setup:2022');
scripts['dev'] = npsUtils.concurrent.nps('dev:2022');
scripts['development'] = npsUtils.concurrent.nps('dev:2022');
scripts['watch'] = npsUtils.concurrent.nps('watch:2022');
scripts['hot'] = npsUtils.concurrent.nps('hot:2022');
scripts['prod'] = npsUtils.concurrent.nps('prod:2022');
scripts['production'] = npsUtils.concurrent.nps('prod:2022');

module.exports = {
    scripts: scripts,
};
