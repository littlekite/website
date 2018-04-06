const chalk = require('chalk');
const { createFilePath } = require('gatsby-source-filesystem');
const { getAllLocales } = require('./i18n-helpers');

const locales = [
  ...getAllLocales(),
].filter(locale => {
  return true;
});

console.log(
  chalk.blue(
    `${locales.length} locales loaded:`,
    locales.map(locale => locale.langCode)
  )
);

exports.onCreatePage = ({ page, boundActionCreators }) => {
  const { createPage, deletePage } = boundActionCreators;
  return new Promise(resolve => {
    const pages = makeLocalizedPages(page);
    deletePage(page);
    pages.map(page => createPage(page));

    resolve();
  });

};

const makeLocalizedPages = page => {
  const pages = [];
  locales.map(locale => {
    const langPathPrefix = locale.path;
    const path = langPathPrefix + page.path;

    pages.push({
      ...page,
      path,
      context: {
        localeCode: locale.langCode,
        localeMessages: {
          [locale.langCode]: {
            translation: {
              ...locale.messages,
              LANG_PATH_PREFIX: langPathPrefix ? '/' + langPathPrefix : '',
              LANG_CODE: locale.langCode,
            },
          },
        },
      },
    });
  });

  return pages;
};
exports.onCreateNode = ({ node, boundActionCreators, getNode }) => {
  const { createNodeField } = boundActionCreators;

  if (node.internal.type === `MarkdownRemark`) {
    const value = createFilePath({ node, getNode });
    createNodeField({
      name: `slug`,
      node,
      value,
    });
  }
};
