const { alias } = require("react-app-rewire-alias");

module.exports = function override(config) {
  alias({
    "@utils": "src/utils",
    "@constants": "src/constants",
    "@pages": "src/pages",
    "@components": "src/components",
    "@routes": "src/routes",
    "@type": "src/type",
    "@UI": "src/UI",
  })(config);

  return config;
};
