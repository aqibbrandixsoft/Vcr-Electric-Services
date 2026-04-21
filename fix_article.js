const fs = require('fs');
const path = require('path');

const targetPath = 'how-often-does-a-house-need-rewiring.html';
const templatePath = 'how-often-should-you-get-an-eicr-certificate.html';

const targetHTML = fs.readFileSync(targetPath, 'utf8');
const templateHTML = fs.readFileSync(templatePath, 'utf8');

// The block containing title, meta description, og:tags, canonical, etc.
const metaStartMarker = '<title>';
const metaEndMarker = '<meta content="width=device-width';

const metaStartIndexTarget = targetHTML.indexOf(metaStartMarker);
const metaEndIndexTarget = targetHTML.indexOf(metaEndMarker);
const metaChunkTarget = targetHTML.substring(metaStartIndexTarget, metaEndIndexTarget);

const metaStartIndexTemplate = templateHTML.indexOf(metaStartMarker);
const metaEndIndexTemplate = templateHTML.indexOf(metaEndMarker);

// The article block
const articleStartMarker = '<article itemscope itemtype=https://schema.org/Article>';
const articleEndMarker = '</article>';

const articleStartIndexTarget = targetHTML.indexOf(articleStartMarker);
const articleEndIndexTarget = targetHTML.indexOf(articleEndMarker) + articleEndMarker.length;
const articleChunkTarget = targetHTML.substring(articleStartIndexTarget, articleEndIndexTarget);

const articleStartIndexTemplate = templateHTML.indexOf(articleStartMarker);
const articleEndIndexTemplate = templateHTML.indexOf(articleEndMarker) + articleEndMarker.length;

// Construct the new HTML
const newHTML = templateHTML.substring(0, metaStartIndexTemplate) +
                metaChunkTarget +
                templateHTML.substring(metaEndIndexTemplate, articleStartIndexTemplate) +
                articleChunkTarget +
                templateHTML.substring(articleEndIndexTemplate);

fs.writeFileSync(targetPath, newHTML, 'utf8');
console.log('Restored correctly!');
