/* eslint-env node */
require("@rushstack/eslint-patch/modern-module-resolution");

module.exports = {
  root: true,
  env: {
    node: true,
    "vue/setup-compiler-macros": true
  },
  plugins: ["simple-import-sort", "@typescript-eslint"],
  extends: [
    "plugin:import/recommended",
    "eslint:recommended",
    "plugin:@typescript-eslint/eslint-recommended",
    "plugin:@typescript-eslint/recommended",
    "plugin:vue/vue3-recommended",
    "@vue/prettier",
    "@vue/typescript"
  ],
  rules: {
    "simple-import-sort/imports": "warn",
    "simple-import-sort/exports": "warn",
    "no-duplicate-imports": "warn",
    "no-restricted-imports": [
      "warn",
      {
        patterns: ["../*", "./*/"]
      }
    ],
    "no-unused-vars": "off",
    "@typescript-eslint/no-unused-vars": ["warn"],
    "vue/no-unused-components": "warn",
    "vue/no-v-html": "off",
    "vue/v-on-function-call": ["warn", "always"],
    "vue/eqeqeq": ["warn", "always"],
    eqeqeq: ["warn", "always"],
    "linebreak-style": ["error", "unix"],
    "@typescript-eslint/array-type": [
      "error",
      {
        default: "array"
      }
    ],
    "import/extensions": [
      "error",
      "ignorePackages",
      {
        js: "never",
        ts: "never",
        json: "always"
      }
    ]
  },
  overrides: [
    {
      // Disable `explicit-module-boundary-types` rule for composables
      files: ["src/common/composables/**/use-*.ts"],
      rules: {
        "@typescript-eslint/explicit-module-boundary-types": "off"
      }
    }
  ],

  settings: {
    "import/resolver": {
      typescript: {},
      "eslint-import-resolver-custom-alias": {
        alias: {
          "@": "./src"
        }
      }
    },
    "vue-i18n": {
      localeDir: "./src/i18n/locales/*.json"
    }
  },
  parserOptions: {
    parser: "@typescript-eslint/parser"
  }
};
